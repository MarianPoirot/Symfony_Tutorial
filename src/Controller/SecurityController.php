<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Scheb\TwoFactorBundle\Security\TwoFactor\Provider\Totp\TotpAuthenticatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    #[Route('/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        return $this->render('security/login.html.twig', [
            'error' => $authenticationUtils->getLastAuthenticationError(),
        ]);
    }

    #[Route('/logout', name: 'app_logout')]
    public function logout(): Response
    {
        throw new \Exception('logout() should never be reached');
    }

    #[Route('/authenticate/2fa/enable', name: 'app_2fa_enable')]
    public function enable2fa(TotpAuthenticatorInterface $totpAuthenticator, EntityManagerInterface $entityManager){
        $this->denyAccessUnlessGranted("IS_AUTHENTICATED_FULLY");

        $user = $this->getUser();
        if (!$user->isTotpAuthenticationEnabled()){
            $user->setTotpSecret($totpAuthenticator->generateSecret());
            $entityManager->flush();
        }

        dd($user);
    }
}
