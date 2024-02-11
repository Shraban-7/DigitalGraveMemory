(function() {
    var baseURL = "https://cdn.shopify.com/shopifycloud/checkout-web/assets/";
    var scripts = ["https://cdn.shopify.com/shopifycloud/checkout-web/assets/runtime.latest.en.b9a98a115f771e6aaeeb.js", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/272.latest.en.a4e6884388e576d58912.js", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/608.latest.en.53e6a31e2bca0dbc25ee.js", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/758.latest.en.f5dc7e9691f0646b673e.js", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/app.latest.en.7a637f0f3d086017945b.js", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/Information.latest.en.48635205a74f9c027aca.js"];
    var styles = ["https://cdn.shopify.com/shopifycloud/checkout-web/assets/272.latest.en.91f933afba59460f8e8a.css", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/app.latest.en.8f66ba734d91964616d8.css", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/739.latest.en.cb2d2fb5c673c1375a48.css"];
    var fontPreconnectUrls = ["https://fonts.shopifycdn.com"];
    var fontPrefetchUrls = ["https://fonts.shopifycdn.com/work_sans/worksans_n4.29e3afeb38a0ba35e784cf169a40e8beaf814daa.woff2?valid_until=MTcwMTQ3NTg3Mw&hmac=161a7cf1ba37e03d6f2cde8db2d7b03cb7178fab76018ea9527b3e9e5e996145", "https://fonts.shopifycdn.com/work_sans/worksans_n7.35eac55373d3da50c529c81066eb2f2f0fbedb82.woff2?valid_until=MTcwMTQ3NTg3Mw&hmac=2fe874e0b66ef1d458b485802ec0196a5e96a25a690d96c3de5263f9be6df5aa"];
    var imgPrefetchUrls = ["https://cdn.shopify.com/s/files/1/0652/5658/7515/files/Asset_2adobe_x320.png?v=1668057242"];

    function preconnect(url, callback) {
        var link = document.createElement('link');
        link.rel = 'dns-prefetch preconnect';
        link.href = url;
        link.crossOrigin = '';
        link.onload = link.onerror = callback;
        document.head.appendChild(link);
    }

    function preconnectAssets() {
        var resources = [baseURL].concat(fontPreconnectUrls);
        var index = 0;
        (function next() {
            var res = resources[index++];
            if (res) preconnect(res[0], next);
        })();
    }

    function prefetch(url, as, callback) {
        var link = document.createElement('link');
        if (link.relList.supports('prefetch')) {
            link.rel = 'prefetch';
            link.fetchPriority = 'low';
            link.as = as;
            if (as === 'font') link.type = 'font/woff2';
            link.href = url;
            link.crossOrigin = '';
            link.onload = link.onerror = callback;
            document.head.appendChild(link);
        } else {
            var xhr = new XMLHttpRequest();
            xhr.open('GET', url, true);
            xhr.onloadend = callback;
            xhr.send();
        }
    }

    function prefetchAssets() {
        var resources = [].concat(
            scripts.map(function(url) {
                return [url, 'script'];
            }),
            styles.map(function(url) {
                return [url, 'style'];
            }),
            fontPrefetchUrls.map(function(url) {
                return [url, 'font'];
            }),
            imgPrefetchUrls.map(function(url) {
                return [url, 'image'];
            })
        );
        var index = 0;
        (function next() {
            var res = resources[index++];
            if (res) prefetch(res[0], res[1], next);
        })();
    }

    function onLoaded() {
        preconnectAssets();
        prefetchAssets();
    }

    if (document.readyState === 'complete') {
        onLoaded();
    } else {
        addEventListener('load', onLoaded);
    }
})();