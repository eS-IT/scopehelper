# Scopehelper


## Beschreibung

Bei dieser Software handelt es sich um eine Erweiterung für das Open Source CMS Contao. Sie stellt eine Möglichkeit
zur Verfügung, um zwischen Frontend und Backend zu unterscheiden.


## Autor

__e@sy Solutions IT:__ Patrick Froch <info@easySolutionsIT.de>


## Voraussetzungen

- php: ^8.2
- contao/core-bundle:^4.13


## Installation

Es kann einfach die Datei des Releases aus dem Repository in den Contao Manager gezogen werden.


## Einrichtung

Diese Erweiterung benötigt keine Einrichtung.

## Verwendung

Der ScopeHelper kann z. B. in Inhaltselemente verwendet werden, um zwischen Frontent und Backend zu unterscheiden:

```php
<?php

declare(strict_types=1);

namespace Esit\Imageport\Classes\Contao\Elements;

use Contao\ContentElement;
use Contao\System;
use Esit\Scopehelper\Classes\Services\Helper\ScopeHelper;

class ContentTestElement extends ContentElement
{
    // ...

    protected function compile(): void
    {
        $scopeHelper = System::getContainer()->get(ScopeHelper::class);

        if (true === $scopeHelper?->isBackend()) {
            // Ausgabe für das Backend
        } else {
            // Ausgabe für das Frontend
        }
    }
}
```
