# Magento 2.4 Module SomeDemo SomeList

    ``somedemo/module-somelist``




## Main Functionalities
THE SOFTWARE IS PROVIDED “AS IS”, WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

## Installation
\* = in production please use the `--keep-generated` option

### Type 1: Zip file

 - Unzip the zip file in `app/code/SomeDemo`
 - Enable the module by running `php bin/magento module:enable SomeDemo_SomeList`
 - Apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`

### Type 2: Composer

 - Make the module available in a composer repository for example:
    - private repository `repo.magento.com`
    - public repository `packagist.org`
    - public github repository as vcs
 - Add the composer repository to the configuration by running `composer config repositories.repo.magento.com composer https://repo.magento.com/`
 - Install the module composer by running `composer require somedemo/module-somelist`
 - enable the module by running `php bin/magento module:enable SomeDemo_SomeList`
 - apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`


## Configuration

 - Invoice - payment/invoice/*

 - Freeshipping - carriers/freeshipping/*

 - out_of_stock_label (inventory/options/out_of_stock_label)


## Specifications

 - Cronjob
	- somedemo_somelist_somecronjob

 - Console Command
	- AddItem

 - Payment Method
	- Invoice

 - Crongroup
	- default

 - Widget
	- productStock

 - Model
	- Blog

 - Plugin
	- afterGetPrice - Magento\Catalog\Model\Product > SomeDemo\SomeList\Plugin\Magento\Catalog\Model\Product

 - Cache
	- SomeList - somelist_cache_tag > SomeDemo\SomeList\Model\Cache\SomeList

 - Shipping Method
	- freeshipping

 - Helper
	- SomeDemo\SomeList\Helper\Backup

 - Helper
	- SomeDemo\SomeList\Helper\Import

 - Configuration Type
	- somenode

 - Eav Entity
	- Blog

 - API Endpoint
	- GET - SomeDemo\SomeList\Api\DemoApiGTManagementInterface > SomeDemo\SomeList\Model\DemoApiGTManagement

 - API Endpoint
	- POST - SomeDemo\SomeList\Api\DemoApiPOManagementInterface > SomeDemo\SomeList\Model\DemoApiPOManagement

 - API Endpoint
	- PUT - SomeDemo\SomeList\Api\DemoApiPTManagementInterface > SomeDemo\SomeList\Model\DemoApiPTManagement

 - API Endpoint
	- DELETE - SomeDemo\SomeList\Api\DemoApiDLManagementInterface > SomeDemo\SomeList\Model\DemoApiDLManagement

 - Product Type
	- someproduct

 - ViewModel
	- SomeDemo\SomeList\ViewModel\Product\Breadcrumbs

 - Block
	- Notices > notices.phtml

 - Customer Data Section
	- somecustomer

 - Observer
	- catalog_product_save_after > SomeDemo\SomeList\Observer\Catalog\ProductSaveAfter


## Attributes

 - EAV (custom) - color (color)

 - Category - some_description (some_description)

 - Category - other_description (other_description)

 - Product - color (color)

 - Customer - is_active (is_active)

 - CustomerAddress - is_active (is_active)

 - Company - is_active (is_active)

 - Sales - Order Comment (order_comment)

