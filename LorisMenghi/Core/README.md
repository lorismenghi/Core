# LorisMenghi Core

**LorisMenghi_Core** is the core module for all Magento 2 extensions by Loris Menghi.  
It adds a dedicated top-level admin menu entry (`lorismenghi.com`) and a shared dashboard page used as the central access point for related extensions.

This module is intentionally lightweight and does **not** implement any business logic by itself.

---

## Features

- Adds a top-level admin menu item: **lorismenghi.com**
- Provides a shared admin dashboard for all LorisMenghi extensions
- Acts as a common dependency for future modules (e.g. COD confirmation via WhatsApp, abandoned cart recovery, shipping tracking notifications)
- No impact on the storefront or checkout performance

---

## Requirements

- PHP: **8.1+**
- Magento Open Source / Adobe Commerce: **2.4.6 – 2.4.7-pX**
- Core dependencies:
  - `magento/framework`
  - `magento/module-backend`

---

## Installation

Install via Composer:

```bash
composer require lorismenghi/module-core
bin/magento module:enable LorisMenghi_Core
bin/magento setup:upgrade
bin/magento cache:flush

