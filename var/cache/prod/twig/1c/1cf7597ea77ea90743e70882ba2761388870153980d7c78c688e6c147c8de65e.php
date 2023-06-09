<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__5fc0a3206209249b5eb3109380aafb6e01b2835ebe1c98b697c1a6fd7daa2a76 */
class __TwigTemplate_a47e3f6fd002a3831ee5e0bb39155e6417f2888b303eef1c766fffc57113e0f8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"ru\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Настройки товаров • prestashop</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminPPreferences';
    var iso_user = 'ru';
    var lang_is_rtl = '0';
    var full_language_code = 'ru-ru';
    var full_cldr_language_code = 'ru-RU';
    var country_iso_code = 'TJ';
    var _PS_VERSION_ = '8.0.4';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'В вашем магазине появился новый заказ.';
    var order_number_msg = 'Номер заказа: ';
    var total_msg = 'Всего: ';
    var from_msg = 'С: ';
    var see_order_msg = 'Смотреть заказ';
    var new_customer_msg = 'Новый клиент зарегистрировался в вашем магазине.';
    var customer_name_msg = 'Имя клиента: ';
    var new_msg = 'Новая сообщение было отправлено в ваш магазин.';
    var see_msg = 'Прочитать это сообщение';
    var token = '9d88251cded057f3ff408e44ef735429';
    var token_admin_orders = tokenAdminOrders = '545375c7f0b0f6a72e76142c498b71b7';
    var token_admin_customers = '72d80de1dfd6369743859c5b05a43d39';
    var token_admin_customer_threads = tokenAdminCustomerThreads = '14548dd9b79f803466b65ca3c2902526';
    var currentIndex = 'index.php?controller=AdminPPreferences';
    var employee_token = 'b8732bf877bc63c2be88bb915a0aaa9e';
    var choose_language_translate = 'Выберите язык:';
    var default_language = '1';
    var admin_modules_link = '/admin033bto59aaagtarep4u/index.php/improve/modules/ma";
        // line 41
        echo "nage?_token=-cgzqz4E2m8Mm-I5R9IWaxY1AdY8Jv_qg68Yx5s2AIk';
    var admin_notification_get_link = '/admin033bto59aaagtarep4u/index.php/common/notifications?_token=-cgzqz4E2m8Mm-I5R9IWaxY1AdY8Jv_qg68Yx5s2AIk';
    var admin_notification_push_link = adminNotificationPushLink = '/admin033bto59aaagtarep4u/index.php/common/notifications/ack?_token=-cgzqz4E2m8Mm-I5R9IWaxY1AdY8Jv_qg68Yx5s2AIk';
    var tab_modules_list = '';
    var update_success_msg = 'Успешно обновлено';
    var search_product_msg = 'Искать товар';
  </script>



<link
      rel=\"preload\"
      href=\"/admin033bto59aaagtarep4u/themes/new-theme/public/703cf8f274fbb265d49c6262825780e1.preload.woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/admin033bto59aaagtarep4u/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin033bto59aaagtarep4u/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin033bto59aaagtarep4u\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/admin033bto59aaagtarep4u\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=-cgzqz4E2m8Mm-I5R9IWaxY1AdY8Jv_qg68Yx5s2AIk\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"\\u0415\\u0432\\u0440\\u043e\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"\\u043d\\u0435\\u00a0\\u0447\\u0438\\u0441\\u043b\\u043e\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"numberSymbols\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"\\u043d\\u0435\\u00a0\\u0447\\u0438\\u0441\\u043b\\u043e\"],\"positivePattern\":\"#,##0.00\\";
        // line 68
        echo "u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"\\u043d\\u0435\\u00a0\\u0447\\u0438\\u0441\\u043b\\u043e\"],\"numberSymbols\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"\\u043d\\u0435\\u00a0\\u0447\\u0438\\u0441\\u043b\\u043e\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/admin033bto59aaagtarep4u/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=8.0.4\"></script>
