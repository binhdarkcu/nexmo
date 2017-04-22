(function () {
    'use strict';

    var utms = 'utm_source',
        utmm = 'utm_medium',
        utmt = 'utm_term',
        utmcn = 'utm_content',
        utmcm = 'utm_campaign',
        first_touch = 'ft',
        url_ref = "url_ref",
        days = 365 * 24 * 60 * 60 * 1000;

    if (! getCookie(utms)) {
        var query = window.location.search.substring(1),
            vars = query.split('&'),
            utms_value_in_url = getUtmSourceFromUrl(vars),
            pair, key;

        if (utms_value_in_url) {
            setCookie(utms, utms_value_in_url);

            for (var i = 0; i < vars.length; i++) {
                pair = vars[i].split('=');
                key = decodeURIComponent(pair[0]);

                switch (key) {
                    case utmcn:
                    case utmm:
                    case utmt:
                    case utmcm:
                        setCookie(key, pair[1]);
                }
            }
        }

        var timeInMs = Date.now();
        setCookie(first_touch, timeInMs);

        if (document.referrer) {
            setCookie(url_ref, document.referrer);

            if (! utms_value_in_url) {
                useReferralUrlToAddCookies(document.referrer);
            }
        }
    }

    function useReferralUrlToAddCookies(refURL) {
        var refDomain = getDomain(refURL);
        if (refDomain && refDomain !== 'nexmo.com') {
            setCookie(utms, refDomain);
        }
    }

    function getDomain(str) {
        if (starts_with(str, "http://localhost:")) {
            return "localhost";
        }
        var regexp = /(([a-z0-9\-]+)\.([a-z0-9]+([.a-z0-9])([.a-z0-9])+))/g;
        var tokens = regexp.exec(str);
        return (tokens.length > 1) ? tokens[1].replace('www.','') : str;
    }

    function starts_with(haystack, needle) {
        return haystack.indexOf(needle) === 0;
    }

    function ends_with(haystack, needle) {
        return haystack.indexOf(needle) == haystack.length - (needle.length);
    }

    function setCookie(name, value) {
        var expires, date;
        if (days) {
            date = new Date();
            date.setTime(date.getTime() + (days));
            expires = "; expires=" + date.toGMTString();
        } else {
            expires = "";
        }

        value = encodeURIComponent(value);
        var domain = getDomain(window.location.href);
        var domainCookieSuffix = (domain === 'localhost') ?  ''  : ';domain=' + domain;
        document.cookie = name + "=" + value + expires + ";path=/"+ domainCookieSuffix;
    }

    function getUtmSourceFromUrl(vars) {
        var pair, key;
        for (var i = 0; i < vars.length; i++) {
            pair = vars[i].split('=');
            key = decodeURIComponent(pair[0]);
            if (key == utms) return pair[1];
        }
        return null;
    }

    function getCookie(name) {
        var nameEQ = name + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
        }
        return false;
    }
})();