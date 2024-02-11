! function() {
    "use strict";
    const e = {
        addCSS: !0,
        thumbWidth: 15,
        watch: !0
    };
    const t = e => null != e ? e.constructor : null,
        i = (e, t) => Boolean(e && t && e instanceof t),
        s = e => null == e,
        n = e => t(e) === Object,
        l = e => t(e) === String,
        a = e => Array.isArray(e),
        o = e => i(e, NodeList);
    var r = {
        nullOrUndefined: s,
        object: n,
        number: e => t(e) === Number && !Number.isNaN(e),
        string: l,
        boolean: e => t(e) === Boolean,
        function: e => t(e) === Function,
        array: a,
        nodeList: o,
        element: e => i(e, Element),
        event: e => i(e, Event),
        empty: e => s(e) || (l(e) || a(e) || o(e)) && !e.length || n(e) && !Object.keys(e).length
    };

    function c(e, t) {
        if (t < 1) {
            const i = function(e) {
                const t = `${e}`.match(/(?:\.(\d+))?(?:[eE]([+-]?\d+))?$/);
                return t ? Math.max(0, (t[1] ? t[1].length : 0) - (t[2] ? +t[2] : 0)) : 0
            }(t);
            return parseFloat(e.toFixed(i))
        }
        return Math.round(e / t) * t
    }
    class h {
        constructor(t, i) {
            r.element(t) ? this.element = t : r.string(t) && (this.element = document.querySelector(t)), r.element(this.element) && r.empty(this.element.rangeTouch) && (this.config = Object.assign({}, e, i), this.init())
        }
        static get enabled() {
            return "ontouchstart" in document.documentElement
        }
        static setup(t, i = {}) {
            let s = null;
            if (r.empty(t) || r.string(t) ? s = Array.from(document.querySelectorAll(r.string(t) ? t : 'input[type="range"]')) : r.element(t) ? s = [t] : r.nodeList(t) ? s = Array.from(t) : r.array(t) && (s = t.filter(r.element)), r.empty(s)) return null;
            const n = Object.assign({}, e, i);
            if (r.string(t) && n.watch) {
                new MutationObserver(e => {
                    Array.from(e).forEach(e => {
                        Array.from(e.addedNodes).forEach(e => {
                            if (!r.element(e) || ! function(e, t) {
                                    return function() {
                                        return Array.from(document.querySelectorAll(t)).includes(this)
                                    }.call(e, t)
                                }(e, t)) return;
                            new h(e, n)
                        })
                    })
                }).observe(document.body, {
                    childList: !0,
                    subtree: !0
                })
            }
            return s.map(e => new h(e, i))
        }
        init() {
            h.enabled && (this.config.addCSS && (this.element.style.userSelect = "none", this.element.style.webKitUserSelect = "none", this.element.style.touchAction = "manipulation"), this.listeners(!0), this.element.rangeTouch = this)
        }
        destroy() {
            h.enabled && (this.listeners(!1), this.element.rangeTouch = null)
        }
        listeners(e) {
            const t = e ? "addEventListener" : "removeEventListener";
            ["touchstart", "touchmove", "touchend"].forEach(e => {
                this.element[t](e, e => this.set(e), !1)
            })
        }
        get(e) {
            if (!h.enabled || !r.event(e)) return null;
            const t = e.target,
                i = e.changedTouches[0],
                s = parseFloat(t.getAttribute("min")) || 0,
                n = parseFloat(t.getAttribute("max")) || 100,
                l = parseFloat(t.getAttribute("step")) || 1,
                a = n - s;
            let o;
            const u = t.getBoundingClientRect(),
                d = 100 / u.width * (this.config.thumbWidth / 2) / 100;
            return (o = 100 / u.width * (i.clientX - u.left)) < 0 ? o = 0 : o > 100 && (o = 100), o < 50 ? o -= (100 - 2 * o) * d : o > 50 && (o += 2 * (o - 50) * d), s + c(a * (o / 100), l)
        }
        set(e) {
            h.enabled && r.event(e) && !e.target.disabled && (e.preventDefault(), e.target.value = this.get(e), function(e, t) {
                if (!e || !t) return;
                const i = new Event(t);
                e.dispatchEvent(i)
            }(e.target, "touchend" === e.type ? "change" : "input"))
        }
    }
    const u = e => null != e ? e.constructor : null,
        d = (e, t) => Boolean(e && t && e instanceof t),
        p = e => null == e,
        m = e => u(e) === Object,
        g = e => u(e) === String,
        f = e => Array.isArray(e),
        y = e => d(e, NodeList),
        b = e => p(e) || (g(e) || f(e) || y(e)) && !e.length || m(e) && !Object.keys(e).length;
    var v = {
        nullOrUndefined: p,
        object: m,
        number: e => u(e) === Number && !Number.isNaN(e),
        string: g,
        boolean: e => u(e) === Boolean,
        function: e => u(e) === Function,
        array: f,
        weakMap: e => d(e, WeakMap),
        nodeList: y,
        element: e => d(e, Element),
        textNode: e => u(e) === Text,
        event: e => d(e, Event),
        keyboardEvent: e => d(e, KeyboardEvent),
        cue: e => d(e, window.TextTrackCue) || d(e, window.VTTCue),
        track: e => d(e, TextTrack) || !p(e) && g(e.kind),
        promise: e => d(e, Promise),
        url: e => {
            if (d(e, window.URL)) return !0;
            if (!g(e)) return !1;
            let t = e;
            e.startsWith("http://") && e.startsWith("https://") || (t = "http://".concat(e));
            try {
                return !b(new URL(t).hostname)
            } catch (e) {
                return !1
            }
        },
        empty: b
    };
    const w = (() => {
        const e = document.createElement("span"),
            t = {
                WebkitTransition: "webkitTransitionEnd",
                MozTransition: "transitionend",
                OTransition: "oTransitionEnd otransitionend",
                transition: "transitionend"
            },
            i = Object.keys(t).find(t => void 0 !== e.style[t]);
        return !!v.string(i) && t[i]
    })();

    function k(e, t) {
        setTimeout(() => {
            try {
                e.hidden = !0, e.offsetHeight, e.hidden = !1
            } catch (e) {}
        }, t)
    }
    const T = {
            isIE:
                /* @cc_on!@ */
                !!document.documentMode,
            isEdge: window.navigator.userAgent.includes("Edge"),
            isWebkit: "WebkitAppearance" in document.documentElement.style && !/Edge/.test(navigator.userAgent),
            isIPhone: /(iPhone|iPod)/gi.test(navigator.platform),
            isIos: /(iPad|iPhone|iPod)/gi.test(navigator.platform),
            isAndroid: /(Android)/gi.test(navigator.userAgent),
            isMac: /(Macintosh)/gi.test(navigator.userAgent)
        },
        C = (() => {
            let e = !1;
            try {
                const t = Object.defineProperty({}, "passive", {
                    get: () => (e = !0, null)
                });
                window.addEventListener("test", null, t), window.removeEventListener("test", null, t)
            } catch (e) {}
            return e
        })();

    function S(e, t, i) {
        let s = arguments.length > 3 && void 0 !== arguments[3] && arguments[3],
            n = !(arguments.length > 4 && void 0 !== arguments[4]) || arguments[4],
            l = arguments.length > 5 && void 0 !== arguments[5] && arguments[5];
        if (!e || !("addEventListener" in e) || v.empty(t) || !v.function(i)) return;
        const a = t.split(" ");
        let o = l;
        C && (o = {
            passive: n,
            capture: l
        }), a.forEach(t => {
            this && this.eventListeners && s && this.eventListeners.push({
                element: e,
                type: t,
                callback: i,
                options: o
            }), e[s ? "addEventListener" : "removeEventListener"](t, i, o)
        })
    }

    function N(e) {
        let t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : "",
            i = arguments.length > 2 ? arguments[2] : void 0,
            s = !(arguments.length > 3 && void 0 !== arguments[3]) || arguments[3],
            n = arguments.length > 4 && void 0 !== arguments[4] && arguments[4];
        S.call(this, e, t, i, !0, s, n)
    }

    function E(e) {
        let t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : "",
            i = arguments.length > 2 ? arguments[2] : void 0,
            s = !(arguments.length > 3 && void 0 !== arguments[3]) || arguments[3],
            n = arguments.length > 4 && void 0 !== arguments[4] && arguments[4];
        S.call(this, e, t, i, !1, s, n)
    }

    function M(e) {
        var t = this;
        let i = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : "",
            s = arguments.length > 2 ? arguments[2] : void 0,
            n = !(arguments.length > 3 && void 0 !== arguments[3]) || arguments[3],
            l = arguments.length > 4 && void 0 !== arguments[4] && arguments[4];
        S.call(this, e, i, (function a() {
            E(e, i, a, n, l);
            for (var o = arguments.length, r = new Array(o), c = 0; c < o; c++) r[c] = arguments[c];
            s.apply(t, r)
        }), !0, n, l)
    }

    function A(e) {
        let t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : "",
            i = arguments.length > 2 && void 0 !== arguments[2] && arguments[2],
            s = arguments.length > 3 && void 0 !== arguments[3] ? arguments[3] : {};
        if (!v.element(e) || v.empty(t)) return;
        const n = new CustomEvent(t, {
            bubbles: i,
            detail: Object.assign({}, s, {
                plyr: this
            })
        });
        e.dispatchEvent(n)
    }

    function x() {
        this && this.eventListeners && (this.eventListeners.forEach(e => {
            const {
                element: t,
                type: i,
                callback: s,
                options: n
            } = e;
            t.removeEventListener(i, s, n)
        }), this.eventListeners = [])
    }

    function P() {
        return new Promise(e => this.ready ? setTimeout(e, 0) : N.call(this, this.elements.container, "ready", e)).then(() => {})
    }

    function L(e, t) {
        return t.split(".").reduce((e, t) => e && e[t], e)
    }

    function I() {
        let e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {};
        for (var t = arguments.length, i = new Array(t > 1 ? t - 1 : 0), s = 1; s < t; s++) i[s - 1] = arguments[s];
        if (!i.length) return e;
        const n = i.shift();
        return v.object(n) ? (Object.keys(n).forEach(t => {
            v.object(n[t]) ? (Object.keys(e).includes(t) || Object.assign(e, {
                [t]: {}
            }), I(e[t], n[t])) : Object.assign(e, {
                [t]: n[t]
            })
        }), I(e, ...i)) : e
    }

    function _(e, t) {
        const i = e.length ? e : [e];
        Array.from(i).reverse().forEach((e, i) => {
            const s = i > 0 ? t.cloneNode(!0) : t,
                n = e.parentNode,
                l = e.nextSibling;
            s.appendChild(e), l ? n.insertBefore(s, l) : n.appendChild(s)
        })
    }

    function q(e, t) {
        v.element(e) && !v.empty(t) && Object.entries(t).filter(e => {
            let [, t] = e;
            return !v.nullOrUndefined(t)
        }).forEach(t => {
            let [i, s] = t;
            return e.setAttribute(i, s)
        })
    }

    function F(e, t, i) {
        const s = document.createElement(e);
        return v.object(t) && q(s, t), v.string(i) && (s.innerText = i), s
    }

    function O(e, t, i, s) {
        v.element(t) && t.appendChild(F(e, i, s))
    }

    function H(e) {
        v.nodeList(e) || v.array(e) ? Array.from(e).forEach(H) : v.element(e) && v.element(e.parentNode) && e.parentNode.removeChild(e)
    }

    function j(e) {
        if (!v.element(e)) return;
        let {
            length: t
        } = e.childNodes;
        for (; t > 0;) e.removeChild(e.lastChild), t -= 1
    }

    function B(e, t) {
        if (!v.string(e) || v.empty(e)) return {};
        const i = {},
            s = I({}, t);
        return e.split(",").forEach(e => {
            const t = e.trim(),
                n = t.replace(".", ""),
                l = t.replace(/[[\]]/g, "").split("="),
                [a] = l,
                o = l.length > 1 ? l[1].replace(/["']/g, "") : "";
            switch (t.charAt(0)) {
                case ".":
                    v.string(s.class) ? i.class = "".concat(s.class, " ").concat(n) : i.class = n;
                    break;
                case "#":
                    i.id = t.replace("#", "");
                    break;
                case "[":
                    i[a] = o
            }
        }), I(s, i)
    }

    function D(e, t) {
        if (!v.element(e)) return;
        let i = t;
        v.boolean(i) || (i = !e.hidden), e.hidden = i
    }

    function R(e, t, i) {
        if (v.nodeList(e)) return Array.from(e).map(e => R(e, t, i));
        if (v.element(e)) {
            let s = "toggle";
            return void 0 !== i && (s = i ? "add" : "remove"), e.classList[s](t), e.classList.contains(t)
        }
        return !1
    }

    function U(e, t) {
        return v.element(e) && e.classList.contains(t)
    }

    function V(e, t) {
        return function() {
            return Array.from(document.querySelectorAll(t)).includes(this)
        }.call(e, t)
    }

    function W(e) {
        return this.elements.container.querySelectorAll(e)
    }

    function z(e) {
        return this.elements.container.querySelector(e)
    }

    function K() {
        let e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : null,
            t = arguments.length > 1 && void 0 !== arguments[1] && arguments[1];
        if (!v.element(e)) return;
        const i = W.call(this, "button:not(:disabled), input:not(:disabled), [tabindex]"),
            s = i[0],
            n = i[i.length - 1];
        S.call(this, this.elements.container, "keydown", e => {
            if ("Tab" !== e.key || 9 !== e.keyCode || !this.fullscreen.active) return;
            const t = document.activeElement;
            t !== n || e.shiftKey ? t === s && e.shiftKey && (n.focus(), e.preventDefault()) : (s.focus(), e.preventDefault())
        }, t, !1)
    }

    function X() {
        let e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : null,
            t = arguments.length > 1 && void 0 !== arguments[1] && arguments[1];
        v.element(e) && (e.focus({
            preventScroll: !0
        }), t && R(e, this.config.classNames.tabFocus))
    }
    const Q = {
            "audio/ogg": "vorbis",
            "audio/wav": "1",
            "video/webm": "vp8, vorbis",
            "video/mp4": "avc1.42E01E, mp4a.40.2",
            "video/ogg": "theora"
        },
        J = {
            audio: "canPlayType" in document.createElement("audio"),
            video: "canPlayType" in document.createElement("video"),
            check(e, t, i) {
                const s = T.isIPhone && i && J.playsinline,
                    n = J[e] || "html5" !== t;
                return {
                    api: n,
                    ui: n && J.rangeInput && ("video" !== e || !T.isIPhone || s)
                }
            },
            pip: (() => !T.isIPhone && (!!v.function(F("video").webkitSetPresentationMode) || !(!document.pictureInPictureEnabled || F("video").disablePictureInPicture)))(),
            airplay: v.function(window.WebKitPlaybackTargetAvailabilityEvent),
            playsinline: "playsInline" in document.createElement("video"),
            mime(e) {
                if (v.empty(e)) return !1;
                const [t] = e.split("/");
                let i = e;
                if (!this.isHTML5 || t !== this.type) return !1;
                Object.keys(Q).includes(i) && (i += '; codecs="'.concat(Q[e], '"'));
                try {
                    return Boolean(i && this.media.canPlayType(i).replace(/no/, ""))
                } catch (e) {
                    return !1
                }
            },
            textTracks: "textTracks" in document.createElement("video"),
            rangeInput: (() => {
                const e = document.createElement("input");
                return e.type = "range", "range" === e.type
            })(),
            touch: "ontouchstart" in document.documentElement,
            transitions: !1 !== w,
            reducedMotion: "matchMedia" in window && window.matchMedia("(prefers-reduced-motion)").matches
        };

    function $(e) {
        if (!(v.array(e) || v.string(e) && e.includes(":"))) return !1;
        return (v.array(e) ? e : e.split(":")).map(Number).every(v.number)
    }

    function G(e) {
        if (!v.array(e) || !e.every(v.number)) return null;
        const [t, i] = e, s = (e, t) => 0 === t ? e : s(t, e % t), n = s(t, i);
        return [t / n, i / n]
    }

    function Y(e) {
        const t = e => $(e) ? e.split(":").map(Number) : null;
        let i = t(e);
        if (null === i && (i = t(this.config.ratio)), null === i && !v.empty(this.embed) && v.array(this.embed.ratio) && ({
                ratio: i
            } = this.embed), null === i && this.isHTML5) {
            const {
                videoWidth: e,
                videoHeight: t
            } = this.media;
            i = G([e, t])
        }
        return i
    }

    function Z(e) {
        if (!this.isVideo) return {};
        const t = Y.call(this, e),
            [i, s] = v.array(t) ? t : [0, 0],
            n = 100 / i * s;
        return this.elements.wrapper.style.paddingBottom = "".concat(n, "%"), this.isHTML5 && this.elements.wrapper.classList.toggle(this.config.classNames.videoFixedRatio, null !== t), {
            padding: n,
            ratio: t
        }
    }
    const ee = {
        getSources() {
            if (!this.isHTML5) return [];
            return Array.from(this.media.querySelectorAll("source")).filter(e => {
                const t = e.getAttribute("type");
                return !!v.empty(t) || J.mime.call(this, t)
            })
        },
        getQualityOptions() {
            return ee.getSources.call(this).map(e => Number(e.getAttribute("size"))).filter(Boolean)
        },
        extend() {
            if (!this.isHTML5) return;
            const e = this;
            v.empty(this.config.ratio) || Z.call(e), Object.defineProperty(e.media, "quality", {
                get() {
                    const t = ee.getSources.call(e).find(t => t.getAttribute("src") === e.source);
                    return t && Number(t.getAttribute("size"))
                },
                set(t) {
                    const i = ee.getSources.call(e).find(e => Number(e.getAttribute("size")) === t);
                    if (!i) return;
                    const {
                        currentTime: s,
                        paused: n,
                        preload: l,
                        readyState: a
                    } = e.media;
                    e.media.src = i.getAttribute("src"), ("none" !== l || a) && (e.once("loadedmetadata", () => {
                        e.currentTime = s, n || e.play()
                    }), e.media.load()), A.call(e, e.media, "qualitychange", !1, {
                        quality: t
                    })
                }
            })
        },
        cancelRequests() {
            this.isHTML5 && (H(ee.getSources.call(this)), this.media.setAttribute("src", this.config.blankVideo), this.media.load(), this.debug.log("Cancelled network requests"))
        }
    };

    function te(e) {
        return v.array(e) ? e.filter((t, i) => e.indexOf(t) === i) : e
    }

    function ie() {
        let e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : "",
            t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : "",
            i = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : "";
        return e.replace(new RegExp(t.toString().replace(/([.*+?^=!:${}()|[\]/\\])/g, "\\$1"), "g"), i.toString())
    }

    function se() {
        return (arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : "").toString().replace(/\w\S*/g, e => e.charAt(0).toUpperCase() + e.substr(1).toLowerCase())
    }

    function ne() {
        let e = (arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : "").toString();
        return (e = function() {
            let e = (arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : "").toString();
            return e = ie(e, "-", " "), e = ie(e, "_", " "), ie(e = se(e), " ", "")
        }(e)).charAt(0).toLowerCase() + e.slice(1)
    }

    function le(e) {
        const t = document.createElement("div");
        return t.appendChild(e), t.innerHTML
    }
    const ae = {
        get() {
            let e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : "",
                t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {};
            if (v.empty(e) || v.empty(t)) return "";
            let i = L(t.i18n, e);
            if (v.empty(i)) return "";
            const s = {
                "{seektime}": t.seekTime,
                "{title}": t.title
            };
            return Object.entries(s).forEach(e => {
                let [t, s] = e;
                i = ie(i, t, s)
            }), i
        }
    };
    class oe {
        constructor(e) {
            this.enabled = e.config.storage.enabled, this.key = e.config.storage.key
        }
        static get supported() {
            try {
                if (!("localStorage" in window)) return !1;
                const e = "___test";
                return window.localStorage.setItem(e, e), window.localStorage.removeItem(e), !0
            } catch (e) {
                return !1
            }
        }
        get(e) {
            if (!oe.supported || !this.enabled) return null;
            const t = window.localStorage.getItem(this.key);
            if (v.empty(t)) return null;
            const i = JSON.parse(t);
            return v.string(e) && e.length ? i[e] : i
        }
        set(e) {
            if (!oe.supported || !this.enabled) return;
            if (!v.object(e)) return;
            let t = this.get();
            v.empty(t) && (t = {}), I(t, e), window.localStorage.setItem(this.key, JSON.stringify(t))
        }
    }

    function re(e) {
        let t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : "text";
        return new Promise((i, s) => {
            try {
                const s = new XMLHttpRequest;
                if (!("withCredentials" in s)) return;
                s.addEventListener("load", () => {
                    if ("text" === t) try {
                        i(JSON.parse(s.responseText))
                    } catch (e) {
                        i(s.responseText)
                    } else i(s.response)
                }), s.addEventListener("error", () => {
                    throw new Error(s.status)
                }), s.open("GET", e, !0), s.responseType = t, s.send()
            } catch (e) {
                s(e)
            }
        })
    }

    function ce(e, t) {
        if (!v.string(e)) return;
        const i = v.string(t);
        let s = !1;
        const n = () => null !== document.getElementById(t),
            l = (e, t) => {
                e.innerHTML = t, i && n() || document.body.insertAdjacentElement("afterbegin", e)
            };
        if (!i || !n()) {
            const n = oe.supported,
                a = document.createElement("div");
            if (a.setAttribute("hidden", ""), i && a.setAttribute("id", t), n) {
                const e = window.localStorage.getItem("".concat("cache", "-").concat(t));
                if (s = null !== e) {
                    const t = JSON.parse(e);
                    l(a, t.content)
                }
            }
            re(e).then(e => {
                v.empty(e) || (n && window.localStorage.setItem("".concat("cache", "-").concat(t), JSON.stringify({
                    content: e
                })), l(a, e))
            }).catch(() => {})
        }
    }
    const he = e => Math.trunc(e / 60 / 60 % 60, 10),
        ue = e => Math.trunc(e / 60 % 60, 10),
        de = e => Math.trunc(e % 60, 10);

    function pe() {
        let e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : 0,
            t = arguments.length > 1 && void 0 !== arguments[1] && arguments[1],
            i = arguments.length > 2 && void 0 !== arguments[2] && arguments[2];
        if (!v.number(e)) return pe(null, t, i);
        const s = e => "0".concat(e).slice(-2);
        let n = he(e);
        const l = ue(e),
            a = de(e);
        return n = t || n > 0 ? "".concat(n, ":") : "", "".concat(i && e > 0 ? "-" : "").concat(n).concat(s(l), ":").concat(s(a))
    }
    const me = {
        getIconUrl() {
            const e = new URL(this.config.iconUrl, window.location).host !== window.location.host || T.isIE && !window.svg4everybody;
            return {
                url: this.config.iconUrl,
                cors: e
            }
        },
        findElements() {
            try {
                return this.elements.controls = z.call(this, this.config.selectors.controls.wrapper), this.elements.buttons = {
                    play: W.call(this, this.config.selectors.buttons.play),
                    pause: z.call(this, this.config.selectors.buttons.pause),
                    restart: z.call(this, this.config.selectors.buttons.restart),
                    rewind: z.call(this, this.config.selectors.buttons.rewind),
                    fastForward: z.call(this, this.config.selectors.buttons.fastForward),
                    mute: z.call(this, this.config.selectors.buttons.mute),
                    pip: z.call(this, this.config.selectors.buttons.pip),
                    airplay: z.call(this, this.config.selectors.buttons.airplay),
                    settings: z.call(this, this.config.selectors.buttons.settings),
                    captions: z.call(this, this.config.selectors.buttons.captions),
                    fullscreen: z.call(this, this.config.selectors.buttons.fullscreen)
                }, this.elements.progress = z.call(this, this.config.selectors.progress), this.elements.inputs = {
                    seek: z.call(this, this.config.selectors.inputs.seek),
                    volume: z.call(this, this.config.selectors.inputs.volume)
                }, this.elements.display = {
                    buffer: z.call(this, this.config.selectors.display.buffer),
                    currentTime: z.call(this, this.config.selectors.display.currentTime),
                    duration: z.call(this, this.config.selectors.display.duration)
                }, v.element(this.elements.progress) && (this.elements.display.seekTooltip = this.elements.progress.querySelector(".".concat(this.config.classNames.tooltip))), !0
            } catch (e) {
                return this.debug.warn("It looks like there is a problem with your custom controls HTML", e), this.toggleNativeControls(!0), !1
            }
        },
        createIcon(e, t) {
            const i = me.getIconUrl.call(this),
                s = "".concat(i.cors ? "" : i.url, "#").concat(this.config.iconPrefix),
                n = document.createElementNS("http://www.w3.org/2000/svg", "svg");
            q(n, I(t, {
                role: "presentation",
                focusable: "false"
            }));
            const l = document.createElementNS("http://www.w3.org/2000/svg", "use"),
                a = "".concat(s, "-").concat(e);
            return "href" in l && l.setAttributeNS("http://www.w3.org/1999/xlink", "href", a), l.setAttributeNS("http://www.w3.org/1999/xlink", "xlink:href", a), n.appendChild(l), n
        },
        createLabel(e) {
            let t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {};
            const i = ae.get(e, this.config);
            return F("span", Object.assign({}, t, {
                class: [t.class, this.config.classNames.hidden].filter(Boolean).join(" ")
            }), i)
        },
        createBadge(e) {
            if (v.empty(e)) return null;
            const t = F("span", {
                class: this.config.classNames.menu.value
            });
            return t.appendChild(F("span", {
                class: this.config.classNames.menu.badge
            }, e)), t
        },
        createButton(e, t) {
            const i = I({}, t);
            let s = ne(e);
            const n = {
                element: "button",
                toggle: !1,
                label: null,
                icon: null,
                labelPressed: null,
                iconPressed: null
            };
            switch (["element", "icon", "label"].forEach(e => {
                Object.keys(i).includes(e) && (n[e] = i[e], delete i[e])
            }), "button" !== n.element || Object.keys(i).includes("type") || (i.type = "button"), Object.keys(i).includes("class") ? i.class.split(" ").some(e => e === this.config.classNames.control) || I(i, {
                class: "".concat(i.class, " ").concat(this.config.classNames.control)
            }) : i.class = this.config.classNames.control, e) {
                case "play":
                    n.toggle = !0, n.label = "play", n.labelPressed = "pause", n.icon = "play", n.iconPressed = "pause";
                    break;
                case "mute":
                    n.toggle = !0, n.label = "mute", n.labelPressed = "unmute", n.icon = "volume", n.iconPressed = "muted";
                    break;
                case "captions":
                    n.toggle = !0, n.label = "enableCaptions", n.labelPressed = "disableCaptions", n.icon = "captions-off", n.iconPressed = "captions-on";
                    break;
                case "fullscreen":
                    n.toggle = !0, n.label = "enterFullscreen", n.labelPressed = "exitFullscreen", n.icon = "enter-fullscreen", n.iconPressed = "exit-fullscreen";
                    break;
                case "play-large":
                    i.class += " ".concat(this.config.classNames.control, "--overlaid"), s = "play", n.label = "play", n.icon = "play-large";
                    break;
                default:
                    v.empty(n.label) && (n.label = s), v.empty(n.icon) && (n.icon = e)
            }
            const l = F(n.element);
            return n.toggle ? (l.appendChild(me.createIcon.call(this, n.iconPressed, {
                class: "icon--pressed"
            })), l.appendChild(me.createIcon.call(this, n.icon, {
                class: "icon--not-pressed"
            })), l.appendChild(me.createLabel.call(this, n.labelPressed, {
                class: "label--pressed"
            })), l.appendChild(me.createLabel.call(this, n.label, {
                class: "label--not-pressed"
            }))) : (l.appendChild(me.createIcon.call(this, n.icon)), l.appendChild(me.createLabel.call(this, n.label))), I(i, B(this.config.selectors.buttons[s], i)), q(l, i), "play" === s ? (v.array(this.elements.buttons[s]) || (this.elements.buttons[s] = []), this.elements.buttons[s].push(l)) : this.elements.buttons[s] = l, l
        },
        createRange(e, t) {
            const i = F("input", I(B(this.config.selectors.inputs[e]), {
                type: "range",
                min: 0,
                max: 100,
                step: .01,
                value: 0,
                autocomplete: "off",
                role: "slider",
                "aria-label": ae.get(e, this.config),
                "aria-valuemin": 0,
                "aria-valuemax": 100,
                "aria-valuenow": 0
            }, t));
            return this.elements.inputs[e] = i, me.updateRangeFill.call(this, i), h.setup(i), i
        },
        createProgress(e, t) {
            const i = F("progress", I(B(this.config.selectors.display[e]), {
                min: 0,
                max: 100,
                value: 0,
                role: "progressbar",
                "aria-hidden": !0
            }, t));
            if ("volume" !== e) {
                i.appendChild(F("span", null, "0"));
                const t = {
                        played: "played",
                        buffer: "buffered"
                    }[e],
                    s = t ? ae.get(t, this.config) : "";
                i.innerText = "% ".concat(s.toLowerCase())
            }
            return this.elements.display[e] = i, i
        },
        createTime(e, t) {
            const i = B(this.config.selectors.display[e], t),
                s = F("div", I(i, {
                    class: "".concat(i.class ? i.class : "", " ").concat(this.config.classNames.display.time, " ").trim(),
                    "aria-label": ae.get(e, this.config)
                }), "00:00");
            return this.elements.display[e] = s, s
        },
        bindMenuItemShortcuts(e, t) {
            N(e, "keydown keyup", i => {
                if (![32, 38, 39, 40].includes(i.which)) return;
                if (i.preventDefault(), i.stopPropagation(), "keydown" === i.type) return;
                const s = V(e, '[role="menuitemradio"]');
                if (!s && [32, 39].includes(i.which)) me.showMenuPanel.call(this, t, !0);
                else {
                    let t;
                    32 !== i.which && (40 === i.which || s && 39 === i.which ? (t = e.nextElementSibling, v.element(t) || (t = e.parentNode.firstElementChild)) : (t = e.previousElementSibling, v.element(t) || (t = e.parentNode.lastElementChild)), X.call(this, t, !0))
                }
            }, !1), N(e, "keyup", e => {
                13 === e.which && me.focusFirstMenuItem.call(this, null, !0)
            })
        },
        createMenuItem(e) {
            let {
                value: t,
                list: i,
                type: s,
                title: n,
                badge: l = null,
                checked: a = !1
            } = e;
            const o = B(this.config.selectors.inputs[s]),
                r = F("button", I(o, {
                    type: "button",
                    role: "menuitemradio",
                    class: "".concat(this.config.classNames.control, " ").concat(o.class ? o.class : "").trim(),
                    "aria-checked": a,
                    value: t
                })),
                c = F("span");
            c.innerHTML = n, v.element(l) && c.appendChild(l), r.appendChild(c), Object.defineProperty(r, "checked", {
                enumerable: !0,
                get: () => "true" === r.getAttribute("aria-checked"),
                set(e) {
                    e && Array.from(r.parentNode.children).filter(e => V(e, '[role="menuitemradio"]')).forEach(e => e.setAttribute("aria-checked", "false")), r.setAttribute("aria-checked", e ? "true" : "false")
                }
            }), this.listeners.bind(r, "click keyup", e => {
                if (!v.keyboardEvent(e) || 32 === e.which) {
                    switch (e.preventDefault(), e.stopPropagation(), r.checked = !0, s) {
                        case "language":
                            this.currentTrack = Number(t);
                            break;
                        case "quality":
                            this.quality = t;
                            break;
                        case "speed":
                            this.speed = parseFloat(t)
                    }
                    me.showMenuPanel.call(this, "home", v.keyboardEvent(e))
                }
            }, s, !1), me.bindMenuItemShortcuts.call(this, r, s), i.appendChild(r)
        },
        formatTime() {
            let e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : 0,
                t = arguments.length > 1 && void 0 !== arguments[1] && arguments[1];
            if (!v.number(e)) return e;
            return pe(e, he(this.duration) > 0, t)
        },
        updateTimeDisplay() {
            let e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : null,
                t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 0,
                i = arguments.length > 2 && void 0 !== arguments[2] && arguments[2];
            v.element(e) && v.number(t) && (e.innerText = me.formatTime(t, i))
        },
        updateVolume() {
            this.supported.ui && (v.element(this.elements.inputs.volume) && me.setRange.call(this, this.elements.inputs.volume, this.muted ? 0 : this.volume), v.element(this.elements.buttons.mute) && (this.elements.buttons.mute.pressed = this.muted || 0 === this.volume))
        },
        setRange(e) {
            let t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 0;
            v.element(e) && (e.value = t, me.updateRangeFill.call(this, e))
        },
        updateProgress(e) {
            if (!this.supported.ui || !v.event(e)) return;
            let t = 0;
            const i = (e, t) => {
                const i = v.number(t) ? t : 0,
                    s = v.element(e) ? e : this.elements.display.buffer;
                if (v.element(s)) {
                    s.value = i;
                    const e = s.getElementsByTagName("span")[0];
                    v.element(e) && (e.childNodes[0].nodeValue = i)
                }
            };
            if (e) switch (e.type) {
                case "timeupdate":
                case "seeking":
                case "seeked":
                    s = this.currentTime, n = this.duration, t = 0 === s || 0 === n || Number.isNaN(s) || Number.isNaN(n) ? 0 : (s / n * 100).toFixed(2), "timeupdate" === e.type && me.setRange.call(this, this.elements.inputs.seek, t);
                    break;
                case "playing":
                case "progress":
                    i(this.elements.display.buffer, 100 * this.buffered)
            }
            var s, n
        },
        updateRangeFill(e) {
            const t = v.event(e) ? e.target : e;
            if (v.element(t) && "range" === t.getAttribute("type")) {
                if (V(t, this.config.selectors.inputs.seek)) {
                    t.setAttribute("aria-valuenow", this.currentTime);
                    const e = me.formatTime(this.currentTime),
                        i = me.formatTime(this.duration),
                        s = ae.get("seekLabel", this.config);
                    t.setAttribute("aria-valuetext", s.replace("{currentTime}", e).replace("{duration}", i))
                } else if (V(t, this.config.selectors.inputs.volume)) {
                    const e = 100 * t.value;
                    t.setAttribute("aria-valuenow", e), t.setAttribute("aria-valuetext", "".concat(e.toFixed(1), "%"))
                } else t.setAttribute("aria-valuenow", t.value);
                T.isWebkit && t.style.setProperty("--value", "".concat(t.value / t.max * 100, "%"))
            }
        },
        updateSeekTooltip(e) {
            if (!this.config.tooltips.seek || !v.element(this.elements.inputs.seek) || !v.element(this.elements.display.seekTooltip) || 0 === this.duration) return;
            const t = "".concat(this.config.classNames.tooltip, "--visible"),
                i = e => R(this.elements.display.seekTooltip, t, e);
            let s = 0;
            const n = this.elements.progress.getBoundingClientRect();
            if (v.event(e)) {
                let t;
                e.pageX ? ({
                    pageX: t
                } = e) : e.changedTouches && ({
                    pageX: t
                } = e.changedTouches.item(0)), s = 100 / n.width * (t - n.left)
            } else {
                if (!U(this.elements.display.seekTooltip, t)) return;
                s = parseFloat(this.elements.display.seekTooltip.style.left, 10)
            }
            s < 0 ? s = 0 : s > 100 && (s = 100), me.updateTimeDisplay.call(this, this.elements.display.seekTooltip, this.duration / 100 * s), this.elements.display.seekTooltip.style.left = "".concat(s, "%"), v.event(e) && ["mouseenter", "mouseleave", "touchstart", "touchend"].includes(e.type) && i("mouseenter" === e.type || "touchstart" === e.type)
        },
        timeUpdate(e) {
            const t = !v.element(this.elements.display.duration) && this.config.invertTime;
            me.updateTimeDisplay.call(this, this.elements.display.currentTime, t ? this.duration - this.currentTime : this.currentTime, t), e && "timeupdate" === e.type && this.media.seeking || me.updateProgress.call(this, e)
        },
        durationUpdate() {
            if (!this.supported.ui || !this.config.invertTime && this.currentTime) return;
            if (this.duration >= 2 ** 32) return D(this.elements.display.currentTime, !0), void D(this.elements.progress, !0);
            v.element(this.elements.inputs.seek) && this.elements.inputs.seek.setAttribute("aria-valuemax", this.duration);
            const e = v.element(this.elements.display.duration);
            !e && this.config.displayDuration && this.paused && me.updateTimeDisplay.call(this, this.elements.display.currentTime, this.duration), e && me.updateTimeDisplay.call(this, this.elements.display.duration, this.duration), me.updateSeekTooltip.call(this)
        },
        toggleMenuButton(e, t) {
            D(this.elements.settings.buttons[e], !t)
        },
        updateSetting(e, t, i) {
            const s = this.elements.settings.panels[e];
            let n = null,
                l = t;
            if ("captions" === e) n = this.currentTrack;
            else {
                if (n = v.empty(i) ? this[e] : i, v.empty(n) && (n = this.config[e].default), !v.empty(this.options[e]) && !this.options[e].includes(n)) return void this.debug.warn("Unsupported value of '".concat(n, "' for ").concat(e));
                if (!this.config[e].options.includes(n)) return void this.debug.warn("Disabled value of '".concat(n, "' for ").concat(e))
            }
            if (v.element(l) || (l = s && s.querySelector('[role="menu"]')), !v.element(l)) return;
            this.elements.settings.buttons[e].querySelector(".".concat(this.config.classNames.menu.value)).innerHTML = me.getLabel.call(this, e, n);
            const a = l && l.querySelector('[value="'.concat(n, '"]'));
            v.element(a) && (a.checked = !0)
        },
        getLabel(e, t) {
            switch (e) {
                case "speed":
                    return 1 === t ? ae.get("normal", this.config) : "".concat(t, "&times;");
                case "quality":
                    if (v.number(t)) {
                        const e = ae.get("qualityLabel.".concat(t), this.config);
                        return e.length ? e : "".concat(t, "p")
                    }
                    return se(t);
                case "captions":
                    return ge.getLabel.call(this);
                default:
                    return null
            }
        },
        setQualityMenu(e) {
            if (!v.element(this.elements.settings.panels.quality)) return;
            const t = this.elements.settings.panels.quality.querySelector('[role="menu"]');
            v.array(e) && (this.options.quality = te(e).filter(e => this.config.quality.options.includes(e)));
            const i = !v.empty(this.options.quality) && this.options.quality.length > 1;
            if (me.toggleMenuButton.call(this, "quality", i), j(t), me.checkMenu.call(this), !i) return;
            const s = e => {
                const t = ae.get("qualityBadge.".concat(e), this.config);
                return t.length ? me.createBadge.call(this, t) : null
            };
            this.options.quality.sort((e, t) => {
                const i = this.config.quality.options;
                return i.indexOf(e) > i.indexOf(t) ? 1 : -1
            }).forEach(e => {
                me.createMenuItem.call(this, {
                    value: e,
                    list: t,
                    type: "quality",
                    title: me.getLabel.call(this, "quality", e),
                    badge: s(e)
                })
            }), me.updateSetting.call(this, "quality", t)
        },
        setCaptionsMenu() {
            if (!v.element(this.elements.settings.panels.captions)) return;
            const e = this.elements.settings.panels.captions.querySelector('[role="menu"]'),
                t = ge.getTracks.call(this),
                i = Boolean(t.length);
            if (me.toggleMenuButton.call(this, "captions", i), j(e), me.checkMenu.call(this), !i) return;
            const s = t.map((t, i) => ({
                value: i,
                checked: this.captions.toggled && this.currentTrack === i,
                title: ge.getLabel.call(this, t),
                badge: t.language && me.createBadge.call(this, t.language.toUpperCase()),
                list: e,
                type: "language"
            }));
            s.unshift({
                value: -1,
                checked: !this.captions.toggled,
                title: ae.get("disabled", this.config),
                list: e,
                type: "language"
            }), s.forEach(me.createMenuItem.bind(this)), me.updateSetting.call(this, "captions", e)
        },
        setSpeedMenu(e) {
            if (!v.element(this.elements.settings.panels.speed)) return;
            const t = this.elements.settings.panels.speed.querySelector('[role="menu"]');
            v.array(e) ? this.options.speed = e : this.isHTML5 && (this.options.speed = [.5, .75, 1, 1.25, 1.5, 1.75, 2]), this.options.speed = this.options.speed.filter(e => this.config.speed.options.includes(e));
            const i = !v.empty(this.options.speed) && this.options.speed.length > 1;
            me.toggleMenuButton.call(this, "speed", i), j(t), me.checkMenu.call(this), i && (this.options.speed.forEach(e => {
                me.createMenuItem.call(this, {
                    value: e,
                    list: t,
                    type: "speed",
                    title: me.getLabel.call(this, "speed", e)
                })
            }), me.updateSetting.call(this, "speed", t))
        },
        checkMenu() {
            const {
                buttons: e
            } = this.elements.settings, t = !v.empty(e) && Object.values(e).some(e => !e.hidden);
            D(this.elements.settings.menu, !t)
        },
        focusFirstMenuItem(e) {
            let t = arguments.length > 1 && void 0 !== arguments[1] && arguments[1];
            if (this.elements.settings.popup.hidden) return;
            let i = e;
            v.element(i) || (i = Object.values(this.elements.settings.panels).find(e => !e.hidden));
            const s = i.querySelector('[role^="menuitem"]');
            X.call(this, s, t)
        },
        toggleMenu(e) {
            const {
                popup: t
            } = this.elements.settings, i = this.elements.buttons.settings;
            if (!v.element(t) || !v.element(i)) return;
            const {
                hidden: s
            } = t;
            let n = s;
            if (v.boolean(e)) n = e;
            else if (v.keyboardEvent(e) && 27 === e.which) n = !1;
            else if (v.event(e)) {
                const s = v.function(e.composedPath) ? e.composedPath()[0] : e.target,
                    l = t.contains(s);
                if (l || !l && e.target !== i && n) return
            }
            i.setAttribute("aria-expanded", n), D(t, !n), R(this.elements.container, this.config.classNames.menu.open, n), n && v.keyboardEvent(e) ? me.focusFirstMenuItem.call(this, null, !0) : n || s || X.call(this, i, v.keyboardEvent(e))
        },
        getMenuSize(e) {
            const t = e.cloneNode(!0);
            t.style.position = "absolute", t.style.opacity = 0, t.removeAttribute("hidden"), e.parentNode.appendChild(t);
            const i = t.scrollWidth,
                s = t.scrollHeight;
            return H(t), {
                width: i,
                height: s
            }
        },
        showMenuPanel() {
            let e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : "",
                t = arguments.length > 1 && void 0 !== arguments[1] && arguments[1];
            const i = this.elements.container.querySelector("#plyr-settings-".concat(this.id, "-").concat(e));
            if (!v.element(i)) return;
            const s = i.parentNode,
                n = Array.from(s.children).find(e => !e.hidden);
            if (J.transitions && !J.reducedMotion) {
                s.style.width = "".concat(n.scrollWidth, "px"), s.style.height = "".concat(n.scrollHeight, "px");
                const e = me.getMenuSize.call(this, i),
                    t = e => {
                        e.target === s && ["width", "height"].includes(e.propertyName) && (s.style.width = "", s.style.height = "", E.call(this, s, w, t))
                    };
                N.call(this, s, w, t), s.style.width = "".concat(e.width, "px"), s.style.height = "".concat(e.height, "px")
            }
            D(n, !0), D(i, !1), me.focusFirstMenuItem.call(this, i, t)
        },
        setDownloadUrl() {
            const e = this.elements.buttons.download;
            v.element(e) && e.setAttribute("href", this.download)
        },
        create(e) {
            const {
                bindMenuItemShortcuts: t,
                createButton: i,
                createProgress: s,
                createRange: n,
                createTime: l,
                setQualityMenu: a,
                setSpeedMenu: o,
                showMenuPanel: r
            } = me;
            this.elements.controls = null, this.config.controls.includes("play-large") && this.elements.container.appendChild(i.call(this, "play-large"));
            const c = F("div", B(this.config.selectors.controls.wrapper));
            this.elements.controls = c;
            const h = {
                class: "plyr__controls__item"
            };
            return te(this.config.controls).forEach(a => {
                if ("restart" === a && c.appendChild(i.call(this, "restart", h)), "rewind" === a && c.appendChild(i.call(this, "rewind", h)), "play" === a && c.appendChild(i.call(this, "play", h)), "fast-forward" === a && c.appendChild(i.call(this, "fast-forward", h)), "progress" === a) {
                    const t = F("div", {
                            class: "".concat(h.class, " plyr__progress__container")
                        }),
                        i = F("div", B(this.config.selectors.progress));
                    if (i.appendChild(n.call(this, "seek", {
                            id: "plyr-seek-".concat(e.id)
                        })), i.appendChild(s.call(this, "buffer")), this.config.tooltips.seek) {
                        const e = F("span", {
                            class: this.config.classNames.tooltip
                        }, "00:00");
                        i.appendChild(e), this.elements.display.seekTooltip = e
                    }
                    this.elements.progress = i, t.appendChild(this.elements.progress), c.appendChild(t)
                }
                if ("current-time" === a && c.appendChild(l.call(this, "currentTime", h)), "duration" === a && c.appendChild(l.call(this, "duration", h)), "mute" === a && c.appendChild(i.call(this, "mute")), "mute" === a || "volume" === a) {
                    let {
                        volume: t
                    } = this.elements;
                    if (v.element(t) && c.contains(t) || (t = F("div", I({}, h, {
                            class: "".concat(h.class, " plyr__volume").trim()
                        })), this.elements.volume = t, c.appendChild(t)), "volume" === a) {
                        const i = {
                            max: 1,
                            step: .05,
                            value: this.config.volume
                        };
                        t.appendChild(n.call(this, "volume", I(i, {
                            id: "plyr-volume-".concat(e.id)
                        })));
                        const s = t.querySelector("[data-plyr=volume]");
                        s.addEventListener("focus", e => {
                            const t = e.currentTarget,
                                i = t.parentElement;
                            setTimeout(() => {
                                t.classList.contains("plyr__tab-focus") && i.classList.add("plyr__volume--is-visible")
                            }, 10)
                        }), s.addEventListener("blur", e => {
                            e.currentTarget.parentElement.classList.remove("plyr__volume--is-visible")
                        })
                    }
                }
                if ("captions" === a && c.appendChild(i.call(this, "captions", h)), "settings" === a && !v.empty(this.config.settings)) {
                    const s = F("div", I({}, h, {
                        class: "".concat(h.class, " plyr__menu").trim(),
                        hidden: ""
                    }));
                    s.appendChild(i.call(this, "settings", {
                        "aria-haspopup": !0,
                        "aria-controls": "plyr-settings-".concat(e.id),
                        "aria-expanded": !1
                    }));
                    const n = F("div", {
                            class: "plyr__menu__container",
                            id: "plyr-settings-".concat(e.id),
                            hidden: ""
                        }),
                        l = F("div"),
                        a = F("div", {
                            id: "plyr-settings-".concat(e.id, "-home")
                        }),
                        o = F("div", {
                            role: "menu"
                        });
                    a.appendChild(o), l.appendChild(a), this.elements.settings.panels.home = a, this.config.settings.forEach(i => {
                        const s = F("button", I(B(this.config.selectors.buttons.settings), {
                            type: "button",
                            class: "".concat(this.config.classNames.control, " ").concat(this.config.classNames.control, "--forward"),
                            role: "menuitem",
                            "aria-haspopup": !0,
                            hidden: ""
                        }));
                        t.call(this, s, i), N(s, "click", () => {
                            r.call(this, i, !1)
                        });
                        const n = F("span", null, ae.get(i, this.config)),
                            a = F("span", {
                                class: this.config.classNames.menu.value
                            });
                        a.innerHTML = e[i], n.appendChild(a), s.appendChild(n), o.appendChild(s);
                        const c = F("div", {
                                id: "plyr-settings-".concat(e.id, "-").concat(i),
                                hidden: ""
                            }),
                            h = F("button", {
                                type: "button",
                                class: "".concat(this.config.classNames.control, " ").concat(this.config.classNames.control, "--back")
                            });
                        h.appendChild(F("span", {
                            "aria-hidden": !0
                        }, ae.get(i, this.config))), h.appendChild(F("span", {
                            class: this.config.classNames.hidden
                        }, ae.get("menuBack", this.config))), N(c, "keydown", e => {
                            37 === e.which && (e.preventDefault(), e.stopPropagation(), r.call(this, "home", !0))
                        }, !1), N(h, "click", () => {
                            r.call(this, "home", !1)
                        }), c.appendChild(h), c.appendChild(F("div", {
                            role: "menu"
                        })), l.appendChild(c), this.elements.settings.buttons[i] = s, this.elements.settings.panels[i] = c
                    }), n.appendChild(l), s.appendChild(n), c.appendChild(s), this.elements.settings.popup = n, this.elements.settings.menu = s
                }
                if ("pip" === a && J.pip && c.appendChild(i.call(this, "pip", h)), "airplay" === a && J.airplay && c.appendChild(i.call(this, "airplay", h)), "download" === a) {
                    const e = I({}, h, {
                            element: "a",
                            href: this.download,
                            target: "_blank"
                        }),
                        {
                            download: t
                        } = this.config.urls;
                    v.url(t) || I(e, {
                        icon: "logo-".concat(this.provider),
                        label: this.provider
                    }), c.appendChild(i.call(this, "download", e))
                }
                "fullscreen" === a && c.appendChild(i.call(this, "fullscreen", h))
            }), this.isHTML5 && a.call(this, ee.getQualityOptions.call(this)), o.call(this), c
        },
        inject() {
            if (this.config.loadSprite) {
                const e = me.getIconUrl.call(this);
                e.cors && ce(e.url, "sprite-plyr")
            }
            this.id = Math.floor(1e4 * Math.random());
            let e = null;
            this.elements.controls = null;
            const t = {
                id: this.id,
                seektime: this.config.seekTime,
                title: this.config.title
            };
            let i = !0;
            v.function(this.config.controls) && (this.config.controls = this.config.controls.call(this, t)), this.config.controls || (this.config.controls = []), v.element(this.config.controls) || v.string(this.config.controls) ? e = this.config.controls : (e = me.create.call(this, {
                id: this.id,
                seektime: this.config.seekTime,
                speed: this.speed,
                quality: this.quality,
                captions: ge.getLabel.call(this)
            }), i = !1);
            const s = e => {
                let i = e;
                return Object.entries(t).forEach(e => {
                    let [t, s] = e;
                    i = ie(i, "{".concat(t, "}"), s)
                }), i
            };
            let n;
            if (i && (v.string(this.config.controls) ? e = s(e) : v.element(e) && (e.innerHTML = s(e.innerHTML))), v.string(this.config.selectors.controls.container) && (n = document.querySelector(this.config.selectors.controls.container)), v.element(n) || (n = this.elements.container), n[v.element(e) ? "insertAdjacentElement" : "insertAdjacentHTML"]("afterbegin", e), v.element(this.elements.controls) || me.findElements.call(this), !v.empty(this.elements.buttons)) {
                const e = e => {
                    const t = this.config.classNames.controlPressed;
                    Object.defineProperty(e, "pressed", {
                        enumerable: !0,
                        get: () => U(e, t),
                        set() {
                            let i = arguments.length > 0 && void 0 !== arguments[0] && arguments[0];
                            R(e, t, i)
                        }
                    })
                };
                Object.values(this.elements.buttons).filter(Boolean).forEach(t => {
                    v.array(t) || v.nodeList(t) ? Array.from(t).filter(Boolean).forEach(e) : e(t)
                })
            }
            if (T.isEdge && k(n), this.config.tooltips.controls) {
                const {
                    classNames: e,
                    selectors: t
                } = this.config, i = "".concat(t.controls.wrapper, " ").concat(t.labels, " .").concat(e.hidden), s = W.call(this, i);
                Array.from(s).forEach(e => {
                    R(e, this.config.classNames.hidden, !1), R(e, this.config.classNames.tooltip, !0)
                })
            }
        }
    };
    const ge = {
            setup() {
                if (!this.supported.ui) return;
                if (!this.isVideo || this.isHTML5 && !J.textTracks) return void(v.array(this.config.controls) && this.config.controls.includes("settings") && this.config.settings.includes("captions") && me.setCaptionsMenu.call(this));
                var e, t;
                if (v.element(this.elements.captions) || (this.elements.captions = F("div", B(this.config.selectors.captions)), e = this.elements.captions, t = this.elements.wrapper, v.element(e) && v.element(t) && t.parentNode.insertBefore(e, t.nextSibling)), T.isIE && window.URL) {
                    const e = this.media.querySelectorAll("track");
                    Array.from(e).forEach(e => {
                        const t = e.getAttribute("src"),
                            i = function(e) {
                                let t = e;
                                if (!(arguments.length > 1 && void 0 !== arguments[1]) || arguments[1]) {
                                    const e = document.createElement("a");
                                    e.href = t, t = e.href
                                }
                                try {
                                    return new URL(t)
                                } catch (e) {
                                    return null
                                }
                            }(t);
                        null !== i && i.hostname !== window.location.href.hostname && ["http:", "https:"].includes(i.protocol) && re(t, "blob").then(t => {
                            e.setAttribute("src", window.URL.createObjectURL(t))
                        }).catch(() => {
                            H(e)
                        })
                    })
                }
                const i = te((navigator.languages || [navigator.language || navigator.userLanguage || "en"]).map(e => e.split("-")[0]));
                let s = (this.storage.get("language") || this.config.captions.language || "auto").toLowerCase();
                "auto" === s && ([s] = i);
                let n = this.storage.get("captions");
                if (v.boolean(n) || ({
                        active: n
                    } = this.config.captions), Object.assign(this.captions, {
                        toggled: !1,
                        active: n,
                        language: s,
                        languages: i
                    }), this.isHTML5) {
                    const e = this.config.captions.update ? "addtrack removetrack" : "removetrack";
                    N.call(this, this.media.textTracks, e, ge.update.bind(this))
                }
                setTimeout(ge.update.bind(this), 0)
            },
            update() {
                const e = ge.getTracks.call(this, !0),
                    {
                        active: t,
                        language: i,
                        meta: s,
                        currentTrackNode: n
                    } = this.captions,
                    l = Boolean(e.find(e => e.language === i));
                this.isHTML5 && this.isVideo && e.filter(e => !s.get(e)).forEach(e => {
                    this.debug.log("Track added", e), s.set(e, {
                        default: "showing" === e.mode
                    }), e.mode = "hidden", N.call(this, e, "cuechange", () => ge.updateCues.call(this))
                }), (l && this.language !== i || !e.includes(n)) && (ge.setLanguage.call(this, i), ge.toggle.call(this, t && l)), R(this.elements.container, this.config.classNames.captions.enabled, !v.empty(e)), (this.config.controls || []).includes("settings") && this.config.settings.includes("captions") && me.setCaptionsMenu.call(this)
            },
            toggle(e) {
                let t = !(arguments.length > 1 && void 0 !== arguments[1]) || arguments[1];
                if (!this.supported.ui) return;
                const {
                    toggled: i
                } = this.captions, s = this.config.classNames.captions.active, n = v.nullOrUndefined(e) ? !i : e;
                if (n !== i) {
                    if (t || (this.captions.active = n, this.storage.set({
                            captions: n
                        })), !this.language && n && !t) {
                        const e = ge.getTracks.call(this),
                            t = ge.findTrack.call(this, [this.captions.language, ...this.captions.languages], !0);
                        return this.captions.language = t.language, void ge.set.call(this, e.indexOf(t))
                    }
                    this.elements.buttons.captions && (this.elements.buttons.captions.pressed = n), R(this.elements.container, s, n), this.captions.toggled = n, me.updateSetting.call(this, "captions"), A.call(this, this.media, n ? "captionsenabled" : "captionsdisabled")
                }
            },
            set(e) {
                let t = !(arguments.length > 1 && void 0 !== arguments[1]) || arguments[1];
                const i = ge.getTracks.call(this);
                if (-1 !== e)
                    if (v.number(e))
                        if (e in i) {
                            if (this.captions.currentTrack !== e) {
                                this.captions.currentTrack = e;
                                const s = i[e],
                                    {
                                        language: n
                                    } = s || {};
                                this.captions.currentTrackNode = s, me.updateSetting.call(this, "captions"), t || (this.captions.language = n, this.storage.set({
                                    language: n
                                })), A.call(this, this.media, "languagechange")
                            }
                            ge.toggle.call(this, !0, t), this.isHTML5 && this.isVideo && ge.updateCues.call(this)
                        } else this.debug.warn("Track not found", e);
                else this.debug.warn("Invalid caption argument", e);
                else ge.toggle.call(this, !1, t)
            },
            setLanguage(e) {
                let t = !(arguments.length > 1 && void 0 !== arguments[1]) || arguments[1];
                if (!v.string(e)) return void this.debug.warn("Invalid language argument", e);
                const i = e.toLowerCase();
                this.captions.language = i;
                const s = ge.getTracks.call(this),
                    n = ge.findTrack.call(this, [i]);
                ge.set.call(this, s.indexOf(n), t)
            },
            getTracks() {
                let e = arguments.length > 0 && void 0 !== arguments[0] && arguments[0];
                return Array.from((this.media || {}).textTracks || []).filter(t => !this.isHTML5 || e || this.captions.meta.has(t)).filter(e => ["captions", "subtitles"].includes(e.kind))
            },
            findTrack(e) {
                let t = arguments.length > 1 && void 0 !== arguments[1] && arguments[1];
                const i = ge.getTracks.call(this),
                    s = e => Number((this.captions.meta.get(e) || {}).default),
                    n = Array.from(i).sort((e, t) => s(t) - s(e));
                let l;
                return e.every(e => !(l = n.find(t => t.language === e))), l || (t ? n[0] : void 0)
            },
            getCurrentTrack() {
                return ge.getTracks.call(this)[this.currentTrack]
            },
            getLabel(e) {
                let t = e;
                return !v.track(t) && J.textTracks && this.captions.toggled && (t = ge.getCurrentTrack.call(this)), v.track(t) ? v.empty(t.label) ? v.empty(t.language) ? ae.get("enabled", this.config) : e.language.toUpperCase() : t.label : ae.get("disabled", this.config)
            },
            updateCues(e) {
                if (!this.supported.ui) return;
                if (!v.element(this.elements.captions)) return void this.debug.warn("No captions element to render to");
                if (!v.nullOrUndefined(e) && !Array.isArray(e)) return void this.debug.warn("updateCues: Invalid input", e);
                let t = e;
                if (!t) {
                    const e = ge.getCurrentTrack.call(this);
                    t = Array.from((e || {}).activeCues || []).map(e => e.getCueAsHTML()).map(le)
                }
                const i = t.map(e => e.trim()).join("\n");
                if (i !== this.elements.captions.innerHTML) {
                    j(this.elements.captions);
                    const e = F("span", B(this.config.selectors.caption));
                    e.innerHTML = i, this.elements.captions.appendChild(e), A.call(this, this.media, "cuechange")
                }
            }
        },
        fe = {
            enabled: !0,
            title: "",
            debug: !1,
            autoplay: !1,
            seekTime: 10,
            volume: 1,
            muted: !1,
            duration: null,
            displayDuration: !0,
            invertTime: !0,
            toggleInvert: !0,
            ratio: null,
            clickToPlay: !0,
            focusOnPlay: !0,
            hideControls: !0,
            resetOnEnd: !0,
            disableContextMenu: !0,
            loadSprite: !0,
            iconPrefix: "plyr",
            iconUrl: "https://cdn.shopify.com/shopifycloud/shopify-plyr/v1.1/shopify-plyr.svg",
            blankVideo: "media/blank.mp4",
            quality: {
                default: 576,
                options: [4320, 2880, 2160, 1440, 1080, 720, 576, 480, 360, 240]
            },
            loop: {
                active: !1
            },
            speed: {
                selected: 1,
                options: [.5, .75, 1, 1.25, 1.5, 1.75, 2]
            },
            keyboard: {
                focused: !0,
                global: !1
            },
            tooltips: {
                controls: !1,
                seek: !0
            },
            captions: {
                active: !1,
                language: "auto",
                update: !1
            },
            fullscreen: {
                enabled: !0,
                fallback: !0,
                iosNative: !0
            },
            storage: {
                enabled: !1
            },
            controls: ["play-large", "play", "progress", "mute", "volume", "fullscreen"],
            i18n: {
                pip: "PIP",
                airplay: "AirPlay",
                html5: "HTML5",
                restart: "Restart",
                rewind: "Rewind {seektime}s",
                play: "Play",
                pause: "Pause",
                fastForward: "Forward {seektime}s",
                seek: "Seek",
                seekLabel: "{currentTime} of {duration}",
                played: "Played",
                buffered: "Buffered",
                currentTime: "Current time",
                duration: "Duration",
                volume: "Volume",
                mute: "Mute",
                unmute: "Unmute",
                enableCaptions: "Enable captions",
                disableCaptions: "Disable captions",
                download: "Download",
                enterFullscreen: "Enter fullscreen",
                exitFullscreen: "Exit fullscreen",
                frameTitle: "Player for {title}",
                captions: "Captions",
                settings: "Settings",
                menuBack: "Go back to previous menu",
                speed: "Speed",
                normal: "Normal",
                quality: "Quality",
                loop: "Loop",
                start: "Start",
                end: "End",
                all: "All",
                reset: "Reset",
                disabled: "Disabled",
                enabled: "Enabled",
                qualityBadge: {
                    480: "SD",
                    576: "SD",
                    720: "HD",
                    1080: "HD",
                    1440: "HD",
                    2160: "4K"
                }
            },
            urls: {
                download: null
            },
            listeners: {
                seek: null,
                play: null,
                pause: null,
                restart: null,
                rewind: null,
                fastForward: null,
                mute: null,
                volume: null,
                captions: null,
                download: null,
                fullscreen: null,
                pip: null,
                airplay: null,
                speed: null,
                quality: null,
                loop: null,
                language: null
            },
            events: ["ended", "progress", "stalled", "playing", "waiting", "canplay", "canplaythrough", "loadstart", "loadeddata", "loadedmetadata", "timeupdate", "volumechange", "play", "pause", "error", "seeking", "seeked", "emptied", "ratechange", "cuechange", "download", "enterfullscreen", "exitfullscreen", "captionsenabled", "captionsdisabled", "languagechange", "controlshidden", "controlsshown", "ready", "qualitychange"],
            selectors: {
                editable: "input, textarea, select, [contenteditable]",
                container: ".plyr",
                controls: {
                    container: null,
                    wrapper: ".plyr__controls"
                },
                labels: "[data-plyr]",
                buttons: {
                    play: '[data-plyr="play"]',
                    pause: '[data-plyr="pause"]',
                    restart: '[data-plyr="restart"]',
                    rewind: '[data-plyr="rewind"]',
                    fastForward: '[data-plyr="fast-forward"]',
                    mute: '[data-plyr="mute"]',
                    captions: '[data-plyr="captions"]',
                    download: '[data-plyr="download"]',
                    fullscreen: '[data-plyr="fullscreen"]',
                    pip: '[data-plyr="pip"]',
                    airplay: '[data-plyr="airplay"]',
                    settings: '[data-plyr="settings"]',
                    loop: '[data-plyr="loop"]'
                },
                inputs: {
                    seek: '[data-plyr="seek"]',
                    volume: '[data-plyr="volume"]',
                    speed: '[data-plyr="speed"]',
                    language: '[data-plyr="language"]',
                    quality: '[data-plyr="quality"]'
                },
                display: {
                    currentTime: ".plyr__time--current",
                    duration: ".plyr__time--duration",
                    buffer: ".plyr__progress__buffer",
                    loop: ".plyr__progress__loop",
                    volume: ".plyr__volume--display"
                },
                progress: ".plyr__progress",
                captions: ".plyr__captions",
                caption: ".plyr__caption"
            },
            classNames: {
                type: "plyr--{0}",
                provider: "plyr--{0}",
                video: "plyr__video-wrapper",
                embed: "plyr__video-embed",
                videoFixedRatio: "plyr__video-wrapper--fixed-ratio",
                embedContainer: "plyr__video-embed__container",
                poster: "plyr__poster",
                posterEnabled: "plyr__poster-enabled",
                control: "plyr__control",
                controlPressed: "plyr__control--pressed",
                playing: "plyr--playing",
                paused: "plyr--paused",
                stopped: "plyr--stopped",
                loading: "plyr--loading",
                hover: "plyr--hover",
                tooltip: "plyr__tooltip",
                cues: "plyr__cues",
                hidden: "plyr__sr-only",
                hideControls: "plyr--hide-controls",
                isIos: "plyr--is-ios",
                isAndroid: "plyr--is-android",
                isMac: "plyr--is-mac",
                isTouch: "plyr--is-touch",
                uiSupported: "plyr--full-ui",
                noTransition: "plyr--no-transition",
                display: {
                    time: "plyr__time"
                },
                menu: {
                    value: "plyr__menu__value",
                    badge: "plyr__badge",
                    open: "plyr--menu-open"
                },
                captions: {
                    enabled: "plyr--captions-enabled",
                    active: "plyr--captions-active"
                },
                fullscreen: {
                    enabled: "plyr--fullscreen-enabled",
                    fallback: "plyr--fullscreen-fallback"
                },
                pip: {
                    supported: "plyr--pip-supported",
                    active: "plyr--pip-active"
                },
                airplay: {
                    supported: "plyr--airplay-supported",
                    active: "plyr--airplay-active"
                },
                tabFocus: "plyr__tab-focus",
                previewThumbnails: {
                    thumbContainer: "plyr__preview-thumb",
                    thumbContainerShown: "plyr__preview-thumb--is-shown",
                    imageContainer: "plyr__preview-thumb__image-container",
                    timeContainer: "plyr__preview-thumb__time-container",
                    scrubbingContainer: "plyr__preview-scrubbing",
                    scrubbingContainerShown: "plyr__preview-scrubbing--is-shown"
                }
            },
            attributes: {
                embed: {
                    provider: "data-plyr-provider",
                    id: "data-plyr-embed-id"
                }
            },
            previewThumbnails: {
                enabled: !1,
                src: ""
            }
        },
        ye = {
            active: "picture-in-picture",
            inactive: "inline"
        },
        be = {
            html5: "html5"
        },
        ve = {
            audio: "audio",
            video: "video"
        },
        we = () => {};
    class ke {
        constructor() {
            let e = arguments.length > 0 && void 0 !== arguments[0] && arguments[0];
            this.enabled = window.console && e, this.enabled && this.log("Debugging enabled")
        }
        get log() {
            return this.enabled ? Function.prototype.bind.call(console.log, console) : we
        }
        get warn() {
            return this.enabled ? Function.prototype.bind.call(console.warn, console) : we
        }
        get error() {
            return this.enabled ? Function.prototype.bind.call(console.error, console) : we
        }
    }

    function Te() {
        if (!this.enabled) return;
        const e = this.player.elements.buttons.fullscreen;
        v.element(e) && (e.pressed = this.active), A.call(this.player, this.target, this.active ? "enterfullscreen" : "exitfullscreen", !0), T.isIos || K.call(this.player, this.target, this.active)
    }

    function Ce() {
        let e = arguments.length > 0 && void 0 !== arguments[0] && arguments[0];
        if (e ? this.scrollPosition = {
                x: window.scrollX || 0,
                y: window.scrollY || 0
            } : window.scrollTo(this.scrollPosition.x, this.scrollPosition.y), document.body.style.overflow = e ? "hidden" : "", R(this.target, this.player.config.classNames.fullscreen.fallback, e), T.isIos) {
            let t = document.head.querySelector('meta[name="viewport"]');
            const i = "viewport-fit=cover";
            t || (t = document.createElement("meta")).setAttribute("name", "viewport");
            const s = v.string(t.content) && t.content.includes(i);
            e ? (this.cleanupViewport = !s, s || (t.content += ",".concat(i))) : this.cleanupViewport && (t.content = t.content.split(",").filter(e => e.trim() !== i).join(","))
        }
        Te.call(this)
    }
    class Se {
        constructor(e) {
            this.player = e, this.prefix = Se.prefix, this.property = Se.property, this.scrollPosition = {
                x: 0,
                y: 0
            }, this.forceFallback = "force" === e.config.fullscreen.fallback, N.call(this.player, document, "ms" === this.prefix ? "MSFullscreenChange" : "".concat(this.prefix, "fullscreenchange"), () => {
                Te.call(this)
            }), N.call(this.player, this.player.elements.container, "dblclick", e => {
                v.element(this.player.elements.controls) && this.player.elements.controls.contains(e.target) || this.toggle()
            }), this.update()
        }
        static get native() {
            return !!(document.fullscreenEnabled || document.webkitFullscreenEnabled || document.mozFullScreenEnabled || document.msFullscreenEnabled)
        }
        get usingNative() {
            return Se.native && !this.forceFallback
        }
        static get prefix() {
            if (v.function(document.exitFullscreen)) return "";
            let e = "";
            return ["webkit", "moz", "ms"].some(t => !(!v.function(document["".concat(t, "ExitFullscreen")]) && !v.function(document["".concat(t, "CancelFullScreen")])) && (e = t, !0)), e
        }
        static get property() {
            return "moz" === this.prefix ? "FullScreen" : "Fullscreen"
        }
        get enabled() {
            return (Se.native || this.player.config.fullscreen.fallback) && this.player.config.fullscreen.enabled && this.player.supported.ui && this.player.isVideo
        }
        get active() {
            if (!this.enabled) return !1;
            if (!Se.native || this.forceFallback) return U(this.target, this.player.config.classNames.fullscreen.fallback);
            return (this.prefix ? document["".concat(this.prefix).concat(this.property, "Element")] : document.fullscreenElement) === this.target
        }
        get target() {
            return T.isIos && this.player.config.fullscreen.iosNative ? this.player.media : this.player.elements.container
        }
        update() {
            if (this.enabled) {
                let e;
                e = this.forceFallback ? "Fallback (forced)" : Se.native ? "Native" : "Fallback", this.player.debug.log("".concat(e, " fullscreen enabled"))
            } else this.player.debug.log("Fullscreen not supported and fallback disabled");
            R(this.player.elements.container, this.player.config.classNames.fullscreen.enabled, this.enabled)
        }
        enter() {
            this.enabled && (T.isIos && this.player.config.fullscreen.iosNative ? this.target.webkitEnterFullscreen() : !Se.native || this.forceFallback ? Ce.call(this, !0) : this.prefix ? v.empty(this.prefix) || this.target["".concat(this.prefix, "Request").concat(this.property)]() : this.target.requestFullscreen())
        }
        exit() {
            if (this.enabled)
                if (T.isIos && this.player.config.fullscreen.iosNative) this.target.webkitExitFullscreen(), this.player.play();
                else if (!Se.native || this.forceFallback) Ce.call(this, !1);
            else if (this.prefix) {
                if (!v.empty(this.prefix)) {
                    const e = "moz" === this.prefix ? "Cancel" : "Exit";
                    document["".concat(this.prefix).concat(e).concat(this.property)]()
                }
            } else(document.cancelFullScreen || document.exitFullscreen).call(document)
        }
        toggle() {
            this.active ? this.exit() : this.enter()
        }
    }
    const Ne = {
        addStyleHook() {
            R(this.elements.container, this.config.selectors.container.replace(".", ""), !0), R(this.elements.container, this.config.classNames.uiSupported, this.supported.ui)
        },
        toggleNativeControls() {
            arguments.length > 0 && void 0 !== arguments[0] && arguments[0] && this.isHTML5 ? this.media.setAttribute("controls", "") : this.media.removeAttribute("controls")
        },
        build() {
            if (this.listeners.media(), !this.supported.ui) return this.debug.warn("Basic support only for ".concat(this.provider, " ").concat(this.type)), void Ne.toggleNativeControls.call(this, !0);
            v.element(this.elements.controls) || (me.inject.call(this), this.listeners.controls()), Ne.toggleNativeControls.call(this), this.isHTML5 && ge.setup.call(this), this.volume = null, this.muted = null, this.loop = null, this.quality = null, this.speed = null, me.updateVolume.call(this), me.timeUpdate.call(this), Ne.checkPlaying.call(this), R(this.elements.container, this.config.classNames.pip.supported, J.pip && this.isHTML5 && this.isVideo), R(this.elements.container, this.config.classNames.airplay.supported, J.airplay && this.isHTML5), R(this.elements.container, this.config.classNames.isIos, T.isIos), R(this.elements.container, this.config.classNames.isAndroid, T.isAndroid), R(this.elements.container, this.config.classNames.isMac, T.isMac), R(this.elements.container, this.config.classNames.isTouch, this.touch), this.ready = !0, setTimeout(() => {
                A.call(this, this.media, "ready")
            }, 0), Ne.setTitle.call(this), this.poster && Ne.setPoster.call(this, this.poster, !1).catch(() => {}), this.config.duration && me.durationUpdate.call(this)
        },
        setTitle() {
            let e = this.playing ? ae.get("pause", this.config) : ae.get("play", this.config);
            v.string(this.config.title) && !v.empty(this.config.title) && (e += ", ".concat(this.config.title)), Array.from(this.elements.buttons.play || []).forEach(t => {
                t.setAttribute("aria-label", e)
            })
        },
        togglePoster(e) {
            R(this.elements.container, this.config.classNames.posterEnabled, e)
        },
        setPoster(e) {
            return arguments.length > 1 && void 0 !== arguments[1] && !arguments[1] || !this.poster ? (this.media.setAttribute("poster", e), P.call(this).then(() => (function(e) {
                let t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 1;
                return new Promise((i, s) => {
                    const n = new Image,
                        l = () => {
                            delete n.onload, delete n.onerror, (n.naturalWidth >= t ? i : s)(n)
                        };
                    Object.assign(n, {
                        onload: l,
                        onerror: l,
                        src: e
                    })
                })
            })(e)).catch(t => {
                throw e === this.poster && Ne.togglePoster.call(this, !1), t
            }).then(() => {
                if (e !== this.poster) throw new Error("setPoster cancelled by later call to setPoster")
            }).then(() => (Object.assign(this.elements.poster.style, {
                backgroundImage: "url('".concat(e, "')")
            }), Ne.togglePoster.call(this, !0), e))) : Promise.reject(new Error("Poster already set"))
        },
        checkPlaying(e) {
            R(this.elements.container, this.config.classNames.playing, this.playing), R(this.elements.container, this.config.classNames.paused, this.paused), R(this.elements.container, this.config.classNames.stopped, this.stopped), Array.from(this.elements.buttons.play || []).forEach(e => {
                Object.assign(e, {
                    pressed: this.playing
                })
            }), v.event(e) && "timeupdate" === e.type || (Ne.setTitle.call(this), Ne.toggleControls.call(this))
        },
        checkLoading(e) {
            this.loading = ["stalled", "waiting"].includes(e.type), clearTimeout(this.timers.loading), this.timers.loading = setTimeout(() => {
                R(this.elements.container, this.config.classNames.loading, this.loading), Ne.toggleControls.call(this)
            }, this.loading ? 250 : 0)
        },
        toggleControls(e) {
            const {
                controls: t
            } = this.elements;
            if (t && this.config.hideControls) {
                if (this.stopped && !e) return void this.toggleControls(!1);
                const i = this.touch && this.lastSeekTime + 2e3 > Date.now(),
                    s = this.paused;
                this.toggleControls(Boolean(e || this.loading || s || t.pressed || t.hover || i))
            }
        }
    };
    class Ee {
        constructor(e) {
            this.player = e, this.lastKey = null, this.focusTimer = null, this.lastKeyDown = null, this.handleKey = this.handleKey.bind(this), this.toggleMenu = this.toggleMenu.bind(this), this.setTabFocus = this.setTabFocus.bind(this), this.firstTouch = this.firstTouch.bind(this)
        }
        handleKey(e) {
            const {
                player: t
            } = this, {
                elements: i
            } = t, s = e.keyCode ? e.keyCode : e.which, n = "keydown" === e.type, l = n && s === this.lastKey;
            if (e.altKey || e.ctrlKey || e.metaKey || e.shiftKey) return;
            if (!v.number(s)) return;
            if (n) {
                const n = document.activeElement;
                if (v.element(n)) {
                    const {
                        editable: s
                    } = t.config.selectors, {
                        seek: l
                    } = i.inputs;
                    if (n !== l && V(n, s)) return;
                    if (32 === e.which && V(n, 'button, [role^="menuitem"]')) return
                }
                switch ([32, 37, 38, 39, 40, 48, 49, 50, 51, 52, 53, 54, 56, 57, 67, 70, 73, 75, 76, 77, 79].includes(s) && (e.preventDefault(), e.stopPropagation()), s) {
                    case 48:
                    case 49:
                    case 50:
                    case 51:
                    case 52:
                    case 53:
                    case 54:
                    case 55:
                    case 56:
                    case 57:
                        l || (t.currentTime = t.duration / 10 * (s - 48));
                        break;
                    case 32:
                    case 75:
                        l || t.togglePlay();
                        break;
                    case 38:
                        t.increaseVolume(.1);
                        break;
                    case 40:
                        t.decreaseVolume(.1);
                        break;
                    case 77:
                        l || (t.muted = !t.muted);
                        break;
                    case 39:
                        t.forward();
                        break;
                    case 37:
                        t.rewind();
                        break;
                    case 70:
                        t.fullscreen.toggle();
                        break;
                    case 67:
                        l || t.toggleCaptions();
                        break;
                    case 76:
                        t.loop = !t.loop
                }
                27 === s && !t.fullscreen.usingNative && t.fullscreen.active && t.fullscreen.toggle(), this.lastKey = s
            } else this.lastKey = null
        }
        toggleMenu(e) {
            me.toggleMenu.call(this.player, e)
        }
        firstTouch() {
            const {
                player: e
            } = this, {
                elements: t
            } = e;
            e.touch = !0, R(t.container, e.config.classNames.isTouch, !0)
        }
        setTabFocus(e) {
            const {
                player: t
            } = this, {
                elements: i
            } = t;
            if (clearTimeout(this.focusTimer), "keydown" === e.type && 9 !== e.which) return;
            "keydown" === e.type && (this.lastKeyDown = e.timeStamp);
            const s = e.timeStamp - this.lastKeyDown <= 20;
            ("focus" !== e.type || s) && ((() => {
                const e = t.config.classNames.tabFocus;
                R(W.call(t, ".".concat(e)), e, !1)
            })(), this.focusTimer = setTimeout(() => {
                const e = document.activeElement;
                i.container.contains(e) && R(document.activeElement, t.config.classNames.tabFocus, !0)
            }, 10))
        }
        global() {
            let e = !(arguments.length > 0 && void 0 !== arguments[0]) || arguments[0];
            const {
                player: t
            } = this;
            t.config.keyboard.global && S.call(t, window, "keydown keyup", this.handleKey, e, !1), S.call(t, document.body, "click", this.toggleMenu, e), M.call(t, document.body, "touchstart", this.firstTouch), S.call(t, document.body, "keydown focus blur", this.setTabFocus, e, !1, !0)
        }
        container() {
            const {
                player: e
            } = this, {
                config: t,
                elements: i,
                timers: s
            } = e;
            !t.keyboard.global && t.keyboard.focused && N.call(e, i.container, "keydown keyup", this.handleKey, !1), N.call(e, i.container, "mousemove mouseleave touchstart touchmove enterfullscreen exitfullscreen", t => {
                const {
                    controls: n
                } = i;
                if (e.paused) return;
                n && "enterfullscreen" === t.type && (n.pressed = !1, n.hover = !1);
                let l = 0;
                ["touchstart", "touchmove", "mousemove"].includes(t.type) && (Ne.toggleControls.call(e, !0), l = e.touch ? 3e3 : 2e3), clearTimeout(s.controls), s.controls = setTimeout(() => Ne.toggleControls.call(e, !1), l)
            });
            const n = t => {
                    if (!t) return Z.call(e);
                    const s = i.container.getBoundingClientRect(),
                        {
                            width: n,
                            height: l
                        } = s;
                    return Z.call(e, "".concat(n, ":").concat(l))
                },
                l = () => {
                    clearTimeout(s.resized), s.resized = setTimeout(n, 50)
                };
            N.call(e, i.container, "enterfullscreen exitfullscreen", t => {
                const {
                    target: s,
                    usingNative: n
                } = e.fullscreen;
                if (s !== i.container) return;
                if (v.empty(e.config.ratio)) return;
                const a = "enterfullscreen" === t.type;
                n || (a ? N.call(e, window, "resize", l) : E.call(e, window, "resize", l))
            })
        }
        media() {
            const {
                player: e
            } = this, {
                elements: t
            } = e;
            if (N.call(e, e.media, "timeupdate seeking seeked", t => me.timeUpdate.call(e, t)), N.call(e, e.media, "durationchange loadeddata loadedmetadata", t => me.durationUpdate.call(e, t)), N.call(e, e.media, "ended", () => {
                    e.isHTML5 && e.isVideo && e.config.resetOnEnd && e.restart()
                }), N.call(e, e.media, "progress playing seeking seeked", t => me.updateProgress.call(e, t)), N.call(e, e.media, "volumechange", t => me.updateVolume.call(e, t)), N.call(e, e.media, "playing play pause ended emptied timeupdate", t => Ne.checkPlaying.call(e, t)), N.call(e, e.media, "waiting canplay seeked playing", t => Ne.checkLoading.call(e, t)), e.supported.ui && e.config.clickToPlay && !e.isAudio) {
                const i = z.call(e, ".".concat(e.config.classNames.video));
                if (!v.element(i)) return;
                N.call(e, t.container, "click", s => {
                    ([t.container, i].includes(s.target) || i.contains(s.target)) && (e.touch && e.config.hideControls && !e.stopped || (e.ended ? (this.proxy(s, e.restart, "restart"), this.proxy(s, e.play, "play")) : this.proxy(s, e.togglePlay, "play")))
                })
            }
            e.supported.ui && e.config.disableContextMenu && N.call(e, t.wrapper, "contextmenu", e => {
                e.preventDefault()
            }, !1), N.call(e, e.media, "volumechange", () => {
                e.storage.set({
                    volume: e.volume,
                    muted: e.muted
                })
            }), N.call(e, e.media, "ratechange", () => {
                me.updateSetting.call(e, "speed"), e.storage.set({
                    speed: e.speed
                })
            }), N.call(e, e.media, "qualitychange", t => {
                me.updateSetting.call(e, "quality", null, t.detail.quality)
            }), N.call(e, e.media, "ready qualitychange", () => {
                me.setDownloadUrl.call(e)
            });
            const i = e.config.events.concat(["keyup", "keydown"]).join(" ");
            N.call(e, e.media, i, i => {
                let {
                    detail: s = {}
                } = i;
                "error" === i.type && (s = e.media.error), A.call(e, t.container, i.type, !0, s)
            })
        }
        proxy(e, t, i) {
            const {
                player: s
            } = this, n = s.config.listeners[i];
            let l = !0;
            v.function(n) && (l = n.call(s, e)), l && v.function(t) && t.call(s, e)
        }
        bind(e, t, i, s) {
            let n = !(arguments.length > 4 && void 0 !== arguments[4]) || arguments[4];
            const {
                player: l
            } = this, a = l.config.listeners[s], o = v.function(a);
            N.call(l, e, t, e => this.proxy(e, i, s), n && !o)
        }
        controls() {
            const {
                player: e
            } = this, {
                elements: t
            } = e, i = T.isIE ? "change" : "input";
            if (t.buttons.play && Array.from(t.buttons.play).forEach(t => {
                    this.bind(t, "click", e.togglePlay, "play")
                }), this.bind(t.buttons.restart, "click", e.restart, "restart"), this.bind(t.buttons.rewind, "click", e.rewind, "rewind"), this.bind(t.buttons.fastForward, "click", e.forward, "fastForward"), this.bind(t.buttons.mute, "click", () => {
                    e.muted = !e.muted
                }, "mute"), this.bind(t.buttons.captions, "click", () => e.toggleCaptions()), this.bind(t.buttons.download, "click", () => {
                    A.call(e, e.media, "download")
                }, "download"), this.bind(t.buttons.fullscreen, "click", () => {
                    e.fullscreen.toggle()
                }, "fullscreen"), this.bind(t.buttons.pip, "click", () => {
                    e.pip = "toggle"
                }, "pip"), this.bind(t.buttons.airplay, "click", e.airplay, "airplay"), this.bind(t.buttons.settings, "click", t => {
                    t.stopPropagation(), me.toggleMenu.call(e, t)
                }), this.bind(t.buttons.settings, "keyup", t => {
                    const i = t.which;
                    [13, 32].includes(i) && (13 !== i ? (t.preventDefault(), t.stopPropagation(), me.toggleMenu.call(e, t)) : me.focusFirstMenuItem.call(e, null, !0))
                }, null, !1), this.bind(t.settings.menu, "keydown", t => {
                    27 === t.which && me.toggleMenu.call(e, t)
                }), this.bind(t.inputs.seek, "mousedown mousemove", e => {
                    const i = t.progress.getBoundingClientRect(),
                        s = 100 / i.width * (e.pageX - i.left);
                    e.currentTarget.setAttribute("seek-value", s)
                }), this.bind(t.inputs.seek, "mousedown mouseup keydown keyup touchstart touchend", t => {
                    const i = t.currentTarget,
                        s = t.keyCode ? t.keyCode : t.which;
                    if (v.keyboardEvent(t) && 39 !== s && 37 !== s) return;
                    e.lastSeekTime = Date.now();
                    const n = i.hasAttribute("play-on-seeked"),
                        l = ["mouseup", "touchend", "keyup"].includes(t.type);
                    n && l ? (i.removeAttribute("play-on-seeked"), e.play()) : !l && e.playing && (i.setAttribute("play-on-seeked", ""), e.pause())
                }), T.isIos) {
                const t = W.call(e, 'input[type="range"]');
                Array.from(t).forEach(e => this.bind(e, i, e => k(e.target)))
            }
            this.bind(t.inputs.seek, i, t => {
                const i = t.currentTarget;
                let s = i.getAttribute("seek-value");
                v.empty(s) && (s = i.value), i.removeAttribute("seek-value"), e.currentTime = s / i.max * e.duration
            }, "seek"), this.bind(t.progress, "mouseenter mouseleave mousemove touchstart touchend touchmove", t => me.updateSeekTooltip.call(e, t)), this.bind(t.progress, "mousemove touchmove", t => {
                const {
                    previewThumbnails: i
                } = e;
                i && i.loaded && i.startMove(t)
            }), this.bind(t.progress, "mouseleave click", () => {
                const {
                    previewThumbnails: t
                } = e;
                t && t.loaded && t.endMove(!1, !0)
            }), this.bind(t.progress, "mousedown touchstart", t => {
                const {
                    previewThumbnails: i
                } = e;
                i && i.loaded && i.startScrubbing(t)
            }), this.bind(t.progress, "mouseup touchend", t => {
                const {
                    previewThumbnails: i
                } = e;
                i && i.loaded && i.endScrubbing(t)
            }), T.isWebkit && Array.from(W.call(e, 'input[type="range"]')).forEach(t => {
                this.bind(t, "input", t => me.updateRangeFill.call(e, t.target))
            }), e.config.toggleInvert && !v.element(t.display.duration) && this.bind(t.display.currentTime, "click", () => {
                0 !== e.currentTime && (e.config.invertTime = !e.config.invertTime, me.timeUpdate.call(e))
            }), this.bind(t.inputs.volume, i, t => {
                e.volume = t.target.value
            }, "volume"), this.bind(t.controls, "mouseenter mouseleave", i => {
                t.controls.hover = !e.touch && "mouseenter" === i.type
            }), this.bind(t.controls, "mousedown mouseup touchstart touchend touchcancel", e => {
                t.controls.pressed = ["mousedown", "touchstart"].includes(e.type)
            }), this.bind(t.controls, "focusin", () => {
                const {
                    config: i,
                    timers: s
                } = e;
                R(t.controls, i.classNames.noTransition, !0), Ne.toggleControls.call(e, !0), setTimeout(() => {
                    R(t.controls, i.classNames.noTransition, !1)
                }, 0);
                const n = this.touch ? 3e3 : 4e3;
                clearTimeout(s.controls), s.controls = setTimeout(() => Ne.toggleControls.call(e, !1), n)
            }), this.bind(t.inputs.volume, "wheel", t => {
                const i = t.webkitDirectionInvertedFromDevice,
                    [s, n] = [t.deltaX, -t.deltaY].map(e => i ? -e : e),
                    l = Math.sign(Math.abs(s) > Math.abs(n) ? s : n);
                e.increaseVolume(l / 50);
                const {
                    volume: a
                } = e.media;
                (1 === l && a < 1 || -1 === l && a > 0) && t.preventDefault()
            }, "volume", !1)
        }
    }
    const Me = {
            setup() {
                this.media ? (R(this.elements.container, this.config.classNames.type.replace("{0}", this.type), !0), R(this.elements.container, this.config.classNames.provider.replace("{0}", this.provider), !0), this.isVideo && (this.elements.wrapper = F("div", {
                    class: this.config.classNames.video
                }), _(this.media, this.elements.wrapper), this.elements.poster = F("div", {
                    class: this.config.classNames.poster
                }), this.elements.wrapper.appendChild(this.elements.poster)), this.isHTML5 && ee.extend.call(this)) : this.debug.warn("No media element found!")
            }
        },
        Ae = e => {
            const t = [];
            return e.split(/\r\n\r\n|\n\n|\r\r/).forEach(e => {
                const i = {};
                e.split(/\r\n|\n|\r/).forEach(e => {
                    if (v.number(i.startTime)) {
                        if (!v.empty(e.trim()) && v.empty(i.text)) {
                            const t = e.trim().split("#xywh=");
                            [i.text] = t, t[1] && ([i.x, i.y, i.w, i.h] = t[1].split(","))
                        }
                    } else {
                        const t = e.match(/([0-9]{2})?:?([0-9]{2}):([0-9]{2}).([0-9]{2,3})( ?--> ?)([0-9]{2})?:?([0-9]{2}):([0-9]{2}).([0-9]{2,3})/);
                        t && (i.startTime = 60 * Number(t[1] || 0) * 60 + 60 * Number(t[2]) + Number(t[3]) + Number("0.".concat(t[4])), i.endTime = 60 * Number(t[6] || 0) * 60 + 60 * Number(t[7]) + Number(t[8]) + Number("0.".concat(t[9])))
                    }
                }), i.text && t.push(i)
            }), t
        };
    class xe {
        constructor(e) {
            this.player = e, this.thumbnails = [], this.loaded = !1, this.lastMouseMoveTime = Date.now(), this.mouseDown = !1, this.loadedImages = [], this.elements = {
                thumb: {},
                scrubbing: {}
            }, this.load()
        }
        get enabled() {
            return this.player.isHTML5 && this.player.isVideo && this.player.config.previewThumbnails.enabled
        }
        load() {
            this.player.elements.display.seekTooltip && (this.player.elements.display.seekTooltip.hidden = this.enabled), this.enabled && this.getThumbnails().then(() => {
                this.enabled && (this.render(), this.determineContainerAutoSizing(), this.loaded = !0)
            })
        }
        getThumbnails() {
            return new Promise(e => {
                const {
                    src: t
                } = this.player.config.previewThumbnails;
                if (v.empty(t)) throw new Error("Missing previewThumbnails.src config attribute");
                const i = (v.string(t) ? [t] : t).map(e => this.getThumbnail(e));
                Promise.all(i).then(() => {
                    this.thumbnails.sort((e, t) => e.height - t.height), this.player.debug.log("Preview thumbnails", this.thumbnails), e()
                })
            })
        }
        getThumbnail(e) {
            return new Promise(t => {
                re(e).then(i => {
                    const s = {
                        frames: Ae(i),
                        height: null,
                        urlPrefix: ""
                    };
                    s.frames[0].text.startsWith("/") || s.frames[0].text.startsWith("http://") || s.frames[0].text.startsWith("https://") || (s.urlPrefix = e.substring(0, e.lastIndexOf("/") + 1));
                    const n = new Image;
                    n.onload = () => {
                        s.height = n.naturalHeight, s.width = n.naturalWidth, this.thumbnails.push(s), t()
                    }, n.src = s.urlPrefix + s.frames[0].text
                })
            })
        }
        startMove(e) {
            if (this.loaded && v.event(e) && ["touchmove", "mousemove"].includes(e.type) && this.player.media.duration) {
                if ("touchmove" === e.type) this.seekTime = this.player.media.duration * (this.player.elements.inputs.seek.value / 100);
                else {
                    const t = this.player.elements.progress.getBoundingClientRect(),
                        i = 100 / t.width * (e.pageX - t.left);
                    this.seekTime = this.player.media.duration * (i / 100), this.seekTime < 0 && (this.seekTime = 0), this.seekTime > this.player.media.duration - 1 && (this.seekTime = this.player.media.duration - 1), this.mousePosX = e.pageX, this.elements.thumb.time.innerText = pe(this.seekTime)
                }
                this.showImageAtCurrentTime()
            }
        }
        endMove() {
            this.toggleThumbContainer(!1, !0)
        }
        startScrubbing(e) {
            !1 !== e.button && 0 !== e.button || (this.mouseDown = !0, this.player.media.duration && (this.toggleScrubbingContainer(!0), this.toggleThumbContainer(!1, !0), this.showImageAtCurrentTime()))
        }
        endScrubbing() {
            this.mouseDown = !1, Math.ceil(this.lastTime) === Math.ceil(this.player.media.currentTime) ? this.toggleScrubbingContainer(!1) : M.call(this.player, this.player.media, "timeupdate", () => {
                this.mouseDown || this.toggleScrubbingContainer(!1)
            })
        }
        listeners() {
            this.player.on("play", () => {
                this.toggleThumbContainer(!1, !0)
            }), this.player.on("seeked", () => {
                this.toggleThumbContainer(!1)
            }), this.player.on("timeupdate", () => {
                this.lastTime = this.player.media.currentTime
            })
        }
        render() {
            this.elements.thumb.container = F("div", {
                class: this.player.config.classNames.previewThumbnails.thumbContainer
            }), this.elements.thumb.imageContainer = F("div", {
                class: this.player.config.classNames.previewThumbnails.imageContainer
            }), this.elements.thumb.container.appendChild(this.elements.thumb.imageContainer);
            const e = F("div", {
                class: this.player.config.classNames.previewThumbnails.timeContainer
            });
            this.elements.thumb.time = F("span", {}, "00:00"), e.appendChild(this.elements.thumb.time), this.elements.thumb.container.appendChild(e), v.element(this.player.elements.progress) && this.player.elements.progress.appendChild(this.elements.thumb.container), this.elements.scrubbing.container = F("div", {
                class: this.player.config.classNames.previewThumbnails.scrubbingContainer
            }), this.player.elements.wrapper.appendChild(this.elements.scrubbing.container)
        }
        showImageAtCurrentTime() {
            this.mouseDown ? this.setScrubbingContainerSize() : this.setThumbContainerSizeAndPos();
            const e = this.thumbnails[0].frames.findIndex(e => this.seekTime >= e.startTime && this.seekTime <= e.endTime),
                t = e >= 0;
            let i = 0;
            this.mouseDown || this.toggleThumbContainer(t), t && (this.thumbnails.forEach((t, s) => {
                this.loadedImages.includes(t.frames[e].text) && (i = s)
            }), e !== this.showingThumb && (this.showingThumb = e, this.loadImage(i)))
        }
        loadImage() {
            let e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : 0;
            const t = this.showingThumb,
                i = this.thumbnails[e],
                {
                    urlPrefix: s
                } = i,
                n = i.frames[t],
                l = i.frames[t].text,
                a = s + l;
            if (this.currentImageElement && this.currentImageElement.dataset.filename === l) this.showImage(this.currentImageElement, n, e, t, l, !1), this.currentImageElement.dataset.index = t, this.removeOldImages(this.currentImageElement);
            else {
                this.loadingImage && this.usingSprites && (this.loadingImage.onload = null);
                const i = new Image;
                i.src = a, i.dataset.index = t, i.dataset.filename = l, this.showingThumbFilename = l, this.player.debug.log("Loading image: ".concat(a)), i.onload = () => this.showImage(i, n, e, t, l, !0), this.loadingImage = i, this.removeOldImages(i)
            }
        }
        showImage(e, t, i, s, n) {
            let l = !(arguments.length > 5 && void 0 !== arguments[5]) || arguments[5];
            this.player.debug.log("Showing thumb: ".concat(n, ". num: ").concat(s, ". qual: ").concat(i, ". newimg: ").concat(l)), this.setImageSizeAndOffset(e, t), l && (this.currentImageContainer.appendChild(e), this.currentImageElement = e, this.loadedImages.includes(n) || this.loadedImages.push(n)), this.preloadNearby(s, !0).then(this.preloadNearby(s, !1)).then(this.getHigherQuality(i, e, t, n))
        }
        removeOldImages(e) {
            Array.from(this.currentImageContainer.children).forEach(t => {
                if ("img" !== t.tagName.toLowerCase()) return;
                const i = this.usingSprites ? 500 : 1e3;
                if (t.dataset.index !== e.dataset.index && !t.dataset.deleting) {
                    t.dataset.deleting = !0;
                    const {
                        currentImageContainer: e
                    } = this;
                    setTimeout(() => {
                        e.removeChild(t), this.player.debug.log("Removing thumb: ".concat(t.dataset.filename))
                    }, i)
                }
            })
        }
        preloadNearby(e) {
            let t = !(arguments.length > 1 && void 0 !== arguments[1]) || arguments[1];
            return new Promise(i => {
                setTimeout(() => {
                    const s = this.thumbnails[0].frames[e].text;
                    if (this.showingThumbFilename === s) {
                        let n;
                        n = t ? this.thumbnails[0].frames.slice(e) : this.thumbnails[0].frames.slice(0, e).reverse();
                        let l = !1;
                        n.forEach(e => {
                            const t = e.text;
                            if (t !== s && !this.loadedImages.includes(t)) {
                                l = !0, this.player.debug.log("Preloading thumb filename: ".concat(t));
                                const {
                                    urlPrefix: e
                                } = this.thumbnails[0], s = e + t, n = new Image;
                                n.src = s, n.onload = () => {
                                    this.player.debug.log("Preloaded thumb filename: ".concat(t)), this.loadedImages.includes(t) || this.loadedImages.push(t), i()
                                }
                            }
                        }), l || i()
                    }
                }, 300)
            })
        }
        getHigherQuality(e, t, i, s) {
            if (e < this.thumbnails.length - 1) {
                let n = t.naturalHeight;
                this.usingSprites && (n = i.h), n < this.thumbContainerHeight && setTimeout(() => {
                    this.showingThumbFilename === s && (this.player.debug.log("Showing higher quality thumb for: ".concat(s)), this.loadImage(e + 1))
                }, 300)
            }
        }
        get currentImageContainer() {
            return this.mouseDown ? this.elements.scrubbing.container : this.elements.thumb.imageContainer
        }
        get usingSprites() {
            return Object.keys(this.thumbnails[0].frames[0]).includes("w")
        }
        get thumbAspectRatio() {
            return this.usingSprites ? this.thumbnails[0].frames[0].w / this.thumbnails[0].frames[0].h : this.thumbnails[0].width / this.thumbnails[0].height
        }
        get thumbContainerHeight() {
            return this.mouseDown ? Math.floor(this.player.media.clientWidth / this.thumbAspectRatio) : Math.floor(this.player.media.clientWidth / this.thumbAspectRatio / 4)
        }
        get currentImageElement() {
            return this.mouseDown ? this.currentScrubbingImageElement : this.currentThumbnailImageElement
        }
        set currentImageElement(e) {
            this.mouseDown ? this.currentScrubbingImageElement = e : this.currentThumbnailImageElement = e
        }
        toggleThumbContainer() {
            let e = arguments.length > 0 && void 0 !== arguments[0] && arguments[0],
                t = arguments.length > 1 && void 0 !== arguments[1] && arguments[1];
            const i = this.player.config.classNames.previewThumbnails.thumbContainerShown;
            this.elements.thumb.container.classList.toggle(i, e), !e && t && (this.showingThumb = null, this.showingThumbFilename = null)
        }
        toggleScrubbingContainer() {
            let e = arguments.length > 0 && void 0 !== arguments[0] && arguments[0];
            const t = this.player.config.classNames.previewThumbnails.scrubbingContainerShown;
            this.elements.scrubbing.container.classList.toggle(t, e), e || (this.showingThumb = null, this.showingThumbFilename = null)
        }
        determineContainerAutoSizing() {
            this.elements.thumb.imageContainer.clientHeight > 20 && (this.sizeSpecifiedInCSS = !0)
        }
        setThumbContainerSizeAndPos() {
            if (!this.sizeSpecifiedInCSS) {
                const e = Math.floor(this.thumbContainerHeight * this.thumbAspectRatio);
                this.elements.thumb.imageContainer.style.height = "".concat(this.thumbContainerHeight, "px"), this.elements.thumb.imageContainer.style.width = "".concat(e, "px")
            }
            this.setThumbContainerPos()
        }
        setThumbContainerPos() {
            const e = this.player.elements.progress.getBoundingClientRect(),
                t = this.player.elements.container.getBoundingClientRect(),
                {
                    container: i
                } = this.elements.thumb,
                s = t.left - e.left + 10,
                n = t.right - e.left - i.clientWidth - 10;
            let l = this.mousePosX - e.left - i.clientWidth / 2;
            l < s && (l = s), l > n && (l = n), i.style.left = "".concat(l, "px")
        }
        setScrubbingContainerSize() {
            this.elements.scrubbing.container.style.width = "".concat(this.player.media.clientWidth, "px"), this.elements.scrubbing.container.style.height = "".concat(this.player.media.clientWidth / this.thumbAspectRatio, "px")
        }
        setImageSizeAndOffset(e, t) {
            if (!this.usingSprites) return;
            const i = this.thumbContainerHeight / t.h;
            e.style.height = "".concat(Math.floor(e.naturalHeight * i), "px"), e.style.width = "".concat(Math.floor(e.naturalWidth * i), "px"), e.style.left = "-".concat(t.x * i, "px"), e.style.top = "-".concat(t.y * i, "px")
        }
    }
    const Pe = {
        insertElements(e, t) {
            v.string(t) ? O(e, this.media, {
                src: t
            }) : v.array(t) && t.forEach(t => {
                O(e, this.media, t)
            })
        },
        change(e) {
            L(e, "sources.length") ? (ee.cancelRequests.call(this), this.destroy.call(this, () => {
                this.options.quality = [], H(this.media), this.media = null, v.element(this.elements.container) && this.elements.container.removeAttribute("class");
                const {
                    sources: t,
                    type: i
                } = e, [{
                    provider: s = be.html5,
                    src: n
                }] = t, l = "html5" === s ? i : "div", a = "html5" === s ? {} : {
                    src: n
                };
                Object.assign(this, {
                    provider: s,
                    type: i,
                    supported: J.check(i, s, this.config.playsinline),
                    media: F(l, a)
                }), this.elements.container.appendChild(this.media), v.boolean(e.autoplay) && (this.config.autoplay = e.autoplay), this.isHTML5 && (this.config.crossorigin && this.media.setAttribute("crossorigin", ""), this.config.autoplay && this.media.setAttribute("autoplay", ""), v.empty(e.poster) || (this.poster = e.poster), this.config.loop.active && this.media.setAttribute("loop", ""), this.config.muted && this.media.setAttribute("muted", ""), this.config.playsinline && this.media.setAttribute("playsinline", "")), Ne.addStyleHook.call(this), this.isHTML5 && Pe.insertElements.call(this, "source", t), this.config.title = e.title, Me.setup.call(this), this.isHTML5 && Object.keys(e).includes("tracks") && Pe.insertElements.call(this, "track", e.tracks), this.isHTML5 && Ne.build.call(this), this.isHTML5 && this.media.load(), this.previewThumbnails && this.previewThumbnails.load(), this.fullscreen.update()
            }, !0)) : this.debug.warn("Invalid source format")
        }
    };
    class Le {
        constructor(e, t) {
            if (this.timers = {}, this.ready = !1, this.loading = !1, this.failed = !1, this.touch = J.touch, this.media = e, v.string(this.media) && (this.media = document.querySelectorAll(this.media)), (window.jQuery && this.media instanceof jQuery || v.nodeList(this.media) || v.array(this.media)) && (this.media = this.media[0]), this.config = I({}, fe, Le.defaults, t || {}, (() => {
                    try {
                        return JSON.parse(this.media.getAttribute("data-plyr-config"))
                    } catch (e) {
                        return {}
                    }
                })()), this.elements = {
                    container: null,
                    captions: null,
                    buttons: {},
                    display: {},
                    progress: {},
                    inputs: {},
                    settings: {
                        popup: null,
                        menu: null,
                        panels: {},
                        buttons: {}
                    }
                }, this.captions = {
                    active: null,
                    currentTrack: -1,
                    meta: new WeakMap
                }, this.fullscreen = {
                    active: !1
                }, this.options = {
                    speed: [],
                    quality: []
                }, this.debug = new ke(this.config.debug), this.debug.log("Config", this.config), this.debug.log("Support", J), v.nullOrUndefined(this.media) || !v.element(this.media)) return void this.debug.error("Setup failed: no suitable element passed");
            if (this.media.plyr) return void this.debug.warn("Target already setup");
            if (!this.config.enabled) return void this.debug.error("Setup failed: disabled by config");
            if (!J.check().api) return void this.debug.error("Setup failed: no support");
            const i = this.media.cloneNode(!0);
            i.autoplay = !1, this.elements.original = i;
            const s = this.media.tagName.toLowerCase();
            switch (s) {
                case "video":
                case "audio":
                    this.type = s, this.provider = be.html5, this.media.hasAttribute("crossorigin") && (this.config.crossorigin = !0), this.media.hasAttribute("autoplay") && (this.config.autoplay = !0), (this.media.hasAttribute("playsinline") || this.media.hasAttribute("webkit-playsinline")) && (this.config.playsinline = !0), this.media.hasAttribute("muted") && (this.config.muted = !0), this.media.hasAttribute("loop") && (this.config.loop.active = !0);
                    break;
                default:
                    return void this.debug.error("Setup failed: unsupported type")
            }
            this.supported = J.check(this.type, this.provider, this.config.playsinline), this.supported.api ? (this.eventListeners = [], this.listeners = new Ee(this), this.storage = new oe(this), this.media.plyr = this, v.element(this.elements.container) || (this.elements.container = F("div", {
                tabindex: 0
            }), _(this.media, this.elements.container)), Ne.addStyleHook.call(this), Me.setup.call(this), this.config.debug && N.call(this, this.elements.container, this.config.events.join(" "), e => {
                this.debug.log("event: ".concat(e.type))
            }), this.isHTML5 && Ne.build.call(this), this.listeners.container(), this.listeners.global(), this.fullscreen = new Se(this), this.isHTML5 && this.config.autoplay && setTimeout(() => this.play(), 10), this.lastSeekTime = 0, this.config.previewThumbnails.enabled && (this.previewThumbnails = new xe(this))) : this.debug.error("Setup failed: no support")
        }
        get isHTML5() {
            return this.provider === be.html5
        }
        get isVideo() {
            return this.type === ve.video
        }
        get isAudio() {
            return this.type === ve.audio
        }
        play() {
            if (!v.function(this.media.play)) return null;
            const e = document.activeElement,
                t = v.element(e) && this.elements.controls.contains(e);
            return this.config.focusOnPlay && !t && X.call(this, this.elements.container), this.media.play()
        }
        pause() {
            this.playing && v.function(this.media.pause) && this.media.pause()
        }
        get playing() {
            return Boolean(this.ready && !this.paused && !this.ended)
        }
        get paused() {
            return Boolean(this.media.paused)
        }
        get stopped() {
            return Boolean(this.paused && 0 === this.currentTime)
        }
        get ended() {
            return Boolean(this.media.ended)
        }
        togglePlay(e) {
            (v.boolean(e) ? e : !this.playing) ? this.play(): this.pause()
        }
        stop() {
            this.isHTML5 ? (this.pause(), this.restart()) : v.function(this.media.stop) && this.media.stop()
        }
        restart() {
            this.currentTime = 0
        }
        rewind(e) {
            this.currentTime = this.currentTime - (v.number(e) ? e : this.config.seekTime)
        }
        forward(e) {
            this.currentTime = this.currentTime + (v.number(e) ? e : this.config.seekTime)
        }
        set currentTime(e) {
            if (!this.duration) return;
            const t = v.number(e) && e > 0;
            this.media.currentTime = t ? Math.min(e, this.duration) : 0, this.debug.log("Seeking to ".concat(this.currentTime, " seconds"))
        }
        get currentTime() {
            return Number(this.media.currentTime)
        }
        get buffered() {
            const {
                buffered: e
            } = this.media;
            return e && e.length && this.duration > 0 ? e.end(0) / this.duration : 0
        }
        get seeking() {
            return Boolean(this.media.seeking)
        }
        get duration() {
            const e = parseFloat(this.config.duration),
                t = (this.media || {}).duration,
                i = v.number(t) && t !== 1 / 0 ? t : 0;
            return e || i
        }
        set volume(e) {
            let t = e;
            v.string(t) && (t = Number(t)), v.number(t) || (t = this.storage.get("volume")), v.number(t) || ({
                volume: t
            } = this.config), t > 1 && (t = 1), t < 0 && (t = 0), this.config.volume = t, this.media.volume = t, !v.empty(e) && this.muted && t > 0 && (this.muted = !1)
        }
        get volume() {
            return Number(this.media.volume)
        }
        increaseVolume(e) {
            const t = this.media.muted ? 0 : this.volume;
            this.volume = t + (v.number(e) ? e : 0)
        }
        decreaseVolume(e) {
            this.increaseVolume(-e)
        }
        set muted(e) {
            let t = e;
            v.boolean(t) || (t = this.storage.get("muted")), v.boolean(t) || (t = this.config.muted), this.config.muted = t, this.media.muted = t
        }
        get muted() {
            return Boolean(this.media.muted)
        }
        get hasAudio() {
            return !this.isHTML5 || (!!this.isAudio || (Boolean(this.media.mozHasAudio) || Boolean(this.media.webkitAudioDecodedByteCount) || Boolean(this.media.audioTracks && this.media.audioTracks.length)))
        }
        set speed(e) {
            let t = null;
            v.number(e) && (t = e), v.number(t) || (t = this.storage.get("speed")), v.number(t) || (t = this.config.speed.selected);
            const {
                minimumSpeed: i,
                maximumSpeed: s
            } = this;
            t = function() {
                let e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : 0,
                    t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 0,
                    i = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : 255;
                return Math.min(Math.max(e, t), i)
            }(t, i, s), this.config.speed.selected = t, setTimeout(() => {
                this.media.playbackRate = t
            }, 0)
        }
        get speed() {
            return Number(this.media.playbackRate)
        }
        set quality(e) {
            const t = this.config.quality,
                i = this.options.quality;
            if (!i.length) return;
            let s = [!v.empty(e) && Number(e), this.storage.get("quality"), t.selected, t.default].find(v.number),
                n = !0;
            if (!i.includes(s)) {
                const e = function(e, t) {
                    return v.array(e) && e.length ? e.reduce((e, i) => Math.abs(i - t) < Math.abs(e - t) ? i : e) : null
                }(i, s);
                this.debug.warn("Unsupported quality option: ".concat(s, ", using ").concat(e, " instead")), s = e, n = !1
            }
            t.selected = s, this.media.quality = s, n && this.storage.set({
                quality: s
            })
        }
        get quality() {
            return this.media.quality
        }
        set loop(e) {
            const t = v.boolean(e) ? e : this.config.loop.active;
            this.config.loop.active = t, this.media.loop = t
        }
        get loop() {
            return Boolean(this.media.loop)
        }
        set source(e) {
            Pe.change.call(this, e)
        }
        get source() {
            return this.media.currentSrc
        }
        get download() {
            const {
                download: e
            } = this.config.urls;
            return v.url(e) ? e : this.source
        }
        set download(e) {
            v.url(e) && (this.config.urls.download = e, me.setDownloadUrl.call(this))
        }
        set poster(e) {
            this.isVideo ? Ne.setPoster.call(this, e, !1).catch(() => {}) : this.debug.warn("Poster can only be set for video")
        }
        get poster() {
            return this.isVideo ? this.media.getAttribute("poster") : null
        }
        get ratio() {
            if (!this.isVideo) return null;
            const e = G(Y.call(this));
            return v.array(e) ? e.join(":") : e
        }
        set ratio(e) {
            this.isVideo ? v.string(e) && $(e) ? (this.config.ratio = e, Z.call(this)) : this.debug.error("Invalid aspect ratio specified (".concat(e, ")")) : this.debug.warn("Aspect ratio can only be set for video")
        }
        set autoplay(e) {
            const t = v.boolean(e) ? e : this.config.autoplay;
            this.config.autoplay = t
        }
        get autoplay() {
            return Boolean(this.config.autoplay)
        }
        toggleCaptions(e) {
            ge.toggle.call(this, e, !1)
        }
        set currentTrack(e) {
            ge.set.call(this, e, !1)
        }
        get currentTrack() {
            const {
                toggled: e,
                currentTrack: t
            } = this.captions;
            return e ? t : -1
        }
        set language(e) {
            ge.setLanguage.call(this, e, !1)
        }
        get language() {
            return (ge.getCurrentTrack.call(this) || {}).language
        }
        set pip(e) {
            if (!J.pip) return;
            const t = v.boolean(e) ? e : !this.pip;
            v.function(this.media.webkitSetPresentationMode) && this.media.webkitSetPresentationMode(t ? ye.active : ye.inactive), v.function(this.media.requestPictureInPicture) && (!this.pip && t ? this.media.requestPictureInPicture() : this.pip && !t && document.exitPictureInPicture())
        }
        get pip() {
            return J.pip ? v.empty(this.media.webkitPresentationMode) ? this.media === document.pictureInPictureElement : this.media.webkitPresentationMode === ye.active : null
        }
        airplay() {
            J.airplay && this.media.webkitShowPlaybackTargetPicker()
        }
        toggleControls(e) {
            if (this.supported.ui && !this.isAudio) {
                const t = U(this.elements.container, this.config.classNames.hideControls),
                    i = void 0 === e ? void 0 : !e,
                    s = R(this.elements.container, this.config.classNames.hideControls, i);
                if (s && this.config.controls.includes("settings") && !v.empty(this.config.settings) && me.toggleMenu.call(this, !1), s !== t) {
                    const e = s ? "controlshidden" : "controlsshown";
                    A.call(this, this.media, e)
                }
                return !s
            }
            return !1
        }
        on(e, t) {
            N.call(this, this.elements.container, e, t)
        }
        once(e, t) {
            M.call(this, this.elements.container, e, t)
        }
        off(e, t) {
            E(this.elements.container, e, t)
        }
        destroy(e) {
            let t = arguments.length > 1 && void 0 !== arguments[1] && arguments[1];
            if (!this.ready) return;
            const i = () => {
                document.body.style.overflow = "", this.embed = null, t ? (Object.keys(this.elements).length && (H(this.elements.buttons.play), H(this.elements.captions), H(this.elements.controls), H(this.elements.wrapper), this.elements.buttons.play = null, this.elements.captions = null, this.elements.controls = null, this.elements.wrapper = null), v.function(e) && e()) : (x.call(this), function(e, t) {
                    v.element(t) && v.element(t.parentNode) && v.element(e) && t.parentNode.replaceChild(e, t)
                }(this.elements.original, this.elements.container), A.call(this, this.elements.original, "destroyed", !0), v.function(e) && e.call(this.elements.original), this.ready = !1, setTimeout(() => {
                    this.elements = null, this.media = null
                }, 200))
            };
            this.stop(), clearTimeout(this.timers.loading), clearTimeout(this.timers.controls), clearTimeout(this.timers.resized), this.isHTML5 && (Ne.toggleNativeControls.call(this, !0), i())
        }
        supports(e) {
            return J.mime.call(this, e)
        }
        static supported(e, t, i) {
            return J.check(e, t, i)
        }
        static loadSprite(e, t) {
            return ce(e, t)
        }
        static setup(e) {
            let t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {},
                i = null;
            return v.string(e) ? i = Array.from(document.querySelectorAll(e)) : v.nodeList(e) ? i = Array.from(e) : v.array(e) && (i = e.filter(v.element)), v.empty(i) ? null : i.map(e => new Le(e, t))
        }
    }
    var Ie;
    Le.defaults = (Ie = fe, JSON.parse(JSON.stringify(Ie))), window.Shopify = window.Shopify || {}, window.Shopify.Plyr = Le
}();
//# sourceMappingURL=shopify-plyr.en.js.map