<script type=\"text/javascript\" src=\"/admin033bto59aaagtarep4u/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=8.0.4\"></script>
<script type=\"text/javascript\" src=\"/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin033bto59aaagtarep4u/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF00";
        // line 91
        echo "67',
      textColor: '#FFFFFF',
      notificationGetUrl: '/admin033bto59aaagtarep4u/index.php/common/notifications?_token=-cgzqz4E2m8Mm-I5R9IWaxY1AdY8Jv_qg68Yx5s2AIk',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


";
        // line 103
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-ru adminppreferences\"
  data-base-url=\"/admin033bto59aaagtarep4u/index.php\"  data-token=\"-cgzqz4E2m8Mm-I5R9IWaxY1AdY8Jv_qg68Yx5s2AIk\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/admin033bto59aaagtarep4u/index.php?controller=AdminDashboard&amp;token=56b3b3d6a9b74e8861efdde1683a6ca0\"></a>
      <span id=\"shop_version\">8.0.4</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Быстрый доступ
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/admin033bto59aaagtarep4u/index.php/sell/orders?token=cf725081a89bf3a17fb34c02c2e5cda1\"
                 data-item=\"Заказы\"
      >Заказы</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/admin033bto59aaagtarep4u/index.php/sell/catalog/categories/new?token=cf725081a89bf3a17fb34c02c2e5cda1\"
                 data-item=\"Новая категория\"
      >Новая категория</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/admin033bto59aaagtarep4u/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=a7551864900523d88133881cacb47e4d\"
                 data-item=\"Новый купон\"
      >Новый купон</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/admin033bto59aaagtarep4u/index.php/sell/catalog/products/new?token=cf725081a89bf3a17fb34c02c2e5cda1\"
                 data-item=\"Новый тов�";
        // line 138
        echo "�р\"
      >Новый товар</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/admin033bto59aaagtarep4u/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=b4ccfe9fedbcc5033bf361d5aa8f154f\"
                 data-item=\"Оценка каталога\"
      >Оценка каталога</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/admin033bto59aaagtarep4u/index.php/improve/modules/manage?token=cf725081a89bf3a17fb34c02c2e5cda1\"
                 data-item=\"Установленные модули\"
      >Установленные модули</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"161\"
        data-icon=\"icon-ShopParameters\"
        data-method=\"add\"
        data-url=\"index.php/configure/shop/product-preferences/?_token=-cgzqz4E2m8Mm-I5R9IWaxY1AdY8Jv_qg68Yx5s2AIk\"
        data-post-link=\"http://localhost/admin033bto59aaagtarep4u/index.php?controller=AdminQuickAccesses&token=9a0866c14139b93f8b8a1ee9c513ec87\"
        data-prompt-text=\"Задайте название ярлыка:\"
        data-link=\"Настройки товаров - Список\"
      >
        <i class=\"material-icons\">add_circle</i>
        Add current page to Quick Access
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/admin033bto59aaagtarep4u/index.php?controller=AdminQuickAccesses&token=9a0866c14139b93f8b8a1ee9c513ec87\">
      <i class=\"material-icons\">settings</i>
      Manage your quick accesses
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/admin";
        // line 176
        echo "033bto59aaagtarep4u/index.php?controller=AdminSearch&amp;token=3b7e5c31a92583f576ed196f69b68c01\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Поиск (например, артикул, имя пользователя...)\" aria-label=\"Searchbar\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Везде
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Везде\" href=\"#\" data-value=\"0\" data-placeholder=\"Что вы ищете?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Везде</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Каталог\" href=\"#\" data-value=\"1\" data-placeholder=\"Product name, reference, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Каталог</a>
        <a class=\"dropdown-item\" data-item=\"Клиенты по имени\" href=\"#\" data-value=\"2\" data-placeholder=\"Имя\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Клиенты по имени</a>
        <a class=\"dropdown-item\" data-item=\"Клиенты по IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Клиенты по IP-адресу</a>
        <a class=\"dropdown-item\" data-item=\"Заказы\" href=\"#\" data-value=\"3\" data-placeholder=\"№ заказа\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Заказы</a>
        <a class=\"dropdown-item\" data-item=\"По счетам\" href=\"#\" data-value=\"4\" data-placeholder=\"Номер счёта\" d";
        // line 192
        echo "ata-icon=\"icon-book\"><i class=\"material-icons\">book</i> По счетам</a>
        <a class=\"dropdown-item\" data-item=\"Корзины\" href=\"#\" data-value=\"5\" data-placeholder=\"ID Корзины\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Корзины</a>
        <a class=\"dropdown-item\" data-item=\"Модули\" href=\"#\" data-value=\"7\" data-placeholder=\"Название модуля\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Модули</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">Поиск</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Отмена</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Быстрый доступ</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/admin033bto59aaagtarep4u/index.php/sell/orders?token=cf725081a89bf3a17fb34c02c2e5cda1\"
             data-item=\"Заказы\"
    >Заказы</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/admin033bto59aaagtarep4u/index.php/sell/catalog/categories/new?token=cf725081a89bf3a17fb34c02c2e5cda1\"
             data-item=\"Новая категория\"
    >Новая категория</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/admin033bto59aaagtarep4u/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=a7551864900523d88133881cacb47e4d\"
             data-item=\"Новый купон\"
    >Новый купон</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/admin033bto59aaagtarep4u/index.php/sell/catalog/produc";
        // line 226
        echo "ts/new?token=cf725081a89bf3a17fb34c02c2e5cda1\"
             data-item=\"Новый товар\"
    >Новый товар</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/admin033bto59aaagtarep4u/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=b4ccfe9fedbcc5033bf361d5aa8f154f\"
             data-item=\"Оценка каталога\"
    >Оценка каталога</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/admin033bto59aaagtarep4u/index.php/improve/modules/manage?token=cf725081a89bf3a17fb34c02c2e5cda1\"
             data-item=\"Установленные модули\"
    >Установленные модули</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"51\"
      data-icon=\"icon-ShopParameters\"
      data-method=\"add\"
      data-url=\"index.php/configure/shop/product-preferences/?_token=-cgzqz4E2m8Mm-I5R9IWaxY1AdY8Jv_qg68Yx5s2AIk\"
      data-post-link=\"http://localhost/admin033bto59aaagtarep4u/index.php?controller=AdminQuickAccesses&token=9a0866c14139b93f8b8a1ee9c513ec87\"
      data-prompt-text=\"Задайте название ярлыка:\"
      data-link=\"Настройки товаров - Список\"
    >
      <i class=\"material-icons\">add_circle</i>
      Add current page to Quick Access
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/admin033bto59aaagtarep4u/index.php?controller=AdminQuickAccesses&token=9a0866c14139b93f8b8a1ee9c513ec87\">
    <i class=\"material-icons\">settings</i>
    Manage your quick accesses
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/";
        // line 267
        echo "\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Перейти в магазин</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Заказы<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Клиенты<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Сообщения<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"t";
        // line 322
        echo "ab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Сейчас нет новых заказов :(<br>
              Вы проверяли &lt;strong&gt;&lt;a href=\"http://localhost/admin033bto59aaagtarep4u/index.php?controller=AdminCarts&amp;action=filterOnlyAbandonedCarts&amp;token=7c7057ddc1b63aa76773382df658e0ee\"&gt;брошенные корзины&lt;/a&gt;&lt;/strong&gt;?&lt;br&gt;Ваш следующий заказ может скрываться там!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Пока нет новых клиентов :(<br>
              Были ли вы активны в соцсетях в эти дни?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Пока нет сообщений.<br>
              Видимо, все ваши клиенты счастливы :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      c <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - зарегистрировано <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"";
        // line 362
        echo "message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost/img/pr/default.jpg\" alt=\"Naimjon\" /></span>
        <span class=\"employee_profile\">С возвращением, Naimjon</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/admin033bto59aaagtarep4u/index.php/configure/advanced/employees/1/edit?_token=-cgzqz4E2m8Mm-I5R9IWaxY1AdY8Jv_qg68Yx5s2AIk\">
      <i class=\"material-icons\">edit</i>
      <span>Ваш профиль</span>
    </a>
    </div>

    <p class=\"divider\"></p>

    
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/admin033bto59aaagtarep4u/index.php?controller=AdminLogin&amp;logout=1&amp;token=a046deee903dbd77bc32e09fa483b354\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Выход</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/admin033bto59aaagtarep4u/index.php/configure/advanced/employees/toggle-navigation?_token=-cgzqz4E2m8Mm-I5R9IWaxY1AdY8Jv_qg68Yx5s2AIk\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-";
        // line 407
        echo "flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/admin033bto59aaagtarep4u/index.php?controller=AdminDashboard&amp;token=56b3b3d6a9b74e8861efdde1683a6ca0\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.0.4</span>
      </div>

      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://localhost/admin033bto59aaagtarep4u/index.php?controller=AdminDashboard&amp;token=56b3b3d6a9b74e8861efdde1683a6ca0\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Пульт</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Продажа</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/admin033bto59aaagtarep4u/index.php/sell/orders/?_token=-cgzqz4E2m8Mm-I5R9IWaxY1AdY8Jv_qg68Yx5s2AIk\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Заказы
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3";
        // line 450
        echo "\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/admin033bto59aaagtarep4u/index.php/sell/orders/?_token=-cgzqz4E2m8Mm-I5R9IWaxY1AdY8Jv_qg68Yx5s2AIk\" class=\"link\"> Заказы
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/admin033bto59aaagtarep4u/index.php/sell/orders/invoices/?_token=-cgzqz4E2m8Mm-I5R9IWaxY1AdY8Jv_qg68Yx5s2AIk\" class=\"link\"> По счетам
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/admin033bto59aaagtarep4u/index.php/sell/orders/credit-slips/?_token=-cgzqz4E2m8Mm-I5R9IWaxY1AdY8Jv_qg68Yx5s2AIk\" class=\"link\"> Платежные квитанции
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/admin033bto59aaagtarep4u/index.php/sell/orders/delivery-slips/?_token=-cg";
        // line 479
        echo "zqz4E2m8Mm-I5R9IWaxY1AdY8Jv_qg68Yx5s2AIk\" class=\"link\"> Транспортные накладные
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/admin033bto59aaagtarep4u/index.php?controller=AdminCarts&amp;token=7c7057ddc1b63aa76773382df658e0ee\" class=\"link\"> Корзины
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/admin033bto59aaagtarep4u/index.php/sell/catalog/products?_token=-cgzqz4E2m8Mm-I5R9IWaxY1AdY8Jv_qg68Yx5s2AIk\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Каталог
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-subme";
        // line 511
        echo "nu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/admin033bto59aaagtarep4u/index.php/sell/catalog/products?_token=-cgzqz4E2m8Mm-I5R9IWaxY1AdY8Jv_qg68Yx5s2AIk\" class=\"link\"> Товары
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/admin033bto59aaagtarep4u/index.php/sell/catalog/categories?_token=-cgzqz4E2m8Mm-I5R9IWaxY1AdY8Jv_qg68Yx5s2AIk\" class=\"link\"> Категории
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/admin033bto59aaagtarep4u/index.php/sell/catalog/monitoring/?_token=-cgzqz4E2m8Mm-I5R9IWaxY1AdY8Jv_qg68Yx5s2AIk\" class=\"link\"> Мониторинг
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/admin033bto59aaagtarep4u/index.php?controller=AdminAttributesGroups&amp;token=650c7ea639077555056bea0bf06c0c64\" class=\"link\"> Атрибуты и характеристики
                                </a>
                              </li>

                                       ";
        // line 540
        echo "                                           
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/admin033bto59aaagtarep4u/index.php/sell/catalog/brands/?_token=-cgzqz4E2m8Mm-I5R9IWaxY1AdY8Jv_qg68Yx5s2AIk\" class=\"link\"> Бренды и Поставщики
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/admin033bto59aaagtarep4u/index.php/sell/attachments/?_token=-cgzqz4E2m8Mm-I5R9IWaxY1AdY8Jv_qg68Yx5s2AIk\" class=\"link\"> Файлы
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/admin033bto59aaagtarep4u/index.php?controller=AdminCartRules&amp;token=a7551864900523d88133881cacb47e4d\" class=\"link\"> Скидки
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/admin033bto59aaagtarep4u/index.php/sell/stocks/?_token=-cgzqz4E2m8Mm-I5R9IWaxY1A";
        // line 568
        echo "dY8Jv_qg68Yx5s2AIk\" class=\"link\"> Запасы
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/admin033bto59aaagtarep4u/index.php/sell/customers/?_token=-cgzqz4E2m8Mm-I5R9IWaxY1AdY8Jv_qg68Yx5s2AIk\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Клиенты
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/admin033bto59aaagtarep4u/index.php/sell/customers/?_token=-cgzqz4E2m8Mm-I5R9IWaxY1AdY8Jv_qg68Yx5s2AIk\" class=\"link\"> Клиенты
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
     ";
        // line 601
        echo "                           <a href=\"/admin033bto59aaagtarep4u/index.php/sell/addresses/?_token=-cgzqz4E2m8Mm-I5R9IWaxY1AdY8Jv_qg68Yx5s2AIk\" class=\"link\"> Адреса
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/admin033bto59aaagtarep4u/index.php?controller=AdminCustomerThreads&amp;token=14548dd9b79f803466b65ca3c2902526\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Клиентская служба
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/admin033bto59aaagtarep4u/index.php?controller=AdminCustomerThreads&amp;token=14548dd9b79f803466b65ca3c2902526\" class=\"link\"> Клиентская служба
                                </a>
                              </li>

                             ";
        // line 630
        echo "                                                     
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/admin033bto59aaagtarep4u/index.php/sell/customer-service/order-messages/?_token=-cgzqz4E2m8Mm-I5R9IWaxY1AdY8Jv_qg68Yx5s2AIk\" class=\"link\"> Сообщения о заказах
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/admin033bto59aaagtarep4u/index.php?controller=AdminReturn&amp;token=5a6a80c293910682f857a070faab76d6\" class=\"link\"> Возвраты товаров
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"http://localhost/admin033bto59aaagtarep4u/index.php?controller=AdminStats&amp;token=b4ccfe9fedbcc5033bf361d5aa8f154f\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Статистика
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                         ";
        // line 660
        echo "                                   </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Улучшения</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/admin033bto59aaagtarep4u/index.php/improve/modules/manage?_token=-cgzqz4E2m8Mm-I5R9IWaxY1AdY8Jv_qg68Yx5s2AIk\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Модули
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/admin033bto59aaagtarep4u/index.php/improve/modules/manage?_token=-cgzqz4E2m8Mm-I5R9IWaxY1AdY8Jv_qg68Yx5s2AIk\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                                                                   ";
        // line 696
        echo "                 </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/admin033bto59aaagtarep4u/index.php/improve/design/themes/?_token=-cgzqz4E2m8Mm-I5R9IWaxY1AdY8Jv_qg68Yx5s2AIk\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Дизайн
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"126\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/admin033bto59aaagtarep4u/index.php/improve/design/themes/?_token=-cgzqz4E2m8Mm-I5R9IWaxY1AdY8Jv_qg68Yx5s2AIk\" class=\"link\"> Шаблон и логотип
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/admin033bto59aaagtarep4u/index.php/improve/design/mail_theme/?_token=-cgzqz4E2m8Mm-I5R9IWaxY1AdY8Jv_qg68Yx5s2AIk\" c";
        // line 725
        echo "lass=\"link\"> Шаблон письма
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/admin033bto59aaagtarep4u/index.php/improve/design/cms-pages/?_token=-cgzqz4E2m8Mm-I5R9IWaxY1AdY8Jv_qg68Yx5s2AIk\" class=\"link\"> Страницы
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/admin033bto59aaagtarep4u/index.php/improve/design/modules/positions/?_token=-cgzqz4E2m8Mm-I5R9IWaxY1AdY8Jv_qg68Yx5s2AIk\" class=\"link\"> Расположение блоков
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/admin033bto59aaagtarep4u/index.php?controller=AdminImages&amp;token=f481a8c86c93111fa4c6925b249fd3fb\" class=\"link\"> Настройки изображений
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li cla";
        // line 756
        echo "ss=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/admin033bto59aaagtarep4u/index.php/modules/link-widget/list?_token=-cgzqz4E2m8Mm-I5R9IWaxY1AdY8Jv_qg68Yx5s2AIk\" class=\"link\"> Список ссылок
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/admin033bto59aaagtarep4u/index.php?controller=AdminCarriers&amp;token=2bfb3f8f2f17418251d1c9b4f1e3f9eb\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Доставка
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/admin033bto59aaagtarep4u/index.php?controller=AdminCarriers&amp;token=2bfb3f8f2f17418251d1c9b4f1e3f9eb\" class=\"link\"> Перевозчики
                                </a>
                              </li>

                         ";
        // line 786
        echo "                                                         
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/admin033bto59aaagtarep4u/index.php/improve/shipping/preferences/?_token=-cgzqz4E2m8Mm-I5R9IWaxY1AdY8Jv_qg68Yx5s2AIk\" class=\"link\"> Настройки
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/admin033bto59aaagtarep4u/index.php/improve/payment/payment_methods?_token=-cgzqz4E2m8Mm-I5R9IWaxY1AdY8Jv_qg68Yx5s2AIk\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Оплата
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/admin033bto59aaagtarep4u/index.php/improve/payment/payment_methods?_token=-cgzqz4E2m8Mm-I5R9IWa";
        // line 815
        echo "xY1AdY8Jv_qg68Yx5s2AIk\" class=\"link\"> Способы оплаты
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/admin033bto59aaagtarep4u/index.php/improve/payment/preferences?_token=-cgzqz4E2m8Mm-I5R9IWaxY1AdY8Jv_qg68Yx5s2AIk\" class=\"link\"> Настройки
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/admin033bto59aaagtarep4u/index.php/improve/international/localization/?_token=-cgzqz4E2m8Mm-I5R9IWaxY1AdY8Jv_qg68Yx5s2AIk\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      Интернационализация
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <l";
        // line 847
        echo "i class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/admin033bto59aaagtarep4u/index.php/improve/international/localization/?_token=-cgzqz4E2m8Mm-I5R9IWaxY1AdY8Jv_qg68Yx5s2AIk\" class=\"link\"> Локализация
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/admin033bto59aaagtarep4u/index.php/improve/international/zones/?_token=-cgzqz4E2m8Mm-I5R9IWaxY1AdY8Jv_qg68Yx5s2AIk\" class=\"link\"> География
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/admin033bto59aaagtarep4u/index.php/improve/international/taxes/?_token=-cgzqz4E2m8Mm-I5R9IWaxY1AdY8Jv_qg68Yx5s2AIk\" class=\"link\"> Налоги
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/admin033bto59aaagtarep4u/index.php/improve/international/translations/settings?_token=-cgzqz4E2m8Mm-I5R9IWaxY1AdY8Jv_qg68Yx5s2AIk\" class=\"link\"> Переводы
                                </a>
                              </li>

 ";
        // line 876
        echo "                                                                             </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Настроить</span>
            </li>

                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/admin033bto59aaagtarep4u/index.php/configure/shop/preferences/preferences?_token=-cgzqz4E2m8Mm-I5R9IWaxY1AdY8Jv_qg68Yx5s2AIk\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Параметры магазина
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/admin033bto59aaagtarep4u/index.php/configure/shop/preferences/preferences?_token=-cgzqz4E2m8Mm-I5R9IWaxY1AdY8Jv_qg68Yx5s2AIk\" class=\"link\"> Общее
                                </a>
                              ";
        // line 909
        echo "</li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/admin033bto59aaagtarep4u/index.php/configure/shop/order-preferences/?_token=-cgzqz4E2m8Mm-I5R9IWaxY1AdY8Jv_qg68Yx5s2AIk\" class=\"link\"> Настройки заказов
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/admin033bto59aaagtarep4u/index.php/configure/shop/product-preferences/?_token=-cgzqz4E2m8Mm-I5R9IWaxY1AdY8Jv_qg68Yx5s2AIk\" class=\"link\"> Настройки товаров
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/admin033bto59aaagtarep4u/index.php/configure/shop/customer-preferences/?_token=-cgzqz4E2m8Mm-I5R9IWaxY1AdY8Jv_qg68Yx5s2AIk\" class=\"link\"> Настройки клиента
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subta";
        // line 938
        echo "b-AdminParentStores\">
                                <a href=\"/admin033bto59aaagtarep4u/index.php/configure/shop/contacts/?_token=-cgzqz4E2m8Mm-I5R9IWaxY1AdY8Jv_qg68Yx5s2AIk\" class=\"link\"> Контакты
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/admin033bto59aaagtarep4u/index.php/configure/shop/seo-urls/?_token=-cgzqz4E2m8Mm-I5R9IWaxY1AdY8Jv_qg68Yx5s2AIk\" class=\"link\"> Трафик и SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/admin033bto59aaagtarep4u/index.php?controller=AdminSearchConf&amp;token=a946c90cc73bf9e836e86301ec7d97b0\" class=\"link\"> Поиск
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/admin033bto59aaagtarep4u/index.php/configure/advanced/system-information/?_token=-cgzqz4E2m8Mm-I5R9IWaxY1AdY8Jv_qg68Yx5s2AIk\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings";
        // line 967
        echo "_applications</i>
                      <span>
                      Расширенные параметры
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/admin033bto59aaagtarep4u/index.php/configure/advanced/system-information/?_token=-cgzqz4E2m8Mm-I5R9IWaxY1AdY8Jv_qg68Yx5s2AIk\" class=\"link\"> Информация
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/admin033bto59aaagtarep4u/index.php/configure/advanced/performance/?_token=-cgzqz4E2m8Mm-I5R9IWaxY1AdY8Jv_qg68Yx5s2AIk\" class=\"link\"> Производительность
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/admin033bto59aaagtarep4u/index.php/configure/";
        // line 996
        echo "advanced/administration/?_token=-cgzqz4E2m8Mm-I5R9IWaxY1AdY8Jv_qg68Yx5s2AIk\" class=\"link\"> Администрирование
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/admin033bto59aaagtarep4u/index.php/configure/advanced/emails/?_token=-cgzqz4E2m8Mm-I5R9IWaxY1AdY8Jv_qg68Yx5s2AIk\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/admin033bto59aaagtarep4u/index.php/configure/advanced/import/?_token=-cgzqz4E2m8Mm-I5R9IWaxY1AdY8Jv_qg68Yx5s2AIk\" class=\"link\"> Импорт
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/admin033bto59aaagtarep4u/index.php/configure/advanced/employees/?_token=-cgzqz4E2m8Mm-I5R9IWaxY1AdY8Jv_qg68Yx5s2AIk\" class=\"link\"> Сотрудники
                                </a>
                              </li>

                                                                                  
                              
                                                            
                  ";
        // line 1027
        echo "            <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/admin033bto59aaagtarep4u/index.php/configure/advanced/sql-requests/?_token=-cgzqz4E2m8Mm-I5R9IWaxY1AdY8Jv_qg68Yx5s2AIk\" class=\"link\"> База данных
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/admin033bto59aaagtarep4u/index.php/configure/advanced/logs/?_token=-cgzqz4E2m8Mm-I5R9IWaxY1AdY8Jv_qg68Yx5s2AIk\" class=\"link\"> Журнал событий
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/admin033bto59aaagtarep4u/index.php/configure/advanced/webservice-keys/?_token=-cgzqz4E2m8Mm-I5R9IWaxY1AdY8Jv_qg68Yx5s2AIk\" class=\"link\"> Веб службы
                                </a>
                              </li>

                                                                                                                                                                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/admin033bto59aaagtarep4u/index.php/configure/advanced/feature-flags/?_token=-cgzqz4E2m8Mm-I5R9IWaxY1AdY8Jv_qg68";
        // line 1052
        echo "Yx5s2AIk\" class=\"link\"> New &amp; Experimental Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/admin033bto59aaagtarep4u/index.php/configure/advanced/security/?_token=-cgzqz4E2m8Mm-I5R9IWaxY1AdY8Jv_qg68Yx5s2AIk\" class=\"link\"> Security
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"115\" id=\"tab-DEFAULT\">
                <span class=\"title\">Еще</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"129\" id=\"subtab-AdminSelfUpgrade\">
                    <a href=\"http://localhost/admin033bto59aaagtarep4u/index.php?controller=AdminSelfUpgrade&amp;token=bd94b297b364f1b9330c08e405bce711\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      1-Click Upgrade
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                   ";
        // line 1091
        echo "           
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Параметры магазина</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/admin033bto59aaagtarep4u/index.php/configure/shop/product-preferences/?_token=-cgzqz4E2m8Mm-I5R9IWaxY1AdY8Jv_qg68Yx5s2AIk\" aria-current=\"page\">Настройки товаров</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Настройки товаров          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                        
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Помощь\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/admin033bto59aaagtarep4u/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fru%252Fdoc%252FAdminPPreferences%253Fversion%253D8.0.4%2526country%253Dru/%D0%9F%D0%BE%D0%BC%D0%BE%D1%89%D1%8C?_token=-cgzqz4E2m8Mm-I5R9IWaxY1AdY8Jv_qg68Yx5s2AIk\"
                   id=\"product_form_open_help\"
                >
                  Помощь
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
        
                              <a class=\"btn ";
        // line 1153
        echo "btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Помощь\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/admin033bto59aaagtarep4u/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fru%252Fdoc%252FAdminPPreferences%253Fversion%253D8.0.4%2526country%253Dru/%D0%9F%D0%BE%D0%BC%D0%BE%D1%89%D1%8C?_token=-cgzqz4E2m8Mm-I5R9IWaxY1AdY8Jv_qg68Yx5s2AIk\"
            >
              Помощь
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1178
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>О, нет!</h1>
  <p class=\"mt-3\">
    Мобильная версия этой страницы еще не доступна.
  </p>
  <p class=\"mt-2\">
    Используйте настольный компьютер для просмотра этой страницы, пока она не адаптирована для мобильных устройств.
  </p>
  <p class=\"mt-2\">
    Спасибо.
  </p>
  <a href=\"http://localhost/admin033bto59aaagtarep4u/index.php?controller=AdminDashboard&amp;token=56b3b3d6a9b74e8861efdde1683a6ca0\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Назад
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1212
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 103
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1178
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1212
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__5fc0a3206209249b5eb3109380aafb6e01b2835ebe1c98b697c1a6fd7daa2a76";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1379 => 1212,  1358 => 1178,  1347 => 103,  1338 => 1212,  1298 => 1178,  1271 => 1153,  1207 => 1091,  1166 => 1052,  1139 => 1027,  1106 => 996,  1075 => 967,  1044 => 938,  1013 => 909,  978 => 876,  947 => 847,  913 => 815,  882 => 786,  850 => 756,  817 => 725,  786 => 696,  748 => 660,  716 => 630,  685 => 601,  650 => 568,  620 => 540,  589 => 511,  555 => 479,  524 => 450,  479 => 407,  432 => 362,  390 => 322,  333 => 267,  290 => 226,  254 => 192,  236 => 176,  196 => 138,  156 => 103,  142 => 91,  117 => 68,  88 => 41,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__5fc0a3206209249b5eb3109380aafb6e01b2835ebe1c98b697c1a6fd7daa2a76", "");
    }
}
