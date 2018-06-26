<?php

declare(strict_types=1);

namespace Kerox\HelloWorld;

/**
 * Class HelloWorld.
 */
class HelloWorld
{
    /**
     * Path to the resources folder.
     */
    public const RESOURCES_PATH = __DIR__ . \DIRECTORY_SEPARATOR . '..' . \DIRECTORY_SEPARATOR . 'resources';

    /**
     * Name of the translations folder.
     */
    public const TRANSLATIONS_DIRNAME = 'translations';

    /**
     * Name of the translations file.
     */
    public const TRANSLATIONS_FILENAME = 'hello-world.json';

    /**
     * @var array
     */
    private $translations;

    /**
     * HelloWorld constructor.
     */
    public function __construct()
    {
        $this->loadTranslations();
    }

    /**
     * @param null|string $alpha2
     *
     * @return string
     */
    public function __invoke(?string $alpha2 = 'en')
    {
        $alpha2 = mb_strtolower($alpha2);
        if (!preg_match('/^[a-z]{2}$/', $alpha2)) {
            throw new \InvalidArgumentException('Only ISO 639-1 codes are accepted.');
        }

        return $this->getTranslation($alpha2);
    }

    /**
     * @param string $alpha2
     *
     * @throws \InvalidArgumentException
     *
     * @return string
     */
    private function getTranslation(string $alpha2): string
    {
        $translation = $this->translations[$alpha2] ?? null;
        if ($translation === null) {
            throw new \InvalidArgumentException("The translation for lang $alpha2 does not exist.");
        }

        /* @var string $translation */
        return $translation;
    }

    private function loadTranslations(): void
    {
        $path = self::RESOURCES_PATH . \DIRECTORY_SEPARATOR . self::TRANSLATIONS_DIRNAME . \DIRECTORY_SEPARATOR . self::TRANSLATIONS_FILENAME;

        $this->translations = json_decode(file_get_contents($path), true);
    }
}
