<!DOCTYPE html>
<html>
<head>
    <title>reshit</title>
</head>
<body>
    <div style="text-align: center;">
        <button style="font-size: 100px;">reshit</button>
    </div>
    <div id='product-component-1698137032720'></div>
    <script type="text/javascript">
/*<![CDATA[*/
(function () {
  var scriptURL = 'https://sdks.shopifycdn.com/buy-button/latest/buy-button-storefront.min.js';
  if (window.ShopifyBuy) {
    if (window.ShopifyBuy.UI) {
      ShopifyBuyInit();
    } else {
      loadScript();
    }
  } else {
    loadScript();
  }
  function loadScript() {
    var script = document.createElement('script');
    script.async = true;
    script.src = scriptURL;
    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(script);
    script.onload = ShopifyBuyInit;
  }
  function ShopifyBuyInit() {
    var client = ShopifyBuy.buildClient({
      domain: '0379a0-3.myshopify.com',
      storefrontAccessToken: '5170654ecdebbb3698d786edac59d540',
    });
    ShopifyBuy.UI.onReady(client).then(function (ui) {
      ui.createComponent('product', {
        id: '8695720673629',
        node: document.getElementById('product-component-1698137032720'),
        moneyFormat: '%E2%82%AC%7B%7Bamount_with_comma_separator%7D%7D',
        options: {
  "product": {
    "styles": {
      "product": {
        "@media (min-width: 601px)": {
          "max-width": "calc(25% - 20px)",
          "margin-left": "20px",
          "margin-bottom": "50px"
        }
      },
      "button": {
        "font-weight": "bold",
        "font-size": "17px",
        "padding-top": "16.5px",
        "padding-bottom": "16.5px",
        "color": "#000000",
        ":hover": {
          "color": "#000000",
          "background-color": "#7ae1e6"
        },
        "background-color": "#87faff",
        ":focus": {
          "background-color": "#7ae1e6"
        }
      },
      "quantityInput": {
        "font-size": "17px",
        "padding-top": "16.5px",
        "padding-bottom": "16.5px"
      }
    },
    "text": {
      "button": "Add to cart"
    }
  },
  "productSet": {
    "styles": {
      "products": {
        "@media (min-width: 601px)": {
          "margin-left": "-20px"
        }
      }
    }
  },
  "modalProduct": {
    "contents": {
      "img": false,
      "imgWithCarousel": true,
      "button": false,
      "buttonWithQuantity": true
    },
    "styles": {
      "product": {
        "@media (min-width: 601px)": {
          "max-width": "100%",
          "margin-left": "0px",
          "margin-bottom": "0px"
        }
      },
      "button": {
        "font-weight": "bold",
        "font-size": "17px",
        "padding-top": "16.5px",
        "padding-bottom": "16.5px",
        "color": "#000000",
        ":hover": {
          "color": "#000000",
          "background-color": "#7ae1e6"
        },
        "background-color": "#87faff",
        ":focus": {
          "background-color": "#7ae1e6"
        }
      },
      "quantityInput": {
        "font-size": "17px",
        "padding-top": "16.5px",
        "padding-bottom": "16.5px"
      }
    },
    "text": {
      "button": "Add to cart"
    }
  },
  "option": {},
  "cart": {
    "styles": {
      "button": {
        "font-weight": "bold",
        "font-size": "17px",
        "padding-top": "16.5px",
        "padding-bottom": "16.5px",
        "color": "#000000",
        ":hover": {
          "color": "#000000",
          "background-color": "#7ae1e6"
        },
        "background-color": "#87faff",
        ":focus": {
          "background-color": "#7ae1e6"
        }
      }
    },
    "text": {
      "total": "Subtotal",
      "button": "Checkout"
    }
  },
  "toggle": {
    "styles": {
      "toggle": {
        "font-weight": "bold",
        "background-color": "#87faff",
        ":hover": {
          "background-color": "#7ae1e6"
        },
        ":focus": {
          "background-color": "#7ae1e6"
        }
      },
      "count": {
        "font-size": "17px",
        "color": "#000000",
        ":hover": {
          "color": "#000000"
        }
      },
      "iconPath": {
        "fill": "#000000"
      }
    }
  }
},
      });
    });
  }
})();
/*]]>*/
</script>
</body>
</html>