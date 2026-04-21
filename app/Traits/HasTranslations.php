<?php

namespace App\Traits;

trait HasTranslations
{
    /**
     * Get a translated attribute value.
     * Falls back to the base attribute if the locale-specific one is empty.
     */
    public function trans(string $attribute): ?string
    {
        $locale = app()->getLocale();

        if ($locale === 'ar') {
            return $this->getAttribute("{$attribute}_ar") ?: $this->getAttribute($attribute);
        }

        return $this->getAttribute($attribute) ?: $this->getAttribute("{$attribute}_ar");
    }
}
