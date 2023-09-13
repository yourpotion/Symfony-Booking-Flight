<?php

namespace App;

use HWI\Bundle\OAuthBundle\OAuth\ResourceOwner\GenericOAuth2ResourceOwner;
use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Auth0ResourceOwner extends GenericOAuth2ResourceOwner
{
    protected array $paths = array(
        'id' => 'id',
        'nickname' => 'nickname',
        'realname' => 'name',
        'email' => 'email',
        'profilepicture' => 'picture',
    );


    /**
     * @param mixed $redirectUri
     * @param array $extraParameters
     * 
     * @return string
     */
    public function getAuthorizationUrl($redirectUri, array $extraParameters = array()): string
    {
        return parent::getAuthorizationUrl($redirectUri, array_merge(array(
            'audience' => $this->options['audience'],
        ), $extraParameters));
    }

    /**
     * @param OptionsResolver $resolver
     * 
     * @return void
     */
    protected function configureOptions(OptionsResolver $resolver): void
    {
        parent::configureOptions($resolver);

        $resolver->setDefaults(array(
            'authorization_url' => '{base_url}/authorize',
            'access_token_url' => '{base_url}/oauth/token',
            'infos_url' => '{base_url}/userinfo',
            'audience' => '{base_url}/userinfo',
        ));

        $resolver->setRequired(array(
            'base_url',
        ));

        $normalizer = function (Options $options, $value) {
            return str_replace('{base_url}', $options['base_url'], $value);
        };

        $resolver->setNormalizer('authorization_url', $normalizer);
        $resolver->setNormalizer('access_token_url', $normalizer);
        $resolver->setNormalizer('infos_url', $normalizer);
        $resolver->setNormalizer('audience', $normalizer);
    }
}
