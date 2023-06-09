var pwa_module_config_json = {
  ajax_url: 'https://localhost/en/module/pwa/ajax',
  base_url: 'https://localhost/',
  api_key: 'YJNAPZ4ME8IZMV626RN93XZSEKW8T4VV',
  module_link_display:
    'https://localhost/index.php?fc=module&module=webservices&controller=display'
};

let getValue = value => {
  let configJson = window.pwa_module_config_json;

  if (!window.pwa_module_config_json) {
    configJson = pwa_module_config_json;
  }

  if (configJson[value]) {
    return configJson[value];
  }

  return null;
};

let hostUrl = new URL(window.location.href);
let productionRoutePath = new URL(getValue('module_link_display'));
export default {
  shopUrl: getValue('base_url'),
  apiUrl: `${getValue('base_url')}api/`,
  apiKey: getValue('api_key'),
  dataType: 'output_format=JSON',
  routeSuffix: '',
  postRequest: {
    url: getValue('ajax_url')
  },
  routePath:
    hostUrl.hostname === 'localhost'
      ? '/'
      : productionRoutePath.pathname + productionRoutePath.search
};
