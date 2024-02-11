function initWebPixel() {
    (function(shopify) {
        (() => {
            var w = Object.create;
            var l = Object.defineProperty;
            var h = Object.getOwnPropertyDescriptor;
            var b = Object.getOwnPropertyNames;
            var T = Object.getPrototypeOf,
                f = Object.prototype.hasOwnProperty;
            var m = (o, i) => () => (o && (i = o(o = 0)), i);
            var P = (o, i) => () => (i || o((i = {
                exports: {}
            }).exports, i), i.exports);
            var k = (o, i, c, t) => {
                if (i && typeof i == "object" || typeof i == "function")
                    for (let a of b(i)) !f.call(o, a) && a !== c && l(o, a, {
                        get: () => i[a],
                        enumerable: !(t = h(i, a)) || t.enumerable
                    });
                return o
            };
            var N = (o, i, c) => (c = o != null ? w(T(o)) : {}, k(i || !o || !o.__esModule ? l(c, "default", {
                value: o,
                enumerable: !0
            }) : c, o));
            var d = (o, i, c) => new Promise((t, a) => {
                var e = r => {
                        try {
                            n(c.next(r))
                        } catch (y) {
                            a(y)
                        }
                    },
                    s = r => {
                        try {
                            n(c.throw(r))
                        } catch (y) {
                            a(y)
                        }
                    },
                    n = r => r.done ? t(r.value) : Promise.resolve(r.value).then(e, s);
                n((c = c.apply(o, i)).next())
            });
            var D, O = m(() => {
                D = "WebPixel::Render"
            });
            var p, E = m(() => {
                O();
                p = o => shopify.extend(D, o)
            });
            var v = m(() => {
                E()
            });
            var g = m(() => {
                v()
            });
            var C = P(u => {
                g();
                var K = "https://analytics.discountkit.app",
                    _ = (o, i, c) => {
                        fetch(`${K}/${i}?analytics_id=${o}`, {
                            method: "POST",
                            headers: {
                                "Content-Type": "application/json"
                            },
                            body: c
                        })
                    };
                p(({
                    settings: o,
                    analytics: i,
                    browser: c
                }) => {
                    i.subscribe("dk_storefront_product_volume_view", t => d(u, null, function*() {
                        var a;
                        console.log("DK recieved an event", t), yield _(o.analyticsId, "view", JSON.stringify({
                            page_type: "PRODUCT",
                            discount_type: "PRODUCT_VOLUME",
                            discount_id: (a = t.customData) == null ? void 0 : a.discount_id,
                            path: t.context.document.location.pathname
                        }))
                    })), i.subscribe("dk_storefront_order_goal_view", t => d(u, null, function*() {
                        var a;
                        console.log("DK recieved an event", t), yield _(o.analyticsId, "view", JSON.stringify({
                            page_type: "CART",
                            discount_type: "ORDER_GOAL",
                            discount_id: (a = t.customData) == null ? void 0 : a.discount_id,
                            path: t.context.document.location.pathname
                        }))
                    })), i.subscribe("dk_checkout_product_volume_view", t => d(u, null, function*() {
                        var a;
                        console.log("DK recieved an event", t), yield _(o.analyticsId, "view", JSON.stringify({
                            page_type: "CHECKOUT",
                            discount_type: "PRODUCT_VOLUME",
                            discount_id: (a = t.customData) == null ? void 0 : a.discount_id,
                            path: t.context.document.location.pathname
                        }))
                    })), i.subscribe("dk_checkout_gwp_view", t => d(u, null, function*() {
                        var a;
                        console.log("DK recieved an event", t), yield _(o.analyticsId, "view", JSON.stringify({
                            page_type: "CHECKOUT",
                            discount_type: "GWP",
                            discount_id: (a = t.customData) == null ? void 0 : a.discount_id,
                            path: t.context.document.location.pathname
                        }))
                    })), i.subscribe("dk_checkout_order_goal_view", t => d(u, null, function*() {
                        var a;
                        console.log("DK recieved an event", t), yield _(o.analyticsId, "view", JSON.stringify({
                            page_type: "CHECKOUT",
                            discount_type: "ORDER_GOAL",
                            discount_id: (a = t.customData) == null ? void 0 : a.discount_id,
                            path: t.context.document.location.pathname
                        }))
                    })), i.subscribe("dk_checkout_product_volume_action", t => d(u, null, function*() {
                        var a, e, s, n;
                        console.log("DK recieved an event", t), yield _(o.analyticsId, "action", JSON.stringify({
                            page_type: "CHECKOUT",
                            discount_type: "PRODUCT_VOLUME",
                            discount_id: (a = t.customData) == null ? void 0 : a.discount_id,
                            quantity: (e = t.customData) == null ? void 0 : e.quantity,
                            amount: (s = t.customData) == null ? void 0 : s.amount,
                            variant_id: (n = t.customData) == null ? void 0 : n.variant_id
                        }))
                    })), i.subscribe("dk_checkout_gwp_action", t => d(u, null, function*() {
                        var a, e, s, n;
                        console.log("DK recieved an event", t), yield _(o.analyticsId, "action", JSON.stringify({
                            page_type: "CHECKOUT",
                            discount_type: "GWP",
                            discount_id: (a = t.customData) == null ? void 0 : a.discount_id,
                            quantity: (e = t.customData) == null ? void 0 : e.quantity,
                            amount: (s = t.customData) == null ? void 0 : s.amount,
                            variant_id: (n = t.customData) == null ? void 0 : n.variant_id
                        }))
                    })), i.subscribe("dk_checkout_order_goal_action", t => d(u, null, function*() {
                        var a, e, s, n;
                        console.log("DK recieved an event", t), yield _(o.analyticsId, "action", JSON.stringify({
                            page_type: "CHECKOUT",
                            discount_type: "ORDER_GOAL",
                            discount_id: (a = t.customData) == null ? void 0 : a.discount_id,
                            quantity: (e = t.customData) == null ? void 0 : e.quantity,
                            amount: (s = t.customData) == null ? void 0 : s.amount,
                            variant_id: (n = t.customData) == null ? void 0 : n.variant_id
                        }))
                    }))
                })
            });
            var M = N(C());
        })();

    })(self.webPixelsManager.createShopifyExtend('8651003', 'app'));
}
(() => {
    var e = {
            747: function(e, t, r) {
                var i, n, o;
                ! function(a, s) {
                    "use strict";
                    n = [r(18)], void 0 === (o = "function" == typeof(i = function(e) {
                        var t = /(^|@)\S+:\d+/,
                            r = /^\s*at .*(\S+:\d+|\(native\))/m,
                            i = /^(eval@)?(\[native code])?$/;
                        return {
                            parse: function(e) {
                                if (void 0 !== e.stacktrace || void 0 !== e["opera#sourceloc"]) return this.parseOpera(e);
                                if (e.stack && e.stack.match(r)) return this.parseV8OrIE(e);
                                if (e.stack) return this.parseFFOrSafari(e);
                                throw new Error("Cannot parse given Error object")
                            },
                            extractLocation: function(e) {
                                if (-1 === e.indexOf(":")) return [e];
                                var t = /(.+?)(?::(\d+))?(?::(\d+))?$/.exec(e.replace(/[()]/g, ""));
                                return [t[1], t[2] || void 0, t[3] || void 0]
                            },
                            parseV8OrIE: function(t) {
                                return t.stack.split("\n").filter((function(e) {
                                    return !!e.match(r)
                                }), this).map((function(t) {
                                    t.indexOf("(eval ") > -1 && (t = t.replace(/eval code/g, "eval").replace(/(\(eval at [^()]*)|(,.*$)/g, ""));
                                    var r = t.replace(/^\s+/, "").replace(/\(eval code/g, "(").replace(/^.*?\s+/, ""),
                                        i = r.match(/ (\(.+\)$)/);
                                    r = i ? r.replace(i[0], "") : r;
                                    var n = this.extractLocation(i ? i[1] : r),
                                        o = i && r || void 0,
                                        a = ["eval", "<anonymous>"].indexOf(n[0]) > -1 ? void 0 : n[0];
                                    return new e({
                                        functionName: o,
                                        fileName: a,
                                        lineNumber: n[1],
                                        columnNumber: n[2],
                                        source: t
                                    })
                                }), this)
                            },
                            parseFFOrSafari: function(t) {
                                return t.stack.split("\n").filter((function(e) {
                                    return !e.match(i)
                                }), this).map((function(t) {
                                    if (t.indexOf(" > eval") > -1 && (t = t.replace(/ line (\d+)(?: > eval line \d+)* > eval:\d+:\d+/g, ":$1")), -1 === t.indexOf("@") && -1 === t.indexOf(":")) return new e({
                                        functionName: t
                                    });
                                    var r = /((.*".+"[^@]*)?[^@]*)(?:@)/,
                                        i = t.match(r),
                                        n = i && i[1] ? i[1] : void 0,
                                        o = this.extractLocation(t.replace(r, ""));
                                    return new e({
                                        functionName: n,
                                        fileName: o[0],
                                        lineNumber: o[1],
                                        columnNumber: o[2],
                                        source: t
                                    })
                                }), this)
                            },
                            parseOpera: function(e) {
                                return !e.stacktrace || e.message.indexOf("\n") > -1 && e.message.split("\n").length > e.stacktrace.split("\n").length ? this.parseOpera9(e) : e.stack ? this.parseOpera11(e) : this.parseOpera10(e)
                            },
                            parseOpera9: function(t) {
                                for (var r = /Line (\d+).*script (?:in )?(\S+)/i, i = t.message.split("\n"), n = [], o = 2, a = i.length; o < a; o += 2) {
                                    var s = r.exec(i[o]);
                                    s && n.push(new e({
                                        fileName: s[2],
                                        lineNumber: s[1],
                                        source: i[o]
                                    }))
                                }
                                return n
                            },
                            parseOpera10: function(t) {
                                for (var r = /Line (\d+).*script (?:in )?(\S+)(?:: In function (\S+))?$/i, i = t.stacktrace.split("\n"), n = [], o = 0, a = i.length; o < a; o += 2) {
                                    var s = r.exec(i[o]);
                                    s && n.push(new e({
                                        functionName: s[3] || void 0,
                                        fileName: s[2],
                                        lineNumber: s[1],
                                        source: i[o]
                                    }))
                                }
                                return n
                            },
                            parseOpera11: function(r) {
                                return r.stack.split("\n").filter((function(e) {
                                    return !!e.match(t) && !e.match(/^Error created at/)
                                }), this).map((function(t) {
                                    var r, i = t.split("@"),
                                        n = this.extractLocation(i.pop()),
                                        o = i.shift() || "",
                                        a = o.replace(/<anonymous function(: (\w+))?>/, "$2").replace(/\([^)]*\)/g, "") || void 0;
                                    o.match(/\(([^)]*)\)/) && (r = o.replace(/^[^(]+\(([^)]*)\)$/, "$1"));
                                    var s = void 0 === r || "[arguments not available]" === r ? void 0 : r.split(",");
                                    return new e({
                                        functionName: a,
                                        args: s,
                                        fileName: n[0],
                                        lineNumber: n[1],
                                        columnNumber: n[2],
                                        source: t
                                    })
                                }), this)
                            }
                        }
                    }) ? i.apply(t, n) : i) || (e.exports = o)
                }()
            },
            18: function(e, t) {
                var r, i, n;
                ! function(o, a) {
                    "use strict";
                    i = [], void 0 === (n = "function" == typeof(r = function() {
                        function e(e) {
                            return e.charAt(0).toUpperCase() + e.substring(1)
                        }

                        function t(e) {
                            return function() {
                                return this[e]
                            }
                        }
                        var r = ["isConstructor", "isEval", "isNative", "isToplevel"],
                            i = ["columnNumber", "lineNumber"],
                            n = ["fileName", "functionName", "source"],
                            o = r.concat(i, n, ["args"], ["evalOrigin"]);

                        function a(t) {
                            if (t)
                                for (var r = 0; r < o.length; r++) void 0 !== t[o[r]] && this["set" + e(o[r])](t[o[r]])
                        }
                        a.prototype = {
                            getArgs: function() {
                                return this.args
                            },
                            setArgs: function(e) {
                                if ("[object Array]" !== Object.prototype.toString.call(e)) throw new TypeError("Args must be an Array");
                                this.args = e
                            },
                            getEvalOrigin: function() {
                                return this.evalOrigin
                            },
                            setEvalOrigin: function(e) {
                                if (e instanceof a) this.evalOrigin = e;
                                else {
                                    if (!(e instanceof Object)) throw new TypeError("Eval Origin must be an Object or StackFrame");
                                    this.evalOrigin = new a(e)
                                }
                            },
                            toString: function() {
                                var e = this.getFileName() || "",
                                    t = this.getLineNumber() || "",
                                    r = this.getColumnNumber() || "",
                                    i = this.getFunctionName() || "";
                                return this.getIsEval() ? e ? "[eval] (" + e + ":" + t + ":" + r + ")" : "[eval]:" + t + ":" + r : i ? i + " (" + e + ":" + t + ":" + r + ")" : e + ":" + t + ":" + r
                            }
                        }, a.fromString = function(e) {
                            var t = e.indexOf("("),
                                r = e.lastIndexOf(")"),
                                i = e.substring(0, t),
                                n = e.substring(t + 1, r).split(","),
                                o = e.substring(r + 1);
                            if (0 === o.indexOf("@")) var s = /@(.+?)(?::(\d+))?(?::(\d+))?$/.exec(o, ""),
                                c = s[1],
                                l = s[2],
                                u = s[3];
                            return new a({
                                functionName: i,
                                args: n || void 0,
                                fileName: c,
                                lineNumber: l || void 0,
                                columnNumber: u || void 0
                            })
                        };
                        for (var s = 0; s < r.length; s++) a.prototype["get" + e(r[s])] = t(r[s]), a.prototype["set" + e(r[s])] = function(e) {
                            return function(t) {
                                this[e] = Boolean(t)
                            }
                        }(r[s]);
                        for (var c = 0; c < i.length; c++) a.prototype["get" + e(i[c])] = t(i[c]), a.prototype["set" + e(i[c])] = function(e) {
                            return function(t) {
                                if (r = t, isNaN(parseFloat(r)) || !isFinite(r)) throw new TypeError(e + " must be a Number");
                                var r;
                                this[e] = Number(t)
                            }
                        }(i[c]);
                        for (var l = 0; l < n.length; l++) a.prototype["get" + e(n[l])] = t(n[l]), a.prototype["set" + e(n[l])] = function(e) {
                            return function(t) {
                                this[e] = String(t)
                            }
                        }(n[l]);
                        return a
                    }) ? r.apply(t, i) : r) || (e.exports = n)
                }()
            },
            700: function(e, t, r) {
                var i;
                ! function(n, o) {
                    "use strict";
                    var a = "function",
                        s = "undefined",
                        c = "object",
                        l = "string",
                        u = "major",
                        d = "model",
                        b = "name",
                        f = "type",
                        p = "vendor",
                        m = "version",
                        w = "architecture",
                        g = "console",
                        h = "mobile",
                        v = "tablet",
                        y = "smarttv",
                        x = "wearable",
                        k = "embedded",
                        S = "Amazon",
                        O = "Apple",
                        R = "ASUS",
                        E = "BlackBerry",
                        A = "Browser",
                        N = "Chrome",
                        T = "Firefox",
                        C = "Google",
                        I = "Huawei",
                        L = "LG",
                        B = "Microsoft",
                        M = "Motorola",
                        U = "Opera",
                        P = "Samsung",
                        D = "Sharp",
                        j = "Sony",
                        q = "Xiaomi",
                        F = "Zebra",
                        W = "Facebook",
                        V = "Chromium OS",
                        _ = "Mac OS",
                        $ = function(e) {
                            for (var t = {}, r = 0; r < e.length; r++) t[e[r].toUpperCase()] = e[r];
                            return t
                        },
                        z = function(e, t) {
                            return typeof e === l && -1 !== G(t).indexOf(G(e))
                        },
                        G = function(e) {
                            return e.toLowerCase()
                        },
                        H = function(e, t) {
                            if (typeof e === l) return e = e.replace(/^\s\s*/, ""), typeof t === s ? e : e.substring(0, 350)
                        },
                        X = function(e, t) {
                            for (var r, i, n, s, l, u, d = 0; d < t.length && !l;) {
                                var b = t[d],
                                    f = t[d + 1];
                                for (r = i = 0; r < b.length && !l && b[r];)
                                    if (l = b[r++].exec(e))
                                        for (n = 0; n < f.length; n++) u = l[++i], typeof(s = f[n]) === c && s.length > 0 ? 2 === s.length ? typeof s[1] == a ? this[s[0]] = s[1].call(this, u) : this[s[0]] = s[1] : 3 === s.length ? typeof s[1] !== a || s[1].exec && s[1].test ? this[s[0]] = u ? u.replace(s[1], s[2]) : o : this[s[0]] = u ? s[1].call(this, u, s[2]) : o : 4 === s.length && (this[s[0]] = u ? s[3].call(this, u.replace(s[1], s[2])) : o) : this[s] = u || o;
                                d += 2
                            }
                        },
                        Y = function(e, t) {
                            for (var r in t)
                                if (typeof t[r] === c && t[r].length > 0) {
                                    for (var i = 0; i < t[r].length; i++)
                                        if (z(t[r][i], e)) return "?" === r ? o : r
                                } else if (z(t[r], e)) return "?" === r ? o : r;
                            return e
                        },
                        Z = {
                            ME: "4.90",
                            "NT 3.11": "NT3.51",
                            "NT 4.0": "NT4.0",
                            2e3: "NT 5.0",
                            XP: ["NT 5.1", "NT 5.2"],
                            Vista: "NT 6.0",
                            7: "NT 6.1",
                            8: "NT 6.2",
                            8.1: "NT 6.3",
                            10: ["NT 6.4", "NT 10.0"],
                            RT: "ARM"
                        },
                        K = {
                            browser: [
                                [/\b(?:crmo|crios)\/([\w\.]+)/i],
                                [m, [b, "Chrome"]],
                                [/edg(?:e|ios|a)?\/([\w\.]+)/i],
                                [m, [b, "Edge"]],
                                [/(opera mini)\/([-\w\.]+)/i, /(opera [mobiletab]{3,6})\b.+version\/([-\w\.]+)/i, /(opera)(?:.+version\/|[\/ ]+)([\w\.]+)/i],
                                [b, m],
                                [/opios[\/ ]+([\w\.]+)/i],
                                [m, [b, U + " Mini"]],
                                [/\bopr\/([\w\.]+)/i],
                                [m, [b, U]],
                                [/(kindle)\/([\w\.]+)/i, /(lunascape|maxthon|netfront|jasmine|blazer)[\/ ]?([\w\.]*)/i, /(avant |iemobile|slim)(?:browser)?[\/ ]?([\w\.]*)/i, /(ba?idubrowser)[\/ ]?([\w\.]+)/i, /(?:ms|\()(ie) ([\w\.]+)/i, /(flock|rockmelt|midori|epiphany|silk|skyfire|bolt|iron|vivaldi|iridium|phantomjs|bowser|quark|qupzilla|falkon|rekonq|puffin|brave|whale(?!.+naver)|qqbrowserlite|qq|duckduckgo)\/([-\w\.]+)/i, /(heytap|ovi)browser\/([\d\.]+)/i, /(weibo)__([\d\.]+)/i],
                                [b, m],
                                [/(?:\buc? ?browser|(?:juc.+)ucweb)[\/ ]?([\w\.]+)/i],
                                [m, [b, "UC" + A]],
                                [/microm.+\bqbcore\/([\w\.]+)/i, /\bqbcore\/([\w\.]+).+microm/i],
                                [m, [b, "WeChat(Win) Desktop"]],
                                [/micromessenger\/([\w\.]+)/i],
                                [m, [b, "WeChat"]],
                                [/konqueror\/([\w\.]+)/i],
                                [m, [b, "Konqueror"]],
                                [/trident.+rv[: ]([\w\.]{1,9})\b.+like gecko/i],
                                [m, [b, "IE"]],
                                [/ya(?:search)?browser\/([\w\.]+)/i],
                                [m, [b, "Yandex"]],
                                [/(avast|avg)\/([\w\.]+)/i],
                                [
                                    [b, /(.+)/, "$1 Secure " + A], m
                                ],
                                [/\bfocus\/([\w\.]+)/i],
                                [m, [b, T + " Focus"]],
                                [/\bopt\/([\w\.]+)/i],
                                [m, [b, U + " Touch"]],
                                [/coc_coc\w+\/([\w\.]+)/i],
                                [m, [b, "Coc Coc"]],
                                [/dolfin\/([\w\.]+)/i],
                                [m, [b, "Dolphin"]],
                                [/coast\/([\w\.]+)/i],
                                [m, [b, U + " Coast"]],
                                [/miuibrowser\/([\w\.]+)/i],
                                [m, [b, "MIUI " + A]],
                                [/fxios\/([-\w\.]+)/i],
                                [m, [b, T]],
                                [/\bqihu|(qi?ho?o?|360)browser/i],
                                [
                                    [b, "360 " + A]
                                ],
                                [/(oculus|samsung|sailfish|huawei)browser\/([\w\.]+)/i],
                                [
                                    [b, /(.+)/, "$1 " + A], m
                                ],
                                [/(comodo_dragon)\/([\w\.]+)/i],
                                [
                                    [b, /_/g, " "], m
                                ],
                                [/(electron)\/([\w\.]+) safari/i, /(tesla)(?: qtcarbrowser|\/(20\d\d\.[-\w\.]+))/i, /m?(qqbrowser|baiduboxapp|2345Explorer)[\/ ]?([\w\.]+)/i],
                                [b, m],
                                [/(metasr)[\/ ]?([\w\.]+)/i, /(lbbrowser)/i, /\[(linkedin)app\]/i],
                                [b],
                                [/((?:fban\/fbios|fb_iab\/fb4a)(?!.+fbav)|;fbav\/([\w\.]+);)/i],
                                [
                                    [b, W], m
                                ],
                                [/(kakao(?:talk|story))[\/ ]([\w\.]+)/i, /(naver)\(.*?(\d+\.[\w\.]+).*\)/i, /safari (line)\/([\w\.]+)/i, /\b(line)\/([\w\.]+)\/iab/i, /(chromium|instagram|snapchat)[\/ ]([-\w\.]+)/i],
                                [b, m],
                                [/\bgsa\/([\w\.]+) .*safari\//i],
                                [m, [b, "GSA"]],
                                [/musical_ly(?:.+app_?version\/|_)([\w\.]+)/i],
                                [m, [b, "TikTok"]],
                                [/headlesschrome(?:\/([\w\.]+)| )/i],
                                [m, [b, N + " Headless"]],
                                [/ wv\).+(chrome)\/([\w\.]+)/i],
                                [
                                    [b, N + " WebView"], m
                                ],
                                [/droid.+ version\/([\w\.]+)\b.+(?:mobile safari|safari)/i],
                                [m, [b, "Android " + A]],
                                [/(chrome|omniweb|arora|[tizenoka]{5} ?browser)\/v?([\w\.]+)/i],
                                [b, m],
                                [/version\/([\w\.\,]+) .*mobile\/\w+ (safari)/i],
                                [m, [b, "Mobile Safari"]],
                                [/version\/([\w(\.|\,)]+) .*(mobile ?safari|safari)/i],
                                [m, b],
                                [/webkit.+?(mobile ?safari|safari)(\/[\w\.]+)/i],
                                [b, [m, Y, {
                                    "1.0": "/8",
                                    1.2: "/1",
                                    1.3: "/3",
                                    "2.0": "/412",
                                    "2.0.2": "/416",
                                    "2.0.3": "/417",
                                    "2.0.4": "/419",
                                    "?": "/"
                                }]],
                                [/(webkit|khtml)\/([\w\.]+)/i],
                                [b, m],
                                [/(navigator|netscape\d?)\/([-\w\.]+)/i],
                                [
                                    [b, "Netscape"], m
                                ],
                                [/mobile vr; rv:([\w\.]+)\).+firefox/i],
                                [m, [b, T + " Reality"]],
                                [/ekiohf.+(flow)\/([\w\.]+)/i, /(swiftfox)/i, /(icedragon|iceweasel|camino|chimera|fennec|maemo browser|minimo|conkeror|klar)[\/ ]?([\w\.\+]+)/i, /(seamonkey|k-meleon|icecat|iceape|firebird|phoenix|palemoon|basilisk|waterfox)\/([-\w\.]+)$/i, /(firefox)\/([\w\.]+)/i, /(mozilla)\/([\w\.]+) .+rv\:.+gecko\/\d+/i, /(polaris|lynx|dillo|icab|doris|amaya|w3m|netsurf|sleipnir|obigo|mosaic|(?:go|ice|up)[\. ]?browser)[-\/ ]?v?([\w\.]+)/i, /(links) \(([\w\.]+)/i, /panasonic;(viera)/i],
                                [b, m],
                                [/(cobalt)\/([\w\.]+)/i],
                                [b, [m, /master.|lts./, ""]]
                            ],
                            cpu: [
                                [/(?:(amd|x(?:(?:86|64)[-_])?|wow|win)64)[;\)]/i],
                                [
                                    [w, "amd64"]
                                ],
                                [/(ia32(?=;))/i],
                                [
                                    [w, G]
                                ],
                                [/((?:i[346]|x)86)[;\)]/i],
                                [
                                    [w, "ia32"]
                                ],
                                [/\b(aarch64|arm(v?8e?l?|_?64))\b/i],
                                [
                                    [w, "arm64"]
                                ],
                                [/\b(arm(?:v[67])?ht?n?[fl]p?)\b/i],
                                [
                                    [w, "armhf"]
                                ],
                                [/windows (ce|mobile); ppc;/i],
                                [
                                    [w, "arm"]
                                ],
                                [/((?:ppc|powerpc)(?:64)?)(?: mac|;|\))/i],
                                [
                                    [w, /ower/, "", G]
                                ],
                                [/(sun4\w)[;\)]/i],
                                [
                                    [w, "sparc"]
                                ],
                                [/((?:avr32|ia64(?=;))|68k(?=\))|\barm(?=v(?:[1-7]|[5-7]1)l?|;|eabi)|(?=atmel )avr|(?:irix|mips|sparc)(?:64)?\b|pa-risc)/i],
                                [
                                    [w, G]
                                ]
                            ],
                            device: [
                                [/\b(sch-i[89]0\d|shw-m380s|sm-[ptx]\w{2,4}|gt-[pn]\d{2,4}|sgh-t8[56]9|nexus 10)/i],
                                [d, [p, P],
                                    [f, v]
                                ],
                                [/\b((?:s[cgp]h|gt|sm)-\w+|sc[g-]?[\d]+a?|galaxy nexus)/i, /samsung[- ]([-\w]+)/i, /sec-(sgh\w+)/i],
                                [d, [p, P],
                                    [f, h]
                                ],
                                [/(?:\/|\()(ip(?:hone|od)[\w, ]*)(?:\/|;)/i],
                                [d, [p, O],
                                    [f, h]
                                ],
                                [/\((ipad);[-\w\),; ]+apple/i, /applecoremedia\/[\w\.]+ \((ipad)/i, /\b(ipad)\d\d?,\d\d?[;\]].+ios/i],
                                [d, [p, O],
                                    [f, v]
                                ],
                                [/(macintosh);/i],
                                [d, [p, O]],
                                [/\b(sh-?[altvz]?\d\d[a-ekm]?)/i],
                                [d, [p, D],
                                    [f, h]
                                ],
                                [/\b((?:ag[rs][23]?|bah2?|sht?|btv)-a?[lw]\d{2})\b(?!.+d\/s)/i],
                                [d, [p, I],
                                    [f, v]
                                ],
                                [/(?:huawei|honor)([-\w ]+)[;\)]/i, /\b(nexus 6p|\w{2,4}e?-[atu]?[ln][\dx][012359c][adn]?)\b(?!.+d\/s)/i],
                                [d, [p, I],
                                    [f, h]
                                ],
                                [/\b(poco[\w ]+|m2\d{3}j\d\d[a-z]{2})(?: bui|\))/i, /\b; (\w+) build\/hm\1/i, /\b(hm[-_ ]?note?[_ ]?(?:\d\w)?) bui/i, /\b(redmi[\-_ ]?(?:note|k)?[\w_ ]+)(?: bui|\))/i, /\b(mi[-_ ]?(?:a\d|one|one[_ ]plus|note lte|max|cc)?[_ ]?(?:\d?\w?)[_ ]?(?:plus|se|lite)?)(?: bui|\))/i],
                                [
                                    [d, /_/g, " "],
                                    [p, q],
                                    [f, h]
                                ],
                                [/\b(mi[-_ ]?(?:pad)(?:[\w_ ]+))(?: bui|\))/i],
                                [
                                    [d, /_/g, " "],
                                    [p, q],
                                    [f, v]
                                ],
                                [/; (\w+) bui.+ oppo/i, /\b(cph[12]\d{3}|p(?:af|c[al]|d\w|e[ar])[mt]\d0|x9007|a101op)\b/i],
                                [d, [p, "OPPO"],
                                    [f, h]
                                ],
                                [/vivo (\w+)(?: bui|\))/i, /\b(v[12]\d{3}\w?[at])(?: bui|;)/i],
                                [d, [p, "Vivo"],
                                    [f, h]
                                ],
                                [/\b(rmx[12]\d{3})(?: bui|;|\))/i],
                                [d, [p, "Realme"],
                                    [f, h]
                                ],
                                [/\b(milestone|droid(?:[2-4x]| (?:bionic|x2|pro|razr))?:?( 4g)?)\b[\w ]+build\//i, /\bmot(?:orola)?[- ](\w*)/i, /((?:moto[\w\(\) ]+|xt\d{3,4}|nexus 6)(?= bui|\)))/i],
                                [d, [p, M],
                                    [f, h]
                                ],
                                [/\b(mz60\d|xoom[2 ]{0,2}) build\//i],
                                [d, [p, M],
                                    [f, v]
                                ],
                                [/((?=lg)?[vl]k\-?\d{3}) bui| 3\.[-\w; ]{10}lg?-([06cv9]{3,4})/i],
                                [d, [p, L],
                                    [f, v]
                                ],
                                [/(lm(?:-?f100[nv]?|-[\w\.]+)(?= bui|\))|nexus [45])/i, /\blg[-e;\/ ]+((?!browser|netcast|android tv)\w+)/i, /\blg-?([\d\w]+) bui/i],
                                [d, [p, L],
                                    [f, h]
                                ],
                                [/(ideatab[-\w ]+)/i, /lenovo ?(s[56]000[-\w]+|tab(?:[\w ]+)|yt[-\d\w]{6}|tb[-\d\w]{6})/i],
                                [d, [p, "Lenovo"],
                                    [f, v]
                                ],
                                [/(?:maemo|nokia).*(n900|lumia \d+)/i, /nokia[-_ ]?([-\w\.]*)/i],
                                [
                                    [d, /_/g, " "],
                                    [p, "Nokia"],
                                    [f, h]
                                ],
                                [/(pixel c)\b/i],
                                [d, [p, C],
                                    [f, v]
                                ],
                                [/droid.+; (pixel[\daxl ]{0,6})(?: bui|\))/i],
                                [d, [p, C],
                                    [f, h]
                                ],
                                [/droid.+ (a?\d[0-2]{2}so|[c-g]\d{4}|so[-gl]\w+|xq-a\w[4-7][12])(?= bui|\).+chrome\/(?![1-6]{0,1}\d\.))/i],
                                [d, [p, j],
                                    [f, h]
                                ],
                                [/sony tablet [ps]/i, /\b(?:sony)?sgp\w+(?: bui|\))/i],
                                [
                                    [d, "Xperia Tablet"],
                                    [p, j],
                                    [f, v]
                                ],
                                [/ (kb2005|in20[12]5|be20[12][59])\b/i, /(?:one)?(?:plus)? (a\d0\d\d)(?: b|\))/i],
                                [d, [p, "OnePlus"],
                                    [f, h]
                                ],
                                [/(alexa)webm/i, /(kf[a-z]{2}wi|aeo[c-r]{2})( bui|\))/i, /(kf[a-z]+)( bui|\)).+silk\//i],
                                [d, [p, S],
                                    [f, v]
                                ],
                                [/((?:sd|kf)[0349hijorstuw]+)( bui|\)).+silk\//i],
                                [
                                    [d, /(.+)/g, "Fire Phone $1"],
                                    [p, S],
                                    [f, h]
                                ],
                                [/(playbook);[-\w\),; ]+(rim)/i],
                                [d, p, [f, v]],
                                [/\b((?:bb[a-f]|st[hv])100-\d)/i, /\(bb10; (\w+)/i],
                                [d, [p, E],
                                    [f, h]
                                ],
                                [/(?:\b|asus_)(transfo[prime ]{4,10} \w+|eeepc|slider \w+|nexus 7|padfone|p00[cj])/i],
                                [d, [p, R],
                                    [f, v]
                                ],
                                [/ (z[bes]6[027][012][km][ls]|zenfone \d\w?)\b/i],
                                [d, [p, R],
                                    [f, h]
                                ],
                                [/(nexus 9)/i],
                                [d, [p, "HTC"],
                                    [f, v]
                                ],
                                [/(htc)[-;_ ]{1,2}([\w ]+(?=\)| bui)|\w+)/i, /(zte)[- ]([\w ]+?)(?: bui|\/|\))/i, /(alcatel|geeksphone|nexian|panasonic(?!(?:;|\.))|sony(?!-bra))[-_ ]?([-\w]*)/i],
                                [p, [d, /_/g, " "],
                                    [f, h]
                                ],
                                [/droid.+; ([ab][1-7]-?[0178a]\d\d?)/i],
                                [d, [p, "Acer"],
                                    [f, v]
                                ],
                                [/droid.+; (m[1-5] note) bui/i, /\bmz-([-\w]{2,})/i],
                                [d, [p, "Meizu"],
                                    [f, h]
                                ],
                                [/(blackberry|benq|palm(?=\-)|sonyericsson|acer|asus|dell|meizu|motorola|polytron|infinix|tecno)[-_ ]?([-\w]*)/i, /(hp) ([\w ]+\w)/i, /(asus)-?(\w+)/i, /(microsoft); (lumia[\w ]+)/i, /(lenovo)[-_ ]?([-\w]+)/i, /(jolla)/i, /(oppo) ?([\w ]+) bui/i],
                                [p, d, [f, h]],
                                [/(kobo)\s(ereader|touch)/i, /(archos) (gamepad2?)/i, /(hp).+(touchpad(?!.+tablet)|tablet)/i, /(kindle)\/([\w\.]+)/i, /(nook)[\w ]+build\/(\w+)/i, /(dell) (strea[kpr\d ]*[\dko])/i, /(le[- ]+pan)[- ]+(\w{1,9}) bui/i, /(trinity)[- ]*(t\d{3}) bui/i, /(gigaset)[- ]+(q\w{1,9}) bui/i, /(vodafone) ([\w ]+)(?:\)| bui)/i],
                                [p, d, [f, v]],
                                [/(surface duo)/i],
                                [d, [p, B],
                                    [f, v]
                                ],
                                [/droid [\d\.]+; (fp\du?)(?: b|\))/i],
                                [d, [p, "Fairphone"],
                                    [f, h]
                                ],
                                [/(u304aa)/i],
                                [d, [p, "AT&T"],
                                    [f, h]
                                ],
                                [/\bsie-(\w*)/i],
                                [d, [p, "Siemens"],
                                    [f, h]
                                ],
                                [/\b(rct\w+) b/i],
                                [d, [p, "RCA"],
                                    [f, v]
                                ],
                                [/\b(venue[\d ]{2,7}) b/i],
                                [d, [p, "Dell"],
                                    [f, v]
                                ],
                                [/\b(q(?:mv|ta)\w+) b/i],
                                [d, [p, "Verizon"],
                                    [f, v]
                                ],
                                [/\b(?:barnes[& ]+noble |bn[rt])([\w\+ ]*) b/i],
                                [d, [p, "Barnes & Noble"],
                                    [f, v]
                                ],
                                [/\b(tm\d{3}\w+) b/i],
                                [d, [p, "NuVision"],
                                    [f, v]
                                ],
                                [/\b(k88) b/i],
                                [d, [p, "ZTE"],
                                    [f, v]
                                ],
                                [/\b(nx\d{3}j) b/i],
                                [d, [p, "ZTE"],
                                    [f, h]
                                ],
                                [/\b(gen\d{3}) b.+49h/i],
                                [d, [p, "Swiss"],
                                    [f, h]
                                ],
                                [/\b(zur\d{3}) b/i],
                                [d, [p, "Swiss"],
                                    [f, v]
                                ],
                                [/\b((zeki)?tb.*\b) b/i],
                                [d, [p, "Zeki"],
                                    [f, v]
                                ],
                                [/\b([yr]\d{2}) b/i, /\b(dragon[- ]+touch |dt)(\w{5}) b/i],
                                [
                                    [p, "Dragon Touch"], d, [f, v]
                                ],
                                [/\b(ns-?\w{0,9}) b/i],
                                [d, [p, "Insignia"],
                                    [f, v]
                                ],
                                [/\b((nxa|next)-?\w{0,9}) b/i],
                                [d, [p, "NextBook"],
                                    [f, v]
                                ],
                                [/\b(xtreme\_)?(v(1[045]|2[015]|[3469]0|7[05])) b/i],
                                [
                                    [p, "Voice"], d, [f, h]
                                ],
                                [/\b(lvtel\-)?(v1[12]) b/i],
                                [
                                    [p, "LvTel"], d, [f, h]
                                ],
                                [/\b(ph-1) /i],
                                [d, [p, "Essential"],
                                    [f, h]
                                ],
                                [/\b(v(100md|700na|7011|917g).*\b) b/i],
                                [d, [p, "Envizen"],
                                    [f, v]
                                ],
                                [/\b(trio[-\w\. ]+) b/i],
                                [d, [p, "MachSpeed"],
                                    [f, v]
                                ],
                                [/\btu_(1491) b/i],
                                [d, [p, "Rotor"],
                                    [f, v]
                                ],
                                [/(shield[\w ]+) b/i],
                                [d, [p, "Nvidia"],
                                    [f, v]
                                ],
                                [/(sprint) (\w+)/i],
                                [p, d, [f, h]],
                                [/(kin\.[onetw]{3})/i],
                                [
                                    [d, /\./g, " "],
                                    [p, B],
                                    [f, h]
                                ],
                                [/droid.+; (cc6666?|et5[16]|mc[239][23]x?|vc8[03]x?)\)/i],
                                [d, [p, F],
                                    [f, v]
                                ],
                                [/droid.+; (ec30|ps20|tc[2-8]\d[kx])\)/i],
                                [d, [p, F],
                                    [f, h]
                                ],
                                [/smart-tv.+(samsung)/i],
                                [p, [f, y]],
                                [/hbbtv.+maple;(\d+)/i],
                                [
                                    [d, /^/, "SmartTV"],
                                    [p, P],
                                    [f, y]
                                ],
                                [/(nux; netcast.+smarttv|lg (netcast\.tv-201\d|android tv))/i],
                                [
                                    [p, L],
                                    [f, y]
                                ],
                                [/(apple) ?tv/i],
                                [p, [d, O + " TV"],
                                    [f, y]
                                ],
                                [/crkey/i],
                                [
                                    [d, N + "cast"],
                                    [p, C],
                                    [f, y]
                                ],
                                [/droid.+aft(\w+)( bui|\))/i],
                                [d, [p, S],
                                    [f, y]
                                ],
                                [/\(dtv[\);].+(aquos)/i, /(aquos-tv[\w ]+)\)/i],
                                [d, [p, D],
                                    [f, y]
                                ],
                                [/(bravia[\w ]+)( bui|\))/i],
                                [d, [p, j],
                                    [f, y]
                                ],
                                [/(mitv-\w{5}) bui/i],
                                [d, [p, q],
                                    [f, y]
                                ],
                                [/Hbbtv.*(technisat) (.*);/i],
                                [p, d, [f, y]],
                                [/\b(roku)[\dx]*[\)\/]((?:dvp-)?[\d\.]*)/i, /hbbtv\/\d+\.\d+\.\d+ +\([\w\+ ]*; *([\w\d][^;]*);([^;]*)/i],
                                [
                                    [p, H],
                                    [d, H],
                                    [f, y]
                                ],
                                [/\b(android tv|smart[- ]?tv|opera tv|tv; rv:)\b/i],
                                [
                                    [f, y]
                                ],
                                [/(ouya)/i, /(nintendo) ([wids3utch]+)/i],
                                [p, d, [f, g]],
                                [/droid.+; (shield) bui/i],
                                [d, [p, "Nvidia"],
                                    [f, g]
                                ],
                                [/(playstation [345portablevi]+)/i],
                                [d, [p, j],
                                    [f, g]
                                ],
                                [/\b(xbox(?: one)?(?!; xbox))[\); ]/i],
                                [d, [p, B],
                                    [f, g]
                                ],
                                [/((pebble))app/i],
                                [p, d, [f, x]],
                                [/(watch)(?: ?os[,\/]|\d,\d\/)[\d\.]+/i],
                                [d, [p, O],
                                    [f, x]
                                ],
                                [/droid.+; (glass) \d/i],
                                [d, [p, C],
                                    [f, x]
                                ],
                                [/droid.+; (wt63?0{2,3})\)/i],
                                [d, [p, F],
                                    [f, x]
                                ],
                                [/(quest( 2| pro)?)/i],
                                [d, [p, W],
                                    [f, x]
                                ],
                                [/(tesla)(?: qtcarbrowser|\/[-\w\.]+)/i],
                                [p, [f, k]],
                                [/(aeobc)\b/i],
                                [d, [p, S],
                                    [f, k]
                                ],
                                [/droid .+?; ([^;]+?)(?: bui|\) applew).+? mobile safari/i],
                                [d, [f, h]],
                                [/droid .+?; ([^;]+?)(?: bui|\) applew).+?(?! mobile) safari/i],
                                [d, [f, v]],
                                [/\b((tablet|tab)[;\/]|focus\/\d(?!.+mobile))/i],
                                [
                                    [f, v]
                                ],
                                [/(phone|mobile(?:[;\/]| [ \w\/\.]*safari)|pda(?=.+windows ce))/i],
                                [
                                    [f, h]
                                ],
                                [/(android[-\w\. ]{0,9});.+buil/i],
                                [d, [p, "Generic"]]
                            ],
                            engine: [
                                [/windows.+ edge\/([\w\.]+)/i],
                                [m, [b, "EdgeHTML"]],
                                [/webkit\/537\.36.+chrome\/(?!27)([\w\.]+)/i],
                                [m, [b, "Blink"]],
                                [/(presto)\/([\w\.]+)/i, /(webkit|trident|netfront|netsurf|amaya|lynx|w3m|goanna)\/([\w\.]+)/i, /ekioh(flow)\/([\w\.]+)/i, /(khtml|tasman|links)[\/ ]\(?([\w\.]+)/i, /(icab)[\/ ]([23]\.[\d\.]+)/i, /\b(libweb)/i],
                                [b, m],
                                [/rv\:([\w\.]{1,9})\b.+(gecko)/i],
                                [m, b]
                            ],
                            os: [
                                [/microsoft (windows) (vista|xp)/i],
                                [b, m],
                                [/(windows) nt 6\.2; (arm)/i, /(windows (?:phone(?: os)?|mobile))[\/ ]?([\d\.\w ]*)/i, /(windows)[\/ ]?([ntce\d\. ]+\w)(?!.+xbox)/i],
                                [b, [m, Y, Z]],
                                [/(win(?=3|9|n)|win 9x )([nt\d\.]+)/i],
                                [
                                    [b, "Windows"],
                                    [m, Y, Z]
                                ],
                                [/ip[honead]{2,4}\b(?:.*os ([\w]+) like mac|; opera)/i, /(?:ios;fbsv\/|iphone.+ios[\/ ])([\d\.]+)/i, /cfnetwork\/.+darwin/i],
                                [
                                    [m, /_/g, "."],
                                    [b, "iOS"]
                                ],
                                [/(mac os x) ?([\w\. ]*)/i, /(macintosh|mac_powerpc\b)(?!.+haiku)/i],
                                [
                                    [b, _],
                                    [m, /_/g, "."]
                                ],
                                [/droid ([\w\.]+)\b.+(android[- ]x86|harmonyos)/i],
                                [m, b],
                                [/(android|webos|qnx|bada|rim tablet os|maemo|meego|sailfish)[-\/ ]?([\w\.]*)/i, /(blackberry)\w*\/([\w\.]*)/i, /(tizen|kaios)[\/ ]([\w\.]+)/i, /\((series40);/i],
                                [b, m],
                                [/\(bb(10);/i],
                                [m, [b, E]],
                                [/(?:symbian ?os|symbos|s60(?=;)|series60)[-\/ ]?([\w\.]*)/i],
                                [m, [b, "Symbian"]],
                                [/mozilla\/[\d\.]+ \((?:mobile|tablet|tv|mobile; [\w ]+); rv:.+ gecko\/([\w\.]+)/i],
                                [m, [b, T + " OS"]],
                                [/web0s;.+rt(tv)/i, /\b(?:hp)?wos(?:browser)?\/([\w\.]+)/i],
                                [m, [b, "webOS"]],
                                [/watch(?: ?os[,\/]|\d,\d\/)([\d\.]+)/i],
                                [m, [b, "watchOS"]],
                                [/crkey\/([\d\.]+)/i],
                                [m, [b, N + "cast"]],
                                [/(cros) [\w]+(?:\)| ([\w\.]+)\b)/i],
                                [
                                    [b, V], m
                                ],
                                [/panasonic;(viera)/i, /(netrange)mmh/i, /(nettv)\/(\d+\.[\w\.]+)/i, /(nintendo|playstation) ([wids345portablevuch]+)/i, /(xbox); +xbox ([^\);]+)/i, /\b(joli|palm)\b ?(?:os)?\/?([\w\.]*)/i, /(mint)[\/\(\) ]?(\w*)/i, /(mageia|vectorlinux)[; ]/i, /([kxln]?ubuntu|debian|suse|opensuse|gentoo|arch(?= linux)|slackware|fedora|mandriva|centos|pclinuxos|red ?hat|zenwalk|linpus|raspbian|plan 9|minix|risc os|contiki|deepin|manjaro|elementary os|sabayon|linspire)(?: gnu\/linux)?(?: enterprise)?(?:[- ]linux)?(?:-gnu)?[-\/ ]?(?!chrom|package)([-\w\.]*)/i, /(hurd|linux) ?([\w\.]*)/i, /(gnu) ?([\w\.]*)/i, /\b([-frentopcghs]{0,5}bsd|dragonfly)[\/ ]?(?!amd|[ix346]{1,2}86)([\w\.]*)/i, /(haiku) (\w+)/i],
                                [b, m],
                                [/(sunos) ?([\w\.\d]*)/i],
                                [
                                    [b, "Solaris"], m
                                ],
                                [/((?:open)?solaris)[-\/ ]?([\w\.]*)/i, /(aix) ((\d)(?=\.|\)| )[\w\.])*/i, /\b(beos|os\/2|amigaos|morphos|openvms|fuchsia|hp-ux|serenityos)/i, /(unix) ?([\w\.]*)/i],
                                [b, m]
                            ]
                        },
                        J = function(e, t) {
                            if (typeof e === c && (t = e, e = o), !(this instanceof J)) return new J(e, t).getResult();
                            var r = typeof n !== s && n.navigator ? n.navigator : o,
                                i = e || (r && r.userAgent ? r.userAgent : ""),
                                g = r && r.userAgentData ? r.userAgentData : o,
                                y = t ? function(e, t) {
                                    var r = {};
                                    for (var i in e) t[i] && t[i].length % 2 == 0 ? r[i] = t[i].concat(e[i]) : r[i] = e[i];
                                    return r
                                }(K, t) : K,
                                x = r && r.userAgent == i;
                            return this.getBrowser = function() {
                                var e, t = {};
                                return t[b] = o, t[m] = o, X.call(t, i, y.browser), t[u] = typeof(e = t[m]) === l ? e.replace(/[^\d\.]/g, "").split(".")[0] : o, x && r && r.brave && typeof r.brave.isBrave == a && (t[b] = "Brave"), t
                            }, this.getCPU = function() {
                                var e = {};
                                return e[w] = o, X.call(e, i, y.cpu), e
                            }, this.getDevice = function() {
                                var e = {};
                                return e[p] = o, e[d] = o, e[f] = o, X.call(e, i, y.device), x && !e[f] && g && g.mobile && (e[f] = h), x && "Macintosh" == e[d] && r && typeof r.standalone !== s && r.maxTouchPoints && r.maxTouchPoints > 2 && (e[d] = "iPad", e[f] = v), e
                            }, this.getEngine = function() {
                                var e = {};
                                return e[b] = o, e[m] = o, X.call(e, i, y.engine), e
                            }, this.getOS = function() {
                                var e = {};
                                return e[b] = o, e[m] = o, X.call(e, i, y.os), x && !e[b] && g && "Unknown" != g.platform && (e[b] = g.platform.replace(/chrome os/i, V).replace(/macos/i, _)), e
                            }, this.getResult = function() {
                                return {
                                    ua: this.getUA(),
                                    browser: this.getBrowser(),
                                    engine: this.getEngine(),
                                    os: this.getOS(),
                                    device: this.getDevice(),
                                    cpu: this.getCPU()
                                }
                            }, this.getUA = function() {
                                return i
                            }, this.setUA = function(e) {
                                return i = typeof e === l && e.length > 350 ? H(e, 350) : e, this
                            }, this.setUA(i), this
                        };
                    J.VERSION = "1.0.36", J.BROWSER = $([b, m, u]), J.CPU = $([w]), J.DEVICE = $([d, p, f, g, h, y, v, x, k]), J.ENGINE = J.OS = $([b, m]), typeof t !== s ? (e.exports && (t = e.exports = J), t.UAParser = J) : r.amdO ? (i = function() {
                        return J
                    }.call(t, r, t, e)) === o || (e.exports = i) : typeof n !== s && (n.UAParser = J);
                    var Q = typeof n !== s && (n.jQuery || n.Zepto);
                    if (Q && !Q.ua) {
                        var ee = new J;
                        Q.ua = ee.getResult(), Q.ua.get = function() {
                            return ee.getUA()
                        }, Q.ua.set = function(e) {
                            ee.setUA(e);
                            var t = ee.getResult();
                            for (var r in t) Q.ua[r] = t[r]
                        }
                    }
                }("object" == typeof window ? window : this)
            }
        },
        t = {};

    function r(i) {
        var n = t[i];
        if (void 0 !== n) return n.exports;
        var o = t[i] = {
            exports: {}
        };
        return e[i].call(o.exports, o, o.exports, r), o.exports
    }
    r.amdO = {}, (() => {
        "use strict";
        const e = Symbol.for("RemoteUi::Retain"),
            t = Symbol.for("RemoteUi::Release"),
            i = Symbol.for("RemoteUi::RetainedBy");
        class n {
            constructor() {
                this.memoryManaged = new Set
            }
            add(t) {
                this.memoryManaged.add(t), t[i].add(this), t[e]()
            }
            release() {
                for (const e of this.memoryManaged) e[i].delete(this), e[t]();
                this.memoryManaged.clear()
            }
        }

        function o(r) {
            return Boolean(r && r[e] && r[t])
        }

        function a(e, {
            deep: t = !0
        } = {}) {
            return s(e, t, new Map)
        }

        function s(t, r, i) {
            const n = i.get(t);
            if (null != n) return n;
            const a = o(t);
            if (a && t[e](), i.set(t, a), r) {
                if (Array.isArray(t)) {
                    const e = t.reduce(((e, t) => s(t, r, i) || e), a);
                    return i.set(t, e), e
                }
                if (c(t)) {
                    const e = Object.keys(t).reduce(((e, n) => s(t[n], r, i) || e), a);
                    return i.set(t, e), e
                }
            }
            return i.set(t, a), a
        }

        function c(e) {
            if (null == e || "object" != typeof e) return !1;
            const t = Object.getPrototypeOf(e);
            return null == t || t === Object.prototype
        }
        const l = "remote-ui::ready",
            u = "_@f";

        function d(r) {
            const a = new Map,
                s = new Map,
                l = new Map;
            return {
                encode: function e(t, i = new Map) {
                    if (null == t) return [t];
                    const n = i.get(t);
                    if (n) return n;
                    if ("object" == typeof t) {
                        if (Array.isArray(t)) {
                            i.set(t, [void 0]);
                            const r = [],
                                n = [t.map((t => {
                                    const [n, o = []] = e(t, i);
                                    return r.push(...o), n
                                })), r];
                            return i.set(t, n), n
                        }
                        if (c(t)) {
                            i.set(t, [void 0]);
                            const r = [],
                                n = [Object.keys(t).reduce(((n, o) => {
                                    const [a, s = []] = e(t[o], i);
                                    return r.push(...s), { ...n,
                                        [o]: a
                                    }
                                }), {}), r];
                            return i.set(t, n), n
                        }
                    }
                    if ("function" == typeof t) {
                        if (a.has(t)) {
                            const e = a.get(t),
                                r = [{
                                    [u]: e
                                }];
                            return i.set(t, r), r
                        }
                        const e = r.uuid();
                        a.set(t, e), s.set(e, t);
                        const n = [{
                            [u]: e
                        }];
                        return i.set(t, n), n
                    }
                    const o = [t];
                    return i.set(t, o), o
                },
                decode: d,
                async call(e, t) {
                    const r = new n,
                        a = s.get(e);
                    if (null == a) throw new Error("You attempted to call a function that was already released.");
                    try {
                        const e = o(a) ? [r, ...a[i]] : [r];
                        return await a(...d(t, e))
                    } finally {
                        r.release()
                    }
                },
                release(e) {
                    const t = s.get(e);
                    t && (s.delete(e), a.delete(t))
                },
                terminate() {
                    a.clear(), s.clear(), l.clear()
                }
            };

            function d(n, o) {
                if ("object" == typeof n) {
                    if (null == n) return n;
                    if (n instanceof ArrayBuffer) return n;
                    if (Array.isArray(n)) return n.map((e => d(e, o)));
                    if (u in n) {
                        const a = n[u];
                        if (l.has(a)) return l.get(a);
                        let s = 0,
                            c = !1;
                        const d = () => {
                                s -= 1, 0 === s && (c = !0, l.delete(a), r.release(a))
                            },
                            b = () => {
                                s += 1
                            },
                            f = new Set(o),
                            p = (...e) => {
                                if (c) throw new Error("You attempted to call a function that was already released.");
                                if (!l.has(a)) throw new Error("You attempted to call a function that was already revoked.");
                                return r.call(a, e)
                            };
                        Object.defineProperties(p, {
                            [t]: {
                                value: d,
                                writable: !1
                            },
                            [e]: {
                                value: b,
                                writable: !1
                            },
                            [i]: {
                                value: f,
                                writable: !1
                            }
                        });
                        for (const e of f) e.add(p);
                        return l.set(a, p), p
                    }
                    return Object.keys(n).reduce(((e, t) => ({ ...e,
                        [t]: d(n[t], o)
                    })), {})
                }
                return n
            }
        }

        function b() {
            return `${f()}-${f()}-${f()}-${f()}`
        }

        function f() {
            return Math.floor(Math.random() * Number.MAX_SAFE_INTEGER).toString(16)
        }
        const p = "production",
            m = "0.0.407",
            w = "f25882c1w423ab3d2p8df04b18m261f6c04",
            g = "sf25882c1w423ab3d2p8df04b18m261f6c04m.js";

        function h() {
            try {
                return self instanceof DedicatedWorkerGlobalScope
            } catch (e) {
                return !1
            }
        }
        const v = new URL(self.location.href);
        var y = r(747);
        class x extends Error {
            constructor(...e) {
                super(...e), this.message = "Excessive Stacktrace: May indicate infinite loop forming"
            }
        }
        var k = r(700);
        const S = {
                production: "https://notify.bugsnag.com",
                test: "https://localhost"
            },
            O = {
                severity: "error",
                context: "",
                unhandled: !0,
                library: "sandbox"
            },
            R = (e, t) => {
                try {
                    var r;
                    if (null != t && null !== (r = t.options) && void 0 !== r && r.sampleRate && ! function(e) {
                            if (e <= 0 || e > 100) throw new Error("Invalid sampling percent");
                            return 100 * Math.random() <= e
                        }(t.options.sampleRate)) return;
                    const a = { ...O,
                        ...t
                    };
                    let s = {
                        errorClass: null == e ? void 0 : e.name,
                        message: null == e ? void 0 : e.message,
                        stacktrace: [],
                        type: "browserjs"
                    };
                    try {
                        s = function(e) {
                            if ("string" != typeof((null == (t = e) ? void 0 : t.stack) || (null == t ? void 0 : t.stacktrace) || (null == t ? void 0 : t["opera#sourceloc"])) || t.stack === `${t.name}: ${t.message}`) throw new Error("Error incompatible with error-stack-parser");
                            var t;
                            const r = y.parse(e).reduce(((e, t) => {
                                const r = function({
                                    functionName: e,
                                    lineNumber: t,
                                    columnNumber: r
                                }) {
                                    const i = /^global code$/i.test((n = e) || "") ? "global code" : n;
                                    var n;
                                    return {
                                        file: `https://cdn.shopify.com/cdn/wpm/${g}`,
                                        method: i,
                                        lineNumber: t,
                                        columnNumber: r
                                    }
                                }(t);
                                try {
                                    return "{}" === JSON.stringify(r) ? e : e.concat(r)
                                } catch (i) {
                                    return e
                                }
                            }), []);
                            return {
                                errorClass: null == e ? void 0 : e.name,
                                message: null == e ? void 0 : e.message,
                                stacktrace: r,
                                type: "browserjs"
                            }
                        }(e)
                    } catch (n) {
                        try {
                            s = function(e, t) {
                                let r = "";
                                const i = {
                                    lineNumber: "1",
                                    columnNumber: "1",
                                    method: t.context,
                                    file: `https://cdn.shopify.com/cdn/wpm/${g}`
                                };
                                if (e.stackTrace || e.stack || e.description) {
                                    r = e.stack.split("\n")[0];
                                    const t = e.stack.match(/([0-9]+):([0-9]+)/);
                                    if (t && t.length > 2 && (i.lineNumber = t[1], i.columnNumber = t[2], parseInt(i.lineNumber, 10) > 1e5)) throw new x
                                }
                                return {
                                    errorClass: (null == e ? void 0 : e.name) || r,
                                    message: (null == e ? void 0 : e.message) || r,
                                    stacktrace: [i],
                                    type: "browserjs"
                                }
                            }(e, a)
                        } catch (o) {
                            if (o instanceof x) return
                        }
                    }
                    const c = function(t, {
                            userAgent: r,
                            context: i,
                            severity: n,
                            unhandled: o,
                            library: a,
                            hashVersionSandbox: s,
                            sandboxUrl: c,
                            pixelId: l,
                            pixelType: u,
                            runtimeContext: d,
                            shopId: b,
                            initConfig: f,
                            notes: g
                        }) {
                            var h, v;
                            const {
                                device: y,
                                os: x,
                                browser: S,
                                engine: O
                            } = function(t) {
                                try {
                                    return new k.UAParser(t).getResult()
                                } catch (e) {
                                    return {
                                        ua: "",
                                        browser: {
                                            name: "",
                                            version: "",
                                            major: ""
                                        },
                                        engine: {
                                            name: "",
                                            version: ""
                                        },
                                        os: {
                                            name: "",
                                            version: ""
                                        },
                                        device: {
                                            model: "",
                                            type: "",
                                            vendor: ""
                                        },
                                        cpu: {
                                            architecture: ""
                                        }
                                    }
                                }
                            }(r || (null === (h = self.navigator) || void 0 === h ? void 0 : h.userAgent));
                            return {
                                payloadVersion: 5,
                                notifier: {
                                    name: "web-pixel-manager",
                                    version: m,
                                    url: "-"
                                },
                                events: [{
                                    exceptions: [t],
                                    context: i,
                                    severity: n,
                                    unhandled: o,
                                    app: {
                                        version: m
                                    },
                                    device: {
                                        manufacturer: y.vendor,
                                        model: y.model,
                                        osName: x.name,
                                        osVersion: x.version,
                                        browserName: S.name,
                                        browserVersion: S.version
                                    },
                                    metaData: {
                                        app: {
                                            library: a,
                                            browserTarget: "modern",
                                            env: p,
                                            hashVersion: w,
                                            hashVersionSandbox: s || "N/A",
                                            sandboxUrl: c || "N/A"
                                        },
                                        device: {
                                            userAgent: r || (null === (v = self.navigator) || void 0 === v ? void 0 : v.userAgent),
                                            renderingEngineName: O.name,
                                            renderingEngineVersion: O.version
                                        },
                                        request: {
                                            shopId: b,
                                            shopUrl: self.location.href,
                                            pixelId: l,
                                            pixelType: u,
                                            runtimeContext: d
                                        },
                                        "Additional Notes": {
                                            initConfig: JSON.stringify(f),
                                            notes: g
                                        }
                                    }
                                }]
                            }
                        }(s, a),
                        l = S[p];
                    var i;
                    if (!l) return void(null === (i = console) || void 0 === i || i.log(`[${p}]`, "Bugsnag notify:", c));
                    fetch(l, {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json",
                            "Bugsnag-Api-Key": "bcbc9f6762da195561967577c2d74ff8",
                            "Bugsnag-Payload-Version": "5"
                        },
                        body: JSON.stringify(c)
                    }).catch((() => {}))
                } catch (a) {}
            };
        async function E(e, t = "") {
            const r = new self.Blob([t], {
                type: "text/plain"
            });
            try {
                return await self.fetch(e, {
                    method: "POST",
                    keepalive: !0,
                    body: r
                }), !0
            } catch {
                return !1
            }
        }

        function A(e, t, r, i = !0) {
            try {
                const n = { ...i ? Object.getOwnPropertyDescriptor(e, t) : {},
                    ...r
                };
                return Object.defineProperty(e, t, n)
            } catch (n) {
                return e
            }
        }
        class N extends Error {
            constructor(...e) {
                super(...e), this.name = "InsecureUrlError"
            }
        }
        class T extends Error {
            constructor(...e) {
                super(...e), this.name = "RestrictedUrlError"
            }
        }

        function C(e) {
            const t = new URL(e);
            if ("https:" !== t.protocol) throw new N(`URL must be secure (HTTPS): ${t.href}`);
            const r = v.host.replace(/[/\-\\^$*+?.()|[\]{}]/g, "\\$&");
            if (new RegExp(`^https://(.*@)?${r}`, "i").test(t.href)) throw new T(`Request are not allowed to the same origin: ${t.href}`);
            return t
        }

        function I() {
            const e = XMLHttpRequest.prototype.open;
            return XMLHttpRequest.prototype.open = function(t, r, i = !0, n, o) {
                return e.call(this, t, C(r), i, n, o)
            }, XMLHttpRequest
        }
        const L = {
                Request: !1,
                Response: !1,
                Headers: !1,
                XMLHttpRequest: !1,
                XMLHttpRequestEventTarget: !1,
                XMLHttpRequestUpload: !1
            },
            B = {
                BarcodeDetector: !0,
                BroadcastChannel: !0,
                Cache: !0,
                caches: !0,
                CustomEvent: !0,
                FormData: !0,
                ImageData: !0,
                NetworkInformation: !0,
                ServiceWorkerRegistration: !0,
                WebSocket: !0,
                Browser: !0,
                WorkerBrowser: !0,
                MessageChannel: !0,
                MessagePort: !0,
                crypto: !1,
                Crypto: !1,
                CryptoKey: !1,
                SubtleCrypto: !1,
                TextDecoder: !1,
                TextDecoderStream: !1,
                TextEncoder: !1,
                TextEncoderStream: !1,
                Request: !1,
                Response: !1,
                Headers: !1,
                indexedDB: !0,
                IDBCursor: !0,
                IDBCursorWithValue: !0,
                IDBDatabase: !0,
                IDBFactory: !0,
                IDBIndex: !0,
                IDBKeyRange: !0,
                IDBObjectStore: !0,
                IDBOpenDBRequest: !0,
                IDBRequest: !0,
                IDBTransaction: !0,
                IDBVersionChangeEvent: !0,
                Navigator: !0,
                navigator: !0,
                Notification: !0,
                NotificationEvent: !0,
                EventSource: !0,
                WebGL2RenderingContext: !0,
                WebGLActiveInfo: !0,
                WebGLBuffer: !0,
                WebGLFramebuffer: !0,
                WebGLProgram: !0,
                WebGLQuery: !0,
                WebGLRenderbuffer: !0,
                WebGLRenderingContext: !0,
                WebGLSampler: !0,
                WebGLShader: !0,
                WebGLShaderPrecisionFormat: !0,
                WebGLSync: !0,
                WebGLTexture: !0,
                WebGLTransformFeedback: !0,
                WebGLUniformLocation: !0,
                WebGLVertexArrayObject: !0,
                Path2D: !0,
                Worker: !0,
                WorkerLocation: !0,
                WorkerNavigator: !0,
                ServiceWorker: !0,
                ServiceWorkerContainer: !0,
                XMLHttpRequest: !0,
                XMLHttpRequestEventTarget: !0,
                XMLHttpRequestUpload: !0,
                ArrayBuffer: !1,
                Uint8Array: !1,
                Int8Array: !1,
                Uint16Array: !1,
                Int16Array: !1,
                Uint32Array: !1,
                Int32Array: !1,
                Float32Array: !1,
                Float64Array: !1,
                Uint8ClampedArray: !1,
                BigUint64Array: !1,
                BigInt64Array: !1,
                DataView: !1,
                PushSubscriptionOptions: !0,
                PushSubscription: !0,
                PushManager: !0,
                Permissions: !0,
                PermissionStatus: !0,
                PeriodicSyncManager: !0,
                PaymentInstruments: !0,
                NavigatorUAData: !0,
                BackgroundFetchRegistration: !0,
                BackgroundFetchRecord: !0,
                BackgroundFetchManager: !0,
                WritableStreamDefaultWriter: !0,
                WritableStreamDefaultController: !0,
                WritableStream: !0,
                ReadableStreamDefaultReader: !0,
                ReadableStreamDefaultController: !0,
                ReadableStreamBYOBRequest: !0,
                ReadableStreamBYOBReader: !0,
                ReadableStream: !0,
                ReadableByteStreamController: !0,
                RTCEncodedVideoFrame: !0,
                RTCEncodedAudioFrame: !0,
                RTCDataChannel: !0,
                RTCTransformEvent: !0,
                RTCRtpScriptTransformer: !0,
                OffscreenCanvasRenderingContext2D: !0,
                OffscreenCanvas: !0,
                FontFace: !0,
                FontFaceSet: !0,
                FileReaderSync: !0,
                FileReader: !0,
                FileList: !0,
                File: !0,
                FileSystemDirectoryHandle: !0,
                FileSystemFileHandle: !0,
                FileSystemHandle: !0,
                FileSystemWritableFileStream: !0,
                FileSystemSyncAccessHandle: !0,
                webkitRequestFileSystem: !0,
                webkitRequestFileSystemSync: !0,
                webkitResolveLocalFileSystemSyncURL: !0,
                webkitResolveLocalFileSystemURL: !0,
                DOMStringList: !0,
                DOMRectReadOnly: !0,
                DOMRect: !0,
                DOMQuad: !0,
                DOMPointReadOnly: !0,
                DOMPoint: !0,
                DOMMatrixReadOnly: !0,
                DOMMatrix: !0,
                DOMException: !0,
                CompressionStream: !0,
                Atomics: !0,
                WebAssembly: !0,
                AudioData: !0,
                EncodedAudioChunk: !0,
                EncodedVideoChunk: !0,
                ImageTrack: !0,
                ImageTrackList: !0,
                VideoColorSpace: !0,
                VideoFrame: !0,
                AudioDecoder: !0,
                AudioEncoder: !0,
                ImageDecoder: !0,
                VideoDecoder: !0,
                VideoEncoder: !0,
                AudioTrackConfiguration: !0,
                VideoTrackConfiguration: !0,
                Lock: !0,
                LockManager: !0,
                WebTransport: !0,
                WebTransportBidirectionalStream: !0,
                WebTransportDatagramDuplexStream: !0,
                WebTransportError: !0,
                Serial: !0,
                SerialPort: !0,
                USB: !0,
                USBAlternateInterface: !0,
                USBConfiguration: !0,
                USBConnectionEvent: !0,
                USBDevice: !0,
                USBEndpoint: !0,
                USBInTransferResult: !0,
                USBInterface: !0,
                USBIsochronousInTransferPacket: !0,
                USBIsochronousInTransferResult: !0,
                USBIsochronousOutTransferPacket: !0,
                USBIsochronousOutTransferResult: !0,
                USBOutTransferResult: !0,
                URL: {
                    createObjectURL: !0
                }
            };

        function M(e, t) {
            let r = e;
            do {
                Object.getOwnPropertyNames(r).filter((e => e in t && !1 !== t[e])).forEach((e => {
                    try {
                        let i;
                        "object" == typeof t[e] ? (i = r[e], M(i, t[e])) : i = !0 === t[e] ? void 0 : t[e], A(r, e, {
                            value: i,
                            configurable: !1,
                            enumerable: !1,
                            writable: !1
                        }, !1)
                    } catch (i) {}
                })), r = Object.getPrototypeOf(r)
            } while (r !== Object.prototype)
        }

        function U(e, t = self) {
            const r = { ...e ? B : L,
                fetch: (i = t.fetch, (e, t) => {
                    const r = new Request(e);
                    return C(r.url), i(r, t)
                }),
                XMLHttpRequest: I()
            };
            var i;
            e || (r.addEventListener = function(e) {
                let t = !1;
                return (r, i, n) => (t || (console.warn("In a sandboxed environment, addEventListener may not behave as expected."), t = !0), e(r, i, n))
            }(t.addEventListener)), M(t, r), Object.freeze(String.prototype), Object.freeze(Request.prototype), Object.freeze(URL.prototype), Object.freeze(RegExp.prototype), A(self, "String", {
                writable: !1,
                configurable: !1
            }), A(self, "Request", {
                writable: !1,
                configurable: !1
            }), A(self, "URL", {
                writable: !1,
                configurable: !1
            }), A(self, "RegExp", {
                writable: !1,
                configurable: !1
            })
        }

        function P(e) {
            let t = e;
            return {
                update: async function(e, r) {
                    try {
                        t = r(), t = await e()
                    } catch (i) {
                        console.error(i)
                    }
                    return t
                },
                getRemote: async function(e) {
                    try {
                        t = await e()
                    } catch (r) {
                        console.error(r)
                    }
                    return t
                },
                getValue: () => t
            }
        }

        function D(e, t) {
            const r = new Map(Object.keys(e).map((t => [t, e[t]])));
            return {
                getItem: e => r.get(e) || null,
                setItem(e, i) {
                    t.setItem(e, i), r.set(e, i)
                },
                removeItem(e) {
                    t.removeItem(e), r.delete(e)
                },
                clear() {
                    t.clear(), r.clear()
                },
                get length() {
                    return r.size
                },
                key(e) {
                    var t;
                    return null !== (t = Array.from(r.keys()).find(((t, r) => r === e))) && void 0 !== t ? t : null
                }
            }
        }

        function j(e) {
            (function({
                webPixelApi: e,
                cookie: t,
                cookieRestrictedDomains: r
            }) {
                const i = P(t);
                A(document, "cookie", {
                    get: function() {
                        return i.getRemote(e.browser.cookie.get), i.getValue()
                    },
                    set: function(t) {
                        const n = t.split(";").map((e => e.trim())).find((e => e.startsWith("domain="))),
                            o = (null == n ? void 0 : n.split("=")[1]) || "";
                        if (!(r.filter((e => new RegExp(`^\\.?${e}$`).test(o))).length > 0)) {
                            const r = i.getValue();
                            i.update((() => e.browser.cookie.set(t)), (() => function(e, t) {
                                const r = e.split("; ").reduce(((e, t) => {
                                        const [r, i] = t.split("=");
                                        return i && (e[r] = i), e
                                    }), {}),
                                    i = t.split(";")[0],
                                    [n, o] = i.split("=");
                                return r[n] = o, Object.keys(r).map((e => `${e}=${r[e]}`)).join("; ")
                            }(r, t)))
                        }
                    },
                    configurable: !1,
                    enumerable: !1
                })
            })(e),
            function({
                origin: e,
                internalApi: t
            }) {
                const r = P(e);
                A(window, "origin", {
                    get: function() {
                        return r.getRemote(t.self.origin.get), r.getValue()
                    },
                    configurable: !1,
                    enumerable: !1
                })
            }(e),
            function({
                referrer: e,
                internalApi: t
            }) {
                const r = P(e);
                A(document, "referrer", {
                    get: () => (r.getRemote(t.document.referrer.get), r.getValue()),
                    configurable: !1,
                    enumerable: !1
                })
            }(e),
            function({
                webPixelApi: e,
                localStorageItems: t
            }) {
                const r = D(t, e.browser.localStorage);
                A(window, "localStorage", {
                    get: () => r,
                    configurable: !1,
                    enumerable: !1
                })
            }(e),
            function({
                webPixelApi: e,
                sessionStorageItems: t
            }) {
                const r = D(t, e.browser.sessionStorage);
                A(window, "sessionStorage", {
                    get: () => r,
                    configurable: !1,
                    enumerable: !1
                })
            }(e)
        }
        class q extends Error {
            constructor(...e) {
                super(...e), this.message = "Invalid Extension Point"
            }
        }
        class F extends Error {
            constructor(...e) {
                super(...e), this.name = "SandboxAlreadyInitializedError", this.message = "Sandbox already initialized."
            }
        }
        let W = !1;
        const V = async e => {
            const {
                pageTitle: t,
                webPixelConfig: r,
                shopId: i,
                webPixelApi: n,
                internalApi: o
            } = e, s = n.init.context;
            if (W) {
                const e = new F;
                throw R(e, {
                    pixelId: r.id,
                    pixelType: r.type,
                    runtimeContext: r.runtimeContext,
                    shopId: i,
                    context: "v0/createSandbox/alreadyInitialized",
                    userAgent: s.navigator.userAgent || self.navigator.userAgent,
                    hashVersionSandbox: w,
                    sandboxUrl: v.href || "unknown"
                }), e
            }
            W = !0, a(n), a(o);
            const c = h();
            try {
                c && (n.browser.sendBeacon = E), U(c), c || (j(e), self.document.title = t)
            } catch (l) {
                throw R(l, {
                    pixelId: r.id,
                    pixelType: r.type,
                    runtimeContext: r.runtimeContext,
                    shopId: i,
                    context: "v0/createSandbox/createRestrictedEnvironment",
                    userAgent: s.navigator.userAgent || self.navigator.userAgent,
                    hashVersionSandbox: w,
                    sandboxUrl: v.href || "unknown"
                }), l
            }
            return new Promise(((e, t) => {
                try {
                    if (Object.defineProperty(self, "webPixelsManager", {
                            value: {
                                createShopifyExtend: () => ({
                                    extend: async (r, i) => {
                                        if ("WebPixel::Render" === r) try {
                                            await i.call(n, n), e({
                                                status: "success",
                                                hashVersion: w,
                                                sandboxUrl: v.href || "unknown"
                                            })
                                        } catch (l) {
                                            t(l)
                                        } else t(new q)
                                    }
                                })
                            },
                            enumerable: !0,
                            writable: !1
                        }), "function" == typeof self.initWebPixel) try {
                        self.initWebPixel()
                    } catch (l) {
                        t(l)
                    }
                } catch (l) {
                    R(l, {
                        pixelId: r.id,
                        pixelType: r.type,
                        runtimeContext: r.runtimeContext,
                        shopId: i,
                        context: "v0/createSandbox/uncaughtError",
                        userAgent: s.navigator.userAgent || self.navigator.userAgent,
                        hashVersionSandbox: w,
                        sandboxUrl: v.href || "unknown"
                    }), t(l)
                }
            }))
        };
        ! function() {
            const e = h(),
                t = e ? "worker" : "iframe";
            try {
                (function(e, {
                    uuid: t = b,
                    createEncoder: r = d,
                    callable: i
                } = {}) {
                    let o = !1,
                        a = e;
                    const s = new Map,
                        c = new Map,
                        l = function(e, t) {
                            let r;
                            if (null == t) {
                                if ("function" != typeof Proxy) throw new Error("You must pass an array of callable methods in environments without Proxies.");
                                const t = new Map;
                                r = new Proxy({}, {
                                    get(r, i) {
                                        if (t.has(i)) return t.get(i);
                                        const n = e(i);
                                        return t.set(i, n), n
                                    }
                                })
                            } else {
                                r = {};
                                for (const i of t) Object.defineProperty(r, i, {
                                    value: e(i),
                                    writable: !1,
                                    configurable: !0,
                                    enumerable: !0
                                })
                            }
                            return r
                        }(m, i),
                        u = r({
                            uuid: t,
                            release(e) {
                                f(3, [e])
                            },
                            call(e, r, i) {
                                const n = t(),
                                    o = w(n, i),
                                    [a, s] = u.encode(r);
                                return f(5, [n, e, a], s), o
                            }
                        });
                    return a.addEventListener("message", p), {
                        call: l,
                        replace(e) {
                            const t = a;
                            a = e, t.removeEventListener("message", p), e.addEventListener("message", p)
                        },
                        expose(e) {
                            for (const t of Object.keys(e)) {
                                const r = e[t];
                                "function" == typeof r ? s.set(t, r) : s.delete(t)
                            }
                        },
                        callable(...e) {
                            if (null != i)
                                for (const t of e) Object.defineProperty(l, t, {
                                    value: m(t),
                                    writable: !1,
                                    configurable: !0,
                                    enumerable: !0
                                })
                        },
                        terminate() {
                            f(2, void 0), g(), a.terminate && a.terminate()
                        }
                    };

                    function f(e, t, r) {
                        o || a.postMessage(t ? [e, t] : [e], r)
                    }
                    async function p(e) {
                        const {
                            data: t
                        } = e;
                        if (null != t && Array.isArray(t)) switch (t[0]) {
                            case 2:
                                g();
                                break;
                            case 0:
                                {
                                    const e = new n,
                                        [i, o, a] = t[1],
                                        c = s.get(o);
                                    try {
                                        if (null == c) throw new Error(`No '${o}' method is exposed on this endpoint`);
                                        const [t, r] = u.encode(await c(...u.decode(a, [e])));
                                        f(1, [i, void 0, t], r)
                                    } catch (r) {
                                        const {
                                            name: e,
                                            message: t,
                                            stack: n
                                        } = r;
                                        throw f(1, [i, {
                                            name: e,
                                            message: t,
                                            stack: n
                                        }]), r
                                    } finally {
                                        e.release()
                                    }
                                    break
                                }
                            case 1:
                                {
                                    const [e] = t[1];c.get(e)(...t[1]),
                                    c.delete(e);
                                    break
                                }
                            case 3:
                                {
                                    const [e] = t[1];u.release(e);
                                    break
                                }
                            case 6:
                                {
                                    const [e] = t[1];c.get(e)(...t[1]),
                                    c.delete(e);
                                    break
                                }
                            case 5:
                                {
                                    const [e, i, n] = t[1];
                                    try {
                                        const t = await u.call(i, n),
                                            [r, o] = u.encode(t);
                                        f(6, [e, void 0, r], o)
                                    } catch (r) {
                                        const {
                                            name: t,
                                            message: i,
                                            stack: n
                                        } = r;
                                        throw f(6, [e, {
                                            name: t,
                                            message: i,
                                            stack: n
                                        }]), r
                                    }
                                    break
                                }
                        }
                    }

                    function m(e) {
                        return (...r) => {
                            if (o) return Promise.reject(new Error("You attempted to call a function on a terminated web worker."));
                            if ("string" != typeof e && "number" != typeof e) return Promise.reject(new Error(`Can’t call a symbol method on a remote endpoint: ${e.toString()}`));
                            const i = t(),
                                n = w(i),
                                [a, s] = u.encode(r);
                            return f(0, [i, e, a], s), n
                        }
                    }

                    function w(e, t) {
                        return new Promise(((r, i) => {
                            c.set(e, ((e, n, o) => {
                                if (null == n) r(o && u.decode(o, t));
                                else {
                                    const e = new Error;
                                    Object.assign(e, n), i(e)
                                }
                            }))
                        }))
                    }

                    function g() {
                        var e;
                        o = !0, s.clear(), c.clear(), null === (e = u.terminate) || void 0 === e || e.call(u), a.removeEventListener("message", p)
                    }
                })(e ? self : function({
                    targetOrigin: e = "*"
                } = {}) {
                    if ("undefined" == typeof self || null == self.parent) throw new Error("This does not appear to be a child iframe, because there is no parent window.");
                    const {
                        parent: t
                    } = self, r = () => t.postMessage(l, e);
                    window.addEventListener("message", (e => {
                        e.source === t && "complete" === document.readyState && e.data === l && r()
                    })), "complete" === document.readyState ? r() : document.addEventListener("readystatechange", (() => {
                        "complete" === document.readyState && r()
                    }));
                    const i = new WeakMap;
                    return {
                        postMessage(r, i) {
                            t.postMessage(r, e, i)
                        },
                        addEventListener(e, r) {
                            const n = e => {
                                e.source === t && r(e)
                            };
                            i.set(r, n), self.addEventListener(e, n)
                        },
                        removeEventListener(e, t) {
                            const r = i.get(t);
                            null != r && (i.delete(t), self.removeEventListener(e, r))
                        }
                    }
                }(), {
                    callable: []
                }).expose({
                    initialize: V
                })
            } catch (r) {
                R(r, {
                    context: `v0/createSandbox/${t}`
                })
            }
        }()
    })()
})();