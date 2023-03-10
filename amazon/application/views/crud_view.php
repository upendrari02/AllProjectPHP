<!doctype html>
<html lang="en-in" class="a-no-js" data-19ax5a9jf="dingo">
<!-- sp:feature:head-start -->

<head>
    <script>
        var aPageStart = (new Date()).getTime();
    </script>
    <meta charset="utf-8" />

    <script type='text/javascript'>
        var ue_t0 = ue_t0 || +new Date();
    </script>
    <!-- sp:feature:cs-optimization -->
    <meta http-equiv='x-dns-prefetch-control' content='on'>
    <link rel="dns-prefetch" href="https://images-eu.ssl-images-amazon.com">
    <link rel="dns-prefetch" href="https://m.media-amazon.com">
    <link rel="dns-prefetch" href="https://completion.amazon.com">
    <script type='text/javascript'>
        window.ue_ihb = (window.ue_ihb || window.ueinit || 0) + 1;
        if (window.ue_ihb === 1) {

            var ue_csm = window,
                ue_hob = +new Date();
            (function(d) {
                var e = d.ue = d.ue || {},
                    f = Date.now || function() {
                        return +new Date
                    };
                e.d = function(b) {
                    return f() - (b ? 0 : d.ue_t0)
                };
                e.stub = function(b, a) {
                    if (!b[a]) {
                        var c = [];
                        b[a] = function() {
                            c.push([c.slice.call(arguments), e.d(), d.ue_id])
                        };
                        b[a].replay = function(b) {
                            for (var a; a = c.shift();) b(a[0], a[1], a[2])
                        };
                        b[a].isStub = 1
                    }
                };
                e.exec = function(b, a) {
                    return function() {
                        try {
                            return b.apply(this, arguments)
                        } catch (c) {
                            ueLogError(c, {
                                attribution: a || "undefined",
                                logLevel: "WARN"
                            })
                        }
                    }
                }
            })(ue_csm);


            var ue_err_chan = 'jserr-rw';
            (function(d, e) {
                function h(f, b) {
                    if (!(a.ec > a.mxe) && f) {
                        a.ter.push(f);
                        b = b || {};
                        var c = f.logLevel || b.logLevel;
                        c && c !== k && c !== m && c !== n && c !== p || a.ec++;
                        c && c != k || a.ecf++;
                        b.pageURL = "" + (e.location ? e.location.href : "");
                        b.logLevel = c;
                        b.attribution = f.attribution || b.attribution;
                        a.erl.push({
                            ex: f,
                            info: b
                        })
                    }
                }

                function l(a, b, c, e, g) {
                    d.ueLogError({
                        m: a,
                        f: b,
                        l: c,
                        c: "" + e,
                        err: g,
                        fromOnError: 1,
                        args: arguments
                    }, g ? {
                        attribution: g.attribution,
                        logLevel: g.logLevel
                    } : void 0);
                    return !1
                }
                var k = "FATAL",
                    m = "ERROR",
                    n = "WARN",
                    p = "DOWNGRADED",
                    a = {
                        ec: 0,
                        ecf: 0,
                        pec: 0,
                        ts: 0,
                        erl: [],
                        ter: [],
                        mxe: 50,
                        startTimer: function() {
                            a.ts++;
                            setInterval(function() {
                                d.ue && a.pec < a.ec && d.uex("at");
                                a.pec = a.ec
                            }, 1E4)
                        }
                    };
                l.skipTrace = 1;
                h.skipTrace = 1;
                h.isStub = 1;
                d.ueLogError = h;
                d.ue_err = a;
                e.onerror = l
            })(ue_csm, window);


            var ue_id = 'WMZVJ0QZ56QFCB33E37K',
                ue_url = '/rd/uedata',
                ue_navtiming = 1,
                ue_mid = 'A21TJRUUN4KGV',
                ue_sid = '257-8400121-7204450',
                ue_sn = 'www.amazon.in',
                ue_furl = 'fls-eu.amazon.in',
                ue_surl = 'https://unagi-eu.amazon.com/1/events/com.amazon.csm.nexusclient.prod',
                ue_int = 0,
                ue_fcsn = 1,
                ue_urt = 3,
                ue_rpl_ns = 'cel-rpl',
                ue_ddq = 1,
                ue_fpf = '//fls-eu.amazon.in/1/batch/1/OP/A21TJRUUN4KGV:257-8400121-7204450:WMZVJ0QZ56QFCB33E37K$uedata=s:',
                ue_sbuimp = 1,
                ue_ibft = 0,
                ue_fnt = 0,

                ue_swi = 1;
            var ue_viz = function() {
                (function(c, e, a) {
                    function k(b) {
                        if (c.ue.viz.length < p && !l) {
                            var a = b.type;
                            b = b.originalEvent;
                            /^focus./.test(a) && b && (b.toElement || b.fromElement || b.relatedTarget) || (a = e[m] || ("blur" == a || "focusout" == a ? "hidden" : "visible"), c.ue.viz.push(a + ":" + (+new Date - c.ue.t0)), "visible" == a && (ue.isl && uex("at"), l = 1))
                        }
                    }
                    for (var l = 0, f, g, m, n = ["", "webkit", "o", "ms", "moz"], d = 0, p = 20, h = 0; h < n.length && !d; h++)
                        if (a = n[h], f = (a ? a + "H" : "h") + "idden", d = "boolean" == typeof e[f]) g = a + "visibilitychange", m = (a ? a + "V" : "v") + "isibilityState";
                    k({});
                    d && e.addEventListener(g, k, 0);
                    c.ue && d && (c.ue.pageViz = {
                        event: g,
                        propHid: f
                    })
                })(ue_csm, document, window)
            };

            (function(d, k, L) {
                function F(a) {
                    return a && a.replace && a.replace(/^\s+|\s+$/g, "")
                }

                function t(a) {
                    return "undefined" === typeof a
                }

                function B(a, b) {
                    for (var c in b) b[u](c) && (a[c] = b[c])
                }

                function G(a) {
                    try {
                        var b = L.cookie.match(RegExp("(^| )" + a + "=([^;]+)"));
                        if (b) return b[2].trim()
                    } catch (c) {}
                }

                function M(n, b, c) {
                    var e = (v || {}).type;
                    2 !== e && 1 !== e && (n && (d.ue_id = a.id = a.rid = n, w = w.replace(/((.*?:){2})(\w+)/, function(a, b) {
                        return b + n
                    })), b && (w = w.replace(/(.*?:)(\w|-)+/, function(a, c) {
                        return c + b
                    }), d.ue_sid = b), c && a.tag("page-source:" +
                        c), d.ue_fpf = w)
                }

                function N() {
                    var a = {};
                    return function(b) {
                        b && (a[b] = 1);
                        b = [];
                        for (var c in a) a[u](c) && b.push(c);
                        return b
                    }
                }

                function x(d, b, c, e) {
                    e = e || +new C;
                    var h, p;
                    if (b || t(c)) {
                        if (d)
                            for (p in h = b ? g("t", b) || g("t", b, {}) : a.t, h[d] = e, c) c[u](p) && g(p, b, c[p]);
                        return e
                    }
                }

                function g(d, b, c) {
                    var e = b && b != a.id ? a.sc[b] : a;
                    e || (e = a.sc[b] = {});
                    "id" === d && c && (O = 1);
                    return e[d] = c || e[d]
                }

                function P(d, b, c, e, h) {
                    c = "on" + c;
                    var g = b[c];
                    "function" === typeof g ? d && (a.h[d] = g) : g = function() {};
                    b[c] = function(a) {
                        h ? (e(a), g(a)) : (g(a), e(a))
                    };
                    b[c] && (b[c].isUeh =
                        1)
                }

                function Q(n, b, c, e) {
                    function r(b, c) {
                        var d = [b],
                            e = 0,
                            f = {},
                            h, k;
                        c ? (d.push("m=1"), f[c] = 1) : f = a.sc;
                        for (k in f)
                            if (f[u](k)) {
                                var r = g("wb", k),
                                    l = g("t", k) || {},
                                    p = g("t0", k) || a.t0,
                                    m;
                                if (c || 2 == r) {
                                    r = r ? e++ : "";
                                    d.push("sc" + r + "=" + k);
                                    for (m in l) 3 >= m.length && !t(l[m]) && null !== l[m] && d.push(m + r + "=" + (l[m] - p));
                                    d.push("t" + r + "=" + l[n]);
                                    if (g("ctb", k) || g("wb", k)) h = 1
                                }
                            }!H && h && d.push("ctb=1");
                        return d.join("&")
                    }

                    function p(b, c, f, e) {
                        if (b) {
                            var g = d.ue_err;
                            d.ue_url && !e && b && 0 < b.length && (e = new Image, a.iel.push(e), e.src = b, a.count && a.count("postbackImageSize",
                                b.length));
                            if (w) {
                                var h = k.encodeURIComponent;
                                h && b && (e = new Image, b = "" + d.ue_fpf + h(b) + ":" + (+new C - d.ue_t0), a.iel.push(e), e.src = b)
                            } else a.log && (a.log(b, "uedata", {
                                n: 1
                            }), a.ielf.push(b));
                            g && !g.ts && g.startTimer();
                            a.b && (g = a.b, a.b = "", p(g, c, f, 1))
                        }
                    }

                    function z(b) {
                        var c = v ? v.type : D,
                            d = 2 == c || a.isBFonMshop,
                            c = c && !d,
                            e = a.bfini;
                        O || (e && 1 < e && (b += "&bfform=1", c || (a.isBFT = e - 1)), d && (b += "&bfnt=1", a.isBFT = a.isBFT || 1), a.ssw && a.isBFT && (a.isBFonMshop && (a.isNRBF = 0), t(a.isNRBF) && (d = a.ssw(a.oid), d.e || t(d.val) || (a.isNRBF = 1 < d.val ? 0 : 1)),
                            t(a.isNRBF) || (b += "&nrbf=" + a.isNRBF)), a.isBFT && !a.isNRBF && (b += "&bft=" + a.isBFT));
                        return b
                    }
                    if (!a.paused && (b || t(c))) {
                        for (var m in c) c[u](m) && g(m, b, c[m]);
                        a.isBFonMshop || x("pc", b, c);
                        m = g("id", b) || a.id;
                        var s = g("id2", b),
                            f = a.url + "?" + n + "&v=" + a.v + "&id=" + m,
                            H = g("ctb", b) || g("wb", b),
                            y;
                        H && (f += "&ctb=" + H);
                        s && (f += "&id2=" + s);
                        1 < d.ueinit && (f += "&ic=" + d.ueinit);
                        if (!("ld" != n && "ul" != n || b && b != m)) {
                            if ("ld" == n) {
                                try {
                                    k[I] && k[I].isUeh && (k[I] = null)
                                } catch (G) {}
                                if (k.chrome)
                                    for (s = 0; s < J.length; s++) R(E, J[s]);
                                (s = L.ue_backdetect) && s.ue_back &&
                                    s.ue_back.value++;
                                d._uess && (y = d._uess());
                                a.isl = 1
                            }
                            a._bf && (f += "&bf=" + a._bf());
                            d.ue_navtiming && h && (g("ctb", m, "1"), a.isBFonMshop || x("tc", D, D, K));
                            !A || a.isBFonMshop || S || (h && B(a.t, {
                                na_: h.navigationStart,
                                ul_: h.unloadEventStart,
                                _ul: h.unloadEventEnd,
                                rd_: h.redirectStart,
                                _rd: h.redirectEnd,
                                fe_: h.fetchStart,
                                lk_: h.domainLookupStart,
                                _lk: h.domainLookupEnd,
                                co_: h.connectStart,
                                _co: h.connectEnd,
                                sc_: h.secureConnectionStart,
                                rq_: h.requestStart,
                                rs_: h.responseStart,
                                _rs: h.responseEnd,
                                dl_: h.domLoading,
                                di_: h.domInteractive,
                                de_: h.domContentLoadedEventStart,
                                _de: h.domContentLoadedEventEnd,
                                _dc: h.domComplete,
                                ld_: h.loadEventStart,
                                _ld: h.loadEventEnd,
                                ntd: ("function" !== typeof A.now || t(K) ? 0 : new C(K + A.now()) - new C) + a.t0
                            }), v && B(a.t, {
                                ty: v.type + a.t0,
                                rc: v.redirectCount + a.t0
                            }), S = 1);
                            a.isBFonMshop || B(a.t, {
                                hob: d.ue_hob,
                                hoe: d.ue_hoe
                            });
                            a.ifr && (f += "&ifr=1")
                        }
                        x(n, b, c, e);
                        c = "ld" == n && b && g("wb", b);
                        var q, l;
                        c || b && b !== m || $(b);
                        c || m == a.oid || aa(m, (g("t", b) || {}).tc || +g("t0", b), +g("t0", b));
                        (e = d.ue_mbl) && e.cnt && !c && (f += e.cnt());
                        c ? g("wb", b, 2) : "ld" == n && (a.lid = F(m));
                        for (q in a.sc)
                            if (1 ==
                                g("wb", q)) break;
                        if (c) {
                            if (a.s) return;
                            f = r(f, null)
                        } else e = r(f, null), e != f && (e = z(e), a.b = e), y && (f += y), f = r(f, b || a.id);
                        f = z(f);
                        if (a.b || c)
                            for (q in a.sc) 2 == g("wb", q) && delete a.sc[q];
                        y = 0;
                        a._rt && (f += "&rt=" + a._rt());
                        e = k.csa;
                        if (!c && e)
                            for (l in q = g("t", b) || {}, e = e("PageTiming"), q) q[u](l) && e("mark", ba[l] || l, q[l]);
                        c || (a.s = 0, (l = d.ue_err) && 0 < l.ec && l.pec < l.ec && (l.pec = l.ec, f += "&ec=" + l.ec + "&ecf=" + l.ecf), y = g("ctb", b), "ld" !== n || b || a.markers || (a.markers = {}, B(a.markers, g("t", b))), g("t", b, {}));
                        a.tag && a.tag().length && (f += "&csmtags=" +
                            a.tag().join("|"), a.tag = N());
                        l = a.viz || [];
                        (q = l.length) && (f += "&viz=" + l.splice(0, q).join("|"));
                        t(d.ue_pty) || (f += "&pty=" + d.ue_pty + "&spty=" + d.ue_spty + "&pti=" + d.ue_pti);
                        a.tabid && (f += "&tid=" + a.tabid);
                        a.aftb && (f += "&aftb=1");
                        !a._ui || b && b != m || (f += a._ui());
                        a.a = f;
                        p(f, n, y, c)
                    }
                }

                function $(a) {
                    var b = k.ue_csm_markers || {},
                        c;
                    for (c in b) b[u](c) && x(c, a, D, b[c])
                }

                function z(a, b, c) {
                    c = c || k;
                    if (c[T]) c[T](a, b, !1);
                    else if (c[U]) c[U]("on" + a, b)
                }

                function R(a, b, c) {
                    c = c || k;
                    if (c[V]) c[V](a, b, !1);
                    else if (c[W]) c[W]("on" + a, b)
                }

                function X() {
                    function a() {
                        d.onUl()
                    }

                    function b(a) {
                        return function() {
                            c[a] || (c[a] = 1, Q(a))
                        }
                    }
                    var c = {},
                        e, g;
                    d.onLd = b("ld");
                    d.onLdEnd = b("ld");
                    d.onUl = b("ul");
                    e = {
                        stop: b("os")
                    };
                    k.chrome ? (z(E, a), J.push(a)) : e[E] = d.onUl;
                    for (g in e) e[u](g) && P(0, k, g, e[g]);
                    d.ue_viz && ue_viz();
                    z("load", d.onLd);
                    x("ue")
                }

                function aa(g, b, c) {
                    var e = d.ue_mbl,
                        h = k.csa,
                        p = h && h("SPA"),
                        h = h && h("PageTiming");
                    e && e.ajax && e.ajax(b, c);
                    p && h && (p("newPage", {
                        requestId: g,
                        transitionType: "soft"
                    }), h("mark", "transitionStart", b));
                    a.tag("ajax-transition")
                }
                d.ueinit = (d.ueinit || 0) + 1;
                var a = d.ue = d.ue || {};
                a.t0 = k.aPageStart || d.ue_t0;
                a.id = d.ue_id;
                a.url = d.ue_url;
                a.rid = d.ue_id;
                a.a = "";
                a.b = "";
                a.h = {};
                a.s = 1;
                a.t = {};
                a.sc = {};
                a.iel = [];
                a.ielf = [];
                a.viz = [];
                a.v = "0.216207.0";
                a.paused = !1;
                var u = "hasOwnProperty",
                    E = "beforeunload",
                    I = "on" + E,
                    T = "addEventListener",
                    V = "removeEventListener",
                    U = "attachEvent",
                    W = "detachEvent",
                    ba = {
                        cf: "criticalFeature",
                        af: "aboveTheFold",
                        fn: "functional",
                        fp: "firstPaint",
                        fcp: "firstContentfulPaint",
                        bb: "bodyBegin",
                        be: "bodyEnd",
                        ld: "loaded"
                    },
                    C = k.Date,
                    A = k.performance || k.webkitPerformance,
                    h = (A || {}).timing,
                    v = (A || {}).navigation,
                    K = (h || {}).navigationStart,
                    w = d.ue_fpf,
                    O = 0,
                    S = 0,
                    J = [],
                    D;
                a.oid = F(a.id);
                a.lid = F(a.id);
                a._t0 = a.t0;
                a.tag = N();
                a.ifr = k.top !== k.self || k.frameElement ? 1 : 0;
                a.markers = null;
                a.attach = z;
                a.detach = R;
                if ("000-0000000-8675309" === d.ue_sid) {
                    var Y = G("cdn-rid"),
                        Z = G("session-id");
                    Y && Z && M(Y, Z, "cdn")
                }
                d.uei = X;
                d.ueh = P;
                d.ues = g;
                d.uet = x;
                d.uex = Q;
                a.reset = M;
                a.pause = function(d) {
                    a.paused = d
                };
                X()
            })(ue_csm, window, ue_csm.document);


            ue.stub(ue, "event");
            ue.stub(ue, "onSushiUnload");
            ue.stub(ue, "onSushiFlush");

            ue.stub(ue, "log");
            ue.stub(ue, "onunload");
            ue.stub(ue, "onflush");
            (function(c) {
                var a = c.ue;
                a.cv = {};
                a.cv.scopes = {};
                a.count = function(d, c, b) {
                    var e = {},
                        f = a.cv,
                        g = b && 0 === b.c;
                    e.counter = d;
                    e.value = c;
                    e.t = a.d();
                    b && b.scope && (f = a.cv.scopes[b.scope] = a.cv.scopes[b.scope] || {}, e.scope = b.scope);
                    if (void 0 === c) return f[d];
                    f[d] = c;
                    d = 0;
                    b && b.bf && (d = 1);
                    ue_csm.ue_sclog || !a.clog || 0 !== d || g ? a.log && a.log(e, "csmcount", {
                        c: 1,
                        bf: d
                    }) : a.clog(e, "csmcount", {
                        bf: d
                    })
                };
                a.count("baselineCounter2", 1);
                a && a.event && (a.event({
                        requestId: c.ue_id || "rid",
                        server: c.ue_sn || "sn",
                        obfuscatedMarketplaceId: c.ue_mid || "mid"
                    },
                    "csm", "csm.CSMBaselineEvent.4"), a.count("nexusBaselineCounter", 1, {
                    bf: 1
                }))
            })(ue_csm);


            (function(g, h, m) {
                if ("function" === typeof h.addEventListener && "function" === typeof m.querySelectorAll) {
                    var l, n, u, p, f, v, q, r, w, x = ["mouseenter", "mouseleave"],
                        y = "click dblclick mousedown mouseover mouseout touchstart keydown keypress MSPointerDown pointerdown focusin".split(" ").concat(x),
                        s = !1,
                        t = [];
                    p = function(a) {
                        for (var c = []; a;) c.push(a), a = a.parentNode;
                        return c
                    };
                    n = function(a, c) {
                        var b = -1,
                            d;
                        for (d = 0; d < c.length; d++)
                            if (c[d] === a) {
                                b = d;
                                break
                            }
                        return b
                    };
                    r = function(a, c) {
                        var b = n(a, c);
                        0 <= b && c.splice(b, 1)
                    };
                    u = function(a) {
                        var c;
                        a = p(a);
                        for (var b, d, e = 0; e < a.length; e++)
                            if (d = a[e], (b = d.nodeName) && b !== m.nodeName) {
                                b = b.toLowerCase();
                                if (d.id) return b + "#" + d.id + (c ? ">" + c : "");
                                (d = d.getAttribute("class")) && (b = b + "." + d.split(" ").join("."));
                                c = b + (c ? ">" + c : "")
                            }
                        return c
                    };
                    w = function(a) {
                        return a.replace(/[^\w.:\-]/g, function(a) {
                            return "#" === a ? "::" : ">" === a ? ":-" : "_"
                        })
                    };
                    q = function(a, c) {
                        var b, d, e;
                        if (g.ue && g.ue.count && g.ueLogError)
                            for (b = u(a), e = w(b), d = "degraded" === c ? "A UX degrading element has entered the viewport: " + b : "A " + c + " was not handled on element: " +
                                b, g.ueLogError({
                                    m: d,
                                    fromOnError: 1
                                }, {
                                    logLevel: "ERROR",
                                    attribution: b,
                                    message: d
                                }), b = ["TNR", "TNR:" + c, "TNR:" + e, "TNR:" + c + ":" + e], f = 0; f < b.length; f++) g.ue.count(b[f], (g.ue.count(b[f]) || 0) + 1)
                    };
                    v = function(a) {
                        a = a.getBoundingClientRect();
                        return a.top < a.bottom && a.left < a.right && 0 <= a.bottom && a.top <= h.innerHeight && 0 <= a.right && a.left <= h.innerWidth
                    };
                    l = function() {
                        s || (s = !0, setTimeout(function() {
                                [].forEach.call(m.querySelectorAll("[data-ux-degraded]"), function(a) {
                                    v(a) ? 0 > n(a, t) && (t.push(a), q(a, "degraded")) : r(a, t)
                                });
                                s = !1
                            },
                            250))
                    };
                    h.addEventListener("scroll", l);
                    h.addEventListener("resize", l);
                    l = function(a) {
                        var c = !1,
                            b = 0 > n(a, x);
                        m.addEventListener(a, function(d) {
                            if (!c) {
                                c = !0;
                                var e = [],
                                    f = b ? p(d.target) : [d.target],
                                    k, g, h;
                                for (g = 0; g < f.length; g++) k = f[g], k.getAttribute && ("mouseover" === a && k === d.target && ((h = k.getAttribute("data-ux-jq-mouseenter")) || "" === h) && e.push(k), ((h = k.getAttribute("data-ux-" + a)) || "" === h) && e.push(k));
                                e.length ? (d.ack = d.acknowledge = function(a) {
                                    a = a || d.currentTarget;
                                    r(a, e)
                                }, setTimeout(function() {
                                    var b;
                                    for (b = 0; b < e.length; b++) q(e[b],
                                        a);
                                    c = !1
                                }, 250)) : c = !1
                            }
                        }, !0)
                    };
                    for (f = 0; f < y.length; f++) l(y[f])
                }
            })(ue_csm, window, document);


            var ue_hoe = +new Date();
        }
        window.ueinit = window.ue_ihb;
    </script>

    <!-- pnbiq8vr9l3cbxnw1e1cklx9n -->
    <!-- sp:feature:aui-assets -->
    <link rel="stylesheet" href="https://images-eu.ssl-images-amazon.com/images/I/11EIQ5IGqaL._RC|01ZTHTZObnL.css,41S24rN5PfL.css,31qGOnSAToL.css,013z33uKh2L.css,017DsKjNQJL.css,01xH24p45SL.css,41EWOOlBJ9L.css,11gKzVUTNZL.css,01ElnPiDxWL.css,11bGSgD5pDL.css,01Dm5eKVxwL.css,01IdKcBuAdL.css,01y-XAlI+2L.css,21N4kUH7pxL.css,01oDR3IULNL.css,31q1y1irc5L.css,21j0IlW7xKL.css,01XPHJk60-L.css,014OeDQisGL.css,21aPhFy+riL.css,11gneA3MtJL.css,21fecG8pUzL.css,01RddH8vm-L.css,01CFUgsA-YL.css,31C80IiXalL.css,11qour3ND0L.css,11tRp6+0HHL.css,11MrdqKlKnL.css,11oHt2HYxnL.css,013RDhw9hoL.css,11JQtnL-6eL.css,11RKoGSb-gL.css,11jtXRmppwL.css,01QrWuRrZ-L.css,21pIv-yKhaL.css,11QyqG8yiqL.css,01890+Vwk8L.css,11kwKGWmBfL.css,11F2+OBzLyL.css,11Y05DTEL6L.css,01cbS3UK11L.css,21F85am0yFL.css,01giMEP+djL.css_.css?AUIClients/AmazonUI&fwQ02IuM#page_type-Gateway.not-trident.322290-T2.322288-T1.263677-T2.265810-T2"
    />
    <script>
        (function(f, h, Q, E) {
            function F(a) {
                w && w.tag && w.tag(q(":", "aui", a))
            }

            function u(a, b) {
                w && w.count && w.count("aui:" + a, 0 === b ? 0 : b || (w.count("aui:" + a) || 0) + 1)
            }

            function p(a) {
                try {
                    return a.test(navigator.userAgent)
                } catch (b) {
                    return !1
                }
            }

            function y(a, b, c) {
                a.addEventListener ? a.addEventListener(b, c, !1) : a.attachEvent && a.attachEvent("on" + b, c)
            }

            function q(a, b, c, e) {
                b = b && c ? b + a + c : b || c;
                return e ? q(a, b, e) : b
            }

            function G(a, b, c) {
                try {
                    Object.defineProperty(a, b, {
                        value: c,
                        writable: !1
                    })
                } catch (e) {
                    a[b] = c
                }
                return c
            }

            function va(a, b) {
                var c = a.length,
                    e = c,
                    g = function() {
                        e-- || (R.push(b), S || (setTimeout(ca, 0), S = !0))
                    };
                for (g(); c--;) da[a[c]] ? g() : (A[a[c]] = A[a[c]] || []).push(g)
            }

            function wa(a, b, c, e, g) {
                var d = h.createElement(a ? "script" : "link");
                y(d, "error", e);
                g && y(d, "load", g);
                a ? (d.type = "text/javascript", d.async = !0, c && /AUIClients|images[/]I/.test(b) && d.setAttribute("crossorigin", "anonymous"), d.src = b) : (d.rel = "stylesheet", d.href = b);
                h.getElementsByTagName("head")[0].appendChild(d)
            }

            function ea(a, b) {
                return function(c, e) {
                    function g() {
                        wa(b, c, d, function(b) {
                            T ? u("resource_unload") :
                                d ? (d = !1, u("resource_retry"), g()) : (u("resource_error"), a.log("Asset failed to load: " + c));
                            b && b.stopPropagation ? b.stopPropagation() : f.event && (f.event.cancelBubble = !0)
                        }, e)
                    }
                    if (fa[c]) return !1;
                    fa[c] = !0;
                    u("resource_count");
                    var d = !0;
                    return !g()
                }
            }

            function xa(a, b, c) {
                for (var e = {
                        name: a,
                        guard: function(c) {
                            return b.guardFatal(a, c)
                        },
                        logError: function(c, d, e) {
                            b.logError(c, d, e, a)
                        }
                    }, g = [], d = 0; d < c.length; d++) H.hasOwnProperty(c[d]) && (g[d] = U.hasOwnProperty(c[d]) ? U[c[d]](H[c[d]], e) : H[c[d]]);
                return g
            }

            function B(a, b, c, e, g) {
                return function(d,
                    h) {
                    function n() {
                        var a = null;
                        e ? a = h : "function" === typeof h && (p.start = C(), a = h.apply(f, xa(d, k, l)), p.end = C());
                        if (b) {
                            H[d] = a;
                            a = d;
                            for (da[a] = !0;
                                (A[a] || []).length;) A[a].shift()();
                            delete A[a]
                        }
                        p.done = !0
                    }
                    var k = g || this;
                    "function" === typeof d && (h = d, d = E);
                    b && (d = d ? d.replace(ha, "") : "__NONAME__", V.hasOwnProperty(d) && k.error(q(", reregistered by ", q(" by ", d + " already registered", V[d]), k.attribution), d), V[d] = k.attribution);
                    for (var l = [], m = 0; m < a.length; m++) l[m] = a[m].replace(ha, "");
                    var p = ia[d || "anon" + ++ya] = {
                        depend: l,
                        registered: C(),
                        namespace: k.namespace
                    };
                    c ? n() : va(l, k.guardFatal(d, n));
                    return {
                        decorate: function(a) {
                            U[d] = k.guardFatal(d, a)
                        }
                    }
                }
            }

            function ja(a) {
                return function() {
                    var b = Array.prototype.slice.call(arguments);
                    return {
                        execute: B(b, !1, a, !1, this),
                        register: B(b, !0, a, !1, this)
                    }
                }
            }

            function W(a, b) {
                return function(c, e) {
                    e || (e = c, c = E);
                    var g = this.attribution;
                    return function() {
                        z.push(b || {
                            attribution: g,
                            name: c,
                            logLevel: a
                        });
                        var d = e.apply(this, arguments);
                        z.pop();
                        return d
                    }
                }
            }

            function I(a, b) {
                this.load = {
                    js: ea(this, !0),
                    css: ea(this)
                };
                G(this, "namespace",
                    b);
                G(this, "attribution", a)
            }

            function ka() {
                h.body ? r.trigger("a-bodyBegin") : setTimeout(ka, 20)
            }

            function D(a, b) {
                a.className = X(a, b) + " " + b
            }

            function X(a, b) {
                return (" " + a.className + " ").split(" " + b + " ").join(" ").replace(/^ | $/g, "")
            }

            function la(a) {
                try {
                    return a()
                } catch (b) {
                    return !1
                }
            }

            function J() {
                if (K) {
                    var a = {
                        w: f.innerWidth || n.clientWidth,
                        h: f.innerHeight || n.clientHeight
                    };
                    5 < Math.abs(a.w - Y.w) || 50 < a.h - Y.h ? (Y = a, L = 4, (a = k.mobile || k.tablet ? 450 < a.w && a.w > a.h : 1250 <= a.w) ? D(n, "a-ws") : n.className = X(n, "a-ws")) : 0 < L && (L--, ma =
                        setTimeout(J, 16))
                }
            }

            function za(a) {
                (K = a === E ? !K : !!a) && J()
            }

            function Aa() {
                return K
            }

            function v(a, b) {
                return "sw:" + (b || "") + ":" + a + ":"
            }

            function na() {
                oa.forEach(function(a) {
                    F(a)
                })
            }

            function t(a) {
                oa.push(a)
            }

            function pa(a, b, c, e) {
                if (c) {
                    b = p(/Chrome/i) && !p(/Edge/i) && !p(/OPR/i) && !a.capabilities.isAmazonApp && !p(new RegExp(Z + "bwv" + Z + "b"));
                    var g = v(e, "browser"),
                        d = v(e, "prod_mshop"),
                        f = v(e, "beta_mshop");
                    !a.capabilities.isAmazonApp && c.browser && b && (t(g + "supported"), c.browser.action(g, e));
                    !b && c.browser && t(g + "unsupported");
                    c.prodMshop &&
                        t(d + "unsupported");
                    c.betaMshop && t(f + "unsupported")
                }
            }
            "use strict";
            var M = Q.now = Q.now || function() {
                    return +new Q
                },
                C = function(a) {
                    return a && a.now ? a.now.bind(a) : M
                }(f.performance),
                N = C(),
                l = f.AmazonUIPageJS || f.P;
            if (l && l.when && l.register) {
                N = [];
                for (var m = h.currentScript; m; m = m.parentElement) m.id && N.push(m.id);
                return l.log("A copy of P has already been loaded on this page.", "FATAL", N.join(" "))
            }
            var w = f.ue;
            F();
            F("aui_build_date:3.21.2-2021-03-27");
            var R = [],
                S = !1;
            var ca = function() {
                for (var a = setTimeout(ca, 0), b = M(); R.length;)
                    if (R.shift()(),
                        50 < M() - b) return;
                clearTimeout(a);
                S = !1
            };
            var da = {},
                A = {},
                fa = {},
                T = !1;
            y(f, "beforeunload", function() {
                T = !0;
                setTimeout(function() {
                    T = !1
                }, 1E4)
            });
            var ha = /^prv:/,
                V = {},
                H = {},
                U = {},
                ia = {},
                ya = 0,
                Z = String.fromCharCode(92),
                z = [],
                qa = f.onerror;
            f.onerror = function(a, b, c, e, g) {
                g && "object" === typeof g || (g = Error(a, b, c), g.columnNumber = e, g.stack = b || c || e ? q(Z, g.message, "at " + q(":", b, c, e)) : E);
                var d = z.pop() || {};
                g.attribution = q(":", g.attribution || d.attribution, d.name);
                g.logLevel = d.logLevel;
                g.attribution && console && console.log && console.log([g.logLevel ||
                    "ERROR", a, "thrown by", g.attribution
                ].join(" "));
                z = [];
                qa && (d = [].slice.call(arguments), d[4] = g, qa.apply(f, d))
            };
            I.prototype = {
                logError: function(a, b, c, e) {
                    b = {
                        message: b,
                        logLevel: c || "ERROR",
                        attribution: q(":", this.attribution, e)
                    };
                    if (f.ueLogError) return f.ueLogError(a || b, a ? b : null), !0;
                    console && console.error && (console.log(b), console.error(a));
                    return !1
                },
                error: function(a, b, c, e) {
                    a = Error(q(":", e, a, c));
                    a.attribution = q(":", this.attribution, b);
                    throw a;
                },
                guardError: W(),
                guardFatal: W("FATAL"),
                guardCurrent: function(a) {
                    var b =
                        z[z.length - 1];
                    return b ? W(b.logLevel, b).call(this, a) : a
                },
                log: function(a, b, c) {
                    return this.logError(null, a, b, c)
                },
                declare: B([], !0, !0, !0),
                register: B([], !0),
                execute: B([]),
                AUI_BUILD_DATE: "3.21.2-2021-03-27",
                when: ja(),
                now: ja(!0),
                trigger: function(a, b, c) {
                    var e = M();
                    this.declare(a, {
                        data: b,
                        pageElapsedTime: e - (f.aPageStart || NaN),
                        triggerTime: e
                    });
                    c && c.instrument && O.when("prv:a-logTrigger").execute(function(b) {
                        b(a)
                    })
                },
                handleTriggers: function() {
                    this.log("handleTriggers deprecated")
                },
                attributeErrors: function(a) {
                    return new I(a)
                },
                _namespace: function(a, b) {
                    return new I(a, b)
                }
            };
            var r = G(f, "AmazonUIPageJS", new I);
            var O = r._namespace("PageJS", "AmazonUI");
            O.declare("prv:p-debug", ia);
            r.declare("p-recorder-events", []);
            r.declare("p-recorder-stop", function() {});
            G(f, "P", r);
            ka();
            if (h.addEventListener) {
                var ra;
                h.addEventListener("DOMContentLoaded", ra = function() {
                    r.trigger("a-domready");
                    h.removeEventListener("DOMContentLoaded", ra, !1)
                }, !1)
            }
            var n = h.documentElement,
                aa = function() {
                    var a = ["O", "ms", "Moz", "Webkit"],
                        b = h.createElement("div");
                    return {
                        testGradients: function() {
                            return !0
                        },
                        test: function(c) {
                            var e = c.charAt(0).toUpperCase() + c.substr(1);
                            c = (a.join(e + " ") + e + " " + c).split(" ");
                            for (e = c.length; e--;)
                                if ("" === b.style[c[e]]) return !0;
                            return !1
                        },
                        testTransform3d: function() {
                            return !0
                        }
                    }
                }();
            l = n.className;
            var sa = /(^| )a-mobile( |$)/.test(l),
                ta = /(^| )a-tablet( |$)/.test(l),
                k = {
                    audio: function() {
                        return !!h.createElement("audio").canPlayType
                    },
                    video: function() {
                        return !!h.createElement("video").canPlayType
                    },
                    canvas: function() {
                        return !!h.createElement("canvas").getContext
                    },
                    svg: function() {
                        return !!h.createElementNS &&
                            !!h.createElementNS("http://www.w3.org/2000/svg", "svg").createSVGRect
                    },
                    offline: function() {
                        return navigator.hasOwnProperty && navigator.hasOwnProperty("onLine") && navigator.onLine
                    },
                    dragDrop: function() {
                        return "draggable" in h.createElement("span")
                    },
                    geolocation: function() {
                        return !!navigator.geolocation
                    },
                    history: function() {
                        return !(!f.history || !f.history.pushState)
                    },
                    webworker: function() {
                        return !!f.Worker
                    },
                    autofocus: function() {
                        return "autofocus" in h.createElement("input")
                    },
                    inputPlaceholder: function() {
                        return "placeholder" in
                            h.createElement("input")
                    },
                    textareaPlaceholder: function() {
                        return "placeholder" in h.createElement("textarea")
                    },
                    localStorage: function() {
                        return "localStorage" in f && null !== f.localStorage
                    },
                    orientation: function() {
                        return "orientation" in f
                    },
                    touch: function() {
                        return "ontouchend" in h
                    },
                    gradients: function() {
                        return aa.testGradients()
                    },
                    hires: function() {
                        var a = f.devicePixelRatio && 1.5 <= f.devicePixelRatio || f.matchMedia && f.matchMedia("(min-resolution:144dpi)").matches;
                        u("hiRes" + (sa ? "Mobile" : ta ? "Tablet" : "Desktop"), a ? 1 : 0);
                        return a
                    },
                    transform3d: function() {
                        return aa.testTransform3d()
                    },
                    touchScrolling: function() {
                        return p(/Windowshop|android|OS ([5-9]|[1-9][0-9]+)(_[0-9]{1,2})+ like Mac OS X|Chrome|Silk|Firefox|Trident.+?; Touch/i)
                    },
                    ios: function() {
                        return p(/OS [1-9][0-9]*(_[0-9]*)+ like Mac OS X/i) && !p(/trident|Edge/i)
                    },
                    android: function() {
                        return p(/android.([1-9]|[L-Z])/i) && !p(/trident|Edge/i)
                    },
                    mobile: function() {
                        return sa
                    },
                    tablet: function() {
                        return ta
                    },
                    rtl: function() {
                        return "rtl" === n.dir
                    }
                };
            for (m in k) k.hasOwnProperty(m) &&
                (k[m] = la(k[m]));
            for (var ba = "textShadow textStroke boxShadow borderRadius borderImage opacity transform transition".split(" "), P = 0; P < ba.length; P++) k[ba[P]] = la(function() {
                return aa.test(ba[P])
            });
            var K = !0,
                ma = 0,
                Y = {
                    w: 0,
                    h: 0
                },
                L = 4;
            J();
            y(f, "resize", function() {
                clearTimeout(ma);
                L = 4;
                J()
            });
            var ua = {
                getItem: function(a) {
                    try {
                        return f.localStorage.getItem(a)
                    } catch (b) {}
                },
                setItem: function(a, b) {
                    try {
                        return f.localStorage.setItem(a, b)
                    } catch (c) {}
                }
            };
            n.className = X(n, "a-no-js");
            D(n, "a-js");
            !p(/OS [1-8](_[0-9]*)+ like Mac OS X/i) ||
                f.navigator.standalone || p(/safari/i) || D(n, "a-ember");
            l = [];
            for (m in k) k.hasOwnProperty(m) && k[m] && l.push("a-" + m.replace(/([A-Z])/g, function(a) {
                return "-" + a.toLowerCase()
            }));
            D(n, l.join(" "));
            n.setAttribute("data-aui-build-date", "3.21.2-2021-03-27");
            r.register("p-detect", function() {
                return {
                    capabilities: k,
                    localStorage: k.localStorage && ua,
                    toggleResponsiveGrid: za,
                    responsiveGridEnabled: Aa
                }
            });
            p(/UCBrowser/i) || k.localStorage && D(n, ua.getItem("a-font-class"));
            r.declare("a-event-revised-handling", !1);
            try {
                var x = navigator.serviceWorker
            } catch (a) {
                F("sw:nav_err")
            }
            x &&
                (y(x, "message", function(a) {
                    a && a.data && u(a.data.k, a.data.v)
                }), x.controller && x.controller.postMessage("MSG-RDY"));
            var oa = [];
            l = {
                reg: {},
                unreg: {}
            };
            l.reg.browser = {
                action: function(a, b) {
                    x.register("/service-worker.js").then(function() {
                        u(a + "success")
                    }).catch(function(c) {
                        r.logError(c, "[AUI SW] Failed to " + b + " service worker: ");
                        u(a + "failure")
                    })
                }
            };
            (function(a) {
                var b = a.reg,
                    c = a.unreg;
                x && x.getRegistrations ? (O.when("A", "a-util").execute(function(a, b) {
                    pa(a, b, c, "unregister")
                }), y(f, "load", function() {
                    O.when("A", "a-util").execute(function(a,
                        c) {
                        pa(a, c, b, "register");
                        na()
                    })
                })) : (b && (b.browser && t(v("register", "browser") + "unsupported"), b.prodMshop && t(v("register", "prod_mshop") + "unsupported"), b.betaMshop && t(v("register", "beta_mshop") + "unsupported")), c && (c.browser && t(v("unregister", "browser") + "unsupported"), c.prodMshop && t(v("unregister", "prod_mshop") + "unsupported"), c.betaMshop && t(v("unregister", "beta_mshop") + "unsupported")), na())
            })(l);
            r.declare("a-fix-event-off", !1);
            u("pagejs:pkgExecTime", C() - N)
        })(window, document, Date);
        (function(b) {
            function q(a, g, k) {
                function r(a, c, d) {
                    var b = Array(g.length);
                    ~l && (b[l] = {});
                    ~m && (b[m] = d);
                    for (d = 0; d < n.length; d++) {
                        var e = n[d],
                            f = a[d];
                        b[e] = f
                    }
                    for (d = 0; d < p.length; d++) e = p[d], f = c[d], b[e] = f;
                    a = k.apply(null, b);
                    return ~l ? b[l] : a
                }
                "string" !== typeof a && b.P.error("C001");
                if (!t[a]) {
                    t[a] = !0;
                    k || (k = g, g = []);
                    a = a.split(":", 2);
                    var c = a[1] ? a[0] : void 0,
                        h = (a[1] || a[0]).replace(/@capability\//, "@c/"),
                        f = c ? b.P._namespace(c) : b.P,
                        u = !h.lastIndexOf("@c/", 0),
                        n = [];
                    a = [];
                    for (var p = [], v = [], m = -1, l = -1, c = 0; c < g.length; c++) {
                        var e = g[c];
                        "module" === e && f.error("C002");
                        "exports" === e ? l = c : "require" === e ? m = c : e.lastIndexOf("@p/", 0) ? e.lastIndexOf("@c/", 0) ? (n.push(c), a.push("mix:" + e)) : (p.push(c), v.push(e)) : (n.push(c), a.push(e.substr(3)))
                    }
                    f.when.apply(f, a).register("mix:" + h, function() {
                        var a = [].slice.call(arguments);
                        return u || ~m || p.length ? {
                            capabilities: v,
                            cardModuleFactory: function(b, d) {
                                b = r(a, b, d);
                                b.P = f;
                                return b
                            },
                            require: ~m ? q : void 0
                        } : r(a, [], function() {})
                    });
                    u && f.when("mix:@amzn/mix.client-runtime", "mix:" + h).execute(function(a, b) {
                        a.registerCapabilityModule(h,
                            b)
                    });
                    f.when("mix:" + h).register("xcp:" + h, function(a) {
                        return a
                    });
                    var q = function(a, b, d) {
                        try {
                            var c = a[0],
                                e = c.lastIndexOf("@p/", 0) ? "mix:" + c : c.substr(3);
                            f.when(e).execute(function(a) {
                                try {
                                    b(a)
                                } catch (c) {
                                    d(c)
                                }
                            })
                        } catch (g) {
                            d(g)
                        }
                    }
                }
            }
            "use strict";
            var t = {};
            b.mix_d || ((b.Promise ? P : P.when("3p-promise")).register("@p/promise-is-ready", function(a) {
                b.Promise = b.Promise || a
            }), (Array.prototype.includes ? P : P.when("a-polyfill")).register("@p/polyfill-is-ready", function() {}), b.mix_d = function(a, b, k) {
                P.when("@p/promise-is-ready",
                    "@p/polyfill-is-ready").execute("@p/mix-d-deps", function() {
                    q(a, b, k)
                })
            }, b.xcp_d = b.mix_d, P.when("mix:@amzn/mix.client-runtime").execute(function(a) {
                P.declare("xcp:@xcp/runtime", a)
            }))
        })(window);
        (window.AmazonUIPageJS ? AmazonUIPageJS : P).load.js('https://images-eu.ssl-images-amazon.com/images/I/61-6nKPKyWL.js?AUIClients/AmazonUIjQuery');
        (window.AmazonUIPageJS ? AmazonUIPageJS : P).when('sp.load.js').execute(function() {
            (window.AmazonUIPageJS ? AmazonUIPageJS : P).load.js('https://images-eu.ssl-images-amazon.com/images/I/11Y+5x+kkTL._RC|51IWYO5M+zL.js,112nmCqUymL.js,11giXtZCwVL.js,01+z+uIeJ-L.js,014NohEdE7L.js,21NNXfMitSL.js,11GXfd3+z+L.js,11AHlQhPRjL.js,11UNQpqeowL.js,11OREnu1epL.js,11KbZymw5ZL.js,21r53SJg7LL.js,0190vxtlzcL.js,01ezj5Rkz1L.js,11VS-C+YWGL.js,31pOTH2ZMRL.js,01rpauTep4L.js,01zbcJxtbAL.js_.js?AUIClients/AmazonUI&Dj66etiu#page_type-Gateway.319488-T1.309035-T1');
            (window.AmazonUIPageJS ? AmazonUIPageJS : P).load.js('https://images-eu.ssl-images-amazon.com/images/I/51gm4oPD2cL.js?AUIClients/AmazonUI');
            (window.AmazonUIPageJS ? AmazonUIPageJS : P).load.js('https://images-eu.ssl-images-amazon.com/images/I/51bbIMIQQwL._RC|31KrK+dcMcL.js,01Gf12ogmOL.js_.js?AUIClients/AmazonUI#page_type-Gateway');
            (window.AmazonUIPageJS ? AmazonUIPageJS : P).load.js('https://images-eu.ssl-images-amazon.com/images/I/51rvBMrJSfL.js?AUIClients/CardJsRuntimeBuzzCopyBuild');
        });
    </script>
    <!-- sp:feature:cookie-consent-assets -->
    <!-- sp:feature:nav-inline-css -->
    <!-- NAVYAAN CSS -->
    <style type="text/css">
        .nav-sprite-v1 .nav-sprite,
        .nav-sprite-v1 .nav-icon {
            background-image: url(https://images-eu.ssl-images-amazon.com/images/G/31/gno/sprites/nav-sprite-global-1x-hm-dsk-reorg._CB405936311_.png);
            background-position: 0 1000px;
            background-repeat: repeat-x;
        }

        .nav-spinner {
            background-image: url(https://images-eu.ssl-images-amazon.com/images/G/31/javascripts/lib/popover/images/snake._CB485935600_.gif);
            background-position: center center;
            background-repeat: no-repeat;
        }

        .nav-timeline-icon,
        .nav-access-image,
        .nav-timeline-prime-icon {
            background-image: url(https://images-eu.ssl-images-amazon.com/images/G/31/gno/sprites/timeline_sprite_1x._CB439943932_.png);
            background-repeat: no-repeat;
        }
    </style>
    <link rel="stylesheet" href="https://images-eu.ssl-images-amazon.com/images/I/41icwgAxVqL._RC|71nLq0lOl6L.css,21-QxUt197L.css,313Ydl5aIRL.css,21MKjoYL8wL.css,41OiMQkB+EL.css,01yCq3WXEcL.css,11kO7yAgiQL.css,31OvHRW+XiL.css,01XHMOHpK1L.css,01ucgi+I44L.css,31jJwAF+yLL.css_.css?AUIClients/NavDesktopUberAsset&lxcecf5A#desktop.in.309131-T1.310484-T1"
    />
    <!-- sp:feature:host-assets -->
    <style>
        #gw-desktop-herotator,
        #gw-desktop-herotator .a-carousel-viewport {
            height: 300px
        }

        #gw-desktop-herotator.tall {
            z-index: 0
        }

        #gw-desktop-herotator.tall,
        #gw-desktop-herotator.tall .a-carousel-controls {
            max-height: 230px
        }

        #gw-desktop-herotator.tall .a-carousel-viewport {
            height: auto !important
        }

        #gw-desktop-herotator.tall .a-carousel-left,
        #gw-desktop-herotator.tall .a-carousel-right {
            max-height: 250px
        }

        #gw-desktop-herotator.tall .a-carousel-viewport::before {
            background: linear-gradient(-180deg, rgba(234, 237, 237, 0), #eaeded);
            bottom: 0;
            content: "";
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00EAEDED', endColorstr='#EAEDED', GradientType=0);
            -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr='#00EAEDED', endColorstr='#EAEDED',GradientType=0)";
            left: 0;
            pointer-events: none;
            position: absolute;
            right: 0;
            top: 250px;
            z-index: 1
        }

        #gw-desktop-herotator.tall .a-carousel-container {
            overflow: visible
        }
    </style>
    <link rel="stylesheet" href="https://images-eu.ssl-images-amazon.com/images/I/41VuNbGfm5L.css?AUIClients/AmazonGatewayAuiAssets&/3eJPhjR#224544-T1" />
    <style>
        .gw-card-layout .a-cardui {
            background: #fff;
            height: 100%;
            position: relative;
            margin-bottom: 0;
            margin-top: 0;
            overflow: hidden;
            padding-top: 20px
        }

        .gw-card-layout .a-cardui .a-cardui-header {
            padding: 0 20px;
            margin-bottom: 10px
        }

        .gw-card-layout .a-cardui .a-cardui-footer {
            padding: 0 20px;
            margin-bottom: 20px;
            position: absolute;
            bottom: 0;
            width: 100%
        }

        .gw-card-layout .a-cardui .a-cardui-body {
            padding: 0 20px 56px 20px;
            margin-bottom: 0
        }

        .gw-card-layout .a-cardui .a-cardui-body:last-child {
            padding-bottom: 20px
        }

        .gw-card-layout .a-cardui:last-child {
            margin-bottom: 0
        }

        .a-lt-ie9 .gw-card-layout .a-cardui .a-cardui-body {
            padding-bottom: 20px
        }

        .gw-card-layout {
            font-size: 13px !important;
            line-height: 19px !important
        }

        .gw-card-layout .a-size-base {
            font-size: 13px !important;
            line-height: 19px !important
        }

        .gw-card-layout .a-size-small {
            font-size: 12px !important;
            line-height: 18px !important
        }

        .gw-card-layout .a-size-base-plus {
            font-size: 15px !important;
            line-height: 21px !important
        }

        .gw-card-layout .a-size-medium {
            font-size: 17px !important;
            line-height: 21.34px !important
        }

        .gw-card-layout .a-size-large {
            font-size: 21px !important;
            line-height: 27.3px !important
        }

        .gw-card-layout h2 {
            font-size: 21px !important;
            line-height: 27.3px !important
        }

        .truncate-1line,
        .truncate-2line {
            display: block;
            overflow: hidden;
            text-overflow: ellipsis;
            -ms-text-overflow: ellipsis
        }

        .truncate-1line {
            white-space: nowrap
        }

        .truncate-2line {
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
            max-height: 38px
        }

        .truncate-2line.a-size-base {
            max-height: 38px
        }

        .truncate-2line.a-size-small {
            max-height: 36px
        }

        .truncate-2line.a-size-base-plus {
            max-height: 42px
        }

        .truncate-2line.a-size-medium {
            max-height: 42.67px
        }

        .truncate-2line.a-size-large {
            max-height: 54.6px
        }

        h2.truncate-2line {
            max-height: 54.6px
        }

        .gw-card-layout .a-cardui.gw-media-card {
            padding-top: 0;
            color: #fff
        }

        .gw-card-layout .a-cardui.gw-media-card .a-cardui-footer,
        .gw-card-layout .a-cardui.gw-media-card .a-cardui-header {
            position: absolute;
            left: 0;
            z-index: 1;
            width: 100%
        }

        .gw-card-layout .a-cardui.gw-media-card .a-cardui-header {
            margin-top: 20px;
            padding: 0 20px;
            top: 0
        }

        .gw-card-layout .a-cardui.gw-media-card .a-cardui-header h3 {
            margin-right: 340px
        }

        .gw-card-layout .a-cardui.gw-media-card .a-cardui-footer {
            margin-bottom: 20px;
            padding: 0 20px;
            bottom: 0
        }

        .gw-card-layout .a-cardui.gw-media-card .a-cardui-footer .a-link-normal {
            color: #fff
        }

        .gw-card-layout .a-cardui.gw-media-card .a-cardui-body {
            padding: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            position: relative
        }

        .gw-card-layout .a-cardui.gw-media-card .asinImage {
            position: absolute;
            top: 0;
            bottom: 0;
            right: 20px;
            margin: auto
        }

        .gw-card-layout .a-cardui.gw-media-card .asinImage img {
            box-shadow: 0 2px 6px 0 rgba(0, 0, 0, .5)
        }

        .gw-card-layout .a-cardui.gw-media-card .asinBackground {
            width: 100%;
            height: 100%;
            overflow: hidden;
            background-repeat: no-repeat;
            background-position: center right;
            background-size: cover;
            filter: blur(10px);
            -webkit-filter: blur(10px);
            filter: progid:DXImageTransform.Microsoft.Blur(PixelRadius='10px');
            -ms-filter: "progid:DXImageTransform.Microsoft.Blur(PixelRadius='10px')";
            transform: scale(1.1);
            -webkit-transform: scale(1.1)
        }

        .gw-card-layout .a-cardui.gw-media-card .backgroundGradient {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to right, #111, rgba(17, 17, 17, .2));
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#111111, endColorstr=#17171733, GradientType=1);
            -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#111111, endColorstr=#17171733, GradientType=1)"
        }

        .gw-card-layout[data-flow-dir="h"] {
            display: -webkit-flex;
            display: flex;
            -webkit-flex-flow: row wrap;
            flex-flow: row wrap
        }

        .gw-card-layout[data-flow-dir="h"]>.gw-col {
            height: 420px;
            min-height: 420px;
            -webkit-flex: 1 0 290px;
            flex: 1 0 290px;
            padding-left: 10px;
            padding-right: 10px;
            min-width: 290px
        }

        .gw-card-layout[data-flow-dir="h"] .card-flow-row-break {
            -webkit-flex: 1 0 100%;
            flex: 1 0 100%
        }

        .gw-card-layout[data-flow-dir="h"]>.gw-col[data-col-span-ws="2"] {
            -webkit-flex: 2 0 580px;
            flex: 2 0 580px
        }

        .gw-card-layout[data-flow-dir="h"]>.gw-col[data-col-span-ws="4"] {
            -webkit-flex: 1 0 100%;
            flex: 1 0 100%
        }

        .gw-card-layout[data-flow-dir="h"] .gw-card-layout[data-flow-dir="v"] {
            display: -webkit-flex;
            display: flex;
            -webkit-flex-flow: column nowrap;
            flex-flow: column nowrap;
            margin-top: -10px;
            margin-bottom: -10px
        }

        .gw-card-layout[data-flow-dir="v"]>.gw-row {
            -webkit-flex: 1 0 0;
            flex: 1 0 0;
            margin-top: 10px;
            margin-bottom: 10px
        }

        .gw-card-layout [data-order-ws="1"] {
            -webkit-order: 1;
            order: 1
        }

        .gw-card-layout [data-order-ws="2"] {
            -webkit-order: 2;
            order: 2
        }

        .gw-card-layout [data-order-ws="3"] {
            -webkit-order: 3;
            order: 3
        }

        .gw-card-layout [data-order-ws="4"] {
            -webkit-order: 4;
            order: 4
        }

        .gw-card-layout [data-order-ws="5"] {
            -webkit-order: 5;
            order: 5
        }

        .gw-card-layout [data-order-ws="6"] {
            -webkit-order: 6;
            order: 6
        }

        .gw-card-layout [data-order-ws="7"] {
            -webkit-order: 7;
            order: 7
        }

        .gw-card-layout [data-order-ws="8"] {
            -webkit-order: 8;
            order: 8
        }

        .gw-card-layout [data-order-ws="9"] {
            -webkit-order: 9;
            order: 9
        }

        .gw-card-layout [data-order-ws="10"] {
            -webkit-order: 10;
            order: 10
        }

        .gw-card-layout [data-order-ws="11"] {
            -webkit-order: 11;
            order: 11
        }

        .gw-card-layout [data-order-ws="12"] {
            -webkit-order: 12;
            order: 12
        }

        .gw-card-layout [data-order-ws="13"] {
            -webkit-order: 13;
            order: 13
        }

        .gw-card-layout .gw-col.gw-fixed-col {
            min-width: 320px
        }

        @media (min-width:1240px) {
            .gw-card-layout>hr:last-of-type {
                display: none
            }
        }

        @media (max-width:1239px) {
            .gw-card-layout[data-flow-dir="h"]>.gw-col {
                -webkit-flex-basis: 33.33333%;
                flex-basis: 33.33333%;
                min-width: 33.33333%
            }
            .gw-card-layout[data-flow-dir="h"]>.gw-col[data-col-span-sm="2"] {
                -webkit-flex: 2 0 66.66667%;
                flex: 2 0 66.66667%
            }
            .gw-card-layout[data-flow-dir="h"]>.gw-col[data-col-span-sm="3"] {
                -webkit-flex: 1 0 100%;
                flex: 1 0 100%
            }
            .gw-card-layout [data-order-sm="1"] {
                -webkit-order: 1;
                order: 1
            }
            .gw-card-layout [data-order-sm="2"] {
                -webkit-order: 2;
                order: 2
            }
            .gw-card-layout [data-order-sm="3"] {
                -webkit-order: 3;
                order: 3
            }
            .gw-card-layout [data-order-sm="4"] {
                -webkit-order: 4;
                order: 4
            }
            .gw-card-layout [data-order-sm="5"] {
                -webkit-order: 5;
                order: 5
            }
            .gw-card-layout [data-order-sm="6"] {
                -webkit-order: 6;
                order: 6
            }
            .gw-card-layout [data-order-sm="7"] {
                -webkit-order: 7;
                order: 7
            }
            .gw-card-layout [data-order-sm="8"] {
                -webkit-order: 8;
                order: 8
            }
            .gw-card-layout [data-order-sm="9"] {
                -webkit-order: 9;
                order: 9
            }
            .gw-card-layout [data-order-sm="10"] {
                -webkit-order: 10;
                order: 10
            }
            .gw-card-layout [data-order-sm="11"] {
                -webkit-order: 11;
                order: 11
            }
            .gw-card-layout [data-order-sm="12"] {
                -webkit-order: 12;
                order: 12
            }
            .gw-card-layout [data-order-sm="13"] {
                -webkit-order: 13;
                order: 13
            }
            .gw-card-layout .gw-col.gw-fixed-col {
                min-width: none
            }
        }

        .gw-card-layout[data-flow-dir="h"]>.card-flow-row-break {
            height: 20px;
            margin: 0;
            border: none
        }

        .gw-card-layout[data-flow-dir="h"]>[data-display-at] {
            display: none
        }

        .gw-card-layout[data-flow-dir="h"]>[data-display-at*=ws] {
            display: block
        }

        .gw-card-layout[data-flow-dir="h"][data-grid-breakpoint=ws]>[data-hide-at-ws] {
            display: none !important
        }

        .gw-card-layout[data-flow-dir="h"] .gw-auto-height {
            height: auto !important;
            min-height: 0 !important
        }

        @media (max-width:1239px) {
            .gw-card-layout[data-flow-dir="h"] {
                min-width: 919px
            }
            .gw-card-layout[data-flow-dir="h"]>[data-display-at] {
                display: none
            }
            .gw-card-layout[data-flow-dir="h"]>[data-display-at*=sm] {
                display: block
            }
            .gw-card-layout[data-flow-dir="h"][data-grid-breakpoint=sm]>[data-hide-at-sm] {
                display: none !important
            }
        }
    </style>
    <script>
        var GWI = function(b) {
            var a = {},
                g = {},
                d = function() {},
                h = function() {
                    function c(f, c) {
                        for (var e = [], a = 0; a < f.length; a++) e.push({
                            id: f[a],
                            occured: !1
                        });
                        this.notify = function(f) {
                            for (var a = 0; a < e.length; a++) {
                                var k = e[a];
                                k.id === f && (k.occured = !0)
                            }
                            f = !0;
                            for (a = 0; a < e.length; a++) f = f && e[a].occured;
                            f && c()
                        }
                    }

                    function b(f, a) {
                        function e() {
                            c.occured && (c.time = (new Date).getTime())
                        }
                        var c = this,
                            k = [];
                        c.time = 0;
                        c.occured = a;
                        e();
                        c.notifySubscribers = function() {
                            c.occured = !0;
                            e();
                            for (var a = 0; a < k.length; a++) k[a].notify(f)
                        };
                        c.registerSubscriber =
                            function(a) {
                                null !== a && void 0 !== a && k.push(a);
                                c.occured && a.notify(f)
                            }
                    }
                    var e = this,
                        k = {},
                        a = [];
                    e.registerEvent = function(f, e) {
                        if (void 0 === k[f])
                            for (k[f] = new b(f, e), e = 0; e < a.length; e++) {
                                var d = new c([f], a[e]);
                                k[f].registerSubscriber(d)
                            }
                    };
                    e.registerSubscriber = function(f, a) {
                        a = new c(f, a);
                        for (var b = 0; b < f.length; b++) {
                            var d = f[b];
                            e.registerEvent(d, !1);
                            k[d].registerSubscriber(a)
                        }
                        return a
                    };
                    e.notifySubscribers = function(f) {
                        k[f].notifySubscribers()
                    };
                    e.getUnoccuredEvents = function(f) {
                        var a = [],
                            e;
                        for (e = 0; e < f.length; e++) {
                            var c =
                                f[e];
                            (void 0 === k[c] || k[c] && !k[c].occured) && a.push(c)
                        }
                        return a
                    };
                    e.getMaxTime = function(f) {
                        var a = 0,
                            e;
                        for (e = 0; e < f.length; e++) {
                            var c = f[e];
                            k[c] && k[c].time > a && (a = k[c].time)
                        }
                        return a
                    };
                    e.addGlobalHanlder = function(f) {
                        "function" === typeof f && a.push(f)
                    };
                    return e
                }();
            a.whenAll = function(a, b) {
                return h.registerSubscriber(a, b)
            };
            a.whenAny = function(c, b) {
                for (var e = [], k = 0; k < c.length; k++) e.push(a.whenAll([c[k]], b));
                return e
            };
            a.onEvent = h.addGlobalHanlder;
            a.register = function(a) {
                h.registerEvent(a, !0);
                h.notifySubscribers(a)
            };
            a.recordLatency = function(a) {
                g[a] || (g[a] = !0, b.uet && uet("cf", a, {
                    wb: 1
                }), b.uex && uex("ld", a, {
                    wb: 1
                }))
            };
            a.registerX1Once = function(c) {
                c && c.register("x1");
                a.registerX1Once = d
            };
            a.fireX2Once = function(c, g) {
                b.uet && uet("x2", void 0, void 0, g);
                a.registerX2Once(c);
                a.fireX2Once = d
            };
            a.registerX2Once = function(c) {
                a.registerX2Once = d;
                c && c.register("x2");
                a.register("x2")
            };
            a.regGwAtfReadyOnce = function(c) {
                c && c.register("gwAtfReady");
                a.register("gwAtfReady");
                a.regGwAtfReadyOnce = d
            };
            a.getUnoccuredEvents = h.getUnoccuredEvents;
            a.getMaxTime =
                h.getMaxTime;
            return a
        }(window);
        "use strict";
        GWI.preload = function(b, a) {
            if (b) {
                var g = new Image;
                g.onload = function() {
                    a && a()
                };
                g.src = b;
                return g.complete
            }
        };
        "use strict";
        GWI.instrumentImages = function(b, a) {
            var g = {};
            if (b && a)
                for (g.imgArray = a.split(" "), g.totalImgs = g.imgArray.length, g.scope = b + "-visible", g.imgReady = function() {
                        g.totalImgs--;
                        0 === g.totalImgs && (GWI.recordLatency(g.scope), GWI.register(g.scope))
                    }, b = 0; b < g.imgArray.length; b++) GWI.preload(g.imgArray[b], g.imgReady);
            return g
        };
        "use strict";
        GWI.util = function() {
            return {
                logScope: function(b) {
                    var a = window.GWI;
                    b && a && (a.recordLatency(b), a.register(b))
                },
                getParent: function(b) {
                    return (b = document.getElementById(b)) && b.parentElement
                },
                gwiData: function(b) {
                    var a;
                    if (a = b) b = b.getAttribute("data-gwi"), a = window.JSON && JSON.parse && JSON.parse(b);
                    return a || {}
                }
            }
        }();
        "use strict";
        GWI.BillboardWidget = function(b, a) {
            if (window.GWI && window.GWI.util) {
                var g = function() {
                    for (var a = 0; a < c.length; ++a)
                        if (!c[a].complete) return;
                    d.logScope(h.visible);
                    d.logScope(h.active)
                };
                a = a || [];
                var d = window.GWI.util;
                b = d.getParent(b);
                var h = d.gwiData(b),
                    c = [];
                for (b = 0; b < a.length; ++b)(function(b) {
                    var e = new Image;
                    e.onload = g;
                    e.src = a[b];
                    c[b] = e
                })(b);
                g()
            }
        };
        "use strict";
        GWI.AssetUtil = function() {
            var b = {
                image: function(a) {
                    a && (window.GwInstrumentation && window.GwInstrumentation.CF(a), a = window.ue, "object" === typeof a && "function" === typeof a.count && a.count("gw-preload-img", (a.count("gw-preload-img") || 0) + 1))
                }
            };
            return {
                load: function(a) {
                    a = a || [];
                    for (var g = 0; g < a.length; g++) {
                        var d = a[g];
                        if (d && d.src && d.type && "function" === typeof b[d.type]) b[d.type](d.src)
                    }
                }
            }
        }();
        "use strict";
        GWI.Card = function(b, a) {
            function g(a) {
                "object" == typeof ue && "function" == typeof ue.count && ue.count(a, (ue.count(a) || 0) + 1)
            }

            function d(a) {
                for (var b = 0; b < h.length; b++)
                    if (-1 < (" " + a.className + " ").indexOf(" " + h[b] + " ")) return !0;
                return !1
            }
            var h = ["image-map", "scalable-image-map", "scalable-image-link", "product-shoveler"];
            return {
                autoInstVisible: function(c) {
                    if (b.GWI && GWI.util) {
                        var h = function() {
                                for (r = 0; r < p.length; ++r)
                                    if (!p[r].complete) return;
                                e.logScope(l + "-visible")
                            },
                            e = GWI.util,
                            k = e.getParent(c),
                            q = a.getElementById(c),
                            f = q.getElementsByTagName("img"),
                            r, l = k.id,
                            p = [];
                        if (!d(q))
                            if (0 === l.length || l === c) g("gatewayCardInstrumentationFail");
                            else {
                                for (c = 0; c < f.length; c++) k = f[c], k.onload = h, p[c] = k;
                                h()
                            }
                    }
                },
                autoInstActive: function(c) {
                    if (b.GWI && GWI.util) {
                        var h = GWI.util,
                            e = h.getParent(c),
                            k = a.getElementById(c),
                            e = e.id;
                        d(k) || (0 === e.length || e === c ? g("gatewayCardInstrumentationFail") : h.logScope(e + "-active"))
                    }
                }
            }
        }(window, document);
        "use strict";
        P.register("atfWidgetComponent", function() {
            function b(e) {
                var b = Array.prototype.slice.call(m("#gw-card-layout .gw-col")),
                    c, f = [],
                    g = (c = document.getElementById("gw-card-layout")) && c.dataset && c.dataset.gridBreakpoint ? c.dataset.gridBreakpoint : "ws",
                    l = "xs" === g ? 2 : "sm" === g ? 3 : 4,
                    p = "data-order-" + g,
                    n = 0,
                    t = 0,
                    u = 0;
                for (c = 0; c < b.length; c++) u += d(b[c], g);
                for (c = e; 0 <= c; c--)
                    if (u >= c * l) {
                        n = c * l;
                        t = e - c;
                        break
                    }
                b.sort(function(a, f) {
                    return parseInt(a.getAttribute(p)) - parseInt(f.getAttribute(p))
                });
                for (c = e = 0; e < n;) e += d(b[c], g), Array.prototype.push.apply(f,
                    a(b[c])), c++;
                if (0 < t)
                    if ((b = h()) && b.length >= t)
                        for (c = 0; c < t; c++) Array.prototype.push.apply(f, b[c]);
                    else f.push("gw-never-event");
                return f
            }

            function a(a) {
                for (var b = a.querySelectorAll(".gw-row"), d = [], f = 0; f < b.length; f++) g(b[f]) || d.push(b[f].id);
                c(a, "celwidget") && !g(a) && d.push(a.id);
                return d
            }

            function g(a) {
                return 0 < a.getElementsByClassName("text/x-dacx-safeframe").length || 0 < a.getElementsByClassName("text/x-APE-lightAds").length || 0 < a.getElementsByTagName("iframe").length
            }

            function d(a, c) {
                a = parseInt(a.getAttribute("data-col-span-" +
                    c));
                return 1 < a ? a : 1
            }

            function h() {
                var a = [],
                    b = m("#gw-content-grid .gwi-row"),
                    d;
                for (d = 0; d < b.length; d++) {
                    var f = [],
                        g = b[d];
                    c(g, "desktop-row") && f.push(g.id);
                    if (c(g, "billboardRowWrapper")) {
                        var g = g.querySelectorAll(".billboard"),
                            l;
                        for (l = 0; l < g.length; l++) f.push(g[l].id)
                    }
                    a.push(f)
                }
                return a
            }

            function c(a, c) {
                return -1 < (" " + a.className + " ").indexOf(" " + c + " ")
            }

            function m(a) {
                if ("function" !== typeof document.querySelectorAll && "object" !== typeof document.querySelectorAll) {
                    var c = [];
                    if (document.createStyleSheet && document.all) {
                        var b =
                            document.createStyleSheet(""),
                            f = document.all,
                            d = f.length;
                        if (b && b.addRule && b.removeRule) {
                            b.addRule(a, "gwTemp:forQS");
                            for (a = 0; a < d; a += 1) "forQS" === f[a].currentStyle.gwTemp && c.push(f[a]);
                            b.removeRule(0)
                        }
                    }
                    return c
                }
                return document.querySelectorAll(a)
            }
            return {
                getWidgets: function() {
                    return b(2)
                }
            }
        });
        "use strict";
        (function() {
            var b = Array.prototype.slice;
            try {
                b.call(document.documentElement)
            } catch (a) {
                Array.prototype.slice = function(a, d) {
                    d = "undefined" !== typeof d ? d : this.length;
                    if ("[object Array]" === Object.prototype.toString.call(this)) return b.call(this, a, d);
                    var h = [],
                        c;
                    c = this.length;
                    a = a || 0;
                    a = 0 <= a ? a : Math.max(0, c + a);
                    var m = "number" == typeof d ? Math.min(d, c) : c;
                    0 > d && (m = c + d);
                    c = m - a;
                    if (0 < c)
                        if (h = Array(c), this.charAt)
                            for (d = 0; d < c; d++) h[d] = this.charAt(a + d);
                        else
                            for (d = 0; d < c; d++) h[d] = this[a + d];
                    return h
                }
            }
        })();
        GWI.duff = function(b, a) {
            function g(a) {
                g = h;
                b.uet && (uet("af", void 0, void 0, a), uet("fn", void 0, void 0, a), b.P && P.register("fn"));
                d()
            }

            function d() {
                d = h;
                try {
                    b.P && P.register("af"), b.P && P.register("gwAtfReady"), GWI.register("af"), GWI.register("gwAtfReady"), b.P && P.register("sp.load.js"), b.uet && uet("cf", "spLoadJs", {
                        wb: 1
                    }), b.uex && uex("ld", "spLoadJs", {
                        wb: 1
                    })
                } catch (a) {}
            }
            var h = function() {},
                c = !1;
            GWI.onEvent(function() {
                P.when("atfWidgetComponent").execute("fire-atf", function(a) {
                    if (!c) {
                        a = a.getWidgets();
                        var b = [],
                            d;
                        for (d =
                            0; d < a.length; d++) b.push(a[d] + "-visible");
                        atfEvents = b;
                        atfEvents = atfEvents.concat(["cf"]);
                        b = atfEvents;
                        a = GWI.getUnoccuredEvents(b);
                        b = GWI.getMaxTime(b);
                        a.length ? c = !1 : (g(b), c = !0)
                    }
                })
            })
        }(window, document);
        "use strict";
        var GwInstrumentation = function(b) {
            function a() {
                c && 0 === h && (b.uet && uet("cf"), b.P && P.register("cf"), b.GWI && GWI.register("cf"), b.ue && ue.tag && b.ue.tag(m ? "gwCFImgCache" : "gwCFImgNoCache"))
            }

            function g(a) {
                P.when("gwAjax").execute(function(b) {
                    b(a.uri, {
                        cache: !1,
                        type: "post",
                        data: a.data,
                        id: "ajaxATF"
                    })
                })
            }
            var d = {},
                h = 0,
                c = !1,
                m = 1,
                e = {};
            d.markAF = function() {};
            d.markH1Af = function(d) {
                c = !0;
                b.uet && uet("cf", "h1Af", {
                    wb: 1
                });
                b.uex && uex("ld", "h1Af", {
                    wb: 1
                });
                b.P && P.register("h1Af");
                a();
                d && g(d)
            };
            d.preload = function(a, b) {
                if (a) {
                    var f =
                        new Image;
                    f.onload = function() {
                        b && b()
                    };
                    f.src = a;
                    return f.complete
                }
            };
            d.CF = function(b) {
                var c, f = !1;
                if ("string" === typeof b) e[b] || (c = new d.CF, e[b] = c, b = d.preload(b, function() {
                    c.ready()
                }), m &= b);
                else {
                    if (this.constructor === d.CF) return c = {}, h++, c.ready = function() {
                        f || (f = !0, h--, a())
                    }, c;
                    throw Error("Incorrect invocation of GwInstrumentation.CF(...)");
                }
            };
            return d
        }(window);
        "use strict";
        P.register("LinkDecorator", function() {
            var b = ["pf_rd_p", "pd_rd_r", "pd_rd_w", "pd_rd_wg"],
                a = ["ref_"],
                g = function(a, b) {
                    var c = document.getElementById(b);
                    a && a.split(" ").forEach(function(a) {
                        c && c.addEventListener ? c.addEventListener(a, d) : c && c.attachEvent && c.attachEvent("on" + a, d)
                    })
                },
                d = function(a) {
                    a = a || window.event;
                    var b = a.which || a.keyCode;
                    if ("keydown" != a.type || 13 === b)
                        for (a = a.target || a.srcElement; a && a.parentNode;) {
                            b = a.tagName && a.tagName.toLowerCase();
                            if ("a" == b || "area" == b) {
                                h(a);
                                break
                            } else if (a.id && "gw-quick-look-btn" ==
                                a.id) {
                                a = a.parentNode;
                                a = a.getElementsByTagName && a.getElementsByTagName("a");
                                for (b = 0; b < a.length; b++) {
                                    var c = a && a[b];
                                    c && h(c)
                                }
                                break
                            }
                            a = a.parentNode
                        }
                },
                h = function(a) {
                    var b = a.href,
                        d = window.ue && window.ue.rid,
                        e;
                    if (e = b && d && a.baseURI) e = a.baseURI, e = b.substring(0, e.length + 1) !== e + "#" && b !== e;
                    e && 0 > b.indexOf("pf_rd_r\x3d" + d) && c(d, a)
                },
                c = function(c, d) {
                    var g = m(d.href),
                        h = g.queryParams;
                    if (h.pf_rd_r) c && c !== h.pf_rd_r && (h.pf_rd_r = c);
                    else {
                        c && (h.pf_rd_r = c);
                        var n = k(d);
                        n && q(b, function(a) {
                            var b = n.getAttribute("data-" + a);
                            b && (h[a] =
                                b)
                        });
                        n && q(a, function(a) {
                            var b = n.getAttribute("data-" + a);
                            b && !h[a] && (h[a] = b)
                        })
                    }
                    d.href = g.urlPath + "?" + e(h)
                },
                m = function(a) {
                    var b = a.indexOf("?");
                    if (0 > b) return {
                        urlPath: a,
                        queryParams: {}
                    };
                    var c = {},
                        d = a.substring(b + 1).split("\x26");
                    q(d, function(a) {
                        a = a.split("\x3d", 2);
                        2 == a.length && !c[a[0]] && (c[a[0]] = a[1])
                    });
                    return {
                        urlPath: a.substring(0, b),
                        queryParams: c
                    }
                },
                e = function(a) {
                    var b = [],
                        c;
                    for (c in a) b.push(c + "\x3d" + a[c]);
                    return b.join("\x26")
                },
                k = function(a) {
                    for (; a && a.parentNode;) {
                        if (a.className && 0 <= a.className.indexOf("celwidget") &&
                            0 <= a.className.indexOf("csm-placement-id")) return a;
                        a = a.parentNode
                    }
                },
                q = function(a, b) {
                    for (var c = 0; c < a.length; c++) b(a[c])
                };
            return function(a) {
                g("mousedown touchstart keydown", a)
            }
        });
        (function(b) {
            var a = window.AmazonUIPageJS || window.P,
                d = a._namespace || a.attributeErrors,
                c = d ? d("AmazonGatewayHackAssets", "") : a;
            c.guardFatal ? c.guardFatal(b)(c, window) : c.execute(function() {
                b(c, window)
            })
        })(function(b, a, d) {
            a.P && b.when("A", "ready").execute(function(c) {
                c.on("packard:glow:destinationChangeAll", function() {
                    a.location.reload()
                })
            });
            a.P && b.when("p-detect").execute(function() {
                var a = document;
                !/(^|\s+)a-touch(\s+|$)/.test(a.documentElement.className) && ("ontouchend" in a || 0 < navigator.maxTouchPoints ||
                    0 < navigator.msMaxTouchPoints) && (a.documentElement.className += " a-touch")
            });
            (function(a) {
                a.P && b.when("A").execute(function(b) {
                    a.GWI && a.GWI.recordLatency("gwAUIReady")
                })
            })(a);
            a.P && b.when("jQuery").execute(function(c) {
                a.GWI && a.GWI.recordLatency("jQueryReady");
                c(document).ready(function() {
                    a.GWI && a.GWI.recordLatency("jQueryDomReady")
                });
                c(a).load(function() {
                    a.GWI && a.GWI.recordLatency("jQueryWindowLoad");
                    try {
                        b.register("af"), b.register("sp.load.js"), b.register("gwAtfReady")
                    } catch (c) {}
                })
            });
            a.P && b.when("af").execute(function() {
                b.register("x1");
                b.register("x2")
            });
            a.P && b.when("ready", "af").execute(function() {
                b.register("gwLayoutReady");
                a.GWI && a.GWI.recordLatency("gwLayoutReady")
            });
            a.P && b.when("navCF").execute(function() {
                a.GWI && a.GWI.recordLatency("navCF")
            });
            a.P && b.when("A", "gwLayoutReady").execute(function(b) {
                b.capabilities.hires && b.$(a).trigger("resize")
            });
            document.documentElement.setAttribute("data-useragent", navigator.userAgent);
            document.documentElement.setAttribute("data-platform", navigator.platform)
        });
        (window.AmazonUIPageJS ? AmazonUIPageJS : P).load.js('https://images-eu.ssl-images-amazon.com/images/I/01rGP6HIADL.js?AUIClients/GenericObservableJS');
        (window.AmazonUIPageJS ? AmazonUIPageJS : P).load.js('https://images-eu.ssl-images-amazon.com/images/I/01q83dUa5BL._RC|41z5VZesFyL.js_.js?AUIClients/AmazonGatewayAuiAssets&/3eJPhjR#224544-T1');
        (function(e) {
            var g = window.AmazonUIPageJS || window.P,
                k = g._namespace || g.attributeErrors,
                b = k ? k("AmazonGatewayCardGridAssets", "") : g;
            b.guardFatal ? b.guardFatal(e)(b, window) : b.execute(function() {
                e(b, window)
            })
        })(function(e, g, k) {
            e.when("jQuery").register("GwGridLogic", function(b) {
                function g(a) {
                    a = a || b("html").width();
                    return n && 1239 >= a ? "sm" : "ws"
                }

                function k(a, b) {
                    a.attr("data-hide-at-" + b, !0)
                }

                function h(a, b, c) {
                    if (!a.length) throw Error("No grid layout found with selector");
                    this.$grid = a;
                    this.selector = b;
                    this.context =
                        c;
                    this.sorted = {}
                }

                function l(a, d) {
                    var c = b(a, d);
                    if (!c.length) throw Error("No grid found with selector: " + a);
                    this.gridDom = new h(c, a, d)
                }
                var p = {
                        xs: 2,
                        sm: 3,
                        ws: 4
                    },
                    n = !1;
                b("html").hasClass("a-lt-ie9") || (n = !0);
                h.prototype.setBreakpoint = function(a) {
                    this.$grid.attr("data-grid-breakpoint", a)
                };
                h.prototype.sortFor = function(a) {
                    if (this.sorted[a]) return this.sorted[a];
                    var d = b(this.selector + "\x3e [data-order-" + a + "]", this.context).sort(function(c, f) {
                        c = b(c).data("order-" + a);
                        f = b(f).data("order-" + a);
                        return c < f ? -1 : c > f ? 1 :
                            0
                    });
                    return this.sorted[a] = d
                };
                h.prototype.updateSourceOrder = function(a) {};
                h.prototype.dropIncompleteRows = function(a) {
                    if (!this.$grid.data("init-" + a)) {
                        var d = this.sortFor(a),
                            c = [],
                            f = 0,
                            g = d.length,
                            e = [];
                        d.each(function(d, h) {
                            var m = b(h),
                                l = m.hasClass("card-flow-row-break"),
                                m = m.data("col-span-" + a) || 1;
                            l || (f += m);
                            f > p[a] ? (k(b(c), a), c = [h], f = m) : c.push(h);
                            if (l || d === g - 1) f < p[a] ? k(b(c), a) : e = e.concat(c), c = [], f = 0
                        });
                        b([e[0], e.pop()]).each(function(c, d) {
                            c = b(d);
                            c.hasClass("card-flow-row-break") && k(c, a)
                        });
                        this.$grid.data("init-" +
                            a, !0)
                    }
                };
                l.prototype.init = function() {
                    if (this.gridDom.$grid) {
                        this.breakpoint = g();
                        this.update();
                        var a = this;
                        e.when("A").execute("RegisterResizeListener", function(b) {
                            b.on("resize", function(c, b) {
                                if (b.width || b.orientation) c = g(c.width), c !== a.breakpoint && (a.breakpoint = c, a.update())
                            })
                        });
                        return this
                    }
                };
                l.prototype.update = function() {
                    this.gridDom && (this.gridDom.setBreakpoint(this.breakpoint), this.gridDom.dropIncompleteRows(this.breakpoint), this.gridDom.updateSourceOrder(this.breakpoint))
                };
                return function(a, b) {
                    return new l(a,
                        b)
                }
            })
        });
        (window.AmazonUIPageJS ? AmazonUIPageJS : P).when('h1Af').execute(function() {
            (window.AmazonUIPageJS ? AmazonUIPageJS : P).load.js('https://images-eu.ssl-images-amazon.com/images/I/31uXiQoeSlL.js?AUIClients/AmazonGatewayHerotatorJS');
        });
        (window.AmazonUIPageJS ? AmazonUIPageJS : P).when('videoonpage').execute(function() {
            (window.AmazonUIPageJS ? AmazonUIPageJS : P).load.js('https://images-eu.ssl-images-amazon.com/images/I/9186fz4EkfL.js?AUIClients/VideoJsCardsBuzz&Rp/mHqBq#language-en');
        });
    </script>
    <script>
        window.GWI && GWI.AssetUtil && GWI.AssetUtil.load(
            [{
                "type": "image",
                "src": "https://images-eu.ssl-images-amazon.com/images/G/31/img17/AmazonPantry/April/SVD/GWHero/Pantry4thAprilPC/Pantry_GW_4th_April_1500x600_RC._CB655706107_.jpg"
            }]
        );
        window.P && P.register('preload');
    </script>
    <title>Online Shopping site in India: Shop Online for Mobiles, Books, Watches, Shoes and More - Amazon.in</title>
    <meta name="description" content="Amazon.in: Online Shopping India - Buy mobiles, laptops, cameras, books, watches, apparel, shoes and e-Gift Cards. Free Shipping & Cash on Delivery Available.">
    <meta name="keywords" content="Amazon.in, Amazon, Online Shopping, online shopping india, india shopping online, amazon india, amazn, buy online, buy mobiles online, buy books online, buy movie dvd's online, kindle, kindle fire hd, kindle e-readers, ebooks, computers, laptop, toys, trimmers, watches, fashion jewellery, home, kitchen, small appliances, beauty, Sports, Fitness & Outdoors">
    <meta name="google" content="nositelinkssearchbox">
    <meta name="google-site-verification" content="gPzHrNkcFn5TStDwOLUU1DSt5kH_JZkTtBpdvBjTftg">
    <link rel="canonical" href="https://www.amazon.in/">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta property="fb:app_id" content="164734381262">
    <meta name="twitter:card" value="summary">
    <meta name="twitter:site:id" value="20793816">
    <meta property="og:image" content="http://g-ec2.images-amazon.com/images/G/31/img14/anywhere/amazon-logo-500500._V327001990_.jpg" xmlns:og="http://opengraphprotocol.org/schema/">
    <meta property="og:description" content="Amazon.in: Online Shopping India - Buy mobiles, laptops, cameras, books, watches, apparel, shoes and e-Gift Cards. Free Shipping & Cash on Delivery Available." xmlns:og="http://opengraphprotocol.org/schema/">
    <meta name="msvalidate.01" content="3C8D6512B1E530046DE0569BA27093F3" />
    <script type="text/javascript">
        window.P && P.when('A', 'ready').execute(function(A) {
            var $ = A.$;
            $('.feed-carousel').first().addClass('first-carousel');
            P.register('gw-first-carousel');
            if ($('#desktop-ad-atf').height() === 0) {
                $('.gw-ad-row .a-fixed-right-grid-inner').css('padding-right', '0px');
            }
        });
    </script>
    <!--&&&Portal&Delimiter&&&-->
    <!-- sp:end-feature:host-assets -->
    <script type='text/javascript'>
        window.ue_ihe = (window.ue_ihe || 0) + 1;
        if (window.ue_ihe === 1) {
            (function(k, l, g) {
                function m(a) {
                    c || (c = b[a.type].id, "undefined" === typeof a.clientX ? (e = a.pageX, f = a.pageY) : (e = a.clientX, f = a.clientY), 2 != c || h && (h != e || n != f) ? (r(), d.isl && l.setTimeout(function() {
                        p("at", d.id)
                    }, 0)) : (h = e, n = f, c = 0))
                }

                function r() {
                    for (var a in b) b.hasOwnProperty(a) && d.detach(a, m, b[a].parent)
                }

                function s() {
                    for (var a in b) b.hasOwnProperty(a) && d.attach(a, m, b[a].parent)
                }

                function t() {
                    var a = "";
                    !q && c && (q = 1, a += "&ui=" + c);
                    return a
                }
                var d = k.ue,
                    p = k.uex,
                    q = 0,
                    c = 0,
                    h, n, e, f, b = {
                        click: {
                            id: 1,
                            parent: g
                        },
                        mousemove: {
                            id: 2,
                            parent: g
                        },
                        scroll: {
                            id: 3,
                            parent: l
                        },
                        keydown: {
                            id: 4,
                            parent: g
                        }
                    };
                d && p && (s(), d._ui = t)
            })(ue_csm, window, document);


            (function(s, l) {
                function m(b, e, c) {
                    c = c || new Date(+new Date + t);
                    c = "expires=" + c.toUTCString();
                    n.cookie = b + "=" + e + ";" + c + ";path=/"
                }

                function p(b) {
                    b += "=";
                    for (var e = n.cookie.split(";"), c = 0; c < e.length; c++) {
                        for (var a = e[c];
                            " " == a.charAt(0);) a = a.substring(1);
                        if (0 === a.indexOf(b)) return decodeURIComponent(a.substring(b.length, a.length))
                    }
                    return ""
                }

                function q(b, e, c) {
                    if (!e) return b; - 1 < b.indexOf("{") && (b = "");
                    for (var a = b.split("&"), f, d = !1, h = !1, g = 0; g < a.length; g++) f = a[g].split(":"), f[0] == e ? (!c || d ? a.splice(g, 1) : (f[1] = c, a[g] =
                        f.join(":")), h = d = !0) : 2 > f.length && (a.splice(g, 1), h = !0);
                    h && (b = a.join("&"));
                    !d && c && (0 < b.length && (b += "&"), b += e + ":" + c);
                    return b
                }
                var k = s.ue || {},
                    t = 3024E7,
                    n = ue_csm.document || l.document,
                    r = null,
                    d;
                a: {
                    try {
                        d = l.localStorage;
                        break a
                    } catch (u) {}
                    d = void 0
                }
                k.count && k.count("csm.cookieSize", document.cookie.length);
                k.cookie = {
                    get: p,
                    set: m,
                    updateCsmHit: function(b, e, c) {
                        try {
                            var a;
                            if (!(a = r)) {
                                var f;
                                a: {
                                    try {
                                        if (d && d.getItem) {
                                            f = d.getItem("csm-hit");
                                            break a
                                        }
                                    } catch (k) {}
                                    f = void 0
                                }
                                a = f || p("csm-hit") || "{}"
                            }
                            a = q(a, b, e);
                            r = a = q(a, "t", +new Date);
                            try {
                                d && d.setItem && d.setItem("csm-hit", a)
                            } catch (h) {}
                            m("csm-hit", a, c)
                        } catch (g) {
                            "function" == typeof l.ueLogError && ueLogError(Error("Cookie manager: " + g.message), {
                                logLevel: "WARN"
                            })
                        }
                    }
                }
            })(ue_csm, window);


            (function(l, d) {
                function c(b) {
                    b = "";
                    var c = a.isBFT ? "b" : "s",
                        d = "" + a.oid,
                        f = "" + a.lid,
                        g = d;
                    d != f && 20 == f.length && (c += "a", g += "-" + f);
                    a.tabid && (b = a.tabid + "+");
                    b += c + "-" + g;
                    b != e && 100 > b.length && (e = b, a.cookie ? a.cookie.updateCsmHit(m, b + ("|" + +new Date)) : document.cookie = "csm-hit=" + b + ("|" + +new Date) + n + "; path=/")
                }

                function p() {
                    e = 0
                }

                function h(b) {
                    !0 === d[a.pageViz.propHid] ? e = 0 : !1 === d[a.pageViz.propHid] && c({
                        type: "visible"
                    })
                }
                var n = "; expires=" + (new Date(+new Date + 6048E5)).toGMTString(),
                    m = "tb",
                    e, a = l.ue || {},
                    k = a.pageViz && a.pageViz.event &&
                    a.pageViz.propHid;
                a.attach && (a.attach("click", c), a.attach("keyup", c), k || (a.attach("focus", c), a.attach("blur", p)), k && (a.attach(a.pageViz.event, h, d), h({})));
                a.aftb = 1
            })(ue_csm, document);


            ue_csm.ue.stub(ue, "impression");


            ue.stub(ue, "trigger");



            if (window.ue && uet) {
                uet('bb');
            }

        }
    </script>
    <!-- sp:feature:head-close -->
    <script>
        window.P && P.register('bb');
        if (typeof ues === 'function') {
            ues('t0', 'portal-bb', new Date());
            ues('ctb', 'portal-bb', 1);
        }
    </script>
</head>
<!-- sp:feature:start-body -->

<body class="a-aui_72554-c a-aui_mm_desktop_exp_291916-c a-aui_mm_desktop_launch_291918-c a-aui_mm_desktop_targeted_exp_291928-c a-aui_mm_desktop_targeted_launch_291922-c a-aui_pci_risk_banner_210084-c a-aui_preload_261698-c a-aui_rel_noreferrer_noopener_309527-c a-aui_tnr_v2_180836-c">
    <div id="a-page">
        <script type="a-state" data-a-state="{&quot;key&quot;:&quot;a-wlab-states&quot;}">{"AUI_MM_DESKTOP_LAUNCH_291918":"C","AUI_TNR_V2_180836":"C","AUI_MM_DESKTOP_TARGETED_LAUNCH_291922":"C","AUI_PRELOAD_261698":"C","AUI_MM_DESKTOP_EXP_291916":"C","AUI_72554":"C","AUI_MM_DESKTOP_TARGETED_EXP_291928":"C","AUI_REL_NOREFERRER_NOOPENER_309527":"C","AUI_PCI_RISK_BANNER_210084":"C"}</script>
        <script>
            typeof uex === 'function' && uex('ld', 'portal-bb', {
                wb: 1
            })
        </script>

        <script>
            ! function() {
                function n(n, t) {
                    var r = i(n);
                    return t && (r = r("instance", t)), r
                }
                var r = [],
                    c = 0,
                    i = function(t) {
                        return function() {
                            var n = c++;
                            return r.push([t, [].slice.call(arguments, 0), n, {
                                time: Date.now()
                            }]), i(n)
                        }
                    };
                n._s = r, this.csa = n
            }();;
            csa('Config', {
                "Content.BubbleUp.SearchDepth": 20,
                "UnloadDelay.eventHandler": 2
            });
            if (window.csa) {
                csa("Config", {
                    'Application': 'Retail:Prod:www.amazon.in',
                    'Events.Namespace': 'csa',
                    'ObfuscatedMarketplaceId': 'A21TJRUUN4KGV',
                    'Events.SushiEndpoint': 'https://unagi.amazon.in/1/events/com.amazon.csm.csa.prod',
                    'CacheDetection.RequestID': "WMZVJ0QZ56QFCB33E37K",
                    'CacheDetection.Callback': window.ue && ue.reset,
                    'LCP.elementDedup': 1
                });

                csa("Events")("setEntity", {
                    page: {
                        requestId: "WMZVJ0QZ56QFCB33E37K",
                        meaningful: "interactive"
                    },
                    session: {
                        id: "257-8400121-7204450"
                    }
                });
            }! function(e) {
                var i, r, o = "splice",
                    u = e.csa,
                    f = {},
                    c = {},
                    a = e.csa._s,
                    s = 0,
                    l = {},
                    g = {},
                    h = {},
                    n = Object.keys;

                function t(n, t) {
                    return u(n, t)
                }

                function v(n, t) {
                    var e = c[n] || {};
                    U(e, t), c[n] = e, y(E, 0)
                }

                function d(n, t, e) {
                    var i = !0;
                    t = b(t), e && e.buffered && (i = (h[n] || []).every(function(n) {
                        return !1 !== t(n)
                    })), i && (l[n] || (l[n] = []), l[n].push(t))
                }

                function p(n, t) {
                    if (t = b(t), n in g) t(g[n]);
                    else {
                        d(n, function(n) {
                            return t(n), !1
                        })
                    }
                }

                function m(n, t) {
                    if (u("Errors")("logError", n), f.DEBUG) throw t || n
                }

                function w() {
                    return Math.abs(4294967295 * Math.random() | 0).toString(36)
                }

                function b(n, t) {
                    return function() {
                        try {
                            return n.apply(this, arguments)
                        } catch (n) {
                            m(n.message || n, n)
                        }
                    }
                }

                function y(n, t) {
                    return e.setTimeout(b(n), t)
                }

                function E() {
                    for (var n = 0; n < a.length;) {
                        var t = a[n],
                            e = t[0] in c;
                        if (!e && !r) return void(s = t.length);
                        e ? (a[o](s = n, 1), D(t)) : n++
                    }
                }

                function D(n) {
                    var arguments, t = c[n[0]],
                        e = (arguments = n[1])[0];
                    if (!t || !t[e]) return m("Undefined function: " + t + "/" + e);
                    i = n[3], c[n[2]] = t[e].apply(t, arguments.slice(1)) || {}, i = 0
                }

                function S() {
                    r = 1, E()
                }

                function U(t, e) {
                    n(e).forEach(function(n) {
                        t[n] = e[n]
                    })
                }
                p("$beforeunload", S), v("Config", {
                    instance: function(n) {
                        U(f, n)
                    }
                }), u.plugin = b(function(n) {
                    n(t)
                }), t.config = f, t.register = v, t.on = d, t.removeListener = function(n, t) {
                    var e = l[n];
                    e && e[o](e.indexOf(t), 1)
                }, t.once = p, t.emit = function(n, t, e) {
                    for (var i = l[n] || [], r = 0; r < i.length;) !1 === i[r](t) ? i[o](r, 1) : r++;
                    g[n] = t || {}, e && e.buffered && (h[n] || (h[n] = []), 100 <= h[n].length && h[n].shift(), h[n].push(t || {}))
                }, t.UUID = function() {
                    return [w(), w(), w(), w()].join("-")
                }, t.time = function(n) {
                    var t = i ? new Date(i.time) : new Date;
                    return "ISO" === n ? t.toISOString() : t.getTime()
                }, t.error = m, t.warn = function(n, t) {
                    if (u("Errors")("logWarn", n), f.DEBUG) throw t || n
                }, t.exec = b, t.timeout = y, t.interval = function(n, t) {
                    return e.setInterval(b(n), t)
                }, (t.global = e).csa._s.push = function(n) {
                    n[0] in c && (!a.length || r) ? D(n) : a[o](s++, 0, n)
                }, E(), y(function() {
                    y(S, f.SkipMissingPluginsTimeout || 5e3)
                }, 1)
            }("undefined" != typeof window ? window : global);
            csa.plugin(function(o) {
                var r = "addEventListener",
                    e = "requestAnimationFrame",
                    t = o.exec,
                    i = o.global,
                    f = o.on;
                o.raf = function(n) {
                    if (i[e]) return i[e](t(n))
                }, o.on = function(n, e, t, i) {
                    return n && "function" == typeof n[r] ? n[r](e, o.exec(t), i) : "string" == typeof n ? f(n, e, t, i) : void 0
                }
            });
            csa.plugin(function(o) {
                var t, n, r = {},
                    e = "localStorage",
                    c = "sessionStorage",
                    a = "local",
                    i = "session",
                    u = o.exec;

                function s(e, t) {
                    var n;
                    try {
                        r[t] = !!(n = o.global[e]), n = n || {}
                    } catch (e) {
                        r[t] = !(n = {})
                    }
                    return n
                }

                function f() {
                    t = t || s(e, a), n = n || s(c, i)
                }

                function l(e) {
                    return e && e[i] ? n : t
                }
                o.store = u(function(e, t, n) {
                    f();
                    var o = l(n);
                    return e ? t ? void(o[e] = t) : o[e] : Object.keys(o)
                }), o.storageSupport = u(function() {
                    return f(), r
                }), o.deleteStored = u(function(e, t) {
                    f();
                    var n = l(t);
                    if ("function" == typeof e)
                        for (var o in n) n.hasOwnProperty(o) && e(o, n[o]) && delete n[o];
                    else delete n[e]
                })
            });
            csa.plugin(function(o) {
                function r(n) {
                    return function(r) {
                        o("Metrics", {
                            producerId: "csa",
                            dimensions: {
                                message: r
                            }
                        })("recordMetric", n, 1)
                    }
                }
                o.register("Errors", {
                    logError: r("jsError"),
                    logWarn: r("jsWarn")
                })
            });
            csa.plugin(function(r) {
                var o, e = r.global,
                    i = r("Events"),
                    f = e.location,
                    d = e.document,
                    a = ((e.performance || {}).navigation || {}).type,
                    t = r.on,
                    u = r.emit,
                    g = {};

                function n(a, e) {
                    var t = !!o,
                        n = (e = e || {}).keepPageAttributes;
                    t && (u("$beforePageTransition"), u("$pageTransition")), t && !n && i("removeEntity", "page"), o = r.UUID(), n ? g.id = o : g = {
                        schemaId: "<ns>.PageEntity.1",
                        id: o,
                        url: f.href,
                        server: f.hostname,
                        path: f.pathname,
                        referrer: d.referrer,
                        title: d.title
                    }, Object.keys(a || {}).forEach(function(e) {
                        g[e] = a[e]
                    }), i("setEntity", {
                        page: g
                    }), u("$pageChange", g, {
                        buffered: 1
                    }), t && u("$afterPageTransition")
                }

                function l() {
                    u("$load"), u("$ready"), u("$afterload")
                }

                function s() {
                    u("$ready"), u("$beforeunload"), u("$unload"), u("$afterunload")
                }
                f && d && (t(e, "beforeunload", s), t(e, "pagehide", s), "complete" === d.readyState ? l() : t(e, "load", l), r.register("SPA", {
                    newPage: n
                }), n({
                    transitionType: {
                        0: "hard",
                        1: "refresh",
                        2: "back-button"
                    }[a] || "unknown"
                }))
            });
            csa.plugin(function(c) {
                var t = "Events",
                    e = "UNKNOWN",
                    a = "id",
                    u = "all",
                    n = "messageId",
                    i = "timestamp",
                    f = "producerId",
                    o = "application",
                    r = "obfuscatedMarketplaceId",
                    s = "entities",
                    d = "schemaId",
                    l = "version",
                    p = "attributes",
                    v = "<ns>",
                    g = c.config,
                    h = (c.global.location || {}).host,
                    m = g[t + ".Namespace"] || "csa_other",
                    I = g.Application || "Other" + (h ? ":" + h : ""),
                    b = c("Transport"),
                    y = {},
                    O = function(t, e) {
                        Object.keys(t).forEach(e)
                    };

                function E(n, i, o) {
                    O(i, function(t) {
                        var e = o === u || (o || {})[t];
                        t in n || (n[t] = {
                            version: 1,
                            id: i[t][a] || c.UUID()
                        }), U(n[t], i[t], e)
                    })
                }

                function U(e, n, i) {
                    O(n, function(t) {
                        ! function(t, e, n) {
                            return "string" != typeof e && t !== l ? c.error("Attribute is not of type string: " + t) : !0 === n || 1 === n || (t === a || !!~(n || []).indexOf(t))
                        }(t, n[t], i) || (e[t] = n[t])
                    })
                }

                function N(o, t, r) {
                    O(t, function(t) {
                        var e = o[t];
                        if (e[d]) {
                            var n = {},
                                i = {};
                            n[a] = e[a], n[f] = e[f] || r, n[d] = e[d], n[l] = e[l]++, n[p] = i, S(n), U(i, e, 1), k(i), b("log", n)
                        }
                    })
                }

                function S(t) {
                    t[i] = function(t) {
                        return "number" == typeof t && (t = new Date(t).toISOString()), t || c.time("ISO")
                    }(t[i]), t[n] = t[n] || c.UUID(), t[o] = I, t[r] = g.ObfuscatedMarketplaceId || e, t[d] = t[d].replace(v, m)
                }

                function k(t) {
                    delete t[l], delete t[d], delete t[f]
                }

                function w(o) {
                    var r = {};
                    this.log = function(t, e) {
                        var n = {},
                            i = (e || {}).ent;
                        return t ? "string" != typeof t[d] ? c.error("A valid schema id is required for the event") : (S(t), E(n, y, i), E(n, r, i), E(n, t[s] || {}, i), O(n, function(t) {
                            k(n[t])
                        }), t[f] = o[f], t[s] = n, void b("log", t)) : c.error("The event cannot be undefined")
                    }, this.setEntity = function(t) {
                        E(r, t, u), N(r, t, o[f])
                    }
                }
                g["KillSwitch." + t] || c.register(t, {
                    setEntity: function(t) {
                        E(y, t, u), N(y, t, "csa")
                    },
                    removeEntity: function(t) {
                        delete y[t]
                    },
                    instance: function(t) {
                        return new w(t)
                    }
                })
            });
            csa.plugin(function(s) {
                var c, l = "Transport",
                    g = "post",
                    u = "preflight",
                    r = "csa.cajun.",
                    i = "store",
                    a = "deleteStored",
                    f = "sendBeacon",
                    t = 0,
                    e = s.config[l + ".BufferSize"] || 2e3,
                    h = s.config[l + ".RetryDelay"] || 1500,
                    o = [],
                    p = 0,
                    d = [],
                    v = s.global,
                    n = s.on,
                    y = s.once,
                    m = v.document,
                    E = s.timeout,
                    R = s.config[l + ".FlushInterval"] || 5e3,
                    S = 0;

                function b(n) {
                    if (864e5 < s.time() - +new Date(n.timestamp)) return s.warn("Event is too old: " + n);
                    p < e && (o.push(n), p++, !S && t && (S = E(w, R)))
                }

                function w() {
                    d.forEach(function(t) {
                        var e = [];
                        o.forEach(function(n) {
                            t.accepts(n) && e.push(n)
                        }), e.length && (t.chunks ? t.chunks(e).forEach(function(n) {
                            I(t, n)
                        }) : I(t, e))
                    }), o = [], S = 0
                }

                function I(t, e) {
                    function o() {
                        s[a](r + n)
                    }
                    var n = s.UUID();
                    s[i](r + n, JSON.stringify(e)), [function(n, t, e) {
                        var o = v.navigator || {},
                            r = v.cordova || {};
                        if (!o[f] || !n[g]) return 0;
                        n[u] && r && "ios" === r.platformId && !c && ((new Image).src = n[u]().url, c = 1);
                        var i = n[g](t);
                        if (!i.type && o[f](i.url, i.body)) return e(), 1
                    }, function(n, t, e) {
                        if (!n[g]) return 0;
                        var o = n[g](t),
                            r = o.url,
                            i = o.body,
                            c = o.type,
                            u = new XMLHttpRequest,
                            a = 0;

                        function f(n, t, e) {
                            u.open("POST", n), e && u.setRequestHeader("Content-Type", e), u.send(t)
                        }
                        return u.onload = function() {
                            u.status < 299 ? e() : s.config[l + ".XHRRetries"] && a < 3 && E(function() {
                                f(r, i, c)
                            }, ++a * h)
                        }, f(r, i, c), 1
                    }].some(function(n) {
                        try {
                            return n(t, e, o)
                        } catch (n) {}
                    })
                }
                y("$afterload", function() {
                    t = 1,
                        function(e) {
                            (s[i]() || []).forEach(function(n) {
                                if (!n.indexOf(r)) try {
                                    var t = s[i](n);
                                    s[a](n), JSON.parse(t).forEach(e)
                                } catch (n) {
                                    s.error(n)
                                }
                            })
                        }(b), n(m, "visibilitychange", w, !1), w()
                }), y("$afterunload", function() {
                    t = 1, w()
                }), n("$afterPageTransition", function() {
                    p = 0
                }), s.register(l, {
                    log: b,
                    register: function(n) {
                        d.push(n)
                    }
                })
            });
            csa.plugin(function(n) {
                var r = n.config["Events.SushiEndpoint"];
                n("Transport")("register", {
                    accepts: function(n) {
                        return n.schemaId
                    },
                    post: function(n) {
                        var t = n.map(function(n) {
                            return {
                                data: n
                            }
                        });
                        return {
                            url: r,
                            body: JSON.stringify({
                                events: t
                            })
                        }
                    },
                    preflight: function() {
                        var n, t = /\/\/(.*?)\//.exec(r);
                        return t && t[1] && (n = "https://" + t[1] + "/ping"), {
                            url: n
                        }
                    },
                    chunks: function(n) {
                        for (var t = []; 500 < n.length;) t.push(n.splice(0, 500));
                        return t.push(n), t
                    }
                })
            });
            csa.plugin(function(n) {
                var t, a, o, r, e = n.config,
                    i = "PageViews",
                    d = e[i + ".ImpressionMinimumTime"] || 1e3,
                    c = "hidden",
                    s = "innerHeight",
                    g = "innerWidth",
                    f = "renderedTo",
                    l = f + "Viewed",
                    m = f + "Meaningful",
                    u = f + "Impressed",
                    h = 1,
                    v = 2,
                    p = 3,
                    P = 4,
                    w = 5,
                    y = "loaded",
                    I = 7,
                    T = 8,
                    E = n.global,
                    S = n.on,
                    V = n("Events", {
                        producerId: "csa"
                    }),
                    $ = E.document,
                    b = {},
                    M = {},
                    C = w;
                if (!e["KillSwitch." + i]) {
                    if (!$ || void 0 === $[c]) return K("PageStateChange.2", {
                        state: "ignored"
                    });
                    j(), S($, "visibilitychange", R, !1), S($, "readystatechange", k, !1), S("$afterPageTransition", j), S("$timing:loaded", k), n.once("$load", k)
                }

                function H(e) {
                    if (!b[I]) {
                        var i;
                        if (b[e] = n.time(), e !== p && e !== y || (t = t || b[e]), t && C === P) a = a || b[e], (i = {})[m] = t - o, i[l] = a - o, K("PageView.4", i), r = r || n.timeout(W, d);
                        if (e !== w && e !== h && e !== v || (clearTimeout(r), r = 0), e !== h && e !== v || K("PageRender.3", {
                                transitionType: e === h ? "hard" : "soft"
                            }), e === I)(i = {})[m] = t - o, i[l] = a - o, i[u] = b[e] - o, K("PageImpressed.2", i)
                    }
                }

                function K(e, i) {
                    M[e] || (i.schemaId = "<ns>." + e, V("log", i, {
                        ent: "all"
                    }), M[e] = 1)
                }

                function R() {
                    0 === E[s] && 0 === E[g] ? (C = T, n("Events")("setEntity", {
                        page: {
                            viewport: "hidden-iframe"
                        }
                    })) : C = $[c] ? w : P, H(C)
                }

                function W() {
                    H(I), r = 0
                }

                function j() {
                    var e = o ? v : h;
                    b = {}, M = {}, a = t = 0, o = n.time(), H(e), R()
                }

                function k() {
                    var e = $.readyState;
                    "interactive" === e && H(p), "complete" === e && H(y)
                }
            });
            csa.plugin(function(c) {
                var s = c.config["Interactions.ParentChainLength"] || 15,
                    e = "click",
                    r = "touches",
                    f = "timeStamp",
                    o = "length",
                    u = "pageX",
                    g = "pageY",
                    p = "pageXOffset",
                    h = "pageYOffset",
                    m = 250,
                    v = 5,
                    d = 200,
                    l = .5,
                    t = {
                        capture: !0,
                        passive: !0
                    },
                    X = c.global,
                    Y = c.emit,
                    n = c.on,
                    x = X.Math.abs,
                    a = (X.document || {}).documentElement || {},
                    y = {
                        x: 0,
                        y: 0,
                        t: 0,
                        sX: 0,
                        sY: 0
                    },
                    N = {
                        x: 0,
                        y: 0,
                        t: 0,
                        sX: 0,
                        sY: 0
                    };

                function b(t) {
                    if (t.id) return "//*[@id='" + t.id + "']";
                    var e = function(t) {
                            var e, n = 1;
                            for (e = t.previousSibling; e; e = e.previousSibling) e.nodeName === t.nodeName && (n += 1);
                            return n
                        }(t),
                        n = t.nodeName;
                    return 1 !== e && (n += "[" + e + "]"), t.parentNode && (n = b(t.parentNode) + "/" + n), n
                }

                function I(t, e, n) {
                    var a = c("Content", {
                            target: n
                        }),
                        i = {
                            schemaId: "<ns>.ContentInteraction.1",
                            interaction: t,
                            interactionData: e,
                            messageId: c.UUID()
                        };
                    if (n) {
                        var r = b(n);
                        r && (i.attribution = r);
                        var o = function(t) {
                            for (var e = t, n = e.tagName, a = !1, i = t ? t.href : null, r = 0; r < s; r++) {
                                if (!e || !e.parentElement) {
                                    a = !0;
                                    break
                                }
                                n = (e = e.parentElement).tagName + "/" + n, i = i || e.href
                            }
                            return a || (n = ".../" + n), {
                                pc: n,
                                hr: i
                            }
                        }(n);
                        o.pc && (i.interactionData.parentChain = o.pc), o.hr && (i.interactionData.href = o.hr)
                    }
                    a("log", i), Y("$content.interaction", i)
                }

                function i(t) {
                    I(e, {
                        interactionX: "" + t.pageX,
                        interactionY: "" + t.pageY
                    }, t.target)
                }

                function C(t) {
                    if (t && t[r] && 1 === t[r][o]) {
                        var e = t[r][0];
                        N = y = {
                            e: t.target,
                            x: e[u],
                            y: e[g],
                            t: t[f],
                            sX: X[p],
                            sY: X[h]
                        }
                    }
                }

                function D(t) {
                    if (t && t[r] && 1 === t[r][o] && y && N) {
                        var e = t[r][0],
                            n = t[f],
                            a = n - N.t,
                            i = {
                                e: t.target,
                                x: e[u],
                                y: e[g],
                                t: n,
                                sX: X[p],
                                sY: X[h]
                            };
                        N = i, d <= a && (y = i)
                    }
                }

                function E(t) {
                    if (t) {
                        var e = x(y.x - N.x),
                            n = x(y.y - N.y),
                            a = x(y.sX - N.sX),
                            i = x(y.sY - N.sY),
                            r = t[f] - y.t;
                        if (m < 1e3 * e / r && v < e || m < 1e3 * n / r && v < n) {
                            var o = n < e;
                            o && a && e * l <= a || !o && i && n * l <= i || I((o ? "horizontal" : "vertical") + "-swipe", {
                                interactionX: "" + y.x,
                                interactionY: "" + y.y,
                                endX: "" + N.x,
                                endY: "" + N.y
                            }, y.e)
                        }
                    }
                }
                n(a, e, i, t), n(a, "touchstart", C, t), n(a, "touchmove", D, t), n(a, "touchend", E, t)
            });
            csa.plugin(function(o) {
                var n, e, t, a, c, r = "mouseup",
                    i = "mousemove",
                    u = "mousedown",
                    f = "click",
                    s = "touchstart",
                    l = "touchmove",
                    d = "touchend",
                    m = "csm_ref",
                    g = "csm_ct",
                    h = "csm_next",
                    v = {
                        session: !0
                    },
                    p = 0,
                    w = 1,
                    b = 2,
                    y = 1,
                    k = 2,
                    S = 3,
                    D = 4,
                    U = 5,
                    _ = 6,
                    A = o.global,
                    C = A.document,
                    M = o("Metrics", {
                        producerId: "csa"
                    }),
                    N = o.store,
                    x = o.deleteStored,
                    E = o.on,
                    F = A.performance || {},
                    H = F.timing,
                    I = p,
                    j = o.config["UnloadDelay.eventHandler"];
                N && F.now && H && void 0 !== H.navigationStart && C && (e = N(m, n, v), t = N(h, n, v), a = parseFloat(N(g, n, v)), c = H.navigationStart - a, a && e === C.referrer && M("recordMetric", t === A.location.href ? "highConfidenceUnloadDelay" : "lowConfidenceUnloadDelay", c), z(), function() {
                    switch (j) {
                        case y:
                            E(C, f, P(G));
                            break;
                        case k:
                        case S:
                            E(C, u, P(J)), E(C, i, P(L)), E(C, r, P(K));
                            break;
                        case D:
                        case U:
                            E(C, s, P(J)), E(C, l, P(L)), E(C, d, P(K));
                            break;
                        case _:
                            E(A, "unload", P(O))
                    }
                }());

                function q(n, e) {
                    N(g, n, v), N(m, e, v)
                }

                function z() {
                    x(m, v), x(h, v), x(g, v)
                }

                function B(n) {
                    return 0 === n.button || 1 === n.which || n.type === s || n.type === d
                }

                function G(n, e) {
                    var t, o = (A.location || {}).href;
                    B(n) && ((t = function(n) {
                        for (var e = 5, t = n.target; t && "A" !== t.tagName && 0 < e;) t = t.parentElement, e--;
                        return t
                    }(n)) && "A" === t.tagName && N(h, t.href, v), q(e, o))
                }

                function J(n, e) {
                    B(n) && (I === b || j !== k && j !== D || G(n, e), I = w)
                }

                function K(n, e) {
                    B(n) && (I !== b ? (I = p, j !== S && j !== U || G(n, e)) : I = p)
                }

                function L() {
                    I === w && (I = b, z())
                }

                function O(n, e) {
                    if (n && e) {
                        var t = (A.location || {}).href;
                        n.target && t && q(e, t)
                    }
                }

                function P(t) {
                    return function(n) {
                        var e = H.navigationStart + F.now();
                        o.timeout(function() {
                            t(n, e)
                        }, 0)
                    }
                }
            });
            csa.plugin(function(t) {
                var n, r, i, s = "MutationObserver",
                    e = "PerformanceObserver",
                    u = "observe",
                    o = "disconnect",
                    f = "scroll",
                    a = t.global,
                    c = a.document,
                    l = c.body || c.documentElement,
                    p = Date.now,
                    d = [],
                    b = [],
                    g = [],
                    m = 0,
                    v = 0,
                    y = 0;

                function O(e) {
                    d.push({
                        t: p(),
                        m: e
                    })
                }

                function h(e) {
                    b.push({
                        t: p(),
                        m: e
                    }), y = 1, n && n()
                }

                function w() {
                    y && (g.push({
                        t: p(),
                        y: v
                    }), v = a.pageYOffset, y = 0)
                }

                function E(e) {
                    m = e, (r = new a[s](h))[u](l, {
                        childList: !0,
                        subtree: !0
                    }), (i = new a[s](O))[u](l, {
                        attributes: !0,
                        subtree: !0,
                        attributeFilter: ["src"],
                        attributeOldValue: !0
                    }), t.on(a, f, w, {
                        passive: !0
                    })
                }
                p && a[s] && (t.config["VisualReady.CollectAfterPaint"] ? a[e] && ~(a[e].supportedEntryTypes || []).indexOf("paint") ? new a[e](function(e) {
                    E(((e.getEntries() || [])[0] || {}).startTime || p())
                })[u]({
                    entryTypes: ["paint"],
                    buffered: !0
                }) : t.raf(E) : E(0), t.register("SpeedIndexBuffers", {
                    getBuffers: function(e) {
                        e && (w(), e(m, d, b, g), r && r[o](), i && i[o](), a.removeEventListener(f, w))
                    },
                    registerListener: function(e) {
                        n = e
                    }
                }))
            });
        </script>

        <!-- sp:feature:nav-inline-js -->
        <!-- NAVYAAN JS -->
        <script type="text/javascript">
            ! function(n) {
                function e(n, e) {
                    return {
                        m: n,
                        a: function(n) {
                            return [].slice.call(n)
                        }(e)
                    }
                }
                document.createElement("header");
                var r = function(n) {
                    function u(n, r, u) {
                        n[u] = function() {
                            a._replay.push(r.concat(e(u, arguments)))
                        }
                    }
                    var a = {};
                    return a._sourceName = n, a._replay = [], a.getNow = function(n, e) {
                        return e
                    }, a.when = function() {
                        var n = [e("when", arguments)],
                            r = {};
                        return u(r, n, "run"), u(r, n, "declare"), u(r, n, "publish"), u(r, n, "build"), r
                    }, u(a, [], "declare"), u(a, [], "build"), u(a, [], "publish"), u(a, [], "importEvent"), r._shims.push(a), a
                };
                r._shims = [], n.$Nav || (n.$Nav = r("rcx-nav")), n.$Nav.make || (n.$Nav.make = r)
            }(window)
        </script>
        <script type="text/javascript">
            $Nav.importEvent('navbarJS-beaconbelt');
            $Nav.declare('img.sprite', {
                'png32': 'https://images-eu.ssl-images-amazon.com/images/G/31/gno/sprites/nav-sprite-global-1x-hm-dsk-reorg._CB405936311_.png',
                'png32-2x': 'https://images-eu.ssl-images-amazon.com/images/G/31/gno/sprites/nav-sprite-global-2x-hm-dsk-reorg._CB405936311_.png'
            });
            $Nav.declare('img.timeline', {
                'timeline-icon-2x': 'https://images-eu.ssl-images-amazon.com/images/G/31/gno/sprites/timeline_sprite_2x._CB443580981_.png'
            });
            window._navbarSpriteUrl = 'https://images-eu.ssl-images-amazon.com/images/G/31/gno/sprites/nav-sprite-global-1x-hm-dsk-reorg._CB405936311_.png';
            $Nav.declare('img.pixel', 'https://images-eu.ssl-images-amazon.com/images/G/31/x-locale/common/transparent-pixel._CB485934990_.gif');
        </script>
        <img src="https://images-eu.ssl-images-amazon.com/images/G/31/gno/sprites/nav-sprite-global-1x-hm-dsk-reorg._CB405936311_.png" style="display:none" alt="" />
        <script type="text/javascript">
            var nav_t_after_preload_sprite = +new Date();
        </script>
        <script>
            (window.AmazonUIPageJS ? AmazonUIPageJS : P).when('navCF').execute(function() {
                (window.AmazonUIPageJS ? AmazonUIPageJS : P).load.js('https://images-eu.ssl-images-amazon.com/images/I/41eF0jJqsmL._RC|71oUy0QR4mL.js,61bGBFWLvlL.js,41W9ohA0e+L.js,11nffi0GnAL.js,21cmvUGs-3L.js,11k47yUMOjL.js,41SZNgvX4oL.js,51pktuVkksL.js,31qkpNdCLUL.js,01KW1GJCT1L.js,317Qj7+l3FL.js_.js?AUIClients/NavDesktopUberAsset&gkNDzGfj#desktop.320369-T1.310484-T1.339679-T1');
            });
        </script>
        <!-- sp:feature:nav-skeleton -->
        <!-- sp:feature:navbar -->

        <!--Pilu -->


        <!-- NAVYAAN -->











        <!-- navmet initial definition -->



        <script type='text/javascript'>
            if (window.navmet === undefined) {
                window.navmet = [];
                if (window.performance && window.performance.timing && window.ue_t0) {
                    var t = window.performance.timing;
                    var now = +new Date();
                    window.navmet.basic = {
                        'networkLatency': (t.responseStart - t.fetchStart),
                        'navFirstPaint': (now - t.responseStart),
                        'NavStart': (now - window.ue_t0)
                    };
                    window.navmet.push({
                        key: "NavFirstPaintStart",
                        end: +new Date(),
                        begin: window.ue_t0
                    });
                }
            }
            if (window.ue_t0) {
                window.navmet.push({
                    key: "NavMainStart",
                    end: +new Date(),
                    begin: window.ue_t0
                });
            }
        </script>




        <script type='text/javascript'>
            window.navmet.tmp = +new Date();
        </script>
        <script type='text/javascript'>
            // Nav start should be logged at this place only if request is NOT progressively loaded.
            // For progressive loading case this metric is logged as part of skeleton.
            // Presence of skeleton signals that request is progressively loaded.
            if (!document.getElementById("navbar-skeleton")) {
                window.uet && uet('ns');
            }
            window._navbar = (function(o) {
                o.componentLoaded = o.loading = function() {};
                o.browsepromos = {};
                o.issPromos = [];
                return o;
            }(window._navbar || {}));
            window._navbar.declareOnLoad = function() {
                window.$Nav && $Nav.declare('page.load');
            };
            if (window.addEventListener) {
                window.addEventListener("load", window._navbar.declareOnLoad, false);
            } else if (window.attachEvent) {
                window.attachEvent("onload", window._navbar.declareOnLoad);
            } else if (window.$Nav) {
                $Nav.when('page.domReady').run("OnloadFallbackSetup", function() {
                    window._navbar.declareOnLoad();
                });
            }
            window.$Nav && $Nav.declare('logEvent.enabled',
                'false');

            window.$Nav && $Nav.declare('config.lightningDeals', {});
        </script>

        <style mark="aboveNavInjectionCSS" type="text/css">
            .nav-bluebeacon .nav-cobrand {
                background-image: url(https://images-eu.ssl-images-amazon.com/images/G/31/gno/images/irctc/IRCTC_Logo-dark-small.png);
            }
        </style>
        <script mark="aboveNavInjectionJS" type="text/javascript">
            try {
                window.$Nav && $Nav.when('$').run('defineIsArray', function(jQuery) {
                    if (jQuery.isArray === undefined) {
                        jQuery.isArray = function(param) {
                            if (param.length === undefined) {
                                return false;
                            }
                            return true;
                        };
                    }
                });
                window.$Nav && $Nav.when('$', '$F', 'config', 'logEvent', 'panels', 'phoneHome', 'dataPanel', 'flyouts.renderPromo', 'flyouts.sloppyTrigger', 'flyouts.accessibility', 'util.mouseOut', 'util.onKey', 'debug.param').build('flyouts.buildSubPanels', function($, $F, config, logEvent, panels, phoneHome, dataPanel, renderPromo, createSloppyTrigger, a11yHandler, mouseOutUtility, onKey, debugParam) {
                    var flyoutDebug = debugParam('navFlyoutClick');
                    return function(flyout, event) {
                        var linkKeys = [];
                        $('.nav-item', flyout.elem()).each(function() {
                            var $item = $(this);
                            linkKeys.push({
                                link: $item,
                                panelKey: $item.attr('data-nav-panelkey')
                            });
                        });
                        if (linkKeys.length === 0) {
                            return;
                        }
                        var visible = false;
                        var $parent = $('<div class=\'nav-subcats\'></div>').appendTo(flyout.elem());
                        var panelGroup = flyout.getName() + 'SubCats';
                        var hideTimeout = null;
                        var sloppyTrigger = createSloppyTrigger($parent);
                        var showParent = function() {
                            if (hideTimeout) {
                                clearTimeout(hideTimeout);
                                hideTimeout = null;
                            }
                            if (visible) {
                                return;
                            }
                            var height = $('#nav-flyout-shopAll').height();
                            $parent.css({
                                'height': height
                            });
                            $parent.animate({
                                width: 'show'
                            }, {
                                duration: 200,
                                complete: function() {
                                    $parent.css({
                                        overflow: 'visible'
                                    });
                                }
                            });
                            visible = true;
                        };
                        var hideParentNow = function() {
                            $parent.stop().css({
                                overflow: 'hidden',
                                display: 'none',
                                width: 'auto',
                                height: 'auto'
                            });
                            panels.hideAll({
                                group: panelGroup
                            });
                            visible = false;
                            if (hideTimeout) {
                                clearTimeout(hideTimeout);
                                hideTimeout = null;
                            }
                        };
                        var hideParent = function() {
                            if (!visible) {
                                return;
                            }
                            if (hideTimeout) {
                                clearTimeout(hideTimeout);
                                hideTimeout = null;
                            }
                            hideTimeout = setTimeout(hideParentNow, 10);
                        };
                        flyout.onHide(function() {
                            sloppyTrigger.disable();
                            hideParentNow();
                            this.elem().hide();
                        });
                        var addPanel = function($link, panelKey) {
                            var panel = dataPanel({
                                className: 'nav-subcat',
                                dataKey: panelKey,
                                groups: [panelGroup],
                                spinner: false,
                                visible: false
                            });
                            if (!flyoutDebug) {
                                var mouseout = mouseOutUtility();
                                mouseout.add(flyout.elem());
                                mouseout.action(function() {
                                    panel.hide();
                                });
                                mouseout.enable();
                            }
                            var a11y = a11yHandler({
                                link: $link,
                                onEscape: function() {
                                    panel.hide();
                                    $link.focus();
                                }
                            });
                            var logPanelInteraction = function(promoID, wlTriggers) {
                                var logNow = $F.once().on(function() {
                                    var panelEvent = $.extend({}, event, {
                                        id: promoID
                                    });
                                    if (config.browsePromos && !!config.browsePromos[promoID]) {
                                        panelEvent.bp = 1;
                                    }
                                    logEvent(panelEvent);
                                    phoneHome.trigger(wlTriggers);
                                });
                                if (panel.isVisible() && panel.hasInteracted()) {
                                    logNow();
                                } else {
                                    panel.onInteract(logNow);
                                }
                            };
                            panel.onData(function(data) {
                                renderPromo(data.promoID, panel.elem());
                                logPanelInteraction(data.promoID, data.wlTriggers);
                            });
                            panel.onShow(function() {
                                var columnCount = $('.nav-column', panel.elem()).length;
                                panel.elem().addClass('nav-colcount-' + columnCount);
                                showParent();
                                var $subCatLinks = $('.nav-subcat-links > a', panel.elem());
                                var length = $subCatLinks.length;
                                if (length > 0) {
                                    var firstElementLeftPos = $subCatLinks.eq(0).offset().left;
                                    for (var i = 1; i < length; i++) {
                                        if (firstElementLeftPos === $subCatLinks.eq(i).offset().left) {
                                            $subCatLinks.eq(i).addClass('nav_linestart');
                                        }
                                    }
                                    if ($('span.nav-title.nav-item', panel.elem()).length === 0) {
                                        var catTitle = $.trim($link.html());
                                        catTitle = catTitle.replace(/ref=sa_menu_top/g, 'ref=sa_menu');
                                        var $subPanelTitle = $('<span class=\'nav-title nav-item\'>' + catTitle + '</span>');
                                        panel.elem().prepend($subPanelTitle);
                                    }
                                }
                                $link.addClass('nav-active');
                            });
                            panel.onHide(function() {
                                $link.removeClass('nav-active');
                                hideParent();
                                a11y.disable();
                                sloppyTrigger.disable();
                            });
                            panel.onShow(function() {
                                a11y.elems($('a, area', panel.elem()));
                            });
                            sloppyTrigger.register($link, panel);
                            if (flyoutDebug) {
                                $link.click(function() {
                                    if (panel.isVisible()) {
                                        panel.hide();
                                    } else {
                                        panel.show();
                                    }
                                });
                            }
                            var panelKeyHandler = onKey($link, function() {
                                if (this.isEnter() || this.isSpace()) {
                                    panel.show();
                                }
                            }, 'keydown', false);
                            $link.focus(function() {
                                panelKeyHandler.bind();
                            }).blur(function() {
                                panelKeyHandler.unbind();
                            });
                            panel.elem().appendTo($parent);
                        };
                        var hideParentAndResetTrigger = function() {
                            hideParent();
                            sloppyTrigger.disable();
                        };
                        for (var i = 0; i < linkKeys.length; i++) {
                            var item = linkKeys[i];
                            if (item.panelKey) {
                                addPanel(item.link, item.panelKey);
                            } else {
                                item.link.mouseover(hideParentAndResetTrigger);
                            }
                        }
                    };
                });
            } catch (err) {
                if (window.$Nav) {
                    window.$Nav.when('metrics', 'logUeError').run(function(metrics, log) {
                        metrics.increment('NavJS:AboveNavInjection:error');
                        log(err.toString(), {
                            'attribution': 'rcx-nav',
                            'logLevel': 'FATAL'
                        });
                    });
                }
            }
        </script>

        <noscript>
    <style type="text/css"><!--
      #navbar #nav-shop .nav-a:hover {
        color: #ff9900;
        text-decoration: underline;
      }
      #navbar #nav-search .nav-search-facade,
      #navbar #nav-tools .nav-icon,
      #navbar #nav-shop .nav-icon,
      #navbar #nav-subnav .nav-hasArrow .nav-arrow {
        display: none;
      }
      #navbar #nav-search .nav-search-submit,
      #navbar #nav-search .nav-search-scope {
        display: block;
      }
      #nav-search .nav-search-scope {
        padding: 0 5px;
      }
      #navbar #nav-search .nav-search-dropdown {
        position: relative;
        top: 5px;
        height: 23px;
        font-size: 14px;
        opacity: 1;
        filter: alpha(opacity = 100);
      }
    --></style>
 </noscript>
        <script type='text/javascript'>
            window.navmet.push({
                key: 'PreNav',
                end: +new Date(),
                begin: window.navmet.tmp
            });
        </script>

        <a id='nav-top'></a>




        <a id="skiplink" tabindex="0" class="skip-link">Skip to main content</a>

        <script type='text/javascript'>
            window.navmet.tmp = +new Date();
        </script>
        <!-- Navyaan Upnav -->
        <div id="nav-upnav" aria-hidden="true">
            <!-- unw1 failed -->

        </div>
        <script type='text/javascript'>
            window.navmet.push({
                key: 'UpNav',
                end: +new Date(),
                begin: window.navmet.tmp
            });
        </script>


        <script type='text/javascript'>
            window.navmet.main = +new Date();
        </script>

        <header id="navbar-main" class="nav-opt-sprite nav-flex nav-locale-in nav-lang-en nav-ssl nav-unrec nav-progressive-attribute">



            <div id='navbar' cel_widget_id='Navigation-desktop-navbar' data-template="layoutSwapToolBar" role='navigation' class="nav-sprite-v1 celwidget nav-bluebeacon nav-a11y-t1 bold-focus-hover layout2 nav-flex layout3 layout3-alt nav-packard-glow hamburger nav-progressive-attribute">

                <div id='nav-belt'>
                    <div class='nav-left'>
                        <script type='text/javascript'>
                            window.navmet.tmp = +new Date();
                        </script>
                        <div id="nav-logo">
                            <a href="/ref=nav_logo" id="nav-logo-sprites" class="nav-logo-link nav-progressive-attribute" aria-label="Amazon">
      <span class="nav-sprite nav-logo-base"></span>
      <span id="logo-ext" class="nav-sprite nav-logo-ext nav-progressive-content"></span>
      <span class="nav-logo-locale">.in</span>
    </a>
                        </div>
                        <script type='text/javascript'>
                            window.navmet.push({
                                key: 'Logo',
                                end: +new Date(),
                                begin: window.navmet.tmp
                            });
                        </script>

                        <div id="nav-global-location-slot">
                            <span id="nav-global-location-data-modal-action" class="a-declarative nav-progressive-attribute" data-a-modal='{&quot;width&quot;:375, &quot;closeButton&quot;:&quot;false&quot;,&quot;popoverLabel&quot;:&quot;Choose your location&quot;, &quot;ajaxHeaders&quot;:{&quot;anti-csrftoken-a2z&quot;:&quot;gDl2kl1Z0g8QaInV1i+AqcsC40gthpOmmIhgSs4AAAAMAAAAAGBpaJRyYXcAAAAA&quot;}, &quot;name&quot;:&quot;glow-modal&quot;, &quot;url&quot;:&quot;/gp/glow/get-address-selections.html?deviceType&#x3D;desktop&amp;pageType&#x3D;Gateway&amp;storeContext&#x3D;NoStoreName&amp;actionSource&#x3D;desktop-modal&quot;, &quot;footer&quot;:null,&quot;header&quot;:&quot;Choose your location&quot;}'
                                data-action="a-modal">
        <a id="nav-global-location-popover-link" class="nav-a nav-a-2 a-popover-trigger a-declarative nav-progressive-attribute" tabindex="0">
            <div class="nav-sprite nav-progressive-attribute" id="nav-packard-glow-loc-icon"></div>
            <div id="glow-ingress-block">
                <span class="nav-line-1 nav-progressive-content" id="glow-ingress-line1">
                   Hello
                </span>
                            <span class="nav-line-2 nav-progressive-content" id="glow-ingress-line2">
                   Select your address
                </span>
                        </div>
                        </a>
                        </span>
                        <input data-addnewaddress="add-new" id="unifiedLocation1ClickAddress" name="dropdown-selection" type="hidden" value="add-new" class="nav-progressive-attribute" />
                        <input data-addnewaddress="add-new" id="ubbShipTo" name="dropdown-selection-ubb" type="hidden" value="add-new" class="nav-progressive-attribute" />
                        <input id="glowValidationToken" name="glow-validation-token" type="hidden" value="gDl2kl1Z0g8QaInV1i+AqcsC40gthpOmmIhgSs4AAAAMAAAAAGBpaJRyYXcAAAAA" class="nav-progressive-attribute" />
                    </div>

                    <div id="nav-global-location-toaster-script-container" class="nav-progressive-content">
                    </div>

                </div>
                <div class='nav-fill'>
                    <script type='text/javascript'>
                        window.navmet.tmp = +new Date();
                    </script>
                    <div id="nav-search">
                        <div id="nav-bar-left"></div>
                        <form id="nav-search-bar-form" accept-charset="utf-8" action="/s/ref=nb_sb_noss" class="nav-searchbar nav-progressive-attribute" method="GET" name="site-search" role="search">

                            <div class="nav-left">
                                <div id="nav-search-dropdown-card">

                                    <div class="nav-search-scope nav-sprite">
                                        <div class="nav-search-facade" data-value="search-alias=aps">
                                            <span id="nav-search-label-id" class="nav-search-label nav-progressive-content">All</span>
                                            <i class="nav-icon"></i>
                                        </div>
                                        <span id="searchDropdownDescription" class="nav-progressive-attribute" style="display:none">Select the department you want to search in</span>
                                        <select aria-describedby="searchDropdownDescription" class="nav-search-dropdown searchSelect nav-progressive-attrubute nav-progressive-search-dropdown" data-nav-digest="9UjocwZNWcb7vM2WXnbpfIqZyIU=" data-nav-selected="0" id="searchDropdownBox" name="url"
                                            style="display: block;" tabindex="0" title="Search in">
        <option selected="selected" value="search-alias=aps">All Categories</option>
        <option value="search-alias=todays-deals">Deals</option>
        <option value="search-alias=alexa-skills">Alexa Skills</option>
        <option value="search-alias=amazon-devices">Amazon Devices</option>
        <option value="search-alias=fashion">Amazon Fashion</option>
        <option value="search-alias=pantry">Amazon Pantry</option>
        <option value="search-alias=appliances">Appliances</option>
        <option value="search-alias=mobile-apps">Apps & Games</option>
        <option value="search-alias=baby">Baby</option>
        <option value="search-alias=beauty">Beauty</option>
        <option value="search-alias=stripbooks">Books</option>
        <option value="search-alias=automotive">Car & Motorbike</option>
        <option value="search-alias=apparel">Clothing & Accessories</option>
        <option value="search-alias=collectibles">Collectibles</option>
        <option value="search-alias=computers">Computers & Accessories</option>
        <option value="search-alias=electronics">Electronics</option>
        <option value="search-alias=furniture">Furniture</option>
        <option value="search-alias=lawngarden">Garden & Outdoors</option>
        <option value="search-alias=gift-cards">Gift Cards</option>
        <option value="search-alias=grocery">Grocery & Gourmet Foods</option>
        <option value="search-alias=hpc">Health & Personal Care</option>
        <option value="search-alias=kitchen">Home & Kitchen</option>
        <option value="search-alias=industrial">Industrial & Scientific</option>
        <option value="search-alias=jewelry">Jewellery</option>
        <option value="search-alias=digital-text">Kindle Store</option>
        <option value="search-alias=luggage">Luggage & Bags</option>
        <option value="search-alias=luxury-beauty">Luxury Beauty</option>
        <option value="search-alias=dvd">Movies & TV Shows</option>
        <option value="search-alias=popular">Music</option>
        <option value="search-alias=mi">Musical Instruments</option>
        <option value="search-alias=office-products">Office Products</option>
        <option value="search-alias=pets">Pet Supplies</option>
        <option value="search-alias=instant-video">Prime Video</option>
        <option value="search-alias=shoes">Shoes & Handbags</option>
        <option value="search-alias=software">Software</option>
        <option value="search-alias=sporting">Sports, Fitness & Outdoors</option>
        <option value="search-alias=specialty-aps-sns">Subscribe & Save</option>
        <option value="search-alias=home-improvement">Tools & Home Improvement</option>
        <option value="search-alias=toys">Toys & Games</option>
        <option value="search-alias=under-ten-dollars">Under ???500</option>
        <option value="search-alias=videogames">Video Games</option>
        <option value="search-alias=watches">Watches</option>
    </select>
                                    </div>

                                </div>
                            </div>
                            <div class="nav-fill">
                                <div class="nav-search-field ">
                                    <input type="text" id="twotabsearchtextbox" value="" name="field-keywords" autocomplete="off" placeholder="" class="nav-input nav-progressive-attribute" dir="auto" tabindex="0" aria-label="Search">
                                </div>
                                <div id="nav-iss-attach"></div>
                            </div>
                            <div class="nav-right">
                                <div class="nav-search-submit nav-sprite">
                                    <span id="nav-search-submit-text" class="nav-search-submit-text nav-sprite nav-progressive-attribute" aria-label="Go">
          <input id="nav-search-submit-button" type="submit" class="nav-input nav-progressive-attribute" value="Go" tabindex="0">
        </span>
                                </div>
                            </div>
                        </form>
                    </div>
                    <script type='text/javascript'>
                        window.navmet.push({
                            key: 'Search',
                            end: +new Date(),
                            begin: window.navmet.tmp
                        });
                    </script>
                </div>
                <div class='nav-right'>
                    <script type='text/javascript'>
                        window.navmet.tmp = +new Date();
                    </script>
                    <div id='nav-tools' class="layoutToolbarPadding">




                        <a href="/gp/customer-preferences/select-language/ref=topnav_lang?preferencesReturnUrl=%2F" id="icp-nav-flyout" class="nav-a nav-a-2 icp-link-style-2" aria-label="Choose a language for shopping.">
    <span class="icp-nav-link-inner">
      <span class="nav-line-1">
      </span>
      <span class="nav-line-2">
        <span class="icp-nav-flag icp-nav-flag-in"></span>
        <span class="nav-icon nav-arrow"></span>
      </span>
    </span>
  </a>


                        <a href="https://www.amazon.in/ap/signin?openid.pape.max_auth_age=0&openid.return_to=https%3A%2F%2Fwww.amazon.in%2F%3F_encoding%3DUTF8%26_encoding%3DUTF8%26camp%3D3638%26creative%3D24630%26linkCode%3Dur2%26linkId%3D1f94e7c2bbe0c476c1d418adb3a69d74%26tag%3Dvped1a-21%26ref_%3Dnav_ya_signin&openid.identity=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&openid.assoc_handle=inflex&openid.mode=checkid_setup&openid.claimed_id=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&openid.ns=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0&"
                            class="nav-a nav-a-2   nav-progressive-attribute" data-nav-ref="nav_ya_signin" data-nav-role="signin" data-ux-jq-mouseenter="true" id="nav-link-accountList" tabindex="0" data-csa-c-type="link" data-csa-c-slot-id="nav-link-accountList"
                            data-csa-c-content-id="nav_ya_signin">
                            <div class="nav-line-1-container"><span id="nav-link-accountList-nav-line-1" class="nav-line-1 nav-progressive-content">Hello, Sign in</span></div>
                            <span class="nav-line-2 nav-long-width">Account & Lists<span class="nav-icon nav-arrow"></span>
                            </span>
                            <span class="nav-line-2 nav-short-width">
    Account
    <span class="nav-icon nav-arrow"></span>
                            </span>
                        </a>


                        <a href="/gp/css/order-history?ref_=nav_orders_first" class="nav-a nav-a-2   nav-progressive-attribute" id="nav-orders" tabindex="0">
  <span class="nav-line-1">Returns</span>
  <span class="nav-line-2">& Orders</span>
</a>



                        <a href="https://www.amazon.in/gp/cart/view.html?ref_=nav_cart" aria-label="0 items in cart" class="nav-a nav-a-2 nav-progressive-attribute" id="nav-cart">
                            <div id="nav-cart-count-container">
                                <span id="nav-cart-count" aria-hidden="true" class="nav-cart-count nav-cart-0 nav-progressive-attribute nav-progressive-content">0</span>
                                <span class="nav-cart-icon nav-sprite"></span>
                            </div>
                            <div id="nav-cart-text-container" class=" nav-progressive-attribute">
                                <span aria-hidden="true" class="nav-line-1">
         
      </span>
                                <span aria-hidden="true" class="nav-line-2">
        Cart
        <span class="nav-icon nav-arrow"></span>
                                </span>
                            </div>
                        </a>

                    </div>
                    <script type='text/javascript'>
                        window.navmet.push({
                            key: 'Tools',
                            end: +new Date(),
                            begin: window.navmet.tmp
                        });
                    </script>

                </div>
            </div>
            <div id='nav-main' class='nav-sprite'>
                <div class='nav-left'>
                    <script type='text/javascript'>
                        window.navmet.tmp = +new Date();
                    </script>
                    <a href="/gp/site-directory?ref_=nav_em_js_disabled" id="nav-hamburger-menu" role="button" aria-label="Open Menu" data-csa-c-type="widget" data-csa-c-slot-id="HamburgerMenuDesktop" data-csa-c-interaction-events="click">
    <i class="hm-icon nav-sprite"></i>
    <span class="hm-icon-label">All</span>
  </a>

                    <script type="text/javascript">
                        var hmenu = document.getElementById("nav-hamburger-menu");
                        hmenu.setAttribute("href", "javascript: void(0)");
                        window.navHamburgerMetricLogger = function() {
                            if (window.ue && window.ue.count) {
                                var metricName = "Nav:Hmenu:IconClickActionPending";
                                window.ue.count(metricName, (ue.count(metricName) || 0) + 1);
                            }
                            window.$Nav && $Nav.declare("navHMenuIconClicked", !0);
                            window.$Nav && $Nav.declare("navHMenuIconClickedNotReadyTimeStamp", Date.now());
                        };
                        hmenu.addEventListener("click", window.navHamburgerMetricLogger);
                        window.$Nav && $Nav.declare('hamburgerMenuIconAvailableOnLoad', false);
                    </script>
                    <script type='text/javascript'>
                        window.navmet.push({
                            key: 'HamburgerMenuIcon',
                            end: +new Date(),
                            begin: window.navmet.tmp
                        });
                    </script>




                </div>
                <div class='nav-fill'>


                    <div id="nav-shop">
                    </div>
                    <div id='nav-xshop-container'>
                        <div id='nav-xshop' class="nav-progressive-content">
                            <script type='text/javascript'>
                                window.navmet.tmp = +new Date();
                            </script>
                            <a href="/gp/bestsellers/?ref_=nav_cs_bestsellers_17d44cb01bd144359b81b1c10b84dd98" class="nav-a  " tabindex="0" data-csa-c-type="link" data-csa-c-slot-id="nav_cs_0" data-csa-c-content-id="nav_cs_bestsellers_17d44cb01bd144359b81b1c10b84dd98">Best Sellers</a>

                            <a href="/mobile-phones/b/?ie=UTF8&node=1389401031&ref_=nav_cs_mobiles_9292c6cb7b394d30b2467b8f631090a7" class="nav-a  " tabindex="0" data-csa-c-type="link" data-csa-c-slot-id="nav_cs_1" data-csa-c-content-id="nav_cs_mobiles_9292c6cb7b394d30b2467b8f631090a7">Mobiles</a>

                            <a href="/gp/goldbox?ref_=nav_cs_gb_5bf06ae8328043a2beb2754f40a54c84" class="nav-a  " tabindex="0" data-csa-c-type="link" data-csa-c-slot-id="nav_cs_2" data-csa-c-content-id="nav_cs_gb_5bf06ae8328043a2beb2754f40a54c84">Today's Deals</a>

                            <a href="/gp/browse.html?node=6648217031&ref_=nav_cs_fashion_ad6f81eb5d474066bc9e5788a3c19a28" class="nav-a  " tabindex="0" data-csa-c-type="link" data-csa-c-slot-id="nav_cs_3" data-csa-c-content-id="nav_cs_fashion_ad6f81eb5d474066bc9e5788a3c19a28">Fashion</a>

                            <a href="/gp/new-releases/?ref_=nav_cs_newreleases_b9144c00866c4016b948d9b5b5215b45" class="nav-a  " tabindex="0" data-csa-c-type="link" data-csa-c-slot-id="nav_cs_4" data-csa-c-content-id="nav_cs_newreleases_b9144c00866c4016b948d9b5b5215b45">New Releases</a>

                            <a href="/prime?ref_=nav_cs_primelink_nonmember_2860122b63884a8688052dc445e46bd9" class="nav-a  " data-ux-jq-mouseenter="true" id="nav-link-prime" tabindex="0" data-csa-c-type="link" data-csa-c-slot-id="nav-link-prime" data-csa-c-content-id="nav_cs_primelink_nonmember_2860122b63884a8688052dc445e46bd9"><span>Prime</span><span class="nav-icon nav-arrow"></span></a>

                            <a href="/electronics/b/?ie=UTF8&node=976419031&ref_=nav_cs_electronics_c5b70a82461a484189e700166599ce9f" class="nav-a  " tabindex="0" data-csa-c-type="link" data-csa-c-slot-id="nav_cs_6" data-csa-c-content-id="nav_cs_electronics_c5b70a82461a484189e700166599ce9f"> Electronics </a>

                            <a href="/gp/help/customer/display.html?nodeId=200507590&ref_=nav_cs_help_79404a52982a4d9d973cf256c713999e" class="nav-a  " tabindex="0" data-csa-c-type="link" data-csa-c-slot-id="nav_cs_7" data-csa-c-content-id="nav_cs_help_79404a52982a4d9d973cf256c713999e">Customer Service</a>

                            <a href="/gp/sva/dashboard?ref_=nav_cs_apay_fe0c735739554ca1a7cccf7c41941f2f" class="nav-a  " tabindex="0" data-csa-c-type="link" data-csa-c-slot-id="nav_cs_8" data-csa-c-content-id="nav_cs_apay_fe0c735739554ca1a7cccf7c41941f2f">Amazon Pay</a>

                            <a href="/Home-Kitchen/b/?ie=UTF8&node=976442031&ref_=nav_cs_home_5f0a1657ec2a4557a8233992829feaf3" class="nav-a  " tabindex="0" data-csa-c-type="link" data-csa-c-slot-id="nav_cs_9" data-csa-c-content-id="nav_cs_home_5f0a1657ec2a4557a8233992829feaf3">Home & Kitchen</a>

                            <a href="/computers-and-accessories/b/?ie=UTF8&node=976392031&ref_=nav_cs_pc_d99b175b1db64d5b968b67ba6e5a72a3" class="nav-a  " tabindex="0" data-csa-c-type="link" data-csa-c-slot-id="nav_cs_10" data-csa-c-content-id="nav_cs_pc_d99b175b1db64d5b968b67ba6e5a72a3">Computers</a>

                            <a href="/Books/b/?ie=UTF8&node=976389031&ref_=nav_cs_books_bc600d0d124d40a3909f96904182b45f" class="nav-a  " tabindex="0" data-csa-c-type="link" data-csa-c-slot-id="nav_cs_11" data-csa-c-content-id="nav_cs_books_bc600d0d124d40a3909f96904182b45f">Books</a>

                            <a href="/Toys-Games/b/?ie=UTF8&node=1350380031&ref_=nav_cs_toys_614bf387c5974fcdb69fb40fa2f95252" class="nav-a  " tabindex="0" data-csa-c-type="link" data-csa-c-slot-id="nav_cs_12" data-csa-c-content-id="nav_cs_toys_614bf387c5974fcdb69fb40fa2f95252">Toys & Games</a>

                            <a href="/b/?node=2838698031&ld=AZINSOANavDesktop&ref_=nav_cs_sell_22c5725860ed46a593b5f97a935ef723" class="nav-a  " tabindex="0" data-csa-c-type="link" data-csa-c-slot-id="nav_cs_13" data-csa-c-content-id="nav_cs_sell_22c5725860ed46a593b5f97a935ef723">Sell</a>

                            <a href="/beauty/b/?ie=UTF8&node=1355016031&ref_=nav_cs_beauty_6ef19712270447e593a9ddf9a03604d8" class="nav-a  " tabindex="0" data-csa-c-type="link" data-csa-c-slot-id="nav_cs_14" data-csa-c-content-id="nav_cs_beauty_6ef19712270447e593a9ddf9a03604d8">Beauty & Personal Care</a>

                            <a href="/Car-Motorbike-Store/b/?ie=UTF8&node=4772060031&ref_=nav_cs_automotive_75137ca568f6495387a781885869ac30" class="nav-a  " tabindex="0" data-csa-c-type="link" data-csa-c-slot-id="nav_cs_15" data-csa-c-content-id="nav_cs_automotive_75137ca568f6495387a781885869ac30">Car & Motorbike</a>

                            <a href="/gift-card-store/b/?ie=UTF8&node=3704982031&ref_=nav_cs_gc_35a9db0a7db34350a3d3cb851062984e" class="nav-a  " tabindex="0" data-csa-c-type="link" data-csa-c-slot-id="nav_cs_16" data-csa-c-content-id="nav_cs_gc_35a9db0a7db34350a3d3cb851062984e">Gift Cards</a>

                            <a href="/health-and-personal-care/b/?ie=UTF8&node=1350384031&ref_=nav_cs_hpc_a024fc7ba9174802831aed18bbebb33d" class="nav-a  " tabindex="0" data-csa-c-type="link" data-csa-c-slot-id="nav_cs_17" data-csa-c-content-id="nav_cs_hpc_a024fc7ba9174802831aed18bbebb33d">Health, Household & Personal Care</a>

                            <a href="/Gourmet-Specialty-Foods/b/?ie=UTF8&node=2454178031&ref_=nav_cs_grocery_aaabc3a9e1214048a9a0a73dcc968167" class="nav-a  " tabindex="0" data-csa-c-type="link" data-csa-c-slot-id="nav_cs_18" data-csa-c-content-id="nav_cs_grocery_aaabc3a9e1214048a9a0a73dcc968167">Grocery & Gourmet Foods</a>

                            <a href="/Sports/b/?ie=UTF8&node=1984443031&ref_=nav_cs_sports_8a31b13c38f84bfba386a5c9d1b7615e" class="nav-a  " tabindex="0" data-csa-c-type="link" data-csa-c-slot-id="nav_cs_19" data-csa-c-content-id="nav_cs_sports_8a31b13c38f84bfba386a5c9d1b7615e">Sports, Fitness & Outdoors</a>

                            <a href="/Baby/b/?ie=UTF8&node=1571274031&ref_=nav_cs_baby_b2a01e91bb824bf1875698a9cdcacb29" class="nav-a  " tabindex="0" data-csa-c-type="link" data-csa-c-slot-id="nav_cs_20" data-csa-c-content-id="nav_cs_baby_b2a01e91bb824bf1875698a9cdcacb29">Baby</a>

                            <a href="/video-games/b/?ie=UTF8&node=976460031&ref_=nav_cs_video_games_6da073eac80d4cc188a31f2330c92387" class="nav-a  " tabindex="0" data-csa-c-type="link" data-csa-c-slot-id="nav_cs_21" data-csa-c-content-id="nav_cs_video_games_6da073eac80d4cc188a31f2330c92387">Video Games</a>

                            <a href="/gcx/-/gfhz/?ref_=nav_cs_giftfinder_58f3a96b9747402884d8f629e69ebd28" class="nav-a  " tabindex="0" data-csa-c-type="link" data-csa-c-slot-id="nav_cs_22" data-csa-c-content-id="nav_cs_giftfinder_58f3a96b9747402884d8f629e69ebd28">Gift Ideas </a>

                            <a href="/amazon-coupons/b/?_encoding=UTF8&node=10465704031&ref_=nav_cs_coupons_ce0af682243a4823874ce6cde7afb33e" class="nav-a  " tabindex="0" data-csa-c-type="link" data-csa-c-slot-id="nav_cs_23" data-csa-c-content-id="nav_cs_coupons_ce0af682243a4823874ce6cde7afb33e">Coupons</a>

                            <a href="/Pet-Supplies/b/?ie=UTF8&node=2454181031&ref_=nav_cs_pets_57065eb9748646eb8c04675172dd0001" class="nav-a  " tabindex="0" data-csa-c-type="link" data-csa-c-slot-id="nav_cs_24" data-csa-c-content-id="nav_cs_pets_57065eb9748646eb8c04675172dd0001">Pet Supplies</a>

                            <a href="/b/?node=6637738031&ref_=nav_cs_amazonbasics_7b323e02d64042408aefc605ff4f5baf" class="nav-a  " tabindex="0" data-csa-c-type="link" data-csa-c-slot-id="nav_cs_25" data-csa-c-content-id="nav_cs_amazonbasics_7b323e02d64042408aefc605ff4f5baf">AmazonBasics</a>

                            <a href="/Kindle-Store/b/?ie=UTF8&node=1571277031&ref_=nav_cs_kindle_books_fbe4f5e5a26f403a91203de3fe5ab05d" class="nav-a  " tabindex="0" data-csa-c-type="link" data-csa-c-slot-id="nav_cs_26" data-csa-c-content-id="nav_cs_kindle_books_fbe4f5e5a26f403a91203de3fe5ab05d">Kindle eBooks</a>

                            <a href="/gp/browse.html?node=3704992031&ref_=nav_cs_hi_b183765d90844c95b998beab0377167a" class="nav-a  " tabindex="0" data-csa-c-type="link" data-csa-c-slot-id="nav_cs_27" data-csa-c-content-id="nav_cs_hi_b183765d90844c95b998beab0377167a">Home Improvement</a>

                            <a href="/auto-deliveries/landing?ref_=nav_cs_sns_c630ba0feebb4081b3e5fbd2df39d065" class="nav-a  " tabindex="0" data-csa-c-type="link" data-csa-c-slot-id="nav_cs_28" data-csa-c-content-id="nav_cs_sns_c630ba0feebb4081b3e5fbd2df39d065">Subscribe & Save</a>
                            <script type='text/javascript'>
                                window.navmet.push({
                                    key: 'CrossShop',
                                    end: +new Date(),
                                    begin: window.navmet.tmp
                                });
                            </script>
                        </div>
                    </div>

                </div>
                <div class='nav-right'>
                    <script type='text/javascript'>
                        window.navmet.tmp = +new Date();
                    </script>
                    <!-- Navyaan SWM -->
                    <div id="nav-swmslot">
                        <div id="navSwmHoliday" style="height: 39px; width: 400px; overflow: hidden; position: relative; ">
                            <a aria-label="Amazon App" href="/b/?_encoding=UTF8&node=6967393031&ref_=nav_swm_swm_generic&pf_rd_p=6dfa3081-da5a-469b-a808-b813800ffe56&pf_rd_s=nav-sitewide-msg&pf_rd_t=4201&pf_rd_i=navbar-4201&pf_rd_m=A21TJRUUN4KGV&pf_rd_r=WMZVJ0QZ56QFCB33E37K" class="nav-imageHref">
  <img alt="Amazon App" src="https://images-eu.ssl-images-amazon.com/images/G/31/img19/MAI/Sweepstakes/June20/SWM_DownloadApp._CB410314483_.jpg">
</a>
                        </div>

                    </div>
                    <script type='text/javascript'>
                        window.navmet.push({
                            key: 'SWM',
                            end: +new Date(),
                            begin: window.navmet.tmp
                        });
                    </script>
                </div>
            </div>

            <div id='nav-subnav-toaster'></div>


            <div id="nav-progressive-subnav">

            </div>




    </div>




    </header>
    <script type='text/javascript'>
        window.navmet.push({
            key: 'NavBar',
            end: +new Date(),
            begin: window.navmet.main
        });
    </script>


    <script type="text/javascript">
        if (window.ue_t0) {
            window.navmet.push({
                key: "NavMainPaintEnd",
                end: +new Date(),
                begin: window.ue_t0
            });
            window.navmet.push({
                key: "NavFirstPaintEnd",
                end: +new Date(),
                begin: window.ue_t0
            });
        }
    </script>


    <script type='text/javascript'>
        <!--
        window.$Nav && $Nav.declare('config.fixedBarBeacon', true);
        window.$Nav && $Nav.when("data").run(function(data) {
            data({
                "freshTimeout": {
                    "template": {
                        "name": "flyoutError",
                        "data": {
                            "error": {
                                "title": "<style>#nav-flyout-fresh{width:269px;padding:0;}#nav-flyout-fresh .nav-flyout-content{padding:0;}</style><a href='/amazonfresh'><img src='https://images-eu.ssl-images-amazon.com/images/G/02/omaha/images/yoda/flyout_72dpi._V270092858_.png' /></a>"
                            }
                        }
                    }
                },
                "cartTimeout": {
                    "template": {
                        "name": "flyoutError",
                        "data": {
                            "error": {
                                "button": {
                                    "text": "Your Cart",
                                    "url": "/gp/cart/view.html?ref_=nav_err_cart_timeout"
                                },
                                "title": "Oops!",
                                "paragraph": "There is a problem loading your cart right now"
                            }
                        }
                    }
                },
                "primeTimeout": {
                    "template": {
                        "name": "flyoutError",
                        "data": {
                            "error": {
                                "title": "<a href='/gp/prime?ref_=nav_prime_btn_fb'><img src='https://images-eu.ssl-images-amazon.com/images/G/02/prime/yourprime/yourprime-widget-piv-fallback._V310089192_.jpg' /></a>"
                            }
                        }
                    }
                },
                "ewcTimeout": {
                    "template": {
                        "name": "flyoutError",
                        "data": {
                            "error": {
                                "button": {
                                    "text": "Your Cart",
                                    "url": "/gp/cart/view.html?ref_=nav_err_ewc_timeout"
                                },
                                "title": "Oops!",
                                "paragraph": "There is a problem loading your cart right now"
                            }
                        }
                    }
                },
                "errorWishlist": {
                    "template": {
                        "name": "flyoutError",
                        "data": {
                            "error": {
                                "button": {
                                    "text": "Your Wish List",
                                    "url": "/gp/registry/wishlist/?ref_=nav_err_wishlist"
                                },
                                "title": "Oops!",
                                "paragraph": "There is a problem retrieving the list right now"
                            }
                        }
                    }
                },
                "emptyWishlist": {
                    "template": {
                        "name": "flyoutError",
                        "data": {
                            "error": {
                                "button": {
                                    "text": "Your Wish List",
                                    "url": "/gp/registry/wishlist/?ref_=nav_err_empty_wishlist"
                                },
                                "title": "Oops!",
                                "paragraph": "Your list is empty"
                            }
                        }
                    }
                },
                "yourAccountContent": {
                    "template": {
                        "name": "flyoutError",
                        "data": {
                            "error": {
                                "button": {
                                    "text": "Your Account",
                                    "url": "/gp/css/homepage.html?ref_=nav_err_youraccount"
                                },
                                "title": "Oops!",
                                "paragraph": "There is a problem retrieving the list right now"
                            }
                        }
                    }
                },
                "shopAllTimeout": {
                    "template": {
                        "name": "flyoutError",
                        "data": {
                            "error": {
                                "paragraph": "There is a problem retrieving the list right now"
                            }
                        }
                    }
                },
                "kindleTimeout": {
                    "template": {
                        "name": "flyoutError",
                        "data": {
                            "error": {
                                "paragraph": "There is a problem retrieving the list right now"
                            }
                        }
                    }
                }
            });
        });
        window.$Nav && $Nav.when("util.templates").run("FlyoutErrorTemplate", function(templates) {
            templates.add("flyoutError", "<# if(error.title) { #><span class='nav-title'><#=error.title #></span><# } #><# if(error.paragraph) { #><p class='nav-paragraph'><#=error.paragraph #></p><# } #><# if(error.button) { #><a href='<#=error.button.url #>' class='nav-action-button' ><span class='nav-action-inner'><#=error.button.text #></span></a><# } #>");
        });

        if (typeof uet == 'function') {
            uet('bb', 'iss-init-pc', {
                wb: 1
            });
        }
        if (!window.$SearchJS && window.$Nav) {
            window.$SearchJS = $Nav.make('sx');
        }

        var opts = {
            host: "completion.amazon.co.uk/search/complete",
            marketId: "44571",
            obfuscatedMarketId: "A21TJRUUN4KGV",
            searchAliases: ["aps", "amazonfresh", "amazon-devices", "stripbooks", "audible", "computers", "digital-text", "dvd", "instant-video", "electronics", "hpc", "kitchen", "furniture", "popular", "software", "videogames", "toys", "beauty", "baby", "watches", "jewelry", "luggage", "mobile-apps", "apparel", "shoes", "sporting", "gift-cards", "grocery", "mi", "office-products", "pets", "automotive", "industrial", "fashion", "appliances", "pantry", "lawngarden", "local-services", "luxury-beauty", "nowstore", "more", "spar", "hypercity", "bigbazaar", "home-improvement", "alexa-skills", "collectibles", "todays-deals", "under-ten-dollars", "specialty-aps-sns"],
            filterAliases: [],
            pageType: "Gateway",
            requestId: "WMZVJ0QZ56QFCB33E37K",
            sessionId: "257-8400121-7204450",
            language: "en_IN",
            customerId: "",
            b2b: 0,
            fresh: 0,
            isJpOrCn: 0,
            isUseAuiIss: 1
        };

        var issOpts = {
            fallbackFlag: 1,
            isDigitalFeaturesEnabled: 0,
            isWayfindingEnabled: 0,
            dropdown: "select.searchSelect",
            departmentText: "in {department}",
            suggestionText: "Search suggestions",
            recentSearchesTreatment: "C",
            authorSuggestionText: "all books by {author}",
            translatedStringsMap: {
                "sx-recent-searches": "Recent searches",
                "sx-your-recent-search": "Inspired by your recent search"
            },
            biaTitleText: "",
            biaPurchasedText: "",
            biaViewAllText: "",
            biaViewAllManageText: "",
            biaAndText: "",
            biaManageText: "",
            biaWeblabTreatment: "",
            issNavConfig: {},
            np: 0,
            issCorpus: [],
            cf: 1,
            removeDeepNodeISS: "",
            trendingTreatment: "C",
            useAPIV2: "",
            opfSwitch: "",
            isISSDesktopRefactorEnabled: "1",
            useServiceHighlighting: "true",
            isInternal: 0,
            isAPICachingDisabled: true,
            isBrowseNodeScopingEnabled: false,
            isStorefrontTemplateEnabled: false,
            disableAutocompleteOnFocus: ""
        };

        if (opts.isUseAuiIss === 1 && window.$Nav) {
            window.$Nav.when('sx.iss').run('iss-mason-init', function(iss) {
                var issInitObj = buildIssInitObject(opts, issOpts, true);

                new iss.IssParentCoordinator(issInitObj);

                $SearchJS.declare('canCreateAutocomplete', issInitObj);
            });
        } else if (window.$SearchJS) {
            var iss;

            // BEGIN Deprecated globals
            var issHost = opts.host,
                issMktid = opts.marketId,
                issSearchAliases = opts.searchAliases,
                updateISSCompletion = function() {
                    iss.updateAutoCompletion();
                };
            // END deprecated globals


            $SearchJS.when('jQuery', 'search-js-autocomplete-lib').run('autocomplete-init', initializeAutocomplete);
            $SearchJS.when('canCreateAutocomplete').run('createAutocomplete', createAutocomplete);

        } // END conditional for window.$SearchJS
        function initializeAutocomplete(jQuery) {
            var issInitObj = buildIssInitObject(opts, issOpts);
            $SearchJS.declare("canCreateAutocomplete", issInitObj);
        } // END initializeAutocomplete
        function initSearchCsl(searchCSL, issInitObject) {
            searchCSL.init(
                opts.pageType,
                (window.ue && window.ue.rid) || opts.requestId
            );
            $SearchJS.declare("canCreateAutocomplete", issInitObject);
        } // END initSearchCsl
        function createAutocomplete(issObject) {
            iss = new AutoComplete(issObject);

            $SearchJS.publish("search-js-autocomplete", iss);

            logMetrics();
        } // END createAutocomplete
        function buildIssInitObject(opts, issOpts, isNewIss) {
            var issInitObj = {
                src: opts.host,
                sessionId: opts.sessionId,
                requestId: opts.requestId,
                mkt: opts.marketId,
                obfMkt: opts.obfuscatedMarketId,
                pageType: opts.pageType,
                language: opts.language,
                customerId: opts.customerId,
                fresh: opts.fresh,
                b2b: opts.b2b,
                aliases: opts.searchAliases,
                fb: issOpts.fallbackFlag,
                isDigitalFeaturesEnabled: issOpts.isDigitalFeaturesEnabled,
                isWayfindingEnabled: issOpts.isWayfindingEnabled,
                issPrimeEligible: issOpts.issPrimeEligible,
                deptText: issOpts.departmentText,
                sugText: issOpts.suggestionText,
                filterAliases: opts.filterAliases,
                biaWidgetUrl: opts.biaWidgetUrl,
                recentSearchesTreatment: issOpts.recentSearchesTreatment,
                authorSuggestionText: issOpts.authorSuggestionText,
                translatedStringsMap: issOpts.translatedStringsMap,
                biaTitleText: "",
                biaPurchasedText: "",
                biaViewAllText: "",
                biaViewAllManageText: "",
                biaAndText: "",
                biaManageText: "",
                biaWeblabTreatment: "",
                issNavConfig: issOpts.issNavConfig,
                cf: issOpts.cf,
                ime: opts.isJpOrCn,
                mktid: opts.marketId,
                qs: opts.isJpOrCn,
                issCorpus: issOpts.issCorpus,
                deepNodeISS: {
                    searchAliasAccessor: function($) {
                        return (window.SearchPageAccess && window.SearchPageAccess.searchAlias()) ||
                            $('select.searchSelect').children().attr('data-root-alias');
                    },
                    searchAliasDisplayNameAccessor: function() {
                        return (window.SearchPageAccess && window.SearchPageAccess.searchAliasDisplayName());
                    }
                },
                removeDeepNodeISS: issOpts.removeDeepNodeISS,
                trendingTreatment: issOpts.trendingTreatment,
                useAPIV2: issOpts.useAPIV2,
                opfSwitch: issOpts.opfSwitch,
                isISSDesktopRefactorEnabled: issOpts.isISSDesktopRefactorEnabled,
                useServiceHighlighting: issOpts.useServiceHighlighting,
                isInternal: issOpts.isInternal,
                isAPICachingDisabled: issOpts.isAPICachingDisabled,
                isBrowseNodeScopingEnabled: issOpts.isBrowseNodeScopingEnabled,
                isStorefrontTemplateEnabled: issOpts.isStorefrontTemplateEnabled,
                disableAutocompleteOnFocus: issOpts.disableAutocompleteOnFocus
            };

            // If we aren't using the new ISS then we need to add these properties

            if (!isNewIss) {
                issInitObj.dd = issOpts.dropdown; // The element with id searchDropdownBox doesn't exist in C.
                issInitObj.imeSpacing = issOpts.imeSpacing;
                issInitObj.isNavInline = 1;
                issInitObj.triggerISSOnClick = 0;
                issInitObj.sc = 1;
                issInitObj.np = issOpts.np;
            }

            return issInitObj;
        } // END buildIssInitObject
        function logMetrics() {
            if (typeof uet == 'function' && typeof uex == 'function') {
                uet('be', 'iss-init-pc', {
                    wb: 1
                });
                uex('ld', 'iss-init-pc', {
                    wb: 1
                });
            }
        } // END logMetrics


        window.$Nav && $Nav.declare('config.navDeviceType', 'desktop');

        window.$Nav && $Nav.declare('config.navDebugHighres', false);

        window.$Nav && $Nav.declare('config.pageType', 'Gateway');
        window.$Nav && $Nav.declare('config.subPageType', 'null');

        window.$Nav && $Nav.declare('config.dynamicMenuUrl', '\x2Fgp\x2Fnavigation\x2Fajax\x2Fdynamic\x2Dmenu.html');

        window.$Nav && $Nav.declare('config.dismissNotificationUrl', '\x2Fgp\x2Fnavigation\x2Fajax\x2Fdismissnotification.html');

        window.$Nav && $Nav.declare('config.enableDynamicMenus', true);

        window.$Nav && $Nav.declare('config.isInternal', false);

        window.$Nav && $Nav.declare('config.isBackup', false);

        window.$Nav && $Nav.declare('config.isRecognized', false);

        window.$Nav && $Nav.declare('config.transientFlyoutTrigger', '\x23nav\x2Dtransient\x2Dflyout\x2Dtrigger');

        window.$Nav && $Nav.declare('config.subnavFlyoutUrl', '\x2Fgp\x2Fnavigation\x2Fajax\x2Fsubnav\x2Dflyout');

        window.$Nav && $Nav.declare('config.recordEvUrl', '\x2Fgp\x2Fnavigation\x2Fajax\x2Frecordevent.html');
        window.$Nav && $Nav.declare('config.recordEvInterval', 15000);
        window.$Nav && $Nav.declare('config.sessionId', '257\x2D8400121\x2D7204450');
        window.$Nav && $Nav.declare('config.requestId', 'WMZVJ0QZ56QFCB33E37K');

        window.$Nav && $Nav.declare('config.alexaListEnabled', true);

        window.$Nav && $Nav.declare('config.readyOnATF', true);

        window.$Nav && $Nav.declare('config.dynamicMenuArgs', {
            "rid": "WMZVJ0QZ56QFCB33E37K",
            "isFullWidthPrime": 0,
            "isPrime": 0,
            "dynamicRequest": 1,
            "weblabs": "",
            "isFreshRegionAndCustomer": "",
            "primeMenuWidth": 310
        });

        window.$Nav && $Nav.declare('config.customerName', false);

        window.$Nav && $Nav.declare('config.yourAccountPrimeURL', null);

        window.$Nav && $Nav.declare('config.yourAccountPrimeHover', true);

        window.$Nav && $Nav.declare('config.searchBackState', {});

        window.$Nav && $Nav.declare('nav.inline');

        (function(i) {
            i.onload = function() {
                window.uet && uet('ne')
            };
            i.src = window._navbarSpriteUrl;
        }(new Image()));

        window.$Nav && $Nav.declare('config.autoFocus', false);

        window.$Nav && $Nav.declare('config.responsiveTouchAgents', ["ieTouch"]);

        window.$Nav && $Nav.declare('config.responsiveGW', true);

        window.$Nav && $Nav.declare('config.pageHideEnabled', false);

        window.$Nav && $Nav.declare('config.sslTriggerType', 'null');
        window.$Nav && $Nav.declare('config.sslTriggerRetry', 0);

        window.$Nav && $Nav.declare('config.doubleCart', false);

        window.$Nav && $Nav.declare('config.signInOverride', true);

        window.$Nav && $Nav.declare('config.signInTooltip', true);

        window.$Nav && $Nav.declare('config.isPrimeMember', false);

        window.$Nav && $Nav.declare('config.packardGlowTooltip', false);

        window.$Nav && $Nav.declare('config.packardGlowFlyout', false);

        window.$Nav && $Nav.declare('config.rightMarginAlignEnabled', true);

        window.$Nav && $Nav.declare('config.flyoutAnimation', false);

        window.$Nav && $Nav.declare('config.campusActivation', 'null');

        window.$Nav && $Nav.declare('config.primeTooltip', false);

        window.$Nav && $Nav.declare('config.primeDay', false);

        window.$Nav && $Nav.declare('config.disableBuyItAgain', false);

        window.$Nav && $Nav.declare('config.enableCrossShopBiaFlyout', false);

        window.$Nav && $Nav.declare('config.pseudoPrimeFirstBrowse', null);

        window.$Nav && $Nav.declare('config.sdaYourAccount', false);

        window.$Nav && $Nav.declare('config.csYourAccount', false);

        window.$Nav && $Nav.declare('config.cartFlyoutDisabled', true);

        window.$Nav && $Nav.declare('config.isTabletBrowser', false);

        window.$Nav && $Nav.declare('config.HmenuProximityArea', [200, 200, 200, 200]);

        window.$Nav && $Nav.declare('config.HMenuIsProximity', true);

        window.$Nav && $Nav.declare('config.desktopHMenuRefactor', true);

        window.$Nav && $Nav.declare('config.isPureAjaxALF', false);

        window.$Nav && $Nav.declare('config.accountListFlyoutRedesign', false);

        window.$Nav && $Nav.declare('config.navfresh', false);

        window.$Nav && $Nav.declare('config.isFreshRegion', false);

        if (window.ue && ue.tag) {
            ue.tag('navbar');
        };

        window.$Nav && $Nav.declare('config.blackbelt', true);

        window.$Nav && $Nav.declare('config.beaconbelt', true);

        window.$Nav && $Nav.declare('config.accountList', true);

        window.$Nav && $Nav.declare('config.iPadTablet', false);

        window.$Nav && $Nav.declare('config.searchapiEndpoint', false);

        window.$Nav && $Nav.declare('config.timeline', false);

        window.$Nav && $Nav.declare('config.timelineAsinPriceEnabled', false);

        window.$Nav && $Nav.declare('config.timelineDeleteEnabled', false);



        window.$Nav && $Nav.declare('config.extendedFlyout', false);

        window.$Nav && $Nav.declare('config.flyoutCloseDelay', 600);

        window.$Nav && $Nav.declare('config.pssFlag', 0);

        window.$Nav && $Nav.declare('config.isShortAccountList', false);

        window.$Nav && $Nav.declare('config.isPrimeTooltipMigrated', false);

        window.$Nav && $Nav.declare('config.flyoutArrowStyle', 'null');

        window.$Nav && $Nav.declare('config.isTimelineMigrationEnabled', false);

        window.$Nav && $Nav.declare('config.hashCustomerAndSessionId', 'aaefa6f568d2ceff0aa4f09c728b991fb38001bc');

        window.$Nav && $Nav.declare('config.isExportMode', false);

        window.$Nav && $Nav.declare('config.languageCode', 'en_IN');

        window.$Nav && $Nav.declare('config.environmentVFI', 'AmazonNavigationCards\x2Fdevelopment\x40B6043195774\x2DAL2_x86_64');



        window.$Nav && $Nav.declare('config.isHMenuBrowserCacheDisable', false);

        window.$Nav && $Nav.declare('config.signInUrlWithRefTag', 'https\x3A\x2F\x2Fwww.amazon.in\x2Fap\x2Fsignin\x3Fopenid.pape.max_auth_age\x3D0\x26openid.return_to\x3Dhttps\x253A\x252F\x252Fwww.amazon.in\x252F\x253F_encoding\x253DUTF8\x2526_encoding\x253DUTF8\x2526camp\x253D3638\x2526creative\x253D24630\x2526linkCode\x253Dur2\x2526linkId\x253D1f94e7c2bbe0c476c1d418adb3a69d74\x2526tag\x253Dvped1a\x2D21\x2526ref_\x253DnavSignInUrlRefTagPlaceHolder\x26openid.identity\x3Dhttp\x253A\x252F\x252Fspecs.openid.net\x252Fauth\x252F2.0\x252Fidentifier_select\x26openid.assoc_handle\x3Dinflex\x26openid.mode\x3Dcheckid_setup\x26openid.claimed_id\x3Dhttp\x253A\x252F\x252Fspecs.openid.net\x252Fauth\x252F2.0\x252Fidentifier_select\x26openid.ns\x3Dhttp\x253A\x252F\x252Fspecs.openid.net\x252Fauth\x252F2.0\x26');

        window.$Nav && $Nav.declare('config.isSmile', false);

        window.$Nav && $Nav.declare('config.regionalStores', []);

        window.$Nav && $Nav.declare('config.isALFRedesignPT2', false);

        window.$Nav && $Nav.declare('config.isNavALFRegistryGiftList', false);

        window.$Nav && $Nav.declare('config.marketplaceId', 'A21TJRUUN4KGV');

        window.$Nav && $Nav.declare('config.exportTransitionState', 'none');

        window.$Nav && $Nav.declare('config.enableAeeXopFlyout', false);

        if (window.P && typeof window.P.declare === "function" && typeof window.P.now === "function") {
            window.P.now('packardGlowIngressJsEnabled').execute(function(glowEnabled) {
                if (!glowEnabled) {
                    window.P.declare('packardGlowIngressJsEnabled', true);
                }
            });
            window.P.now('packardGlowStoreName').execute(function(storeName) {
                if (!storeName) {
                    window.P.declare('packardGlowStoreName', 'generic');
                }
            });
        }

        window.$Nav && $Nav.declare('configComplete');

        -->
    </script>


    <a id="skippedLink" tabindex="-1"></a>

    <script type='text/javascript'>
        window.navmet.MainEnd = new Date();
    </script>
    <script type="text/javascript">
        if (window.ue_t0) {
            window.navmet.push({
                key: "NavMainEnd",
                end: +new Date(),
                begin: window.ue_t0
            });
        }
    </script>
    <!-- sp:feature:host-atf -->
    <div id="pageContent" class="a-section a-spacing-none" role="main"><a name="top"></a>
        <div cel_widget_id="desktop-hero-order" id="desktop-banner" data-pf_rd_p="3e54a3e1-1e90-4461-b681-71ad26082daf" data-pd_rd_wg="mdvMf" data-pd_rd_w="8f4y1" data-pd_rd_r="7d4e9ce0-60b9-49da-ac6d-f99c2f066535" data-ref_="pd_gw_unk" class="celwidget csm-placement-id-3e54a3e1-1e90-4461-b681-71ad26082daf desktop-gateway-atf_35476f15-05b6-4fbe-ab45-3a73a3616cb5 pd_rd_wg-mdvMf pd_rd_w-8f4y1 pd_rd_r-7d4e9ce0-60b9-49da-ac6d-f99c2f066535">
            <div id="gw-desktop-herotator" data-autorotation-delay="5000" class="a-section a-spacing-none aok-relative tall">
                <div data-a-carousel-options="{&quot;set_size&quot;:7,&quot;minimum_gutter_width&quot;:0,&quot;maintain_state&quot;:false,&quot;show_partial_next&quot;:false,&quot;name&quot;:&quot;gateway-desktop-layout.herotator&quot;,&quot;animation_speed&quot;:6000,&quot;circular&quot;:false}"
                    data-a-display-strategy="single" data-a-transition-strategy="slideCircular" data-a-class="desktop" class="a-begin a-carousel-container a-carousel-static a-carousel-display-single a-carousel-transition-slideCircular gw-desktop-herotator"><input autocomplete="on" type="hidden" class="a-carousel-firstvisibleitem">
                    <div class="a-row a-carousel-controls a-carousel-row a-carousel-has-buttons a-carousel-overlay-buttons a-carousel-rounded-buttons">
                        <div class="a-carousel-row-inner">
                            <div class="a-carousel-col a-carousel-left"><a class="a-carousel-goto-prevpage" tabindex="0" href="#"><i class="a-icon a-icon-previous-rounded"><span class="a-icon-alt">Previous page</span></i></a></div>
                            <div class="a-carousel-col a-carousel-center">
                                <div class="a-carousel-viewport">
                                    <ol class="a-carousel" role="list">
                                        <li class="a-carousel-card" role="listitem">
                                            <div id="gw-ftGr-desktop-tall-hero-D" class="gw-ftGr-desktop-hero gw-critical-content celwidget csm-placement-id-1db4a630-54b5-40e3-92fa-8f221108f0ea" data-pf_rd_p="1db4a630-54b5-40e3-92fa-8f221108f0ea">
                                                <div class="cropped-image-link image-map shogun-widget card-lite ameyal-cropped-image-link" id="fKLQRerTei36ZEoS1gorSQ">
                                                    <script type="text/javascript">
                                                        if (window.GWI && window.GWI.BillboardWidget) {
                                                            new window.GWI.BillboardWidget('fKLQRerTei36ZEoS1gorSQ', ['https://images-eu.ssl-images-amazon.com/images/G/31/img17/AmazonPantry/April/SVD/GWHero/Pantry4thAprilPC/Pantry_GW_4th_April_1500x600_RC._CB655706107_.jpg']);
                                                        };
                                                    </script>
                                                    <div class="cropped-image-map-size" style="height:600px">
                                                        <div class="cropped-image-map-center-alignment"><span style="display:inline-block"><a class="a-link-normal aok-inline-block" href="/b?node=9574332031"><img alt="Amazon pantry" src="https://images-eu.ssl-images-amazon.com/images/G/31/img17/AmazonPantry/April/SVD/GWHero/Pantry4thAprilPC/Pantry_GW_4th_April_1500x600_RC._CB655706107_.jpg" height="600px" width="1500px" data-a-hires="https://images-eu.ssl-images-amazon.com/images/G/31/img17/AmazonPantry/April/SVD/GWHero/Pantry4thAprilPC/Pantry_GW_4th_April_3000x1200_RC._CB655706107_.jpg"/></a><div class="a-section"></div></span></div>
                                                    </div>
                                                </div>
                                                <script>
                                                    (function(f) {
                                                        f(P._namespace('gwiAutoInstVisible'));
                                                    }(function(P) {
                                                        if (window.GWI) {
                                                            GWI.Card.autoInstVisible('fKLQRerTei36ZEoS1gorSQ');
                                                        }
                                                    }));
                                                </script>
                                            </div>
                                        </li>
                                        <li class="a-carousel-card" role="listitem">
                                            <div id="gw-ftGr-desktop-tall-hero-H" class="a-lazy-loaded gw-ftGr-desktop-hero celwidget csm-placement-id-460125d6-b2a9-47b0-8e24-d8e492977540" data-pf_rd_p="460125d6-b2a9-47b0-8e24-d8e492977540">&nbsp;</div>
                                        </li>
                                        <li class="a-carousel-card" role="listitem">
                                            <div id="gw-ftGr-desktop-tall-hero-L" class="a-lazy-loaded gw-ftGr-desktop-hero celwidget csm-placement-id-0b61f8a8-602e-4e63-b8de-3299784fd91c" data-pf_rd_p="0b61f8a8-602e-4e63-b8de-3299784fd91c">&nbsp;</div>
                                        </li>
                                        <li class="a-carousel-card" role="listitem">
                                            <div id="gw-ftGr-desktop-tall-hero-E" class="a-lazy-loaded gw-ftGr-desktop-hero celwidget csm-placement-id-3f639524-e3c6-4bba-818b-95af2eab37f2" data-pf_rd_p="3f639524-e3c6-4bba-818b-95af2eab37f2">&nbsp;</div>
                                        </li>
                                        <li class="a-carousel-card" role="listitem">
                                            <div id="gw-ftGr-desktop-tall-hero-N" class="a-lazy-loaded gw-ftGr-desktop-hero celwidget csm-placement-id-3825ebf4-e710-4a9a-bafa-8ee034d1346d" data-pf_rd_p="3825ebf4-e710-4a9a-bafa-8ee034d1346d">&nbsp;</div>
                                        </li>
                                        <li class="a-carousel-card" role="listitem">
                                            <div id="gw-ftGr-desktop-tall-hero-O" class="a-lazy-loaded gw-ftGr-desktop-hero celwidget csm-placement-id-17b9ce1e-5f6b-481a-9959-344bb6da6baa" data-pf_rd_p="17b9ce1e-5f6b-481a-9959-344bb6da6baa">&nbsp;</div>
                                        </li>
                                        <li class="a-carousel-card" role="listitem">
                                            <div id="gw-ftGr-desktop-tall-hero-P" class="a-lazy-loaded gw-ftGr-desktop-hero celwidget csm-placement-id-a65416b7-8a7a-4619-9b32-8ca74bb88451" data-pf_rd_p="a65416b7-8a7a-4619-9b32-8ca74bb88451">&nbsp;</div>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                            <div class="a-carousel-col a-carousel-right"><a class="a-carousel-goto-nextpage" tabindex="0" href="#"><i class="a-icon a-icon-next-rounded"><span class="a-icon-alt">Next page</span></i></a></div>
                        </div>
                    </div>

                    <span class="a-end aok-hidden"></span></div>
            </div>
        </div>
        <script>
            GwInstrumentation.markH1Af({
                uri: "/ah/ajax/counter?ctr=desktop_ajax_atf&exp=1617520908459&rId=WMZVJ0QZ56QFCB33E37K&mkId=A21TJRUUN4KGV&h=ade48aac7a4399ebe91257d3db765c0151adee5a23322fde11c27676e5d0e3a0"
            })
        </script>
        <script>
            P.when("LinkDecorator").execute("LDEventListenerInit", function(ld) {
                ld("pageContent");
            })
        </script>

        <script>
            //<![CDATA[
            window.P && P.when('herotator').execute(function heroBtf(h) {
                var ajaxParams = {
                        'uri': '/ah/ajax/counter?ctr=desktop_herotator_user_interaction_before_autorotation_completion&exp=1617520908512&rId=WMZVJ0QZ56QFCB33E37K&mkId=A21TJRUUN4KGV&h=8e50839e2c164de07a15de182d47e7ba1f432d565ffa0aa272e2d24aac9950bb'
                    },
                    btfContent = [{
                        'callbackUrl': '/ah/ajax/record-impressions?c4i=ePm_fHprndDNSsNAFIbhK_ogM3Pmb5kWasCuJNj1mZyjLYZE6oi03rwWCoXUldt39z7fC2HRj7c6v_8B_cBVv_i09G7N86rd5n7rd-vVZqn_ONcO6_4Jx9-P1-lwVgFPgs_pFv5zqbEU59giin8BhTQgJ4mIjoNhZ0piXUqYItGIV-RgDEgHi5RyA3WZBud8GgLdtK4QqDyO2OtxRncHSKEx1ktAsZxBsTRIagmSlLLNMXpqLsg_7b9tSg&rId=WMZVJ0QZ56QFCB33E37K&mkId=A21TJRUUN4KGV&exp=1617520908510&h=636a634be9109ac7c529f10b602e98f5fcf32f3759783dc9684d2f5127ac7bc3',
                        'fgID': 'desktop-tall-hero-H',
                        'content': '<div class=\"cropped-image-link image-map shogun-widget card-lite ameyal-cropped-image-link\" id=\"cuHYG48LU8-zascKPJGzaA\"><script type=\"text/javascript\">\n  if(window.GWI && window.GWI.BillboardWidget){\n    new window.GWI.BillboardWidget(\'cuHYG48LU8-zascKPJGzaA\', [\'https://images-eu.ssl-images-amazon.com/images/G/31/img20/CEPC/Wearables/Amazfit/Bip_U_Pro/GW/AMAZFIT_Bip_U_Pro_DesktopHero_1500x600._CB655770246_.jpg\']);\n  };\n<\/script><div class=\"cropped-image-map-size\" style=\"height:600px\"><div class=\"cropped-image-map-center-alignment\"><span style=\"display:inline-block\"><a class=\"a-link-normal aok-inline-block\" href=\"/b?node=26061115031\"><img alt=\"Amazfit Bip U Pro\" src=\"https://images-eu.ssl-images-amazon.com/images/G/31/img20/CEPC/Wearables/Amazfit/Bip_U_Pro/GW/AMAZFIT_Bip_U_Pro_DesktopHero_1500x600._CB655770246_.jpg\" height=\"600px\" width=\"1500px\" data-a-hires=\"https://images-eu.ssl-images-amazon.com/images/G/31/img20/CEPC/Wearables/Amazfit/Bip_U_Pro/GW/AMAZFIT_Bip_U_Pro_DesktopHero_3000x1200._CB655770246_.jpg\"/><\/a><div class=\"a-section\"><\/div><\/span><\/div><\/div><\/div><script>(function(f){f(P._namespace(\'gwiAutoInstVisible\'));}(function(P) {if(window.GWI){GWI.Card.autoInstVisible(\'cuHYG48LU8-zascKPJGzaA\');}}));<\/script>\n'
                    }, {
                        'callbackUrl': '/ah/ajax/record-impressions?c4i=ePm_fHprndDLCsIwFIThJxrItUmWKqhgV1J0fdKcqCitaEXUl7eCIFRXbgdm8X-PgXDi875rjz-gZ9TxlW5D75FcjUdlqEq7noynQ_1F280xqZY49R2bZnfnBGoSLs1n-KeSlOZcKA1J2cLo4OEzW4gonFNakw12KMEyOlaOkEhFGGMFKBYSTtQcalKCmT9abwh0dDhgy6cW5Reg6O_Zk0chFMNwoRF9YmgVgvMmpyDrF_IT_4Jugw&rId=WMZVJ0QZ56QFCB33E37K&mkId=A21TJRUUN4KGV&exp=1617520908510&h=ad8c15d6ba80c087d794482f784be2feb65c30fbc9275184a821603bf947c761',
                        'fgID': 'desktop-tall-hero-L',
                        'content': '<div class=\"cropped-image-link image-map shogun-widget card-lite ameyal-cropped-image-link\" id=\"Ozhn_5lEoAxBSd1Y6qBwVw\"><script type=\"text/javascript\">\n  if(window.GWI && window.GWI.BillboardWidget){\n    new window.GWI.BillboardWidget(\'Ozhn_5lEoAxBSd1Y6qBwVw\', [\'https://images-eu.ssl-images-amazon.com/images/G/31/img21/Beauty/GW/March/Beauty-Herotators-PC-1500x600._CB656430787_.jpg\']);\n  };\n<\/script><div class=\"cropped-image-map-size\" style=\"height:600px\"><div class=\"cropped-image-map-center-alignment\"><span style=\"display:inline-block\"><a class=\"a-link-normal aok-inline-block\" href=\"/b?node=6623232031\"><img alt=\"Beauty summer store\" src=\"https://images-eu.ssl-images-amazon.com/images/G/31/img21/Beauty/GW/March/Beauty-Herotators-PC-1500x600._CB656430787_.jpg\" height=\"600px\" width=\"1500px\" data-a-hires=\"https://images-eu.ssl-images-amazon.com/images/G/31/img21/Beauty/GW/March/Beauty-Herotators-PC-3000x1200._CB656430787_.jpg\"/><\/a><div class=\"a-section\"><\/div><\/span><\/div><\/div><\/div><script>(function(f){f(P._namespace(\'gwiAutoInstVisible\'));}(function(P) {if(window.GWI){GWI.Card.autoInstVisible(\'Ozhn_5lEoAxBSd1Y6qBwVw\');}}));<\/script>\n'
                    }, {
                        'callbackUrl': '/ah/ajax/record-impressions?c4i=ePm_fHprndDLCsIwFATQLxpokps0WbbFB-hKRNc3baJiaUUrov68FYRCdeV2FjPMeY6Eq3A5du3pB_SMu3Dj-9g7E5s8W7r1Um-LfDrWX7TdHMV6hXP_Y9ccHqECNxWuzRD889KKtGJvDUL0CUgrAe-chks0q2i0MSWNJaSmUglLIMkM8t7DKS5B5ESklGPixaD1gUDHdY19OLeYfAH2S8ppSQiqNO9GhhW2r9UcZWCv0ijfyC_RK25I&rId=WMZVJ0QZ56QFCB33E37K&mkId=A21TJRUUN4KGV&exp=1617520908510&h=c20fea591d399d6be67ada14863cc8064af9137533c3bef4e74cae7746358d0c',
                        'fgID': 'desktop-tall-hero-E',
                        'content': '<div class=\"cropped-image-link image-map shogun-widget card-lite ameyal-cropped-image-link\" id=\"Wyg9eDpi0L2QU2mI-VW-Bw\"><script type=\"text/javascript\">\n  if(window.GWI && window.GWI.BillboardWidget){\n    new window.GWI.BillboardWidget(\'Wyg9eDpi0L2QU2mI-VW-Bw\', [\'https://images-eu.ssl-images-amazon.com/images/G/31/prime/Gateway/2021/desktop-1x._CB658860139_.jpg\']);\n  };\n<\/script><div class=\"cropped-image-map-size\" style=\"height:600px\"><div class=\"cropped-image-map-center-alignment\"><span style=\"display:inline-block\"><a class=\"a-link-normal aok-inline-block\" href=\"/gp/prime?ref_=content_test_may\"><img alt=\"Join Prime\" src=\"https://images-eu.ssl-images-amazon.com/images/G/31/prime/Gateway/2021/desktop-1x._CB658860139_.jpg\" height=\"600px\" width=\"1500px\" data-a-hires=\"https://images-eu.ssl-images-amazon.com/images/G/31/prime/Gateway/2021/desktop-2x._CB658860139_.jpg\"/><\/a><div class=\"a-section\"><\/div><\/span><\/div><\/div><\/div><script>(function(f){f(P._namespace(\'gwiAutoInstVisible\'));}(function(P) {if(window.GWI){GWI.Card.autoInstVisible(\'Wyg9eDpi0L2QU2mI-VW-Bw\');}}));<\/script>\n'
                    }, {
                        'callbackUrl': '/ah/ajax/record-impressions?c4i=ePm_fHprndJBa8JAFATgXzSw2X3Z7DsmQi0YehDR89vsS5VKImlE1D9vhIKQ9tTrHAbmY-4z4aTfX2N_-gN6KaNe5Dr3LrNtVda8qfPdonqb66_68R2LzRrDtOOzO9w0QbqEc_cK_rNSDCdh60AcWlBmcoTYeDBxbEWsOopzieBCY6lQGB8TyNsGHLwBUWxtXkRNbF9aPxAY5XjEXoceH78AXbC5xpagRTb1CAuiTC8IqsZRyhz59ER-AO9jbo0&rId=WMZVJ0QZ56QFCB33E37K&mkId=A21TJRUUN4KGV&exp=1617520908510&h=05d021e103dcf81e809a105e78b20277fe6b090f31eaf9e4d0fe78a6ad022643',
                        'fgID': 'desktop-tall-hero-N',
                        'content': '<div class=\"cropped-image-link image-map shogun-widget card-lite ameyal-cropped-image-link\" id=\"vfnPLVv6TphUBqDo2uGVGA\"><script type=\"text/javascript\">\n  if(window.GWI && window.GWI.BillboardWidget){\n    new window.GWI.BillboardWidget(\'vfnPLVv6TphUBqDo2uGVGA\', [\'https://images-eu.ssl-images-amazon.com/images/G/31/Jupiter20/outbound/1500x600-unrec._CB655709942_.jpg\']);\n  };\n<\/script><div class=\"cropped-image-map-size\" style=\"height:600px\"><div class=\"cropped-image-map-center-alignment\"><span style=\"display:inline-block\"><a class=\"a-link-normal aok-inline-block\" href=\"/l/12597663031\"><img alt=\"Home kitchen\" src=\"https://images-eu.ssl-images-amazon.com/images/G/31/Jupiter20/outbound/1500x600-unrec._CB655709942_.jpg\" height=\"600px\" width=\"1500px\" data-a-hires=\"https://images-eu.ssl-images-amazon.com/images/G/31/Jupiter20/outbound/3000x1200-unrec._CB655709942_.jpg\"/><\/a><div class=\"a-section\"><\/div><\/span><\/div><\/div><\/div><script>(function(f){f(P._namespace(\'gwiAutoInstVisible\'));}(function(P) {if(window.GWI){GWI.Card.autoInstVisible(\'vfnPLVv6TphUBqDo2uGVGA\');}}));<\/script>\n'
                    }, {
                        'callbackUrl': '/ah/ajax/record-impressions?c4i=ePm_fHprndDLisJQEIThJyqwT851qcIoKAgiuu5z6VGURDQi6ssbYUDIuHL7r6q-R084l_O-bY4foCfclivf-t5DWo-G87Cam8149NPXnzXtFOPVEqfux2-9u5cMrjMu9Tt88zIqJd7pDKWqCF28R0iSQWKsc14GxKkvMSCXMjtBRZyho_LwRghixQsl6mp8a_1BoOXDAdtyarD4B0guhlSowIjtVnhihGACKq1jtJltZH4hPwFNo29-&rId=WMZVJ0QZ56QFCB33E37K&mkId=A21TJRUUN4KGV&exp=1617520908510&h=947bd390279e631a7ab22b69797852788d6ce1aeb0587fa887752fd119a48eea',
                        'fgID': 'desktop-tall-hero-O',
                        'content': '<div class=\"cropped-image-link image-map shogun-widget card-lite ameyal-cropped-image-link\" id=\"8nXV-jYi3wWKBxQNf5MvLQ\"><script type=\"text/javascript\">\n  if(window.GWI && window.GWI.BillboardWidget){\n    new window.GWI.BillboardWidget(\'8nXV-jYi3wWKBxQNf5MvLQ\', [\'https://images-eu.ssl-images-amazon.com/images/G/31/img21/under_1499_updated/v1/tall_hero_1500x600._CB655764075_.jpg\']);\n  };\n<\/script><div class=\"cropped-image-map-size\" style=\"height:600px\"><div class=\"cropped-image-map-center-alignment\"><span style=\"display:inline-block\"><a class=\"a-link-normal aok-inline-block\" href=\"/b?node=21776054031\"><img alt=\"Musical Instruments\" src=\"https://images-eu.ssl-images-amazon.com/images/G/31/img21/under_1499_updated/v1/tall_hero_1500x600._CB655764075_.jpg\" height=\"600px\" width=\"1500px\" data-a-hires=\"https://images-eu.ssl-images-amazon.com/images/G/31/img21/under_1499_updated/v1/tall_hero_3000x1200._CB655764075_.jpg\"/><\/a><div class=\"a-section\"><\/div><\/span><\/div><\/div><\/div><script>(function(f){f(P._namespace(\'gwiAutoInstVisible\'));}(function(P) {if(window.GWI){GWI.Card.autoInstVisible(\'8nXV-jYi3wWKBxQNf5MvLQ\');}}));<\/script>\n'
                    }, {
                        'callbackUrl': '/ah/ajax/record-impressions?c4i=ePm_fHprndBNCwFRFIfxT_Qvd-a-nLtEoVhIYn3OfUGmGTESvjxKqWFl--ye370jHNNp3zaHH9BjbtOFr13vvloN-jO_nJn1cDDq6k-bdoLhcoHj82NT724pguuIc_0J_1wGYk-eDMpAFtpJCR-sRY5BU8Gh5CxdieQKk3s9Be2VQIvL8IkzyIWoJIgSjh-tNwRarips07HB_AuQrdHKigOxY2irPLyUBSiw0yJE2qgX8gNm8G8A&rId=WMZVJ0QZ56QFCB33E37K&mkId=A21TJRUUN4KGV&exp=1617520908510&h=2253754246a5fd5dff22baadc95669f30b43a432305639d2aa81c26a34dfb67a',
                        'fgID': 'desktop-tall-hero-P',
                        'content': '<div class=\"cropped-image-link image-map shogun-widget card-lite ameyal-cropped-image-link\" id=\"uU22MAfLH_Wnk2VcAecWWA\"><script type=\"text/javascript\">\n  if(window.GWI && window.GWI.BillboardWidget){\n    new window.GWI.BillboardWidget(\'uU22MAfLH_Wnk2VcAecWWA\', [\'https://images-eu.ssl-images-amazon.com/images/G/31/img21/Wireless/Samsung/SamsungM/Family/April/D20729242_IN_WLME_SamsungM_Family_DesktopTallHero_1500x600_2._CB655716583_.jpg\']);\n  };\n<\/script><div class=\"cropped-image-map-size\" style=\"height:600px\"><div class=\"cropped-image-map-center-alignment\"><span style=\"display:inline-block\"><a class=\"a-link-normal aok-inline-block\" href=\"/b?node=21505777031\"><img alt=\"Mobiles\" src=\"https://images-eu.ssl-images-amazon.com/images/G/31/img21/Wireless/Samsung/SamsungM/Family/April/D20729242_IN_WLME_SamsungM_Family_DesktopTallHero_1500x600_2._CB655716583_.jpg\" height=\"600px\" width=\"1500px\" data-a-hires=\"https://images-eu.ssl-images-amazon.com/images/G/31/img21/Wireless/Samsung/SamsungM/Family/April/D20729242_IN_WLME_SamsungM_Family_DesktopTallHero_3000x1200_2._CB655716583_.jpg\"/><\/a><div class=\"a-section\"><\/div><\/span><\/div><\/div><\/div><script>(function(f){f(P._namespace(\'gwiAutoInstVisible\'));}(function(P) {if(window.GWI){GWI.Card.autoInstVisible(\'uU22MAfLH_Wnk2VcAecWWA\');}}));<\/script>\n'
                    }];
                h(ajaxParams, btfContent);
            });
            //]]>
        </script>
        <div id="gw-layout" class="a-section a-spacing-none aok-relative">
            <div id="gw-card-layout" data-grid-breakpoint="ws" data-flow-dir="h" class="a-section a-spacing-none gw-card-layout">
                <script>
                    (function setMeshBreakPoint(w, d) {
                        var g = d.getElementById('gw-card-layout'),
                            WS = 1239,
                            wdh = w.innerWidth || d.documentElement.clientWidth || d.body.clientWidth,
                            bp = wdh <= WS ? "sm" : "ws";
                        g && g.setAttribute('data-grid-breakpoint', bp);
                    }(window, document));
                </script>
                <div id="desktop-grid-1" data-gwi="{&quot;visible&quot;:&quot;desktop-grid-1-visible&quot;,&quot;active&quot;:&quot;desktop-grid-1-active&quot;}" data-display-at="smws" data-order-ws="1" class="gw-col celwidget csm-placement-id-48c42d90-9561-4c63-92da-331432bca0aa desktop-gateway-atf_2375a8af-0657-45b9-99ec-0a2d2579570e pd_rd_wg-mdvMf pd_rd_w-zlb3v pd_rd_r-7d4e9ce0-60b9-49da-ac6d-f99c2f066535"
                    data-order-sm="1" data-pf_rd_p="48c42d90-9561-4c63-92da-331432bca0aa" data-pd_rd_wg="mdvMf" data-pd_rd_w="zlb3v" data-pd_rd_r="7d4e9ce0-60b9-49da-ac6d-f99c2f066535" data-ref_="pd_gw_unk">
                    <style>
                        .fluid-card {
                            -webkit-box-orient: vertical;
                            -webkit-box-direction: normal;
                            display: -webkit-box;
                            display: -ms-flexbox;
                            display: flex;
                            -ms-flex-direction: column;
                            flex-direction: column
                        }

                        .fluid-card.a-cardui .a-cardui-body {
                            -webkit-box-flex: 1;
                            -ms-flex-positive: 1;
                            flex-grow: 1;
                            height: 275px;
                            margin-bottom: 44px;
                            padding: 0 20px
                        }

                        .fluid-quad-image-label .image-label {
                            height: 36px
                        }

                        .fluid-quad-image-label .image-redirect {
                            height: 100%
                        }

                        .fluid-quad-image-label .grid-row-1 {
                            margin-bottom: 6px
                        }

                        .fluid-quad-image-label .grid-row-1,
                        .fluid-quad-image-label .grid-row-2 {
                            height: 50%;
                            overflow: hidden
                        }

                        .fluid-quad-image-label .quadrant-container {
                            display: inline-block;
                            height: 100%;
                            margin: 0;
                            padding: 0 0 36px;
                            position: relative;
                            width: 47.5%
                        }

                        .fluid-quad-image-label .quadrant-container-1 {
                            float: right
                        }

                        html[dir=rtl] .fluid-quad-image-label .quadrant-container-1 {
                            float: left
                        }

                        .fluid-quad-image-label .quadrant-overlay {
                            height: 100%;
                            left: 0;
                            position: absolute;
                            top: 0;
                            width: 100%
                        }

                        .fluid-image-container {
                            height: 100%;
                            overflow: hidden;
                            position: relative;
                            width: 100%
                        }

                        .fluid-image-container img {
                            bottom: -9999px;
                            left: -9999px;
                            margin: auto;
                            position: absolute;
                            right: -9999px;
                            top: -9999px
                        }

                        .fluid-image-container .landscape-image {
                            height: 100%;
                            max-height: 100%;
                            max-width: none
                        }

                        .fluid-image-container .portrait-image {
                            max-height: none;
                            max-width: 100%;
                            width: 100%
                        }
                    </style>
                    <div id="fjy3D2nQBc44iooZdmXU8Q" class="a-cardui fluid-quad-card fluid-card fluid-quad-image-label fluid-quad-image-label" data-a-card-type="basic">
                        <div class="a-cardui-header">
                            <h2 class="a-color-base headline truncate-2line">Home essentials | Amazon Brands &amp; more</h2>
                        </div>
                        <div class="a-cardui-body">
                            <div class="a-section a-spacing-small grid-row-1">
                                <div class="a-section a-spacing-none quadrant-container quadrant-container-0">
                                    <a aria-label="Bedsheets, curtains &amp; more" class="a-link-normal image-redirect aok-block image-window" href="/s?bbn=1380442031&amp;rh=n%3A976442031%2Cn%3A%21976443031%2Cn%3A1380442031%2Cp_n_format_browse-bin%3A19560802031">
                                        <div class="a-section a-spacing-none fluid-image-container"><img alt="Bedsheets, curtains &amp; more" src="https://images-eu.ssl-images-amazon.com/images/G/31/img20/AmazonBrands/GW/2-1_186x116._SY116_CB430773131_.jpg" class="landscape-image" data-a-hires="https://images-eu.ssl-images-amazon.com/images/G/31/img20/AmazonBrands/GW/2-1_372x232._SY232_CB430773130_.jpg"
                                            /></div>
                                        <div class="a-section a-spacing-none image-label truncate-2line"><span class="a-size-small a-color-base aok-align-center aok-inline-block">Bedsheets, curtains &amp; more</span></div>
                                    </a>
                                </div>
                                <div class="a-section a-spacing-none quadrant-container quadrant-container-1">
                                    <a aria-label="Cloth organizers, boxes &amp; baskets" class="a-link-normal image-redirect aok-block image-window" href="/s?bbn=1380510031&amp;rh=n%3A976442031%2Cn%3A%21976443031%2Cn%3A1380510031%2Cp_n_format_browse-bin%3A19560790031">
                                        <div class="a-section a-spacing-none fluid-image-container"><img alt="Cloth organizers, boxes &amp; baskets" src="https://images-eu.ssl-images-amazon.com/images/G/31/img20/AmazonBrands/GW/2-4_186x116._SY116_CB430773130_.jpg" class="landscape-image" data-a-hires="https://images-eu.ssl-images-amazon.com/images/G/31/img20/AmazonBrands/GW/2-4_372x232._SY232_CB430773125_.jpg"
                                            /></div>
                                        <div class="a-section a-spacing-none image-label truncate-2line"><span class="a-size-small a-color-base aok-align-center aok-inline-block">Cloth organizers, boxes &amp; baskets</span></div>
                                    </a>
                                </div>
                            </div>
                            <div class="a-section grid-row-2">
                                <div class="a-section a-spacing-none quadrant-container quadrant-container-0">
                                    <a aria-label="Wall stickers &amp; clocks" class="a-link-normal image-redirect aok-block image-window" href="/s?bbn=1380374031&amp;rh=n%3A976442031%2Cn%3A%21976443031%2Cn%3A1380374031%2Cp_n_format_browse-bin%3A19560799031&amp;hidden-keywords=-B07QRQ56VW-B07PBB4RB7-B07P95SDSN-B07P81V1SC-B07P95SB1N">
                                        <div class="a-section a-spacing-none fluid-image-container"><img alt="Wall stickers &amp; clocks" src="https://images-eu.ssl-images-amazon.com/images/G/31/img20/AmazonBrands/GW/2-2_186x116._SY116_CB430773130_.jpg" class="landscape-image" data-a-hires="https://images-eu.ssl-images-amazon.com/images/G/31/img20/AmazonBrands/GW/2-2_372x232._SY232_CB430773125_.jpg"
                                            /></div>
                                        <div class="a-section a-spacing-none image-label truncate-2line"><span class="a-size-small a-color-base aok-align-center aok-inline-block">Wall stickers &amp; clocks</span></div>
                                    </a>
                                </div>
                                <div class="a-section a-spacing-none quadrant-container quadrant-container-1">
                                    <a aria-label="Smart bulbs &amp; string lights" class="a-link-normal image-redirect aok-block image-window" href="/s?bbn=1380485031&amp;rh=n%3A976442031%2Cn%3A%21976443031%2Cn%3A1380485031%2Cp_n_format_browse-bin%3A19560800031&amp;fst=as%3Aoff&amp;qid=1583227118&amp;rnid=14019568031&amp;ref=lp_1380485031_nr_p_n_format_browse-bi_1">
                                        <div class="a-section a-spacing-none fluid-image-container"><img alt="Smart bulbs &amp; string lights" src="https://images-eu.ssl-images-amazon.com/images/G/31/img20/AmazonBrands/GW/2-3_186x116._SY116_CB430773130_.jpg" class="landscape-image" data-a-hires="https://images-eu.ssl-images-amazon.com/images/G/31/img20/AmazonBrands/GW/2-3_372x232._SY232_CB430773130_.jpg"
                                            /></div>
                                        <div class="a-section a-spacing-none image-label truncate-2line"><span class="a-size-small a-color-base aok-align-center aok-inline-block">Smart bulbs &amp; string lights</span></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="a-cardui-footer"><a aria-label="Home essentials | Amazon Brands &amp; more - See more" class="a-link-normal see-more truncate-1line" href="/s?i=kitchen&amp;bbn=976442031&amp;rh=n%3A976442031%2Cp_n_is_private_label%3A16184648031%2Cp_72%3A1318476031&amp;dc&amp;fst=as%3Aoff&amp;qid=1591715125&amp;rnid=1318475031&amp;ref=sr_nr_p_72_1">See more</a></div>
                    </div>
                    <script>
                        (function(f) {
                            f(P._namespace('gwiAutoInstVisible'));
                        }(function(P) {
                            if (window.GWI) {
                                GWI.Card.autoInstVisible('fjy3D2nQBc44iooZdmXU8Q');
                            }
                        }));
                    </script>
                    <script>
                        P.when('mix:fluid-quad-image-label').execute(function(cardModule) {
                            cardModule.init('fjy3D2nQBc44iooZdmXU8Q');
                            if (window.GWI) {
                                window.GWI.Card.autoInstActive('fjy3D2nQBc44iooZdmXU8Q');
                            }
                        });
                    </script>
                </div>
                <div id="desktop-grid-2" data-gwi="{&quot;visible&quot;:&quot;desktop-grid-2-visible&quot;,&quot;active&quot;:&quot;desktop-grid-2-active&quot;}" data-display-at="smws" data-order-ws="2" class="gw-col celwidget csm-placement-id-3a99979e-c897-485a-be16-530b1d5d73b7 desktop-gateway-atf_0926132b-9371-422e-8892-ef601a7f2ae8 pd_rd_wg-mdvMf pd_rd_w-JGLTX pd_rd_r-7d4e9ce0-60b9-49da-ac6d-f99c2f066535"
                    data-order-sm="2" data-pf_rd_p="3a99979e-c897-485a-be16-530b1d5d73b7" data-pd_rd_wg="mdvMf" data-pd_rd_w="JGLTX" data-pd_rd_r="7d4e9ce0-60b9-49da-ac6d-f99c2f066535" data-ref_="pd_gw_unk">
                    <div id="x02Up6xjUxesew7onL99Qg" class="a-cardui fluid-quad-card fluid-card fluid-quad-image-label fluid-quad-image-label" data-a-card-type="basic">
                        <div class="a-cardui-header">
                            <h2 class="a-color-base headline truncate-2line">Top picks for your home</h2>
                        </div>
                        <div class="a-cardui-body">
                            <div class="a-section a-spacing-small grid-row-1">
                                <div class="a-section a-spacing-none quadrant-container quadrant-container-0">
                                    <a aria-label="ACs" class="a-link-normal image-redirect aok-block image-window" href="/b?node=3474656031">
                                        <div class="a-section a-spacing-none fluid-image-container"><img alt="ACs" src="https://images-eu.ssl-images-amazon.com/images/G/31/IMG15/Irfan/Desktop_QC_tile_graphic_186x116_1._SY116_CB414480869_.jpg" class="landscape-image" data-a-hires="https://images-eu.ssl-images-amazon.com/images/G/31/IMG15/Irfan/Desktop_QC_tile_graphic_372x232_1._SY232_CB414480869_.jpg"
                                            /></div>
                                        <div class="a-section a-spacing-none image-label truncate-2line"><span class="a-size-small a-color-base aok-align-center aok-inline-block">ACs</span></div>
                                    </a>
                                </div>
                                <div class="a-section a-spacing-none quadrant-container quadrant-container-1">
                                    <a aria-label="Washing machines" class="a-link-normal image-redirect aok-block image-window" href="/s?rh=n%3A976442031%2Cn%3A%21976443031%2Cn%3A1380263031%2Cn%3A1380369031%2Cp_85%3A10440599031&amp;bbn=1380369031">
                                        <div class="a-section a-spacing-none fluid-image-container"><img alt="Washing machines" src="https://images-eu.ssl-images-amazon.com/images/G/31/IMG15/Irfan/Desktop_QC_tile_graphic_372x232_2._SY116_CB414480869_.jpg" class="landscape-image" data-a-hires="https://images-eu.ssl-images-amazon.com/images/G/31/IMG15/Irfan/Desktop_QC_tile_graphic_186x116_2._SY232_CB414480869_.jpg"
                                            /></div>
                                        <div class="a-section a-spacing-none image-label truncate-2line"><span class="a-size-small a-color-base aok-align-center aok-inline-block">Washing machines</span></div>
                                    </a>
                                </div>
                            </div>
                            <div class="a-section grid-row-2">
                                <div class="a-section a-spacing-none quadrant-container quadrant-container-0">
                                    <a aria-label="Televisions" class="a-link-normal image-redirect aok-block image-window" href="/b?node=1389396031">
                                        <div class="a-section a-spacing-none fluid-image-container"><img alt="Televisions" src="https://images-eu.ssl-images-amazon.com/images/G/31/IMG15/Irfan/Desktop_QC_tile_graphic_186x116_4._SY116_CB414480869_.jpg" class="landscape-image" data-a-hires="https://images-eu.ssl-images-amazon.com/images/G/31/IMG15/Irfan/Desktop_QC_tile_graphic_372x232_4._SY232_CB414480869_.jpg"
                                            /></div>
                                        <div class="a-section a-spacing-none image-label truncate-2line"><span class="a-size-small a-color-base aok-align-center aok-inline-block">Televisions</span></div>
                                    </a>
                                </div>
                                <div class="a-section a-spacing-none quadrant-container quadrant-container-1">
                                    <a aria-label="Refrigerators" class="a-link-normal image-redirect aok-block image-window" href="/l/1380365031">
                                        <div class="a-section a-spacing-none fluid-image-container"><img alt="Refrigerators" src="https://images-eu.ssl-images-amazon.com/images/G/31/IMG15/Irfan/Desktop_QC_tile_graphic_186x116_3._SY116_CB414480869_.jpg" class="landscape-image" data-a-hires="https://images-eu.ssl-images-amazon.com/images/G/31/IMG15/Irfan/Desktop_QC_tile_graphic_372x232_3._SY232_CB414480869_.jpg"
                                            /></div>
                                        <div class="a-section a-spacing-none image-label truncate-2line"><span class="a-size-small a-color-base aok-align-center aok-inline-block">Refrigerators</span></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="a-cardui-footer"><a aria-label="Top picks for your home - See more" class="a-link-normal see-more truncate-1line" href="/b?ie=UTF8&amp;node=21488179031">See more</a></div>
                    </div>
                    <script>
                        (function(f) {
                            f(P._namespace('gwiAutoInstVisible'));
                        }(function(P) {
                            if (window.GWI) {
                                GWI.Card.autoInstVisible('x02Up6xjUxesew7onL99Qg');
                            }
                        }));
                    </script>
                    <script>
                        P.when('mix:fluid-quad-image-label').execute(function(cardModule) {
                            cardModule.init('x02Up6xjUxesew7onL99Qg');
                            if (window.GWI) {
                                window.GWI.Card.autoInstActive('x02Up6xjUxesew7onL99Qg');
                            }
                        });
                    </script>
                </div>
                <div id="desktop-grid-3" data-gwi="{&quot;visible&quot;:&quot;desktop-grid-3-visible&quot;,&quot;active&quot;:&quot;desktop-grid-3-active&quot;}" data-display-at="smws" data-order-ws="3" class="gw-col celwidget csm-placement-id-1b1fc0d7-913b-4e26-8a1d-ce0a22e21030 desktop-gateway-atf_54ffded9-be53-44b4-8cf1-60dad9ce956e pd_rd_wg-mdvMf pd_rd_w-vV53Z pd_rd_r-7d4e9ce0-60b9-49da-ac6d-f99c2f066535"
                    data-order-sm="3" data-pf_rd_p="1b1fc0d7-913b-4e26-8a1d-ce0a22e21030" data-pd_rd_wg="mdvMf" data-pd_rd_w="vV53Z" data-pd_rd_r="7d4e9ce0-60b9-49da-ac6d-f99c2f066535" data-ref_="pd_gw_unk">
                    <div id="qFj5SMryta344SOaAVtC5g" class="a-cardui fluid-quad-card fluid-card fluid-quad-image-label fluid-quad-image-label" data-a-card-type="basic">
                        <div class="a-cardui-header">
                            <h2 class="a-color-base headline truncate-2line">Cookware &amp; dining</h2>
                        </div>
                        <div class="a-cardui-body">
                            <div class="a-section a-spacing-small grid-row-1">
                                <div class="a-section a-spacing-none quadrant-container quadrant-container-0">
                                    <a aria-label="Stoves" class="a-link-normal image-redirect aok-block image-window" href="/b?ie=UTF8&amp;node=1380267031">
                                        <div class="a-section a-spacing-none fluid-image-container"><img alt="Stoves" src="https://images-eu.ssl-images-amazon.com/images/G/31/IN-hq/2019/img/Kitchen/XCM_Manual_186x116_1198417XCM_Manual_1198417__1_1573567224_jpg_LOWER_QL85_._SY116_CB448746450_.jpg" class="landscape-image"
                                                data-a-hires="https://images-eu.ssl-images-amazon.com/images/G/31/IN-hq/2019/img/Kitchen/XCM_Manual_372x232_1198417XCM_Manual_1198417__1_1573567224_jpg_LOWER_QL85_._SY232_CB448746450_.jpg" /></div>
                                        <div class="a-section a-spacing-none image-label truncate-2line"><span class="a-size-small a-color-base aok-align-center aok-inline-block">Gas stoves</span></div>
                                    </a>
                                </div>
                                <div class="a-section a-spacing-none quadrant-container quadrant-container-1">
                                    <a aria-label="Cookware" class="a-link-normal image-redirect aok-block image-window" href="/s?i=kitchen&amp;bbn=15423132031&amp;rh=n%3A976442031%2Cn%3A15423132031%2Cn%3A5925789031%2Cp_n_pct-off-with-tax%3A2665399031%2Cp_85%3A10440599031">
                                        <div class="a-section a-spacing-none fluid-image-container"><img alt="Cookware" src="https://images-eu.ssl-images-amazon.com/images/G/31/IN-hq/2019/img/Kitchen/XCM_Manual_186x116_1198417XCM_Manual_1198417__2_1573567224_jpg_LOWER_QL85_._SY116_CB448746415_.jpg" class="landscape-image"
                                                data-a-hires="https://images-eu.ssl-images-amazon.com/images/G/31/IN-hq/2019/img/Kitchen/XCM_Manual_372x232_1198417XCM_Manual_1198417__2_1573567224_jpg_LOWER_QL85_._SY232_CB448746407_.jpg" /></div>
                                        <div class="a-section a-spacing-none image-label truncate-2line"><span class="a-size-small a-color-base aok-align-center aok-inline-block">Cookware</span></div>
                                    </a>
                                </div>
                            </div>
                            <div class="a-section grid-row-2">
                                <div class="a-section a-spacing-none quadrant-container quadrant-container-0">
                                    <a aria-label="Thermos &amp; flask" class="a-link-normal image-redirect aok-block image-window" href="/s?i=kitchen&amp;bbn=1379989031&amp;rh=n%3A976442031%2Cn%3A976443031%2Cn%3A5925789031%2Cn%3A1379989031%2Cp_n_format_browse-bin%3A14277550031%2Cp_n_pct-off-with-tax%3A2665399031">
                                        <div class="a-section a-spacing-none fluid-image-container"><img alt="Thermos &amp; flask" src="https://images-eu.ssl-images-amazon.com/images/G/31/IN-hq/2019/img/Kitchen/XCM_Manual_186x116_1198417XCM_Manual_3_copyx400x2C5x_1573713358_jpg_LOWER_QL85_._SY116_CB448746425_.jpg"
                                                class="landscape-image" data-a-hires="https://images-eu.ssl-images-amazon.com/images/G/31/IN-hq/2019/img/Kitchen/XCM_Manual_372x232_1198417XCM_Manual_3_copy_1573713358_jpg_LOWER_QL85_._SY232_CB448746425_.jpg"
                                            /></div>
                                        <div class="a-section a-spacing-none image-label truncate-2line"><span class="a-size-small a-color-base aok-align-center aok-inline-block">Kitchen storage</span></div>
                                    </a>
                                </div>
                                <div class="a-section a-spacing-none quadrant-container quadrant-container-1">
                                    <a aria-label="Tableware" class="a-link-normal image-redirect aok-block image-window" href="/l/14892174031">
                                        <div class="a-section a-spacing-none fluid-image-container"><img alt="Tableware" src="https://images-eu.ssl-images-amazon.com/images/G/31/IN-hq/2019/img/Kitchen/XCM_Manual_186x116_1198417XCM_Manual_1198417__4_1573567224_jpg_LOWER_QL85_._SY116_CB448746450_.jpg" class="landscape-image"
                                                data-a-hires="https://images-eu.ssl-images-amazon.com/images/G/31/IN-hq/2019/img/Kitchen/XCM_Manual_372x232_1198417XCM_Manual_1198417__4_1573567224_jpg_LOWER_QL85_._SY232_CB448746407_.jpg" /></div>
                                        <div class="a-section a-spacing-none image-label truncate-2line"><span class="a-size-small a-color-base aok-align-center aok-inline-block">Tableware</span></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="a-cardui-footer"><a aria-label="Cookware &amp; dining - See more" class="a-link-normal see-more truncate-1line" href="/b?node=5925789031">See more</a></div>
                    </div>
                    <script>
                        (function(f) {
                            f(P._namespace('gwiAutoInstVisible'));
                        }(function(P) {
                            if (window.GWI) {
                                GWI.Card.autoInstVisible('qFj5SMryta344SOaAVtC5g');
                            }
                        }));
                    </script>
                    <script>
                        P.when('mix:fluid-quad-image-label').execute(function(cardModule) {
                            cardModule.init('qFj5SMryta344SOaAVtC5g');
                            if (window.GWI) {
                                window.GWI.Card.autoInstActive('qFj5SMryta344SOaAVtC5g');
                            }
                        });
                    </script>
                </div>
                <div data-display-at="smws" data-order-sm="9" data-order-ws="4" data-flow-dir="v" class="a-section a-spacing-none gw-col gw-fixed-col gw-card-layout">
                    <div id="desktop-grid-1-D1" data-gwi="{&quot;visible&quot;:&quot;desktop-grid-1-D1-visible&quot;,&quot;active&quot;:&quot;desktop-grid-1-D1-active&quot;}" data-display-at="smws" data-order-ws="1" class="gw-row celwidget csm-placement-id-6d0dbd88-a256-4684-81a8-e1f9ad39e674 desktop-gateway-atf_539fbf69-d5ff-4252-ae81-8db7d87b0562 pd_rd_wg-mdvMf pd_rd_w-Zm7Bm pd_rd_r-7d4e9ce0-60b9-49da-ac6d-f99c2f066535"
                        data-order-sm="2" data-pf_rd_p="6d0dbd88-a256-4684-81a8-e1f9ad39e674" data-pd_rd_wg="mdvMf" data-pd_rd_w="Zm7Bm" data-pd_rd_r="7d4e9ce0-60b9-49da-ac6d-f99c2f066535" data-ref_="pd_gw_unk">
                        <div class="a-cardui gw-sign-in sign-in-v2" data-a-card-type="basic" id="SS3FUGLDAo3m5k5iwMdtJA">
                            <div class="a-cardui-header">
                                <h2 class="a-color-base headline">Sign in for your best experience</h2>
                            </div>
                            <div class="a-cardui-body"><span class="a-button a-spacing-top-mini a-button-span12 a-button-primary sign-in-button"><span class="a-button-inner"><a href="https://www.amazon.in/ap/signin?openid.mode=checkid_setup&amp;openid.ns=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0&amp;openid.return_to=https%3A%2F%2Fwww.amazon.in%2Fref%3Dgw_sgn_ib&amp;openid.assoc_handle=inflex&amp;openid.pape.max_auth_age=0" class="a-button-text" role="button">Sign in securely</a></span></span>
                            </div>
                        </div>
                        <script>
                            (function(f) {
                                f(P._namespace('gwiAutoInstVisible'));
                            }(function(P) {
                                if (window.GWI) {
                                    GWI.Card.autoInstVisible('SS3FUGLDAo3m5k5iwMdtJA');
                                }
                            }));
                        </script>
                    </div>
                    <div id="desktop-grid-1-D2" data-gwi="{&quot;visible&quot;:&quot;desktop-grid-1-D2-visible&quot;,&quot;active&quot;:&quot;desktop-grid-1-D2-active&quot;}" data-display-at="smws" data-order-ws="2" class="gw-row celwidget csm-placement-id-6bde3fcc-f5a1-4e18-8374-1540acf84859 desktop-gateway-atf_640ba273-94d1-448d-81e7-72f8eb2e3222 pd_rd_wg-mdvMf pd_rd_w-lSFEr pd_rd_r-7d4e9ce0-60b9-49da-ac6d-f99c2f066535"
                        data-order-sm="1" data-pf_rd_p="6bde3fcc-f5a1-4e18-8374-1540acf84859" data-pd_rd_wg="mdvMf" data-pd_rd_w="lSFEr" data-pd_rd_r="7d4e9ce0-60b9-49da-ac6d-f99c2f066535" data-ref_="pd_gw_unk">
                        <script>
                            if (typeof uet === 'function' && typeof ues === 'function') {
                                var scope = 'Gateway_right-2_desktop';
                                var placementId = '589e332a-17d0-4382-b320-05e6f4ddc521';
                                ues('wb', 'adplacements:' + scope.replace(/\_/g, ':'), {
                                    wb: 1
                                });
                                uet('bb', 'adplacements:' + scope.replace(/\_/g, ':'), {
                                    wb: 1
                                });
                                if (placementId) {
                                    ues('wb', 'adplacements:' + placementId, {
                                        wb: 1
                                    });
                                    uet('bb', 'adplacements:' + placementId, {
                                        wb: 1
                                    });
                                }
                            }
                        </script>
                        <style>
                            #ape_Gateway_right-2_desktop_placement {
                                line-height: 1
                            }

                            #ape_Gateway_right-2_desktop_placement div {
                                margin: 0 auto !important;
                                width: 100% !important;
                                top: 1px !important;
                            }

                            #ape_Gateway_right-2_desktop_placement>div>a {
                                top: 0 !important
                            }
                        </style>
                        <div id="ape_Gateway_right-2_desktop_placement" class="copilot-secure-display celwidget  text/x-dacx-safeframe" cel_widget_id="adplacements:Gateway:right-2:desktop" data-campaign="9140" style="height:270px;" data-ad-details='{"slot" :"Gateway_right-2_desktop","pageType": "Gateway","subPageType":  "desktop","slotName" :"right-2","src" : "https://aax-eu.amazon.in/e/xsp/getAd?placementId=589e332a-17d0-4382-b320-05e6f4ddc521&src=511&slot=right-2&rid=0101671e1a8bc7941c2666de6e977a6d0044cb5f3e4caa0eeea87b77e3f2ae2466a5&rj=%7B%7D","adServer" :"cs","campaignId" :  "9140","arid" :"667db31d7e15477ebe5f1eb8161ba0e8","placementId": "589e332a-17d0-4382-b320-05e6f4ddc521","size" :{"width": "300px","height" : "250px"},"allowedSizes" :[{"width":"300px","height":"250px"},{"width":"100%","height":"250px"}],"ignoreDefaultAllowedSize": false,"allowedDomains" :  [],"aanParams" :   "site%3Damazon.in%3Bpt%3DGateway%3Bslot%3Dright-2%3Bpid%3D0%3Barid%3D667db31d7e15477ebe5f1eb8161ba0e8","loadAfter" :   "criticalFeature","extraDelay" :  0,"iframeExtraStyle": "display:block;margin-left:auto;margin-right:auto;","iframeClass":  "","adPixels": [],"aaxInstrPixelUrl": "","serverSideFetchAd": "false","enableAdBlockerDetector": false,"disableResizeFunc": true,"fallbackStaticAdImgUrl": "https://m.media-amazon.com/images/G/31/img19/AMS/Houseads/Laptops-Sept2019._CB436595915_.jpg","fallbackStaticAdClickUrl": "https://www.amazon.in/Laptops/b?ie=UTF8&node=1375424031&ref_=sd_allcat_sbc_mobcomp_laptops","fallbackStaticAdExtraStyle": "width=100% height=auto alt=\"Laptops\"","adFeedbackInfo": {"endPoint": "/gp/aq-feedback/lazyLoad/handler/af-link-handler.html","boolFeedback": true,"slugText": "Sponsored","adFeedbackOnTop":false},"adPlacementMetaData": {"pageUrl": "aHR0cHM6Ly93d3cuYW1hem9uLmluL3Nob3BwaW5nUG9ydGFsL2Rlc2t0b3A/Jl9lbmNvZGluZz1VVEY4JnRhZz12cGVkMWEtMjEmbGlua0NvZGU9dXIyJmxpbmtJZD0xZjk0ZTdjMmJiZTBjNDc2YzFkNDE4YWRiM2E2OWQ3NCZjYW1wPTM2MzgmY3JlYXRpdmU9MjQ2MzA=","adElementId": "ape_Gateway_right-2_desktop_placement","pageType": "Gateway","slotName": "right-2"},"adCreativeMetaData": {"adNetwork": "cs"},"advertisementStyle": {"position": "absolute","top": "2px","right": "0px","display": "inline-block","font": "normal 11px Arial","color": "grey"},"feedbackDivStyle": {"position":"relative","height":"14px"},"viewabilityStandards": [{"p": 0, "t": 0, "def": "amzn"}, {"p": 50, "t": 1, "def": "iab"}, {"p": 100, "t": 1, "def": "groupm"}],"ajaxWeblabTriggerId": "","abpStatus": "0","abpAcceptable": "true","disableAdReporterSlot": "false","programIdsToCollapse": [],"allowlistedCustomMessageEvents": ["openPsAdPopover", "openATCModal", "setPartner", "sendMetrics", "wrap"],"allowlistedQueryParamKeys": ["sf-overrideVariationId", "sf-overridePredictorId", "sf-forceFailure"],"DAsfUrl":"https://images-eu.ssl-images-amazon.com/images/S/apesafeframe/ape/sf/desktop/DAsf-1.50.09b8a87.js"}'
                            aria-hidden="true"></div>
                        <script>
                            (function() {
                                function a(d, e) {
                                    if (window.addEventListener) {
                                        window.addEventListener(d, e, false);
                                    } else {
                                        if (window.attachEvent) {
                                            window.attachEvent("on" + d, e);
                                        }
                                    }
                                }

                                function c(d, e) {
                                    if (window.removeEventListener) {
                                        window.removeEventListener(d, e, false);
                                    } else {
                                        if (window.detachEvent) {
                                            window.detachEvent("on" + d, e);
                                        }
                                    }
                                }
                                var b = function() {
                                    (function() {
                                        (function(j, m) {
                                            j.sfLogErrors = j.sfLogErrors || false;
                                            var o = o || function(s, r) {
                                                r = r || new Error(s);
                                                if (j.ue && typeof ue.count == "function") {
                                                    ue.count("adplacements:safeFrameError", 1);
                                                }
                                                if (!j.sfLogErrors) {
                                                    return;
                                                }
                                                if (j.ueLogError) {
                                                    j.ueLogError(r, {
                                                        logLevel: "ERROR",
                                                        attribution: "APE-safeframe",
                                                        message: s + " "
                                                    });
                                                } else {
                                                    if (typeof console !== "undefined" && console.error) {
                                                        console.error(s, r);
                                                    }
                                                }
                                            };
                                            j.aanParams = j.aanParams || {};
                                            j.aanParams["right-2"] = "site=amazon.in;pt=Gateway;slot=right-2;pid=0;arid=667db31d7e15477ebe5f1eb8161ba0e8";
                                            j["right-2"] = {};
                                            j["right-2"].adStartTime = (new Date()).getTime();

                                            function d() {
                                                return j.innerHeight || m.documentElement.clientHeight;
                                            }

                                            function g() {
                                                return j.innerWidth || m.documentElement.clientWidth;
                                            }

                                            function e(t, r, s) {
                                                if (t > 0) {
                                                    return (s > t);
                                                } else {
                                                    return (r > 0);
                                                }
                                            }
                                            var f = function() {
                                                return (Date.now ? Date.now() : new Date().getTime());
                                            };
                                            throttle = function(s, u, y) {
                                                var r, w, z;
                                                var x = null;
                                                var v = 0;
                                                if (!y) {
                                                    y = {};
                                                }
                                                var t = function() {
                                                    v = y.leading === false ? 0 : f();
                                                    x = null;
                                                    z = s.apply(r, w);
                                                    if (!x) {
                                                        r = w = null;
                                                    }
                                                };
                                                return function() {
                                                    var B = f();
                                                    if (!v && y.leading === false) {
                                                        v = B;
                                                    }
                                                    var A = u - (B - v);
                                                    r = this;
                                                    w = arguments;
                                                    if (A <= 0 || A > u) {
                                                        if (x) {
                                                            clearTimeout(x);
                                                            x = null;
                                                        }
                                                        v = B;
                                                        z = s.apply(r, w);
                                                        if (!x) {
                                                            r = w = null;
                                                        }
                                                    } else {
                                                        if (!x && y.trailing !== false) {
                                                            x = setTimeout(t, A);
                                                        }
                                                    }
                                                    return z;
                                                };
                                            };

                                            function l(u, w, v, r) {
                                                try {
                                                    var t = m.getElementById(u).getBoundingClientRect();
                                                    if (e(t.top, t.bottom, d()) && e(t.left, t.right, g())) {
                                                        if (typeof uet == "function") {
                                                            uet("bb", "adplacements:viewablelatency:" + w, {
                                                                wb: 1
                                                            });
                                                            if (v) {
                                                                uet("bb", "adplacements:viewablelatency:" + v, {
                                                                    wb: 1
                                                                });
                                                            }
                                                        }
                                                        if (typeof uex == "function" && j.ue && typeof ue.count == "function") {
                                                            if (j.apeViewableLatencyTrackers[r].loaded) {
                                                                uex("ld", "adplacements:viewablelatency:" + w, {
                                                                    wb: 1
                                                                });
                                                                if (v) {
                                                                    uex("ld", "adplacements:viewablelatency:" + v, {
                                                                        wb: 1
                                                                    });
                                                                }
                                                                ue.count("adplacements:htmlviewed:loaded:" + w, 1);
                                                                if (v) {
                                                                    ue.count("adplacements:htmlviewed:loaded:" + v, 1);
                                                                }
                                                            }
                                                            ue.count("adplacements:htmlviewed:" + w, 1);
                                                            if (v) {
                                                                ue.count("adplacements:htmlviewed:" + v, 1);
                                                            }
                                                        }
                                                        j.apeViewableLatencyTrackers[r].viewed = true;
                                                        if (j.apeViewableLatencyTrackers[r].tracker) {
                                                            c("scroll", j.apeViewableLatencyTrackers[r].tracker);
                                                            c("resize", j.apeViewableLatencyTrackers[r].tracker);
                                                        }
                                                    }
                                                } catch (s) {
                                                    j.apeViewableLatencyTrackers[r].valid = false;
                                                }
                                            }
                                            try {
                                                j.apeViewableLatencyTrackers = j.apeViewableLatencyTrackers || {};
                                                var q = "ape_Gateway_right-2_desktop_placement";
                                                var p = "Gateway_right-2_desktop".replace(/\_/g, ":");
                                                var h = "589e332a-17d0-4382-b320-05e6f4ddc521";
                                                var i = "667db31d7e15477ebe5f1eb8161ba0e8";
                                                j.apeViewableLatencyTrackers[i] = j.apeViewableLatencyTrackers[i] || {};
                                                j.apeViewableLatencyTrackers[i].valid = true;
                                                l(q, p, h, i);
                                                if (j.apeViewableLatencyTrackers[i].valid && !j.apeViewableLatencyTrackers[i].viewed) {
                                                    j.apeViewableLatencyTrackers[i].tracker = throttle(function() {
                                                        l(q, p, h, i);
                                                    }, 20);
                                                    a("scroll", j.apeViewableLatencyTrackers[i].tracker);
                                                    a("resize", j.apeViewableLatencyTrackers[i].tracker);
                                                }
                                            } catch (k) {
                                                if (j.apeViewableLatencyTrackers && j.apeViewableLatencyTrackers["667db31d7e15477ebe5f1eb8161ba0e8"]) {
                                                    j.apeViewableLatencyTrackers["667db31d7e15477ebe5f1eb8161ba0e8"].valid = false;
                                                }
                                                o("Error initializing viewable latency instrumentation", k);
                                            }
                                            try {
                                                if (j.DAsf) {
                                                    j.DAsf.loadAds();
                                                } else {
                                                    var n = m.createElement("script");
                                                    n.type = "text/javascript";
                                                    n.async = true;
                                                    n.charset = "utf-8";
                                                    n.src = "https://images-eu.ssl-images-amazon.com/images/S/apesafeframe/ape/sf/desktop/DAsf-1.50.09b8a87.js?csm_attribution=APE-SafeFrame";
                                                    n.onerror = function() {
                                                        o("Error loading SafeFrame library");
                                                    };
                                                    n.setAttribute("crossorigin", "anonymous");
                                                    (m.getElementsByTagName("head")[0] || m.getElementsByTagName("body")[0]).appendChild(n);
                                                    j.collectSafeframeRTD = Math.random() * 100 < 0;
                                                    if (j.collectSafeframeRTD) {
                                                        var n = m.createElement("script");
                                                        n.type = "text/javascript";
                                                        n.async = true;
                                                        n.charset = "utf-8";
                                                        n.src = "https://images-eu.ssl-images-amazon.com/images/S/apesafeframe/ape/sf/rtd/safeframeRtd-1.50.09b8a87.js";
                                                        n.onerror = function() {
                                                            o("Error loading SafeFrame RTD library");
                                                        };
                                                        n.setAttribute("crossorigin", "anonymous");
                                                        (m.getElementsByTagName("head")[0] || m.getElementsByTagName("body")[0]).appendChild(n);
                                                    }
                                                }
                                            } catch (k) {
                                                o("Error appending DAsf library", k);
                                            }
                                        }(window, document));
                                    })();
                                };
                                b();
                            })();
                        </script>
                    </div>
                </div>
                <hr data-display-at="smws" data-order-sm="4" data-order-ws="5" class="card-flow-row-break"></hr>
                <div id="desktop-grid-4" data-gwi="{&quot;visible&quot;:&quot;desktop-grid-4-visible&quot;,&quot;active&quot;:&quot;desktop-grid-4-active&quot;}" data-display-at="smws" data-order-ws="6" class="gw-col celwidget csm-placement-id-fd2e347e-7eff-4cea-a466-5cb6bedec740 desktop-gateway-atf_d551af95-0b67-49f9-9431-614171ec103d pd_rd_wg-mdvMf pd_rd_w-62GQk pd_rd_r-7d4e9ce0-60b9-49da-ac6d-f99c2f066535"
                    data-order-sm="7" data-pf_rd_p="fd2e347e-7eff-4cea-a466-5cb6bedec740" data-pd_rd_wg="mdvMf" data-pd_rd_w="62GQk" data-pd_rd_r="7d4e9ce0-60b9-49da-ac6d-f99c2f066535" data-ref_="pd_gw_unk">
                    <style>
                        .a-cardui.fluid-fat-image-link .a-cardui-body .center-image {
                            height: 100%;
                            width: 100%
                        }

                        .fluid-card {
                            -webkit-box-orient: vertical;
                            -webkit-box-direction: normal;
                            display: -webkit-box;
                            display: -ms-flexbox;
                            display: flex;
                            -ms-flex-direction: column;
                            flex-direction: column
                        }

                        .fluid-card.a-cardui .a-cardui-body {
                            -webkit-box-flex: 1;
                            -ms-flex-positive: 1;
                            flex-grow: 1;
                            height: 275px;
                            margin-bottom: 44px;
                            padding: 0 20px
                        }

                        .fluid-image-container {
                            height: 100%;
                            overflow: hidden;
                            position: relative;
                            width: 100%
                        }

                        .fluid-image-container img {
                            bottom: -9999px;
                            left: -9999px;
                            margin: auto;
                            position: absolute;
                            right: -9999px;
                            top: -9999px
                        }

                        .fluid-image-container .landscape-image {
                            height: 100%;
                            max-height: 100%;
                            max-width: none
                        }

                        .fluid-image-container .portrait-image {
                            max-height: none;
                            max-width: 100%;
                            width: 100%
                        }
                    </style>
                    <div id="eggSRPIXG-viwaO6XO54fQ" class="a-cardui fluid-fat-image-link fluid-card fluid-fat-image-link" data-a-card-type="basic">
                        <div class="a-cardui-header">
                            <h2 class="a-color-base headline truncate-2line">Explore top rated electronics &amp; accessories</h2>
                        </div>
                        <div class="a-cardui-body">
                            <a class="a-link-normal center-image aok-block image-window" href="/b?node=976419031">
                                <div class="a-section a-spacing-none fluid-image-container"><img alt="Explore top offers in electronics" src="https://images-eu.ssl-images-amazon.com/images/G/31/img21/CEPC/GW/Dashboard/V238940049_IN_PC_BAU_Edit_Creation_Laptops1x._SY304_CB655816069_.jpg" class="landscape-image"
                                        data-a-hires="https://images-eu.ssl-images-amazon.com/images/G/31/img21/CEPC/GW/Dashboard/V238940049_IN_PC_BAU_Edit_Creation_Laptops2X._SY608_CB655816069_.jpg" /></div>
                            </a>
                        </div>
                        <div class="a-cardui-footer"><a class="a-link-normal see-more truncate-1line" href="/b?node=976419031">See more</a></div>
                    </div>
                    <script>
                        (function(f) {
                            f(P._namespace('gwiAutoInstVisible'));
                        }(function(P) {
                            if (window.GWI) {
                                GWI.Card.autoInstVisible('eggSRPIXG-viwaO6XO54fQ');
                            }
                        }));
                    </script>
                    <script>
                        P.when('mix:fluid-fat-image-link').execute(function(cardModule) {
                            cardModule.init('eggSRPIXG-viwaO6XO54fQ');
                            if (window.GWI) {
                                window.GWI.Card.autoInstActive('eggSRPIXG-viwaO6XO54fQ');
                            }
                        });
                    </script>
                </div>
                <div id="desktop-grid-5" data-gwi="{&quot;visible&quot;:&quot;desktop-grid-5-visible&quot;,&quot;active&quot;:&quot;desktop-grid-5-active&quot;}" data-display-at="smws" data-order-ws="7" class="gw-col celwidget csm-placement-id-f219e9de-ad4e-4f7a-a707-f1e74c00a373 desktop-gateway-atf_2b8cfdbb-f432-4191-ae16-b905595e7985 pd_rd_wg-mdvMf pd_rd_w-dQ6Dl pd_rd_r-7d4e9ce0-60b9-49da-ac6d-f99c2f066535"
                    data-order-sm="8" data-pf_rd_p="f219e9de-ad4e-4f7a-a707-f1e74c00a373" data-pd_rd_wg="mdvMf" data-pd_rd_w="dQ6Dl" data-pd_rd_r="7d4e9ce0-60b9-49da-ac6d-f99c2f066535" data-ref_="pd_gw_unk">
                    <div id="OsbHw-mdeHDmzFPIgi7YiQ" class="a-cardui fluid-quad-card fluid-card fluid-quad-image-label fluid-quad-image-label" data-a-card-type="basic">
                        <div class="a-cardui-header">
                            <h2 class="a-color-base headline truncate-2line">Trending now cooling appliances | Up to 40% off</h2>
                        </div>
                        <div class="a-cardui-body">
                            <div class="a-section a-spacing-small grid-row-1">
                                <div class="a-section a-spacing-none quadrant-container quadrant-container-0">
                                    <a aria-label="Window ACs | Starting ???17,999" class="a-link-normal image-redirect aok-block image-window" href="/s?i=kitchen&amp;bbn=3474656031&amp;rh=n%3A976442031%2Cn%3A976443031%2Cn%3A1380263031%2Cn%3A3474656031%2Cp_85%3A10440599031%2Cp_n_feature_thirteen_browse-bin%3A2753047031">
                                        <div class="a-section a-spacing-none fluid-image-container"><img alt="Window ACs | Starting ???17,999" src="https://images-eu.ssl-images-amazon.com/images/G/31/IMG15/Irfan/MWO_CC_-_March_186x116_02._SY116_CB657184511_.jpg" class="landscape-image" data-a-hires="https://images-eu.ssl-images-amazon.com/images/G/31/IMG15/Irfan/MWO_CC_-_March_372x232_02._SY232_CB657184511_.jpg"
                                            /></div>
                                        <div class="a-section a-spacing-none image-label truncate-2line"><span class="a-size-small a-color-base aok-align-center aok-inline-block">Window ACs | Starting ???17,999</span></div>
                                    </a>
                                </div>
                                <div class="a-section a-spacing-none quadrant-container quadrant-container-1">
                                    <a aria-label="Split ACs | Starting ???23,499" class="a-link-normal image-redirect aok-block image-window" href="/b?node=22176183031">
                                        <div class="a-section a-spacing-none fluid-image-container"><img alt="Split ACs | Starting ???23,499" src="https://images-eu.ssl-images-amazon.com/images/G/31/IMG15/Irfan/MWO_CC_-_March_186x116_01._SY116_CB657184511_.jpg" class="landscape-image" data-a-hires="https://images-eu.ssl-images-amazon.com/images/G/31/IMG15/Irfan/MWO_CC_-_March_372x232_01._SY232_CB657184511_.jpg"
                                            /></div>
                                        <div class="a-section a-spacing-none image-label truncate-2line"><span class="a-size-small a-color-base aok-align-center aok-inline-block">Split ACs | Starting ???23,499</span></div>
                                    </a>
                                </div>
                            </div>
                            <div class="a-section grid-row-2">
                                <div class="a-section a-spacing-none quadrant-container quadrant-container-0">
                                    <a aria-label="Single doors | Starting ???10,190" class="a-link-normal image-redirect aok-block image-window" href="/b?node=22902922031">
                                        <div class="a-section a-spacing-none fluid-image-container"><img alt="Single doors | Starting ???10,190" src="https://images-eu.ssl-images-amazon.com/images/G/31/IMG15/Irfan/MWO_CC_-_March_186x116_03._SY116_CB657184511_.jpg" class="landscape-image" data-a-hires="https://images-eu.ssl-images-amazon.com/images/G/31/IMG15/Irfan/MWO_CC_-_March_372x232_03._SY232_CB657184511_.jpg"
                                            /></div>
                                        <div class="a-section a-spacing-none image-label truncate-2line"><span class="a-size-small a-color-base aok-align-center aok-inline-block">Single doors | Starting ???10,190</span></div>
                                    </a>
                                </div>
                                <div class="a-section a-spacing-none quadrant-container quadrant-container-1">
                                    <a aria-label="Double doors | Starting ???17,990" class="a-link-normal image-redirect aok-block image-window" href="/s?i=kitchen&amp;bbn=1380365031&amp;rh=n%3A1380365031%2Cp_n_feature_thirteen_browse-bin%3A2753043031%7C2753045031%2Cp_n_feature_seven_browse-bin%3A1480497031%7C1480498031%7C1480499031%7C1480500031">
                                        <div class="a-section a-spacing-none fluid-image-container"><img alt="Double doors | Starting ???17,990" src="https://images-eu.ssl-images-amazon.com/images/G/31/IMG15/Irfan/MWO_CC_-_March_186x116_04._SY116_CB657184511_.jpg" class="landscape-image" data-a-hires="https://images-eu.ssl-images-amazon.com/images/G/31/IMG15/Irfan/MWO_CC_-_March_372x232_04._SY232_CB657184511_.jpg"
                                            /></div>
                                        <div class="a-section a-spacing-none image-label truncate-2line"><span class="a-size-small a-color-base aok-align-center aok-inline-block">Double doors | Starting ???17,990</span></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="a-cardui-footer"><a aria-label="Trending now cooling appliances | Up to 40% off - See more deals" class="a-link-normal see-more truncate-1line" href="/b?ie=UTF8&amp;node=1380263031">See more deals</a></div>
                    </div>
                    <script>
                        (function(f) {
                            f(P._namespace('gwiAutoInstVisible'));
                        }(function(P) {
                            if (window.GWI) {
                                GWI.Card.autoInstVisible('OsbHw-mdeHDmzFPIgi7YiQ');
                            }
                        }));
                    </script>
                    <script>
                        P.when('mix:fluid-quad-image-label').execute(function(cardModule) {
                            cardModule.init('OsbHw-mdeHDmzFPIgi7YiQ');
                            if (window.GWI) {
                                window.GWI.Card.autoInstActive('OsbHw-mdeHDmzFPIgi7YiQ');
                            }
                        });
                    </script>
                </div>
                <div id="desktop-grid-6" data-gwi="{&quot;visible&quot;:&quot;desktop-grid-6-visible&quot;,&quot;active&quot;:&quot;desktop-grid-6-active&quot;}" data-display-at="smws" data-order-ws="8" class="gw-col celwidget csm-placement-id-e8f087cd-4d61-4056-b2f2-9d2546fd51d6 desktop-gateway-atf_5ce67301-cb60-44fd-9f9d-db86c37b3438 pd_rd_wg-mdvMf pd_rd_w-JtGcO pd_rd_r-7d4e9ce0-60b9-49da-ac6d-f99c2f066535"
                    data-order-sm="11" data-pf_rd_p="e8f087cd-4d61-4056-b2f2-9d2546fd51d6" data-pd_rd_wg="mdvMf" data-pd_rd_w="JtGcO" data-pd_rd_r="7d4e9ce0-60b9-49da-ac6d-f99c2f066535" data-ref_="pd_gw_unk">
                    <div id="5cjDQaOBhp-MrIu8flod9Q" class="a-cardui fluid-quad-card fluid-card fluid-quad-image-label fluid-quad-image-label" data-a-card-type="basic">
                        <div class="a-cardui-header">
                            <h2 class="a-color-base headline truncate-2line">Styles for Men | Up to 70% off</h2>
                        </div>
                        <div class="a-cardui-body">
                            <div class="a-section a-spacing-small grid-row-1">
                                <div class="a-section a-spacing-none quadrant-container quadrant-container-0">
                                    <a aria-label="Clothing" class="a-link-normal image-redirect aok-block image-window" href="/s/ref=mega_sv_s23_2_1_1_1?rh=i%3Aapparel%2Cn%3A1968024031&amp;ie=UTF8&amp;lo=apparel">
                                        <div class="a-section a-spacing-none fluid-image-container"><img alt="Clothing" src="https://images-eu.ssl-images-amazon.com/images/G/31/img21/Fashion/Gateway/Mens_fashion/1._SY116_CB656503003_.jpg" class="landscape-image" data-a-hires="https://images-eu.ssl-images-amazon.com/images/G/31/img21/Fashion/Gateway/Mens_fashion/01._SY232_CB656503011_.jpg"
                                            /></div>
                                        <div class="a-section a-spacing-none image-label truncate-2line"><span class="a-size-small a-color-base aok-align-center aok-inline-block">Clothing</span></div>
                                    </a>
                                </div>
                                <div class="a-section a-spacing-none quadrant-container quadrant-container-1">
                                    <a aria-label="Footwear" class="a-link-normal image-redirect aok-block image-window" href="/b?node=1983518031">
                                        <div class="a-section a-spacing-none fluid-image-container"><img alt="Footwear" src="https://images-eu.ssl-images-amazon.com/images/G/31/img21/Fashion/Gateway/Mens_fashion/2._SY116_CB656503003_.jpg" class="landscape-image" data-a-hires="https://images-eu.ssl-images-amazon.com/images/G/31/img21/Fashion/Gateway/Mens_fashion/02._SY232_CB656503011_.jpg"
                                            /></div>
                                        <div class="a-section a-spacing-none image-label truncate-2line"><span class="a-size-small a-color-base aok-align-center aok-inline-block">Footwear</span></div>
                                    </a>
                                </div>
                            </div>
                            <div class="a-section grid-row-2">
                                <div class="a-section a-spacing-none quadrant-container quadrant-container-0">
                                    <a aria-label="Watches" class="a-link-normal image-redirect aok-block image-window" href="/b?node=2563504031">
                                        <div class="a-section a-spacing-none fluid-image-container"><img alt="Watches" src="https://images-eu.ssl-images-amazon.com/images/G/31/img21/Fashion/Gateway/Mens_fashion/3._SY116_CB656503003_.jpg" class="landscape-image" data-a-hires="https://images-eu.ssl-images-amazon.com/images/G/31/img21/Fashion/Gateway/Mens_fashion/03._SY232_CB656503011_.jpg"
                                            /></div>
                                        <div class="a-section a-spacing-none image-label truncate-2line"><span class="a-size-small a-color-base aok-align-center aok-inline-block">Watches</span></div>
                                    </a>
                                </div>
                                <div class="a-section a-spacing-none quadrant-container quadrant-container-1">
                                    <a aria-label="BAGS &amp; LUGGAGE" class="a-link-normal image-redirect aok-block image-window" href="/b?node=2454169031">
                                        <div class="a-section a-spacing-none fluid-image-container"><img alt="BAGS &amp; LUGGAGE" src="https://images-eu.ssl-images-amazon.com/images/G/31/img21/Fashion/Gateway/Mens_fashion/4._SY116_CB656503003_.jpg" class="landscape-image" data-a-hires="https://images-eu.ssl-images-amazon.com/images/G/31/img21/Fashion/Gateway/Mens_fashion/04._SY232_CB656503011_.jpg"
                                            /></div>
                                        <div class="a-section a-spacing-none image-label truncate-2line"><span class="a-size-small a-color-base aok-align-center aok-inline-block">Bags &amp; luggage</span></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="a-cardui-footer"><a aria-label="Styles for Men | Up to 70% off - View all offers" class="a-link-normal see-more truncate-1line" href="/b/ref=sl_gw_feb20?node=6648217031">View all offers</a></div>
                    </div>
                    <script>
                        (function(f) {
                            f(P._namespace('gwiAutoInstVisible'));
                        }(function(P) {
                            if (window.GWI) {
                                GWI.Card.autoInstVisible('5cjDQaOBhp-MrIu8flod9Q');
                            }
                        }));
                    </script>
                    <script>
                        P.when('mix:fluid-quad-image-label').execute(function(cardModule) {
                            cardModule.init('5cjDQaOBhp-MrIu8flod9Q');
                            if (window.GWI) {
                                window.GWI.Card.autoInstActive('5cjDQaOBhp-MrIu8flod9Q');
                            }
                        });
                    </script>
                </div>
                <div id="desktop-grid-7" data-gwi="{&quot;visible&quot;:&quot;desktop-grid-7-visible&quot;,&quot;active&quot;:&quot;desktop-grid-7-active&quot;}" data-display-at="smws" data-order-ws="9" class="gw-col gw-fixed-col celwidget csm-placement-id-e64bde49-2469-47ef-bbe3-15305c7be604 desktop-gateway-atf_21d972d4-ea19-4a18-b261-7904f8410bbb pd_rd_wg-mdvMf pd_rd_w-wv6Fu pd_rd_r-7d4e9ce0-60b9-49da-ac6d-f99c2f066535"
                    data-order-sm="12" data-pf_rd_p="e64bde49-2469-47ef-bbe3-15305c7be604" data-pd_rd_wg="mdvMf" data-pd_rd_w="wv6Fu" data-pd_rd_r="7d4e9ce0-60b9-49da-ac6d-f99c2f066535" data-ref_="pd_gw_unk">
                    <div id="OjjGDlDMnyBi1LF6jOgsiw" class="a-cardui fluid-quad-card fluid-card fluid-quad-image-label fluid-quad-image-label" data-a-card-type="basic">
                        <div class="a-cardui-header">
                            <h2 class="a-color-base headline truncate-2line">Revamp your home in style</h2>
                        </div>
                        <div class="a-cardui-body">
                            <div class="a-section a-spacing-small grid-row-1">
                                <div class="a-section a-spacing-none quadrant-container quadrant-container-0">
                                    <a aria-label="Bedsheets, curtains &amp; more" class="a-link-normal image-redirect aok-block image-window" href="/b?node=1380442031">
                                        <div class="a-section a-spacing-none fluid-image-container"><img alt="Bedsheets, curtains &amp; more" src="https://images-eu.ssl-images-amazon.com/images/G/31/IMG20/Home/2021/GW/MSO/HF_PC_low._SY116_CB657403594_.jpg" class="landscape-image" data-a-hires="https://images-eu.ssl-images-amazon.com/images/G/31/IMG20/Home/2021/GW/MSO/B08S7HP82V_high._SY232_CB657403594_.jpg"
                                            /></div>
                                        <div class="a-section a-spacing-none image-label truncate-2line"><span class="a-size-small a-color-base aok-align-center aok-inline-block">Bedsheets, curtains &amp; more</span></div>
                                    </a>
                                </div>
                                <div class="a-section a-spacing-none quadrant-container quadrant-container-1">
                                    <a aria-label="Home decoration" class="a-link-normal image-redirect aok-block image-window" href="/b?node=1380374031">
                                        <div class="a-section a-spacing-none fluid-image-container"><img alt="Home decoration" src="https://images-eu.ssl-images-amazon.com/images/G/31/IMG20/Home/2021/GW/MSO/HD_PC_low._SY116_CB657403594_.jpg" class="landscape-image" data-a-hires="https://images-eu.ssl-images-amazon.com/images/G/31/IMG20/Home/2021/GW/MSO/B082PP6MS1_high._SY232_CB657403594_.jpg"
                                            /></div>
                                        <div class="a-section a-spacing-none image-label truncate-2line"><span class="a-size-small a-color-base aok-align-center aok-inline-block">Home decoration</span></div>
                                    </a>
                                </div>
                            </div>
                            <div class="a-section grid-row-2">
                                <div class="a-section a-spacing-none quadrant-container quadrant-container-0">
                                    <a aria-label="Home storage" class="a-link-normal image-redirect aok-block image-window" href="/b?node=1380510031">
                                        <div class="a-section a-spacing-none fluid-image-container"><img alt="Home storage" src="https://images-eu.ssl-images-amazon.com/images/G/31/IMG20/Home/2021/GW/MSO/HSO_PC_low._SY116_CB657403594_.jpg" class="landscape-image" data-a-hires="https://images-eu.ssl-images-amazon.com/images/G/31/IMG20/Home/2021/GW/MSO/B07CSX8RKC_high._SY232_CB657403594_.jpg"
                                            /></div>
                                        <div class="a-section a-spacing-none image-label truncate-2line"><span class="a-size-small a-color-base aok-align-center aok-inline-block">Home storage</span></div>
                                    </a>
                                </div>
                                <div class="a-section a-spacing-none quadrant-container quadrant-container-1">
                                    <a aria-label="Lighting solutions" class="a-link-normal image-redirect aok-block image-window" href="/b?node=1380485031">
                                        <div class="a-section a-spacing-none fluid-image-container"><img alt="Lighting solutions" src="https://images-eu.ssl-images-amazon.com/images/G/31/IMG20/Home/2021/GW/MSO/IL_PC_low._SY116_CB657403594_.jpg" class="landscape-image" data-a-hires="https://images-eu.ssl-images-amazon.com/images/G/31/IMG20/Home/2021/GW/MSO/B08DNS7Y9J_high._SY232_CB657403594_.jpg"
                                            /></div>
                                        <div class="a-section a-spacing-none image-label truncate-2line"><span class="a-size-small a-color-base aok-align-center aok-inline-block">Lighting solutions</span></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="a-cardui-footer"><a aria-label="Revamp your home in style - Explore all" class="a-link-normal see-more truncate-1line" href="/b?node=12414705031">Explore all</a></div>
                    </div>
                    <script>
                        (function(f) {
                            f(P._namespace('gwiAutoInstVisible'));
                        }(function(P) {
                            if (window.GWI) {
                                GWI.Card.autoInstVisible('OjjGDlDMnyBi1LF6jOgsiw');
                            }
                        }));
                    </script>
                    <script>
                        P.when('mix:fluid-quad-image-label').execute(function(cardModule) {
                            cardModule.init('OjjGDlDMnyBi1LF6jOgsiw');
                            if (window.GWI) {
                                window.GWI.Card.autoInstActive('OjjGDlDMnyBi1LF6jOgsiw');
                            }
                        });
                    </script>
                </div>
                <hr data-display-at="smws" data-order-sm="10" data-order-ws="10" class="card-flow-row-break"></hr>
                <div data-display-at="sm" class="gw-col celwidget" data-order-sm="13">
                    <div id="MTfr-UXYhZdIPT6UUndGOw" class="a-cardui fluid-quad-card fluid-card fluid-quad-image-label fluid-quad-image-label" data-a-card-type="basic">
                        <div class="a-cardui-header">
                            <h2 class="a-color-base headline truncate-2line">Everyday essentials</h2>
                        </div>
                        <div class="a-cardui-body">
                            <div class="a-section a-spacing-small grid-row-1">
                                <div class="a-section a-spacing-none quadrant-container quadrant-container-0">
                                    <a aria-label="Cleaning essentials" class="a-link-normal image-redirect aok-block image-window" href="/b?node=21524334031">
                                        <div class="a-section a-spacing-none fluid-image-container"><img alt="Cleaning essentials" src="https://images-eu.ssl-images-amazon.com/images/G/31/img18/HPC/GW/Desktop-Qc-1x_4._SY116_CB431329535_.jpg" class="landscape-image" data-a-hires="https://images-eu.ssl-images-amazon.com/images/G/31/img18/HPC/GW/Desktop-Qc-2x_4._SY232_CB431329528_.jpg"
                                            /></div>
                                        <div class="a-section a-spacing-none image-label truncate-2line"><span class="a-size-small a-color-base aok-align-center aok-inline-block">Cleaning essentials</span></div>
                                    </a>
                                </div>
                                <div class="a-section a-spacing-none quadrant-container quadrant-container-1">
                                    <a aria-label="Immunity &amp; healthcare" class="a-link-normal image-redirect aok-block image-window" href="/b?node=21532829031">
                                        <div class="a-section a-spacing-none fluid-image-container"><img alt="Immunity &amp; healthcare" src="https://images-eu.ssl-images-amazon.com/images/G/31/img18/HPC/GW/Desktop-Qc-1x_1._SY116_CB431329533_.jpg" class="landscape-image" data-a-hires="https://images-eu.ssl-images-amazon.com/images/G/31/img18/HPC/GW/Desktop-Qc-2x_1._SY232_CB431329535_.jpg"
                                            /></div>
                                        <div class="a-section a-spacing-none image-label truncate-2line"><span class="a-size-small a-color-base aok-align-center aok-inline-block">Immunity &amp; healthcare</span></div>
                                    </a>
                                </div>
                            </div>
                            <div class="a-section grid-row-2">
                                <div class="a-section a-spacing-none quadrant-container quadrant-container-0">
                                    <a aria-label="Women&#x27;s personal care" class="a-link-normal image-redirect aok-block image-window" href="/b?node=21524333031">
                                        <div class="a-section a-spacing-none fluid-image-container"><img alt="Women&#x27;s personal care" src="https://images-eu.ssl-images-amazon.com/images/G/31/img18/HPC/GW/Desktop-Qc-1x_2._SY116_CB431329535_.jpg" class="landscape-image" data-a-hires="https://images-eu.ssl-images-amazon.com/images/G/31/img18/HPC/GW/Desktop-Qc-2x_2._SY232_CB431329535_.jpg"
                                            /></div>
                                        <div class="a-section a-spacing-none image-label truncate-2line"><span class="a-size-small a-color-base aok-align-center aok-inline-block">Women&#x27;s personal care</span></div>
                                    </a>
                                </div>
                                <div class="a-section a-spacing-none quadrant-container quadrant-container-1">
                                    <a aria-label="Men&#x27;s grooming" class="a-link-normal image-redirect aok-block image-window" href="/b?node=10743762031">
                                        <div class="a-section a-spacing-none fluid-image-container"><img alt="Men&#x27;s grooming" src="https://images-eu.ssl-images-amazon.com/images/G/31/img18/HPC/GW/Desktop-Qc-1x_3._SY116_CB431329535_.jpg" class="landscape-image" data-a-hires="https://images-eu.ssl-images-amazon.com/images/G/31/img18/HPC/GW/Desktop-Qc-2x_3._SY232_CB431329528_.jpg"
                                            /></div>
                                        <div class="a-section a-spacing-none image-label truncate-2line"><span class="a-size-small a-color-base aok-align-center aok-inline-block">Men&#x27;s grooming</span></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="a-cardui-footer"><a aria-label="Everyday essentials - See more" class="a-link-normal see-more truncate-1line" href="/b?node=1350384031">See more</a></div>
                    </div>
                    <script>
                        (function(f) {
                            f(P._namespace('gwiAutoInstVisible'));
                        }(function(P) {
                            if (window.GWI) {
                                GWI.Card.autoInstVisible('MTfr-UXYhZdIPT6UUndGOw');
                            }
                        }));
                    </script>
                    <script>
                        P.when('mix:fluid-quad-image-label').execute(function(cardModule) {
                            cardModule.init('MTfr-UXYhZdIPT6UUndGOw');
                            if (window.GWI) {
                                window.GWI.Card.autoInstActive('MTfr-UXYhZdIPT6UUndGOw');
                            }
                        });
                    </script>
                </div>
                <script>
                    P.when('GwGridLogic').execute('GridInit', function(g) {
                        window.uet && uet('cf', 'gwGridInit', {
                            wb: 1
                        });
                        window.uex && uex('ld', 'gwGridInit', {
                            wb: 1
                        });
                        g('#gw-card-layout').init();
                    });
                </script>
            </div>
            <!--&&&Portal&Delimiter&&&-->
            <!-- sp:end-feature:host-atf -->
            <!-- sp:feature:nav-btf -->
            <!-- NAVYAAN BTF START -->









            <style type="text/css">
                #csr-hcb-wrapper {
                    display: none;
                }

                .bia-item .bia-action-button {
                    display: inline-block;
                    height: 22px;
                    margin-top: 3px;
                    padding: 0px;
                    overflow: hidden;
                    text-align: center;
                    vertical-align: middle;
                    text-decoration: none;
                    color: #111;
                    font-family: Arial, sans-serif;
                    font-size: 11px;
                    font-style: normal;
                    font-weight: normal;
                    line-height: 19px;
                    cursor: pointer;
                    outline: 0;
                    border: 1px solid;
                    -webkit-border-radius: 3px 3px 3px 3px;
                    -moz-border-radius: 3px 3px 3px 3px;
                    border-radius: 3px 3px 3px 3px;
                    border-radius: 0\9;
                    border-color: #bcc1c8 #bababa #adb2bb;
                    background: #eff0f3;
                    background: -moz-linear-gradient(top, #f7f8fa, #e7e9ec);
                    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #f7f8fa), color-stop(100%, #e7e9ec));
                    background: -webkit-linear-gradient(top, #f7f8fa, #e7e9ec);
                    background: -o-linear-gradient(top, #f7f8fa, #e7e9ec);
                    background: -ms-linear-gradient(top, #f7f8fa, #e7e9ec);
                    background: linear-gradient(top, #f7f8fa, #e7e9ec);
                    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f7f8fa', endColorstr='#e7e9ec', GradientType=0);
                    *zoom: 1;
                    -webkit-box-shadow: inset 0 1px 0 0 #fff;
                    -moz-box-shadow: inset 0 1px 0 0 #fff;
                    box-shadow: inset 0 1px 0 0 #fff;
                    box-sizing: border-box;
                }

                #bia-hcb-widget .a-button-text {
                    font-family: Arial, sans-serif !important;
                }

                #bia_content .a-icon-row {
                    display: none;
                }

                #bia-hcb-widget .a-icon-row {
                    display: none;
                }

                #bia_content {
                    width: 266px;
                }

                .nav-flyout-sidePanel {
                    width: 266px !important;
                }

                .aui-atc-button {
                    margin-top: 3px;
                    overflow: hidden;
                    color: #111;
                    font-family: Arial, sans-serif;
                    font-size: 11px;
                    font-style: normal;
                    font-weight: normal;
                }

                .bia-item .bia-action-button:hover {
                    border-color: #aeb4bd #adadad #9fa5af;
                    background: #e0e3e8;
                    background: -moz-linear-gradient(top, #e7eaf0, #d9dce1);
                    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #e7eaf0), color-stop(100%, #d9dce1));
                    background: -webkit-linear-gradient(top, #e7eaf0, #d9dce1);
                    background: -o-linear-gradient(top, #e7eaf0, #d9dce1);
                    background: -ms-linear-gradient(top, #e7eaf0, #d9dce1);
                    background: linear-gradient(top, #e7eaf0, #d9dce1);
                    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#e7eaf0', endColorstr='#d9dce1', GradientType=0);
                    *zoom: 1;
                    -webkit-box-shadow: 0 1px 3px rgba(255, 255, 255, 0.6) inset;
                    -moz-box-shadow: 0 1px 3px rgba(255, 255, 255, 0.6) inset;
                    box-shadow: 0 1px 3px rgba(255, 255, 255, 0.6) inset;
                }

                .bia-item .bia-action-button:active {
                    background-color: #dcdfe3;
                    -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2) inset;
                    -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2) inset;
                    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2) inset;
                }

                .bia-item .bia-action-button-disabled {
                    background: #f7f8fa;
                    color: #b7b7b7;
                    border-color: #e0e0e0;
                    box-shadow: none;
                    cursor: default;
                }

                .bia-item .bia-action-button-disabled:hover {
                    background: #f7f8fa;
                    color: #b7b7b7;
                    border-color: #e0e0e0;
                    box-shadow: none;
                    cursor: default;
                }

                .bia-action-button-inner {
                    border-bottom-color: #111111;
                    border-bottom-style: none;
                    border-bottom-width: 0px;
                    border-image-outset: 0px;
                    border-image-repeat: stretch;
                    border-image-slice: 100%;
                    border-image-width: 1;
                    border-left-color: #111111;
                    border-left-style: none;
                    border-left-width: 0px;
                    border-right-color: #111111;
                    border-right-style: none;
                    border-right-width: 0px;
                    border-top-color: #111111;
                    border-top-style: none;
                    border-top-width: 0px;
                    box-sizing: border-box;
                    display: block;
                    height: 20px;
                    line-height: 19px;
                    overflow: hidden;
                    position: relative;
                    padding: 0;
                    vertical-align: baseline;
                }

                .bia-action-inner {
                    border: 0;
                    display: inline;
                    font-size: 11px;
                    height: auto;
                    line-height: 19px;
                    padding: 0px 4px 0px 4px;
                    text-align: center;
                    width: auto;
                    white-space: nowrap;
                }

                .csr-content {
                    font-family: Arial, Verdana, Helvetica, sans-serif;
                    width: 220px;
                    line-height: 19px;
                }

                .bia-header {
                    font-size: 16px;
                    color: #E47911;
                    padding-bottom: 10px;
                }

                .bia-header-widget {
                    white-space: nowrap;
                    overflow: hidden;
                }

                .b2b-nav-header {
                    white-space: nowrap;
                    overflow: hidden;
                    margin-bottom: 18px;
                }

                .bia-space-right {
                    padding-right: 18px;
                    white-space: normal;
                    float: left;
                }

                .b2b-see-more-link a {
                    display: inline;
                    float: left;
                    margin-top: 3px;
                    margin-left: 3px;
                }

                .hcb-see-more-link a {
                    color: #333;
                    font-size: 13px;
                    text-decoration: none;
                    font-family: Arial, Verdana, Helvetica, sans-serif;
                }

                .bia-hcb-body {
                    overflow: hidden;
                }

                .bia-item {
                    width: 220px;
                    display: inline-block;
                    margin-bottom: 20px;
                }

                .bia-item-image {
                    float: left;
                    margin-right: 15px;
                    width: 75px;
                    height: 75px;
                }

                .bia-image {
                    max-height: 75px;
                    max-width: 75px;
                    border: 0;
                }

                .bia-item-data {
                    float: left;
                    width: 130px;
                }

                .bia-title {
                    line-height: 19px;
                    font-size: 13px;
                    max-height: 60px;
                    overflow: hidden;
                }

                .bia-link:link {
                    text-decoration: none;
                    font-family: Arial, Verdana, Helvetica, sans-serif;
                }

                .bia-link:visited {
                    text-decoration: none;
                    color: #004B91;
                }

                .bia-price-nav {
                    margin-top: -4px;
                    color: #800;
                    font-size: 12px;
                    vertical-align: bottom;
                }

                .bia-price-yorr {
                    margin-top: -8px;
                    color: #800;
                    font-size: 12px;
                    vertical-align: bottom;
                }

                .bia-price {
                    color: #800;
                    font-size: 12px;
                    vertical-align: bottom;
                }

                .bia-vpc-t1 {
                    color: #008a00;
                    font-size: 12px;
                    font-weight: bold;
                }

                .bia-vpc-t2 {
                    color: #008a00;
                    font-size: 12px;
                }

                .bia-vpc-t3 {
                    font-size: 12px;
                    line-height: 20px;
                }

                .bia-vpc-t3-badge {
                    color: #ffffff;
                    background-color: #e47911;
                    font-weight: normal;
                }

                .bia-vpc-t3-badge::before {
                    border-bottom: 10px solid #e47911;
                }

                .bia-vpc-t3-badge:after {
                    border-top: 10px solid #e47911;
                }

                .bia-ppu {
                    color: #800;
                    font-size: 10px;
                }

                .bia-prime-badge {
                    border: 0;
                    vertical-align: middle;
                }

                .bia-cart-action {
                    display: none;
                }

                .bia-cart-msg {
                    display: block;
                    font-family: Arial, Verdana, Helvetica, sans-serif;
                    line-height: 19px;
                }

                .bia-cart-icon {
                    background-image: url("https://images-eu.ssl-images-amazon.com/images/G/31/Recommendations/MissionExperience/BIA/bia-atc-confirm-icon.jpg");
                    display: inline-block;
                    width: 14px;
                    height: 13px;
                    top: 3px;
                    line-height: 19px;
                    position: relative;
                    vertical-align: top;
                }

                .bia-cart-success {
                    color: #090 !important;
                    display: inline-block;
                    margin: 0;
                    font-size: 13px;
                    font-style: normal;
                    font-weight: bold;
                    font-family: Arial, Verdana, Helvetica, sans-serif;
                }

                .bia-cart-title {
                    margin-bottom: 3px;
                }

                .bia-cart-form {
                    margin: 0px;
                }

                .bia-inline-cart-form {
                    margin: 0px;
                }

                .bia-cart-submit {
                    cursor: inherit;
                    left: 0;
                    top: 0;
                    line-height: 19px;
                    height: 100%;
                    width: 100%;
                    padding: 1px 6px 1px 6px;
                    position: absolute;
                    opacity: 0.01;
                    overflow: visible;
                    filter: alpha(opacity=1);
                    z-index: 20;
                }

                .bia-link-caret {
                    color: #e47911;
                }
            </style>




            <script type="text/javascript">
                (function($Nav) {
                    "use strict";

                    if (typeof $Nav === 'undefined' || $Nav === null || typeof $Nav.when !== 'function') {
                        return;
                    }
                    $Nav.when('$', 'data', 'flyout.yourAccount', 'sidepanel.csYourAccount',
                            'config')
                        .run("BuyitAgain-YourAccount-SidePanel",
                            function($, data, yaFlyout, csYourAccount, config) {
                                if (config.disableBuyItAgain) {
                                    return;
                                }
                                var render = function(data) {
                                    if (data.status) {
                                        var widgetHtml = data.widgetBegin +
                                            data.faceouts.join('') +
                                            data.widgetEnd;
                                        navbar.sidePanel({
                                            flyoutName: 'yourAccount',
                                            data: {
                                                html: widgetHtml
                                            }
                                        });
                                    }
                                };

                                var renderBuyItAgain = function(biaData) {
                                    if (csYourAccount) {
                                        csYourAccount.register(render, biaData);
                                    } else {
                                        render(biaData);
                                    }
                                };

                                yaFlyout.sidePanel.onData(function() {
                                    enableInlineAddToCart($);
                                    enableImpressionLogging($);

                                    P.when('A', 'p13n-sc-static-list').execute(function(A, StaticList) {
                                        var navContainer = A.$("#bia-hcb-widget");
                                        var navList = navContainer.find('.p13n-sc-static-list');
                                        A.$(navList).bind('truncateList', function() {
                                            var staticList = new StaticList(navList);
                                        });

                                        A.$(navList).trigger('truncateList');
                                    });

                                    if (window.P) {
                                        P.when('A', 'a-truncate').execute(function(A, truncate) {
                                            var truncateElements = A.$('.a-truncate');
                                            A.each(truncateElements, function(element) {
                                                truncate.get(element).update();
                                            });
                                        });
                                    }

                                });

                                yaFlyout.onRender(function() {
                                    $.ajax({
                                        url: '/gp/bia/external/bia-hcb-ajax-handler.html',
                                        data: {
                                            "biaHcbRid": "WMZVJ0QZ56QFCB33E37K"
                                        },
                                        dataType: 'json',
                                        timeout: 4 * 1000,
                                        success: renderBuyItAgain,
                                        error: function(jqXHR, textStatus, errorThrown) {}
                                    });
                                });


                                var updateNavCartQty = function(qty) {
                                    if (typeof window.navbar === 'object' && typeof window.navbar.setCartCount === 'function') {
                                        window.navbar.setCartCount(qty);
                                    }
                                };

                                var addToCart = function(params, callback) {
                                    $.ajax({
                                        url: '/gp/bia/external/bia-cart-ajax-handler.html',
                                        data: params,
                                        dataType: 'json',
                                        timeout: 2000,
                                        success: function(response) {
                                            callback(response);
                                        },
                                        error: function() {
                                            callback({
                                                ok: 0
                                            });
                                        }
                                    });
                                };

                                var enableInlineAddToCart = function($) {
                                    if ($(".bia-inline-cart-form").length === 0) {
                                        return;
                                    }

                                    var inlineAddToCartHandler = function(e) {
                                        e.preventDefault();

                                        var $target = $(e.target);
                                        var $item = $target.parents(".bia-item");
                                        var $submit = $item.find(".bia-cart-submit");
                                        var params = $target.attr('data-order');

                                        $submit.attr("disabled", true);
                                        $item.find(".bia-action-button").addClass("bia-action-button-disabled");

                                        addToCart(params,
                                            function(response) {
                                                if (response && response.ok && response.ok === '1') {
                                                    $item.find(".bia-faceout").hide();
                                                    $item.find(".bia-cart-action").show();
                                                    updateNavCartQty(response.numActiveItemsInCart);
                                                    //TODO: add metric
                                                } else {
                                                    $target.unbind("submit", inlineAddToCartHandler);
                                                    $submit.attr("disabled", false);
                                                    $submit.click();
                                                    //TODO: add metric
                                                }
                                            }
                                        );
                                    };

                                    $(".bia-inline-cart-form").bind("submit", inlineAddToCartHandler);
                                };

                                var enableImpressionLogging = function($) {

                                    var registerToLog = function(p13nLogger, callOnVisible) {
                                        var featureEl = $("#bia-hcb-widget");
                                        callOnVisible.register(featureEl, function() {
                                            p13nLogger.logAction({
                                                action: 'view',
                                                featureElement: featureEl,
                                                replicateAsinImpressions: true
                                            });
                                        });
                                    };

                                    AmazonUIPageJS.when('p13n-sc-logger', 'p13n-sc-call-on-visible')
                                        .execute(function(p13nLogger, callOnVisible) {
                                            registerToLog(p13nLogger, callOnVisible);
                                        });
                                };

                            });

                })(window.$Nav);
                //# sourceURL=bia-hcb-js.mi
            </script>


            <script type="text/javascript">
                window.$Nav && $Nav.when("data").run(function(data) {
                    data({
                        "accountListContent": {
                            "html": "<div id='nav-al-container'><div id='nav-al-signin'><div id='nav-flyout-ya-signin' class='nav-flyout-content nav-flyout-accessibility'><a href='https://www.amazon.in/ap/signin?openid.pape.max_auth_age=0&openid.return_to=https%3A%2F%2Fwww.amazon.in%2F%3F_encoding%3DUTF8%26_encoding%3DUTF8%26camp%3D3638%26creative%3D24630%26linkCode%3Dur2%26linkId%3D1f94e7c2bbe0c476c1d418adb3a69d74%26tag%3Dvped1a-21%26ref_%3Dnav_signin&openid.identity=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&openid.assoc_handle=inflex&openid.mode=checkid_setup&openid.claimed_id=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&openid.ns=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0&' rel='nofollow' class='nav-action-button' data-nav-role='signin' data-nav-ref='nav_signin'><span class='nav-action-inner'>Sign in</span></a><div id='nav-flyout-ya-newCust' class='nav_pop_new_cust nav-flyout-content nav-flyout-accessibility'>New customer? <a href='https://www.amazon.in/ap/register?openid.pape.max_auth_age=0&openid.return_to=https%3A%2F%2Fwww.amazon.in%2F%3F_encoding%3DUTF8%26_encoding%3DUTF8%26camp%3D3638%26creative%3D24630%26linkCode%3Dur2%26linkId%3D1f94e7c2bbe0c476c1d418adb3a69d74%26tag%3Dvped1a-21%26ref_%3Dnav_newcust&openid.identity=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&openid.assoc_handle=inflex&openid.mode=checkid_setup&openid.claimed_id=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&openid.ns=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0&' rel='nofollow' class='nav-a'>Start here.</a></div></div></div><div id='nav-al-wishlist' class='nav-al-column nav-tpl-itemList nav-flyout-content nav-flyout-accessibility'><div class='nav-title' id='nav-al-title'>Your Lists</div><a href='/gp/registry/wishlist?triggerElementID=createList&ref_=nav_ListFlyout_gno_createwl' class='nav-link nav-item'><span class='nav-text'>Create a Wish List</span></a> <a href='/gp/registry/search.html?type=wishlist&ref_=nav_ListFlyout_gno_listpop_find' class='nav-link nav-item'><span class='nav-text'>Find a Wish List</span></a> <a href='/wishlist/universal?ref_=nav_ListFlyout_gno_listpop_uwl' class='nav-link nav-item'><span class='nav-text'>Wish from Any Website</span></a> <a href='/baby-reg/homepage?ref_=nav_ListFlyout_gno_listpop_br' class='nav-link nav-item'><span class='nav-text'>Baby Wish List</span></a> <a href='/discover/?ref_=nav_ListFlyout_sbl' class='nav-link nav-item'><span class='nav-text'>Discover Your Style</span></a> <a href='/showroom?ref_=nav_ListFlyout_srm_your_desk_wl_in' class='nav-link nav-item'><span class='nav-text'>Explore Showroom</span></a></div><div id='nav-al-your-account' class='nav-al-column nav-template nav-flyout-content nav-tpl-itemList nav-flyout-accessibility'><div class='nav-title'>Your Account</div><a href='/gp/css/homepage.html?ref_=nav_AccountFlyout_ya' class='nav-link nav-item'><span class='nav-text'>Your Account</span></a> <a id='nav_prefetch_yourorders' href='/gp/css/order-history?ref_=nav_AccountFlyout_orders' class='nav-link nav-item'><span class='nav-text'>Your Orders</span></a> <a href='/gp/registry/wishlist?requiresSignIn=1&ref_=nav_AccountFlyout_wl' class='nav-link nav-item'><span class='nav-text'>Your Wish List</span></a> <a href='/gp/yourstore?ref_=nav_AccountFlyout_recs' class='nav-link nav-item'><span class='nav-text'>Your Recommendations</span></a> <a href='/gp/primecentral?ref_=nav_AccountFlyout_prime' class='nav-link nav-item'><span class='nav-text'>Your Prime Membership</span></a> <a href='/gp/redirect.html?location=https%3A%2F%2Fwww.primevideo.com%2F%3Fref_%3D_apv&source=nav_linktree&token=13D4F90D28CD96790B94E6091246BB1B2AE9FA05' class='nav-link nav-item'><span class='nav-text'>Your Prime Video</span></a> <a href='/auto-deliveries?ref_=nav_AccountFlyout_sns' class='nav-link nav-item'><span class='nav-text'>Your Subscribe & Save Items</span></a> <a href='/hz5/yourmembershipsandsubscriptions?ref_=nav_AccountFlyout_digital_subscriptions' class='nav-link nav-item'><span class='nav-text'>Memberships & Subscriptions</span></a> <a href='/gp/browse.html?node=21102587031&ref_=nav_ya_flyout_b2b_reg' class='nav-link nav-item'><span class='nav-text'>Your Amazon Business Account</span></a> <a href='/b/?node=2838698031&ld=AZINSOAYAFlyout&ref_=nav_AccountFlyout_sell' class='nav-link nav-item'><span class='nav-text'>Your Seller Account</span></a> <a href='/hz/mycd/myx?ref_=nav_AccountFlyout_myk' class='nav-link nav-item'><span class='nav-text'>Manage Your Content and Devices</span></a></div></div>"
                        },
                        "signinContent": {
                            "html": "<div id='nav-signin-tooltip'><a href='https://www.amazon.in/ap/signin?openid.pape.max_auth_age=0&openid.return_to=https%3A%2F%2Fwww.amazon.in%2F%3F_encoding%3DUTF8%26_encoding%3DUTF8%26camp%3D3638%26creative%3D24630%26linkCode%3Dur2%26linkId%3D1f94e7c2bbe0c476c1d418adb3a69d74%26tag%3Dvped1a-21%26ref_%3Dnav_custrec_signin&openid.identity=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&openid.assoc_handle=inflex&openid.mode=checkid_setup&openid.claimed_id=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&openid.ns=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0&' class='nav-action-button' data-nav-role='signin' data-nav-ref='nav_custrec_signin'><span class='nav-action-inner'>Sign in</span></a><div class='nav-signin-tooltip-footer'>New customer? <a href='https://www.amazon.in/ap/register?openid.pape.max_auth_age=0&openid.return_to=https%3A%2F%2Fwww.amazon.in%2F%3F_encoding%3DUTF8%26_encoding%3DUTF8%26camp%3D3638%26creative%3D24630%26linkCode%3Dur2%26linkId%3D1f94e7c2bbe0c476c1d418adb3a69d74%26tag%3Dvped1a-21%26ref_%3Dnav_custrec_newcust&openid.identity=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&openid.assoc_handle=inflex&openid.mode=checkid_setup&openid.claimed_id=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&openid.ns=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0&' class='nav-a'>Start here.</a></div></div>"
                        },
                        "templates": {
                            "itemList": "<# var hasColumns = (function () {  var checkColumns = function (_items) {    if (!_items) {      return false;    }    for (var i=0; i<_items.length; i++) {      if (_items[i].columnBreak || (_items[i].items && checkColumns(_items[i].items))) {        return true;      }    }    return false;  };  return checkColumns(items);}()); #><# if(hasColumns) { #>  <# if(items[0].image && items[0].image.src) { #>    <div class='nav-column nav-column-first nav-column-image'>  <# } else if (items[0].greeting) { #>    <div class='nav-column nav-column-first nav-column-greeting'>  <# } else { #>    <div class='nav-column nav-column-first'>  <# } #><# } #><# var renderItems = function(items) { #>  <# jQuery.each(items, function (i, item) { #>    <# if(hasColumns && item.columnBreak) { #>      <# if(item.image && item.image.src) { #>        </div><div class='nav-column nav-column-notfirst nav-column-break nav-column-image'>      <# } else if (item.greeting) { #>        </div><div class='nav-column nav-column-notfirst nav-column-break nav-column-greeting'>      <# } else { #>        </div><div class='nav-column nav-column-notfirst nav-column-break'>      <# } #>    <# } #>    <# if(item.dividerBefore) { #>      <div class='nav-divider'></div>    <# } #>    <# if(item.text || item.content) { #>      <# if(item.url) { #>        <a href='<#=item.url #>' class='nav-link      <# } else {#>        <span class='      <# } #>      <# if(item.panelKey) { #>        nav-hasPanel      <# } #>      <# if(item.items) { #>        nav-title      <# } #>      <# if(item.decorate == 'carat') { #>        nav-carat      <# } #>      <# if(item.decorate == 'nav-action-button') { #>        nav-action-button      <# } #>      nav-item'      <# if(item.extra) { #>        <#=item.extra #>      <# } #>      <# if(item.id) { #>        id='<#=item.id #>'      <# } #>      <# if(item.dataNavRole) { #>        data-nav-role='<#=item.dataNavRole #>'      <# } #>      <# if(item.dataNavRef) { #>        data-nav-ref='<#=item.dataNavRef #>'      <# } #>      <# if(item.panelKey) { #>        data-nav-panelkey='<#=item.panelKey #>'        role='navigation'        aria-label='<#=item.text#>'      <# } #>      <# if(item.subtextKey) { #>        data-nav-subtextkey='<#=item.subtextKey #>'      <# } #>      <# if(item.image && item.image.height > 16) { #>        style='line-height:<#=item.image.height #>px;'      <# } #>      >      <# if(item.decorate == 'carat') { #>        <i class='nav-icon'></i>      <# } #>      <# if(item.image && item.image.src) { #>        <img class='nav-image' src='<#=item.image.src #>' style='height:<#=item.image.height #>px; width:<#=item.image.width #>px;' />      <# } #>      <# if(item.text) { #>        <span class='nav-text<# if(item.classname) { #> <#=item.classname #><# } #>'><#=item.text#><# if(item.badgeText) { #>          <span class='nav-badge'><#=item.badgeText#></span>        <# } #></span>      <# } else if (item.content) { #>        <span class='nav-content'><# jQuery.each(item.content, function (j, cItem) { #><# if(cItem.url && cItem.text) { #><a href='<#=cItem.url #>' class='nav-a'><#=cItem.text #></a><# } else if (cItem.text) { #><#=cItem.text#><# } #><# }); #></span>      <# } #>      <# if(item.subtext) { #>        <span class='nav-subtext'><#=item.subtext #></span>      <# } #>      <# if(item.url) { #>        </a>      <# } else {#>        </span>      <# } #>    <# } #>    <# if(item.image && item.image.src) { #>      <# if(item.url) { #>        <a href='<#=item.url #>'>       <# } #>      <img class='nav-image'      <# if(item.id) { #>        id='<#=item.id #>'      <# } #>      src='<#=item.image.src #>' <# if (item.alt) { #> alt='<#= item.alt #>'<# } #>/>      <# if(item.url) { #>        </a>       <# } #>    <# } #>    <# if(item.items) { #>      <div class='nav-panel'> <# renderItems(item.items); #> </div>    <# } #>  <# }); #><# }; #><# renderItems(items); #><# if(hasColumns) { #>  </div><# } #>",
                            "subnav": "<# if (obj && obj.type === 'vertical') { #>  <# jQuery.each(obj.rows, function (i, row) { #>    <# if (row.flyoutElement === 'button') { #>      <div class='nav_sv_fo_v_button'        <# if (row.elementStyle) { #>          style='<#= row.elementStyle #>'        <# } #>      >        <a href='<#=row.url #>' class='nav-action-button nav-sprite'>          <#=row.text #>        </a>      </div>    <# } else if (row.flyoutElement === 'list' && row.list) { #>      <# jQuery.each(row.list, function (j, list) { #>        <div class='nav_sv_fo_v_column <#=(j === 0) ? 'nav_sv_fo_v_first' : '' #>'>          <ul class='<#=list.elementClass #>'>          <# jQuery.each(list.linkList, function (k, link) { #>            <# if (k === 0) { link.elementClass += ' nav_sv_fo_v_first'; } #>            <li class='<#=link.elementClass #>'>              <# if (link.url) { #>                <a href='<#=link.url #>' class='nav_a'><#=link.text #></a>              <# } else { #>                <span class='nav_sv_fo_v_span'><#=link.text #></span>              <# } #>            </li>          <# }); #>          </ul>        </div>      <# }); #>    <# } else if (row.flyoutElement === 'link') { #>      <# if (row.topSpacer) { #>        <div class='nav_sv_fo_v_clear'></div>      <# } #>      <div class='<#=row.elementClass #>'>        <a href='<#=row.url #>' class='nav_sv_fo_v_lmargin nav_a'>          <#=row.text #>        </a>      </div>    <# } #>  <# }); #><# } else if (obj) { #>  <div class='nav_sv_fo_scheduled'>    <#= obj #>  </div><# } #>",
                            "htmlList": "<# jQuery.each(items, function (i, item) { #>  <div class='nav-item'>    <#=item #>  </div><# }); #>"
                        }
                    })
                })
            </script>

            <script type="text/javascript">
                window.$Nav && $Nav.declare('config.flyoutURL', null);
                window.$Nav && $Nav.declare('btf.lite');
                window.$Nav && $Nav.declare('btf.full');
                window.$Nav && $Nav.declare('btf.exists');
                (window.AmazonUIPageJS ? AmazonUIPageJS : P).register('navCF');
            </script>




















            <form style="display: none;">
                <input type="hidden" id="rwol-display-called" value="0">
            </form>

            <script type="a-state" data-a-state="{&quot;key&quot;:&quot;rw-dynamic-modal-bootstrap&quot;}">{"origSessionId":"257-8400121-7204450","subPageType":null,"pageType":"Gateway","ASIN":null,"path":"/","isAUI":"1"}</script>



            <script>
                (window.AmazonUIPageJS ? AmazonUIPageJS : P).when('navCF').execute(function() {
                    (window.AmazonUIPageJS ? AmazonUIPageJS : P).load.js('https://images-eu.ssl-images-amazon.com/images/I/11VbV%2B%2BKhQL.js?AUIClients/RetailWebsiteOverlayAUIAssets');
                });
            </script>




            <!-- NAVYAAN BTF END -->
            <!-- sp:feature:host-btf -->
            <div id="gw-content-grid" class="a-section a-spacing-large">
                <div id="main-content" data-grid-breakpoint="ws" data-flow-dir="h" class="a-section a-spacing-none gw-card-layout">
                    <div id="desktop-1" data-gwi="{&quot;visible&quot;:&quot;desktop-1-visible&quot;,&quot;active&quot;:&quot;desktop-1-active&quot;}" data-col-span-ws="4" data-col-span-sm="3" data-order-ws="2" data-order-sm="2" data-display-at="smws" class="gw-col desktop-row gwi-row gw-widget-instrument gw-auto-height celwidget csm-placement-id-5c669f94-aee5-4b22-81f8-1d301ca2c6a3 desktop-gateway-btf_8c213253-6c93-458b-a832-17781df19788 pd_rd_wg-DuDJh pd_rd_w-akDPe pd_rd_r-f3c3b933-a933-48da-995b-0197caae93b0"
                        data-pf_rd_p="5c669f94-aee5-4b22-81f8-1d301ca2c6a3" data-pd_rd_wg="DuDJh" data-pd_rd_w="akDPe" data-pd_rd_r="f3c3b933-a933-48da-995b-0197caae93b0" data-ref_="pd_gw_unk">





























































































                        <div id="deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_" class="a-section a-spacing-none shogun-widget deals-shoveler aui-desktop fresh-shoveler">


                            <div class="a-section as-title-block">

                                <h2 class="as-title-block-left">
                                    <span class="a-color-base">
     Today???s Deals
     </span>
                                </h2>

                                <span class="as-title-block-right">
    <a aria-label="Today???s Deals - See all deals" class="a-link-normal" target="_blank" href="https://www.amazon.in:443/gp/redirect.html/ref=nav_topnav_deals?ie=UTF8&location=https%3A%2F%2Fwww.amazon.in%2Fgp%2Fgoldbox%3Fref%3Dnav_topnav_deals&source=standards&token=424D76FECCE2750383DF164C0AFF493CF1988B05&pf_rd_m=A1VBAL9TL5WCBF&pf_rd_s=&pf_rd_r=WMZVJ0QZ56QFCB33E37K&pf_rd_t=36701&pf_rd_p=5c669f94-aee5-4b22-81f8-1d301ca2c6a3&pf_rd_i=desktop">
  
  See all deals

</a>
   </span>

                            </div>





                            <div class="a-section feed-carousel">
                                <div class="a-section feed-carousel-viewport">
                                    <ul class="a-unordered-list a-nostyle a-horizontal feed-carousel-shelf" role="list">




                                        <li id="b8c54bd6" data-sgproduct="{&quot;asin&quot;:&quot;B0874S7N77&quot;}" class="feed-carousel-card"><span class="a-list-item"><div class="deals-shoveler-card"><div class="deals-shoveler-card-image"><a class="a-link-normal  a-inline-block" href="/deal/b8c54bd6/ref=br_msw_pdt-1?_encoding=UTF8&showVariations=true&smid=A14CZOWI0VEHLG&pf_rd_m=A1VBAL9TL5WCBF&pf_rd_s=&pf_rd_r=WMZVJ0QZ56QFCB33E37K&pf_rd_t=36701&pf_rd_p=5c669f94-aee5-4b22-81f8-1d301ca2c6a3&pf_rd_i=desktop"><img alt="Upto 50% Off on Jabra Bluetooth Headsets" src="https://m.media-amazon.com/images/I/41IBWNOi5PL.__AC_SY200_.jpg" class="product-image" title="Upto 50% Off on Jabra Bluetooth Headsets" data-a-hires="https://m.media-amazon.com/images/I/41IBWNOi5PL.__AC_SY400_.jpg"></a></div><div class="deals-shoveler-card-bottom"><div class="dealPrice" tabindex="0"><span class="gwCurrencyINR">Rs. </span><span>3,999.00</span><span> - </span>
                                            <span
                                                class="gwCurrencyINR">Rs. </span><span>11,999.00</span><span class="aok-hide-text">from ?????3,999.00 to ?????11,999.00</span></div>
                                <div class="dealListPrice" aria-hidden="true"></div>
                                <div tabindex=0>
                                    <div aria-hidden="true"><span class="a-color-tertiary gw-clock"></span></div>
                                    <div class="aok-hidden gw-clock-aria" role="timer" aria-hidden="false"></div>
                                </div>
                                <script aria-hidden="true">
                                    P.when('A').execute("#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_ #b8c54bd6updateClock", function(A) {
                                        var cardSelector = "#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_ #b8c54bd6",
                                            $ = A.$,
                                            $clock = $(cardSelector + ' .gw-clock'),
                                            $clockAria = $(cardSelector + ' .gw-clock-aria'),
                                            event = cardSelector.replace(/\s/g, "");

                                        function greyDealPrice() {
                                            var $dealPrice = $(cardSelector + ' .dealPrice');
                                            $dealPrice.addClass('soldOutPrice');
                                        }
                                        A.on(event + 'updateTimer', function(displayString) {
                                            $clock.text(displayString.timerString);
                                            $clockAria.text(displayString.readoutString);
                                        });
                                        A.on(event + 'soldOut', function() {
                                            greyDealPrice();
                                        });
                                        A.on(event + 'ended', function() {
                                            greyDealPrice();
                                        });
                                    });
                                </script>
                                <script aria-hidden="true">
                                    P.when('A', 'gw-count-down', "#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_ #b8c54bd6" + 'beginWatching').execute("#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_ #b8c54bd6" + "create-count-down", function(A, GWCountDown) {
                                        var dealTimePrefix = {
                                            starts_in: "Starts in",
                                            ends_in: "Ends in",
                                            has_ended: "Deal has ended.",
                                            sold_out: "Deal has sold out",
                                            on_waitlist: "Deal is on waitlist",
                                            started: "Deal has started!",
                                            starts_in_timer: "Starts in _hours_ hours _minutes_ minutes _seconds_ seconds",
                                            ends_in_timer: "Ends in _hours_ hours _minutes_ minutes _seconds_ seconds"
                                        };
                                        var clock = new GWCountDown("#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_#b8c54bd6", "-46184961", "40214039", "{\"lastUpdated\":\"1617520784961\",\"totalCouponCount\":\"0\",\"isValid\":\"1\",\"msToEnd\":\"40214039\",\"msCacheTtl\":\"600000\",\"claimedCouponCount\":\"0\",\"*classHierarchy*\":[\"dcs.model.DealStatus\"],\"dealState\":\"AVAILABLE\",\"*className*\":\"dcs.model.DealStatus\",\"dealItemStatus\":{},\"msToStart\":\"-46184961\",\"percentClaimed\":0}", dealTimePrefix);
                                    });
                                </script>
                                <script aria-hidden="true">
                                    P.register("#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_ #b8c54bd6" + "beginWatching");
                                </script>
                            </div>
                        </div>
                        </span>
                        </li>
                        <li id="fd345c00" data-sgproduct="{&quot;asin&quot;:&quot;B01CRI3UOU&quot;}" class="feed-carousel-card"><span class="a-list-item"><div class="deals-shoveler-card"><div class="deals-shoveler-card-image"><a class="a-link-normal  a-inline-block" href="/s/ref=br_msw_pdt-2?_encoding=UTF8&hidden-keywords=B08KW4DRKL%7CB08317Y4VP%7CB08CHGCQFC%7CB07Y1C6GDS%7CB07VTQ9QKC%7CB07SQC9JMG%7CB07KXN87KB%7CB07KPF7LVT%7CB07GZNKB11%7CB07GCHX2YS%7CB0791M3KBL%7CB06X952LB3%7CB01I9AATFI%7CB01CRI3UOU%7CB0002DDGPG&smid=A14CZOWI0VEHLG&pf_rd_m=A1VBAL9TL5WCBF&pf_rd_s=&pf_rd_r=WMZVJ0QZ56QFCB33E37K&pf_rd_t=36701&pf_rd_p=5c669f94-aee5-4b22-81f8-1d301ca2c6a3&pf_rd_i=desktop"><img alt="Upto 50% off on Musical Instruments" src="https://m.media-amazon.com/images/I/41njsUFQQAL.__AC_SY200_.jpg" class="product-image" title="Upto 50% off on Musical Instruments" data-a-hires="https://m.media-amazon.com/images/I/41njsUFQQAL.__AC_SY400_.jpg"></a></div><div class="deals-shoveler-card-bottom"><div class="dealPrice" tabindex="0"><span class="gwCurrencyINR">Rs. </span><span>749.00</span><span> - </span>
                            <span
                                class="gwCurrencyINR">Rs. </span><span>11,999.00</span><span class="aok-hide-text">from ?????749.00 to ?????11,999.00</span></div>
                    <div class="dealListPrice" aria-hidden="true"></div>
                    <div tabindex=0>
                        <div aria-hidden="true"><span class="a-color-tertiary gw-clock"></span></div>
                        <div class="aok-hidden gw-clock-aria" role="timer" aria-hidden="false"></div>
                    </div>
                    <script aria-hidden="true">
                        P.when('A').execute("#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_ #fd345c00updateClock", function(A) {
                            var cardSelector = "#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_ #fd345c00",
                                $ = A.$,
                                $clock = $(cardSelector + ' .gw-clock'),
                                $clockAria = $(cardSelector + ' .gw-clock-aria'),
                                event = cardSelector.replace(/\s/g, "");

                            function greyDealPrice() {
                                var $dealPrice = $(cardSelector + ' .dealPrice');
                                $dealPrice.addClass('soldOutPrice');
                            }
                            A.on(event + 'updateTimer', function(displayString) {
                                $clock.text(displayString.timerString);
                                $clockAria.text(displayString.readoutString);
                            });
                            A.on(event + 'soldOut', function() {
                                greyDealPrice();
                            });
                            A.on(event + 'ended', function() {
                                greyDealPrice();
                            });
                        });
                    </script>
                    <script aria-hidden="true">
                        P.when('A', 'gw-count-down', "#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_ #fd345c00" + 'beginWatching').execute("#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_ #fd345c00" + "create-count-down", function(A, GWCountDown) {
                            var dealTimePrefix = {
                                starts_in: "Starts in",
                                ends_in: "Ends in",
                                has_ended: "Deal has ended.",
                                sold_out: "Deal has sold out",
                                on_waitlist: "Deal is on waitlist",
                                started: "Deal has started!",
                                starts_in_timer: "Starts in _hours_ hours _minutes_ minutes _seconds_ seconds",
                                ends_in_timer: "Ends in _hours_ hours _minutes_ minutes _seconds_ seconds"
                            };
                            var clock = new GWCountDown("#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_#fd345c00", "-46184961", "40214039", "{\"lastUpdated\":\"1617520784961\",\"totalCouponCount\":\"0\",\"isValid\":\"1\",\"msToEnd\":\"40214039\",\"msCacheTtl\":\"600000\",\"claimedCouponCount\":\"0\",\"*classHierarchy*\":[\"dcs.model.DealStatus\"],\"dealState\":\"AVAILABLE\",\"*className*\":\"dcs.model.DealStatus\",\"dealItemStatus\":{},\"msToStart\":\"-46184961\",\"percentClaimed\":0}", dealTimePrefix);
                        });
                    </script>
                    <script aria-hidden="true">
                        P.register("#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_ #fd345c00" + "beginWatching");
                    </script>
                </div>
            </div>
            </span>
            </li>
            <li id="61aac6a3" data-sgproduct="{&quot;asin&quot;:&quot;B08B6W9WNW&quot;}" class="feed-carousel-card"><span class="a-list-item"><div class="deals-shoveler-card"><div class="deals-shoveler-card-image"><a class="a-link-normal  a-inline-block" href="/deal/61aac6a3/ref=br_msw_pdt-3?_encoding=UTF8&showVariations=true&smid=AT95IG9ONZD7S&pf_rd_m=A1VBAL9TL5WCBF&pf_rd_s=&pf_rd_r=WMZVJ0QZ56QFCB33E37K&pf_rd_t=36701&pf_rd_p=5c669f94-aee5-4b22-81f8-1d301ca2c6a3&pf_rd_i=desktop"><img alt="Up To 30% Off On Grocery Essentials" src="https://m.media-amazon.com/images/I/51ivRBHcH6L.__AC_SY200_.jpg" class="product-image" title="Up To 30% Off On Grocery Essentials" data-a-hires="https://m.media-amazon.com/images/I/51ivRBHcH6L.__AC_SY400_.jpg"></a></div><div class="deals-shoveler-card-bottom"><div class="dealPrice" tabindex="0"><span class="gwCurrencyINR">Rs. </span><span>119.00</span><span> - </span>
                <span
                    class="gwCurrencyINR">Rs. </span><span>3,249.00</span><span class="aok-hide-text">from ?????119.00 to ?????3,249.00</span></div>
        <div class="dealListPrice" aria-hidden="true"></div>
        <div tabindex=0>
            <div aria-hidden="true"><span class="a-color-tertiary gw-clock"></span></div>
            <div class="aok-hidden gw-clock-aria" role="timer" aria-hidden="false"></div>
        </div>
        <script aria-hidden="true">
            P.when('A').execute("#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_ #61aac6a3updateClock", function(A) {
                var cardSelector = "#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_ #61aac6a3",
                    $ = A.$,
                    $clock = $(cardSelector + ' .gw-clock'),
                    $clockAria = $(cardSelector + ' .gw-clock-aria'),
                    event = cardSelector.replace(/\s/g, "");

                function greyDealPrice() {
                    var $dealPrice = $(cardSelector + ' .dealPrice');
                    $dealPrice.addClass('soldOutPrice');
                }
                A.on(event + 'updateTimer', function(displayString) {
                    $clock.text(displayString.timerString);
                    $clockAria.text(displayString.readoutString);
                });
                A.on(event + 'soldOut', function() {
                    greyDealPrice();
                });
                A.on(event + 'ended', function() {
                    greyDealPrice();
                });
            });
        </script>
        <script aria-hidden="true">
            P.when('A', 'gw-count-down', "#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_ #61aac6a3" + 'beginWatching').execute("#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_ #61aac6a3" + "create-count-down", function(A, GWCountDown) {
                var dealTimePrefix = {
                    starts_in: "Starts in",
                    ends_in: "Ends in",
                    has_ended: "Deal has ended.",
                    sold_out: "Deal has sold out",
                    on_waitlist: "Deal is on waitlist",
                    started: "Deal has started!",
                    starts_in_timer: "Starts in _hours_ hours _minutes_ minutes _seconds_ seconds",
                    ends_in_timer: "Ends in _hours_ hours _minutes_ minutes _seconds_ seconds"
                };
                var clock = new GWCountDown("#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_#61aac6a3", "-305384961", "299414039", "{\"lastUpdated\":\"1617520784961\",\"totalCouponCount\":\"0\",\"isValid\":\"1\",\"msToEnd\":\"299414039\",\"msCacheTtl\":\"600000\",\"claimedCouponCount\":\"0\",\"*classHierarchy*\":[\"dcs.model.DealStatus\"],\"dealState\":\"AVAILABLE\",\"*className*\":\"dcs.model.DealStatus\",\"dealItemStatus\":{},\"msToStart\":\"-305384961\",\"percentClaimed\":0}", dealTimePrefix);
            });
        </script>
        <script aria-hidden="true">
            P.register("#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_ #61aac6a3" + "beginWatching");
        </script>
    </div>
    </div>
    </span>
    </li>
    <li id="fb782f88" data-sgproduct="{&quot;asin&quot;:&quot;B08JVX3TN5&quot;}" class="feed-carousel-card"><span class="a-list-item"><div class="deals-shoveler-card"><div class="deals-shoveler-card-image"><a class="a-link-normal  a-inline-block" href="/deal/fb782f88/ref=br_msw_pdt-4?_encoding=UTF8&smid=AT95IG9ONZD7S&pf_rd_m=A1VBAL9TL5WCBF&pf_rd_s=&pf_rd_r=WMZVJ0QZ56QFCB33E37K&pf_rd_t=36701&pf_rd_p=5c669f94-aee5-4b22-81f8-1d301ca2c6a3&pf_rd_i=desktop"><img alt="Min 60% Off: Women's Designer Kurtis &amp; Salwar Suits" src="https://m.media-amazon.com/images/I/41zZ-JGQIpL.__AC_SY200_.jpg" class="product-image" title="Min 60% Off: Women's Designer Kurtis &amp; Salwar Suits" data-a-hires="https://m.media-amazon.com/images/I/41zZ-JGQIpL.__AC_SY400_.jpg"></a></div><div class="deals-shoveler-card-bottom"><div class="dealPrice" tabindex="0"><span class="gwCurrencyINR">Rs. </span><span>279.00</span><span> - </span>
        <span
            class="gwCurrencyINR">Rs. </span><span>1,899.00</span><span class="aok-hide-text">from ?????279.00 to ?????1,899.00</span></div>
            <div class="dealListPrice" aria-hidden="true"></div>
            <div tabindex=0>
                <div aria-hidden="true"><span class="a-color-tertiary gw-clock"></span></div>
                <div class="aok-hidden gw-clock-aria" role="timer" aria-hidden="false"></div>
            </div>
            <script aria-hidden="true">
                P.when('A').execute("#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_ #fb782f88updateClock", function(A) {
                    var cardSelector = "#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_ #fb782f88",
                        $ = A.$,
                        $clock = $(cardSelector + ' .gw-clock'),
                        $clockAria = $(cardSelector + ' .gw-clock-aria'),
                        event = cardSelector.replace(/\s/g, "");

                    function greyDealPrice() {
                        var $dealPrice = $(cardSelector + ' .dealPrice');
                        $dealPrice.addClass('soldOutPrice');
                    }
                    A.on(event + 'updateTimer', function(displayString) {
                        $clock.text(displayString.timerString);
                        $clockAria.text(displayString.readoutString);
                    });
                    A.on(event + 'soldOut', function() {
                        greyDealPrice();
                    });
                    A.on(event + 'ended', function() {
                        greyDealPrice();
                    });
                });
            </script>
            <script aria-hidden="true">
                P.when('A', 'gw-count-down', "#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_ #fb782f88" + 'beginWatching').execute("#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_ #fb782f88" + "create-count-down", function(A, GWCountDown) {
                    var dealTimePrefix = {
                        starts_in: "Starts in",
                        ends_in: "Ends in",
                        has_ended: "Deal has ended.",
                        sold_out: "Deal has sold out",
                        on_waitlist: "Deal is on waitlist",
                        started: "Deal has started!",
                        starts_in_timer: "Starts in _hours_ hours _minutes_ minutes _seconds_ seconds",
                        ends_in_timer: "Ends in _hours_ hours _minutes_ minutes _seconds_ seconds"
                    };
                    var clock = new GWCountDown("#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_#fb782f88", "-132584961", "126614039", "{\"lastUpdated\":\"1617520784961\",\"totalCouponCount\":\"0\",\"isValid\":\"1\",\"msToEnd\":\"126614039\",\"msCacheTtl\":\"600000\",\"claimedCouponCount\":\"0\",\"*classHierarchy*\":[\"dcs.model.DealStatus\"],\"dealState\":\"AVAILABLE\",\"*className*\":\"dcs.model.DealStatus\",\"dealItemStatus\":{},\"msToStart\":\"-132584961\",\"percentClaimed\":0}", dealTimePrefix);
                });
            </script>
            <script aria-hidden="true">
                P.register("#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_ #fb782f88" + "beginWatching");
            </script>
            </div>
            </div>
            </span>
    </li>
    <li id="936bbba3" data-sgproduct="{&quot;asin&quot;:&quot;B07P7ZX61B&quot;}" class="feed-carousel-card"><span class="a-list-item"><div class="deals-shoveler-card"><div class="deals-shoveler-card-image"><a class="a-link-normal  a-inline-block" href="/deal/936bbba3/ref=br_msw_pdt-5?_encoding=UTF8&showVariations=true&smid=AT95IG9ONZD7S&pf_rd_m=A1VBAL9TL5WCBF&pf_rd_s=&pf_rd_r=WMZVJ0QZ56QFCB33E37K&pf_rd_t=36701&pf_rd_p=5c669f94-aee5-4b22-81f8-1d301ca2c6a3&pf_rd_i=desktop"><img alt="Up to 60% off on Amazon Brands Appliances and Kitchen Products" src="https://m.media-amazon.com/images/I/31Y4580jrOL.__AC_SY200_.jpg" class="product-image" title="Up to 60% off on Amazon Brands Appliances and Kitchen Products" data-a-hires="https://m.media-amazon.com/images/I/31Y4580jrOL.__AC_SY400_.jpg"></a></div><div class="deals-shoveler-card-bottom"><div class="dealPrice" tabindex="0"><span class="gwCurrencyINR">Rs. </span><span>99.00</span><span> - </span>
        <span
            class="gwCurrencyINR">Rs. </span><span>5,059.00</span><span class="aok-hide-text">from ?????99.00 to ?????5,059.00</span></div>
            <div class="dealListPrice" aria-hidden="true"></div>
            <div tabindex=0>
                <div aria-hidden="true"><span class="a-color-tertiary gw-clock"></span></div>
                <div class="aok-hidden gw-clock-aria" role="timer" aria-hidden="false"></div>
            </div>
            <script aria-hidden="true">
                P.when('A').execute("#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_ #936bbba3updateClock", function(A) {
                    var cardSelector = "#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_ #936bbba3",
                        $ = A.$,
                        $clock = $(cardSelector + ' .gw-clock'),
                        $clockAria = $(cardSelector + ' .gw-clock-aria'),
                        event = cardSelector.replace(/\s/g, "");

                    function greyDealPrice() {
                        var $dealPrice = $(cardSelector + ' .dealPrice');
                        $dealPrice.addClass('soldOutPrice');
                    }
                    A.on(event + 'updateTimer', function(displayString) {
                        $clock.text(displayString.timerString);
                        $clockAria.text(displayString.readoutString);
                    });
                    A.on(event + 'soldOut', function() {
                        greyDealPrice();
                    });
                    A.on(event + 'ended', function() {
                        greyDealPrice();
                    });
                });
            </script>
            <script aria-hidden="true">
                P.when('A', 'gw-count-down', "#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_ #936bbba3" + 'beginWatching').execute("#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_ #936bbba3" + "create-count-down", function(A, GWCountDown) {
                    var dealTimePrefix = {
                        starts_in: "Starts in",
                        ends_in: "Ends in",
                        has_ended: "Deal has ended.",
                        sold_out: "Deal has sold out",
                        on_waitlist: "Deal is on waitlist",
                        started: "Deal has started!",
                        starts_in_timer: "Starts in _hours_ hours _minutes_ minutes _seconds_ seconds",
                        ends_in_timer: "Ends in _hours_ hours _minutes_ minutes _seconds_ seconds"
                    };
                    var clock = new GWCountDown("#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_#936bbba3", "-46184961", "40214039", "{\"lastUpdated\":\"1617520784961\",\"totalCouponCount\":\"0\",\"isValid\":\"1\",\"msToEnd\":\"40214039\",\"msCacheTtl\":\"600000\",\"claimedCouponCount\":\"0\",\"*classHierarchy*\":[\"dcs.model.DealStatus\"],\"dealState\":\"AVAILABLE\",\"*className*\":\"dcs.model.DealStatus\",\"dealItemStatus\":{},\"msToStart\":\"-46184961\",\"percentClaimed\":0}", dealTimePrefix);
                });
            </script>
            <script aria-hidden="true">
                P.register("#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_ #936bbba3" + "beginWatching");
            </script>
            </div>
            </div>
            </span>
    </li>
    <li id="41d9c36e" data-sgproduct="{&quot;asin&quot;:&quot;B012DF4EUQ&quot;}" class="feed-carousel-card"><span class="a-list-item"><div class="deals-shoveler-card"><div class="deals-shoveler-card-image"><a class="a-link-normal  a-inline-block" href="/b/ref=br_msw_pdt-6?_encoding=UTF8&node=12668092031&smid=A29AG5WL05CFLI&pf_rd_m=A1VBAL9TL5WCBF&pf_rd_s=&pf_rd_r=WMZVJ0QZ56QFCB33E37K&pf_rd_t=36701&pf_rd_p=5c669f94-aee5-4b22-81f8-1d301ca2c6a3&pf_rd_i=desktop"><img alt="Upto 15% off on Helmets from Vega and Steelbird" src="https://m.media-amazon.com/images/I/41oCKGsh-GL.__AC_SY200_.jpg" class="product-image" title="Upto 15% off on Helmets from Vega and Steelbird" data-a-hires="https://m.media-amazon.com/images/I/41oCKGsh-GL.__AC_SY400_.jpg"></a></div><div class="deals-shoveler-card-bottom"><div class="dealPrice" tabindex="0"><span class="gwCurrencyINR">Rs. </span><span>404.00</span><span> - </span>
        <span
            class="gwCurrencyINR">Rs. </span><span>4,494.00</span><span class="aok-hide-text">from ?????404.00 to ?????4,494.00</span></div>
            <div class="dealListPrice" aria-hidden="true"></div>
            <div tabindex=0>
                <div aria-hidden="true"><span class="a-color-tertiary gw-clock"></span></div>
                <div class="aok-hidden gw-clock-aria" role="timer" aria-hidden="false"></div>
            </div>
            <script aria-hidden="true">
                P.when('A').execute("#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_ #41d9c36eupdateClock", function(A) {
                    var cardSelector = "#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_ #41d9c36e",
                        $ = A.$,
                        $clock = $(cardSelector + ' .gw-clock'),
                        $clockAria = $(cardSelector + ' .gw-clock-aria'),
                        event = cardSelector.replace(/\s/g, "");

                    function greyDealPrice() {
                        var $dealPrice = $(cardSelector + ' .dealPrice');
                        $dealPrice.addClass('soldOutPrice');
                    }
                    A.on(event + 'updateTimer', function(displayString) {
                        $clock.text(displayString.timerString);
                        $clockAria.text(displayString.readoutString);
                    });
                    A.on(event + 'soldOut', function() {
                        greyDealPrice();
                    });
                    A.on(event + 'ended', function() {
                        greyDealPrice();
                    });
                });
            </script>
            <script aria-hidden="true">
                P.when('A', 'gw-count-down', "#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_ #41d9c36e" + 'beginWatching').execute("#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_ #41d9c36e" + "create-count-down", function(A, GWCountDown) {
                    var dealTimePrefix = {
                        starts_in: "Starts in",
                        ends_in: "Ends in",
                        has_ended: "Deal has ended.",
                        sold_out: "Deal has sold out",
                        on_waitlist: "Deal is on waitlist",
                        started: "Deal has started!",
                        starts_in_timer: "Starts in _hours_ hours _minutes_ minutes _seconds_ seconds",
                        ends_in_timer: "Ends in _hours_ hours _minutes_ minutes _seconds_ seconds"
                    };
                    var clock = new GWCountDown("#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_#41d9c36e", "-46184961", "39915039", "{\"lastUpdated\":\"1617520784961\",\"totalCouponCount\":\"0\",\"isValid\":\"1\",\"msToEnd\":\"39915039\",\"msCacheTtl\":\"600000\",\"claimedCouponCount\":\"0\",\"*classHierarchy*\":[\"dcs.model.DealStatus\"],\"dealState\":\"AVAILABLE\",\"*className*\":\"dcs.model.DealStatus\",\"dealItemStatus\":{},\"msToStart\":\"-46184961\",\"percentClaimed\":0}", dealTimePrefix);
                });
            </script>
            <script aria-hidden="true">
                P.register("#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_ #41d9c36e" + "beginWatching");
            </script>
            </div>
            </div>
            </span>
    </li>
    <li id="424af551" data-sgproduct="{&quot;asin&quot;:&quot;B0716QY438&quot;}" class="feed-carousel-card"><span class="a-list-item"><div class="deals-shoveler-card"><div class="deals-shoveler-card-image"><a class="a-link-normal  a-inline-block" href="/deal/424af551/ref=br_msw_pdt-7?_encoding=UTF8&showVariations=true&smid=AT95IG9ONZD7S&pf_rd_m=A1VBAL9TL5WCBF&pf_rd_s=&pf_rd_r=WMZVJ0QZ56QFCB33E37K&pf_rd_t=36701&pf_rd_p=5c669f94-aee5-4b22-81f8-1d301ca2c6a3&pf_rd_i=desktop"><img alt="Seller Labels Under 599: Miss Chase, Harpa &amp; more" src="https://m.media-amazon.com/images/I/31D5cwLEPqL.__AC_SY200_.jpg" class="product-image" title="Seller Labels Under 599: Miss Chase, Harpa &amp; more" data-a-hires="https://m.media-amazon.com/images/I/31D5cwLEPqL.__AC_SY400_.jpg"></a></div><div class="deals-shoveler-card-bottom"><div class="dealPrice" tabindex="0"><span class="gwCurrencyINR">Rs. </span><span>241.00</span><span> - </span>
        <span
            class="gwCurrencyINR">Rs. </span><span>598.00</span><span class="aok-hide-text">from ?????241.00 to ?????598.00</span></div>
            <div class="dealListPrice" aria-hidden="true"></div>
            <div tabindex=0>
                <div aria-hidden="true"><span class="a-color-tertiary gw-clock"></span></div>
                <div class="aok-hidden gw-clock-aria" role="timer" aria-hidden="false"></div>
            </div>
            <script aria-hidden="true">
                P.when('A').execute("#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_ #424af551updateClock", function(A) {
                    var cardSelector = "#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_ #424af551",
                        $ = A.$,
                        $clock = $(cardSelector + ' .gw-clock'),
                        $clockAria = $(cardSelector + ' .gw-clock-aria'),
                        event = cardSelector.replace(/\s/g, "");

                    function greyDealPrice() {
                        var $dealPrice = $(cardSelector + ' .dealPrice');
                        $dealPrice.addClass('soldOutPrice');
                    }
                    A.on(event + 'updateTimer', function(displayString) {
                        $clock.text(displayString.timerString);
                        $clockAria.text(displayString.readoutString);
                    });
                    A.on(event + 'soldOut', function() {
                        greyDealPrice();
                    });
                    A.on(event + 'ended', function() {
                        greyDealPrice();
                    });
                });
            </script>
            <script aria-hidden="true">
                P.when('A', 'gw-count-down', "#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_ #424af551" + 'beginWatching').execute("#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_ #424af551" + "create-count-down", function(A, GWCountDown) {
                    var dealTimePrefix = {
                        starts_in: "Starts in",
                        ends_in: "Ends in",
                        has_ended: "Deal has ended.",
                        sold_out: "Deal has sold out",
                        on_waitlist: "Deal is on waitlist",
                        started: "Deal has started!",
                        starts_in_timer: "Starts in _hours_ hours _minutes_ minutes _seconds_ seconds",
                        ends_in_timer: "Ends in _hours_ hours _minutes_ minutes _seconds_ seconds"
                    };
                    var clock = new GWCountDown("#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_#424af551", "-46184961", "299414039", "{\"lastUpdated\":\"1617520784961\",\"totalCouponCount\":\"0\",\"isValid\":\"1\",\"msToEnd\":\"299414039\",\"msCacheTtl\":\"600000\",\"claimedCouponCount\":\"0\",\"*classHierarchy*\":[\"dcs.model.DealStatus\"],\"dealState\":\"AVAILABLE\",\"*className*\":\"dcs.model.DealStatus\",\"dealItemStatus\":{},\"msToStart\":\"-46184961\",\"percentClaimed\":0}", dealTimePrefix);
                });
            </script>
            <script aria-hidden="true">
                P.register("#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_ #424af551" + "beginWatching");
            </script>
            </div>
            </div>
            </span>
    </li>


    </ul>
    <div class="spinner" aria-hidden="true">
        <img width="100" height="100" src="https://images-eu.ssl-images-amazon.com/images/G/31/amazonui/loading/loading-4x._CB485930736_.gif" role="presentation" />
    </div>
    </div>

    <a class="feed-carousel-control feed-left" tabindex="-1" href="#" aria-label="Carousel previous slide">
    <span class="gw-icon feed-arrow"></span>
  </a>
    <a class="feed-carousel-control feed-right" tabindex="-1" href="#" aria-label="Carousel next slide">
    <span class="gw-icon feed-arrow"></span>
  </a>
    <span class="feed-scrollbar">
      <span class="feed-scrollbar-track"><span class="feed-scrollbar-thumb"></span></span>
    </span>
    </div>


    </div>

    <script type="text/javascript">
        P.when('component-feed-carousel').execute(function(componentFeedCarousel) {
            componentFeedCarousel.createCarousel("#" + "deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_" + " .feed-carousel", 10, 0);
        });
    </script>


    <script type="text/javascript">
        P.when("A", "cf").execute(function(A) {
            A.loadDescendantImagesManually(A.$("#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_"));
        });
    </script>



    <div cel_widget_id='card-desktop-1' class='aok-hidden celwidget csm-asin-B0874S7N77-B01CRI3UOU-B08B6W9WNW-B08JVX3TN5-B07P7ZX61B-B012DF4EUQ csm-placement-id-5c669f94-aee5-4b22-81f8-1d301ca2c6a3'>
    </div>

    <script type="text/javascript">
        window.GWData = window.GWData || {};
        window.GWData['deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_'] = {
            loaded: false,
            data: ["\n\n\n<li id=\"a4a89cdd\" data-sgproduct=\"{&quot;asin&quot;:&quot;B01JIP44OU&quot;}\" class=\"feed-carousel-card\"><span class=\"a-list-item\"><div class=\"deals-shoveler-card\"><div class=\"deals-shoveler-card-image\"><a class=\"a-link-normal  a-inline-block\" href=\"/s/ref=br_msw_pdt-8?_encoding=UTF8&dc=&hidden-keywords=B07KXR889N%7CB07KY3L8CR%7CB07KXNS51J%7CB07Q5TP5RQ%7CB07Q5TQ9PN%7CB07Q95M9QZ%7CB07Q4Q8YH9%7CB07Q6Z1PX4%7CB07Q95M9QY%7CB08ZY3WGHR%7CB07KY3G7PZ%7CB07KY3DLGZ%7CB08CVR33TK%7CB08CVRMJTB%7CB08CVR32WL%7CB0856HNMR7%7CB0856J7XF8%7CB0856HRTJG%7CB08JM7X6RY%7CB07PQMRFR8%7CB07PNC4SDQ%7CB07PSVBRGF%7CB07Q9D31PM%7CB07NDM9DK4%7CB07NDLX2MN%7CB07NDLTTQR%7CB06Y5LK5QJ%7CB0749D4QM9%7CB07BGV6KVG%7CB07BFT3FWG%7CB01JIP44OU%7CB01JIP48IC%7CB01JIP4BPW%7CB08SMJT55F%7CB06Y64FM1C%7CB06Y5TZTPG%7CB07F3HMFRD%7CB07F3CQLGV%7CB07F38XGVT%7CB07F384VQV%7CB07FMM9BMC%7CB07PSV4V1W%7CB07PNC5NPV%7CB07Q9TJP5W%7CB07QGJF2ZM%7CB089PHDQ6F%7CB0835LTWJ8%7CB086WNLYT8%7CB086WN6N4G%7CB086WMSCN3%7CB086WP3XQ5%7CB07VTQGCF4%7CB0856GK57Z%7CB0856H13TW%7CB0856GJVZ5%7CB084DRKGZ3%7CB088FKY6KH%7CB07Y2Y9CR4%7CB0847RZR2S%7CB08DYC6NT2%7CB0847RZ29W%7CB08N4QXPVC%7CB08HM4NFRJ%7CB08CNC9F9L%7CB07JLFK74H%7CB01J82IYLW%7CB08TT5FBJR%7CB01FSYQ01K%7CB01FSYQ2A4&i=electronics&rh=n%3A976419031%2Cp_89%3ABoat%2Cp_6%3AA14CZOWI0VEHLG&s=date-desc-rank&smid=A14CZOWI0VEHLG&pf_rd_m=A1VBAL9TL5WCBF&pf_rd_s=&pf_rd_r=WMZVJ0QZ56QFCB33E37K&pf_rd_t=36701&pf_rd_p=5c669f94-aee5-4b22-81f8-1d301ca2c6a3&pf_rd_i=desktop\"><img alt=\"Boat Headphones and Speakers up to 60% off\" src=\"https://m.media-amazon.com/images/I/41FeKxvRu7L.__AC_SY200_.jpg\" class=\"product-image\" title=\"Boat Headphones and Speakers up to 60% off\" data-a-hires=\"https://m.media-amazon.com/images/I/41FeKxvRu7L.__AC_SY400_.jpg\"></a></div><div class=\"deals-shoveler-card-bottom\"><div class=\"dealPrice\" tabindex=\"0\"><span class=\"gwCurrencyINR\">Rs. </span><span>399.00</span><span> - </span><span class=\"gwCurrencyINR\">Rs. </span><span>6,499.00</span><span class=\"aok-hide-text\">from ?????399.00 to ?????6,499.00</span></div><div class=\"dealListPrice\" aria-hidden=\"true\"></div><div tabindex=0><div aria-hidden=\"true\"><span class=\"a-color-tertiary gw-clock\"></span></div><div class=\"aok-hidden gw-clock-aria\" role=\"timer\" aria-hidden=\"false\"></div></div><script aria-hidden=\"true\">\n  P.when('A').execute(\"#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_ #a4a89cddupdateClock\",function(A){\n    var cardSelector = \"#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_ #a4a89cdd\",\n      $ = A.$,\n      $clock = $(cardSelector + ' .gw-clock'),\n      $clockAria = $(cardSelector + ' .gw-clock-aria'),\n      event = cardSelector.replace(/\\s/g, \"\");\n    function greyDealPrice() {\n      var $dealPrice = $(cardSelector + ' .dealPrice');\n      $dealPrice.addClass('soldOutPrice');\n    }\n    A.on(event + 'updateTimer', function(displayString){\n      $clock.text(displayString.timerString);\n      $clockAria.text(displayString.readoutString);\n    });\n     A.on(event + 'soldOut', function(){\n      greyDealPrice();\n    });\n    A.on(event + 'ended', function(){\n      greyDealPrice();\n    });\n  });\n</\u0073cript><script aria-hidden=\"true\">\n  P.when('A', 'gw-count-down', \"#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_ #a4a89cdd\" + 'beginWatching').execute(\"#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_ #a4a89cdd\" + \"create-count-down\", function(A,GWCountDown){\n    var dealTimePrefix = {\n      starts_in: \"Starts in\",\n      ends_in: \"Ends in\",\n      has_ended: \"Deal has ended.\", \n      sold_out: \"Deal has sold out\", \n      on_waitlist: \"Deal is on waitlist\", \n      started: \"Deal has started!\",\n      starts_in_timer: \"Starts in _hours_ hours _minutes_ minutes _seconds_ seconds\",\n      ends_in_timer: \"Ends in _hours_ hours _minutes_ minutes _seconds_ seconds\"\n    };\n    var clock = new GWCountDown(\"#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_#a4a89cdd\", \"-46184961\", \"40214039\", \"{\\\"lastUpdated\\\":\\\"1617520784961\\\",\\\"totalCouponCount\\\":\\\"0\\\",\\\"isValid\\\":\\\"1\\\",\\\"msToEnd\\\":\\\"40214039\\\",\\\"msCacheTtl\\\":\\\"600000\\\",\\\"claimedCouponCount\\\":\\\"0\\\",\\\"*classHierarchy*\\\":[\\\"dcs.model.DealStatus\\\"],\\\"dealState\\\":\\\"AVAILABLE\\\",\\\"*className*\\\":\\\"dcs.model.DealStatus\\\",\\\"dealItemStatus\\\":{},\\\"msToStart\\\":\\\"-46184961\\\",\\\"percentClaimed\\\":0}\", dealTimePrefix);\n  });\n</\u0073cript><script aria-hidden=\"true\">\n  P.register(\"#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_ #a4a89cdd\" + \"beginWatching\");\n</\u0073cript></div></div></span></li>\n\n", "\n\n\n<li id=\"ffb55d3e\" data-sgproduct=\"{&quot;asin&quot;:&quot;B08K954C47&quot;}\" class=\"feed-carousel-card\"><span class=\"a-list-item\"><div class=\"deals-shoveler-card\"><div class=\"deals-shoveler-card-image\"><a class=\"a-link-normal  a-inline-block\" href=\"/deal/ffb55d3e/ref=br_msw_pdt-9?_encoding=UTF8&showVariations=true&smid=AT95IG9ONZD7S&pf_rd_m=A1VBAL9TL5WCBF&pf_rd_s=&pf_rd_r=WMZVJ0QZ56QFCB33E37K&pf_rd_t=36701&pf_rd_p=5c669f94-aee5-4b22-81f8-1d301ca2c6a3&pf_rd_i=desktop\"><img alt=\"Up To 40% Off on Dry Fruits\" src=\"https://m.media-amazon.com/images/I/41ETkYez7LL.__AC_SY200_.jpg\" class=\"product-image\" title=\"Up To 40% Off on Dry Fruits\" data-a-hires=\"https://m.media-amazon.com/images/I/41ETkYez7LL.__AC_SY400_.jpg\"></a></div><div class=\"deals-shoveler-card-bottom\"><div class=\"dealPrice\" tabindex=\"0\"><span class=\"gwCurrencyINR\">Rs. </span><span>115.00</span><span> - </span><span class=\"gwCurrencyINR\">Rs. </span><span>1,733.00</span><span class=\"aok-hide-text\">from ?????115.00 to ?????1,733.00</span></div><div class=\"dealListPrice\" aria-hidden=\"true\"></div><div tabindex=0><div aria-hidden=\"true\"><span class=\"a-color-tertiary gw-clock\"></span></div><div class=\"aok-hidden gw-clock-aria\" role=\"timer\" aria-hidden=\"false\"></div></div><script aria-hidden=\"true\">\n  P.when('A').execute(\"#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_ #ffb55d3eupdateClock\",function(A){\n    var cardSelector = \"#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_ #ffb55d3e\",\n      $ = A.$,\n      $clock = $(cardSelector + ' .gw-clock'),\n      $clockAria = $(cardSelector + ' .gw-clock-aria'),\n      event = cardSelector.replace(/\\s/g, \"\");\n    function greyDealPrice() {\n      var $dealPrice = $(cardSelector + ' .dealPrice');\n      $dealPrice.addClass('soldOutPrice');\n    }\n    A.on(event + 'updateTimer', function(displayString){\n      $clock.text(displayString.timerString);\n      $clockAria.text(displayString.readoutString);\n    });\n     A.on(event + 'soldOut', function(){\n      greyDealPrice();\n    });\n    A.on(event + 'ended', function(){\n      greyDealPrice();\n    });\n  });\n</\u0073cript><script aria-hidden=\"true\">\n  P.when('A', 'gw-count-down', \"#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_ #ffb55d3e\" + 'beginWatching').execute(\"#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_ #ffb55d3e\" + \"create-count-down\", function(A,GWCountDown){\n    var dealTimePrefix = {\n      starts_in: \"Starts in\",\n      ends_in: \"Ends in\",\n      has_ended: \"Deal has ended.\", \n      sold_out: \"Deal has sold out\", \n      on_waitlist: \"Deal is on waitlist\", \n      started: \"Deal has started!\",\n      starts_in_timer: \"Starts in _hours_ hours _minutes_ minutes _seconds_ seconds\",\n      ends_in_timer: \"Ends in _hours_ hours _minutes_ minutes _seconds_ seconds\"\n    };\n    var clock = new GWCountDown(\"#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_#ffb55d3e\", \"-265784961\", \"126614039\", \"{\\\"lastUpdated\\\":\\\"1617520784961\\\",\\\"totalCouponCount\\\":\\\"0\\\",\\\"isValid\\\":\\\"1\\\",\\\"msToEnd\\\":\\\"126614039\\\",\\\"msCacheTtl\\\":\\\"600000\\\",\\\"claimedCouponCount\\\":\\\"0\\\",\\\"*classHierarchy*\\\":[\\\"dcs.model.DealStatus\\\"],\\\"dealState\\\":\\\"AVAILABLE\\\",\\\"*className*\\\":\\\"dcs.model.DealStatus\\\",\\\"dealItemStatus\\\":{},\\\"msToStart\\\":\\\"-265784961\\\",\\\"percentClaimed\\\":0}\", dealTimePrefix);\n  });\n</\u0073cript><script aria-hidden=\"true\">\n  P.register(\"#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_ #ffb55d3e\" + \"beginWatching\");\n</\u0073cript></div></div></span></li>\n\n", "\n\n\n<li id=\"66712fd0\" data-sgproduct=\"{&quot;asin&quot;:&quot;B0061I4GIW&quot;}\" class=\"feed-carousel-card\"><span class=\"a-list-item\"><div class=\"deals-shoveler-card\"><div class=\"deals-shoveler-card-image\"><a class=\"a-link-normal  a-inline-block\" href=\"/deal/66712fd0/ref=br_msw_pdt-10?_encoding=UTF8&smid=AT95IG9ONZD7S&pf_rd_m=A1VBAL9TL5WCBF&pf_rd_s=&pf_rd_r=WMZVJ0QZ56QFCB33E37K&pf_rd_t=36701&pf_rd_p=5c669f94-aee5-4b22-81f8-1d301ca2c6a3&pf_rd_i=desktop\"><img alt=\"Upto 60% off on Baby Products\" src=\"https://m.media-amazon.com/images/I/41QwkFj2hbL.__AC_SY200_.jpg\" class=\"product-image\" title=\"Upto 60% off on Baby Products\" data-a-hires=\"https://m.media-amazon.com/images/I/41QwkFj2hbL.__AC_SY400_.jpg\"></a></div><div class=\"deals-shoveler-card-bottom\"><div class=\"dealPrice\" tabindex=\"0\"><span class=\"gwCurrencyINR\">Rs. </span><span>136.00</span><span> - </span><span class=\"gwCurrencyINR\">Rs. </span><span>11,736.00</span><span class=\"aok-hide-text\">from ?????136.00 to ?????11,736.00</span></div><div class=\"dealListPrice\" aria-hidden=\"true\"></div><div tabindex=0><div aria-hidden=\"true\"><span class=\"a-color-tertiary gw-clock\"></span></div><div class=\"aok-hidden gw-clock-aria\" role=\"timer\" aria-hidden=\"false\"></div></div><script aria-hidden=\"true\">\n  P.when('A').execute(\"#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_ #66712fd0updateClock\",function(A){\n    var cardSelector = \"#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_ #66712fd0\",\n      $ = A.$,\n      $clock = $(cardSelector + ' .gw-clock'),\n      $clockAria = $(cardSelector + ' .gw-clock-aria'),\n      event = cardSelector.replace(/\\s/g, \"\");\n    function greyDealPrice() {\n      var $dealPrice = $(cardSelector + ' .dealPrice');\n      $dealPrice.addClass('soldOutPrice');\n    }\n    A.on(event + 'updateTimer', function(displayString){\n      $clock.text(displayString.timerString);\n      $clockAria.text(displayString.readoutString);\n    });\n     A.on(event + 'soldOut', function(){\n      greyDealPrice();\n    });\n    A.on(event + 'ended', function(){\n      greyDealPrice();\n    });\n  });\n</\u0073cript><script aria-hidden=\"true\">\n  P.when('A', 'gw-count-down', \"#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_ #66712fd0\" + 'beginWatching').execute(\"#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_ #66712fd0\" + \"create-count-down\", function(A,GWCountDown){\n    var dealTimePrefix = {\n      starts_in: \"Starts in\",\n      ends_in: \"Ends in\",\n      has_ended: \"Deal has ended.\", \n      sold_out: \"Deal has sold out\", \n      on_waitlist: \"Deal is on waitlist\", \n      started: \"Deal has started!\",\n      starts_in_timer: \"Starts in _hours_ hours _minutes_ minutes _seconds_ seconds\",\n      ends_in_timer: \"Ends in _hours_ hours _minutes_ minutes _seconds_ seconds\"\n    };\n    var clock = new GWCountDown(\"#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_#66712fd0\", \"-319784961\", \"213014039\", \"{\\\"lastUpdated\\\":\\\"1617520784961\\\",\\\"totalCouponCount\\\":\\\"0\\\",\\\"isValid\\\":\\\"1\\\",\\\"msToEnd\\\":\\\"213014039\\\",\\\"msCacheTtl\\\":\\\"600000\\\",\\\"claimedCouponCount\\\":\\\"0\\\",\\\"*classHierarchy*\\\":[\\\"dcs.model.DealStatus\\\"],\\\"dealState\\\":\\\"AVAILABLE\\\",\\\"*className*\\\":\\\"dcs.model.DealStatus\\\",\\\"dealItemStatus\\\":{},\\\"msToStart\\\":\\\"-319784961\\\",\\\"percentClaimed\\\":0}\", dealTimePrefix);\n  });\n</\u0073cript><script aria-hidden=\"true\">\n  P.register(\"#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_ #66712fd0\" + \"beginWatching\");\n</\u0073cript></div></div></span></li>\n\n", "\n\n\n<li id=\"ff942939\" data-sgproduct=\"{&quot;asin&quot;:&quot;B08TM195RX&quot;}\" class=\"feed-carousel-card\"><span class=\"a-list-item\"><div class=\"deals-shoveler-card\"><div class=\"deals-shoveler-card-image\"><a class=\"a-link-normal  a-inline-block\" href=\"/Xtore-Breathable-cotton-Reusable-Washable/dp/B08WM4J18Q/ref=br_msw_pdt-11?_encoding=UTF8&smid=AJAKWODNCS6VS&pf_rd_m=A1VBAL9TL5WCBF&pf_rd_s=&pf_rd_r=WMZVJ0QZ56QFCB33E37K&pf_rd_t=36701&pf_rd_p=5c669f94-aee5-4b22-81f8-1d301ca2c6a3&pf_rd_i=desktop\"><img alt=\"Upto 60% off on Breathable cotton mask\" src=\"https://m.media-amazon.com/images/I/41T1anm8bCL.__AC_SY200_.jpg\" class=\"product-image\" title=\"Upto 60% off on Breathable cotton mask\" data-a-hires=\"https://m.media-amazon.com/images/I/41T1anm8bCL.__AC_SY400_.jpg\"></a></div><div class=\"deals-shoveler-card-bottom\"><div class=\"dealPrice\" tabindex=\"0\"><span class=\"gwCurrencyINR\">Rs. </span><span>199.00</span><span> - </span><span class=\"gwCurrencyINR\">Rs. </span><span>279.00</span><span class=\"aok-hide-text\">from ?????199.00 to ?????279.00</span></div><div class=\"dealListPrice\" aria-hidden=\"true\"></div><div tabindex=0><div aria-hidden=\"true\"><span class=\"a-color-tertiary gw-clock\"></span></div><div class=\"aok-hidden gw-clock-aria\" role=\"timer\" aria-hidden=\"false\"></div></div><script aria-hidden=\"true\">\n  P.when('A').execute(\"#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_ #ff942939updateClock\",function(A){\n    var cardSelector = \"#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_ #ff942939\",\n      $ = A.$,\n      $clock = $(cardSelector + ' .gw-clock'),\n      $clockAria = $(cardSelector + ' .gw-clock-aria'),\n      event = cardSelector.replace(/\\s/g, \"\");\n    function greyDealPrice() {\n      var $dealPrice = $(cardSelector + ' .dealPrice');\n      $dealPrice.addClass('soldOutPrice');\n    }\n    A.on(event + 'updateTimer', function(displayString){\n      $clock.text(displayString.timerString);\n      $clockAria.text(displayString.readoutString);\n    });\n     A.on(event + 'soldOut', function(){\n      greyDealPrice();\n    });\n    A.on(event + 'ended', function(){\n      greyDealPrice();\n    });\n  });\n</\u0073cript><script aria-hidden=\"true\">\n  P.when('A', 'gw-count-down', \"#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_ #ff942939\" + 'beginWatching').execute(\"#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_ #ff942939\" + \"create-count-down\", function(A,GWCountDown){\n    var dealTimePrefix = {\n      starts_in: \"Starts in\",\n      ends_in: \"Ends in\",\n      has_ended: \"Deal has ended.\", \n      sold_out: \"Deal has sold out\", \n      on_waitlist: \"Deal is on waitlist\", \n      started: \"Deal has started!\",\n      starts_in_timer: \"Starts in _hours_ hours _minutes_ minutes _seconds_ seconds\",\n      ends_in_timer: \"Ends in _hours_ hours _minutes_ minutes _seconds_ seconds\"\n    };\n    var clock = new GWCountDown(\"#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_#ff942939\", \"-45284961\", \"39915039\", \"{\\\"lastUpdated\\\":\\\"1617520784961\\\",\\\"totalCouponCount\\\":\\\"0\\\",\\\"isValid\\\":\\\"1\\\",\\\"msToEnd\\\":\\\"39915039\\\",\\\"msCacheTtl\\\":\\\"600000\\\",\\\"claimedCouponCount\\\":\\\"0\\\",\\\"*classHierarchy*\\\":[\\\"dcs.model.DealStatus\\\"],\\\"dealState\\\":\\\"AVAILABLE\\\",\\\"*className*\\\":\\\"dcs.model.DealStatus\\\",\\\"dealItemStatus\\\":{},\\\"msToStart\\\":\\\"-45284961\\\",\\\"percentClaimed\\\":0}\", dealTimePrefix);\n  });\n</\u0073cript><script aria-hidden=\"true\">\n  P.register(\"#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_ #ff942939\" + \"beginWatching\");\n</\u0073cript></div></div></span></li>\n\n", "\n\n\n<li id=\"8ddacb1a\" data-sgproduct=\"{&quot;asin&quot;:&quot;B08LRFNY14&quot;}\" class=\"feed-carousel-card\"><span class=\"a-list-item\"><div class=\"deals-shoveler-card\"><div class=\"deals-shoveler-card-image\"><a class=\"a-link-normal  a-inline-block\" href=\"/s/ref=br_msw_pdt-12?_encoding=UTF8&hidden-keywords=B08VB2SJ76%20%7C%20B08V9VPCXW%20%7C%20B08LRDK8Z5%20%7C%20B08LRFNY14&smid=A14CZOWI0VEHLG&pf_rd_m=A1VBAL9TL5WCBF&pf_rd_s=&pf_rd_r=WMZVJ0QZ56QFCB33E37K&pf_rd_t=36701&pf_rd_p=5c669f94-aee5-4b22-81f8-1d301ca2c6a3&pf_rd_i=desktop\"><img alt=\"OPPO F19 Pro series | 48MP Quad camera\" src=\"https://m.media-amazon.com/images/I/41f8eOJLsPL.__AC_SY200_.jpg\" class=\"product-image\" title=\"OPPO F19 Pro series | 48MP Quad camera\" data-a-hires=\"https://m.media-amazon.com/images/I/41f8eOJLsPL.__AC_SY400_.jpg\"></a></div><div class=\"deals-shoveler-card-bottom\"><div class=\"dealPrice\" tabindex=\"0\"><span class=\"gwCurrencyINR\">Rs. </span><span>21,490.00</span><span> - </span><span class=\"gwCurrencyINR\">Rs. </span><span>25,990.00</span><span class=\"aok-hide-text\">from ?????21,490.00 to ?????25,990.00</span></div><div class=\"dealListPrice\" aria-hidden=\"true\"></div><div tabindex=0><div aria-hidden=\"true\"><span class=\"a-color-tertiary gw-clock\"></span></div><div class=\"aok-hidden gw-clock-aria\" role=\"timer\" aria-hidden=\"false\"></div></div><script aria-hidden=\"true\">\n  P.when('A').execute(\"#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_ #8ddacb1aupdateClock\",function(A){\n    var cardSelector = \"#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_ #8ddacb1a\",\n      $ = A.$,\n      $clock = $(cardSelector + ' .gw-clock'),\n      $clockAria = $(cardSelector + ' .gw-clock-aria'),\n      event = cardSelector.replace(/\\s/g, \"\");\n    function greyDealPrice() {\n      var $dealPrice = $(cardSelector + ' .dealPrice');\n      $dealPrice.addClass('soldOutPrice');\n    }\n    A.on(event + 'updateTimer', function(displayString){\n      $clock.text(displayString.timerString);\n      $clockAria.text(displayString.readoutString);\n    });\n     A.on(event + 'soldOut', function(){\n      greyDealPrice();\n    });\n    A.on(event + 'ended', function(){\n      greyDealPrice();\n    });\n  });\n</\u0073cript><script aria-hidden=\"true\">\n  P.when('A', 'gw-count-down', \"#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_ #8ddacb1a\" + 'beginWatching').execute(\"#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_ #8ddacb1a\" + \"create-count-down\", function(A,GWCountDown){\n    var dealTimePrefix = {\n      starts_in: \"Starts in\",\n      ends_in: \"Ends in\",\n      has_ended: \"Deal has ended.\", \n      sold_out: \"Deal has sold out\", \n      on_waitlist: \"Deal is on waitlist\", \n      started: \"Deal has started!\",\n      starts_in_timer: \"Starts in _hours_ hours _minutes_ minutes _seconds_ seconds\",\n      ends_in_timer: \"Ends in _hours_ hours _minutes_ minutes _seconds_ seconds\"\n    };\n    var clock = new GWCountDown(\"#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_#8ddacb1a\", \"-46184961\", \"40214039\", \"{\\\"lastUpdated\\\":\\\"1617520784961\\\",\\\"totalCouponCount\\\":\\\"0\\\",\\\"isValid\\\":\\\"1\\\",\\\"msToEnd\\\":\\\"40214039\\\",\\\"msCacheTtl\\\":\\\"600000\\\",\\\"claimedCouponCount\\\":\\\"0\\\",\\\"*classHierarchy*\\\":[\\\"dcs.model.DealStatus\\\"],\\\"dealState\\\":\\\"AVAILABLE\\\",\\\"*className*\\\":\\\"dcs.model.DealStatus\\\",\\\"dealItemStatus\\\":{},\\\"msToStart\\\":\\\"-46184961\\\",\\\"percentClaimed\\\":0}\", dealTimePrefix);\n  });\n</\u0073cript><script aria-hidden=\"true\">\n  P.register(\"#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_ #8ddacb1a\" + \"beginWatching\");\n</\u0073cript></div></div></span></li>\n\n", "\n\n\n<li id=\"7041b384\" data-sgproduct=\"{&quot;asin&quot;:&quot;B07X8V5YKR&quot;}\" class=\"feed-carousel-card\"><span class=\"a-list-item\"><div class=\"deals-shoveler-card\"><div class=\"deals-shoveler-card-image\"><a class=\"a-link-normal  a-inline-block\" href=\"/Samsung-Galaxy-Storage-Additional-Exchange/dp/B07X8V5YKR/ref=br_msw_pdt-13?_encoding=UTF8&smid=A14CZOWI0VEHLG&pf_rd_m=A1VBAL9TL5WCBF&pf_rd_s=&pf_rd_r=WMZVJ0QZ56QFCB33E37K&pf_rd_t=36701&pf_rd_p=5c669f94-aee5-4b22-81f8-1d301ca2c6a3&pf_rd_i=desktop\"><img alt=\"Samsung Note 10 Lite | Rs 2000 Price Drop\" src=\"https://m.media-amazon.com/images/I/41kdXh6O3rL.__AC_SY200_.jpg\" class=\"product-image\" title=\"Samsung Note 10 Lite | Rs 2000 Price Drop\" data-a-hires=\"https://m.media-amazon.com/images/I/41kdXh6O3rL.__AC_SY400_.jpg\"></a></div><div class=\"deals-shoveler-card-bottom\"><div class=\"dealPrice\" tabindex=\"0\"><span class=\"a-size-medium\"><span class=\"gwCurrencyINR\">Rs. </span><span>29,999.00</span></span></div><div class=\"dealListPrice\" aria-hidden=\"true\"><span aria-hidden=\"true\" class=\"a-size-base a-color-tertiary a-text-strike\"><span class=\"gwCurrencyINR\">Rs. </span><span>43,000.00</span></span></div><div tabindex=0><div aria-hidden=\"true\"><span class=\"a-color-tertiary gw-clock\"></span></div><div class=\"aok-hidden gw-clock-aria\" role=\"timer\" aria-hidden=\"false\"></div></div><script aria-hidden=\"true\">\n  P.when('A').execute(\"#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_ #7041b384updateClock\",function(A){\n    var cardSelector = \"#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_ #7041b384\",\n      $ = A.$,\n      $clock = $(cardSelector + ' .gw-clock'),\n      $clockAria = $(cardSelector + ' .gw-clock-aria'),\n      event = cardSelector.replace(/\\s/g, \"\");\n    function greyDealPrice() {\n      var $dealPrice = $(cardSelector + ' .dealPrice');\n      $dealPrice.addClass('soldOutPrice');\n    }\n    A.on(event + 'updateTimer', function(displayString){\n      $clock.text(displayString.timerString);\n      $clockAria.text(displayString.readoutString);\n    });\n     A.on(event + 'soldOut', function(){\n      greyDealPrice();\n    });\n    A.on(event + 'ended', function(){\n      greyDealPrice();\n    });\n  });\n</\u0073cript><script aria-hidden=\"true\">\n  P.when('A', 'gw-count-down', \"#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_ #7041b384\" + 'beginWatching').execute(\"#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_ #7041b384\" + \"create-count-down\", function(A,GWCountDown){\n    var dealTimePrefix = {\n      starts_in: \"Starts in\",\n      ends_in: \"Ends in\",\n      has_ended: \"Deal has ended.\", \n      sold_out: \"Deal has sold out\", \n      on_waitlist: \"Deal is on waitlist\", \n      started: \"Deal has started!\",\n      starts_in_timer: \"Starts in _hours_ hours _minutes_ minutes _seconds_ seconds\",\n      ends_in_timer: \"Ends in _hours_ hours _minutes_ minutes _seconds_ seconds\"\n    };\n    var clock = new GWCountDown(\"#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_#7041b384\", \"-46184961\", \"40214039\", \"{\\\"lastUpdated\\\":\\\"1617520784961\\\",\\\"totalCouponCount\\\":\\\"0\\\",\\\"isValid\\\":\\\"1\\\",\\\"msToEnd\\\":\\\"40214039\\\",\\\"msCacheTtl\\\":\\\"600000\\\",\\\"claimedCouponCount\\\":\\\"0\\\",\\\"*classHierarchy*\\\":[\\\"dcs.model.DealStatus\\\"],\\\"dealState\\\":\\\"AVAILABLE\\\",\\\"*className*\\\":\\\"dcs.model.DealStatus\\\",\\\"dealItemStatus\\\":{},\\\"msToStart\\\":\\\"-46184961\\\",\\\"percentClaimed\\\":0}\", dealTimePrefix);\n  });\n</\u0073cript><script aria-hidden=\"true\">\n  P.register(\"#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_ #7041b384\" + \"beginWatching\");\n</\u0073cript></div></div></span></li>\n\n", "\n\n\n<li id=\"e8078bf0\" data-sgproduct=\"{&quot;asin&quot;:&quot;B08VB2RKTD&quot;}\" class=\"feed-carousel-card\"><span class=\"a-list-item\"><div class=\"deals-shoveler-card\"><div class=\"deals-shoveler-card-image\"><a class=\"a-link-normal  a-inline-block\" href=\"/deal/e8078bf0/ref=br_msw_pdt-14?_encoding=UTF8&smid=A14CZOWI0VEHLG&pf_rd_m=A1VBAL9TL5WCBF&pf_rd_s=&pf_rd_r=WMZVJ0QZ56QFCB33E37K&pf_rd_t=36701&pf_rd_p=5c669f94-aee5-4b22-81f8-1d301ca2c6a3&pf_rd_i=desktop\"><img alt=\"Vivo X60 Series | 10% HDFC Discount | Extra Upto Rs. 4000 off on Exchange\" src=\"https://m.media-amazon.com/images/I/41N3-KnMfjL.__AC_SY200_.jpg\" class=\"product-image\" title=\"Vivo X60 Series | 10% HDFC Discount | Extra Upto Rs. 4000 off on Exchange\" data-a-hires=\"https://m.media-amazon.com/images/I/41N3-KnMfjL.__AC_SY400_.jpg\"></a></div><div class=\"deals-shoveler-card-bottom\"><div class=\"dealPrice\" tabindex=\"0\"><span class=\"gwCurrencyINR\">Rs. </span><span>37,990.00</span><span> - </span><span class=\"gwCurrencyINR\">Rs. </span><span>69,990.00</span><span class=\"aok-hide-text\">from ?????37,990.00 to ?????69,990.00</span></div><div class=\"dealListPrice\" aria-hidden=\"true\"></div><div tabindex=0><div aria-hidden=\"true\"><span class=\"a-color-tertiary gw-clock\"></span></div><div class=\"aok-hidden gw-clock-aria\" role=\"timer\" aria-hidden=\"false\"></div></div><script aria-hidden=\"true\">\n  P.when('A').execute(\"#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_ #e8078bf0updateClock\",function(A){\n    var cardSelector = \"#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_ #e8078bf0\",\n      $ = A.$,\n      $clock = $(cardSelector + ' .gw-clock'),\n      $clockAria = $(cardSelector + ' .gw-clock-aria'),\n      event = cardSelector.replace(/\\s/g, \"\");\n    function greyDealPrice() {\n      var $dealPrice = $(cardSelector + ' .dealPrice');\n      $dealPrice.addClass('soldOutPrice');\n    }\n    A.on(event + 'updateTimer', function(displayString){\n      $clock.text(displayString.timerString);\n      $clockAria.text(displayString.readoutString);\n    });\n     A.on(event + 'soldOut', function(){\n      greyDealPrice();\n    });\n    A.on(event + 'ended', function(){\n      greyDealPrice();\n    });\n  });\n</\u0073cript><script aria-hidden=\"true\">\n  P.when('A', 'gw-count-down', \"#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_ #e8078bf0\" + 'beginWatching').execute(\"#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_ #e8078bf0\" + \"create-count-down\", function(A,GWCountDown){\n    var dealTimePrefix = {\n      starts_in: \"Starts in\",\n      ends_in: \"Ends in\",\n      has_ended: \"Deal has ended.\", \n      sold_out: \"Deal has sold out\", \n      on_waitlist: \"Deal is on waitlist\", \n      started: \"Deal has started!\",\n      starts_in_timer: \"Starts in _hours_ hours _minutes_ minutes _seconds_ seconds\",\n      ends_in_timer: \"Ends in _hours_ hours _minutes_ minutes _seconds_ seconds\"\n    };\n    var clock = new GWCountDown(\"#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_#e8078bf0\", \"-46184961\", \"40214039\", \"{\\\"lastUpdated\\\":\\\"1617520784961\\\",\\\"totalCouponCount\\\":\\\"0\\\",\\\"isValid\\\":\\\"1\\\",\\\"msToEnd\\\":\\\"40214039\\\",\\\"msCacheTtl\\\":\\\"600000\\\",\\\"claimedCouponCount\\\":\\\"0\\\",\\\"*classHierarchy*\\\":[\\\"dcs.model.DealStatus\\\"],\\\"dealState\\\":\\\"AVAILABLE\\\",\\\"*className*\\\":\\\"dcs.model.DealStatus\\\",\\\"dealItemStatus\\\":{},\\\"msToStart\\\":\\\"-46184961\\\",\\\"percentClaimed\\\":0}\", dealTimePrefix);\n  });\n</\u0073cript><script aria-hidden=\"true\">\n  P.register(\"#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_ #e8078bf0\" + \"beginWatching\");\n</\u0073cript></div></div></span></li>\n\n", "\n\n\n<li id=\"4aa4cacf\" data-sgproduct=\"{&quot;asin&quot;:&quot;B08TNBQ3SH&quot;}\" class=\"feed-carousel-card\"><span class=\"a-list-item\"><div class=\"deals-shoveler-card\"><div class=\"deals-shoveler-card-image\"><a class=\"a-link-normal  a-inline-block\" href=\"/itel-Cosmic-Storage-Display-L5505/dp/B08TNBQ3SH/ref=br_msw_pdt-15?_encoding=UTF8&smid=A14CZOWI0VEHLG&pf_rd_m=A1VBAL9TL5WCBF&pf_rd_s=&pf_rd_r=WMZVJ0QZ56QFCB33E37K&pf_rd_t=36701&pf_rd_p=5c669f94-aee5-4b22-81f8-1d301ca2c6a3&pf_rd_i=desktop\"><img alt=\"Itel A47 | Dual Rear Camera | 5.5&quot; HD+ Display\" src=\"https://m.media-amazon.com/images/I/41VM30DBK8L.__AC_SY200_.jpg\" class=\"product-image\" title=\"Itel A47 | Dual Rear Camera | 5.5&quot; HD+ Display\" data-a-hires=\"https://m.media-amazon.com/images/I/41VM30DBK8L.__AC_SY400_.jpg\"></a></div><div class=\"deals-shoveler-card-bottom\"><div class=\"dealPrice\" tabindex=\"0\"><span class=\"a-size-medium\"><span class=\"gwCurrencyINR\">Rs. </span><span>5,499.00</span></span></div><div class=\"dealListPrice\" aria-hidden=\"true\"><span aria-hidden=\"true\" class=\"a-size-base a-color-tertiary a-text-strike\"><span class=\"gwCurrencyINR\">Rs. </span><span>6,499.00</span></span></div><div tabindex=0><div aria-hidden=\"true\"><span class=\"a-color-tertiary gw-clock\"></span></div><div class=\"aok-hidden gw-clock-aria\" role=\"timer\" aria-hidden=\"false\"></div></div><script aria-hidden=\"true\">\n  P.when('A').execute(\"#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_ #4aa4cacfupdateClock\",function(A){\n    var cardSelector = \"#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_ #4aa4cacf\",\n      $ = A.$,\n      $clock = $(cardSelector + ' .gw-clock'),\n      $clockAria = $(cardSelector + ' .gw-clock-aria'),\n      event = cardSelector.replace(/\\s/g, \"\");\n    function greyDealPrice() {\n      var $dealPrice = $(cardSelector + ' .dealPrice');\n      $dealPrice.addClass('soldOutPrice');\n    }\n    A.on(event + 'updateTimer', function(displayString){\n      $clock.text(displayString.timerString);\n      $clockAria.text(displayString.readoutString);\n    });\n     A.on(event + 'soldOut', function(){\n      greyDealPrice();\n    });\n    A.on(event + 'ended', function(){\n      greyDealPrice();\n    });\n  });\n</\u0073cript><script aria-hidden=\"true\">\n  P.when('A', 'gw-count-down', \"#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_ #4aa4cacf\" + 'beginWatching').execute(\"#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_ #4aa4cacf\" + \"create-count-down\", function(A,GWCountDown){\n    var dealTimePrefix = {\n      starts_in: \"Starts in\",\n      ends_in: \"Ends in\",\n      has_ended: \"Deal has ended.\", \n      sold_out: \"Deal has sold out\", \n      on_waitlist: \"Deal is on waitlist\", \n      started: \"Deal has started!\",\n      starts_in_timer: \"Starts in _hours_ hours _minutes_ minutes _seconds_ seconds\",\n      ends_in_timer: \"Ends in _hours_ hours _minutes_ minutes _seconds_ seconds\"\n    };\n    var clock = new GWCountDown(\"#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_#4aa4cacf\", \"-46184961\", \"40214039\", \"{\\\"lastUpdated\\\":\\\"1617520784961\\\",\\\"totalCouponCount\\\":\\\"0\\\",\\\"isValid\\\":\\\"1\\\",\\\"msToEnd\\\":\\\"40214039\\\",\\\"msCacheTtl\\\":\\\"600000\\\",\\\"claimedCouponCount\\\":\\\"0\\\",\\\"*classHierarchy*\\\":[\\\"dcs.model.DealStatus\\\"],\\\"dealState\\\":\\\"AVAILABLE\\\",\\\"*className*\\\":\\\"dcs.model.DealStatus\\\",\\\"dealItemStatus\\\":{},\\\"msToStart\\\":\\\"-46184961\\\",\\\"percentClaimed\\\":0}\", dealTimePrefix);\n  });\n</\u0073cript><script aria-hidden=\"true\">\n  P.register(\"#deals-shoveler-ns_WMZVJ0QZ56QFCB33E37K_2669_ #4aa4cacf\" + \"beginWatching\");\n</\u0073cript></div></div></span></li>\n\n"]
        };
    </script>





















    </div>
    <hr data-display-at="smws" data-order-sm="2" data-order-ws="2" class="card-flow-row-break"></hr>
    <div id="desktop-2" data-gwi="{&quot;visible&quot;:&quot;desktop-2-visible&quot;,&quot;active&quot;:&quot;desktop-2-active&quot;}" data-col-span-ws="4" data-col-span-sm="3" data-order-ws="3" data-order-sm="3" data-display-at="smws" class="gw-col desktop-row gwi-row gw-widget-instrument gw-auto-height celwidget csm-placement-id-7ef258ae-58af-48d2-9b6f-78a1bb80951d desktop-gateway-btf_d67961d2-e713-434a-b358-aa527a2954e2 pd_rd_wg-DuDJh pd_rd_w-RRyrm pd_rd_r-f3c3b933-a933-48da-995b-0197caae93b0"
        data-pf_rd_p="7ef258ae-58af-48d2-9b6f-78a1bb80951d" data-pd_rd_wg="DuDJh" data-pd_rd_w="RRyrm" data-pd_rd_r="f3c3b933-a933-48da-995b-0197caae93b0" data-ref_="pd_gw_unk">
        <div class="a-section a-spacing-none ameyal-product-shoveler" id="y9v0ZIQBF47gv4msoE21rQ">
            <div id="101c1705-f9a3-4181-a14c-d25974ef8aac" class="a-section a-spacing-none shogun-widget card-lite product-shoveler aui-desktop fresh-shoveler">
                <div class="a-section as-title-block">
                    <h2 class="as-title-block-left"><span class="a-color-base">Up to 60% off | Home essentials from Indian startups</span></h2><span class="as-title-block-right"><a aria-label="Up to 60% off | Home essentials from Indian startups - See all offers" class="a-link-normal" href="/b?ie=UTF8&amp;node=15838070031&amp;pd_rd_w=RRyrm&amp;pf_rd_p=7ef258ae-58af-48d2-9b6f-78a1bb80951d&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh">See all offers</a></span></div>
                <div
                    class="a-section a-spacing-none feed-carousel">
                    <div class="a-section feed-carousel-viewport">
                        <ul class="a-unordered-list a-nostyle a-horizontal feed-carousel-shelf" role="list">
                            <li data-sgproduct="{&quot;asin&quot;:&quot;B074LY2CQH&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Dr-CHARCOAL-Non-Electric-Deodorizer-Dehumidifier/dp/B074LY2CQH/?_encoding=UTF8&amp;pd_rd_w=RRyrm&amp;pf_rd_p=7ef258ae-58af-48d2-9b6f-78a1bb80951d&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_unk"><img alt="Dr. CHARCOAL Non-Electric Air Purifier, Deodorizer and Dehumidifier for Shoe Rack, Wardrobe, Fridge, Gym Bag - 75 Grams..." src="https://m.media-amazon.com/images/I/51XnXV2nH1L._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/8177ayIrzQL._AC_SY400_.jpg"/></a></span></li>
                            <li
                                data-sgproduct="{&quot;asin&quot;:&quot;B07T8P25XM&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/STITCHNEST-Elephant-Cartoon-Printed-Cushion/dp/B07T8P25XM/?_encoding=UTF8&amp;pd_rd_w=RRyrm&amp;pf_rd_p=7ef258ae-58af-48d2-9b6f-78a1bb80951d&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_unk"><img alt="STITCHNEST Unique Cute Elephant Cartoon Blue Printed Canvas Cotton Cushion Covers, Set of 5 (12 x 12 Inches)" src="https://m.media-amazon.com/images/I/61cXzrjn-OL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/813+4KV2ZeL._AC_SY400_.jpg"/></a></span></li>
                                <li
                                    data-sgproduct="{&quot;asin&quot;:&quot;B01N952VHF&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/OxiClear-OxiMask-Pollution-Mask/dp/B01N952VHF/?_encoding=UTF8&amp;pd_rd_w=RRyrm&amp;pf_rd_p=7ef258ae-58af-48d2-9b6f-78a1bb80951d&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_unk"><img alt="OxiClear N99 Anti Pollution Face Mask with 4 Activated Carbon Filters &amp; Detachable Headband D.R.D.O Certified (Black)" src="https://m.media-amazon.com/images/I/41j6GUixh4L._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/61RHc8qyR3L._AC_SY400_.jpg"/></a></span></li>
                                    <li
                                        data-sgproduct="{&quot;asin&quot;:&quot;B08HNJGVFL&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/VSK-Mudda-Cover-Black-Without/dp/B08HNJGVFL/?_encoding=UTF8&amp;pd_rd_w=RRyrm&amp;pf_rd_p=7ef258ae-58af-48d2-9b6f-78a1bb80951d&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_unk"><img alt="VSK Bean Bag XXXL Sofa Mudda Cover Black (Without Beans) Cover only" src="https://m.media-amazon.com/images/I/41x3ZWliRyL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/81ITi0JGjaL._AC_SY400_.jpg"/></a></span></li>
                                        <li
                                            data-sgproduct="{&quot;asin&quot;:&quot;B077HZJR8N&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/BIO-BLOOMS-Treated-Perfect-Terrace/dp/B077HZJR8N/?_encoding=UTF8&amp;pd_rd_w=RRyrm&amp;pf_rd_p=7ef258ae-58af-48d2-9b6f-78a1bb80951d&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_unk"><img alt="Bio Blooms 100% UV Treated Poly Grow Bag for Terrace Gardening - Grow Vegetables, Fruits, Onion &amp; Other Leafy Vegetables..." src="https://m.media-amazon.com/images/I/41UM-PQ4gJL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/61RO0UoMVBL._AC_SY400_.jpg"/></a></span></li>
                                            <li
                                                data-sgproduct="{&quot;asin&quot;:&quot;B08NWDKYVC&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/FEROMONES-Fertilizer-Sticks-Plants-Purpose/dp/B08NWDKYVC/?_encoding=UTF8&amp;pd_rd_w=RRyrm&amp;pf_rd_p=7ef258ae-58af-48d2-9b6f-78a1bb80951d&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_unk"><img alt="FEROMONES Fertilizer Sticks for Plants - 100 Stick Fertilizer for Plants - All Purpose Plant Fertilizer Sticks for Pot..." src="https://m.media-amazon.com/images/I/51YKQvd7dmL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/81fARi18s9L._AC_SY400_.jpg"/></a></span></li>
                                                <li
                                                    data-sgproduct="{&quot;asin&quot;:&quot;B07QLXTTYQ&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/goodair-Impregnated-Activated-Purifier-European/dp/B07QLXTTYQ/?_encoding=UTF8&amp;pd_rd_w=RRyrm&amp;pf_rd_p=7ef258ae-58af-48d2-9b6f-78a1bb80951d&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_unk"><img alt="GOODAIR Royal Impregnated Activated Carbon Indoor Car Air Purifier | Non-electric | Elegant Silver" src="https://m.media-amazon.com/images/I/41S2XH-FHjL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/618A4ghUSCL._AC_SY400_.jpg"/></a></span></li>
                        </ul>
                        <div class="spinner" aria-hidden="true"><i class="gw-spinner" role="presentation"></i></div>
                    </div><a aria-label="Carousel previous slide" class="a-link-normal feed-carousel-control feed-left" tabindex="-1" href="#"><span class="gw-icon feed-arrow"></span></a><a aria-label="Carousel next slide" class="a-link-normal feed-carousel-control feed-right"
                        tabindex="-1" href="#"><span class="gw-icon feed-arrow"></span></a><span class="feed-scrollbar"><span class="feed-scrollbar-track"><span class="feed-scrollbar-thumb"></span></span>
                    </span>
            </div>
            <script type="text/javascript">
                P.when("component-feed-carousel").execute(function(c) {
                    c.createCarousel("#101c1705-f9a3-4181-a14c-d25974ef8aac .feed-carousel", 10, 0);
                });
            </script>
            <script id="101c1705-f9a3-4181-a14c-d25974ef8aac-btfCarouselContent" type="text/x-lazy-loaded-content">
                <li data-sgproduct="{&quot;asin&quot;:&quot;B074Y513W2&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Callas-Stackable-Kitchen-Cabinet-Organizer/dp/B074Y513W2/?_encoding=UTF8&amp;pd_rd_w=RRyrm&amp;pf_rd_p=7ef258ae-58af-48d2-9b6f-78a1bb80951d&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_unk"><img alt="Callas Stackable Kitchen Cabinet and Counter Shelf Organizer | Multipurpose Pantry Bedroom Bathroom Storage Racks (Pack..." src="https://m.media-amazon.com/images/I/41irweV7dcL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/71EQNGjU60L._AC_SY400_.jpg"/></a></span></li>
                <li
                    data-sgproduct="{&quot;asin&quot;:&quot;B0832XD7LP&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Callas-Expandable-Under-Sink-Organizer/dp/B0832XD7LP/?_encoding=UTF8&amp;pd_rd_w=RRyrm&amp;pf_rd_p=7ef258ae-58af-48d2-9b6f-78a1bb80951d&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_unk"><img alt="Callas Expandable Under Sink Organizer - 2 Tier Multifunctional Storage Rack, Shoe Rack, Spice Rack, Dish Rack with..." src="https://m.media-amazon.com/images/I/51qHzQd7OvL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/61r1gcMhDrL._AC_SY400_.jpg"/></a></span></li>
                    <li
                        data-sgproduct="{&quot;asin&quot;:&quot;B0859B5J8T&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/PURIFIT-Washing-Machine-Filter-Cartridge/dp/B0859B5J8T/?_encoding=UTF8&amp;pd_rd_w=RRyrm&amp;pf_rd_p=7ef258ae-58af-48d2-9b6f-78a1bb80951d&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_unk"><img alt="PURIFIT Washing Machine Filter Cartridge" src="https://m.media-amazon.com/images/I/31RoMmUrv9L._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/61L9yTNZlLL._AC_SY400_.jpg"/></a></span></li>
                        <li
                            data-sgproduct="{&quot;asin&quot;:&quot;B081N58YR8&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Insulated-Stainless-Double-Wall-Thermos-Refresh/dp/B081N58YR8/?_encoding=UTF8&amp;pd_rd_w=RRyrm&amp;pf_rd_p=7ef258ae-58af-48d2-9b6f-78a1bb80951d&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_unk"><img alt="Yacht Vacuum Insulated Stainless Steel Double-Wall Thermos Flask Travel Mug, Refresh, 400 ml, Black" src="https://m.media-amazon.com/images/I/31H18+bnK+L._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/71LMvU9PZ8L._AC_SY400_.jpg"/></a></span></li>
                            <li
                                data-sgproduct="{&quot;asin&quot;:&quot;B08QDCS6HX&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/DIVINE-OVERSEAS-Designer-Microfiber-Carnival/dp/B08QDCS6HX/?_encoding=UTF8&amp;pd_rd_w=RRyrm&amp;pf_rd_p=7ef258ae-58af-48d2-9b6f-78a1bb80951d&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_unk"><img alt="DIVINE OVERSEAS Kid&#x27;s Printed Designer Microfiber Bed Sheet with Pillow Cover (60&quot; x 90&quot; , Animal Carnival)" src="https://m.media-amazon.com/images/I/51dWgXmPiGL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/71sHtggjVzL._AC_SY400_.jpg"/></a></span></li>
                                <li
                                    data-sgproduct="{&quot;asin&quot;:&quot;B07YDYF12C&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Arts-Engineered-Mount-Router-Stand/dp/B07YDYF12C/?_encoding=UTF8&amp;pd_rd_w=RRyrm&amp;pf_rd_p=7ef258ae-58af-48d2-9b6f-78a1bb80951d&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_unk"><img alt="Ss Arts Engineered Wood Wall Mount WiFi Router Stand/Rack" src="https://m.media-amazon.com/images/I/416wNR6LqcL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/51zyIctEERL._AC_SY400_.jpg"/></a></span></li>
            </script>
            <script type="text/javascript">
                (function carouselBtf(d, w) {
                    var p = d.getElementById("101c1705-f9a3-4181-a14c-d25974ef8aac-btfCarouselContent"),
                        h = p && p.innerHTML,
                        v = h ? [h] : [];
                    w.GWData = w.GWData || {};
                    w.GWData['101c1705-f9a3-4181-a14c-d25974ef8aac'] = {
                        loaded: false,
                        data: v
                    };
                }(document, window));
            </script>
        </div>
    </div>
    <script>
        (function(f) {
            f(P._namespace('gwiAutoInstVisible'));
        }(function(P) {
            if (window.GWI) {
                GWI.Card.autoInstVisible('y9v0ZIQBF47gv4msoE21rQ');
            }
        }));
    </script>
    </div>
    <hr data-display-at="smws" data-order-sm="3" data-order-ws="3" class="card-flow-row-break"></hr>
    <div id="desktop-btf-grid-1" data-gwi="{&quot;visible&quot;:&quot;desktop-btf-grid-1-visible&quot;,&quot;active&quot;:&quot;desktop-btf-grid-1-active&quot;}" data-display-at="smws" data-order-ws="4" class="gw-col celwidget csm-placement-id-af63198d-74d9-4aa8-9a49-16f21c6d216e desktop-gateway-btf_986e0a9c-3df2-47d2-a1f6-08b6a76e5697 pd_rd_wg-DuDJh pd_rd_w-EoUAn pd_rd_r-f3c3b933-a933-48da-995b-0197caae93b0"
        data-order-sm="4" data-pf_rd_p="af63198d-74d9-4aa8-9a49-16f21c6d216e" data-pd_rd_wg="DuDJh" data-pd_rd_w="EoUAn" data-pd_rd_r="f3c3b933-a933-48da-995b-0197caae93b0" data-ref_="pd_gw_unk">
        <div id="_7uk4UBg06WxK7ngoJJj4g" class="a-cardui fluid-fat-image-link fluid-card fluid-fat-image-link" data-a-card-type="basic">
            <div class="a-cardui-header">
                <h2 class="a-color-base headline truncate-2line">Effective dishwashing for Indian cooking</h2>
            </div>
            <div class="a-cardui-body">
                <a class="a-link-normal center-image aok-block image-window" href="/b?node=21074454031">
                    <div class="a-section a-spacing-none fluid-image-container"><img alt="dishwashers" src="https://images-eu.ssl-images-amazon.com/images/G/31/IMG15/Irfan/DW_CC_-_March_379x304._SY304_CB655397356_.jpg" class="landscape-image" data-a-hires="https://images-eu.ssl-images-amazon.com/images/G/31/IMG15/Irfan/DW_CC_-_March_758x608._SY608_CB655397356_.jpg"
                        /></div>
                </a>
            </div>
            <div class="a-cardui-footer"><a class="a-link-normal see-more truncate-1line" href="/b?node=21074454031">See more</a></div>
        </div>
        <script>
            (function(f) {
                f(P._namespace('gwiAutoInstVisible'));
            }(function(P) {
                if (window.GWI) {
                    GWI.Card.autoInstVisible('_7uk4UBg06WxK7ngoJJj4g');
                }
            }));
        </script>
        <script>
            P.when('mix:fluid-fat-image-link').execute(function(cardModule) {
                cardModule.init('_7uk4UBg06WxK7ngoJJj4g');
                if (window.GWI) {
                    window.GWI.Card.autoInstActive('_7uk4UBg06WxK7ngoJJj4g');
                }
            });
        </script>
    </div>
    <div id="desktop-btf-grid-2" data-gwi="{&quot;visible&quot;:&quot;desktop-btf-grid-2-visible&quot;,&quot;active&quot;:&quot;desktop-btf-grid-2-active&quot;}" data-display-at="smws" data-order-ws="4" class="gw-col celwidget csm-placement-id-6a89702f-a666-414d-8d5e-31bc46ba3dd1 desktop-gateway-btf_83ba9faa-56f2-4109-9ebc-e22839687764 pd_rd_wg-DuDJh pd_rd_w-y7WrU pd_rd_r-f3c3b933-a933-48da-995b-0197caae93b0"
        data-order-sm="4" data-pf_rd_p="6a89702f-a666-414d-8d5e-31bc46ba3dd1" data-pd_rd_wg="DuDJh" data-pd_rd_w="y7WrU" data-pd_rd_r="f3c3b933-a933-48da-995b-0197caae93b0" data-ref_="pd_gw_unk">
        <div id="hBVzN9WcqfBWEiVNrBJEKQ" class="a-cardui fluid-fat-image-link fluid-card fluid-fat-image-link" data-a-card-type="basic">
            <div class="a-cardui-header">
                <h2 class="a-color-base headline truncate-2line">For efficient home working</h2>
            </div>
            <div class="a-cardui-body">
                <a class="a-link-normal center-image aok-block image-window" href="/b?ie=UTF8&amp;node=21676424031">
                    <div class="a-section a-spacing-none fluid-image-container"><img alt="For efficient home working" src="https://images-eu.ssl-images-amazon.com/images/G/31/IMG19/Furniture/MSO/WFH_379x304._SY304_CB430182042_.jpg" class="landscape-image" data-a-hires="https://images-eu.ssl-images-amazon.com/images/G/31/IMG19/Furniture/MSO/WFH_758x608._SY608_CB430182042_.jpg"
                        /></div>
                </a>
            </div>
            <div class="a-cardui-footer"><a class="a-link-normal see-more truncate-1line" href="/b?ie=UTF8&amp;node=21676424031">See more</a></div>
        </div>
        <script>
            (function(f) {
                f(P._namespace('gwiAutoInstVisible'));
            }(function(P) {
                if (window.GWI) {
                    GWI.Card.autoInstVisible('hBVzN9WcqfBWEiVNrBJEKQ');
                }
            }));
        </script>
        <script>
            P.when('mix:fluid-fat-image-link').execute(function(cardModule) {
                cardModule.init('hBVzN9WcqfBWEiVNrBJEKQ');
                if (window.GWI) {
                    window.GWI.Card.autoInstActive('hBVzN9WcqfBWEiVNrBJEKQ');
                }
            });
        </script>
    </div>
    <div id="desktop-btf-grid-3" data-gwi="{&quot;visible&quot;:&quot;desktop-btf-grid-3-visible&quot;,&quot;active&quot;:&quot;desktop-btf-grid-3-active&quot;}" data-display-at="smws" data-order-ws="4" class="gw-col celwidget csm-placement-id-4393011c-658e-43a4-9750-7f3d887382ab desktop-gateway-btf_32ac020a-53d3-4c58-82f9-7eb032ec40ad pd_rd_wg-DuDJh pd_rd_w-3Cz5E pd_rd_r-f3c3b933-a933-48da-995b-0197caae93b0"
        data-order-sm="4" data-pf_rd_p="4393011c-658e-43a4-9750-7f3d887382ab" data-pd_rd_wg="DuDJh" data-pd_rd_w="3Cz5E" data-pd_rd_r="f3c3b933-a933-48da-995b-0197caae93b0" data-ref_="pd_gw_unk">
        <div id="wf7zMe-TiyRILPEeQK7lWQ" class="a-cardui fluid-quad-card fluid-card fluid-quad-image-label fluid-quad-image-label" data-a-card-type="basic">
            <div class="a-cardui-header">
                <h2 class="a-color-base headline truncate-2line">Keep calm &amp; game-on</h2>
            </div>
            <div class="a-cardui-body">
                <div class="a-section a-spacing-small grid-row-1">
                    <div class="a-section a-spacing-none quadrant-container quadrant-container-0">
                        <a aria-label="Consoles | PS4, Xbox, Nintendo &amp; more" class="a-link-normal image-redirect aok-block image-window" href="/l/22649649031">
                            <div class="a-section a-spacing-none fluid-image-container"><img alt="Consoles | PS4, Xbox, Nintendo &amp; more" src="https://images-eu.ssl-images-amazon.com/images/G/31/VG-2019Dec/PS4-nintendo-1x._SY116_CB657184179_.jpg" class="landscape-image" data-a-hires="https://images-eu.ssl-images-amazon.com/images/G/31/VG-2019Dec/PS4-nintendo-2x._SY232_CB657184179_.jpg"
                                /></div>
                            <div class="a-section a-spacing-none image-label truncate-2line"><span class="a-size-small a-color-base aok-align-center aok-inline-block">Consoles | PS4, Xbox, Nintendo &amp; more</span></div>
                        </a>
                    </div>
                    <div class="a-section a-spacing-none quadrant-container quadrant-container-1">
                        <a aria-label="Xbox Series S | Order now" class="a-link-normal image-redirect aok-block image-window" href="/dp/B08J89D6BW">
                            <div class="a-section a-spacing-none fluid-image-container"><img alt="Xbox Series S | Order now" src="https://images-eu.ssl-images-amazon.com/images/G/31/VG-2019Dec/Media-Vgsw/xbox-1x._SY116_CB657748475_.jpg" class="landscape-image" data-a-hires="https://images-eu.ssl-images-amazon.com/images/G/31/VG-2019Dec/Media-Vgsw/xbox-2x._SY232_CB657748475_.jpg"
                                /></div>
                            <div class="a-section a-spacing-none image-label truncate-2line"><span class="a-size-small a-color-base aok-align-center aok-inline-block">Xbox Series S | Order now</span></div>
                        </a>
                    </div>
                </div>
                <div class="a-section grid-row-2">
                    <div class="a-section a-spacing-none quadrant-container quadrant-container-0">
                        <a aria-label="Top chart games" class="a-link-normal image-redirect aok-block image-window" href="/b?node=21004898031">
                            <div class="a-section a-spacing-none fluid-image-container"><img alt="Top chart games" src="https://images-eu.ssl-images-amazon.com/images/G/31/VG-2019Dec/Media-Vgsw/QC-3-1x._SY116_CB659388766_.jpg" class="landscape-image" data-a-hires="https://images-eu.ssl-images-amazon.com/images/G/31/VG-2019Dec/Media-Vgsw/QC-3-2x._SY232_CB659388540_.jpg"
                                /></div>
                            <div class="a-section a-spacing-none image-label truncate-2line"><span class="a-size-small a-color-base aok-align-center aok-inline-block">Top chart games</span></div>
                        </a>
                    </div>
                    <div class="a-section a-spacing-none quadrant-container quadrant-container-1">
                        <a aria-label="Play like a pro | Accessories" class="a-link-normal image-redirect aok-block image-window" href="/b?ie=UTF8&amp;node=4092116031">
                            <div class="a-section a-spacing-none fluid-image-container"><img alt="Play like a pro | Accessories" src="https://images-eu.ssl-images-amazon.com/images/G/31/VG-2019Dec/Media-Vgsw/QC-4-1x._SY116_CB659388766_.jpg" class="landscape-image" data-a-hires="https://images-eu.ssl-images-amazon.com/images/G/31/VG-2019Dec/Media-Vgsw/QC-4-2x._SY232_CB659388540_.jpg"
                                /></div>
                            <div class="a-section a-spacing-none image-label truncate-2line"><span class="a-size-small a-color-base aok-align-center aok-inline-block">Play like a pro | Accessories</span></div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="a-cardui-footer"><a aria-label="Keep calm &amp; game-on - See more" class="a-link-normal see-more truncate-1line" href="/b?ie=UTF8&amp;node=976460031">See more</a></div>
        </div>
        <script>
            (function(f) {
                f(P._namespace('gwiAutoInstVisible'));
            }(function(P) {
                if (window.GWI) {
                    GWI.Card.autoInstVisible('wf7zMe-TiyRILPEeQK7lWQ');
                }
            }));
        </script>
        <script>
            P.when('mix:fluid-quad-image-label').execute(function(cardModule) {
                cardModule.init('wf7zMe-TiyRILPEeQK7lWQ');
                if (window.GWI) {
                    window.GWI.Card.autoInstActive('wf7zMe-TiyRILPEeQK7lWQ');
                }
            });
        </script>
    </div>
    <hr data-display-at="sm" data-order-sm="4" class="card-flow-row-break"></hr>
    <div id="desktop-btf-grid-4" data-gwi="{&quot;visible&quot;:&quot;desktop-btf-grid-4-visible&quot;,&quot;active&quot;:&quot;desktop-btf-grid-4-active&quot;}" data-display-at="smws" data-order-ws="4" class="gw-col celwidget csm-placement-id-e214966d-e490-4d68-936d-49a5639ac7b5 desktop-gateway-btf_e3d18e2c-611a-472a-ae23-9483e15fa67c pd_rd_wg-DuDJh pd_rd_w-jiGcM pd_rd_r-f3c3b933-a933-48da-995b-0197caae93b0"
        data-order-sm="9" data-pf_rd_p="e214966d-e490-4d68-936d-49a5639ac7b5" data-pd_rd_wg="DuDJh" data-pd_rd_w="jiGcM" data-pd_rd_r="f3c3b933-a933-48da-995b-0197caae93b0" data-ref_="pd_gw_unk">
        <div id="6oQeUpSHXpV8UXdEOVS29A" class="a-cardui fluid-quad-card fluid-card fluid-quad-image-label fluid-quad-image-label" data-a-card-type="basic">
            <div class="a-cardui-header">
                <h2 class="a-color-base headline truncate-2line">Pick from these types of masks</h2>
            </div>
            <div class="a-cardui-body">
                <div class="a-section a-spacing-small grid-row-1">
                    <div class="a-section a-spacing-none quadrant-container quadrant-container-0">
                        <a aria-label="N95 Masks &amp; respirators" class="a-link-normal image-redirect aok-block image-window" href="/s/ref=sl_gw_feb20?i=industrial&amp;rh=n%3A5866078031%2Cn%3A5866083031%2Cn%3A5866085031%2Cn%3A21460753031&amp;s=popularity-rank&amp;qid=1590906480&amp;ref=sr_st_popularity-rank">
                            <div class="a-section a-spacing-none fluid-image-container"><img alt="N95 Masks &amp; respirators" src="https://images-eu.ssl-images-amazon.com/images/G/31/img21/Fashion/Gateway/Mask_Store/1._SY116_CB656502854_.jpg" class="landscape-image" data-a-hires="https://images-eu.ssl-images-amazon.com/images/G/31/img21/Fashion/Gateway/Mask_Store/01._SY232_CB656502893_.jpg"
                                /></div>
                            <div class="a-section a-spacing-none image-label truncate-2line"><span class="a-size-small a-color-base aok-align-center aok-inline-block">N95 Masks &amp; respirators</span></div>
                        </a>
                    </div>
                    <div class="a-section a-spacing-none quadrant-container quadrant-container-1">
                        <a aria-label="Cloth masks" class="a-link-normal image-redirect aok-block image-window" href="/b/ref=sl_gw_feb20?node=21691841031">
                            <div class="a-section a-spacing-none fluid-image-container"><img alt="Cloth masks" src="https://images-eu.ssl-images-amazon.com/images/G/31/img21/Fashion/Gateway/Mask_Store/2._SY116_CB656502854_.jpg" class="landscape-image" data-a-hires="https://images-eu.ssl-images-amazon.com/images/G/31/img21/Fashion/Gateway/Mask_Store/02._SY232_CB656502893_.jpg"
                                /></div>
                            <div class="a-section a-spacing-none image-label truncate-2line"><span class="a-size-small a-color-base aok-align-center aok-inline-block">Cloth masks</span></div>
                        </a>
                    </div>
                </div>
                <div class="a-section grid-row-2">
                    <div class="a-section a-spacing-none quadrant-container quadrant-container-0">
                        <a aria-label="Face coverings" class="a-link-normal image-redirect aok-block image-window" href="/s/ref=sl_gw_feb20?i=apparel&amp;rh=n%3A1571271031%2Cn%3A1597453031%2Cn%3A1597455031%2Cn%3A21492768031&amp;s=popularity-rank&amp;qid=1590906628&amp;ref=sr_st_popularity-rank">
                            <div class="a-section a-spacing-none fluid-image-container"><img alt="Face coverings" src="https://images-eu.ssl-images-amazon.com/images/G/31/img21/Fashion/Gateway/Mask_Store/3._SY116_CB656502854_.jpg" class="landscape-image" data-a-hires="https://images-eu.ssl-images-amazon.com/images/G/31/img21/Fashion/Gateway/Mask_Store/03._SY232_CB656502893_.jpg"
                                /></div>
                            <div class="a-section a-spacing-none image-label truncate-2line"><span class="a-size-small a-color-base aok-align-center aok-inline-block">Face coverings</span></div>
                        </a>
                    </div>
                    <div class="a-section a-spacing-none quadrant-container quadrant-container-1">
                        <a aria-label="View the mask store" class="a-link-normal image-redirect aok-block image-window" href="/b/ref=sl_gw_feb20?node=21474741031">
                            <div class="a-section a-spacing-none fluid-image-container"><img alt="View the mask store" src="https://images-eu.ssl-images-amazon.com/images/G/31/img21/Fashion/Gateway/Mask_Store/4._SY116_CB656502854_.jpg" class="landscape-image" data-a-hires="https://images-eu.ssl-images-amazon.com/images/G/31/img21/Fashion/Gateway/Mask_Store/04._SY232_CB656502893_.jpg"
                                /></div>
                            <div class="a-section a-spacing-none image-label truncate-2line"><span class="a-size-small a-color-base aok-align-center aok-inline-block">View the mask store</span></div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="a-cardui-footer"><a aria-label="Pick from these types of masks - View all" class="a-link-normal see-more truncate-1line" href="/b/ref=sl_gw_feb20?node=21474741031">View all</a></div>
        </div>
        <script>
            (function(f) {
                f(P._namespace('gwiAutoInstVisible'));
            }(function(P) {
                if (window.GWI) {
                    GWI.Card.autoInstVisible('6oQeUpSHXpV8UXdEOVS29A');
                }
            }));
        </script>
        <script>
            P.when('mix:fluid-quad-image-label').execute(function(cardModule) {
                cardModule.init('6oQeUpSHXpV8UXdEOVS29A');
                if (window.GWI) {
                    window.GWI.Card.autoInstActive('6oQeUpSHXpV8UXdEOVS29A');
                }
            });
        </script>
    </div>
    <hr data-display-at="ws" data-order-ws="4" class="card-flow-row-break"></hr>
    <div id="desktop-3" data-gwi="{&quot;visible&quot;:&quot;desktop-3-visible&quot;,&quot;active&quot;:&quot;desktop-3-active&quot;}" data-col-span-ws="4" data-col-span-sm="3" data-order-ws="5" data-order-sm="5" data-display-at="smws" class="gw-col desktop-row gwi-row gw-widget-instrument gw-auto-height celwidget csm-placement-id-63c0cb65-cd89-460f-a00a-98b3490032ab desktop-gateway-btf_2065ce3c-af57-4ffc-9dc5-1ae071582780 pd_rd_wg-DuDJh pd_rd_w-8TDld pd_rd_r-f3c3b933-a933-48da-995b-0197caae93b0"
        data-pf_rd_p="63c0cb65-cd89-460f-a00a-98b3490032ab" data-pd_rd_wg="DuDJh" data-pd_rd_w="8TDld" data-pd_rd_r="f3c3b933-a933-48da-995b-0197caae93b0" data-ref_="pd_gw_unk">
        <div class="a-section a-spacing-none ameyal-product-shoveler" id="Q92Xf3iQLSqwnxlr8GrDww">
            <div id="4f596e31-c7b3-4021-8940-6f15d33c3159" class="a-section a-spacing-none shogun-widget card-lite product-shoveler aui-desktop fresh-shoveler">
                <div class="a-section as-title-block">
                    <h2 class="as-title-block-left"><span class="a-color-base">Up to 60% off | Tools and home improvement</span></h2><span class="as-title-block-right"><a aria-label="Up to 60% off | Tools and home improvement - See more" class="a-link-normal" href="/l/4286640031?pd_rd_w=8TDld&amp;pf_rd_p=63c0cb65-cd89-460f-a00a-98b3490032ab&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh">See more</a></span></div>
                <div
                    class="a-section a-spacing-none feed-carousel">
                    <div class="a-section feed-carousel-viewport">
                        <ul class="a-unordered-list a-nostyle a-horizontal feed-carousel-shelf" role="list">
                            <li data-sgproduct="{&quot;asin&quot;:&quot;B07D4T4YT2&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Spotzero-Milton-Stainless-Wringer-refills/dp/B07D4T4YT2/?_encoding=UTF8&amp;pd_rd_w=8TDld&amp;pf_rd_p=63c0cb65-cd89-460f-a00a-98b3490032ab&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_unk"><img alt="Spotzero by Milton Prime Mop with Big Wheels and Stainless Steel Wringer (Aqua green, 2 refills)" src="https://m.media-amazon.com/images/I/415hB0+T6QL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/81vwNP4jEcL._AC_SY400_.jpg"/></a></span></li>
                            <li
                                data-sgproduct="{&quot;asin&quot;:&quot;B00INTGY6O&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Bosch-GSB-500W-500-RE/dp/B00INTGY6O/?_encoding=UTF8&amp;pd_rd_w=8TDld&amp;pf_rd_p=63c0cb65-cd89-460f-a00a-98b3490032ab&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_unk"><img alt="Bosch GSB 500W 500 RE Tool Set (Blue)" src="https://m.media-amazon.com/images/I/41crq3T0pAL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/81fP7IRuKKL._AC_SY400_.jpg"/></a></span></li>
                                <li
                                    data-sgproduct="{&quot;asin&quot;:&quot;B07LDKFM2Y&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Scotch-Brite-Bucket-Spin-Green-Refills/dp/B07LDKFM2Y/?_encoding=UTF8&amp;pd_rd_w=8TDld&amp;pf_rd_p=63c0cb65-cd89-460f-a00a-98b3490032ab&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_unk"><img alt="Scotch-Brite 2-in-1 Bucket Spin Mop (Green, 2 Refills)" src="https://m.media-amazon.com/images/I/51ApNWkMeKL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/71LcXhHbMWL._AC_SY400_.jpg"/></a></span></li>
                                    <li
                                        data-sgproduct="{&quot;asin&quot;:&quot;B00V679BEC&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Blue-Star-BWD3FMRGA-Dispenser-Refrigerator/dp/B00V679BEC/?_encoding=UTF8&amp;pd_rd_w=8TDld&amp;pf_rd_p=63c0cb65-cd89-460f-a00a-98b3490032ab&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_unk"><img alt="Blue Star BWD3FMRGA Star Hot, Cold and Normal Water Dispenser with Refrigerator(Standard)" src="https://m.media-amazon.com/images/I/31XIEnZjcUL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/61Prcy7d+mL._AC_SY400_.jpg"/></a></span></li>
                                        <li
                                            data-sgproduct="{&quot;asin&quot;:&quot;B006J4RSJM&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Bathla-Advance-5-Step-Foldable-Aluminium/dp/B006J4RSJM/?_encoding=UTF8&amp;pd_rd_w=8TDld&amp;pf_rd_p=63c0cb65-cd89-460f-a00a-98b3490032ab&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_unk"><img alt="Bathla Advance 5-Step Foldable Aluminium Ladder with Sure-Hinge Technology (Orange)" src="https://m.media-amazon.com/images/I/51AehEs-F3L._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/81Ki2949tTL._AC_SY400_.jpg"/></a></span></li>
                                            <li
                                                data-sgproduct="{&quot;asin&quot;:&quot;B01MA1JLOM&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Spotzero-Milton-Bigger-Cleaning-Refills/dp/B01MA1JLOM/?_encoding=UTF8&amp;pd_rd_w=8TDld&amp;pf_rd_p=63c0cb65-cd89-460f-a00a-98b3490032ab&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_unk"><img alt="Spotzero by Milton Elite Spin Mop with Bigger Wheels and Plastic Auto Fold Handle for 360 Degree Cleaning (Aqua Green,..." src="https://m.media-amazon.com/images/I/41neyC4vESL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/716OnT32WgL._AC_SY400_.jpg"/></a></span></li>
                                                <li
                                                    data-sgproduct="{&quot;asin&quot;:&quot;B072LWCC6N&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Voltas-Pearl-Black-Water-Dispenser/dp/B072LWCC6N/?_encoding=UTF8&amp;pd_rd_w=8TDld&amp;pf_rd_p=63c0cb65-cd89-460f-a00a-98b3490032ab&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_unk"><img alt="Voltas Plastic Pearl Water Dispenser (Standard Size, Black)" src="https://m.media-amazon.com/images/I/313XtRXE6lL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/61YL+lVr+tL._AC_SY400_.jpg"/></a></span></li>
                        </ul>
                        <div class="spinner" aria-hidden="true"><i class="gw-spinner" role="presentation"></i></div>
                    </div><a aria-label="Carousel previous slide" class="a-link-normal feed-carousel-control feed-left" tabindex="-1" href="#"><span class="gw-icon feed-arrow"></span></a><a aria-label="Carousel next slide" class="a-link-normal feed-carousel-control feed-right"
                        tabindex="-1" href="#"><span class="gw-icon feed-arrow"></span></a><span class="feed-scrollbar"><span class="feed-scrollbar-track"><span class="feed-scrollbar-thumb"></span></span>
                    </span>
            </div>
            <script type="text/javascript">
                P.when("component-feed-carousel").execute(function(c) {
                    c.createCarousel("#4f596e31-c7b3-4021-8940-6f15d33c3159 .feed-carousel", 10, 0);
                });
            </script>
            <script id="4f596e31-c7b3-4021-8940-6f15d33c3159-btfCarouselContent" type="text/x-lazy-loaded-content">
                <li data-sgproduct="{&quot;asin&quot;:&quot;B07JKYYRCM&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Mantra-MFS100-v54-Service-Year/dp/B07JKYYRCM/?_encoding=UTF8&amp;pd_rd_w=8TDld&amp;pf_rd_p=63c0cb65-cd89-460f-a00a-98b3490032ab&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_unk"><img alt="Mantra MFS100 v54 OTG with RD Service Finger Print Scanner (Black)" src="https://m.media-amazon.com/images/I/21jebXLwU7L._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/41kx14ZQQHL._AC_SY400_.jpg"/></a></span></li>
                <li
                    data-sgproduct="{&quot;asin&quot;:&quot;B0119ROQXY&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Bosch-GSB-10-RE-Professional/dp/B0119ROQXY/?_encoding=UTF8&amp;pd_rd_w=8TDld&amp;pf_rd_p=63c0cb65-cd89-460f-a00a-98b3490032ab&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_unk"><img alt="Bosch GSB 500W 10 RE Professional Tool Kit, MS &amp; Plastic (Blue, Set of 100 Tools)" src="https://m.media-amazon.com/images/I/51ou-JIcsLL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/A1rvzUXyHrL._AC_SY400_.jpg"/></a></span></li>
                    <li
                        data-sgproduct="{&quot;asin&quot;:&quot;B07TFD2THQ&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Godrej-Security-Solutions-Forte-Digital/dp/B07TFD2THQ/?_encoding=UTF8&amp;pd_rd_w=8TDld&amp;pf_rd_p=63c0cb65-cd89-460f-a00a-98b3490032ab&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_unk"><img alt="Godrej Security Solutions Forte Pro 15 litres Digital Electronic Safe Locker (Light Grey)" src="https://m.media-amazon.com/images/I/318QDo3bjzL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/71h4k9ECx4L._AC_SY400_.jpg"/></a></span></li>
                        <li
                            data-sgproduct="{&quot;asin&quot;:&quot;B074Z6B35N&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Bosch-GBL-620-Watt-Blower-Blue/dp/B074Z6B35N/?_encoding=UTF8&amp;pd_rd_w=8TDld&amp;pf_rd_p=63c0cb65-cd89-460f-a00a-98b3490032ab&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_unk"><img alt="Bosch GBL 620-Watt Air Blower (Blue)" src="https://m.media-amazon.com/images/I/41WXhVC1UbL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/61RKarHQqHL._AC_SY400_.jpg"/></a></span></li>
                            <li
                                data-sgproduct="{&quot;asin&quot;:&quot;B071JWBFDT&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Esquire-Elegant-Spin-Extra-Refill/dp/B071JWBFDT/?_encoding=UTF8&amp;pd_rd_w=8TDld&amp;pf_rd_p=63c0cb65-cd89-460f-a00a-98b3490032ab&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_unk"><img alt="Esquire Elegant 360?? Spin Mop Set with Additional Refill" src="https://m.media-amazon.com/images/I/31bt5NJ26vL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/71ctVUjUqxL._AC_SY400_.jpg"/></a></span></li>
                                <li
                                    data-sgproduct="{&quot;asin&quot;:&quot;B081HNBRD8&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Spotzero-Milton-Royale-Green-Wringer/dp/B081HNBRD8/?_encoding=UTF8&amp;pd_rd_w=8TDld&amp;pf_rd_p=63c0cb65-cd89-460f-a00a-98b3490032ab&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_unk"><img alt="Spotzero by Milton Royale Steel Wringer Spin Mop With Big Wheels (Aqua Green, 2 Refills)" src="https://m.media-amazon.com/images/I/41R-hlOuiLL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/81kcjZ96r9L._AC_SY400_.jpg"/></a></span></li>
                                    <li
                                        data-sgproduct="{&quot;asin&quot;:&quot;B00L6TMCFU&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Gala-wheels-bucket-cleaning-refills/dp/B00L6TMCFU/?_encoding=UTF8&amp;pd_rd_w=8TDld&amp;pf_rd_p=63c0cb65-cd89-460f-a00a-98b3490032ab&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_unk"><img alt="Gala Quick Spin Mop with Wheels and Bucket Floor Cleaning with 2 Microfiber Refills(Light Blue) (145790)" src="https://m.media-amazon.com/images/I/41v07v+rOyL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/61yq-0fHMQL._AC_SY400_.jpg"/></a></span></li>
                                        <li
                                            data-sgproduct="{&quot;asin&quot;:&quot;B008XT42JU&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/GM-Modular-3060-Book-Multicolour/dp/B008XT42JU/?_encoding=UTF8&amp;pd_rd_w=8TDld&amp;pf_rd_p=63c0cb65-cd89-460f-a00a-98b3490032ab&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_unk"><img alt="GM 3060 E-Book 4 + 1 Power Strip with Master Switch, Indicator, Safety Shutter &amp; 4 international sockets" src="https://m.media-amazon.com/images/I/31KCoUwjVaL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/61LKj9-dinL._AC_SY400_.jpg"/></a></span></li>
                                            <li
                                                data-sgproduct="{&quot;asin&quot;:&quot;B00SQXEXPQ&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Bathla-Advance-6-Step-Foldable-Aluminium/dp/B00SQXEXPQ/?_encoding=UTF8&amp;pd_rd_w=8TDld&amp;pf_rd_p=63c0cb65-cd89-460f-a00a-98b3490032ab&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_unk"><img alt="Bathla Advance 6-Step Foldable Aluminium Ladder with Sure-Hinge Technology (Orange)" src="https://m.media-amazon.com/images/I/51qJXPRbc8L._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/81w+VM61ZyL._AC_SY400_.jpg"/></a></span></li>
                                                <li
                                                    data-sgproduct="{&quot;asin&quot;:&quot;B07P9JF8RB&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/iBELL-TD13-100-650W-Professional-Tool/dp/B07P9JF8RB/?_encoding=UTF8&amp;pd_rd_w=8TDld&amp;pf_rd_p=63c0cb65-cd89-460f-a00a-98b3490032ab&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_unk"><img alt="IBELL IBL TD13-100, 650W Professional Tool Kit (Red) Pack of 115" src="https://m.media-amazon.com/images/I/51pNiR0xIAL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/71ml9jgVpZL._AC_SY400_.jpg"/></a></span></li>
                                                    <li
                                                        data-sgproduct="{&quot;asin&quot;:&quot;B07TD87TPL&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Godrej-Security-Solutions-Forte-Digital/dp/B07TD87TPL/?_encoding=UTF8&amp;pd_rd_w=8TDld&amp;pf_rd_p=63c0cb65-cd89-460f-a00a-98b3490032ab&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_unk"><img alt="Godrej Security Solutions Forte Pro 10 litres Digital Electronic Safe Locker for Home &amp; Office with Motorized Locking..." src="https://m.media-amazon.com/images/I/31a8P3YwjwL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/51byBLC6n5L._AC_SY400_.jpg"/></a></span></li>
            </script>
            <script type="text/javascript">
                (function carouselBtf(d, w) {
                    var p = d.getElementById("4f596e31-c7b3-4021-8940-6f15d33c3159-btfCarouselContent"),
                        h = p && p.innerHTML,
                        v = h ? [h] : [];
                    w.GWData = w.GWData || {};
                    w.GWData['4f596e31-c7b3-4021-8940-6f15d33c3159'] = {
                        loaded: false,
                        data: v
                    };
                }(document, window));
            </script>
        </div>
    </div>
    <script>
        (function(f) {
            f(P._namespace('gwiAutoInstVisible'));
        }(function(P) {
            if (window.GWI) {
                GWI.Card.autoInstVisible('Q92Xf3iQLSqwnxlr8GrDww');
            }
        }));
    </script>
    </div>
    <hr data-display-at="smws" data-order-sm="5" data-order-ws="5" class="card-flow-row-break"></hr>
    <div id="desktop-4" data-gwi="{&quot;visible&quot;:&quot;desktop-4-visible&quot;,&quot;active&quot;:&quot;desktop-4-active&quot;}" data-col-span-ws="4" data-col-span-sm="3" data-order-ws="7" data-order-sm="7" data-display-at="smws" class="gw-col desktop-row gwi-row gw-widget-instrument gw-auto-height celwidget csm-placement-id-81d5efb0-290d-4fcb-a35f-714a220292f3 desktop-gateway-btf_hfs-everyday1-fp.SUPPLIES pd_rd_wg-DuDJh pd_rd_w-n14J1 pd_rd_r-f3c3b933-a933-48da-995b-0197caae93b0"
        data-pf_rd_p="81d5efb0-290d-4fcb-a35f-714a220292f3" data-pd_rd_wg="DuDJh" data-pd_rd_w="n14J1" data-pd_rd_r="f3c3b933-a933-48da-995b-0197caae93b0" data-ref_="pd_gw_trq_ed">
        <div class="a-section a-spacing-none ameyal-product-shoveler" id="mFcJ1YgutKOtCOjJybiQpA">
            <div id="a77517db-5dc0-45cc-8799-84d21dc44506" class="a-section a-spacing-none shogun-widget card-lite product-shoveler aui-desktop fresh-shoveler">
                <div class="a-section as-title-block">
                    <h2 class="as-title-block-left"><span class="a-color-base">More everyday essentials to explore</span></h2><span class="as-title-block-right"></span></div>
                <div class="a-section a-spacing-none feed-carousel">
                    <div class="a-section feed-carousel-viewport">
                        <ul class="a-unordered-list a-nostyle a-horizontal feed-carousel-shelf" role="list">
                            <li data-sgproduct="{&quot;asin&quot;:&quot;B088R178KK&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/HACER-HC0001-Disposable-Protection-Non-woven/dp/B088R178KK/?_encoding=UTF8&amp;pd_rd_w=n14J1&amp;pf_rd_p=81d5efb0-290d-4fcb-a35f-714a220292f3&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_trq_ed"><img alt="HACER HC0001 3 Ply Non Surgical Disposable Face Mask 25 GSM Bacterial Filtration Efficiency(BFE)???95% Unisex Nose Mouth..." src="https://m.media-amazon.com/images/I/41plMfeAOHL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/61coG1ueRhL._AC_SY400_.jpg"/></a></span></li>
                            <li
                                data-sgproduct="{&quot;asin&quot;:&quot;B01MZ3LC2Q&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Careway-Medical-Examination-Disposable-Powderd/dp/B01MZ3LC2Q/?_encoding=UTF8&amp;pd_rd_w=n14J1&amp;pf_rd_p=81d5efb0-290d-4fcb-a35f-714a220292f3&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_trq_ed"><img alt="Careway Latex Medical Examination Disposable Hand Gloves, White, Medium, 100 Piece" src="https://m.media-amazon.com/images/I/41VO0YpTnnL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/41VO0YpTnnL._AC_SY400_.jpg"/></a></span></li>
                                <li
                                    data-sgproduct="{&quot;asin&quot;:&quot;B07NYQZF8C&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Fresubin-Onco-Restoring-Nutitional-Balance/dp/B07NYQZF8C/?_encoding=UTF8&amp;pd_rd_w=n14J1&amp;pf_rd_p=81d5efb0-290d-4fcb-a35f-714a220292f3&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_trq_ed"><img alt="Fresubin Onco, Restoring Nutitional Balance, 400 Gram" src="https://m.media-amazon.com/images/I/31oL78VZNjL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/71k0FthJm2L._AC_SY400_.jpg"/></a></span></li>
                                    <li
                                        data-sgproduct="{&quot;asin&quot;:&quot;B00LOD799W&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Pilot-Liquid-Ink-Roller-Ball/dp/B00LOD799W/?_encoding=UTF8&amp;pd_rd_w=n14J1&amp;pf_rd_p=81d5efb0-290d-4fcb-a35f-714a220292f3&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_trq_ed"><img alt="Pilot V7 Liquid Ink Roller Ball Pen - Blue Body, Blue Ink (Pack of 3)" src="https://m.media-amazon.com/images/I/41iWdYshf8L._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/61KNzQyT8WL._AC_SY400_.jpg"/></a></span></li>
                                        <li
                                            data-sgproduct="{&quot;asin&quot;:&quot;B00W1SOFH8&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Origami-Absorbent-ply-Kitchen-Towels/dp/B00W1SOFH8/?_encoding=UTF8&amp;pd_rd_w=n14J1&amp;pf_rd_p=81d5efb0-290d-4fcb-a35f-714a220292f3&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_trq_ed"><img alt="Origami Absorbent 2 ply Kitchen Towels/Kitchen Tissue Rolls/Kitchen roll/Tissue Paper for Kitchen - 60 pulls per roll -..." src="https://m.media-amazon.com/images/I/41rCn9+wMPL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/61y54CxIYmL._AC_SY400_.jpg"/></a></span></li>
                                            <li
                                                data-sgproduct="{&quot;asin&quot;:&quot;B07GFK9QXH&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Plastic-Transparent-Disposable-Clear-Gloves/dp/B07GFK9QXH/?_encoding=UTF8&amp;pd_rd_w=n14J1&amp;pf_rd_p=81d5efb0-290d-4fcb-a35f-714a220292f3&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_trq_ed"><img alt="Kodenipr Club 1000 pcs Plastic Transparent Disposable Clear Gloves (White)" src="https://m.media-amazon.com/images/I/41hkSLVuM8L._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/41hkSLVuM8L._AC_SY400_.jpg"/></a></span></li>
                                                <li
                                                    data-sgproduct="{&quot;asin&quot;:&quot;B00PK0HRPQ&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Navkar-Attendance-Access-Control-System/dp/B00PK0HRPQ/?_encoding=UTF8&amp;pd_rd_w=n14J1&amp;pf_rd_p=81d5efb0-290d-4fcb-a35f-714a220292f3&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_trq_ed"><img alt="Navkar Set Of 100 RFID Cards For Time Attendance Or Access Control System Having RFID" src="https://m.media-amazon.com/images/I/31CD1LmakTL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/41UiwsYMcCL._AC_SY400_.jpg"/></a></span></li>
                        </ul>
                        <div class="spinner" aria-hidden="true"><i class="gw-spinner" role="presentation"></i></div>
                    </div><a aria-label="Carousel previous slide" class="a-link-normal feed-carousel-control feed-left" tabindex="-1" href="#"><span class="gw-icon feed-arrow"></span></a><a aria-label="Carousel next slide" class="a-link-normal feed-carousel-control feed-right"
                        tabindex="-1" href="#"><span class="gw-icon feed-arrow"></span></a><span class="feed-scrollbar"><span class="feed-scrollbar-track"><span class="feed-scrollbar-thumb"></span></span>
                    </span>
                </div>
                <script type="text/javascript">
                    P.when("component-feed-carousel").execute(function(c) {
                        c.createCarousel("#a77517db-5dc0-45cc-8799-84d21dc44506 .feed-carousel", 10, 0);
                    });
                </script>
                <script id="a77517db-5dc0-45cc-8799-84d21dc44506-btfCarouselContent" type="text/x-lazy-loaded-content">
                    <li data-sgproduct="{&quot;asin&quot;:&quot;B07C3VS3FW&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/1537-Opticlude-Patch-6-2cm-Pack/dp/B07C3VS3FW/?_encoding=UTF8&amp;pd_rd_w=n14J1&amp;pf_rd_p=81d5efb0-290d-4fcb-a35f-714a220292f3&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_trq_ed"><img alt="Om Tao 3 m 1537 Opticlude Eye Patch 5 X 6.2 cm, 20 Box X Pack of 3" src="https://m.media-amazon.com/images/I/412VqxT+ytL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/412VqxT+ytL._AC_SY400_.jpg"/></a></span></li>
                    <li
                        data-sgproduct="{&quot;asin&quot;:&quot;B01ERHPXXA&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Heath-Zenith-Courier-Bag-Envelopes/dp/B01ERHPXXA/?_encoding=UTF8&amp;pd_rd_w=n14J1&amp;pf_rd_p=81d5efb0-290d-4fcb-a35f-714a220292f3&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_trq_ed"><img alt="Heath/Zenith Courier Bag Envelopes - 14 X 18 Inch (50 Pcs)" src="https://m.media-amazon.com/images/I/419uG4zvRBL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/516-hXlTYZL._AC_SY400_.jpg"/></a></span></li>
                        <li
                            data-sgproduct="{&quot;asin&quot;:&quot;B08B1TVYT1&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Certified-Protective-Bacterial-Filtration-Efficiency/dp/B08B1TVYT1/?_encoding=UTF8&amp;pd_rd_w=n14J1&amp;pf_rd_p=81d5efb0-290d-4fcb-a35f-714a220292f3&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_trq_ed"><img alt="Asgard Nonwoven Fabric Disposable 3 Ply Surgical Mask (Blue, Without Valve, Pack of 100) for Unisex" src="https://m.media-amazon.com/images/I/41jzjo0hDwL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/71qshn-Y67L._AC_SY400_.jpg"/></a></span></li>
                            <li
                                data-sgproduct="{&quot;asin&quot;:&quot;B079694T8G&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/xcluma-Automatic-Thermostat-Controller-Tempreature/dp/B079694T8G/?_encoding=UTF8&amp;pd_rd_w=n14J1&amp;pf_rd_p=81d5efb0-290d-4fcb-a35f-714a220292f3&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_trq_ed"><img alt="xcluma XM18 XM-18 Digital Automatic Small Egg Incubator Thermostat Controller with Temperature and Humidity Sensor (Normal)" src="https://m.media-amazon.com/images/I/413yYctn0xL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/413yYctn0xL._AC_SY400_.jpg"/></a></span></li>
                                <li
                                    data-sgproduct="{&quot;asin&quot;:&quot;B06XS1JT5D&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/PackingKaro-Envelopes-Polybags-Shipping-SealKing/dp/B06XS1JT5D/?_encoding=UTF8&amp;pd_rd_w=n14J1&amp;pf_rd_p=81d5efb0-290d-4fcb-a35f-714a220292f3&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_trq_ed"><img alt="Courier Bag/Envelopes/Pouches/Cover 10X12 (Pack of 100) Temper Proof Plastic Poly-bags" src="https://m.media-amazon.com/images/I/410PQACiFML._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/410PQACiFML._AC_SY400_.jpg"/></a></span></li>
                                    <li
                                        data-sgproduct="{&quot;asin&quot;:&quot;B07B8JMN53&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Tile-Grip-Convenient-Display-pieces/dp/B07B8JMN53/?_encoding=UTF8&amp;pd_rd_w=n14J1&amp;pf_rd_p=81d5efb0-290d-4fcb-a35f-714a220292f3&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_trq_ed"><img alt="Sky Tile Grip Convenient Way to Display Tiles - Pack of 500" src="https://m.media-amazon.com/images/I/51pS4npIWQL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/51pS4npIWQL._AC_SY400_.jpg"/></a></span></li>
                                        <li
                                            data-sgproduct="{&quot;asin&quot;:&quot;B00LOD6S3K&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Pilot-Pen-Liquid-Roller-Ball/dp/B00LOD6S3K/?_encoding=UTF8&amp;pd_rd_w=n14J1&amp;pf_rd_p=81d5efb0-290d-4fcb-a35f-714a220292f3&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_trq_ed"><img alt="Pilot V5 Liquid Ink Roller Ball Pen -Blue(Pack of 3)" src="https://m.media-amazon.com/images/I/31wuKNzfvvL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/51P5XUk4CWL._AC_SY400_.jpg"/></a></span></li>
                                            <li
                                                data-sgproduct="{&quot;asin&quot;:&quot;B07GC1FZZ5&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Epoke-Yellowing-indoor-Epoxy-Resin/dp/B07GC1FZZ5/?_encoding=UTF8&amp;pd_rd_w=n14J1&amp;pf_rd_p=81d5efb0-290d-4fcb-a35f-714a220292f3&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_trq_ed"><img alt="Epoke Non Yellowing (indoor only) Epoxy Resin, 1.2Kg Kit" src="https://m.media-amazon.com/images/I/310COw3eg1L._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/71ITZ68mxdL._AC_SY400_.jpg"/></a></span></li>
                                                <li
                                                    data-sgproduct="{&quot;asin&quot;:&quot;B01EPK81FQ&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/PackingKart-Tamper-Proof-Courier-14x18/dp/B01EPK81FQ/?_encoding=UTF8&amp;pd_rd_w=n14J1&amp;pf_rd_p=81d5efb0-290d-4fcb-a35f-714a220292f3&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_trq_ed"><img alt="PackingKart Tamper Proof Courier Bag (Pack of 100 Bags) (14x18)" src="https://m.media-amazon.com/images/I/410PQACiFML._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/410PQACiFML._AC_SY400_.jpg"/></a></span></li>
                                                    <li
                                                        data-sgproduct="{&quot;asin&quot;:&quot;B088QHQ79X&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/ASGARD%C2%AE-Layer-Protection-Masks-Certified/dp/B088QHQ79X/?_encoding=UTF8&amp;pd_rd_w=n14J1&amp;pf_rd_p=81d5efb0-290d-4fcb-a35f-714a220292f3&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_trq_ed"><img alt="ASGARD Nonwoven Fabric Disposable Surgical Mask 3Ply (Blue, Without Valve, Pack of 100) for Unisex" src="https://m.media-amazon.com/images/I/41UU0qoRqeL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/61gj-BVcpDL._AC_SY400_.jpg"/></a></span></li>
                                                        <li
                                                            data-sgproduct="{&quot;asin&quot;:&quot;B017DKAK40&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Pentel-Energel-Roller-Blue-Color/dp/B017DKAK40/?_encoding=UTF8&amp;pd_rd_w=n14J1&amp;pf_rd_p=81d5efb0-290d-4fcb-a35f-714a220292f3&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_trq_ed"><img alt="Pentel Energel Roller Gel Pen Set - Pack of 8 (Blue)" src="https://m.media-amazon.com/images/I/51bbDQaYBfL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/51bbDQaYBfL._AC_SY400_.jpg"/></a></span></li>
                </script>
                <script type="text/javascript">
                    (function carouselBtf(d, w) {
                        var p = d.getElementById("a77517db-5dc0-45cc-8799-84d21dc44506-btfCarouselContent"),
                            h = p && p.innerHTML,
                            v = h ? [h] : [];
                        w.GWData = w.GWData || {};
                        w.GWData['a77517db-5dc0-45cc-8799-84d21dc44506'] = {
                            loaded: false,
                            data: v
                        };
                    }(document, window));
                </script>
            </div>
        </div>
        <script>
            (function(f) {
                f(P._namespace('gwiAutoInstVisible'));
            }(function(P) {
                if (window.GWI) {
                    GWI.Card.autoInstVisible('mFcJ1YgutKOtCOjJybiQpA');
                }
            }));
        </script>
    </div>
    <hr data-display-at="smws" data-order-sm="7" data-order-ws="7" class="card-flow-row-break"></hr>
    <div id="desktop-ad-center-1" data-gwi="{&quot;visible&quot;:&quot;desktop-ad-center-1-visible&quot;,&quot;active&quot;:&quot;desktop-ad-center-1-active&quot;}" data-col-span-ws="4" data-col-span-sm="3" data-order-ws="8" data-order-sm="8" data-display-at="smws"
        class="gw-col ad-center gw-auto-height celwidget csm-placement-id-29231717-04cc-4702-b997-a99814a463c0 desktop-gateway-btf_53621034-a19c-4d0f-a9a5-721885e60f9f pd_rd_wg-DuDJh pd_rd_w-Giu04 pd_rd_r-f3c3b933-a933-48da-995b-0197caae93b0" data-pf_rd_p="29231717-04cc-4702-b997-a99814a463c0"
        data-pd_rd_wg="DuDJh" data-pd_rd_w="Giu04" data-pd_rd_r="f3c3b933-a933-48da-995b-0197caae93b0" data-ref_="pd_gw_unk">
        <script>
            if (typeof uet === 'function' && typeof ues === 'function') {
                var scope = 'Gateway_desktop-ad-center-1_desktop';
                var placementId = 'e44985f6-46f4-4231-90aa-f5c16f7c50aa';
                ues('wb', 'adplacements:' + scope.replace(/\_/g, ':'), {
                    wb: 1
                });
                uet('bb', 'adplacements:' + scope.replace(/\_/g, ':'), {
                    wb: 1
                });
                if (placementId) {
                    ues('wb', 'adplacements:' + placementId, {
                        wb: 1
                    });
                    uet('bb', 'adplacements:' + placementId, {
                        wb: 1
                    });
                }
            }
        </script>
        <div id="ape_Gateway_desktop-ad-center-1_desktop_placement" class="copilot-secure-display celwidget  text/x-dacx-safeframe" cel_widget_id="adplacements:Gateway:desktop-ad-center-1:desktop" data-campaign="5224" style="max-width: 970px; min-width: 970px; overflow: hidden; display:block; margin-left:auto; line-height: 0px; margin-right:auto"
            data-ad-details='{"slot" :"Gateway_desktop-ad-center-1_desktop","pageType": "Gateway","subPageType":  "desktop","slotName" :"desktop-ad-center-1","src" : "https://aax-eu.amazon.in/e/xsp/getAd?placementId=e44985f6-46f4-4231-90aa-f5c16f7c50aa&src=511&slot=desktop-ad-center-1&rid=0101671e1a8bc7941c2666de6e977a6d0044cb5f3e4caa0eeea87b77e3f2ae2466a5&rj=%7B%7D","adServer" :"cs","campaignId" :  "5224","arid" :"038d67ba66594ee8bc54b47947fe79c4","placementId": "e44985f6-46f4-4231-90aa-f5c16f7c50aa","size" :{"width": "970","height" : "250"},"allowedSizes" :[{"width":"970px", "height":"250px"}],"ignoreDefaultAllowedSize": false,"allowedDomains" :  ["g-ecx.images-amazon.com"],"aanParams" :   "site%3Damazon.in%3Bpt%3DGateway%3Bslot%3Ddesktop-ad-center-1%3Bpid%3D0%3Barid%3D038d67ba66594ee8bc54b47947fe79c4","loadAfter" :   "criticalFeature","extraDelay" :  0,"iframeExtraStyle": "max-width:100%;max-height:100%;","iframeClass":  "","adPixels": [],"aaxInstrPixelUrl": "","serverSideFetchAd": "false","enableAdBlockerDetector": false,"disableResizeFunc": true,"fallbackStaticAdImgUrl": "https://m.media-amazon.com/images/G/31/AMS/IN/970X250-_desktop_banner.jpg","fallbackStaticAdClickUrl": "https://www.amazon.in/home-products-sale/b?ie=UTF8&node=12414705031","fallbackStaticAdExtraStyle": "width=100% height=auto alt=\"Home Products\"","adFeedbackInfo": {"endPoint": "/gp/aq-feedback/lazyLoad/handler/af-link-handler.html","boolFeedback": true,"slugText": "Sponsored","adFeedbackOnTop":false},"adPlacementMetaData": {"pageUrl": "aHR0cHM6Ly93d3cuYW1hem9uLmluL3Nob3BwaW5nUG9ydGFsL2Rlc2t0b3A/Jl9lbmNvZGluZz1VVEY4JnRhZz12cGVkMWEtMjEmbGlua0NvZGU9dXIyJmxpbmtJZD0xZjk0ZTdjMmJiZTBjNDc2YzFkNDE4YWRiM2E2OWQ3NCZjYW1wPTM2MzgmY3JlYXRpdmU9MjQ2MzA=","adElementId": "ape_Gateway_desktop-ad-center-1_desktop_placement","pageType": "Gateway","slotName": "desktop-ad-center-1"},"adCreativeMetaData": {"adNetwork": "cs"},"advertisementStyle": {"position": "absolute","top": "2px","right": "0px","display": "inline-block","font": "normal 11px Arial","color": "grey"},"feedbackDivStyle": {"position":"relative","height":"17px","top":"2px"},"viewabilityStandards": [{"p": 0, "t": 0, "def": "amzn"}, {"p": 30, "t": 1, "def": "iab"}, {"p": 100, "t": 1, "def": "groupm"}],"ajaxWeblabTriggerId": "","abpStatus": "0","abpAcceptable": "true","disableAdReporterSlot": "false","programIdsToCollapse": [],"allowlistedCustomMessageEvents": ["openPsAdPopover", "openATCModal", "setPartner", "sendMetrics", "wrap"],"allowlistedQueryParamKeys": ["sf-overrideVariationId", "sf-overridePredictorId", "sf-forceFailure"],"DAsfUrl":"https://images-eu.ssl-images-amazon.com/images/S/apesafeframe/ape/sf/desktop/DAsf-1.50.09b8a87.js"}'
            aria-hidden="true"></div>
        <script>
            (function() {
                function a(d, e) {
                    if (window.addEventListener) {
                        window.addEventListener(d, e, false);
                    } else {
                        if (window.attachEvent) {
                            window.attachEvent("on" + d, e);
                        }
                    }
                }

                function c(d, e) {
                    if (window.removeEventListener) {
                        window.removeEventListener(d, e, false);
                    } else {
                        if (window.detachEvent) {
                            window.detachEvent("on" + d, e);
                        }
                    }
                }
                var b = function() {
                    (function() {
                        (function(j, m) {
                            j.sfLogErrors = j.sfLogErrors || false;
                            var o = o || function(s, r) {
                                r = r || new Error(s);
                                if (j.ue && typeof ue.count == "function") {
                                    ue.count("adplacements:safeFrameError", 1);
                                }
                                if (!j.sfLogErrors) {
                                    return;
                                }
                                if (j.ueLogError) {
                                    j.ueLogError(r, {
                                        logLevel: "ERROR",
                                        attribution: "APE-safeframe",
                                        message: s + " "
                                    });
                                } else {
                                    if (typeof console !== "undefined" && console.error) {
                                        console.error(s, r);
                                    }
                                }
                            };
                            j.aanParams = j.aanParams || {};
                            j.aanParams["desktop-ad-center-1"] = "site=amazon.in;pt=Gateway;slot=desktop-ad-center-1;pid=0;arid=038d67ba66594ee8bc54b47947fe79c4";
                            j["desktop-ad-center-1"] = {};
                            j["desktop-ad-center-1"].adStartTime = (new Date()).getTime();

                            function d() {
                                return j.innerHeight || m.documentElement.clientHeight;
                            }

                            function g() {
                                return j.innerWidth || m.documentElement.clientWidth;
                            }

                            function e(t, r, s) {
                                if (t > 0) {
                                    return (s > t);
                                } else {
                                    return (r > 0);
                                }
                            }
                            var f = function() {
                                return (Date.now ? Date.now() : new Date().getTime());
                            };
                            throttle = function(s, u, y) {
                                var r, w, z;
                                var x = null;
                                var v = 0;
                                if (!y) {
                                    y = {};
                                }
                                var t = function() {
                                    v = y.leading === false ? 0 : f();
                                    x = null;
                                    z = s.apply(r, w);
                                    if (!x) {
                                        r = w = null;
                                    }
                                };
                                return function() {
                                    var B = f();
                                    if (!v && y.leading === false) {
                                        v = B;
                                    }
                                    var A = u - (B - v);
                                    r = this;
                                    w = arguments;
                                    if (A <= 0 || A > u) {
                                        if (x) {
                                            clearTimeout(x);
                                            x = null;
                                        }
                                        v = B;
                                        z = s.apply(r, w);
                                        if (!x) {
                                            r = w = null;
                                        }
                                    } else {
                                        if (!x && y.trailing !== false) {
                                            x = setTimeout(t, A);
                                        }
                                    }
                                    return z;
                                };
                            };

                            function l(u, w, v, r) {
                                try {
                                    var t = m.getElementById(u).getBoundingClientRect();
                                    if (e(t.top, t.bottom, d()) && e(t.left, t.right, g())) {
                                        if (typeof uet == "function") {
                                            uet("bb", "adplacements:viewablelatency:" + w, {
                                                wb: 1
                                            });
                                            if (v) {
                                                uet("bb", "adplacements:viewablelatency:" + v, {
                                                    wb: 1
                                                });
                                            }
                                        }
                                        if (typeof uex == "function" && j.ue && typeof ue.count == "function") {
                                            if (j.apeViewableLatencyTrackers[r].loaded) {
                                                uex("ld", "adplacements:viewablelatency:" + w, {
                                                    wb: 1
                                                });
                                                if (v) {
                                                    uex("ld", "adplacements:viewablelatency:" + v, {
                                                        wb: 1
                                                    });
                                                }
                                                ue.count("adplacements:htmlviewed:loaded:" + w, 1);
                                                if (v) {
                                                    ue.count("adplacements:htmlviewed:loaded:" + v, 1);
                                                }
                                            }
                                            ue.count("adplacements:htmlviewed:" + w, 1);
                                            if (v) {
                                                ue.count("adplacements:htmlviewed:" + v, 1);
                                            }
                                        }
                                        j.apeViewableLatencyTrackers[r].viewed = true;
                                        if (j.apeViewableLatencyTrackers[r].tracker) {
                                            c("scroll", j.apeViewableLatencyTrackers[r].tracker);
                                            c("resize", j.apeViewableLatencyTrackers[r].tracker);
                                        }
                                    }
                                } catch (s) {
                                    j.apeViewableLatencyTrackers[r].valid = false;
                                }
                            }
                            try {
                                j.apeViewableLatencyTrackers = j.apeViewableLatencyTrackers || {};
                                var q = "ape_Gateway_desktop-ad-center-1_desktop_placement";
                                var p = "Gateway_desktop-ad-center-1_desktop".replace(/\_/g, ":");
                                var h = "e44985f6-46f4-4231-90aa-f5c16f7c50aa";
                                var i = "038d67ba66594ee8bc54b47947fe79c4";
                                j.apeViewableLatencyTrackers[i] = j.apeViewableLatencyTrackers[i] || {};
                                j.apeViewableLatencyTrackers[i].valid = true;
                                l(q, p, h, i);
                                if (j.apeViewableLatencyTrackers[i].valid && !j.apeViewableLatencyTrackers[i].viewed) {
                                    j.apeViewableLatencyTrackers[i].tracker = throttle(function() {
                                        l(q, p, h, i);
                                    }, 20);
                                    a("scroll", j.apeViewableLatencyTrackers[i].tracker);
                                    a("resize", j.apeViewableLatencyTrackers[i].tracker);
                                }
                            } catch (k) {
                                if (j.apeViewableLatencyTrackers && j.apeViewableLatencyTrackers["038d67ba66594ee8bc54b47947fe79c4"]) {
                                    j.apeViewableLatencyTrackers["038d67ba66594ee8bc54b47947fe79c4"].valid = false;
                                }
                                o("Error initializing viewable latency instrumentation", k);
                            }
                            try {
                                if (j.DAsf) {
                                    j.DAsf.loadAds();
                                } else {
                                    var n = m.createElement("script");
                                    n.type = "text/javascript";
                                    n.async = true;
                                    n.charset = "utf-8";
                                    n.src = "https://images-eu.ssl-images-amazon.com/images/S/apesafeframe/ape/sf/desktop/DAsf-1.50.09b8a87.js?csm_attribution=APE-SafeFrame";
                                    n.onerror = function() {
                                        o("Error loading SafeFrame library");
                                    };
                                    n.setAttribute("crossorigin", "anonymous");
                                    (m.getElementsByTagName("head")[0] || m.getElementsByTagName("body")[0]).appendChild(n);
                                    j.collectSafeframeRTD = Math.random() * 100 < 0;
                                    if (j.collectSafeframeRTD) {
                                        var n = m.createElement("script");
                                        n.type = "text/javascript";
                                        n.async = true;
                                        n.charset = "utf-8";
                                        n.src = "https://images-eu.ssl-images-amazon.com/images/S/apesafeframe/ape/sf/rtd/safeframeRtd-1.50.09b8a87.js";
                                        n.onerror = function() {
                                            o("Error loading SafeFrame RTD library");
                                        };
                                        n.setAttribute("crossorigin", "anonymous");
                                        (m.getElementsByTagName("head")[0] || m.getElementsByTagName("body")[0]).appendChild(n);
                                    }
                                }
                            } catch (k) {
                                o("Error appending DAsf library", k);
                            }
                        }(window, document));
                    })();
                };
                b();
            })();
        </script>
    </div>
    <hr data-display-at="smws" data-order-sm="8" data-order-ws="8" class="card-flow-row-break"></hr>
    <div id="desktop-btf-grid-5" data-gwi="{&quot;visible&quot;:&quot;desktop-btf-grid-5-visible&quot;,&quot;active&quot;:&quot;desktop-btf-grid-5-active&quot;}" data-display-at="smws" data-order-ws="9" class="gw-col celwidget csm-placement-id-e247a3f5-033b-43b9-a01e-d371289e10a3 desktop-gateway-btf_3f4107f4-aa3c-4b2c-aae8-b9080035596f pd_rd_wg-DuDJh pd_rd_w-zzfVg pd_rd_r-f3c3b933-a933-48da-995b-0197caae93b0"
        data-order-sm="9" data-pf_rd_p="e247a3f5-033b-43b9-a01e-d371289e10a3" data-pd_rd_wg="DuDJh" data-pd_rd_w="zzfVg" data-pd_rd_r="f3c3b933-a933-48da-995b-0197caae93b0" data-ref_="pd_gw_unk">
        <div id="8gTSnl7duhLNPFhYN6Q7iA" class="a-cardui fluid-quad-card fluid-card fluid-quad-image-label fluid-quad-image-label" data-a-card-type="basic">
            <div class="a-cardui-header">
                <h2 class="a-color-base headline truncate-2line">Voice control your lights &amp; appliances | Ask Alexa</h2>
            </div>
            <div class="a-cardui-body">
                <div class="a-section a-spacing-small grid-row-1">
                    <div class="a-section a-spacing-none quadrant-container quadrant-container-0">
                        <a aria-label="Smart bulb" class="a-link-normal image-redirect aok-block image-window" href="/l/ref=gw_pc_seasonal_1/14095181031">
                            <div class="a-section a-spacing-none fluid-image-container"><img alt="Smart bulb" src="https://images-eu.ssl-images-amazon.com/images/G/31/img17/AmazonDevices/2019/HeroMarch21/QC-01_1X._SY116_CB659218446_.jpg" class="landscape-image" data-a-hires="https://images-eu.ssl-images-amazon.com/images/G/31/img17/AmazonDevices/2019/HeroMarch21/QC-01_2X._SY232_CB659218446_.jpg"
                                /></div>
                            <div class="a-section a-spacing-none image-label truncate-2line"><span class="a-size-small a-color-base aok-align-center aok-inline-block">Smart bulb</span></div>
                        </a>
                    </div>
                    <div class="a-section a-spacing-none quadrant-container quadrant-container-1">
                        <a aria-label="Echo devices" class="a-link-normal image-redirect aok-block image-window" href="/l/ref=gw_pc_seasonal_2/21553807031">
                            <div class="a-section a-spacing-none fluid-image-container"><img alt="Echo devices" src="https://images-eu.ssl-images-amazon.com/images/G/31/img17/AmazonDevices/2019/HeroMarch21/QC-02_1X._SY116_CB659218446_.jpg" class="landscape-image" data-a-hires="https://images-eu.ssl-images-amazon.com/images/G/31/img17/AmazonDevices/2019/HeroMarch21/QC-02_2X._SY232_CB659218446_.jpg"
                                /></div>
                            <div class="a-section a-spacing-none image-label truncate-2line"><span class="a-size-small a-color-base aok-align-center aok-inline-block">Echo devices</span></div>
                        </a>
                    </div>
                </div>
                <div class="a-section grid-row-2">
                    <div class="a-section a-spacing-none quadrant-container quadrant-container-0">
                        <a aria-label="Fire TV stick" class="a-link-normal image-redirect aok-block image-window" href="/ref=gw_pc_seasonal_4/dp/B07ZZX5ZSW">
                            <div class="a-section a-spacing-none fluid-image-container"><img alt="Fire TV stick" src="https://images-eu.ssl-images-amazon.com/images/G/31/img17/AmazonDevices/2019/HeroMarch21/QC-03_1X._SY116_CB659218446_.jpg" class="landscape-image" data-a-hires="https://images-eu.ssl-images-amazon.com/images/G/31/img17/AmazonDevices/2019/HeroMarch21/QC-03_2X._SY232_CB659218446_.jpg"
                                /></div>
                            <div class="a-section a-spacing-none image-label truncate-2line"><span class="a-size-small a-color-base aok-align-center aok-inline-block">All-new Fire TV stick</span></div>
                        </a>
                    </div>
                    <div class="a-section a-spacing-none quadrant-container quadrant-container-1">
                        <a aria-label="Smart Plug" class="a-link-normal image-redirect aok-block image-window" href="/l/ref=gw_pc_seasonal_3/14095184031">
                            <div class="a-section a-spacing-none fluid-image-container"><img alt="Smart Plug" src="https://images-eu.ssl-images-amazon.com/images/G/31/img17/AmazonDevices/2019/HeroMarch21/QC-04_1X._SY116_CB659218446_.jpg" class="landscape-image" data-a-hires="https://images-eu.ssl-images-amazon.com/images/G/31/img17/AmazonDevices/2019/HeroMarch21/QC-04_2X._SY232_CB659218446_.jpg"
                                /></div>
                            <div class="a-section a-spacing-none image-label truncate-2line"><span class="a-size-small a-color-base aok-align-center aok-inline-block">Smart Plug</span></div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="a-cardui-footer"><a aria-label="Voice control your lights &amp; appliances | Ask Alexa - See more" class="a-link-normal see-more truncate-1line" href="/b?node=14095180031">See more</a></div>
        </div>
        <script>
            (function(f) {
                f(P._namespace('gwiAutoInstVisible'));
            }(function(P) {
                if (window.GWI) {
                    GWI.Card.autoInstVisible('8gTSnl7duhLNPFhYN6Q7iA');
                }
            }));
        </script>
        <script>
            P.when('mix:fluid-quad-image-label').execute(function(cardModule) {
                cardModule.init('8gTSnl7duhLNPFhYN6Q7iA');
                if (window.GWI) {
                    window.GWI.Card.autoInstActive('8gTSnl7duhLNPFhYN6Q7iA');
                }
            });
        </script>
    </div>
    <div id="desktop-btf-grid-6" data-gwi="{&quot;visible&quot;:&quot;desktop-btf-grid-6-visible&quot;,&quot;active&quot;:&quot;desktop-btf-grid-6-active&quot;}" data-display-at="smws" data-order-ws="9" class="gw-col celwidget csm-placement-id-6c5e3f16-6f90-4804-9a5c-4e839bb4d8d9 desktop-gateway-btf_897cae3d-504b-4501-b5a8-8af8e1850968 pd_rd_wg-DuDJh pd_rd_w-D6F5P pd_rd_r-f3c3b933-a933-48da-995b-0197caae93b0"
        data-order-sm="9" data-pf_rd_p="6c5e3f16-6f90-4804-9a5c-4e839bb4d8d9" data-pd_rd_wg="DuDJh" data-pd_rd_w="D6F5P" data-pd_rd_r="f3c3b933-a933-48da-995b-0197caae93b0" data-ref_="pd_gw_unk">
        <div id="XjJwAcQ75qwCa_GXHgdikQ" class="a-cardui fluid-quad-card fluid-card fluid-quad-image-label fluid-quad-image-label" data-a-card-type="basic">
            <div class="a-cardui-header">
                <h2 class="a-color-base headline truncate-2line">Men???s casualwear | Up to 70% off</h2>
            </div>
            <div class="a-cardui-body">
                <div class="a-section a-spacing-small grid-row-1">
                    <div class="a-section a-spacing-none quadrant-container quadrant-container-0">
                        <a aria-label="CLOTHING" class="a-link-normal image-redirect aok-block image-window" href="/b/ref=app_gw_feb20?node=16263620031">
                            <div class="a-section a-spacing-none fluid-image-container"><img alt="CLOTHING" src="https://images-eu.ssl-images-amazon.com/images/G/31/img21/Fashion/Gateway/Mens_Casual_Wear/1.1.1._SY116_CB656501606_.jpg" class="landscape-image" data-a-hires="https://images-eu.ssl-images-amazon.com/images/G/31/img21/Fashion/Gateway/Mens_Casual_Wear/1._SY232_CB656503635_.jpg"
                                /></div>
                            <div class="a-section a-spacing-none image-label truncate-2line"><span class="a-size-small a-color-base aok-align-center aok-inline-block">Casualwear | Up to 60% off</span></div>
                        </a>
                    </div>
                    <div class="a-section a-spacing-none quadrant-container quadrant-container-1">
                        <a aria-label="SHOES" class="a-link-normal image-redirect aok-block image-window" href="/b/ref=ssh_gw_feb20?node=9780814031">
                            <div class="a-section a-spacing-none fluid-image-container"><img alt="SHOES" src="https://images-eu.ssl-images-amazon.com/images/G/31/img21/Fashion/Gateway/Mens_Casual_Wear/2.2.2._SY116_CB656501606_.jpg" class="landscape-image" data-a-hires="https://images-eu.ssl-images-amazon.com/images/G/31/img21/Fashion/Gateway/Mens_Casual_Wear/2._SY232_CB656503635_.jpg"
                                /></div>
                            <div class="a-section a-spacing-none image-label truncate-2line"><span class="a-size-small a-color-base aok-align-center aok-inline-block">Casual shoes | Up to 60% off</span></div>
                        </a>
                    </div>
                </div>
                <div class="a-section grid-row-2">
                    <div class="a-section a-spacing-none quadrant-container quadrant-container-0">
                        <a aria-label="BAGS" class="a-link-normal image-redirect aok-block image-window" href="/b/ref=luggage_gw_feb20?node=2917430031">
                            <div class="a-section a-spacing-none fluid-image-container"><img alt="BAGS" src="https://images-eu.ssl-images-amazon.com/images/G/31/img21/Fashion/Gateway/Mens_Casual_Wear/3.3._SY116_CB656503705_.jpg" class="landscape-image" data-a-hires="https://images-eu.ssl-images-amazon.com/images/G/31/img21/Fashion/Gateway/Mens_Casual_Wear/3._SY232_CB656503635_.jpg"
                                /></div>
                            <div class="a-section a-spacing-none image-label truncate-2line"><span class="a-size-small a-color-base aok-align-center aok-inline-block">Bags &amp; backpacks | Up to 60% off</span></div>
                        </a>
                    </div>
                    <div class="a-section a-spacing-none quadrant-container quadrant-container-1">
                        <a aria-label="Watches" class="a-link-normal image-redirect aok-block image-window" href="/b/ref=watches_gw_feb20?node=2563504031">
                            <div class="a-section a-spacing-none fluid-image-container"><img alt="Watches" src="https://images-eu.ssl-images-amazon.com/images/G/31/img21/Fashion/Gateway/Mens_Casual_Wear/4.4._SY116_CB656503705_.jpg" class="landscape-image" data-a-hires="https://images-eu.ssl-images-amazon.com/images/G/31/img21/Fashion/Gateway/Mens_Casual_Wear/4._SY232_CB656503635_.jpg"
                                /></div>
                            <div class="a-section a-spacing-none image-label truncate-2line"><span class="a-size-small a-color-base aok-align-center aok-inline-block">Men&#x27;s watches | Up to 60% off</span></div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="a-cardui-footer"><a aria-label="Men???s casualwear | Up to 70% off - View all" class="a-link-normal see-more truncate-1line" href="/b/ref=sl_gw_feb20?node=6648217031">View all</a></div>
        </div>
        <script>
            (function(f) {
                f(P._namespace('gwiAutoInstVisible'));
            }(function(P) {
                if (window.GWI) {
                    GWI.Card.autoInstVisible('XjJwAcQ75qwCa_GXHgdikQ');
                }
            }));
        </script>
        <script>
            P.when('mix:fluid-quad-image-label').execute(function(cardModule) {
                cardModule.init('XjJwAcQ75qwCa_GXHgdikQ');
                if (window.GWI) {
                    window.GWI.Card.autoInstActive('XjJwAcQ75qwCa_GXHgdikQ');
                }
            });
        </script>
    </div>
    <hr data-display-at="sm" data-order-sm="9" class="card-flow-row-break"></hr>
    <div id="desktop-btf-grid-7" data-gwi="{&quot;visible&quot;:&quot;desktop-btf-grid-7-visible&quot;,&quot;active&quot;:&quot;desktop-btf-grid-7-active&quot;}" data-display-at="smws" data-order-ws="9" class="gw-col celwidget csm-placement-id-f2614997-8ad8-4d6d-a228-dc1a3927db55 desktop-gateway-btf_9762bcb6-bbd3-42cc-a9cb-3f99fe614ebf pd_rd_wg-DuDJh pd_rd_w-hbUmC pd_rd_r-f3c3b933-a933-48da-995b-0197caae93b0"
        data-order-sm="12" data-pf_rd_p="f2614997-8ad8-4d6d-a228-dc1a3927db55" data-pd_rd_wg="DuDJh" data-pd_rd_w="hbUmC" data-pd_rd_r="f3c3b933-a933-48da-995b-0197caae93b0" data-ref_="pd_gw_unk">
        <div id="4q_6JyU4q2RrrhnNp_z8aA" class="a-cardui fluid-fat-image-link fluid-card fluid-fat-image-link" data-a-card-type="basic">
            <div class="a-cardui-header">
                <h2 class="a-color-base headline truncate-2line">Welcome this summer in style</h2>
            </div>
            <div class="a-cardui-body">
                <a class="a-link-normal center-image aok-block image-window" href="/l/22954738031">
                    <div class="a-section a-spacing-none fluid-image-container"><img alt="Welcome this summer in style" src="https://images-eu.ssl-images-amazon.com/images/G/31/img20/Events/Zeitgeist/Summerstore/GW/Summer-PC-CC-1-1X._SY304_CB656851921_.jpg" class="landscape-image" data-a-hires="https://images-eu.ssl-images-amazon.com/images/G/31/img20/Events/Zeitgeist/Summerstore/GW/Summer-PC-CC-1-2X._SY608_CB656851921_.jpg"
                        /></div>
                </a>
            </div>
            <div class="a-cardui-footer"><a class="a-link-normal see-more truncate-1line" href="/l/22954738031">See more</a></div>
        </div>
        <script>
            (function(f) {
                f(P._namespace('gwiAutoInstVisible'));
            }(function(P) {
                if (window.GWI) {
                    GWI.Card.autoInstVisible('4q_6JyU4q2RrrhnNp_z8aA');
                }
            }));
        </script>
        <script>
            P.when('mix:fluid-fat-image-link').execute(function(cardModule) {
                cardModule.init('4q_6JyU4q2RrrhnNp_z8aA');
                if (window.GWI) {
                    window.GWI.Card.autoInstActive('4q_6JyU4q2RrrhnNp_z8aA');
                }
            });
        </script>
    </div>
    <div id="desktop-btf-grid-8" data-gwi="{&quot;visible&quot;:&quot;desktop-btf-grid-8-visible&quot;,&quot;active&quot;:&quot;desktop-btf-grid-8-active&quot;}" data-display-at="smws" data-order-ws="9" class="gw-col celwidget csm-placement-id-42a594e3-ef9a-4735-8c71-99e2439dfbce desktop-gateway-btf_326233d4-4f98-4780-b365-a51e0e63f93b pd_rd_wg-DuDJh pd_rd_w-GTdmv pd_rd_r-f3c3b933-a933-48da-995b-0197caae93b0"
        data-order-sm="12" data-pf_rd_p="42a594e3-ef9a-4735-8c71-99e2439dfbce" data-pd_rd_wg="DuDJh" data-pd_rd_w="GTdmv" data-pd_rd_r="f3c3b933-a933-48da-995b-0197caae93b0" data-ref_="pd_gw_unk">
        <div id="N3OV1jCq8Xrwy5-8-kClcQ" class="a-cardui fluid-quad-card fluid-card fluid-quad-image-label fluid-quad-image-label" data-a-card-type="basic">
            <div class="a-cardui-header">
                <h2 class="a-color-base headline truncate-2line">Birthday store</h2>
            </div>
            <div class="a-cardui-body">
                <div class="a-section a-spacing-small grid-row-1">
                    <div class="a-section a-spacing-none quadrant-container quadrant-container-0">
                        <a aria-label="Gift for men" class="a-link-normal image-redirect aok-block image-window" href="/gcx/-/gfhz/events/?categoryId=gifts-for-men-in">
                            <div class="a-section a-spacing-none fluid-image-container"><img alt="Gift for men" src="https://images-eu.ssl-images-amazon.com/images/G/31/img20/Events/BirthdayStore/GW/PC_QC_men_1x._SY116_CB660462415_.jpg" class="landscape-image" data-a-hires="https://images-eu.ssl-images-amazon.com/images/G/31/img20/Events/BirthdayStore/GW/PC_QC_men_2x._SY232_CB660462362_.jpg"
                                /></div>
                            <div class="a-section a-spacing-none image-label truncate-2line"><span class="a-size-small a-color-base aok-align-center aok-inline-block">Gift for men</span></div>
                        </a>
                    </div>
                    <div class="a-section a-spacing-none quadrant-container quadrant-container-1">
                        <a aria-label="Gift for women" class="a-link-normal image-redirect aok-block image-window" href="/gcx/-/gfhz/events/?categoryId=gifts-for-women-in">
                            <div class="a-section a-spacing-none fluid-image-container"><img alt="Gift for women" src="https://images-eu.ssl-images-amazon.com/images/G/31/img20/Events/BirthdayStore/GW/PC_QC_women_1x._SY116_CB660462414_.jpg" class="landscape-image" data-a-hires="https://images-eu.ssl-images-amazon.com/images/G/31/img20/Events/BirthdayStore/GW/PC_QC_women_2x._SY232_CB660462362_.jpg"
                                /></div>
                            <div class="a-section a-spacing-none image-label truncate-2line"><span class="a-size-small a-color-base aok-align-center aok-inline-block">Gift for women</span></div>
                        </a>
                    </div>
                </div>
                <div class="a-section grid-row-2">
                    <div class="a-section a-spacing-none quadrant-container quadrant-container-0">
                        <a aria-label="Gift for boys" class="a-link-normal image-redirect aok-block image-window" href="/gcx/-/gfhz/events/?categoryId=gifts-for-boys-in">
                            <div class="a-section a-spacing-none fluid-image-container"><img alt="Gift for boys" src="https://images-eu.ssl-images-amazon.com/images/G/31/img20/Events/BirthdayStore/GW/PC_QC_boys_1xN._SY116_CB660459133_.jpg" class="landscape-image" data-a-hires="https://images-eu.ssl-images-amazon.com/images/G/31/img20/Events/BirthdayStore/GW/PC_QC_boys_2xc._SY232_CB660469554_.jpg"
                                /></div>
                            <div class="a-section a-spacing-none image-label truncate-2line"><span class="a-size-small a-color-base aok-align-center aok-inline-block">Gift for boys</span></div>
                        </a>
                    </div>
                    <div class="a-section a-spacing-none quadrant-container quadrant-container-1">
                        <a aria-label="Gift for girls" class="a-link-normal image-redirect aok-block image-window" href="/gcx/-/gfhz/events/?categoryId=gifts-for-girls-in">
                            <div class="a-section a-spacing-none fluid-image-container"><img alt="Gift for girls" src="https://images-eu.ssl-images-amazon.com/images/G/31/img20/Events/BirthdayStore/GW/PC_QC_girls_1xA._SY116_CB658837358_.jpg" class="landscape-image" data-a-hires="https://images-eu.ssl-images-amazon.com/images/G/31/img20/Events/BirthdayStore/GW/PC_QC_girls_2xA._SY232_CB658837358_.jpg"
                                /></div>
                            <div class="a-section a-spacing-none image-label truncate-2line"><span class="a-size-small a-color-base aok-align-center aok-inline-block">Gift for girls</span></div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="a-cardui-footer"><a aria-label="Birthday store - See more" class="a-link-normal see-more truncate-1line" href="/gcx/Birthday-store/gfhz/events?canBeGiftWrapped=false&amp;categoryId=birthday-store-in&amp;isLimitedTimeOffer=false&amp;isPrime=false">See more</a></div>
        </div>
        <script>
            (function(f) {
                f(P._namespace('gwiAutoInstVisible'));
            }(function(P) {
                if (window.GWI) {
                    GWI.Card.autoInstVisible('N3OV1jCq8Xrwy5-8-kClcQ');
                }
            }));
        </script>
        <script>
            P.when('mix:fluid-quad-image-label').execute(function(cardModule) {
                cardModule.init('N3OV1jCq8Xrwy5-8-kClcQ');
                if (window.GWI) {
                    window.GWI.Card.autoInstActive('N3OV1jCq8Xrwy5-8-kClcQ');
                }
            });
        </script>
    </div>
    <hr data-display-at="ws" data-order-ws="9" class="card-flow-row-break"></hr>
    <div id="desktop-5" data-gwi="{&quot;visible&quot;:&quot;desktop-5-visible&quot;,&quot;active&quot;:&quot;desktop-5-active&quot;}" data-col-span-ws="4" data-col-span-sm="3" data-order-ws="10" data-order-sm="10" data-display-at="smws" class="gw-col desktop-row gwi-row gw-widget-instrument gw-auto-height celwidget csm-placement-id-e936e729-11a7-46b4-93cc-634bc4a37119 desktop-gateway-btf_ec57f855-3646-4cbc-beb4-e9ae4b7df408 pd_rd_wg-DuDJh pd_rd_w-5bOWZ pd_rd_r-f3c3b933-a933-48da-995b-0197caae93b0"
        data-pf_rd_p="e936e729-11a7-46b4-93cc-634bc4a37119" data-pd_rd_wg="DuDJh" data-pd_rd_w="5bOWZ" data-pd_rd_r="f3c3b933-a933-48da-995b-0197caae93b0" data-ref_="pd_gw_unk">
        <div class="a-section a-spacing-none ameyal-product-shoveler" id="3BxqXThUPXbADy3y9ofFEA">
            <div id="d45e5080-d1e8-483e-ad87-11f6601d53cf" class="a-section a-spacing-none shogun-widget card-lite product-shoveler aui-desktop fresh-shoveler">
                <div class="a-section as-title-block">
                    <h2 class="as-title-block-left"><span class="a-color-base">Up to 50% off | Nutritional supplements</span></h2><span class="as-title-block-right"></span></div>
                <div class="a-section a-spacing-none feed-carousel">
                    <div class="a-section feed-carousel-viewport">
                        <ul class="a-unordered-list a-nostyle a-horizontal feed-carousel-shelf" role="list">
                            <li data-sgproduct="{&quot;asin&quot;:&quot;B08BLMRBSR&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Leafed-10000mcg-Maximum-Strength-Vitamin/dp/B08BLMRBSR/?_encoding=UTF8&amp;pd_rd_w=5bOWZ&amp;pf_rd_p=e936e729-11a7-46b4-93cc-634bc4a37119&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_unk"><img alt="Leafed Biotin 10000mcg Maximum Strength with Zinc, Iron &amp; Vitamin E, A, C, D2 for Hair Skin &amp; Nails - 120 Vegetarian Tablets" src="https://m.media-amazon.com/images/I/41iZoOi8LsL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/61-Ikr+75hL._AC_SY400_.jpg"/></a></span></li>
                            <li
                                data-sgproduct="{&quot;asin&quot;:&quot;B08C9KQ3BQ&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Leafed-Omega-Triple-strength-Vitamin/dp/B08C9KQ3BQ/?_encoding=UTF8&amp;pd_rd_w=5bOWZ&amp;pf_rd_p=e936e729-11a7-46b4-93cc-634bc4a37119&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_unk"><img alt="Leafed Fish Oil Omega 3 Triple strength 1350 mg with Vitamin D3 &amp; Vitamin E (100% RDA) - 60 Softgel Capsules" src="https://m.media-amazon.com/images/I/41w7+gfJZGL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/6131HEjGGLL._AC_SY400_.jpg"/></a></span></li>
                                <li
                                    data-sgproduct="{&quot;asin&quot;:&quot;B08C9QMCFM&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Leafed-Multivitamin-Nutrients-Performance-Blends/dp/B08C9QMCFM/?_encoding=UTF8&amp;pd_rd_w=5bOWZ&amp;pf_rd_p=e936e729-11a7-46b4-93cc-634bc4a37119&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_unk"><img alt="Leafed Multivitamin for Men with 55 Vital Nutrients, 13 Performance Blends - 100 Vegetarian Tablets" src="https://m.media-amazon.com/images/I/41EaBX7SXZL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/61jdJnrMB5L._AC_SY400_.jpg"/></a></span></li>
                                    <li
                                        data-sgproduct="{&quot;asin&quot;:&quot;B08CC2QPMT&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Leafed-Multivitamin-Nutrients-Performance-Blends/dp/B08CC2QPMT/?_encoding=UTF8&amp;pd_rd_w=5bOWZ&amp;pf_rd_p=e936e729-11a7-46b4-93cc-634bc4a37119&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_unk"><img alt="Leafed Multivitamin for Women with 43 Vital Nutrients, 8 Performance Blends - 100 Vegetarian Tablets" src="https://m.media-amazon.com/images/I/41zw2w+XRFL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/61Iz93I+DIL._AC_SY400_.jpg"/></a></span></li>
                                        <li
                                            data-sgproduct="{&quot;asin&quot;:&quot;B08GP7DLW1&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Vitamin-Complex-Rosehip-Acerola-Immunity/dp/B08GP7DLW1/?_encoding=UTF8&amp;pd_rd_w=5bOWZ&amp;pf_rd_p=e936e729-11a7-46b4-93cc-634bc4a37119&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_unk"><img alt="Leafed Vitamin C Complex 1000 mg with Zinc, Rosehip and Acerola Extract for Immunity - 60 Vegetarian Tablets" src="https://m.media-amazon.com/images/I/41kqSJdISJL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/61jOIP6OZ1L._AC_SY400_.jpg"/></a></span></li>
                                            <li
                                                data-sgproduct="{&quot;asin&quot;:&quot;B08KZZJ1D2&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Leafed-Vitamin-vitamins-Supports-Metabolism/dp/B08KZZJ1D2/?_encoding=UTF8&amp;pd_rd_w=5bOWZ&amp;pf_rd_p=e936e729-11a7-46b4-93cc-634bc4a37119&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_unk"><img alt="Leafed Vitamin B Complex with 100% RDA of 8 B vitamins (B1, B2, B3, B5, B6, Biotin, B9 and B12), Supports Immune and..." src="https://m.media-amazon.com/images/I/41UBENznMJL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/61BfJ51-uqL._AC_SY400_.jpg"/></a></span></li>
                                                <li
                                                    data-sgproduct="{&quot;asin&quot;:&quot;B08L36RQ4K&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Leafed-Calcium-Magnesium-Vegetarian-Tablets/dp/B08L36RQ4K/?_encoding=UTF8&amp;pd_rd_w=5bOWZ&amp;pf_rd_p=e936e729-11a7-46b4-93cc-634bc4a37119&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_unk"><img alt="Leafed Calcium Magnesium Zinc Vitamin D &amp; B12-120 Vegetarian Tablets- Bone Health and Joint Support???" src="https://m.media-amazon.com/images/I/41FwA7v6qCL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/61NLWAuCdZL._AC_SY400_.jpg"/></a></span></li>
                        </ul>
                        <div class="spinner" aria-hidden="true"><i class="gw-spinner" role="presentation"></i></div>
                    </div><a aria-label="Carousel previous slide" class="a-link-normal feed-carousel-control feed-left" tabindex="-1" href="#"><span class="gw-icon feed-arrow"></span></a><a aria-label="Carousel next slide" class="a-link-normal feed-carousel-control feed-right"
                        tabindex="-1" href="#"><span class="gw-icon feed-arrow"></span></a><span class="feed-scrollbar"><span class="feed-scrollbar-track"><span class="feed-scrollbar-thumb"></span></span>
                    </span>
                </div>
                <script type="text/javascript">
                    P.when("component-feed-carousel").execute(function(c) {
                        c.createCarousel("#d45e5080-d1e8-483e-ad87-11f6601d53cf .feed-carousel", 10, 0);
                    });
                </script>
                <script id="d45e5080-d1e8-483e-ad87-11f6601d53cf-btfCarouselContent" type="text/x-lazy-loaded-content">
                    <li data-sgproduct="{&quot;asin&quot;:&quot;B08L5B2NFL&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Garcinia-Cambogia-Extract-Coffee-Tablets/dp/B08L5B2NFL/?_encoding=UTF8&amp;pd_rd_w=5bOWZ&amp;pf_rd_p=e936e729-11a7-46b4-93cc-634bc4a37119&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_unk"><img alt="Garcinia Cambogia+Green Tea Extract+Green Coffee Bean Extract Tablets" src="https://m.media-amazon.com/images/I/41kuPAJ1bxL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/61fHuAq2sIL._AC_SY400_.jpg"/></a></span></li>
                    <li
                        data-sgproduct="{&quot;asin&quot;:&quot;B08XX8Y2PH&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Leafed-Flaxseed-Capsules-Plant-based-Cold-Pressed/dp/B08XX8Y2PH/?_encoding=UTF8&amp;pd_rd_w=5bOWZ&amp;pf_rd_p=e936e729-11a7-46b4-93cc-634bc4a37119&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_unk"><img alt="Leafed Flaxseed Oil Capsules 1000mg Omega 3 6 9-60 softgel Capsules (1 Month Supply) Plant-based and Cold-Pressed" src="https://m.media-amazon.com/images/I/41Vc2kin8wL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/41Vc2kin8wL._AC_SY400_.jpg"/></a></span></li>
                        <li
                            data-sgproduct="{&quot;asin&quot;:&quot;B08SJ78LGC&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Zulicso-Advanced-Multivitamin-Minerals-Antioxidant/dp/B08SJ78LGC/?_encoding=UTF8&amp;pd_rd_w=5bOWZ&amp;pf_rd_p=e936e729-11a7-46b4-93cc-634bc4a37119&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_unk"><img alt="Zulicso Advanced Women&#x27;s Multivitamin, Minerals &amp; Antioxidant | One Daily Formula | - 60 Capsules" src="https://m.media-amazon.com/images/I/41stJISXtjL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/71o3rrMG7NL._AC_SY400_.jpg"/></a></span></li>
                            <li
                                data-sgproduct="{&quot;asin&quot;:&quot;B08SMFR34N&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/zulicso-Extract-Strength-Stamina-Energy/dp/B08SMFR34N/?_encoding=UTF8&amp;pd_rd_w=5bOWZ&amp;pf_rd_p=e936e729-11a7-46b4-93cc-634bc4a37119&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_unk"><img alt="zulicso Safed Musli Extract for Strength, Stamina and Energy in Men &amp; Women" src="https://m.media-amazon.com/images/I/41PuUNKTtzL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/712csyZC99L._AC_SY400_.jpg"/></a></span></li>
                                <li
                                    data-sgproduct="{&quot;asin&quot;:&quot;B08SMFS2PP&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Zulicso-Natural-Antioxidant-Vitamins-Minerals/dp/B08SMFS2PP/?_encoding=UTF8&amp;pd_rd_w=5bOWZ&amp;pf_rd_p=e936e729-11a7-46b4-93cc-634bc4a37119&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_unk"><img alt="Zulicso 100% Natural and Pure Wheat Grass Extract 500mg |Rich in Antioxidant, Vitamins and Minerals" src="https://m.media-amazon.com/images/I/41+xt3JdJJL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/81UxLfj7UvL._AC_SY400_.jpg"/></a></span></li>
                                    <li
                                        data-sgproduct="{&quot;asin&quot;:&quot;B08SMFTGZP&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Zulicso-Omega-3-Fish-Oil-1000mg/dp/B08SMFTGZP/?_encoding=UTF8&amp;pd_rd_w=5bOWZ&amp;pf_rd_p=e936e729-11a7-46b4-93cc-634bc4a37119&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_unk"><img alt="Zulicso Omega-3 Fish Oil 1000mg" src="https://m.media-amazon.com/images/I/41JO4Ed7glL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/81GcN5s7w6L._AC_SY400_.jpg"/></a></span></li>
                                        <li
                                            data-sgproduct="{&quot;asin&quot;:&quot;B08SMGBWHZ&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Zulicso-Natural-Garcinia-Cambogia-Extract/dp/B08SMGBWHZ/?_encoding=UTF8&amp;pd_rd_w=5bOWZ&amp;pf_rd_p=e936e729-11a7-46b4-93cc-634bc4a37119&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_unk"><img alt="Zulicso Lean Natural Garcinia Cambogia, Green Coffee and Green Tea Extract" src="https://m.media-amazon.com/images/I/41LDcvb8JtL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/81+paPeyVcL._AC_SY400_.jpg"/></a></span></li>
                                            <li
                                                data-sgproduct="{&quot;asin&quot;:&quot;B08SMGFTDY&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Zulicso-Fenugreek-Pure-Extract-500mg/dp/B08SMGFTDY/?_encoding=UTF8&amp;pd_rd_w=5bOWZ&amp;pf_rd_p=e936e729-11a7-46b4-93cc-634bc4a37119&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_unk"><img alt="Zulicso Fenugreek Pure Seed Extract 500mg" src="https://m.media-amazon.com/images/I/41VTyqfudkL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/81ir0LhbmPL._AC_SY400_.jpg"/></a></span></li>
                                                <li
                                                    data-sgproduct="{&quot;asin&quot;:&quot;B08SMH5S2J&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Zulicso-Natural-Green-Coffee-Extract/dp/B08SMH5S2J/?_encoding=UTF8&amp;pd_rd_w=5bOWZ&amp;pf_rd_p=e936e729-11a7-46b4-93cc-634bc4a37119&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_unk"><img alt="Zulicso Pure &amp; Natural Green Coffee Bean Extract - 60 Veg Capsules" src="https://m.media-amazon.com/images/I/41FpejDxeWL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/71fqxLe+OVL._AC_SY400_.jpg"/></a></span></li>
                                                    <li
                                                        data-sgproduct="{&quot;asin&quot;:&quot;B08SMHCH1M&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Zulicso-Spirulina-Green-Superfood-500mg/dp/B08SMHCH1M/?_encoding=UTF8&amp;pd_rd_w=5bOWZ&amp;pf_rd_p=e936e729-11a7-46b4-93cc-634bc4a37119&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_unk"><img alt="Zulicso Spirulina Green Superfood 500mg" src="https://m.media-amazon.com/images/I/41w4udQ3EeL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/815XGJlc1gL._AC_SY400_.jpg"/></a></span></li>
                                                        <li
                                                            data-sgproduct="{&quot;asin&quot;:&quot;B08VJ8RG1C&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Zulicso-Boswellia-Boswellic-Maintains-Flexibility/dp/B08VJ8RG1C/?_encoding=UTF8&amp;pd_rd_w=5bOWZ&amp;pf_rd_p=e936e729-11a7-46b4-93cc-634bc4a37119&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_unk"><img alt="Zulicso Boswellia Serrata Extract (Shallaki) 65% Boswellic Acid 500 mg | Supports Healthy Joint | Maintains Joints..." src="https://m.media-amazon.com/images/I/41CYd8zqTPL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/817VFKEvadL._AC_SY400_.jpg"/></a></span></li>
                                                            <li
                                                                data-sgproduct="{&quot;asin&quot;:&quot;B08VJ9WJ8H&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Zulicso-Antistress-Vegetarian-Capsules-Supplement/dp/B08VJ9WJ8H/?_encoding=UTF8&amp;pd_rd_w=5bOWZ&amp;pf_rd_p=e936e729-11a7-46b4-93cc-634bc4a37119&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_unk"><img alt="Zulicso Antistress Vegetarian Capsules 500mg | Herbal &amp; Natural Supplement for Stress Relief |" src="https://m.media-amazon.com/images/I/41bo8vzHtCL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/81nzOam6-IL._AC_SY400_.jpg"/></a></span></li>
                                                                <li
                                                                    data-sgproduct="{&quot;asin&quot;:&quot;B08VJB6X4X&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Zulicso-Capsules-Herbal-Natural-Supplement/dp/B08VJB6X4X/?_encoding=UTF8&amp;pd_rd_w=5bOWZ&amp;pf_rd_p=e936e729-11a7-46b4-93cc-634bc4a37119&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_unk"><img alt="Zulicso Joint Care Veg Capsules 500mg | Herbal &amp; Natural Supplement for Bone Health |" src="https://m.media-amazon.com/images/I/51wfEm2knJL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/715CGFBnU0L._AC_SY400_.jpg"/></a></span></li>
                                                                    <li
                                                                        data-sgproduct="{&quot;asin&quot;:&quot;B08VJBD8H5&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Zulicso-Natural-Cranberry-Supports-Prevention/dp/B08VJBD8H5/?_encoding=UTF8&amp;pd_rd_w=5bOWZ&amp;pf_rd_p=e936e729-11a7-46b4-93cc-634bc4a37119&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_unk"><img alt="Zulicso Natural Cranberry Extract 500 mg l Supports Urine Tract Health l Bladder Health l Support UTI Prevention" src="https://m.media-amazon.com/images/I/4195+mAO-DL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/71EVtTenhTL._AC_SY400_.jpg"/></a></span></li>
                                                                        <li
                                                                            data-sgproduct="{&quot;asin&quot;:&quot;B08WWLY26Y&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Trizen-Calcium-Magnesium-Vitamin-supplement/dp/B08WWLY26Y/?_encoding=UTF8&amp;pd_rd_w=5bOWZ&amp;pf_rd_p=e936e729-11a7-46b4-93cc-634bc4a37119&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_unk"><img alt="Trizen Calcium Magnesium Zinc Vitamin D3 with Vitamin K2 for Bone Health and Joint Support, Calcium supplement for Women..." src="https://m.media-amazon.com/images/I/413tTketWOL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/71p2t+j4KqL._AC_SY400_.jpg"/></a></span></li>
                                                                            <li
                                                                                data-sgproduct="{&quot;asin&quot;:&quot;B08WYNY5L2&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Trizen-Biotin-10000mcg-Growth-Tablets/dp/B08WYNY5L2/?_encoding=UTF8&amp;pd_rd_w=5bOWZ&amp;pf_rd_p=e936e729-11a7-46b4-93cc-634bc4a37119&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_unk"><img alt="Trizen Biotin | 10000mcg | for Hair Growth | 60 Veg Tablets" src="https://m.media-amazon.com/images/I/41usEIcluTL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/71kSAzJhK-L._AC_SY400_.jpg"/></a></span></li>
                </script>
                <script type="text/javascript">
                    (function carouselBtf(d, w) {
                        var p = d.getElementById("d45e5080-d1e8-483e-ad87-11f6601d53cf-btfCarouselContent"),
                            h = p && p.innerHTML,
                            v = h ? [h] : [];
                        w.GWData = w.GWData || {};
                        w.GWData['d45e5080-d1e8-483e-ad87-11f6601d53cf'] = {
                            loaded: false,
                            data: v
                        };
                    }(document, window));
                </script>
            </div>
        </div>
        <script>
            (function(f) {
                f(P._namespace('gwiAutoInstVisible'));
            }(function(P) {
                if (window.GWI) {
                    GWI.Card.autoInstVisible('3BxqXThUPXbADy3y9ofFEA');
                }
            }));
        </script>
    </div>
    <hr data-display-at="smws" data-order-sm="10" data-order-ws="10" class="card-flow-row-break"></hr>
    <div id="desktop-6" data-gwi="{&quot;visible&quot;:&quot;desktop-6-visible&quot;,&quot;active&quot;:&quot;desktop-6-active&quot;}" data-col-span-ws="4" data-col-span-sm="3" data-order-ws="11" data-order-sm="11" data-display-at="smws" class="gw-col desktop-row gwi-row gw-widget-instrument gw-auto-height celwidget csm-placement-id-e60c70f0-0541-4ba5-b6fc-ada95198a5fe desktop-gateway-btf_crs_zg_ts-976442031 pd_rd_wg-DuDJh pd_rd_w-ggA2g pd_rd_r-f3c3b933-a933-48da-995b-0197caae93b0"
        data-pf_rd_p="e60c70f0-0541-4ba5-b6fc-ada95198a5fe" data-pd_rd_wg="DuDJh" data-pd_rd_w="ggA2g" data-pd_rd_r="f3c3b933-a933-48da-995b-0197caae93b0" data-ref_="pd_gw_crs_zg_bs_976442031">
        <div class="a-section a-spacing-none ameyal-product-shoveler" id="Jn-CbsEQ_udcqy2cvBJbgA">
            <div id="584fb973-020f-4192-8cb1-fd27b399dbc2" class="a-section a-spacing-none shogun-widget card-lite product-shoveler aui-desktop fresh-shoveler">
                <div class="a-section as-title-block">
                    <h2 class="as-title-block-left"><span class="a-color-base">Best Sellers in Home &amp; Kitchen</span></h2><span class="as-title-block-right"></span></div>
                <div class="a-section a-spacing-none feed-carousel">
                    <div class="a-section feed-carousel-viewport">
                        <ul class="a-unordered-list a-nostyle a-horizontal feed-carousel-shelf" role="list">
                            <li data-sgproduct="{&quot;asin&quot;:&quot;B08Z98BTDR&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Pigeon-Stovekraft-Standard-effortlessly-Vegetables/dp/B08Z98BTDR/?_encoding=UTF8&amp;pd_rd_w=ggA2g&amp;pf_rd_p=e60c70f0-0541-4ba5-b6fc-ada95198a5fe&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_crs_zg_bs_976442031"><img alt="Pigeon by Stovekraft Handy and Compact Chopper Pro Standard with 3 Blades for effortlessly Chopping Vegetables and..." src="https://m.media-amazon.com/images/I/41cVgYgAKpL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/51RXzjrUmkL._AC_SY400_.jpg"/></a></span></li>
                            <li
                                data-sgproduct="{&quot;asin&quot;:&quot;B08HRBDLNW&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Pigeon-Stovekraft-Stainless-instant-noodles/dp/B08HRBDLNW/?_encoding=UTF8&amp;pd_rd_w=ggA2g&amp;pf_rd_p=e60c70f0-0541-4ba5-b6fc-ada95198a5fe&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_crs_zg_bs_976442031"><img alt="Pigeon by Stovekraft Amaze Plus Kettle with Stainless Steel Body boiler for Water, instant noodles, soup etc." src="https://m.media-amazon.com/images/I/315AO4OdIZL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/51GNDwvogcL._AC_SY400_.jpg"/></a></span></li>
                                <li
                                    data-sgproduct="{&quot;asin&quot;:&quot;B08KFXRK1Q&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Platini-Torque-36-Litres-Personal-Cooler/dp/B08KFXRK1Q/?_encoding=UTF8&amp;pd_rd_w=ggA2g&amp;pf_rd_p=e60c70f0-0541-4ba5-b6fc-ada95198a5fe&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_crs_zg_bs_976442031"><img alt="Bajaj Platini PX97 Torque 36-Litres Personal Air Cooler (White)- for Medium Room" src="https://m.media-amazon.com/images/I/410F5IlFcdL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/71hKAblAn-L._AC_SY400_.jpg"/></a></span></li>
                                    <li
                                        data-sgproduct="{&quot;asin&quot;:&quot;B085MX2B9T&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Shalimar-Premium-OXO-Biodegradable-Garbage/dp/B085MX2B9T/?_encoding=UTF8&amp;pd_rd_w=ggA2g&amp;pf_rd_p=e60c70f0-0541-4ba5-b6fc-ada95198a5fe&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_crs_zg_bs_976442031"><img alt="Shalimar Premium OXO - Biodegradable Garbage Bags" src="https://m.media-amazon.com/images/I/41dk2+SASqL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/71c7jMrDOEL._AC_SY400_.jpg"/></a></span></li>
                                        <li
                                            data-sgproduct="{&quot;asin&quot;:&quot;B07VQGVL68&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Multipurpose-Portable-Electronic-Digital-Weighing/dp/B07VQGVL68/?_encoding=UTF8&amp;pd_rd_w=ggA2g&amp;pf_rd_p=e60c70f0-0541-4ba5-b6fc-ada95198a5fe&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_crs_zg_bs_976442031"><img alt="Glun Multipurpose Portable Electronic Digital Weighing Scale Weight Machine (10 Kg - with Back Light)" src="https://m.media-amazon.com/images/I/31ZBLC08LLL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/51TssoP1OTL._AC_SY400_.jpg"/></a></span></li>
                                            <li
                                                data-sgproduct="{&quot;asin&quot;:&quot;B08Z9944QW&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Pigeon-Chopper-Chopping-Whisking-Stainless/dp/B08Z9944QW/?_encoding=UTF8&amp;pd_rd_w=ggA2g&amp;pf_rd_p=e60c70f0-0541-4ba5-b6fc-ada95198a5fe&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_crs_zg_bs_976442031"><img alt="Pigeon Handy Chopper 14077 for Chopping, Mincing and Whisking with 5 Stainless Steel Blades and 1 Plastic Whisker (900 ml)" src="https://m.media-amazon.com/images/I/41outakMrfL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/51rrik+QukL._AC_SY400_.jpg"/></a></span></li>
                                                <li
                                                    data-sgproduct="{&quot;asin&quot;:&quot;B072Q5VP76&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Odonil-Toilet-Air-Freshener-50g/dp/B072Q5VP76/?_encoding=UTF8&amp;pd_rd_w=ggA2g&amp;pf_rd_p=e60c70f0-0541-4ba5-b6fc-ada95198a5fe&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_crs_zg_bs_976442031"><img alt="Odonil Bathroom Air Freshener Blocks ??? 50 g (Buy 3 get 1)" src="https://m.media-amazon.com/images/I/41U4O3Ew1EL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/71Y7W4HXY2L._AC_SY400_.jpg"/></a></span></li>
                        </ul>
                        <div class="spinner" aria-hidden="true"><i class="gw-spinner" role="presentation"></i></div>
                    </div><a aria-label="Carousel previous slide" class="a-link-normal feed-carousel-control feed-left" tabindex="-1" href="#"><span class="gw-icon feed-arrow"></span></a><a aria-label="Carousel next slide" class="a-link-normal feed-carousel-control feed-right"
                        tabindex="-1" href="#"><span class="gw-icon feed-arrow"></span></a><span class="feed-scrollbar"><span class="feed-scrollbar-track"><span class="feed-scrollbar-thumb"></span></span>
                    </span>
                </div>
                <script type="text/javascript">
                    P.when("component-feed-carousel").execute(function(c) {
                        c.createCarousel("#584fb973-020f-4192-8cb1-fd27b399dbc2 .feed-carousel", 10, 0);
                    });
                </script>
                <script id="584fb973-020f-4192-8cb1-fd27b399dbc2-btfCarouselContent" type="text/x-lazy-loaded-content">
                    <li data-sgproduct="{&quot;asin&quot;:&quot;B08TNRY8LH&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Milton-Thermosteel-Flip-Lid-Flask/dp/B08TNRY8LH/?_encoding=UTF8&amp;pd_rd_w=ggA2g&amp;pf_rd_p=e60c70f0-0541-4ba5-b6fc-ada95198a5fe&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_crs_zg_bs_976442031"><img alt="Milton Thermosteel Flip Lid Flask" src="https://m.media-amazon.com/images/I/41CqaA4KDzL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/81t4Fl4iFnL._AC_SY400_.jpg"/></a></span></li>
                    <li
                        data-sgproduct="{&quot;asin&quot;:&quot;B0853WNM91&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Amazon-Brand-Solimo-Plastic-Fridge/dp/B0853WNM91/?_encoding=UTF8&amp;pd_rd_w=ggA2g&amp;pf_rd_p=e60c70f0-0541-4ba5-b6fc-ada95198a5fe&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_crs_zg_bs_976442031"><img alt="Amazon Brand ??? Amazon Brand - Solimo Plastic Fridge Bottle Set" src="https://m.media-amazon.com/images/I/417c7dB3EoL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/91LvKER5jhL._AC_SY400_.jpg"/></a></span></li>
                        <li
                            data-sgproduct="{&quot;asin&quot;:&quot;B07W8QWJPN&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Wipro-WiFi-Enabled-Smart-Bulb/dp/B07W8QWJPN/?_encoding=UTF8&amp;pd_rd_w=ggA2g&amp;pf_rd_p=e60c70f0-0541-4ba5-b6fc-ada95198a5fe&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_crs_zg_bs_976442031"><img alt="Wipro WiFi Enabled Smart LED Bulb" src="https://m.media-amazon.com/images/I/41kBF8picHL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/71fWev3xcWL._AC_SY400_.jpg"/></a></span></li>
                            <li
                                data-sgproduct="{&quot;asin&quot;:&quot;B07P7RBGP5&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Godrej-aer-Pocket-Bathroom-Fragrances/dp/B07P7RBGP5/?_encoding=UTF8&amp;pd_rd_w=ggA2g&amp;pf_rd_p=e60c70f0-0541-4ba5-b6fc-ada95198a5fe&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_crs_zg_bs_976442031"><img alt="Godrej aer Pocket - Bathroom Fragrances" src="https://m.media-amazon.com/images/I/51BKJByUinL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/71S-pAaf6GL._AC_SY400_.jpg"/></a></span></li>
                                <li
                                    data-sgproduct="{&quot;asin&quot;:&quot;B08TNQ56LJ&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Milton-Thermosteel-1800-Deluxe-Bottle/dp/B08TNQ56LJ/?_encoding=UTF8&amp;pd_rd_w=ggA2g&amp;pf_rd_p=e60c70f0-0541-4ba5-b6fc-ada95198a5fe&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_crs_zg_bs_976442031"><img alt="Milton Thermosteel Duo 1800 Deluxe Bottle" src="https://m.media-amazon.com/images/I/31OCZqdW2RL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/61TWp6JrVxL._AC_SY400_.jpg"/></a></span></li>
                                    <li
                                        data-sgproduct="{&quot;asin&quot;:&quot;B07NBWHTK4&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Cello-Venice-Exclusive-Plastic-Bottle/dp/B07NBWHTK4/?_encoding=UTF8&amp;pd_rd_w=ggA2g&amp;pf_rd_p=e60c70f0-0541-4ba5-b6fc-ada95198a5fe&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_crs_zg_bs_976442031"><img alt="Cello Venice Exclusive Edition Plastic Water Bottle Set, 1 Litre, Set of 5" src="https://m.media-amazon.com/images/I/41STmPt8viL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/81LivCRBRmL._AC_SY400_.jpg"/></a></span></li>
                                        <li
                                            data-sgproduct="{&quot;asin&quot;:&quot;B0857MFHQG&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Cello-Checkers/dp/B0857MFHQG/?_encoding=UTF8&amp;pd_rd_w=ggA2g&amp;pf_rd_p=e60c70f0-0541-4ba5-b6fc-ada95198a5fe&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_crs_zg_bs_976442031"><img alt="Cello Checkers" src="https://m.media-amazon.com/images/I/41AJ1mqE57L._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/61yS6CMP-zL._AC_SY400_.jpg"/></a></span></li>
                                            <li
                                                data-sgproduct="{&quot;asin&quot;:&quot;B08YKL3TZ8&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Mangaldeep-Sadhvi-Agarbatti-100-Sticks/dp/B08YKL3TZ8/?_encoding=UTF8&amp;pd_rd_w=ggA2g&amp;pf_rd_p=e60c70f0-0541-4ba5-b6fc-ada95198a5fe&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_crs_zg_bs_976442031"><img alt="Mangaldeep Sadhvi Agarbatti - 100 Sticks" src="https://m.media-amazon.com/images/I/51mxU0WVctL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/81dK8PIAdmL._AC_SY400_.jpg"/></a></span></li>
                                                <li
                                                    data-sgproduct="{&quot;asin&quot;:&quot;B0828ZZDSR&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Ezee-Garbage-Bag-inches-Pieces/dp/B0828ZZDSR/?_encoding=UTF8&amp;pd_rd_w=ggA2g&amp;pf_rd_p=e60c70f0-0541-4ba5-b6fc-ada95198a5fe&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_crs_zg_bs_976442031"><img alt="Ezee Garbage Bag - 19x21 inches (Pack of 3, 90 Pieces, Small)" src="https://m.media-amazon.com/images/I/41AlRp42IYL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/71Ak4uVyp1L._AC_SY400_.jpg"/></a></span></li>
                                                    <li
                                                        data-sgproduct="{&quot;asin&quot;:&quot;B07GCQR89Z&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Wakefit-Mattress-Protectors/dp/B07GCQR89Z/?_encoding=UTF8&amp;pd_rd_w=ggA2g&amp;pf_rd_p=e60c70f0-0541-4ba5-b6fc-ada95198a5fe&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_crs_zg_bs_976442031"><img alt="Wakefit Mattress Protectors" src="https://m.media-amazon.com/images/I/41BcmBwnzJL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/51cNQYWs3kL._AC_SY400_.jpg"/></a></span></li>
                                                        <li
                                                            data-sgproduct="{&quot;asin&quot;:&quot;B08SRDNJWC&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Butterfly-Premium-Vegetable-Chopper-Blue/dp/B08SRDNJWC/?_encoding=UTF8&amp;pd_rd_w=ggA2g&amp;pf_rd_p=e60c70f0-0541-4ba5-b6fc-ada95198a5fe&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_crs_zg_bs_976442031"><img alt="Butterfly Premium Vegetable Chopper 900 Ml, Blue" src="https://m.media-amazon.com/images/I/41t3kuMrnBL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/71r+lyx-W2L._AC_SY400_.jpg"/></a></span></li>
                                                            <li
                                                                data-sgproduct="{&quot;asin&quot;:&quot;B07L6GZYDV&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Wakefit-Sleeping-Pillow-Set-27/dp/B07L6GZYDV/?_encoding=UTF8&amp;pd_rd_w=ggA2g&amp;pf_rd_p=e60c70f0-0541-4ba5-b6fc-ada95198a5fe&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_crs_zg_bs_976442031"><img alt="Wakefit Hollow Fiber Pillow, 68.58 cm x 40.64 cm, White &amp; Grey, 2-pieces" src="https://m.media-amazon.com/images/I/41E3ejzmCPL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/61-Th9Ai7-L._AC_SY400_.jpg"/></a></span></li>
                                                                <li
                                                                    data-sgproduct="{&quot;asin&quot;:&quot;B08LHK2PXW&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Ajanta/dp/B08LHK2PXW/?_encoding=UTF8&amp;pd_rd_w=ggA2g&amp;pf_rd_p=e60c70f0-0541-4ba5-b6fc-ada95198a5fe&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_crs_zg_bs_976442031"><img alt="Ajanta" src="https://m.media-amazon.com/images/I/51UB2MXIfKL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/61u8d28mFtL._AC_SY400_.jpg"/></a></span></li>
                                                                    <li
                                                                        data-sgproduct="{&quot;asin&quot;:&quot;B08LHZRDGN&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/SHALIMAR-Shalimar/dp/B08LHZRDGN/?_encoding=UTF8&amp;pd_rd_w=ggA2g&amp;pf_rd_p=e60c70f0-0541-4ba5-b6fc-ada95198a5fe&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_crs_zg_bs_976442031"><img alt="Shalimar" src="https://m.media-amazon.com/images/I/41bx6m0YtZL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/71POPTMcKEL._AC_SY400_.jpg"/></a></span></li>
                                                                        <li
                                                                            data-sgproduct="{&quot;asin&quot;:&quot;B085CYP21Q&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Crompton/dp/B085CYP21Q/?_encoding=UTF8&amp;pd_rd_w=ggA2g&amp;pf_rd_p=e60c70f0-0541-4ba5-b6fc-ada95198a5fe&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_crs_zg_bs_976442031"><img alt="Crompton" src="https://m.media-amazon.com/images/I/41+kckM8zLL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/517zUcA3KBL._AC_SY400_.jpg"/></a></span></li>
                                                                            <li
                                                                                data-sgproduct="{&quot;asin&quot;:&quot;B07VXRFNMR&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Amazon-Brand-Solimo-Tealight-Candles/dp/B07VXRFNMR/?_encoding=UTF8&amp;pd_rd_w=ggA2g&amp;pf_rd_p=e60c70f0-0541-4ba5-b6fc-ada95198a5fe&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_crs_zg_bs_976442031"><img alt="Amazon Brand - Solimo Wax Tealight Candles" src="https://m.media-amazon.com/images/I/41nvh+EEAxL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/71awTgVQbtL._AC_SY400_.jpg"/></a></span></li>
                                                                                <li
                                                                                    data-sgproduct="{&quot;asin&quot;:&quot;B08RQ4MYMS&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/USHA-Usha/dp/B08RQ4MYMS/?_encoding=UTF8&amp;pd_rd_w=ggA2g&amp;pf_rd_p=e60c70f0-0541-4ba5-b6fc-ada95198a5fe&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_crs_zg_bs_976442031"><img alt="Usha" src="https://m.media-amazon.com/images/I/31zfkzrLT+L._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/51OZFmxkmCL._AC_SY400_.jpg"/></a></span></li>
                                                                                    <li
                                                                                        data-sgproduct="{&quot;asin&quot;:&quot;B07T5B3MDV&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Solimo-Resistant-Cotton-Mattress-Protector/dp/B07T5B3MDV/?_encoding=UTF8&amp;pd_rd_w=ggA2g&amp;pf_rd_p=e60c70f0-0541-4ba5-b6fc-ada95198a5fe&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_crs_zg_bs_976442031"><img alt="Solimo Water Resistant Cotton Mattress Protector" src="https://m.media-amazon.com/images/I/31o+eha-zgL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/71iwOqHQUyL._AC_SY400_.jpg"/></a></span></li>
                                                                                        <li
                                                                                            data-sgproduct="{&quot;asin&quot;:&quot;B08WDHBMSB&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/atomberg-Atomberg/dp/B08WDHBMSB/?_encoding=UTF8&amp;pd_rd_w=ggA2g&amp;pf_rd_p=e60c70f0-0541-4ba5-b6fc-ada95198a5fe&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_crs_zg_bs_976442031"><img alt="Atomberg" src="https://m.media-amazon.com/images/I/3177CpwD2TL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/3177CpwD2TL._AC_SY400_.jpg"/></a></span></li>
                                                                                            <li
                                                                                                data-sgproduct="{&quot;asin&quot;:&quot;B07XN6LQJV&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Ebee-Store-Collapsible-Shoe-Rack/dp/B07XN6LQJV/?_encoding=UTF8&amp;pd_rd_w=ggA2g&amp;pf_rd_p=e60c70f0-0541-4ba5-b6fc-ada95198a5fe&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_crs_zg_bs_976442031"><img alt="Ebee Store Collapsible Shoe Rack" src="https://m.media-amazon.com/images/I/41CsF8QoWuL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/612u9rSYhbL._AC_SY400_.jpg"/></a></span></li>
                                                                                                <li
                                                                                                    data-sgproduct="{&quot;asin&quot;:&quot;B07Y2TSNFP&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Ganesh-Multipurpose-Vegetable-Chopper-Cutter/dp/B07Y2TSNFP/?_encoding=UTF8&amp;pd_rd_w=ggA2g&amp;pf_rd_p=e60c70f0-0541-4ba5-b6fc-ada95198a5fe&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_crs_zg_bs_976442031"><img alt="Ganesh Multipurpose Vegetable and Fruit Chopper Cutter Grater Slicer" src="https://m.media-amazon.com/images/I/41rHu6kq-0L._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/716KXDMKadL._AC_SY400_.jpg"/></a></span></li>
                                                                                                    <li
                                                                                                        data-sgproduct="{&quot;asin&quot;:&quot;B07YL5K72J&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Prestige-Grill-Sandwich-Toaster/dp/B07YL5K72J/?_encoding=UTF8&amp;pd_rd_w=ggA2g&amp;pf_rd_p=e60c70f0-0541-4ba5-b6fc-ada95198a5fe&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_crs_zg_bs_976442031"><img alt="Prestige Grill Sandwich Toaster" src="https://m.media-amazon.com/images/I/41LFdROYICL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/51P5A28trLL._AC_SY400_.jpg"/></a></span></li>
                                                                                                        <li
                                                                                                            data-sgproduct="{&quot;asin&quot;:&quot;B01N33R64P&quot;}" class="feed-carousel-card"><span class="a-list-item"><a class="a-link-normal" href="/Wonderchef-Watt-Nutri-Blend-Mixer-Grinder/dp/B01N33R64P/?_encoding=UTF8&amp;pd_rd_w=ggA2g&amp;pf_rd_p=e60c70f0-0541-4ba5-b6fc-ada95198a5fe&amp;pf_rd_r=WMZVJ0QZ56QFCB33E37K&amp;pd_rd_r=f3c3b933-a933-48da-995b-0197caae93b0&amp;pd_rd_wg=DuDJh&amp;ref_=pd_gw_crs_zg_bs_976442031"><img alt="Wonderchef Nutri-Blend 400 Watts Juicer Mixer Grinder" src="https://m.media-amazon.com/images/I/41QO5pRFLfL._AC_SY200_.jpg" class="product-image" height="200px" data-a-hires="https://m.media-amazon.com/images/I/61lZGao-QQL._AC_SY400_.jpg"/></a></span></li>
                </script>
                <script type="text/javascript">
                    (function carouselBtf(d, w) {
                        var p = d.getElementById("584fb973-020f-4192-8cb1-fd27b399dbc2-btfCarouselContent"),
                            h = p && p.innerHTML,
                            v = h ? [h] : [];
                        w.GWData = w.GWData || {};
                        w.GWData['584fb973-020f-4192-8cb1-fd27b399dbc2'] = {
                            loaded: false,
                            data: v
                        };
                    }(document, window));
                </script>
            </div>
        </div>
        <script>
            (function(f) {
                f(P._namespace('gwiAutoInstVisible'));
            }(function(P) {
                if (window.GWI) {
                    GWI.Card.autoInstVisible('Jn-CbsEQ_udcqy2cvBJbgA');
                }
            }));
        </script>
    </div>
    <hr data-display-at="smws" data-order-sm="11" data-order-ws="11" class="card-flow-row-break"></hr>
    <div id="desktop-btf-grid-9" data-gwi="{&quot;visible&quot;:&quot;desktop-btf-grid-9-visible&quot;,&quot;active&quot;:&quot;desktop-btf-grid-9-active&quot;}" data-display-at="smws" data-order-ws="12" class="gw-col celwidget csm-placement-id-1fa74865-68fb-4a0c-8106-135ee333f0da desktop-gateway-btf_749aa58c-91ce-4cec-941d-9b58e80b3f3d pd_rd_wg-DuDJh pd_rd_w-xSqcC pd_rd_r-f3c3b933-a933-48da-995b-0197caae93b0"
        data-order-sm="12" data-pf_rd_p="1fa74865-68fb-4a0c-8106-135ee333f0da" data-pd_rd_wg="DuDJh" data-pd_rd_w="xSqcC" data-pd_rd_r="f3c3b933-a933-48da-995b-0197caae93b0" data-ref_="pd_gw_unk">
        <div id="Q3apEz1w-_rlnkrY7CNcyA" class="a-cardui fluid-quad-card fluid-card fluid-quad-image-label fluid-quad-image-label" data-a-card-type="basic">
            <div class="a-cardui-header">
                <h2 class="a-color-base headline truncate-2line">Kindle E-readers | Starting ???7,999</h2>
            </div>
            <div class="a-cardui-body">
                <div class="a-section a-spacing-small grid-row-1">
                    <div class="a-section a-spacing-none quadrant-container quadrant-container-0">
                        <a aria-label="Kindle Paperwhite" class="a-link-normal image-redirect aok-block image-window" href="/ref=gw_pc_kindle_1/dp/B077454Z99">
                            <div class="a-section a-spacing-none fluid-image-container"><img alt="Kindle Paperwhite" src="https://images-eu.ssl-images-amazon.com/images/G/31/img17/AmazonDevices/2019/Herotator/MSO/desktop/DC_QC_Kindle_1x_1._SY116_CB448577593_.jpg" class="landscape-image" data-a-hires="https://images-eu.ssl-images-amazon.com/images/G/31/img17/AmazonDevices/2019/Herotator/MSO/desktop/DC_QC_Kindle_2x_1._SY232_CB448577593_.jpg"
                                /></div>
                            <div class="a-section a-spacing-none image-label truncate-2line"><span class="a-size-small a-color-base aok-align-center aok-inline-block">Kindle Paperwhite</span></div>
                        </a>
                    </div>
                    <div class="a-section a-spacing-none quadrant-container quadrant-container-1">
                        <a aria-label="All-New Kindle" class="a-link-normal image-redirect aok-block image-window" href="/ref=gw_pc_kindle_2/dp/B07FQ4Q5DH">
                            <div class="a-section a-spacing-none fluid-image-container"><img alt="All-New Kindle" src="https://images-eu.ssl-images-amazon.com/images/G/31/img17/AmazonDevices/2019/GWFaizan/All_New_Kindle_B07FQ1B3TQ_DC_C_1x._SY116_CB422370017_.jpg" class="landscape-image" data-a-hires="https://images-eu.ssl-images-amazon.com/images/G/31/img17/AmazonDevices/2019/GWFaizan/All_New_Kindle_B07FQ1B3TQ_DC_QC_2x._SY232_CB422370017_.jpg"
                                /></div>
                            <div class="a-section a-spacing-none image-label truncate-2line"><span class="a-size-small a-color-base aok-align-center aok-inline-block">All-New Kindle</span></div>
                        </a>
                    </div>
                </div>
                <div class="a-section grid-row-2">
                    <div class="a-section a-spacing-none quadrant-container quadrant-container-0">
                        <a aria-label="Kindle Oasis (9th Gen)" class="a-link-normal image-redirect aok-block image-window" href="/ref=gw_pc_kindle_3/dp/B06XD2ZMSW">
                            <div class="a-section a-spacing-none fluid-image-container"><img alt="Kindle Oasis (9th Gen)" src="https://images-eu.ssl-images-amazon.com/images/G/31/img17/AmazonDevices/2019/Herotator/MSO/desktop/DC_QC_Kindle_1x_3._SY116_CB448577593_.jpg" class="landscape-image" data-a-hires="https://images-eu.ssl-images-amazon.com/images/G/31/img17/AmazonDevices/2019/Herotator/MSO/desktop/DC_QC_Kindle_2x_3._SY232_CB448577592_.jpg"
                                /></div>
                            <div class="a-section a-spacing-none image-label truncate-2line"><span class="a-size-small a-color-base aok-align-center aok-inline-block">Kindle Oasis (9th Gen)</span></div>
                        </a>
                    </div>
                    <div class="a-section a-spacing-none quadrant-container quadrant-container-1">
                        <a aria-label="Kindle Paperwhite 4G" class="a-link-normal image-redirect aok-block image-window" href="/ref=gw_pc_kindle_4/dp/B077498K1F">
                            <div class="a-section a-spacing-none fluid-image-container"><img alt="Kindle Paperwhite 4G" src="https://images-eu.ssl-images-amazon.com/images/G/31/img17/AmazonDevices/2019/Herotator/MSO/desktop/DC_QC_Kindle_1x_4._SY116_CB448577593_.jpg" class="landscape-image" data-a-hires="https://images-eu.ssl-images-amazon.com/images/G/31/img17/AmazonDevices/2019/Herotator/MSO/desktop/DC_QC_Kindle_2x_4._SY232_CB448577592_.jpg"
                                /></div>
                            <div class="a-section a-spacing-none image-label truncate-2line"><span class="a-size-small a-color-base aok-align-center aok-inline-block">Kindle Paperwhite 4G</span></div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="a-cardui-footer"><a aria-label="Kindle E-readers | Starting ???7,999 - See more" class="a-link-normal see-more truncate-1line" href="/b?node=21474247031">See more</a></div>
        </div>
        <script>
            (function(f) {
                f(P._namespace('gwiAutoInstVisible'));
            }(function(P) {
                if (window.GWI) {
                    GWI.Card.autoInstVisible('Q3apEz1w-_rlnkrY7CNcyA');
                }
            }));
        </script>
        <script>
            P.when('mix:fluid-quad-image-label').execute(function(cardModule) {
                cardModule.init('Q3apEz1w-_rlnkrY7CNcyA');
                if (window.GWI) {
                    window.GWI.Card.autoInstActive('Q3apEz1w-_rlnkrY7CNcyA');
                }
            });
        </script>
    </div>
    <hr data-display-at="sm" data-order-sm="12" class="card-flow-row-break"></hr>
    <div id="desktop-btf-grid-10" data-gwi="{&quot;visible&quot;:&quot;desktop-btf-grid-10-visible&quot;,&quot;active&quot;:&quot;desktop-btf-grid-10-active&quot;}" data-display-at="ws" data-order-ws="12" class="gw-col celwidget csm-placement-id-1b501d4c-3159-45de-8b5e-64730ac3ca08 desktop-gateway-btf_b1125bf0-e300-4274-9829-196b9009b08a pd_rd_wg-DuDJh pd_rd_w-ufcpK pd_rd_r-f3c3b933-a933-48da-995b-0197caae93b0"
        data-pf_rd_p="1b501d4c-3159-45de-8b5e-64730ac3ca08" data-pd_rd_wg="DuDJh" data-pd_rd_w="ufcpK" data-pd_rd_r="f3c3b933-a933-48da-995b-0197caae93b0" data-ref_="pd_gw_unk">
        <div id="78y55878Y0l8Ax1jJ0cKQA" class="a-cardui fluid-quad-card fluid-card fluid-quad-image-label fluid-quad-image-label" data-a-card-type="basic">
            <div class="a-cardui-header">
                <h2 class="a-color-base headline truncate-2line">Women&#x27;s western wear | Up to 70% off</h2>
            </div>
            <div class="a-cardui-body">
                <div class="a-section a-spacing-small grid-row-1">
                    <div class="a-section a-spacing-none quadrant-container quadrant-container-0">
                        <a aria-label="CLOTHING" class="a-link-normal image-redirect aok-block image-window" href="/b/ref=app_gw_feb20?node=11400137031">
                            <div class="a-section a-spacing-none fluid-image-container"><img alt="CLOTHING" src="https://images-eu.ssl-images-amazon.com/images/G/31/img21/Fashion/Gateway/WWW/1._SY116_CB656505181_.jpg" class="landscape-image" data-a-hires="https://images-eu.ssl-images-amazon.com/images/G/31/img21/Fashion/Gateway/WWW/01._SY232_CB656505189_.jpg"
                                /></div>
                            <div class="a-section a-spacing-none image-label truncate-2line"><span class="a-size-small a-color-base aok-align-center aok-inline-block">Clothing  | Up to 60% off</span></div>
                        </a>
                    </div>
                    <div class="a-section a-spacing-none quadrant-container quadrant-container-1">
                        <a aria-label="Shoes" class="a-link-normal image-redirect aok-block image-window" href="/b/ref=ssh_gw_feb20?node=1983578031">
                            <div class="a-section a-spacing-none fluid-image-container"><img alt="Shoes" src="https://images-eu.ssl-images-amazon.com/images/G/31/img21/Fashion/Gateway/WWW/2._SY116_CB656505181_.jpg" class="landscape-image" data-a-hires="https://images-eu.ssl-images-amazon.com/images/G/31/img21/Fashion/Gateway/WWW/02._SY232_CB656505189_.jpg"
                                /></div>
                            <div class="a-section a-spacing-none image-label truncate-2line"><span class="a-size-small a-color-base aok-align-center aok-inline-block">Footwear | Up to 60% off</span></div>
                        </a>
                    </div>
                </div>
                <div class="a-section grid-row-2">
                    <div class="a-section a-spacing-none quadrant-container quadrant-container-0">
                        <a aria-label="Handbags" class="a-link-normal image-redirect aok-block image-window" href="s/ref=nb_sb_noss?url=node%3D1983338031&amp;field-keywords=">
                            <div class="a-section a-spacing-none fluid-image-container"><img alt="Handbags" src="https://images-eu.ssl-images-amazon.com/images/G/31/img21/Fashion/Gateway/WWW/3._SY116_CB656505181_.jpg" class="landscape-image" data-a-hires="https://images-eu.ssl-images-amazon.com/images/G/31/img21/Fashion/Gateway/WWW/03._SY232_CB656505189_.jpg"
                                /></div>
                            <div class="a-section a-spacing-none image-label truncate-2line"><span class="a-size-small a-color-base aok-align-center aok-inline-block">Handbags | Up to 60% off</span></div>
                        </a>
                    </div>
                    <div class="a-section a-spacing-none quadrant-container quadrant-container-1">
                        <a aria-label="Fashion jewellery" class="a-link-normal image-redirect aok-block image-window" href="b/ref=jewl_gw_feb20?node=5210079031">
                            <div class="a-section a-spacing-none fluid-image-container"><img alt="Fashion jewellery" src="https://images-eu.ssl-images-amazon.com/images/G/31/img21/Fashion/Gateway/WWW/4._SY116_CB656505181_.jpg" class="landscape-image" data-a-hires="https://images-eu.ssl-images-amazon.com/images/G/31/img21/Fashion/Gateway/WWW/04._SY232_CB656505189_.jpg"
                                /></div>
                            <div class="a-section a-spacing-none image-label truncate-2line"><span class="a-size-small a-color-base aok-align-center aok-inline-block">Fashion jewellery | Up to 60% off</span></div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="a-cardui-footer"><a aria-label="Women&#x27;s western wear | Up to 70% off - View all" class="a-link-normal see-more truncate-1line" href="/b/ref=sl_gw_feb20?node=6648217031">View all</a></div>
        </div>
        <script>
            (function(f) {
                f(P._namespace('gwiAutoInstVisible'));
            }(function(P) {
                if (window.GWI) {
                    GWI.Card.autoInstVisible('78y55878Y0l8Ax1jJ0cKQA');
                }
            }));
        </script>
        <script>
            P.when('mix:fluid-quad-image-label').execute(function(cardModule) {
                cardModule.init('78y55878Y0l8Ax1jJ0cKQA');
                if (window.GWI) {
                    window.GWI.Card.autoInstActive('78y55878Y0l8Ax1jJ0cKQA');
                }
            });
        </script>
    </div>
    <div id="desktop-btf-grid-11" data-gwi="{&quot;visible&quot;:&quot;desktop-btf-grid-11-visible&quot;,&quot;active&quot;:&quot;desktop-btf-grid-11-active&quot;}" data-display-at="ws" data-order-ws="12" class="gw-col celwidget csm-placement-id-27d31a49-ddf0-4699-82b2-35800d756f89 desktop-gateway-btf_dd27f493-0191-46d9-ade5-918519764c27 pd_rd_wg-DuDJh pd_rd_w-Exv65 pd_rd_r-f3c3b933-a933-48da-995b-0197caae93b0"
        data-pf_rd_p="27d31a49-ddf0-4699-82b2-35800d756f89" data-pd_rd_wg="DuDJh" data-pd_rd_w="Exv65" data-pd_rd_r="f3c3b933-a933-48da-995b-0197caae93b0" data-ref_="pd_gw_unk">
        <div id="2zz-C08mv-CPStClJBfZKg" class="a-cardui fluid-quad-card fluid-card fluid-quad-image-label fluid-quad-image-label" data-a-card-type="basic">
            <div class="a-cardui-header">
                <h2 class="a-color-base headline truncate-2line">Cookware &amp; dining</h2>
            </div>
            <div class="a-cardui-body">
                <div class="a-section a-spacing-small grid-row-1">
                    <div class="a-section a-spacing-none quadrant-container quadrant-container-0">
                        <a aria-label="Stoves" class="a-link-normal image-redirect aok-block image-window" href="/b?ie=UTF8&amp;node=1380267031">
                            <div class="a-section a-spacing-none fluid-image-container"><img alt="Stoves" src="https://images-eu.ssl-images-amazon.com/images/G/31/IN-hq/2019/img/Kitchen/XCM_Manual_186x116_1198417XCM_Manual_1198417__1_1573567224_jpg_LOWER_QL85_._SY116_CB448746450_.jpg" class="landscape-image" data-a-hires="https://images-eu.ssl-images-amazon.com/images/G/31/IN-hq/2019/img/Kitchen/XCM_Manual_372x232_1198417XCM_Manual_1198417__1_1573567224_jpg_LOWER_QL85_._SY232_CB448746450_.jpg"
                                /></div>
                            <div class="a-section a-spacing-none image-label truncate-2line"><span class="a-size-small a-color-base aok-align-center aok-inline-block">Gas stoves</span></div>
                        </a>
                    </div>
                    <div class="a-section a-spacing-none quadrant-container quadrant-container-1">
                        <a aria-label="Cookware" class="a-link-normal image-redirect aok-block image-window" href="/s?i=kitchen&amp;bbn=15423132031&amp;rh=n%3A976442031%2Cn%3A15423132031%2Cn%3A5925789031%2Cp_n_pct-off-with-tax%3A2665399031%2Cp_85%3A10440599031">
                            <div class="a-section a-spacing-none fluid-image-container"><img alt="Cookware" src="https://images-eu.ssl-images-amazon.com/images/G/31/IN-hq/2019/img/Kitchen/XCM_Manual_186x116_1198417XCM_Manual_1198417__2_1573567224_jpg_LOWER_QL85_._SY116_CB448746415_.jpg" class="landscape-image"
                                    data-a-hires="https://images-eu.ssl-images-amazon.com/images/G/31/IN-hq/2019/img/Kitchen/XCM_Manual_372x232_1198417XCM_Manual_1198417__2_1573567224_jpg_LOWER_QL85_._SY232_CB448746407_.jpg" /></div>
                            <div class="a-section a-spacing-none image-label truncate-2line"><span class="a-size-small a-color-base aok-align-center aok-inline-block">Cookware</span></div>
                        </a>
                    </div>
                </div>
                <div class="a-section grid-row-2">
                    <div class="a-section a-spacing-none quadrant-container quadrant-container-0">
                        <a aria-label="Thermos &amp; flask" class="a-link-normal image-redirect aok-block image-window" href="/s?i=kitchen&amp;bbn=1379989031&amp;rh=n%3A976442031%2Cn%3A976443031%2Cn%3A5925789031%2Cn%3A1379989031%2Cp_n_format_browse-bin%3A14277550031%2Cp_n_pct-off-with-tax%3A2665399031">
                            <div class="a-section a-spacing-none fluid-image-container"><img alt="Thermos &amp; flask" src="https://images-eu.ssl-images-amazon.com/images/G/31/IN-hq/2019/img/Kitchen/XCM_Manual_186x116_1198417XCM_Manual_3_copyx400x2C5x_1573713358_jpg_LOWER_QL85_._SY116_CB448746425_.jpg" class="landscape-image"
                                    data-a-hires="https://images-eu.ssl-images-amazon.com/images/G/31/IN-hq/2019/img/Kitchen/XCM_Manual_372x232_1198417XCM_Manual_3_copy_1573713358_jpg_LOWER_QL85_._SY232_CB448746425_.jpg" /></div>
                            <div class="a-section a-spacing-none image-label truncate-2line"><span class="a-size-small a-color-base aok-align-center aok-inline-block">Kitchen storage</span></div>
                        </a>
                    </div>
                    <div class="a-section a-spacing-none quadrant-container quadrant-container-1">
                        <a aria-label="Tableware" class="a-link-normal image-redirect aok-block image-window" href="/l/14892174031">
                            <div class="a-section a-spacing-none fluid-image-container"><img alt="Tableware" src="https://images-eu.ssl-images-amazon.com/images/G/31/IN-hq/2019/img/Kitchen/XCM_Manual_186x116_1198417XCM_Manual_1198417__4_1573567224_jpg_LOWER_QL85_._SY116_CB448746450_.jpg" class="landscape-image"
                                    data-a-hires="https://images-eu.ssl-images-amazon.com/images/G/31/IN-hq/2019/img/Kitchen/XCM_Manual_372x232_1198417XCM_Manual_1198417__4_1573567224_jpg_LOWER_QL85_._SY232_CB448746407_.jpg" /></div>
                            <div class="a-section a-spacing-none image-label truncate-2line"><span class="a-size-small a-color-base aok-align-center aok-inline-block">Tableware</span></div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="a-cardui-footer"><a aria-label="Cookware &amp; dining - See more" class="a-link-normal see-more truncate-1line" href="/b?node=5925789031">See more</a></div>
        </div>
        <script>
            (function(f) {
                f(P._namespace('gwiAutoInstVisible'));
            }(function(P) {
                if (window.GWI) {
                    GWI.Card.autoInstVisible('2zz-C08mv-CPStClJBfZKg');
                }
            }));
        </script>
        <script>
            P.when('mix:fluid-quad-image-label').execute(function(cardModule) {
                cardModule.init('2zz-C08mv-CPStClJBfZKg');
                if (window.GWI) {
                    window.GWI.Card.autoInstActive('2zz-C08mv-CPStClJBfZKg');
                }
            });
        </script>
    </div>
    <div id="desktop-btf-grid-12" data-gwi="{&quot;visible&quot;:&quot;desktop-btf-grid-12-visible&quot;,&quot;active&quot;:&quot;desktop-btf-grid-12-active&quot;}" data-display-at="ws" data-order-ws="12" class="gw-col celwidget csm-placement-id-1f648044-78f2-42ac-8020-28584cc0607a desktop-gateway-btf_777185d1-6f96-4bd1-97cf-65f2e810d367 pd_rd_wg-DuDJh pd_rd_w-14sSB pd_rd_r-f3c3b933-a933-48da-995b-0197caae93b0"
        data-pf_rd_p="1f648044-78f2-42ac-8020-28584cc0607a" data-pd_rd_wg="DuDJh" data-pd_rd_w="14sSB" data-pd_rd_r="f3c3b933-a933-48da-995b-0197caae93b0" data-ref_="pd_gw_unk">
        <div id="lpeKYMAkRCrhAUcFrtl7ZQ" class="a-cardui fluid-quad-card fluid-card fluid-quad-image-label fluid-quad-image-label" data-a-card-type="basic">
            <div class="a-cardui-header">
                <h2 class="a-color-base headline truncate-2line">Women&#x27;s ethnic wear | Up to 70% off</h2>
            </div>
            <div class="a-cardui-body">
                <div class="a-section a-spacing-small grid-row-1">
                    <div class="a-section a-spacing-none quadrant-container quadrant-container-0">
                        <a aria-label="CLOTHING" class="a-link-normal image-redirect aok-block image-window" href="/b/ref=app_gw_feb20?node=1968253031">
                            <div class="a-section a-spacing-none fluid-image-container"><img alt="CLOTHING" src="https://images-eu.ssl-images-amazon.com/images/G/31/img21/Fashion/Gateway/WEW/1._SY116_CB656506471_.jpg" class="landscape-image" data-a-hires="https://images-eu.ssl-images-amazon.com/images/G/31/img21/Fashion/Gateway/WEW/01._SY232_CB656506843_.jpg"
                                /></div>
                            <div class="a-section a-spacing-none image-label truncate-2line"><span class="a-size-small a-color-base aok-align-center aok-inline-block">Clothing</span></div>
                        </a>
                    </div>
                    <div class="a-section a-spacing-none quadrant-container quadrant-container-1">
                        <a aria-label="Footwear" class="a-link-normal image-redirect aok-block image-window" href="/b/ref=ssh_gw_feb20?node=4068645031">
                            <div class="a-section a-spacing-none fluid-image-container"><img alt="Footwear" src="https://images-eu.ssl-images-amazon.com/images/G/31/img21/Fashion/Gateway/WEW/2._SY116_CB656506471_.jpg" class="landscape-image" data-a-hires="https://images-eu.ssl-images-amazon.com/images/G/31/img21/Fashion/Gateway/WEW/02._SY232_CB656506843_.jpg"
                                /></div>
                            <div class="a-section a-spacing-none image-label truncate-2line"><span class="a-size-small a-color-base aok-align-center aok-inline-block">Footwear</span></div>
                        </a>
                    </div>
                </div>
                <div class="a-section grid-row-2">
                    <div class="a-section a-spacing-none quadrant-container quadrant-container-0">
                        <a aria-label="JEWELLERY" class="a-link-normal image-redirect aok-block image-window" href="/b/ref=jewl_gw_feb20?node=5210079031">
                            <div class="a-section a-spacing-none fluid-image-container"><img alt="JEWELLERY" src="https://images-eu.ssl-images-amazon.com/images/G/31/img21/Fashion/Gateway/WEW/3._SY116_CB656505274_.jpg" class="landscape-image" data-a-hires="https://images-eu.ssl-images-amazon.com/images/G/31/img21/Fashion/Gateway/WEW/03._SY232_CB656506843_.jpg"
                                /></div>
                            <div class="a-section a-spacing-none image-label truncate-2line"><span class="a-size-small a-color-base aok-align-center aok-inline-block">Fashion jewellery</span></div>
                        </a>
                    </div>
                    <div class="a-section a-spacing-none quadrant-container quadrant-container-1">
                        <a aria-label="Precious jewellery" class="a-link-normal image-redirect aok-block image-window" href="/b/ref=jewl_gw_feb20?node=5210069031">
                            <div class="a-section a-spacing-none fluid-image-container"><img alt="Precious jewellery" src="https://images-eu.ssl-images-amazon.com/images/G/31/img21/Fashion/Gateway/WEW/4._SY116_CB656506471_.jpg" class="landscape-image" data-a-hires="https://images-eu.ssl-images-amazon.com/images/G/31/img21/Fashion/Gateway/WEW/04._SY232_CB656506843_.jpg"
                                /></div>
                            <div class="a-section a-spacing-none image-label truncate-2line"><span class="a-size-small a-color-base aok-align-center aok-inline-block">Precious jewellery</span></div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="a-cardui-footer"><a aria-label="Women&#x27;s ethnic wear | Up to 70% off - View all" class="a-link-normal see-more truncate-1line" href="/b/ref=sl_gw_feb20?node=6648217031">View all</a></div>
        </div>
        <script>
            (function(f) {
                f(P._namespace('gwiAutoInstVisible'));
            }(function(P) {
                if (window.GWI) {
                    GWI.Card.autoInstVisible('lpeKYMAkRCrhAUcFrtl7ZQ');
                }
            }));
        </script>
        <script>
            P.when('mix:fluid-quad-image-label').execute(function(cardModule) {
                cardModule.init('lpeKYMAkRCrhAUcFrtl7ZQ');
                if (window.GWI) {
                    window.GWI.Card.autoInstActive('lpeKYMAkRCrhAUcFrtl7ZQ');
                }
            });
        </script>
    </div>
    <hr data-display-at="ws" data-order-ws="12" class="card-flow-row-break"></hr>
    <div id="desktop-7" data-gwi="{&quot;visible&quot;:&quot;desktop-7-visible&quot;,&quot;active&quot;:&quot;desktop-7-active&quot;}" data-col-span-ws="4" data-col-span-sm="3" data-order-ws="13" data-order-sm="13" data-display-at="smws" class="gw-col desktop-row gwi-row gw-widget-instrument gw-auto-height celwidget csm-placement-id-d50a83e6-6d7e-481b-a7b6-231051b5d7aa desktop-gateway-btf_06d4e132-03c5-4d2f-9583-812f57879a34 pd_rd_wg-DuDJh pd_rd_w-5zZLs pd_rd_r-f3c3b933-a933-48da-995b-0197caae93b0"
        data-pf_rd_p="d50a83e6-6d7e-481b-a7b6-231051b5d7aa" data-pd_rd_wg="DuDJh" data-pd_rd_w="5zZLs" data-pd_rd_r="f3c3b933-a933-48da-995b-0197caae93b0" data-ref_="pd_gw_unk">
        <div class="cropped-image-link image-map shogun-widget card-lite ameyal-cropped-image-link" id="1Op9DSEk-lu6feYv5zbOzg">
            <script type="text/javascript">
                if (window.GWI && window.GWI.BillboardWidget) {
                    new window.GWI.BillboardWidget('1Op9DSEk-lu6feYv5zbOzg', ['https://images-eu.ssl-images-amazon.com/images/G/31/img20/Vernac13th/1500x150_V2_Eng._CB412582591_.jpg']);
                };
            </script>
            <div class="cropped-image-map-size" style="height:150px">
                <div class="cropped-image-map-center-alignment"><span style="display:inline-block"><a class="a-link-normal aok-inline-block" href="/b?node=22819678031"><img alt="Your language is live" src="https://images-eu.ssl-images-amazon.com/images/G/31/img20/Vernac13th/1500x150_V2_Eng._CB412582591_.jpg" height="150px" width="1500px" data-a-hires="https://images-eu.ssl-images-amazon.com/images/G/31/img20/Vernac13th/3000x300_V2_Eng_2x._CB412597113_.jpg"/></a><div class="a-section"></div></span></div>
            </div>
        </div>
        <script>
            (function(f) {
                f(P._namespace('gwiAutoInstVisible'));
            }(function(P) {
                if (window.GWI) {
                    GWI.Card.autoInstVisible('1Op9DSEk-lu6feYv5zbOzg');
                }
            }));
        </script>
    </div>
    <hr data-display-at="smws" data-order-sm="13" data-order-ws="13" class="card-flow-row-break"></hr>
    <script>
        P.when('GwGridLogic').execute('BTFGridInit', function(g) {
            window.uet && uet('cf', 'gwBTFGridInit', {
                wb: 1
            });
            window.uex && uex('ld', 'gwBTFGridInit', {
                wb: 1
            });
            g('#main-content').init();
        });
    </script>
    </div>
    </div>
    </div>
    <script type="text/javascript">
        P.when('shogunProductDB').register('gw-productdb', function(ShogunPDB) {
            var ht = "6EA15C3DC4355BAFC38AD4C9C673A4961272F399",
                mkId = "A21TJRUUN4KGV",
                l = "en-IN",
                params = {
                    "params": {
                        "l": l,
                        "mkId": mkId,
                        "swn": "productdb-ajax",
                        "ht": ht,
                        "sa": "{}"
                    },
                    "method": "get"
                };
            return ShogunPDB(params, '{"isDesktop":1,"isTablet":0,"isMobile":0}');
        });
    </script>

    <div class="a-popover-preload" id="a-popover-gw-asin-popover">
        <div id="gw-popover-wrapper">
            <div id="gw-asin-popover">
                <i id="gw-popover-close" class="gw-icon close-icon" title="Close Button"></i>
                <div class="content" data-bind="visible: !loading">

                    <a class="imgblock" aria-labelledby="quicklook-product-image" data-bind="href: url"><img id="quicklook-product-image" class="product-image" data-bind="attr: image, attr: flingData" /></a>
                    <div class="detailblock">
                        <div class="details">
                            <div class="byline a-color-tertiary" data-bind="text: byline"></div>
                            <a class="title" data-bind="text: title, trimText: 63, href: url"></a>
                            <div class="reviews">
                                <a data-bind="href: reviews.url">
                  <i class="a-icon a-icon-star-medium" data-bind="visible: reviews, css: reviews.auiStarClassMedium">
                    <span class="a-icon-alt" data-bind="text: reviews.hoverText"></span>
                  </i>
                  <span class="review-count a-color-tertiary" data-bind="text: reviews.numberOfRatings"></span>
                </a>
                            </div>
                            <div class="pricing">
                                <span class="price" data-bind="html: priceOnly, css: addToCart.priceClass"></span>
                                <i class="prime a-icon" data-bind="visible: isPrime, css: prime.auiIconClass" title="Prime"></i>
                                <div>
                                    <span class="ppu" data-bind="html: ppu"></span>
                                </div>
                            </div>
                            <span class="dp-link">
                <span class="a-button a-button-primary">
                  <span class="a-button-inner">
                    <a href="" class="details-button a-button-text" role="button" data-bind="href: url">See product details</a>
                  </span>
                            </span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="loading" aria-hidden="true" data-bind="visible: loading">
                    <i class="gw-spinner" role="presentation"></i>
                </div>
            </div>
            <div id="sims-section">
                <div class="sims-wrapper">
                    <div class="sims-loading" aria-hidden="true">
                        <i class="gw-loading-stripe" role="presentation"></i>
                    </div>
                    <div class="sims-header">
                        <span class="a-size-medium a-color-tertiary sims-header-text aok-align-center">Customers also bought </span>
                    </div>
                    <div class="sims-container">
                        <div class="sims-details"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <span id="gw-quick-look-btn" class="a-button a-button-base"><span class="a-button-inner"><input aria-hidden="true" class="a-button-input" type="submit" aria-labelledby="gw-quick-look-btn-announce"><span id="gw-quick-look-btn-announce" class="a-button-text" aria-hidden="true">Quick look</span></span>
    </span>

    <script>
        P.register('gw-popover-data', function() {
            return {
                popoverLabel: 'Product popover with similarities'
            };
        });
    </script>

    <div id="SponsoredLinksGateway">
        <script>
            function a9_sl_sessionCacheUpdateHandler($) {
                var browserWidth = $(window).width();
                var browserHeight = $(window).height();

                // Make a request to the session cache update handler in Gurupa
                $.post('/gp/product/sessionCacheUpdateHandler.html', {
                        'sessionCacheUpdateFlag': '1',
                        'pageType': 'Gateway',
                        'browserWidth': browserWidth,
                        'browserHeight': browserHeight,
                        'token': "fVoboEDsYMjWCjzTN8sCObLZif2/oaBmQ3S2N5KuRr8="
                    },
                    function(data) {}
                );
            }
            P.when('A', 'jQuery').execute(function(A, $) {
                A.on.load(function() {
                    a9_sl_sessionCacheUpdateHandler($);
                });
            });
        </script>
    </div>













    <script type="text/javascript">
        try {
            P.when('A').execute(function(A) {
                A.preload(["https://images-eu.ssl-images-amazon.com/images/G/31/authportal/common/css/ap-checkout-frn._CB485965898_.css", "https://images-eu.ssl-images-amazon.com/images/G/31/authportal/common/js/ap-checkout-frn._CB485979579_.js", "https://images-eu.ssl-images-amazon.com/images/G/31/javascripts/lib/jquery/jquery-1.2.6.min._CB485967157_.js", "https://images-eu.ssl-images-amazon.com/images/G/31/x-locale/common/login/fwcim._CB481730936_.js", "https://images-eu.ssl-images-amazon.com/images/G/31/orderApplication/css/authPortal/sign-in._CB485933349_.css", "https://images-eu.ssl-images-amazon.com/images/G/31/authportal/common/css/ap_global._CB485966226_.css", "https://images-eu.ssl-images-amazon.com/images/G/31/x-locale/common/errors-alerts/error-styles-ssl._CB485937033_.css", "https://images-eu.ssl-images-amazon.com/images/G/31/orderApplication/js/authPortal/sign-in._CB485922269_.js", "https://images-eu.ssl-images-amazon.com/images/G/31/authportal/flex/reduced-nav/ap-flex-reduced-nav-2.1._CB485967487_.css", "https://images-eu.ssl-images-amazon.com/images/G/31/authportal/common/images/amazon_logo_no-org_mid._CB485934474_.png", "https://images-eu.ssl-images-amazon.com/images/G/31/authportal/common/js/ap_global-1.1._CB485931403_.js", "https://images-eu.ssl-images-amazon.com/images/G/01/authportal/common/images/amznbtn-sprite03._CB485966112_.png", "https://images-eu.ssl-images-amazon.com/images/G/31/x-locale/common/buttons/sign-in-secure._CB485941626_.gif", "https://images-eu.ssl-images-amazon.com/images/G/31/authportal/flex/reduced-nav/ap-flex-reduced-nav-2.0._CB485968672_.js", "https://images-eu.ssl-images-amazon.com/images/G/31/x-locale/checkout/signin-banner._CB485941389_.gif"]);
            });
        } catch (e) {}
    </script>









    <script type="text/javascript">
        P.when('A').execute(function(A) {
            A.preload(["https://images-eu.ssl-images-amazon.com/images/G/31/gno/images/general/navAmazonLogoFooter._CB485941680_.gif", "https://images-eu.ssl-images-amazon.com/images/G/31/gno/sprites/nav-sprite-global-1x-hm-dsk-reorg._CB405936311_.png", "https://images-eu.ssl-images-amazon.com/images/G/31/x-locale/common/transparent-pixel._CB485934990_.gif", "https://images-eu.ssl-images-amazon.com/images/G/31/x-locale/cs/ya/images/shipment_large_lt._CB485924119_.gif", "https://images-eu.ssl-images-amazon.com/images/G/31/x-locale/cs/ya/images/new-link._CB485946435_.gif", "https://images-eu.ssl-images-amazon.com/images/G/31/x-locale/cs/help/images/spotlight/kindle-family-02b._CB485933573_.jpg", "https://images-eu.ssl-images-amazon.com/images/G/31/x-locale/cs/orders/images/acorn._CB485934538_.gif", "https://images-eu.ssl-images-amazon.com/images/G/31/x-locale/cs/orders/images/btn-close._CB485934028_.gif", "https://images-eu.ssl-images-amazon.com/images/G/31/x-locale/cs/orders/images/amazon-gcs-100._CB485941596_.gif", "https://images-eu.ssl-images-amazon.com/images/G/31/x-locale/cs/orders/images/amazon-gc-100._CB485941848_.gif", "https://images-eu.ssl-images-amazon.com/images/G/31/x-locale/communities/social/snwicons_v2._CB478838660_.png", "https://images-eu.ssl-images-amazon.com/images/G/31/x-locale/cs/projects/text-trace/texttrace_typ._CB485919351_.js", "https://images-eu.ssl-images-amazon.com/images/G/01/x-locale/cs/css/images/amznbtn-sprite03._CB485966170_.png"], 0);
        });
    </script>


































    <script>
        (window.AmazonUIPageJS ? AmazonUIPageJS : P).when('A').execute(function(A) {
            if (A.preload) {
                A.preload('https://images-eu.ssl-images-amazon.com/images/I/61-6nKPKyWL._RC|11Y+5x+kkTL.js,51yKJKPJiDL.js,11-zXBZR6KL.js,11giXtZCwVL.js,01+z+uIeJ-L.js,01VRMV3FBdL.js,01O9dYORveL.js,21NNXfMitSL.js,11rRjDLdAVL.js,515wovvm75L.js,11AHlQhPRjL.js,11UNQpqeowL.js,11OREnu1epL.js,11KbZymw5ZL.js,21r53SJg7LL.js,0190vxtlzcL.js,51bbIMIQQwL.js,3109-RXWZcL.js,015c-6CIP9L.js,01ezj5Rkz1L.js,11VS-C+YWGL.js,31A7Rmyv5TL.js,01rpauTep4L.js,01Xe-NmDwsL.js_.js?AUIClients/AmazonUI&tbOQM7bq#309035-T1');
                A.preload('https://images-eu.ssl-images-amazon.com/images/I/11EIQ5IGqaL._RC|012LjolmrML.css,416tl9JcpyL.css,21qPwhPKAAL.css,01Vctty9pOL.css,017DsKjNQJL.css,01xH24p45SL.css,41EWOOlBJ9L.css,11TIuySqr6L.css,01ElnPiDxWL.css,11bGSgD5pDL.css,01Dm5eKVxwL.css,01IdKcBuAdL.css,01y-XAlI+2L.css,01ZfXnjPmmL.css,01oDR3IULNL.css,31q1y1irc5L.css,01XPHJk60-L.css,01R0k0yxPXL.css,21xVR0NtxzL.css,11gneA3MtJL.css,21fecG8pUzL.css,01RddH8vm-L.css,01CFUgsA-YL.css,21AmhU6t0sL.css,11zGrJZ9D2L.css,11tRp6+0HHL.css,11MrdqKlKnL.css,11oHt2HYxnL.css,01-fWz3sOQL.css,11ocrgKoE-L.css,11RKoGSb-gL.css,11g1xm90ZvL.css,01QrWuRrZ-L.css,21pIv-yKhaL.css,01Wiow6micL.css,01gAR5pB+IL.css,119dKrtBoVL.css,11Y05DTEL6L.css,01cbS3UK11L.css,21F85am0yFL.css,01giMEP+djL.css_.css?AUIClients/AmazonUI&NrwDpGHD#not-trident.322290-T2.322288-T1');
                A.preload('https://images-eu.ssl-images-amazon.com/images/I/31yoeTcupOL.js?AUIClients/AmazonUICalendar');
                A.preload('https://images-eu.ssl-images-amazon.com/images/I/11xqfyHx1TL._RC|11B3-fvRFzL.css_.css?AUIClients/AmazonUICalendar#not-trident');
                A.preload('https://images-eu.ssl-images-amazon.com/images/I/61XB0vKqqqL._RC|01XginIhPBL.js,01PQKs49DyL.js_.js?AUIClients/DetailPageDesktopImageBlockMetaAsset&EIhgIZq+#in.169593-T1.299993-T1');
                A.preload('https://images-eu.ssl-images-amazon.com/images/I/319AdHLMM7L._RC|71EA77kZwfL.js,21KJ58XxAlL.js,219O6ZmDMOL.js,31oAl8dJC2L.js,41+DnZtRZiL.js,41cPmvl+WGL.js,31qUdoxPE8L.js,31kDJ4yq3ML.js,318iw3j-82L.js,31KsOZVUjdL.js,019W6kk1gjL.js,31L0VoVNfML.js,01XEEGOr+kL.js,01hkseOXj6L.js,41YD13pEeXL.js,51+kpt7cxwL.js,01IC-gBKyYL.js,311A0yCIeJL.js,01iRN5bMQkL.js,51j6ZP-xjcL.js,01l88RoySLL.js,513rwTLXtkL.js,01j5DeZSMzL.js,31vbKbSn1EL.js,414RVqfRSrL.js,01PQKs49DyL.js,11Qx7X6CNHL.js,011a0jbAJkL.js,11NDr-RP7GL.js,21pSZajIKhL.js,011bX2ciJbL.js,21222B+rAzL.js,01gp3oqpb5L.js,31abTeO2myL.js,11CIaAZhucL.js,01zM73lDxwL.js,21ZbonpQxqL.js,21YblE14ZTL.js,01acYp41-1L.js,018ZxeiHuPL.js,011VhuFIPDL.js_.js?AUIClients/DetailPageDesktopDefaultMetaAsset_asset_segregation_TURBO_DESKTOP_C&7UKWhEDo#in.327990-T1.292695-C.312885-T1.337680-T1.327484-T1.316933-T1.317011-T1.315969-T1.231673-C.312317-T1.203192-T1.321653-C.183962-T1.310834-T1.332274-T1.154031-T3.227612-T1.224722-T1.169593-T1');
                A.preload('https://images-eu.ssl-images-amazon.com/images/I/41IYcMQCjlL._RC|01rdVnPkgmL.css,01KvCqKMBgL.css,11iwHtffX1L.css,01g2EoxOu-L.css,01zWxM9Vh0L.css,210Czw7BAgL.css,01iXxkJ+wuL.css,01Qji-D4YPL.css,31LtnG95FPL.css,015FNYa5WbL.css,21jUQU6VhYL.css,21pOUFVE5LL.css,31gnaffJaOL.css,114FIgEwAuL.css,01TrKJuj6JL.css,0171-O+nBwL.css,2170Ev7c3lL.css,01qwEWNuxuL.css,21qxDmhZV3L.css,11XXguyjjZL.css,31Fi1omcaBL.css,01+ah2okB5L.css,21GWIPOCN2L.css,01AT3O0C6cL.css_.css?AUIClients/DetailPageDesktopDefaultMetaAsset_asset_segregation_TURBO_DESKTOP_C&nmsQ5cFN#in.263677-T2.203192-T1.169593-T1');
                A.preload('https://images-eu.ssl-images-amazon.com/images/I/01t2esUHF0L._RC|01JzE3-DfLL.js,013aNY++XJL.js,016QFWAAdML.js,01j1Y1PFCRL.js,01Fy9QPljuL.js,01Re6AqkVUL.js,01YivelYW5L.js,31UjTApGOPL.js,21E2aIDj6DL.js,01TQyo0bnIL.js,11mlkYc5NML.js,11+dypSOVUL.js,01g2etah0NL.js,01WNBm1NhqL.js,41Dds42UuNL.js,41d8dIFVBYL.js,01I+ls4AqQL.js,11oGaoYgbdL.js,01OtvpwikQL.js,013eoEBTVUL.js,018ZxeiHuPL.js,011VhuFIPDL.js_.js?AUIClients/DetailPageDesktopDefaultStableMetaAsset&5LlmWABm#language-en.in.195406-T1.184660-C');
                A.preload('https://images-eu.ssl-images-amazon.com/images/I/011uHgmxBfL._RC|014Z+MbaRaL.css,015NcZpqjOL.css,01OhA16ND1L.css,31MkQHV3gaL.css,01NW8VTUeVL.css,315GMAwkLiL.css,310Pxdk2Y+L.css,11kmwdXfY5L.css,01vUDet4b1L.css,01ZGRKhIG-L.css,31Chd+iJTyL.css,01FtAuFRr3L.css,21ZjVyQPjML.css_.css?AUIClients/DetailPageDesktopDefaultStableMetaAsset#in');
                A.preload('https://images-eu.ssl-images-amazon.com/images/I/01I-WWW2CuL._RC|21u1PnPEsML.js,318rs4piGPL.js,11ISJZDdTuL.js,01jEqq6I0UL.js,61ybuMymm8L.js,0193uyIciNL.js,41fW1gpnNZL.js,410lRovX8FL.js,11p0nLfNCcL.js,01s9HEfbt3L.js,11iHZuQapKL.js,015TRQC5i+L.js,614laSAkMiL.js,01aZ2oaQKcL.js,4123BTTtUrL.js,11nOzlnr6+L.js,21NDIsf0a1L.js,61h+vCQjyvL.js,115eJenyunL.js,21v7Os12mhL.js,11XkXxlfwyL.js,51RWvQQO4ML.js,11DbyV7EqEL.js,015o6sfRHyL.js,014kCoIHgIL.js,01sSKGYWoFL.js,01UM836rs+L.js,01fffmaF5CL.js,41T696fF78L.js,11Xxd-w8V7L.js,31WJiOUHd7L.js,01q-Ep-UrEL.js,01IQoRXvpnL.js,01lcH4zcTaL.js,31-yxBnv3nL.js,41g1TctCA1L.js_.js?AUIClients/DetailPageDesktopHardlinesOnlyMetaAsset&yaUaTZ84#in.312887-T1.140997-T1.188581-T1.238103-T1.326363-T1.317281-T1.172346-T1.109378-T1.142088-C');
                A.preload('https://images-eu.ssl-images-amazon.com/images/I/01N8OOpUZPL._RC|0121zKjk26L.css,11xRy3bSkOL.css,01QUs5FVXoL.css,41vOQb1k0LL.css,01rgQ3jqo7L.css,210Ck12w4aL.css,312UeeukJML.css,11X8K4AolpL.css,21cgGInnQ9L.css,21QKJp6qQ9L.css,41jr-zBb27L.css,01lHbKl4MxL.css,41iQkzH7CdL.css,01FlII1u-ZL.css,31dTK1hHb6L.css,31v5j8kQd3L.css,01f31VNCowL.css,31HQ7uCUltL.css,01TZ9fpDSSL.css,01IY99sMV0L.css,01ZcdNKBOIL.css,01Awgj15UfL.css,01adN84djtL.css,01+KRP2j52L.css,01lHBbKIwtL.css,01wkbZw3FtL.css,41O+R2F68QL.css_.css?AUIClients/DetailPageDesktopHardlinesOnlyMetaAsset&GESTGb5O#in.188581-T1.129737-C.329581-T1');
                A.preload('https://images-eu.ssl-images-amazon.com/images/I/010lzJSwDmL._RC|511Xrn3O2bL.js,01wYyhYnnFL.js,01jqyAujTwL.js,31+0pACITzL.js,01RQtSMdG+L.js,41M+SI4KOnL.js,01rg6Ce9FhL.js,019rf9QbAkL.js,01WkIloYPkL.js,21iF5i0e9FL.js,01K4O5nHboL.js,112my4mxQ6L.js_.js?AUIClients/NonUSHardlinesDesktopMetaAsset&VjVNoXM2#in.289882-T1.262350-T1.275434-T1.277184-T1');
                A.preload('https://images-eu.ssl-images-amazon.com/images/I/012ofCl9AfL._RC|01bkkYjxP7L.css,01CslPlvtoL.css,61NWx6dKkUL.css,11bRdV2t20L.css,518KmQy9QVL.css_.css?AUIClients/NonUSHardlinesDesktopMetaAsset&KaxunxVO#in.172402-T1.317114-T1.94145-T1');
                A.preload('https://images-eu.ssl-images-amazon.com/images/I/21u1PnPEsML._RC|31JUr01gz+L.js,01I-WWW2CuL.js,01AdYLY9rHL.js,01IOMCsVFCL.js,01HmcbFsnFL.js,31sG+M5QN5L.js,01OrQ5AXqsL.js,11DGcrZsUwL.js,01ZF+ovNflL.js,21+6n1I3-GL.js,01NKGaW0w5L.js,01rEmdLLpxL.js,61qZIkl2N+L.js_.js?AUIClients/DetailPageDesktopSoftlinesOnlyMetaAsset&DfKKznkU#in.109378-T1');
                A.preload('https://images-eu.ssl-images-amazon.com/images/I/01N8OOpUZPL._RC|11iz0Z3rJ7L.css,01lYrTXt4xL.css,0121zKjk26L.css,01QLwk8mu6L.css,018mGORJ7tL.css,21VgVEzltcL.css_.css?AUIClients/DetailPageDesktopSoftlinesOnlyMetaAsset&DfKKznkU#109378-T1');
                A.preload('https://images-eu.ssl-images-amazon.com/images/I/010lzJSwDmL._RC|01lcH4zcTaL.js,01wYyhYnnFL.js,01jqyAujTwL.js,31+0pACITzL.js,01rg6Ce9FhL.js,019rf9QbAkL.js,21iF5i0e9FL.js,01K4O5nHboL.js,112my4mxQ6L.js,01S8y9NkxoL.js,11XQDILn5QL.js_.js?AUIClients/NonUSSoftlinesDesktopMetaAsset&/udXIEy2#in.275434-T1.202285-C');
                A.preload('https://images-eu.ssl-images-amazon.com/images/I/01wkbZw3FtL._RC|01bkkYjxP7L.css,01wL78bNyyL.css,61NWx6dKkUL.css,11bRdV2t20L.css,41j52RQ1GmL.css_.css?AUIClients/NonUSSoftlinesDesktopMetaAsset&EQm8Zb+j#in.172402-T1.94145-T1.202285-C');
                A.preload('https://images-eu.ssl-images-amazon.com/images/I/21E2aIDj6DL._RC|318iw3j-82L.js,31KsOZVUjdL.js,01g2etah0NL.js,01Re6AqkVUL.js,21KJ58XxAlL.js,219O6ZmDMOL.js,31oAl8dJC2L.js,41+DnZtRZiL.js,319AdHLMM7L.js,01Ng0K110HL.js,21pWDYha7OL.js,31vMFUg376L.js,01TQyo0bnIL.js,11mlkYc5NML.js,71EA77kZwfL.js,01WNBm1NhqL.js,41Dds42UuNL.js,31UjTApGOPL.js,21iF5i0e9FL.js,01K4O5nHboL.js,112my4mxQ6L.js,01wYyhYnnFL.js,01Fy9QPljuL.js,41d8dIFVBYL.js,11oGaoYgbdL.js,01JzE3-DfLL.js,11+dypSOVUL.js,01jqyAujTwL.js,31+0pACITzL.js,01OtvpwikQL.js,31qUdoxPE8L.js,11nOzlnr6+L.js,41YD13pEeXL.js,11p0nLfNCcL.js,11iHZuQapKL.js,01t2esUHF0L.js,21ZbonpQxqL.js,21YblE14ZTL.js,61qZIkl2N+L.js,013eoEBTVUL.js,016QFWAAdML.js,51+kpt7cxwL.js,019W6kk1gjL.js,01hkseOXj6L.js,311A0yCIeJL.js,01iRN5bMQkL.js,51j6ZP-xjcL.js,010lzJSwDmL.js,01IC-gBKyYL.js,01PQKs49DyL.js,11NDr-RP7GL.js,21pSZajIKhL.js,01l88RoySLL.js,513rwTLXtkL.js,01j5DeZSMzL.js,31vbKbSn1EL.js,414RVqfRSrL.js,013aNY++XJL.js,11Qx7X6CNHL.js,011a0jbAJkL.js,018ZxeiHuPL.js,011VhuFIPDL.js_.js?AUIClients/MediaDetailPageMetaAsset&HbThqOhf#language-en.in.320228-T1.292695-C.312885-T1.195406-T1.337680-T1.327484-T1.315969-T1.321653-C.183962-T1.310834-T1.184660-C.332274-T1.109378-T1.154031-T3.227612-T1.224722-T1.169593-T1');
                A.preload('https://images-eu.ssl-images-amazon.com/images/I/61NWx6dKkUL._RC|41oBo6BGxXL.css,315GMAwkLiL.css,01Qji-D4YPL.css,015NcZpqjOL.css,01rdVnPkgmL.css,01KvCqKMBgL.css,11iwHtffX1L.css,41IYcMQCjlL.css,21fuktRHFKL.css,21DFVmWtz3L.css,310Pxdk2Y+L.css,01vUDet4b1L.css,01ZGRKhIG-L.css,31MkQHV3gaL.css,31Chd+iJTyL.css,01FtAuFRr3L.css,11kmwdXfY5L.css,01bkkYjxP7L.css,01NW8VTUeVL.css,01zWxM9Vh0L.css,011uHgmxBfL.css,01FlII1u-ZL.css,21jUQU6VhYL.css,312UeeukJML.css,21cgGInnQ9L.css,21GWIPOCN2L.css,21VgVEzltcL.css,21ZjVyQPjML.css,21pOUFVE5LL.css,01iXxkJ+wuL.css,31gnaffJaOL.css,018CevqcjhL.css,114FIgEwAuL.css,01TrKJuj6JL.css,0171-O+nBwL.css,2170Ev7c3lL.css_.css?AUIClients/MediaDetailPageMetaAsset&upO1Asvq#in.94145-T1.109378-T1.169593-T1');
                A.preload('https://images-eu.ssl-images-amazon.com/images/I/41T696fF78L._RC|31IE3jRc55L.js,51L-po+0SJL.js,01wFfxST+ZL.js,018-nGQj6aL.js,11Xxd-w8V7L.js,31WJiOUHd7L.js,611swOVVwPL.js,216mhluQMRL.js,31NARet8tJL.js,711mY4PWbiL.js,21KJ58XxAlL.js,219O6ZmDMOL.js,31oAl8dJC2L.js,41+DnZtRZiL.js,319AdHLMM7L.js,71EA77kZwfL.js,318iw3j-82L.js,31KsOZVUjdL.js,21E2aIDj6DL.js,01Re6AqkVUL.js,41d8dIFVBYL.js,01t2esUHF0L.js,01JzE3-DfLL.js,01WNBm1NhqL.js,41Dds42UuNL.js,01TQyo0bnIL.js,11mlkYc5NML.js,61h+vCQjyvL.js,01GhKb2usNL.js,11+dypSOVUL.js,013eoEBTVUL.js,016QFWAAdML.js,31qUdoxPE8L.js,11XkXxlfwyL.js,014kCoIHgIL.js,21ZbonpQxqL.js,21YblE14ZTL.js,41YD13pEeXL.js,01l88RoySLL.js,513rwTLXtkL.js,01j5DeZSMzL.js,31vbKbSn1EL.js,414RVqfRSrL.js,011VhuFIPDL.js_.js?AUIClients/AmazonDevicesDetailPageMetaAssets&5PCmwFSm#language-en.in.302352-T1.312885-T1.312887-T1.140997-T1.195406-T1.327966-T1.337680-T1.315969-T1.238103-T1.183962-T1.310834-T1.326363-T1.304598-T1.317281-T1.184660-C.332274-T1.172346-T1.154031-T3.227612-T1.142088-C');
                A.preload('https://images-eu.ssl-images-amazon.com/images/I/21vjH1nf-eL._RC|01G75A3-R5L.css,01Z3lE5tzaL.css,01ng-wbWRnL.css,01+KRP2j52L.css,31V1GJtj85L.css,31Iyqx-VDnL.css,31oKeeTQwzL.css,61NWx6dKkUL.css,11bRdV2t20L.css,518KmQy9QVL.css,01rdVnPkgmL.css,01KvCqKMBgL.css,11iwHtffX1L.css,41IYcMQCjlL.css,01Qji-D4YPL.css,315GMAwkLiL.css,015NcZpqjOL.css,31Chd+iJTyL.css,01vUDet4b1L.css,01ZGRKhIG-L.css,310Pxdk2Y+L.css,31v5j8kQd3L.css,01wsp46SQTL.css,11kmwdXfY5L.css,011uHgmxBfL.css,21ZjVyQPjML.css,01zWxM9Vh0L.css,31HQ7uCUltL.css,21GWIPOCN2L.css,21jUQU6VhYL.css,114FIgEwAuL.css,01TrKJuj6JL.css,0171-O+nBwL.css,2170Ev7c3lL.css_.css?AUIClients/AmazonDevicesDetailPageMetaAssets&KaxunxVO#in.172402-T1.317114-T1.94145-T1');
                A.preload('https://images-eu.ssl-images-amazon.com/images/I/611swOVVwPL.js?AUIClients/DetailPageAllOffersDisplayAssets&y4nYbSMJ#language-en.302352-T1.327966-T1.337680-T1');
                A.preload('https://images-eu.ssl-images-amazon.com/images/I/31V1GJtj85L.css?AUIClients/DetailPageAllOffersDisplayAssets#in');
                A.preload('https://images-eu.ssl-images-amazon.com/images/I/91qJlzOcBNL.js?AUIClients/GestaltDetailPageDesktopMetaAsset');
                A.preload('https://images-eu.ssl-images-amazon.com/images/I/61qZIkl2N%2BL.js?AUIClients/DetailPageSnSAssets&DfKKznkU#in.109378-T1');
                A.preload('https://images-eu.ssl-images-amazon.com/images/I/21VgVEzltcL.css?AUIClients/DetailPageSnSAssets&DfKKznkU#109378-T1');
            }
        });
    </script>


















    <script type="text/javascript">
        P.when('A').execute(function(A) {
            A.preload(["https://images-eu.ssl-images-amazon.com/images/G/31/common/sprites/sprite-communities._V138349855_.png", "https://images-eu.ssl-images-amazon.com/images/G/31/common/sprites/sprite-site-wide-2._V361508071_.png", "https://images-eu.ssl-images-amazon.com/images/G/01/browser-scripts/fruitCSS/en_IN-secure-combined-2105474903._CB485929141_.css", "https://images-eu.ssl-images-amazon.com/images/G/01/browser-scripts/dpSpritesCSS/en_IN-secure-combined-1941710172._CB485919677_.css"]);
        });
    </script>















    </div>
    <div class="a-section"></div>
    <!-- sp:end-feature:host-btf -->
    <!-- sp:feature:aui-preload -->
    <!-- sp:feature:nav-footer -->


































    <!-- footer pilu -->























    <div id="rhf" class="copilot-secure-display" style="clear:both" role="complementary" aria-label="Your recently viewed items and featured recommendations">

        <div class="rhf-frame" style="display:none">
            <br />
            <div id="rhf-container">






                <div class='rhf-loading-outer'>
                    <table class='rhf-loading-middle'>
                        <tr>
                            <td class='rhf-loading-inner'>
                                <img src="https://images-eu.ssl-images-amazon.com/images/G/31/personalization/ybh/loading-4x-gray._CB485916689_.gif" />
                            </td>
                        </tr>
                    </table>
                </div>








                <div id="rhf-context">
                    <script type='application/json'>
                        {
                            "rhfHandlerParams": {
                                "disableRhfWeblab": "",
                                "search": "",
                                "rhfAsins": "",
                                "noP13NCache": "",
                                "weblabTriggers": "",
                                "auiDebug": "",
                                "keywords": "",
                                "k": "",
                                "rviAsins": "",
                                "url": "",
                                "parentSession": "257-8400121-7204450",
                                "rhfState": "",
                                "contextMetadataOverride": "",
                                "currentSubPageType": null,
                                "field-keywords": "",
                                "relatedRequestId": "WMZVJ0QZ56QFCB33E37K",
                                "recsAsins": "",
                                "rhfHorizonteWeblab": "",
                                "excludeASIN": "",
                                "auditEnabled": "",
                                "customerId": "",
                                "testRecsFailure": "",
                                "previewCampaigns": "",
                                "forceWidgets": "",
                                "currentPageType": "Gateway",
                                "stringDebug": ""
                            },
                            "subPageType": null,
                            "requestId": "WMZVJ0QZ56QFCB33E37K",
                            "sessionId": "257-8400121-7204450",
                            "customerId": "",
                            "pageType": "Gateway",
                            "ybhHandlerParams": {
                                "relatedRequestId": "WMZVJ0QZ56QFCB33E37K",
                                "currentPageType": "Gateway",
                                "parentSession": "257-8400121-7204450"
                            }
                        }
                    </script>
                </div>

            </div><noscript>

<div class="rhf-border">

        <div class="rhf-header">
        Your recently viewed items and featured recommendations
    </div>

<div class="rhf-footer">
    <div class="rvi-container">

<div class="ybh-edit">
    <div class="ybh-edit-arrow"> &#8250; </div>
    <div class="ybh-edit-link"><a href="/gp/yourstore/pym/ref=pd_pyml_rhf">View or edit your browsing history</a></div>
</div>
        <span class="no-rvi-message">After viewing product detail pages, look here to find an easy way to navigate back to pages you are interested in.</span>
    </div>
</div>
</div>
</noscript>
            <div id="rhf-error" style="display:none;">

                <div class="rhf-border">

                    <div class="rhf-header">
                        Your recently viewed items and featured recommendations
                    </div>

                    <div class="rhf-footer">
                        <div class="rvi-container">

                            <div class="ybh-edit">
                                <div class="ybh-edit-arrow"> &#8250; </div>
                                <div class="ybh-edit-link"><a href="/gp/yourstore/pym/ref=pd_pyml_rhf">View or edit your browsing history</a></div>
                            </div>
                            <span class="no-rvi-message">After viewing product detail pages, look here to find an easy way to navigate back to pages you are interested in.</span>
                        </div>
                    </div>
                </div>
            </div>
            <br />
        </div>
    </div>

    <div class='navLeftFooter nav-sprite-v1' id='navFooter'>
        <a href="#nav-top" id="navBackToTop">
            <div class="navFooterBackToTop"><span class="navFooterBackToTopText">Back to top</span></div>
        </a>

        <div class="navFooterVerticalColumn navAccessibility" role="presentation">
            <div class="navFooterVerticalRow navAccessibility" style="display: table-row;">
                <div class="navFooterLinkCol navAccessibility">
                    <div class="navFooterColHead">Get to Know Us</div>
                    <ul>
                        <li class='nav_first'><a href='https://www.aboutamazon.in/?utm_source=gateway&amp;utm_medium=footer' class='nav_a'>About Us</a></li>
                        <li><a href='https://amazon.jobs' class='nav_a'>Careers</a></li>
                        <li><a href='https://press.aboutamazon.in/?utm_source=gateway&amp;utm_medium=footer' class='nav_a'>Press Releases</a></li>
                        <li><a href='/b?ie=UTF8&amp;node=8872558031&amp;ref_=footer_cares' class='nav_a'>Amazon Cares</a></li>
                        <li class='nav_last'><a href='/Online-Charity/b?ie=UTF8&amp;node=4594605031&amp;ref_=footer_smile' class='nav_a'>Gift a Smile</a></li>
                    </ul>
                </div>
                <div class="navFooterColSpacerInner navAccessibility"></div>
                <div class="navFooterLinkCol navAccessibility">
                    <div class="navFooterColHead">Connect with Us</div>
                    <ul>
                        <li class='nav_first'><a href='http://www.amazon.in/gp/redirect.html/ref=footer_fb?location=http://www.facebook.com/AmazonIN&amp;token=2075D5EAC7BB214089728E2183FD391706D41E94&amp;6' class='nav_a'>Facebook</a></li>
                        <li><a href='http://www.amazon.in/gp/redirect.html/ref=footer_twitter?location=http://twitter.com/AmazonIN&amp;token=A309DFBFCB1E37A808FF531934855DC817F130B6&amp;6' class='nav_a'>Twitter</a></li>
                        <li class='nav_last'><a href='http://www.amazon.in/gp/redirect.html?location=https://www.instagram.com/amazondotin&amp;token=264882C912E9D005CB1D9B61F12E125D5DF9BFC7&amp;source=standards' class='nav_a'>Instagram</a></li>
                    </ul>
                </div>
                <div class="navFooterColSpacerInner navAccessibility"></div>
                <div class="navFooterLinkCol navAccessibility">
                    <div class="navFooterColHead">Make Money with Us</div>
                    <ul>
                        <li class='nav_first'><a href='/b/?_encoding=UTF8&amp;ld=AZINSOANavDesktopFooter&amp;node=2838698031&amp;ref_=nav_footer_sell' class='nav_a'>Sell on Amazon</a></li>
                        <li><a href='https://accelerator.amazon.in/?ref_=map_1_b2b_GW_FT' class='nav_a'>Sell under Amazon Accelerator</a></li>
                        <li><a href='https://sell.amazon.in/grow-your-business/amazon-global-selling.htmll?ld=AZIN_Footer_V1&amp;ref=AZIN_Footer_V1' class='nav_a'>Amazon Global Selling</a></li>
                        <li><a href='/gp/redirect.html?_encoding=UTF8&amp;location=https%3A%2F%2Faffiliate-program.amazon.in%2F%3Fref_%3Dfooter_assoc%26utm_campaign%3Dassocshowcase%26utm_medium%3Dfooter%26utm_source%3DGW&amp;source=standards&amp;token=4D7ADB5A094B04230C576B761FB8EC3D657E2376'
                                class='nav_a'>Become an Affiliate</a></li>
                        <li><a href='http://services.amazon.in/services/fulfilment-by-amazon/benefits.html/ref=az_footer_fba?ld=AWRGINFBAfooter' class='nav_a'>Fulfilment by Amazon</a></li>
                        <li><a href='https://advertising.amazon.in/?ref=Amz.in' class='nav_a'>Advertise Your Products</a></li>
                        <li><a href='https://www.amazonpay.in/merchant' class='nav_a'>Amazon Pay on Merchants</a></li>
                        <li class='nav_last'><a href='https://www.amazon.in/b/?node=16183878031&amp;ref_=nav_footer_oneamazon&amp;ld=AZINONEAMAZONNavDesktopFooter' class='nav_a'>See More Make Money with Us</a></li>
                    </ul>
                </div>
                <div class="navFooterColSpacerInner navAccessibility"></div>
                <div class="navFooterLinkCol navAccessibility">
                    <div class="navFooterColHead">Let Us Help You</div>
                    <ul>
                        <li class='nav_first'><a href='/gp/help/customer/display.html?ie=UTF8&amp;nodeId=GDFU3JS5AL6SYHRD&amp;ref_=footer_covid' class='nav_a'>COVID-19 and Amazon</a></li>
                        <li><a href='/gp/css/homepage.html?ie=UTF8&amp;ref_=footer_ya' class='nav_a'>Your Account</a></li>
                        <li><a href='/gp/css/returns/homepage.html?ie=UTF8&amp;ref_=footer_hy_f_4' class='nav_a'>Returns Centre</a></li>
                        <li><a href='/gp/help/customer/display.html?ie=UTF8&amp;nodeId=201083470&amp;ref_=footer_swc' class='nav_a'>100% Purchase Protection</a></li>
                        <li><a href='/b?ie=UTF8&amp;node=6967393031&amp;ref_=footer_mobapp' class='nav_a'>Amazon App Download</a></li>
                        <li><a href='/aa/ref=footer_assistant_download_copy?bitCampaignCode=i0003' class='nav_a'>Amazon Assistant Download</a></li>
                        <li class='nav_last'><a href='/gp/help/customer/display.html?ie=UTF8&amp;nodeId=200507590&amp;ref_=footer_gw_m_b_he' class='nav_a'>Help</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="nav-footer-line"></div>

        <div class="navFooterLine navFooterLinkLine navFooterPadItemLine"><span><div class="navFooterLine navFooterLogoLine"><a href="/ref=footer_logo"><div class="nav-logo-base nav-sprite"></div></a></div>
</span>
            <ul></ul><span class="icp-container-desktop"><div class="navFooterLine">












  









<style type="text/css">
  #icp-touch-link-language { display: none; }
</style>

<a href="/gp/customer-preferences/select-language/ref=footer_lang?ie=UTF8&preferencesReturnUrl=%2F" class="icp-button" id="icp-touch-link-language">
  <div class="icp-nav-globe-img-2 icp-button-globe-2"></div
  ><span class="icp-color-base">English</span
  ><span class="nav-arrow icp-up-down-arrow"></span
  ><span class="aok-hidden" style="display:none">Choose a language for shopping.</span>
            </a>










            <style type="text/css">
                #icp-touch-link-country {
                    display: none;
                }
            </style>





        </div>
        </span>
        <ul></ul>
    </div>

    <div class="navFooterLine navFooterLinkLine navFooterPadItemLine ">
        <ul>
            <li class='nav_first'><a href='http://www.amazon.com.au/ref=footer_au' class='nav_a'>Australia</a></li>
            <li><a href='http://www.amazon.com.br/ref=footer_br' class='nav_a'>Brazil</a></li>
            <li><a href='http://www.amazon.ca/ref=footer_ca' class='nav_a'>Canada</a></li>
            <li><a href='http://www.amazon.cn/ref=footer_cn' class='nav_a'>China</a></li>
            <li><a href='http://www.amazon.fr/ref=footer_fr' class='nav_a'>France</a></li>
            <li><a href='http://www.amazon.de/ref=footer_de' class='nav_a'>Germany</a></li>
            <li><a href='http://www.amazon.it/ref=footer_it' class='nav_a'>Italy</a></li>
            <li><a href='http://www.amazon.co.jp/ref=footer_jp' class='nav_a'>Japan</a></li>
            <li><a href='http://www.amazon.com.mx/ref=footer_mx' class='nav_a'>Mexico</a></li>
            <li><a href='http://www.amazon.nl/ref=footer_nl' class='nav_a'>Netherlands</a></li>
            <li><a href='http://www.amazon.sg/ref=footer_sg' class='nav_a'>Singapore</a></li>
            <li><a href='http://www.amazon.es/ref=footer_es' class='nav_a'>Spain</a></li>
            <li><a href='http://www.amazon.ae/ref=footer_ae' class='nav_a'>United Arab Emirates</a></li>
            <li><a href='http://www.amazon.co.uk/ref=footer_uk' class='nav_a'>United Kingdom</a></li>
            <li class='nav_last'><a href='http://www.amazon.com/ref=footer_us' class='nav_a'>United States</a></li>
        </ul>
    </div>

    <div class="navFooterLine navFooterLinkLine navFooterDescLine">
        <table class="navFooterMoreOnAmazon" cellspacing="0">
            <tr>
                <td class="navFooterDescItem"><a href='https://www.abebooks.com/' class='nav_a'>AbeBooks<br/> <span class="navFooterDescText">Books, art<br/> & collectibles</span></a></td>
                <td class="navFooterDescSpacer" style="width: 4%"></td>
                <td class="navFooterDescItem"><a href='https://aws.amazon.com/what-is-cloud-computing/?sc_channel=EL&amp;sc_campaign=IN_amazonfooter' class='nav_a'>Amazon Web Services<br/> <span class="navFooterDescText">Scalable Cloud<br/> Computing Services</span></a></td>
                <td class="navFooterDescSpacer" style="width: 4%"></td>
                <td class="navFooterDescItem"><a href='https://www.audible.in/' class='nav_a'>Audible<br/> <span class="navFooterDescText">Download<br/> Audio Books</span></a></td>
                <td class="navFooterDescSpacer" style="width: 4%"></td>
                <td class="navFooterDescItem"><a href='https://www.dpreview.com/' class='nav_a'>DPReview<br/> <span class="navFooterDescText">Digital<br/> Photography</span></a></td>
                <td class="navFooterDescSpacer" style="width: 4%"></td>
                <td class="navFooterDescItem"><a href='https://www.imdb.com/' class='nav_a'>IMDb<br/> <span class="navFooterDescText">Movies, TV<br/> & Celebrities</span></a></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td class="navFooterDescItem"><a href='https://www.shopbop.com/' class='nav_a'>Shopbop<br/> <span class="navFooterDescText">Designer<br/> Fashion Brands</span></a></td>
                <td class="navFooterDescSpacer" style="width: 4%"></td>
                <td class="navFooterDescItem"><a href='/business?ref=footer_aingw' class='nav_a'>   
Amazon Business<br/> <span class="navFooterDescText">Everything For<br/> Your Business</span></a></td>
                <td class="navFooterDescSpacer" style="width: 4%"></td>
                <td class="navFooterDescItem"><a href='/now?ref=footer_amznow' class='nav_a'>Prime Now<br/> <span class="navFooterDescText"> 2-Hour Delivery<br/> on Everyday Items</span></a></td>
                <td class="navFooterDescSpacer" style="width: 4%"></td>
                <td class="navFooterDescItem"><a href='/music/prime?ref=footer_apm' class='nav_a'>Amazon Prime Music<br/> <span class="navFooterDescText">70 million songs, ad-free</span></a></td>
                <td class="navFooterDescSpacer" style="width: 4%"></td>
                <td class="navFooterDescItem">&nbsp;</td>
            </tr>
        </table>
    </div>

    <div class="navFooterLine navFooterLinkLine navFooterPadItemLine navFooterCopyright">
        <ul>
            <li class='nav_first'><a href='/gp/help/customer/display.html?ie=UTF8&amp;nodeId=200545940&amp;ref_=footer_cou' class='nav_a'>Conditions of Use & Sale</a></li>
            <li><a href='/gp/help/customer/display.html?ie=UTF8&amp;nodeId=200534380&amp;ref_=footer_privacy' class='nav_a'>Privacy Notice</a></li>
            <li class='nav_last'><a href='/gp/help/customer/display.html?ie=UTF8&amp;nodeId=202075050&amp;ref_=footer_iba' class='nav_a'>Interest-Based Ads</a></li>
        </ul><span>?? 1996-2021, Amazon.com, Inc. or its affiliates</span>
        <ul></ul>
    </div>
    </div>
    <!-- whfh-0Z/lMUbTuKcUobCC1S4Wa0wO2vjzLHRnhy9vI5QDHOedpUkbGR2Dlw== rid-WMZVJ0QZ56QFCB33E37K -->










    <script>
        (window.AmazonUIPageJS ? AmazonUIPageJS : P).load.js('https://images-na.ssl-images-amazon.com/images/G/01/AUIClients/INRetargetingAsset-fe13df5df0c9265752c892a20feddfc5baaec718.secure.min._V2_.js?AUIClients/INRetargetingAsset');
    </script>


    <script>
        if (window.AmazonUIPageJS) {
            AmazonUIPageJS.when("inRetargeting").execute(function(pixel) {
                pixel.parse({
                    fireGooglePixel: false,
                    fireVizuryPixel: false,
                    isSignedIn: 0,
                    pageType: "Gateway",
                    isMobile: 0
                });
            });
        } else if (window.ueLogError) {
            ueLogError({
                attribution: 'AmazonFamilyMarketingTagsMason',
                message: 'Attempting to embed remarketing pixel, but AmazonUIPageJS is undefined'
            });
        }
    </script>
    <div id="sis_pixel_r2" aria-hidden="true" style="height:1px; position: absolute; left: -1000000px; top: -1000000px;"></div>
    <script>
        (function(a, b) {
            a.attachEvent ? a.attachEvent("onload", b) : a.addEventListener && a.addEventListener("load", b, !1)
        })(window, function() {
            setTimeout(function() {
                var el = document.getElementById("sis_pixel_r2");
                el && (el.innerHTML = '<iframe id="DAsis" src="//aax-eu.amazon-adsystem.com/s/iu3?d=amazon.in&slot=navFooter&a2=01019799799a6dd981336d4677c5c7e10d45bbaf9c3f529f7996a08d7f6c13424d36&old_oo=0&ts=1617520788500&s=AXAdq_mM6TEkGJoXa-XaoZV12q2k6fmHdGhpllZXWqRs&cb=1617520788500" width="1" height="1" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe>')
            }, 300)
        });
    </script>
    <!-- footer tilu -->

    <!-- sp:feature:amazon-pay-iframe -->
    <!-- sp:end-feature:amazon-pay-iframe -->
    <div id='be' style="display:none;visibility:hidden;">
        <form name='ue_backdetect' action="get"><input type="hidden" name='ue_back' value='1' /></form>


        <script type="text/javascript">
            window.ue_ibe = (window.ue_ibe || 0) + 1;
            if (window.ue_ibe === 1) {
                (function(e, c) {
                    function h(b, a) {
                        f.push([b, a])
                    }

                    function g(b, a) {
                        if (b) {
                            var c = e.head || e.getElementsByTagName("head")[0] || e.documentElement,
                                d = e.createElement("script");
                            d.async = "async";
                            d.src = b;
                            d.setAttribute("crossorigin", "anonymous");
                            a && a.onerror && (d.onerror = a.onerror);
                            a && a.onload && (d.onload = a.onload);
                            c.insertBefore(d, c.firstChild)
                        }
                    }

                    function k() {
                        ue.uels = g;
                        for (var b = 0; b < f.length; b++) {
                            var a = f[b];
                            g(a[0], a[1])
                        }
                        ue.deffered = 1
                    }
                    var f = [];
                    c.ue && (ue.uels = h, c.ue.attach && c.ue.attach("load", k))
                })(document, window);


                if (window.ue && window.ue.uels) {
                    var cel_widgets = [{
                        "c": "celwidget"
                    }, {
                        "s": "#nav-swmslot > div",
                        "id_gen": function(elem, index) {
                            return 'nav_sitewide_msg';
                        }
                    }];

                    ue.uels("https://images-eu.ssl-images-amazon.com/images/I/31YXrY93hfL.js");
                }
                var ue_mbl = ue_csm.ue.exec(function(e, a) {
                    function l(g) {
                        b = g || {};
                        a.AMZNPerformance = b;
                        b.transition = b.transition || {};
                        b.timing = b.timing || {};
                        if (a.csa) {
                            var c;
                            b.timing.transitionStart && (c = b.timing.transitionStart);
                            b.timing.processStart && (c = b.timing.processStart);
                            c && (csa("PageTiming")("mark", "nativeTransitionStart", c), csa("PageTiming")("mark", "transitionStart", c))
                        }
                        e.ue.exec(m, "csm-android-check")() && b.tags instanceof Array && (g = -1 != b.tags.indexOf("usesAppStartTime") || b.transition.type ? !b.transition.type && -1 <
                            b.tags.indexOf("usesAppStartTime") ? "warm-start" : void 0 : "view-transition", g && (b.transition.type = g));
                        "reload" === d._nt && e.ue_orct || "intrapage-transition" === d._nt ? a.performance && performance.timing && performance.timing.navigationStart ? b.timing.transitionStart = a.performance.timing.navigationStart : delete b.timing.transitionStart : "undefined" === typeof d._nt && a.performance && performance.timing && performance.timing.navigationStart && a.history && "function" === typeof a.History && "object" === typeof a.history && history.length &&
                            1 != history.length && (b.timing.transitionStart = a.performance.timing.navigationStart);
                        g = b.transition;
                        c = d._nt ? d._nt : void 0;
                        g.subType = c;
                        a.ue && a.ue.tag && a.ue.tag("has-AMZNPerformance");
                        d.isl && a.uex && uex("at", "csm-timing");
                        n()
                    }

                    function p(b) {
                        a.ue && a.ue.count && a.ue.count("csm-cordova-plugin-failed", 1)
                    }

                    function m() {
                        return a.cordova && a.cordova.platformId && "android" == a.cordova.platformId
                    }

                    function n() {
                        try {
                            P.register("AMZNPerformance", function() {
                                return b
                            })
                        } catch (a) {}
                    }

                    function h() {
                        if (!b) return "";
                        ue_mbl.cnt = null;
                        for (var a = b.timing, c = b.transition, a = ["mts", k(a.transitionStart), "mps", k(a.processStart), "mtt", c.type, "mtst", c.subType, "mtlt", c.launchType], c = "", d = 0; d < a.length; d += 2) {
                            var e = a[d],
                                f = a[d + 1];
                            "undefined" !== typeof f && (c += "&" + e + "=" + f)
                        }
                        return c
                    }

                    function k(a) {
                        if ("undefined" !== typeof a && "undefined" !== typeof f) return a - f
                    }

                    function q(a, c) {
                        b && (f = c, b.timing.transitionStart = a, b.transition.type = "view-transition", b.transition.subType = "ajax-transition", b.transition.launchType = "normal", ue_mbl.cnt = h)
                    }
                    var d = e.ue || {},
                        f = e.ue_t0,
                        b;
                    if (a.P && a.P.when && a.P.register) return 1 === a.ue_fnt && (f = a.aPageStart || e.ue_t0), a.P.when("CSMPlugin").execute(function(a) {
                        a.buildAMZNPerformance && a.buildAMZNPerformance({
                            successCallback: l,
                            failCallback: p
                        })
                    }), {
                        cnt: h,
                        ajax: q
                    }
                }, "mobile-timing")(ue_csm, window);

                (function(d) {
                    d._uess = function() {
                        var a = "";
                        screen && screen.width && screen.height && (a += "&sw=" + screen.width + "&sh=" + screen.height);
                        var b = function(a) {
                                var b = document.documentElement["client" + a];
                                return "CSS1Compat" === document.compatMode && b || document.body["client" + a] || b
                            },
                            c = b("Width"),
                            b = b("Height");
                        c && b && (a += "&vw=" + c + "&vh=" + b);
                        return a
                    }
                })(ue_csm);

                (function(a) {
                    var b = document.ue_backdetect;
                    b && b.ue_back && a.ue && (a.ue.bfini = b.ue_back.value);
                    a.uet && a.uet("be");
                    a.onLdEnd && (window.addEventListener ? window.addEventListener("load", a.onLdEnd, !1) : window.attachEvent && window.attachEvent("onload", a.onLdEnd));
                    a.ueh && a.ueh(0, window, "load", a.onLd, 1);
                    a.ue && a.ue.tag && (a.ue_furl ? (b = a.ue_furl.replace(/\./g, "-"), a.ue.tag(b)) : a.ue.tag("nofls"))
                })(ue_csm);

                (function(g, h) {
                    function d(a, d) {
                        var b = {};
                        if (!e || !f) try {
                            var c = h.sessionStorage;
                            c ? a && ("undefined" !== typeof d ? c.setItem(a, d) : b.val = c.getItem(a)) : f = 1
                        } catch (g) {
                            e = 1
                        }
                        e && (b.e = 1);
                        return b
                    }
                    var b = g.ue || {},
                        a = "",
                        f, e, c, a = d("csmtid");
                    f ? a = "NA" : a.e ? a = "ET" : (a = a.val, a || (a = b.oid || "NI", d("csmtid", a)), c = d(b.oid), c.e || (c.val = c.val || 0, d(b.oid, c.val + 1)), b.ssw = d);
                    b.tabid = a
                })(ue_csm, window);

                ue_csm.ue.exec(function(e, f) {
                    var a = e.ue || {},
                        b = a._wlo,
                        d;
                    if (a.ssw) {
                        d = a.ssw("CSM_previousURL").val;
                        var c = f.location,
                            b = b ? b : c && c.href ? c.href.split("#")[0] : void 0;
                        c = (b || "") === a.ssw("CSM_previousURL").val;
                        !c && b && a.ssw("CSM_previousURL", b);
                        d = c ? "reload" : d ? "intrapage-transition" : "first-view"
                    } else d = "unknown";
                    a._nt = d
                }, "NavTypeModule")(ue_csm, window);
                ue_csm.ue.exec(function(c, a) {
                    function g(a) {
                        a.run(function(e) {
                            d.tag("csm-feature-" + a.name + ":" + e);
                            d.isl && c.uex("at")
                        })
                    }
                    if (a.addEventListener)
                        for (var d = c.ue || {}, f = [{
                                name: "touch-enabled",
                                run: function(b) {
                                    var e = function() {
                                            a.removeEventListener("touchstart", c, !0);
                                            a.removeEventListener("mousemove", d, !0)
                                        },
                                        c = function() {
                                            b("true");
                                            e()
                                        },
                                        d = function() {
                                            b("false");
                                            e()
                                        };
                                    a.addEventListener("touchstart", c, !0);
                                    a.addEventListener("mousemove", d, !0)
                                }
                            }], b = 0; b < f.length; b++) g(f[b])
                }, "csm-features")(ue_csm, window);


                (function(b, c) {
                    var a = c.images;
                    a && a.length && b.ue.count("totalImages", a.length)
                })(ue_csm, document);
                (function(b) {
                    function c() {
                        var d = [];
                        a.log && a.log.isStub && a.log.replay(function(a) {
                            e(d, a)
                        });
                        a.clog && a.clog.isStub && a.clog.replay(function(a) {
                            e(d, a)
                        });
                        d.length && (a._flhs += 1, n(d), p(d))
                    }

                    function g() {
                        a.log && a.log.isStub && (a.onflush && a.onflush.replay && a.onflush.replay(function(a) {
                            a[0]()
                        }), a.onunload && a.onunload.replay && a.onunload.replay(function(a) {
                            a[0]()
                        }), c())
                    }

                    function e(d, b) {
                        var c = b[1],
                            f = b[0],
                            e = {};
                        a._lpn[c] = (a._lpn[c] || 0) + 1;
                        e[c] = f;
                        d.push(e)
                    }

                    function n(b) {
                        q && (a._lpn.csm = (a._lpn.csm || 0) + 1, b.push({
                            csm: {
                                k: "chk",
                                f: a._flhs,
                                l: a._lpn,
                                s: "inln"
                            }
                        }))
                    }

                    function p(a) {
                        if (h) a = k(a), b.navigator.sendBeacon(l, a);
                        else {
                            a = k(a);
                            var c = new b[f];
                            c.open("POST", l, !0);
                            c.setRequestHeader && c.setRequestHeader("Content-type", "text/plain");
                            c.send(a)
                        }
                    }

                    function k(a) {
                        return JSON.stringify({
                            rid: b.ue_id,
                            sid: b.ue_sid,
                            mid: b.ue_mid,
                            mkt: b.ue_mkt,
                            sn: b.ue_sn,
                            reqs: a
                        })
                    }
                    var f = "XMLHttpRequest",
                        q = 1 === b.ue_ddq,
                        a = b.ue,
                        r = b[f] && "withCredentials" in new b[f],
                        h = b.navigator && b.navigator.sendBeacon,
                        l = "//" + b.ue_furl + "/1/batch/1/OE/",
                        m = b.ue_fci_ft || 5E3;
                    a && (r || h) &&
                        (a._flhs = a._flhs || 0, a._lpn = a._lpn || {}, a.attach && (a.attach("beforeunload", g), a.attach("pagehide", g)), m && b.setTimeout(c, m), a._ffci = c)
                })(window);


                (function(k, c) {
                    function l(a, b) {
                        return a.filter(function(a) {
                            return a.initiatorType == b
                        })
                    }

                    function f(a, c) {
                        if (b.t[a]) {
                            var g = b.t[a] - b._t0,
                                e = c.filter(function(a) {
                                    return 0 !== a.responseEnd && m(a) < g
                                }),
                                f = l(e, "script"),
                                h = l(e, "link"),
                                k = l(e, "img"),
                                n = e.map(function(a) {
                                    return a.name.split("/")[2]
                                }).filter(function(a, b, c) {
                                    return a && c.lastIndexOf(a) == b
                                }),
                                q = e.filter(function(a) {
                                    return a.duration < p
                                }),
                                s = g - Math.max.apply(null, e.map(m)) < r | 0;
                            "af" == a && (b._afjs = f.length);
                            return a + ":" + [e[d], f[d], h[d], k[d], n[d], q[d], s].join("-")
                        }
                    }

                    function m(a) {
                        return a.responseEnd - (b._t0 - c.timing.navigationStart)
                    }

                    function n() {
                        var a = c[h]("resource"),
                            d = f("cf", a),
                            g = f("af", a),
                            a = f("ld", a);
                        delete b._rt;
                        b._ld = b.t.ld - b._t0;
                        b._art && b._art();
                        return [d, g, a].join("_")
                    }
                    var p = 20,
                        r = 50,
                        d = "length",
                        b = k.ue,
                        h = "getEntriesByType";
                    b._rre = m;
                    b._rt = c && c.timing && c[h] && n
                })(ue_csm, window.performance);


                (function(c, d) {
                    var b = c.ue,
                        a = d.navigator;
                    b && b.tag && a && (a = a.connection || a.mozConnection || a.webkitConnection) && a.type && b.tag("netInfo:" + a.type)
                })(ue_csm, window);


                (function(c, d) {
                    function h(a, b) {
                        for (var c = [], d = 0; d < a.length; d++) {
                            var e = a[d],
                                f = b.encode(e);
                            if (e[k]) {
                                var g = b.metaSep,
                                    e = e[k],
                                    l = b.metaPairSep,
                                    h = [],
                                    m = void 0;
                                for (m in e) e.hasOwnProperty(m) && h.push(m + "=" + e[m]);
                                e = h.join(l);
                                f += g + e
                            }
                            c.push(f)
                        }
                        return c.join(b.resourceSep)
                    }

                    function s(a) {
                        var b = a[k] = a[k] || {};
                        b[t] || (b[t] = c.ue_mid);
                        b[u] || (b[u] = c.ue_sid);
                        b[f] || (b[f] = c.ue_id);
                        b.csm = 1;
                        a = "//" + c.ue_furl + "/1/" + a[v] + "/1/OP/" + a[w] + "/" + a[x] + "/" + h([a], y);
                        if (n) try {
                            n.call(d[p], a)
                        } catch (g) {
                            c.ue.sbf = 1, (new Image).src = a
                        } else(new Image).src =
                            a
                    }

                    function q() {
                        g && g.isStub && g.replay(function(a, b, c) {
                            a = a[0];
                            b = a[k] = a[k] || {};
                            b[f] = b[f] || c;
                            s(a)
                        });
                        l.impression = s;
                        g = null
                    }
                    if (!(1 < c.ueinit)) {
                        var k = "metadata",
                            x = "impressionType",
                            v = "foresterChannel",
                            w = "programGroup",
                            t = "marketplaceId",
                            u = "session",
                            f = "requestId",
                            p = "navigator",
                            l = c.ue || {},
                            n = d[p] && d[p].sendBeacon,
                            r = function(a, b, c, d) {
                                return {
                                    encode: d,
                                    resourceSep: a,
                                    metaSep: b,
                                    metaPairSep: c
                                }
                            },
                            y = r("", "?", "&", function(a) {
                                return h(a.impressionData, z)
                            }),
                            z = r("/", ":", ",", function(a) {
                                return a.featureName + ":" + h(a.resources,
                                    A)
                            }),
                            A = r(",", "@", "|", function(a) {
                                return a.id
                            }),
                            g = l.impression;
                        n ? q() : (l.attach("load", q), l.attach("beforeunload", q));
                        try {
                            d.P && d.P.register && d.P.register("impression-client", function() {})
                        } catch (B) {
                            c.ueLogError(B, {
                                logLevel: "WARN"
                            })
                        }
                    }
                })(ue_csm, window);



                var ue_pty = "Gateway";

                var ue_spty = "desktop";

                var ue_pti = "desktop";


                var ue_adb = 4;
                var ue_adb_rtla = 1;
                ue_csm.ue.exec(function(y, a) {
                    function t() {
                        if (d && f) {
                            var a;
                            a: {
                                try {
                                    a = d.getItem(g);
                                    break a
                                } catch (c) {}
                                a = void 0
                            }
                            if (a) return b = a, !0
                        }
                        return !1
                    }

                    function u() {
                        if (a.fetch) fetch(m).then(function(a) {
                            if (!a.ok) throw Error(a.statusText);
                            return a.text ? a.text() : null
                        }).then(function(b) {
                            b ? (-1 < b.indexOf("window.ue_adb_chk = 1") && (a.ue_adb_chk = 1), n()) : h()
                        })["catch"](h);
                        else e.uels(m, {
                            onerror: h,
                            onload: n
                        })
                    }

                    function h() {
                        b = k;
                        l();
                        if (f) try {
                            d.setItem(g, b)
                        } catch (a) {}
                    }

                    function n() {
                        b = 1 === a.ue_adb_chk ? p : k;
                        l();
                        if (f) try {
                            d.setItem(g,
                                b)
                        } catch (c) {}
                    }

                    function q() {
                        a.ue_adb_rtla && c && 0 < c.ec && !1 === r && (c.elh = null, ueLogError({
                            m: "Hit Info",
                            fromOnError: 1
                        }, {
                            logLevel: "INFO",
                            adb: b
                        }), r = !0)
                    }

                    function l() {
                        e.tag(b);
                        e.isl && a.uex && uex("at", b);
                        s && s.updateCsmHit("adb", b);
                        c && 0 < c.ec ? q() : a.ue_adb_rtla && c && (c.elh = q)
                    }

                    function v() {
                        return b
                    }
                    if (a.ue_adb) {
                        a.ue_fadb = a.ue_fadb || 10;
                        var e = a.ue,
                            k = "adblk_yes",
                            p = "adblk_no",
                            m = "https://m.media-amazon.com/images/G/01/csm/showads.v2.js?adtag=csm",
                            b = "adblk_unk",
                            d;
                        a: {
                            try {
                                d = a.localStorage;
                                break a
                            } catch (z) {}
                            d = void 0
                        }
                        var g =
                            "csm:adb",
                            c = a.ue_err,
                            s = e.cookie,
                            f = void 0 !== a.localStorage,
                            w = Math.random() > 1 - 1 / a.ue_fadb,
                            r = !1,
                            x = t();
                        w || !x ? u() : l();
                        a.ue_isAdb = v;
                        a.ue_isAdb.unk = "adblk_unk";
                        a.ue_isAdb.no = p;
                        a.ue_isAdb.yes = k
                    }
                }, "adb")(document, window);




                (function(c, l, m) {
                    function h(a) {
                        if (a) try {
                            if (a.id) return "//*[@id='" + a.id + "']";
                            var b, d = 1,
                                e;
                            for (e = a.previousSibling; e; e = e.previousSibling) e.nodeName === a.nodeName && (d += 1);
                            b = d;
                            var c = a.nodeName;
                            1 !== b && (c += "[" + b + "]");
                            a.parentNode && (c = h(a.parentNode) + "/" + c);
                            return c
                        } catch (f) {
                            return "DETACHED"
                        }
                    }

                    function f(a) {
                        if (a && a.getAttribute) return a.getAttribute(k) ? a.getAttribute(k) : f(a.parentElement)
                    }
                    var k = "data-cel-widget",
                        g = !1,
                        d = [];
                    (c.ue || {}).isBF = function() {
                        try {
                            var a = JSON.parse(localStorage["csm-bf"] || "[]"),
                                b = 0 <= a.indexOf(c.ue_id);
                            a.unshift(c.ue_id);
                            a = a.slice(0, 20);
                            localStorage["csm-bf"] = JSON.stringify(a);
                            return b
                        } catch (d) {
                            return !1
                        }
                    }();
                    c.ue_utils = {
                        getXPath: h,
                        getFirstAscendingWidget: function(a, b) {
                            c.ue_cel && c.ue_fem ? !0 === g ? b(f(a)) : d.push({
                                element: a,
                                callback: b
                            }) : b()
                        },
                        notifyWidgetsLabeled: function() {
                            if (!1 === g) {
                                g = !0;
                                for (var a = f, b = 0; b < d.length; b++)
                                    if (d[b].hasOwnProperty("callback") && d[b].hasOwnProperty("element")) {
                                        var c = d[b].callback,
                                            e = d[b].element;
                                        "function" === typeof c && "function" === typeof a && c(a(e))
                                    }
                                d = null
                            }
                        },
                        extractStringValue: function(a) {
                            if ("string" ===
                                typeof a) return a
                        }
                    }
                })(ue_csm, window, document);


                (function(a, c) {
                    a.ue_cel || (a.ue_cel = function() {
                        function h(a, b) {
                            b ? b.r = y : b = {
                                r: y,
                                c: 1
                            };
                            !ue_csm.ue_sclog && b.clog && e.clog ? e.clog(a, b.ns || n, b) : b.glog && e.glog ? e.glog(a, b.ns || n, b) : e.log(a, b.ns || n, b)
                        }

                        function l() {
                            var a = b.length;
                            if (0 < a) {
                                for (var f = [], c = 0; c < a; c++) {
                                    var g = b[c].api;
                                    g.ready() ? (g.on({
                                        ts: e.d,
                                        ns: n
                                    }), d.push(b[c]), h({
                                        k: "mso",
                                        n: b[c].name,
                                        t: e.d()
                                    })) : f.push(b[c])
                                }
                                b = f
                            }
                        }

                        function f() {
                            if (!f.executed) {
                                for (var a = 0; a < d.length; a++) d[a].api.off && d[a].api.off({
                                    ts: e.d,
                                    ns: n
                                });
                                q();
                                h({
                                    k: "eod",
                                    t0: e.t0,
                                    t: e.d()
                                }, {
                                    c: 1,
                                    il: 1
                                });
                                f.executed = 1;
                                for (a = 0; a < d.length; a++) b.push(d[a]);
                                d = [];
                                clearTimeout(t);
                                clearTimeout(v)
                            }
                        }

                        function q(a) {
                            h({
                                k: "hrt",
                                t: e.d()
                            }, {
                                c: 1,
                                il: 1,
                                n: a
                            });
                            g = Math.min(k, r * g);
                            z()
                        }

                        function z() {
                            clearTimeout(v);
                            v = setTimeout(function() {
                                q(!0)
                            }, g)
                        }

                        function u() {
                            f.executed || q()
                        }
                        var r = 1.5,
                            k = c.ue_cel_max_hrt || 3E4,
                            b = [],
                            d = [],
                            n = a.ue_cel_ns || "cel",
                            t, v, e = a.ue,
                            m = a.uet,
                            w = a.uex,
                            y = e.rid,
                            g = c.ue_cel_hrt_int || 3E3,
                            s = c.requestAnimationFrame || function(a) {
                                a()
                            };
                        if (e.isBF) h({
                            k: "bft",
                            t: e.d()
                        });
                        else {
                            "function" == typeof m && m("bb", "csmCELLSframework", {
                                wb: 1
                            });
                            setTimeout(l, 0);
                            e.onunload(f);
                            if (e.onflush) e.onflush(u);
                            t = setTimeout(f, 6E5);
                            z();
                            "function" == typeof w && w("ld", "csmCELLSframework", {
                                wb: 1
                            });
                            return {
                                registerModule: function(a, c) {
                                    b.push({
                                        name: a,
                                        api: c
                                    });
                                    h({
                                        k: "mrg",
                                        n: a,
                                        t: e.d()
                                    });
                                    l()
                                },
                                reset: function(a) {
                                    h({
                                        k: "rst",
                                        t0: e.t0,
                                        t: e.d()
                                    });
                                    b = b.concat(d);
                                    d = [];
                                    for (var c = b.length, g = 0; g < c; g++) b[g].api.off(), b[g].api.reset();
                                    y = a || e.rid;
                                    l();
                                    clearTimeout(t);
                                    t = setTimeout(f, 6E5);
                                    f.executed = 0
                                },
                                timeout: function(a, b) {
                                    return c.setTimeout(function() {
                                        s(function() {
                                            f.executed ||
                                                a()
                                        })
                                    }, b)
                                },
                                log: h,
                                off: f
                            }
                        }
                    }())
                })(ue_csm, window);
                (function(a, c, h) {
                    a.ue_pdm || !a.ue_cel || ue.isBF || (a.ue_pdm = function() {
                        function l() {
                            try {
                                var b = window.screen;
                                if (b) {
                                    var c = {
                                        w: b.width,
                                        aw: b.availWidth,
                                        h: b.height,
                                        ah: b.availHeight,
                                        cd: b.colorDepth,
                                        pd: b.pixelDepth
                                    };
                                    e && e.w === c.w && e.h === c.h && e.aw === c.aw && e.ah === c.ah && e.pd === c.pd && e.cd === c.cd || (e = c, e.t = t(), e.k = "sci", s(e))
                                }
                                var g = h.body || {},
                                    f = h.documentElement || {},
                                    d = {
                                        w: Math.max(g.scrollWidth || 0, g.offsetWidth || 0, f.clientWidth || 0, f.scrollWidth || 0, f.offsetWidth || 0),
                                        h: Math.max(g.scrollHeight || 0, g.offsetHeight || 0, f.clientHeight ||
                                            0, f.scrollHeight || 0, f.offsetHeight || 0)
                                    };
                                m && m.w === d.w && m.h === d.h || (m = d, m.t = t(), m.k = "doi", s(m));
                                n = a.ue_cel.timeout(l, v);
                                y += 1
                            } catch (r) {
                                window.ueLogError && ueLogError(r, {
                                    attribution: "csm-cel-page-module",
                                    logLevel: "WARN"
                                })
                            }
                        }

                        function f() {
                            k("ebl", "default", !1)
                        }

                        function q() {
                            k("efo", "default", !0)
                        }

                        function z() {
                            k("ebl", "app", !1)
                        }

                        function u() {
                            k("efo", "app", !0)
                        }

                        function r() {
                            c.setTimeout(function() {
                                h[D] ? k("ebl", "pageviz", !1) : k("efo", "pageviz", !0)
                            }, 0)
                        }

                        function k(a, b, c) {
                            w !== c && s({
                                k: a,
                                t: t(),
                                s: b
                            }, {
                                ff: !0 === c ? 0 : 1
                            });
                            w =
                                c
                        }

                        function b() {
                            g.attach && (x && g.attach(p, r, h), A && P.when("mash").execute(function(a) {
                                a && a.addEventListener && (a.addEventListener("appPause", z), a.addEventListener("appResume", u))
                            }), g.attach("blur", f, c), g.attach("focus", q, c))
                        }

                        function d() {
                            g.detach && (x && g.detach(p, r, h), A && P.when("mash").execute(function(a) {
                                a && a.removeEventListener && (a.removeEventListener("appPause", z), a.removeEventListener("appResume", u))
                            }), g.detach("blur", f, c), g.detach("focus", q, c))
                        }
                        var n, t, v, e, m, w = null,
                            y = 0,
                            g = a.ue,
                            s = a.ue_cel.log,
                            B = a.uet,
                            E = a.uex,
                            x = !!g.pageViz,
                            p = x && g.pageViz.event,
                            D = x && g.pageViz.propHid,
                            A = c.P && c.P.when;
                        "function" == typeof B && B("bb", "csmCELLSpdm", {
                            wb: 1
                        });
                        return {
                            on: function(a) {
                                v = a.timespan || 500;
                                t = a.ts;
                                b();
                                a = c.location;
                                s({
                                    k: "pmd",
                                    o: a.origin,
                                    p: a.pathname,
                                    t: t()
                                });
                                l();
                                "function" == typeof E && E("ld", "csmCELLSpdm", {
                                    wb: 1
                                })
                            },
                            off: function(a) {
                                clearTimeout(n);
                                d();
                                g.count && g.count("cel.PDM.TotalExecutions", y)
                            },
                            ready: function() {
                                return h.body && a.ue_cel && a.ue_cel.log
                            },
                            reset: function() {
                                e = m = null
                            }
                        }
                    }(), a.ue_cel && a.ue_cel.registerModule("page module",
                        a.ue_pdm))
                })(ue_csm, window, document);
                (function(a, c) {
                    a.ue_vpm || !a.ue_cel || ue.isBF || (a.ue_vpm = function() {
                        function h() {
                            var a = u(),
                                b = {
                                    w: c.innerWidth,
                                    h: c.innerHeight,
                                    x: c.pageXOffset,
                                    y: c.pageYOffset
                                };
                            f && f.w == b.w && f.h == b.h && f.x == b.x && f.y == b.y || (b.t = a, b.k = "vpi", f = b, d(f, {
                                clog: 1
                            }));
                            q = 0;
                            r = u() - a;
                            k += 1
                        }

                        function l() {
                            q || (q = a.ue_cel.timeout(h, z))
                        }
                        var f, q, z, u, r = 0,
                            k = 0,
                            b = a.ue,
                            d = a.ue_cel.log,
                            n = a.uet,
                            t = a.uex,
                            v = b.attach,
                            e = b.detach;
                        "function" == typeof n && n("bb", "csmCELLSvpm", {
                            wb: 1
                        });
                        return {
                            on: function(a) {
                                u = a.ts;
                                z = a.timespan || 100;
                                h();
                                v && (v("scroll", l), v("resize",
                                    l));
                                "function" == typeof t && t("ld", "csmCELLSvpm", {
                                    wb: 1
                                })
                            },
                            off: function(a) {
                                clearTimeout(q);
                                e && (e("scroll", l), e("resize", l));
                                b.count && (b.count("cel.VPI.TotalExecutions", k), b.count("cel.VPI.TotalExecutionTime", r), b.count("cel.VPI.AverageExecutionTime", r / k))
                            },
                            ready: function() {
                                return a.ue_cel && a.ue_cel.log
                            },
                            reset: function() {
                                f = void 0
                            },
                            getVpi: function() {
                                return f
                            }
                        }
                    }(), a.ue_cel && a.ue_cel.registerModule("viewport module", a.ue_vpm))
                })(ue_csm, window);
                (function(a, c, h) {
                    if (!a.ue_fem && a.ue_cel && a.ue_utils) {
                        var l = a.ue || {};
                        !l.isBF && !a.ue_fem && h.querySelector && c.getComputedStyle && [].forEach && (a.ue_fem = function() {
                            function f(a, b) {
                                return a > b ? 3 > a - b : 3 > b - a
                            }

                            function q(a, b) {
                                var e = c.pageXOffset,
                                    g = c.pageYOffset,
                                    d;
                                a: {
                                    try {
                                        if (a) {
                                            var h = a.getBoundingClientRect(),
                                                r, l = 0 === a.offsetWidth && 0 === a.offsetHeight;
                                            c: {
                                                for (var k = a.parentNode, n = h.left || 0, p = h.top || 0, s = h.width || 0, t = h.height || 0; k && k !== document.body;) {
                                                    var m;
                                                    d: {
                                                        try {
                                                            var q = void 0;
                                                            if (k) var C = k.getBoundingClientRect(),
                                                                q = {
                                                                    x: C.left || 0,
                                                                    y: C.top || 0,
                                                                    w: C.width || 0,
                                                                    h: C.height || 0
                                                                };
                                                            else q = void 0;
                                                            m = q;
                                                            break d
                                                        } catch (v) {}
                                                        m = void 0
                                                    }
                                                    var u = window.getComputedStyle(k),
                                                        w = "hidden" === u.overflow,
                                                        N = w || "hidden" === u.overflowX,
                                                        J = w || "hidden" === u.overflowY,
                                                        z = p + t - 1 < m.y + 1 || p + 1 > m.y + m.h - 1;
                                                    if ((n + s - 1 < m.x + 1 || n + 1 > m.x + m.w - 1) && N || z && J) {
                                                        r = !0;
                                                        break c
                                                    }
                                                    k = k.parentNode
                                                }
                                                r = !1
                                            }
                                            d = {
                                                x: h.left + e || 0,
                                                y: h.top + g || 0,
                                                w: h.width || 0,
                                                h: h.height || 0,
                                                d: (l || r) | 0
                                            }
                                        } else d = void 0;
                                        break a
                                    } catch (A) {}
                                    d = void 0
                                }
                                if (d && !a.cel_b) a.cel_b = d, x({
                                    n: a.getAttribute(y),
                                    w: a.cel_b.w,
                                    h: a.cel_b.h,
                                    d: a.cel_b.d,
                                    x: a.cel_b.x,
                                    y: a.cel_b.y,
                                    t: b,
                                    k: "ewi",
                                    cl: a.className
                                }, {
                                    clog: 1
                                });
                                else {
                                    if (e = d) e = a.cel_b, g = d, e = g.d === e.d && 1 === g.d ? !1 : !(f(e.x, g.x) && f(e.y, g.y) && f(e.w, g.w) && f(e.h, g.h) && e.d === g.d);
                                    e && (a.cel_b = d, x({
                                        n: a.getAttribute(y),
                                        w: a.cel_b.w,
                                        h: a.cel_b.h,
                                        d: a.cel_b.d,
                                        x: a.cel_b.x,
                                        y: a.cel_b.y,
                                        t: b,
                                        k: "ewi"
                                    }, {
                                        clog: 1
                                    }))
                                }
                            }

                            function z(b, e) {
                                var c;
                                c = b.c ? h.getElementsByClassName(b.c) : b.id ? [h.getElementById(b.id)] : h.querySelectorAll(b.s);
                                b.w = [];
                                for (var d = 0; d < c.length; d++) {
                                    var f = c[d];
                                    if (f) {
                                        if (!f.getAttribute(y)) {
                                            var r = f.getAttribute("cel_widget_id") ||
                                                (b.id_gen || E)(f, d) || f.id;
                                            f.setAttribute(y, r)
                                        }
                                        b.w.push(f);
                                        k(Q, f, e)
                                    }
                                }!1 === B && (s++, s === g.length && (B = !0, a.ue_utils.notifyWidgetsLabeled()))
                            }

                            function u(a, b) {
                                p.contains(a) || x({
                                    n: a.getAttribute(y),
                                    t: b,
                                    k: "ewd"
                                }, {
                                    clog: 1
                                })
                            }

                            function r(a) {
                                I.length && ue_cel.timeout(function() {
                                    if (m) {
                                        for (var b = R(), c = !1; R() - b < e && !c;) {
                                            for (c = S; 0 < c-- && 0 < I.length;) {
                                                var g = I.shift();
                                                T[g.type](g.elem, g.time)
                                            }
                                            c = 0 === I.length
                                        }
                                        U++;
                                        r(a)
                                    }
                                }, 0)
                            }

                            function k(a, b, c) {
                                I.push({
                                    type: a,
                                    elem: b,
                                    time: c
                                })
                            }

                            function b(a, b) {
                                for (var c = 0; c < g.length; c++)
                                    for (var e =
                                            g[c].w || [], d = 0; d < e.length; d++) k(a, e[d], b)
                            }

                            function d() {
                                K || (K = a.ue_cel.timeout(function() {
                                    K = null;
                                    var c = w();
                                    b(W, c);
                                    for (var e = 0; e < g.length; e++) k(X, g[e], c);
                                    0 === g.length && !1 === B && (B = !0, a.ue_utils.notifyWidgetsLabeled());
                                    r(c)
                                }, v))
                            }

                            function n() {
                                K || O || (O = a.ue_cel.timeout(function() {
                                    O = null;
                                    var a = w();
                                    b(Q, a);
                                    r(a)
                                }, v))
                            }

                            function t() {
                                return A && F && p && p.contains && p.getBoundingClientRect && w
                            }
                            var v = 50,
                                e = 4.5,
                                m = !1,
                                w, y = "data-cel-widget",
                                g = [],
                                s = 0,
                                B = !1,
                                E = function() {},
                                x = a.ue_cel.log,
                                p, D, A, F, G = c.MutationObserver || c.WebKitMutationObserver ||
                                c.MozMutationObserver,
                                N = !!G,
                                H, C, J = "DOMAttrModified",
                                L = "DOMNodeInserted",
                                M = "DOMNodeRemoved",
                                O, K, I = [],
                                U = 0,
                                S = null,
                                W = "removedWidget",
                                X = "updateWidgets",
                                Q = "processWidget",
                                T, V = c.performance || {},
                                R = V.now && function() {
                                    return V.now()
                                } || function() {
                                    return Date.now()
                                };
                            "function" == typeof uet && uet("bb", "csmCELLSfem", {
                                wb: 1
                            });
                            return {
                                on: function(b) {
                                    function c() {
                                        if (t()) {
                                            T = {
                                                removedWidget: u,
                                                updateWidgets: z,
                                                processWidget: q
                                            };
                                            if (N) {
                                                var a = {
                                                    attributes: !0,
                                                    subtree: !0
                                                };
                                                H = new G(n);
                                                C = new G(d);
                                                H.observe(p, a);
                                                C.observe(p, {
                                                    childList: !0,
                                                    subtree: !0
                                                });
                                                C.observe(D, a)
                                            } else A.call(p, J, n), A.call(p, L, d), A.call(p, M, d), A.call(D, L, n), A.call(D, M, n);
                                            d()
                                        }
                                    }
                                    p = h.body;
                                    D = h.head;
                                    A = p.addEventListener;
                                    F = p.removeEventListener;
                                    w = b.ts;
                                    g = a.cel_widgets || [];
                                    S = b.bs || 5;
                                    l.deffered ? c() : l.attach && l.attach("load", c);
                                    "function" == typeof uex && uex("ld", "csmCELLSfem", {
                                        wb: 1
                                    });
                                    m = !0
                                },
                                off: function() {
                                    t() && (C && (C.disconnect(), C = null), H && (H.disconnect(), H = null), F.call(p, J, n), F.call(p, L, d), F.call(p, M, d), F.call(D, L, n), F.call(D, M, n));
                                    l.count && l.count("cel.widgets.batchesProcessed",
                                        U);
                                    m = !1
                                },
                                ready: function() {
                                    return a.ue_cel && a.ue_cel.log
                                },
                                reset: function() {
                                    g = a.cel_widgets || []
                                }
                            }
                        }(), a.ue_cel && a.ue_fem && a.ue_cel.registerModule("features module", a.ue_fem))
                    }
                })(ue_csm, window, document);
                (function(a, c, h) {
                    !a.ue_mcm && a.ue_cel && a.ue_utils && !a.ue.isBF && (a.ue_mcm = function() {
                        function l(a, k) {
                            var b = a.srcElement || a.target || {},
                                d = {
                                    k: f,
                                    w: (k || {}).ow || (c.body || {}).scrollWidth,
                                    h: (k || {}).oh || (c.body || {}).scrollHeight,
                                    t: (k || {}).ots || q(),
                                    x: a.pageX,
                                    y: a.pageY,
                                    p: u.getXPath(b),
                                    n: b.nodeName
                                };
                            h && "function" === typeof h.now && a.timeStamp && (d.dt = (k || {}).odt || h.now() - a.timeStamp, d.dt = parseFloat(d.dt.toFixed(2)));
                            a.button && (d.b = a.button);
                            b.href && (d.r = u.extractStringValue(b.href));
                            b.id && (d.i = b.id);
                            b.className &&
                                b.className.split && (d.c = b.className.split(/\s+/));
                            z(d, {
                                c: 1
                            })
                        }
                        var f = "mcm",
                            q, z = a.ue_cel.log,
                            u = a.ue_utils;
                        return {
                            on: function(c) {
                                q = c.ts;
                                a.ue_cel_stub && a.ue_cel_stub.replayModule(f, l);
                                window.addEventListener && window.addEventListener("mousedown", l, !0)
                            },
                            off: function(a) {
                                window.addEventListener && window.removeEventListener("mousedown", l, !0)
                            },
                            ready: function() {
                                return a.ue_cel && a.ue_cel.log
                            },
                            reset: function() {}
                        }
                    }(), a.ue_cel && a.ue_cel.registerModule("mouse click module", a.ue_mcm))
                })(ue_csm, document, window.performance);
                (function(a, c) {
                    a.ue_mmm || !a.ue_cel || a.ue.isBF || (a.ue_mmm = function(h) {
                        function l(a, b) {
                            var c = {
                                x: a.pageX || a.x || 0,
                                y: a.pageY || a.y || 0,
                                t: k()
                            };
                            !b && x && (c.t - x.t < z || c.x == x.x && c.y == x.y) || (x = c, s.push(c))
                        }

                        function f() {
                            if (s.length) {
                                y = G.now();
                                for (var a = 0; a < s.length; a++) {
                                    var b = s[a],
                                        c = a;
                                    p = s[E];
                                    D = b;
                                    var d = void 0;
                                    if (!(d = 2 > c)) {
                                        d = void 0;
                                        a: if (s[c].t - s[c - 1].t > q) d = 0;
                                            else {
                                                for (d = E + 1; d < c; d++) {
                                                    var f = p,
                                                        h = D,
                                                        k = s[d];
                                                    A = (h.x - f.x) * (f.y - k.y) - (f.x - k.x) * (h.y - f.y);
                                                    if (A * A / ((h.x - f.x) * (h.x - f.x) + (h.y - f.y) * (h.y - f.y)) > u) {
                                                        d = 0;
                                                        break a
                                                    }
                                                }
                                                d = 1
                                            }
                                        d = !d
                                    }(F =
                                        d) ? E = c - 1: B.pop();
                                    B.push(b)
                                }
                                g = G.now() - y;
                                v = Math.min(v, g);
                                e = Math.max(e, g);
                                m = (m * w + g) / (w + 1);
                                w += 1;
                                n({
                                    k: r,
                                    e: B,
                                    min: Math.floor(1E3 * v),
                                    max: Math.floor(1E3 * e),
                                    avg: Math.floor(1E3 * m)
                                }, {
                                    c: 1
                                });
                                s = [];
                                B = [];
                                E = 0
                            }
                        }
                        var q = 100,
                            z = 20,
                            u = 25,
                            r = "mmm1",
                            k, b, d = a.ue,
                            n = a.ue_cel.log,
                            t, v = 1E3,
                            e = 0,
                            m = 0,
                            w = 0,
                            y, g, s = [],
                            B = [],
                            E = 0,
                            x, p, D, A, F, G = h && h.now && h || Date.now && Date || {
                                now: function() {
                                    return (new Date).getTime()
                                }
                            };
                        return {
                            on: function(a) {
                                k = a.ts;
                                b = a.ns;
                                d.attach && d.attach("mousemove", l, c);
                                t = setInterval(f, 3E3)
                            },
                            off: function(a) {
                                b && (x && l(x, !0), f());
                                clearInterval(t);
                                d.detach && d.detach("mousemove", l, c)
                            },
                            ready: function() {
                                return a.ue_cel && a.ue_cel.log
                            },
                            reset: function() {
                                s = [];
                                B = [];
                                E = 0;
                                x = null
                            }
                        }
                    }(window.performance), a.ue_cel && a.ue_cel.registerModule("mouse move module", a.ue_mmm))
                })(ue_csm, document);



                ue_csm.ue.exec(function(b, c) {
                    var e = function() {},
                        f = function() {
                            return {
                                send: function(b, d) {
                                    if (d && b) {
                                        var a;
                                        if (c.XDomainRequest) a = new XDomainRequest, a.onerror = e, a.ontimeout = e, a.onprogress = e, a.onload = e, a.timeout = 0;
                                        else if (c.XMLHttpRequest) {
                                            if (a = new XMLHttpRequest, !("withCredentials" in a)) throw "";
                                        } else a = void 0;
                                        if (!a) throw "";
                                        a.open("POST", b, !0);
                                        a.setRequestHeader && a.setRequestHeader("Content-type", "text/plain");
                                        a.send(d)
                                    }
                                },
                                isSupported: !0
                            }
                        }(),
                        g = function() {
                            return {
                                send: function(c, d) {
                                    if (c && d)
                                        if (navigator.sendBeacon(c,
                                                d)) b.ue_sbuimp && b.ue && b.ue.ssw && b.ue.ssw("eelsts", "scs");
                                        else throw "";
                                },
                                isSupported: !!navigator.sendBeacon && !(c.cordova && c.cordova.platformId && "ios" == c.cordova.platformId)
                            }
                        }();
                    b.ue._ajx = f;
                    b.ue._sBcn = g
                }, "Transportation-clients")(ue_csm, window);
                ue_csm.ue.exec(function(b, k) {
                    function A() {
                        for (var a = 0; a < arguments.length; a++) {
                            var c = arguments[a];
                            try {
                                var h;
                                if (c.isSupported) {
                                    var b = t.buildPayload(l, e);
                                    h = c.send(J, b)
                                } else throw dummyException;
                                return h
                            } catch (d) {}
                        }
                        B({
                            m: "All supported clients failed",
                            attribution: "CSMSushiClient_TRANSPORTATION_FAIL",
                            f: "sushi-client.js",
                            logLevel: "ERROR"
                        }, k.ue_err_chan || "jserr")
                    }

                    function m() {
                        if (e.length) {
                            for (var a = 0; a < n.length; a++) n[a]();
                            A(d._sBcn || {}, d._ajx || {});
                            e = [];
                            f = {};
                            l = {};
                            u = v = q = w = 0
                        }
                    }

                    function K() {
                        var a = new Date,
                            c = function(a) {
                                return 10 >
                                    a ? "0" + a : a
                            };
                        return Date.prototype.toISOString ? a.toISOString() : a.getUTCFullYear() + "-" + c(a.getUTCMonth() + 1) + "-" + c(a.getUTCDate()) + "T" + c(a.getUTCHours()) + ":" + c(a.getUTCMinutes()) + ":" + c(a.getUTCSeconds()) + "." + String((a.getUTCMilliseconds() / 1E3).toFixed(3)).slice(2, 5) + "Z"
                    }

                    function x(a) {
                        try {
                            return JSON.stringify(a)
                        } catch (c) {}
                        return null
                    }

                    function C(a, c, h, g) {
                        var p = !1;
                        g = g || {};
                        r++;
                        r == D && B({
                                m: "Max number of Sushi Logs exceeded",
                                f: "sushi-client.js",
                                logLevel: "ERROR",
                                attribution: "CSMSushiClient_MAX_CALLS"
                            }, k.ue_err_chan ||
                            "jserr");
                        var f;
                        if (f = !(r >= D))(f = a && -1 < a.constructor.toString().indexOf("Object") && c && -1 < c.constructor.toString().indexOf("String") && h && -1 < h.constructor.toString().indexOf("String")) || L++;
                        f && (d.count && d.count("Event:" + h, 1), a.producerId = a.producerId || c, a.schemaId = a.schemaId || h, a.timestamp = K(), c = Date.now ? Date.now() : +new Date, h = Math.random().toString().substring(2, 12), a.messageId = b.ue_id + "-" + c + "-" + h, g && !g.ssd && (a.sessionId = a.sessionId || b.ue_sid, a.requestId = a.requestId || b.ue_id, a.obfuscatedMarketplaceId =
                            a.obfuscatedMarketplaceId || b.ue_mid), (c = x(a)) ? (c = c.length, (e.length == M || q + c > N) && m(), q += c, a = {
                            data: t.compressEvent(a)
                        }, e.push(a), (g || {}).n ? 0 === E ? m() : u || (u = k.setTimeout(m, E)) : v || (v = k.setTimeout(m, O)), p = !0) : p = !1);
                        !p && b.ue_int && console.error("Invalid JS Nexus API call");
                        return p
                    }

                    function F() {
                        if (!G) {
                            for (var a = 0; a < y.length; a++) y[a]();
                            for (a = 0; a < n.length; a++) n[a]();
                            e.length && (b.ue_sbuimp && b.ue && b.ue.ssw && (a = x({
                                dct: l,
                                evt: e
                            }), b.ue.ssw("eeldata", a), b.ue.ssw("eelsts", "unk")), A(d._sBcn || {}));
                            G = !0
                        }
                    }

                    function H(a) {
                        y.push(a)
                    }

                    function I(a) {
                        n.push(a)
                    }
                    var D = 1E3,
                        M = 499,
                        N = 524288,
                        s = function() {},
                        d = b.ue || {},
                        B = d.log || s,
                        P = b.uex || s;
                    (b.uet || s)("bb", "ue_sushi_v1", {
                        wb: 1
                    });
                    var J = b.ue_surl || "https://unagi-na.amazon.com/1/events/com.amazon.csm.nexusclient.gamma",
                        Q = ["messageId", "timestamp"],
                        z = "#",
                        e = [],
                        f = {},
                        l = {},
                        q = 0,
                        w = 0,
                        L = 0,
                        r = 0,
                        y = [],
                        n = [],
                        G = !1,
                        u, v, E = void 0 === b.ue_hpsi ? 1E3 : b.ue_hpsi,
                        O = void 0 === b.ue_lpsi ? 1E4 : b.ue_lpsi,
                        t = function() {
                            function a(a) {
                                f[a] = z + w++;
                                l[f[a]] = a;
                                return f[a]
                            }

                            function c(b) {
                                if (!(b instanceof Function)) {
                                    if (b instanceof Array) {
                                        for (var g = [], d = b.length, e = 0; e < d; e++) g[e] = c(b[e]);
                                        return g
                                    }
                                    if (b instanceof Object) {
                                        g = {};
                                        for (d in b) b.hasOwnProperty(d) && (g[f[d] ? f[d] : a(d)] = -1 === Q.indexOf(d) ? c(b[d]) : b[d]);
                                        return g
                                    }
                                    return "string" === typeof b && (b.length > (z + w).length || b.charAt(0) === z) ? f[b] ? f[b] : a(b) : b
                                }
                            }
                            return {
                                compressEvent: c,
                                buildPayload: function() {
                                    return x({
                                        cs: {
                                            dct: l
                                        },
                                        events: e
                                    })
                                }
                            }
                        }();
                    (function() {
                        if (d.event && d.event.isStub) {
                            if (b.ue_sbuimp && b.ue && b.ue.ssw) {
                                var a = b.ue.ssw("eelsts").val;
                                if (a && "unk" === a && (a = b.ue.ssw("eeldata").val)) {
                                    var c;
                                    a: {
                                        try {
                                            c =
                                                JSON.parse(a);
                                            break a
                                        } catch (f) {}
                                        c = null
                                    }
                                    c && c.evt instanceof Array && c.dct instanceof Object && (e = c.evt, l = c.dct, e && l && (m(), b.ue.ssw("eeldata", "{}"), b.ue.ssw("eelsts", "scs")))
                                }
                            }
                            d.event.replay(function(a) {
                                a[3] = a[3] || {};
                                a[3].n = 1;
                                C.apply(this, a)
                            });
                            d.onSushiUnload.replay(function(a) {
                                H(a[0])
                            });
                            d.onSushiFlush.replay(function(a) {
                                I(a[0])
                            })
                        }
                    })();
                    d.attach("beforeunload", F);
                    d.attach("pagehide", F);
                    d._cmps = t;
                    d.event = C;
                    d.event.reset = function() {
                        r = 0
                    };
                    d.onSushiUnload = H;
                    d.onSushiFlush = I;
                    try {
                        k.P && k.P.register && k.P.register("sushi-client",
                            s)
                    } catch (R) {
                        b.ueLogError(R, {
                            logLevel: "WARN"
                        })
                    }
                    P("ld", "ue_sushi_v1", {
                        wb: 1
                    })
                }, "Nxs-JS-Client")(ue_csm, window);


                ue_csm.ue_unrt = 1500;
                (function(d, b, t) {
                    function u(a, g) {
                        var c = a.srcElement || a.target || {},
                            b = {
                                k: v,
                                t: g.t,
                                dt: g.dt,
                                x: a.pageX,
                                y: a.pageY,
                                p: e.getXPath(c),
                                n: c.nodeName
                            };
                        a.button && (b.b = a.button);
                        c.type && (b.ty = c.type);
                        c.href && (b.r = e.extractStringValue(c.href));
                        c.id && (b.i = c.id);
                        c.className && c.className.split && (b.c = c.className.split(/\s+/));
                        h += 1;
                        e.getFirstAscendingWidget(c, function(a) {
                            b.wd = a;
                            d.ue.log(b, r)
                        })
                    }

                    function w(a) {
                        if (!x(a.srcElement || a.target)) {
                            m += 1;
                            n = !0;
                            var g = f = d.ue.d(),
                                c;
                            p && "function" === typeof p.now && a.timeStamp && (c = p.now() -
                                a.timeStamp, c = parseFloat(c.toFixed(2)));
                            s = b.setTimeout(function() {
                                u(a, {
                                    t: g,
                                    dt: c
                                })
                            }, y)
                        }
                    }

                    function z(a) {
                        if (a) {
                            var b = a.filter(A);
                            a.length !== b.length && (q = !0, k = d.ue.d(), n && q && (k && f && d.ue.log({
                                k: B,
                                t: f,
                                m: Math.abs(k - f)
                            }, r), l(), q = !1, k = 0))
                        }
                    }

                    function A(a) {
                        if (!a) return !1;
                        var b = "characterData" === a.type ? a.target.parentElement : a.target;
                        if (!b || !b.hasAttributes || !b.attributes) return !1;
                        var c = {
                                "class": "gw-clock gw-clock-aria s-item-container-height-auto feed-carousel using-mouse kfs-inner-container".split(" "),
                                id: ["dealClock",
                                    "deal_expiry_timer", "timer"
                                ],
                                role: ["timer"]
                            },
                            d = !1;
                        Object.keys(c).forEach(function(a) {
                            var e = b.attributes[a] ? b.attributes[a].value : "";
                            (c[a] || "").forEach(function(a) {
                                -1 !== e.indexOf(a) && (d = !0)
                            })
                        });
                        return d
                    }

                    function x(a) {
                        if (!a) return !1;
                        var b = (e.extractStringValue(a.nodeName) || "").toLowerCase(),
                            c = (e.extractStringValue(a.type) || "").toLowerCase(),
                            d = (e.extractStringValue(a.href) || "").toLowerCase();
                        a = (e.extractStringValue(a.id) || "").toLowerCase();
                        var f = "checkbox color date datetime-local email file month number password radio range reset search tel text time url week".split(" ");
                        if (-1 !== ["select", "textarea", "html"].indexOf(b) || "input" === b && -1 !== f.indexOf(c) || "a" === b && -1 !== d.indexOf("http") || -1 !== ["sitbreaderrightpageturner", "sitbreaderleftpageturner", "sitbreaderpagecontainer"].indexOf(a)) return !0
                    }

                    function l() {
                        n = !1;
                        f = 0;
                        b.clearTimeout(s)
                    }

                    function C() {
                        b.ue.onunload(function() {
                            ue.count("armored-cxguardrails.unresponsive-clicks.violations", h);
                            ue.count("armored-cxguardrails.unresponsive-clicks.violationRate", h / m * 100 || 0)
                        })
                    }
                    if (b.MutationObserver && b.addEventListener && Object.keys &&
                        d && d.ue && d.ue.log && d.ue_unrt && d.ue_utils) {
                        var y = d.ue_unrt,
                            r = "cel",
                            v = "unr_mcm",
                            B = "res_mcm",
                            p = b.performance,
                            e = d.ue_utils,
                            n = !1,
                            f = 0,
                            s = 0,
                            q = !1,
                            k = 0,
                            h = 0,
                            m = 0;
                        b.addEventListener && (b.addEventListener("mousedown", w, !0), b.addEventListener("beforeunload", l, !0), b.addEventListener("visibilitychange", l, !0), b.addEventListener("pagehide", l, !0));
                        b.ue && b.ue.event && b.ue.onSushiUnload && b.ue.onunload && C();
                        (new MutationObserver(z)).observe(t, {
                            childList: !0,
                            attributes: !0,
                            characterData: !0,
                            subtree: !0
                        })
                    }
                })(ue_csm, window, document);


                ue_csm.ue.exec(function(g, e) {
                    if (e.ue_err) {
                        var f = "";
                        e.ue_err.errorHandlers || (e.ue_err.errorHandlers = []);
                        e.ue_err.errorHandlers.push({
                            name: "fctx",
                            handler: function(a) {
                                if (!a.logLevel || "FATAL" === a.logLevel)
                                    if (f = g.getElementsByTagName("html")[0].innerHTML) {
                                        var b = f.indexOf("var ue_t0=ue_t0||+new Date();");
                                        if (-1 !== b) {
                                            var b = f.substr(0, b).split(String.fromCharCode(10)),
                                                d = Math.max(b.length - 10 - 1, 0),
                                                b = b.slice(d, b.length - 1);
                                            a.fcsmln = d + b.length + 1;
                                            a.cinfo = a.cinfo || {};
                                            for (var c = 0; c < b.length; c++) a.cinfo[d + c + 1 + ""] =
                                                b[c]
                                        }
                                        b = f.split(String.fromCharCode(10));
                                        a.cinfo = a.cinfo || {};
                                        if (!(a.f || void 0 === a.l || a.l in a.cinfo))
                                            for (c = +a.l - 1, d = Math.max(c - 5, 0), c = Math.min(c + 5, b.length - 1); d <= c; d++) a.cinfo[d + 1 + ""] = b[d]
                                    }
                            }
                        })
                    }
                }, "fatals-context")(document, window);


                (function(m, a) {
                    function c(k) {
                        function f(b) {
                            b && "string" === typeof b && (b = (b = b.match(/^(?:https?:)?\/\/(.*?)(\/|$)/i)) && 1 < b.length ? b[1] : null, b && b && ("number" === typeof e[b] ? e[b]++ : e[b] = 1))
                        }

                        function d(b) {
                            var e = 10,
                                d = +new Date;
                            b && b.timeRemaining ? e = b.timeRemaining() : b = {
                                timeRemaining: function() {
                                    return Math.max(0, e - (+new Date - d))
                                }
                            };
                            for (var c = a.performance.getEntries(), k = e; g < c.length && k > n;) c[g].name && f(c[g].name), g++, k = b.timeRemaining();
                            g >= c.length ? h(!0) : l()
                        }

                        function h(b) {
                            if (!b) {
                                b = m.scripts;
                                var c;
                                if (b)
                                    for (var d =
                                            0; d < b.length; d++)(c = b[d].getAttribute("src")) && "undefined" !== c && f(c)
                            }
                            0 < Object.keys(e).length && (p && ue_csm.ue && ue_csm.ue.event && ue_csm.ue.event({
                                domains: e,
                                pageType: a.ue_pty || null,
                                subPageType: a.ue_spty || null,
                                pageTypeId: a.ue_pti || null
                            }, "csm", "csm.CrossOriginDomains.2"), a.ue_ext = e)
                        }

                        function l() {
                            !0 === k ? d() : a.requestIdleCallback ? a.requestIdleCallback(d) : a.requestAnimationFrame ? a.requestAnimationFrame(d) : a.setTimeout(d, 100)
                        }

                        function c() {
                            if (a.performance && a.performance.getEntries) {
                                var b = a.performance.getEntries();
                                !b || 0 >= b.length ? h(!1) : l()
                            } else h(!1)
                        }
                        var e = a.ue_ext || {};
                        a.ue_ext || c();
                        return e
                    }

                    function q() {
                        setTimeout(c, r)
                    }
                    var s = a.ue_dserr || !1,
                        p = !0,
                        n = 1,
                        r = 2E3,
                        g = 0;
                    a.ue_err && s && (a.ue_err.errorHandlers || (a.ue_err.errorHandlers = []), a.ue_err.errorHandlers.push({
                        name: "ext",
                        handler: function(a) {
                            if (!a.logLevel || "FATAL" === a.logLevel) {
                                var f = c(!0),
                                    d = [],
                                    h;
                                for (h in f) {
                                    var f = h,
                                        g = f.match(/amazon(\.com?)?\.\w{2,3}$/i);
                                    g && 1 < g.length || -1 !== f.indexOf("amazon-adsystem.com") || -1 !== f.indexOf("amazonpay.com") || -1 !== f.indexOf("cloudfront-labs.amazonaws.com") ||
                                        d.push(h)
                                }
                                a.ext = d
                            }
                        }
                    }));
                    a.ue && a.ue.isl ? c() : a.ue && ue.attach && ue.attach("load", q)
                })(document, window);





                var ue_wtc_c = 3;
                ue_csm.ue.exec(function(b, e) {
                    function l() {
                        for (var a = 0; a < f.length; a++) a: for (var d = s.replace(A, f[a]) + g[f[a]] + t, c = arguments, b = 0; b < c.length; b++) try {
                            c[b].send(d);
                            break a
                        } catch (e) {}
                        g = {};
                        f = [];
                        n = 0;
                        k = p
                    }

                    function u() {
                        B ? l(q) : l(C, q)
                    }

                    function v(a, m, c) {
                        r++;
                        if (r > w) d.count && 1 == r - w && (d.count("WeblabTriggerThresholdReached", 1), b.ue_int && console.error("Number of max call reached. Data will no longer be send"));
                        else {
                            var h = c || {};
                            h && -1 < h.constructor.toString().indexOf(D) && a && -1 < a.constructor.toString().indexOf(x) && m && -1 <
                                m.constructor.toString().indexOf(x) ? (h = b.ue_id, c && c.rid && (h = c.rid), c = h, a = encodeURIComponent(",wl=" + a + "/" + m), 2E3 > a.length + p ? (2E3 < k + a.length && u(), void 0 === g[c] && (g[c] = "", f.push(c)), g[c] += a, k += a.length, n || (n = e.setTimeout(u, E))) : b.ue_int && console.error("Invalid API call. The input provided is over 2000 chars.")) : d.count && (d.count("WeblabTriggerImproperAPICall", 1), b.ue_int && console.error("Invalid API call. The input provided does not match the API protocol i.e ue.trigger(String, String, Object)."))
                        }
                    }

                    function F() {
                        d.trigger &&
                            d.trigger.isStub && d.trigger.replay(function(a) {
                                v.apply(this, a)
                            })
                    }

                    function y() {
                        z || (f.length && l(q), z = !0)
                    }
                    var t = ":1234",
                        s = "//" + b.ue_furl + "/1/remote-weblab-triggers/1/OE/" + b.ue_mid + ":" + b.ue_sid + ":PLCHLDR_RID$s:wl-client-id%3DCSMTriger",
                        A = "PLCHLDR_RID",
                        E = b.wtt || 1E4,
                        p = s.length + t.length,
                        w = b.mwtc || 2E3,
                        G = 1 === e.ue_wtc_c,
                        B = 3 === e.ue_wtc_c,
                        H = e.XMLHttpRequest && "withCredentials" in new e.XMLHttpRequest,
                        x = "String",
                        D = "Object",
                        d = b.ue,
                        g = {},
                        f = [],
                        k = p,
                        n, z = !1,
                        r = 0,
                        C = function() {
                            return {
                                send: function(a) {
                                    if (H) {
                                        var b = new e.XMLHttpRequest;
                                        b.open("GET", a, !0);
                                        G && (b.withCredentials = !0);
                                        b.send()
                                    } else throw "";
                                }
                            }
                        }(),
                        q = function() {
                            return {
                                send: function(a) {
                                    (new Image).src = a
                                }
                            }
                        }();
                    e.encodeURIComponent && (d.attach && (d.attach("beforeunload", y), d.attach("pagehide", y)), F(), d.trigger = v)
                }, "client-wbl-trg")(ue_csm, window);


                (function(k, d, h) {
                    function f(a, c, b) {
                        a && a.indexOf && 0 === a.indexOf("http") && 0 !== a.indexOf("https") && l(s, c, a, b)
                    }

                    function g(a, c, b) {
                        a && a.indexOf && (location.href.split("#")[0] != a && null !== a && "undefined" !== typeof a || l(t, c, a, b))
                    }

                    function l(a, c, b, e) {
                        m[b] || (e = u && e ? n(e) : "N/A", d.ueLogError && d.ueLogError({
                            message: a + c + " : " + b,
                            logLevel: v,
                            stack: "N/A"
                        }, {
                            attribution: e
                        }), m[b] = 1, p++)
                    }

                    function e(a, c) {
                        if (a && c)
                            for (var b = 0; b < a.length; b++) try {
                                c(a[b])
                            } catch (d) {}
                    }

                    function q() {
                        return d.performance && d.performance.getEntriesByType ?
                            d.performance.getEntriesByType("resource") : []
                    }

                    function n(a) {
                        if (a.id) return "//*[@id='" + a.id + "']";
                        var c;
                        c = 1;
                        var b;
                        for (b = a.previousSibling; b; b = b.previousSibling) b.nodeName == a.nodeName && (c += 1);
                        b = a.nodeName;
                        1 != c && (b += "[" + c + "]");
                        a.parentNode && (b = n(a.parentNode) + "/" + b);
                        return b
                    }

                    function w() {
                        var a = h.images;
                        a && a.length && e(a, function(a) {
                            var b = a.getAttribute("src");
                            f(b, "img", a);
                            g(b, "img", a)
                        })
                    }

                    function x() {
                        var a = h.scripts;
                        a && a.length && e(a, function(a) {
                            var b = a.getAttribute("src");
                            f(b, "script", a);
                            g(b, "script", a)
                        })
                    }

                    function y() {
                        var a = h.styleSheets;
                        a && a.length && e(a, function(a) {
                            if (a = a.ownerNode) {
                                var b = a.getAttribute("href");
                                f(b, "style", a);
                                g(b, "style", a)
                            }
                        })
                    }

                    function z() {
                        if (A) {
                            var a = q();
                            e(a, function(a) {
                                f(a.name, a.initiatorType)
                            })
                        }
                    }

                    function B() {
                        e(q(), function(a) {
                            g(a.name, a.initiatorType)
                        })
                    }

                    function r() {
                        var a;
                        a = d.location && d.location.protocol ? d.location.protocol : void 0;
                        "https:" == a && (z(), w(), x(), y(), B(), p < C && setTimeout(r, D))
                    }
                    var s = "[CSM] Insecure content detected ",
                        t = "[CSM] Ajax request to same page detected ",
                        v = "WARN",
                        m = {},
                        p = 0,
                        D = k.ue_nsip || 1E3,
                        C = 5,
                        A = 1 == k.ue_urt,
                        u = !0;
                    ue_csm.ue_disableNonSecure || (d.performance && d.performance.setResourceTimingBufferSize && d.performance.setResourceTimingBufferSize(300), r())
                })(ue_csm, window, document);


                var ue_aa_a = "";
                if (ue.trigger && (ue_aa_a === "C" || ue_aa_a === "T1")) {
                    ue.trigger("UEDATA_AA_SERVERSIDE_ASSIGNMENT_CLIENTSIDE_TRIGGER_190249", ue_aa_a);
                }
                (function(f, b) {
                    function g() {
                        try {
                            b.PerformanceObserver && "function" === typeof b.PerformanceObserver && (a = new b.PerformanceObserver(function(b) {
                                c(b.getEntries())
                            }), a.observe(d))
                        } catch (h) {
                            k()
                        }
                    }

                    function m() {
                        for (var h = d.entryTypes, a = 0; a < h.length; a++) c(b.performance.getEntriesByType(h[a]))
                    }

                    function c(a) {
                        if (a && Array.isArray(a)) {
                            for (var c = 0, e = 0; e < a.length; e++) {
                                var d = l.indexOf(a[e].name);
                                if (-1 !== d) {
                                    var g = Math.round(b.performance.timing.navigationStart + a[e].startTime);
                                    f.uet(n[d], void 0, void 0, g);
                                    c++
                                }
                            }
                            l.length ===
                                c && k()
                        }
                    }

                    function k() {
                        a && a.disconnect && "function" === typeof a.disconnect && a.disconnect()
                    }
                    if ("function" === typeof f.uet && b.performance && "object" === typeof b.performance && b.performance.getEntriesByType && "function" === typeof b.performance.getEntriesByType && b.performance.timing && "object" === typeof b.performance.timing && "number" === typeof b.performance.timing.navigationStart) {
                        var d = {
                                entryTypes: ["paint"]
                            },
                            l = ["first-paint", "first-contentful-paint"],
                            n = ["fp", "fcp"],
                            a;
                        try {
                            m(), g()
                        } catch (p) {
                            f.ueLogError(p, {
                                logLevel: "ERROR",
                                attribution: "performanceMetrics"
                            })
                        }
                    }
                })(ue_csm, window);


                if (window.csa) {
                    csa("Events")("setEntity", {
                        page: {
                            pageType: "Gateway",
                            subPageType: "desktop",
                            pageTypeId: "desktop"
                        }
                    });
                }
                csa.plugin(function(e) {
                    var i = "transitionStart",
                        n = "pageVisible",
                        t = "PageTiming",
                        a = "visibilitychange",
                        o = e("Events", {
                            producerId: "csa"
                        }),
                        r = (e.global.performance || {}).timing,
                        d = ["navigationStart", "unloadEventStart", "unloadEventEnd", "redirectStart", "redirectEnd", "fetchStart", "domainLookupStart", "domainLookupEnd", "connectStart", "connectEnd", "secureConnectionStart", "requestStart", "responseStart", "responseEnd", "domLoading", "domInteractive", "domContentLoadedEventStart", "domContentLoadedEventEnd", "domComplete", "loadEventStart", "loadEventEnd"],
                        c = e.config,
                        l = e.global.document || {},
                        s = (r || {}).navigationStart,
                        u = s,
                        m = {},
                        g = 0,
                        v = 0,
                        f = c[t + ".BatchInterval"] || 3e3,
                        p = 0,
                        S = !0;
                    if (!c["KillSwitch." + t]) {
                        if (!r || null === s || s <= 0 || void 0 === s) return e.error("Invalid navigation timing data: " + s);
                        "boolean" != typeof l.hidden && "string" != typeof l.visibilityState || !l.removeEventListener || ((S = L()) ? (E(n, s), b()) : e.on(l, a, function t() {
                            (S = L()) && (u = e.time(), l.removeEventListener(a, t), E(n, u), E(i, u), b())
                        })), e.once("$unload", h), e.once("$load", h), e.on("$beforePageTransition", y), e.on("$pageTransition", function() {
                            u = e.time()
                        }), e.register(t, {
                            mark: E
                        })
                    }

                    function E(t, n) {
                        null != t && (n = n || e.time(), t === i && (u = n), m[t] = n, b(), e.emit("$timing:" + t, n))
                    }

                    function h() {
                        ! function() {
                            if (p) return;
                            for (var t = 0; t < d.length; t++) r[d[t]] && E(d[t], r[d[t]]);
                            p = 1
                        }(), g = 1, b(!0)
                    }

                    function b(t) {
                        g && S && !v && (v = e.timeout(y, t ? 0 : f))
                    }

                    function y() {
                        0 < Object.keys(m).length && (o("log", {
                            markers: function(t, n) {
                                var e = {};
                                for (var i in t) t.hasOwnProperty(i) && (e[i] = Math.max(0, t[i] - n));
                                return e
                            }(m, u),
                            markerTimestamps: function(t) {
                                for (var n in t) t.hasOwnProperty(n) && (t[n] = Math.floor(t[n]));
                                return t
                            }(m),
                            navigationStartTimestamp: u ? new Date(u).toISOString() : null,
                            schemaId: "<ns>.PageLatency.5"
                        }, {
                            ent: {
                                page: ["pageType", "subPageType", "requestId"]
                            }
                        }), m = {}), v = 0
                    }

                    function L() {
                        return !l.hidden || "visible" === l.visibilityState
                    }
                });
                csa.plugin(function(t) {
                    var a, f = "length",
                        u = "parentElement",
                        i = "target",
                        r = "getEntriesByName",
                        o = "_osrc",
                        c = "_elt",
                        d = "_eid",
                        l = 10,
                        h = 5,
                        g = 10,
                        s = 100,
                        m = t.global,
                        n = t.timeout,
                        e = m.Math,
                        v = e.max,
                        p = e.floor,
                        E = e.ceil,
                        y = m.document,
                        x = m.performance || {},
                        w = (x.timing || {}).navigationStart,
                        O = Date.now,
                        S = Object.values,
                        T = t("PageTiming"),
                        b = t("SpeedIndexBuffers"),
                        I = [],
                        N = [],
                        B = [],
                        H = [],
                        L = [],
                        W = .1,
                        _ = .1,
                        k = 0,
                        C = 0,
                        P = !0,
                        R = 0,
                        X = 0,
                        Y = 0,
                        $ = 0,
                        F = 1,
                        V = 0,
                        j = [],
                        D = 0;

                    function M() {
                        for (var e = O(), n = 0; a;) {
                            if (0 !== a[f]) {
                                if (!1 !== a.h(a[0]) && a.shift(), n++, !Y && n % l == 0 && O() - e > h) break
                            } else a = a.n
                        }
                        k = 0, a && 0 < a[f] && (k = k || t.raf(M))
                    }

                    function q(e, n, t, i) {
                        V = p(e), I = n, N = t, L = i;
                        var r = y.createTreeWalker(y.body, NodeFilter.SHOW_TEXT, null, null),
                            o = {
                                w: m.innerWidth,
                                h: m.innerHeight,
                                x: m.pageXOffset,
                                y: m.pageYOffset
                            };
                        y.body[c] = e, B.push({
                            w: r,
                            vp: o
                        }), H.push({
                            img: y.images,
                            iter: 0
                        }), I.h = z, (I.n = N).h = A, (N.n = B).h = G, (B.n = H).h = J, (H.n = L).h = K, a = I, M()
                    }

                    function z(e) {
                        e.m.forEach(function(e) {
                            var n = e[i];
                            o in n || (n[o] = e.oldValue)
                        })
                    }

                    function A(n) {
                        n.m.forEach(function(e) {
                            e[i][c] = n.t - w
                        })
                    }

                    function G(e) {
                        for (var n, t = e.vp, i = e.w, r = l;
                            (n = i.nextNode()) && 0 < r;) {
                            r -= 1;
                            var o = (n[u] || {}).nodeName;
                            "SCRIPT" !== o && "STYLE" !== o && "NOSCRIPT" !== o && 0 !== (n.nodeValue || "").trim()[f] && Z(n[u], Q(n), t)
                        }
                        return !n
                    }

                    function J(e) {
                        for (var n, t = {
                                w: m.innerWidth,
                                h: m.innerHeight,
                                x: m.pageXOffset,
                                y: m.pageYOffset
                            }, i = l; e.iter < e.img[f] && 0 < i;) {
                            var r = e.img[e.iter];
                            Z(r, U((n = r)[o], n) || U(n.currentSrc, n) || U(n.src, n), t), e.iter += 1, i -= 1
                        }
                        return e.img[f] <= e.iter
                    }

                    function K(e) {
                        var n = [],
                            i = 0,
                            r = 0,
                            o = C,
                            t = p(e.y / s),
                            a = E((e.y + m.innerHeight) / s);
                        j.slice(t, a).forEach(function(e) {
                            (e.elems || []).forEach(function(e) {
                                e.lt in n || (n[e.lt] = {}), e.id in n[e.lt] || (i += (n[e.lt][e.id] = e).a)
                            })
                        }), S(n).forEach(function(e) {
                            S(e).forEach(function(e) {
                                var n = 1 - r / i,
                                    t = v(e.lt, o);
                                D += n * (t - o), o = t,
                                    function(e, n) {
                                        for (; W <= 1 && W - .01 <= e;) ee("visuallyLoaded" + (100 * W).toFixed(0), n), W += _
                                    }((r += e.a) / i, e.lt)
                            })
                        }), C = e.t - w, L[f] <= 1 && (ee("speedIndex", D), ee("visuallyLoaded0", V)), P && (P = !1, ee("atfSpeedIndex", D))
                    }

                    function Q(e) {
                        for (var n = e[u], t = g; n && 0 < t;) {
                            if (n[c] || 0 === n[c]) return v(n[c], V);
                            n = n.parentElement, t -= 1
                        }
                    }

                    function U(e, n) {
                        if (e) {
                            if (!e.indexOf("data:")) return Q(n);
                            var t = x[r](e) || [];
                            if (0 < t[f]) return v(E(t[0].responseEnd || 0), V)
                        }
                    }

                    function Z(e, n, t) {
                        if ((n || 0 === n) && !e[d]) {
                            var i = e.getBoundingClientRect(),
                                r = i.width * i.height,
                                o = i.width / 2,
                                a = F++;
                            if (0 != r && !(o < i.right - t.w || i.right < o)) {
                                for (var f = {
                                        e: e,
                                        lt: n,
                                        a: r,
                                        id: a
                                    }, u = p((i.top + t.y) / s), c = E((i.top + t.y + i.height) / s), l = u; l <= c; l++) l in j || (j[l] = {
                                    elems: [],
                                    lt: 0
                                }), j[l].elems.push(f);
                                e[d] = a
                            }
                        }
                    }

                    function ee(e, n) {
                        T("mark", e, w + E(n || 0))
                    }

                    function ne() {
                        $ || (b("getBuffers", q), $ = 1)
                    }
                    w && S && x[r] && (b("registerListener", function(e) {
                        X && (clearTimeout(R), R = n(ne, 2500))
                    }), t.once("$unload", function() {
                        Y = 1, ne()
                    }), t.once("$load", function() {
                        X = 1, R = n(ne, 2500)
                    }), t.once("$timing:functional", ne))
                });
                csa.plugin(function(e) {
                    var m = !!e.config["LCP.elementDedup"],
                        t = !1,
                        n = e("PageTiming"),
                        r = e.global.PerformanceObserver,
                        a = e.global.performance;

                    function i() {
                        return a.timing.navigationStart
                    }

                    function o() {
                        t || function(o) {
                            var l = new r(function(e) {
                                var t = e.getEntries();
                                if (0 !== t.length) {
                                    var n = t[t.length - 1];
                                    if (m && "" !== n.id && n.element && "IMG" === n.element.tagName) {
                                        for (var r = {}, a = t[0], i = 0; i < t.length; i++) t[i].id in r || ("" !== t[i].id && (r[t[i].id] = !0), a.startTime < t[i].startTime && (a = t[i]));
                                        n = a
                                    }
                                    l.disconnect(), o({
                                        startTime: n.startTime,
                                        renderTime: n.renderTime,
                                        loadTime: n.loadTime
                                    })
                                }
                            });
                            try {
                                l.observe({
                                    type: "largest-contentful-paint",
                                    buffered: !0
                                })
                            } catch (e) {}
                        }(function(e) {
                            e && (t = !0, n("mark", "largestContentfulPaint", Math.floor(e.startTime + i())), e.renderTime && n("mark", "largestContentfulPaint.render", Math.floor(e.renderTime + i())), e.loadTime && n("mark", "largestContentfulPaint.load", Math.floor(e.loadTime + i())))
                        })
                    }
                    r && a && a.timing && (e.once("$unload", o), e.once("$load", o), e.register("LargestContentfulPaint", {}))
                });
                csa.plugin(function(r) {
                    var e = r("Metrics", {
                            producerId: "csa"
                        }),
                        n = r.global.PerformanceObserver;
                    n && (n = new n(function(r) {
                        var t = r.getEntries();
                        if (0 === t.length || !t[0].processingStart || !t[0].startTime) return;
                        ! function(r) {
                            r = r || 0, n.disconnect(), 0 <= r ? e("recordMetric", "firstInputDelay", r) : e("recordMetric", "firstInputDelay.invalid", 1)
                        }(t[0].processingStart - t[0].startTime)
                    }), function() {
                        try {
                            n.observe({
                                type: "first-input",
                                buffered: !0
                            })
                        } catch (r) {}
                    }())
                });
                csa.plugin(function(d) {
                    var e = "Metrics",
                        r = d.config,
                        u = r[e + ".BatchInterval"] || 3e3;

                    function n(e) {
                        var r = e.producerId,
                            n = e.logger,
                            t = n || d("Events", {
                                producerId: r
                            }),
                            i = {},
                            o = (e || {}).dimensions || {},
                            c = 0;
                        if (!r && !n) return d.error("Either a producer id or custom logger must be defined");

                        function s() {
                            Object.keys(i).length && (t("log", {
                                schemaId: e.schemaId || "<ns>.Metric.3",
                                metrics: i,
                                dimensions: o
                            }, e.logOptions || {
                                ent: {
                                    page: ["pageType", "subPageType", "requestId"]
                                }
                            }), i = {}), c = 0
                        }
                        this.recordMetric = function(e, r) {
                            i[e] = r, c = c || d.timeout(s, u)
                        }, d.on("$beforeunload", s), d.on("$beforePageTransition", s)
                    }
                    r["KillSwitch." + e] || (new n({
                        producerId: "csa"
                    }).recordMetric("baselineMetricEvent", 1), d.register(e, {
                        instance: function(e) {
                            return new n(e || {})
                        }
                    }))
                });
                csa.plugin(function(c) {
                    var e = "Timers",
                        r = (c.global.performance || {}).timing,
                        u = (r || {}).navigationStart || c.time(),
                        s = c.config[e + ".BatchInterval"] || 3e3;

                    function n(e) {
                        var r = (e = e || {}).producerId,
                            n = e.logger,
                            o = {},
                            t = 0,
                            i = n || c("Events", {
                                producerId: r
                            });
                        if (!r && !n) return c.error("Either a producer id or custom logger must be defined");

                        function a() {
                            0 < Object.keys(o).length && (i("log", {
                                markers: o,
                                schemaId: e.schemaId || "<ns>.Timer.1"
                            }, e.logOptions), o = {}), clearTimeout(t), t = 0
                        }
                        this.mark = function(e, r) {
                            o[e] = (void 0 === r ? c.time() : r) - u, t = t || c.timeout(a, s)
                        }, c.once("$beforeunload", a), c.once("$beforePageTransition", a)
                    }
                    r && c.register(e, {
                        instance: function(e) {
                            return new n(e || {})
                        }
                    })
                });
                csa.plugin(function(t) {
                    var e = "takeRecords",
                        i = "disconnect",
                        n = "function",
                        o = "removeEventListener",
                        c = "click",
                        a = t("Metrics", {
                            producerId: "csa"
                        }),
                        r = t("PageTiming"),
                        u = t.global,
                        f = t.timeout,
                        m = t.on,
                        l = u.PerformanceObserver,
                        s = 0,
                        d = !1,
                        v = 0,
                        h = u.performance,
                        y = u.document,
                        g = null,
                        p = !1;

                    function T() {
                        d || (d = !0, clearTimeout(g), typeof l[e] === n && l[e](), typeof l[i] === n && l[i](), a("recordMetric", "documentCumulativeLayoutShift", s), r("mark", "cumulativeLayoutShiftLastTimestamp", Math.floor(v + h.timing.navigationStart)))
                    }
                    l && h && h.timing && y && (l = new l(function(t) {
                        g && clearTimeout(g);
                        t.getEntries().forEach(function(t) {
                            t.hadRecentInput || (s += t.value, v < t.startTime && (v = t.startTime))
                        }), g = f(T, 5e3)
                    }), function() {
                        try {
                            l.observe({
                                type: "layout-shift",
                                buffered: !0
                            }), g = f(T, 5e3)
                        } catch (t) {}
                    }(), m(y, c, function t(e) {
                        p || (p = !0, a("recordMetric", "documentCumulativeLayoutShiftToFirstInput", s), y[o](c, t))
                    }), m(y, "visibilitychange", function() {
                        "hidden" === y.visibilityState && T()
                    }), t.once("$unload", T))
                });
                csa.plugin(function(e) {
                    var t, n = e.global,
                        r = n.PerformanceObserver,
                        c = e("Metrics", {
                            producerId: "csa"
                        }),
                        o = 0,
                        i = 0,
                        a = -1,
                        l = n.Math,
                        f = l.max,
                        u = l.ceil;
                    if (r) {
                        t = new r(function(e) {
                            e.getEntries().forEach(function(e) {
                                var t = e.duration;
                                o += t, i += t, a = f(t, a)
                            })
                        });
                        try {
                            t.observe({
                                type: "longtask",
                                buffered: !0
                            })
                        } catch (e) {}
                        t = new r(function(e) {
                            0 < e.getEntries().length && (i = 0, a = -1)
                        });
                        try {
                            t.observe({
                                type: "largest-contentful-paint",
                                buffered: !0
                            })
                        } catch (e) {}
                        e.on("$unload", g), e.on("$beforePageTransition", g)
                    }

                    function g() {
                        c("recordMetric", "totalBlockingTime", u(i || 0)), c("recordMetric", "totalBlockingTimeInclLCP", u(o || 0)), c("recordMetric", "maxBlockingTime", u(a || 0)), i = o = 0, a = -1
                    }
                });
                csa.plugin(function(r) {
                    var e = "CacheDetection",
                        o = "csa-ctoken-",
                        n = r.store,
                        c = r.deleteStored,
                        t = r.config,
                        a = t[e + ".RequestID"],
                        s = t[e + ".Callback"],
                        i = r.global,
                        u = i.document || {},
                        d = i.Date,
                        f = r("Events"),
                        l = r("Events", {
                            producerId: "csa"
                        });

                    function p(e) {
                        try {
                            var n = u.cookie.match(RegExp("(^| )" + e + "=([^;]+)"));
                            return n && n[2].trim()
                        } catch (e) {}
                    }! function() {
                        var e = function() {
                                var e = p("cdn-rid");
                                if (e) return {
                                    r: e,
                                    s: "cdn"
                                }
                            }() || function() {
                                if (r.store(o + a)) return {
                                    r: r.UUID().toUpperCase().replace(/-/g, "").slice(0, 20),
                                    s: "device"
                                }
                            }() || {},
                            n = e.r,
                            t = e.s;
                        if (!!n) {
                            var c = p("session-id");
                            ! function(e, n, t) {
                                f("setEntity", {
                                    page: {
                                        pageSource: "cache",
                                        requestId: e,
                                        cacheRequestId: a
                                    },
                                    session: {
                                        id: t
                                    }
                                }), l("log", {
                                    schemaId: "<ns>.CacheImpression.1"
                                }, {
                                    ent: "all"
                                })
                            }(n, 0, c), s && s(n, c, t)
                        }
                    }(), n(o + a, d.now() + 36e5), r.once("$load", function() {
                        var t = d.now();
                        c(function(e, n) {
                            return 0 == e.indexOf(o) && parseInt(n) < t
                        })
                    })
                });
                csa.plugin(function(c) {
                    var i, t = "Content",
                        e = "MutationObserver",
                        n = "addedNodes",
                        u = "querySelectorAll",
                        a = "matches",
                        r = "getAttributeNames",
                        o = "getAttribute",
                        s = "dataset",
                        f = "widget",
                        l = "producerId",
                        d = {
                            ent: {
                                element: 1,
                                page: ["pageType", "subPageType", "requestId"]
                            }
                        },
                        h = 5,
                        g = c.config[t + ".BubbleUp.SearchDepth"] || 10,
                        m = "csaC",
                        p = m + "Id",
                        v = {},
                        y = c.config,
                        b = y[t + ".Selectors"] || [],
                        E = y[t + ".WhitelistedAttributes"] || {
                            href: 1,
                            class: 1
                        },
                        I = y[t + ".EnableContentEntities"],
                        w = c.global,
                        C = w.document || {},
                        A = C.documentElement,
                        U = w.HTMLElement,
                        k = {},
                        L = [],
                        N = function(t, e, n, i) {
                            var r = this,
                                o = c("Events", {
                                    producerId: t || "csa"
                                });
                            e.type = e.type || f, r.id = e.id, r.l = o, r.e = e, r.el = n, r.rt = i, r.dlo = d, r.log = function(t, e) {
                                o("log", t, e || d)
                            }, e.id && o("setEntity", {
                                element: e
                            })
                        },
                        O = N.prototype;

                    function D(t) {
                        var e = (t = t || {}).element,
                            n = t.target;
                        return e ? function(t, e) {
                            var n;
                            n = t instanceof U ? _(t) || M(e[l], t, B, c.time()) : k[t.id] || $(e[l], 0, t, c.time());
                            return n
                        }(e, t) : n ? function(t) {
                            var e, n = function(t) {
                                var e = null,
                                    n = 0;
                                for (; t && n < g;) {
                                    if (n++, S(t, p)) {
                                        e = t;
                                        break
                                    }
                                    t = t.parentElement
                                }
                                return e
                            }(t);
                            e = n ? _(n) : new N("csa", {
                                id: null
                            }, null, c.time());
                            return e
                        }(n) : c.error("No element or target argument provided.")
                    }

                    function S(t, e) {
                        if (t && t.dataset) return t.dataset[e]
                    }

                    function T(t, e, n) {
                        L.push({
                            n: n,
                            e: t,
                            t: e
                        }), q()
                    }

                    function j() {
                        for (var t = c.time(), e = 0; 0 < L.length;) {
                            var n = L.shift();
                            if (v[n.n](n.e, n.t), ++e % 10 == 0 && c.time() - t > h) break
                        }
                        i = 0, L.length && q()
                    }

                    function q() {
                        i = i || c.raf(j)
                    }

                    function x(t, e, n) {
                        return {
                            n: t,
                            e: e,
                            t: n
                        }
                    }

                    function M(t, e, n, i) {
                        var r = c.UUID(),
                            o = {
                                id: r
                            };
                        return e[s][p] = r, n(o, e), $(t, e, o, i)
                    }

                    function $(t, e, n, i) {
                        I && (n.schemaId = "<ns>.ContentEntity.2"), n.id = n.id || c.UUID();
                        var r = new N(t, n, e, i);
                        return I && r.log({
                            schemaId: "<ns>.ContentRender.1",
                            timestamp: i
                        }), c.emit("$content.register", r), k[n.id] = r
                    }

                    function _(t) {
                        return k[(t[s] || {})[p]]
                    }

                    function B(t, e) {
                        r in e && (function(n, i) {
                            Object.keys(n[s]).forEach(function(t) {
                                if (!t.indexOf(m) && m.length < t.length) {
                                    var e = function(t) {
                                        return (t[0] || "").toLowerCase() + t.slice(1)
                                    }(t.slice(m.length));
                                    i[e] = n[s][t]
                                }
                            })
                        }(e, t), function(e, n) {
                            (e[r]() || []).forEach(function(t) {
                                t in E && (n[t] = e[o](t))
                            })
                        }(e, t))
                    }
                    A && C[u] && w[e] && (b.push({
                        selector: "*[data-csa-c-type]",
                        entity: B
                    }), b.push({
                        selector: ".celwidget",
                        entity: function(t, e) {
                            B(t, e), t.slotId = t.slotId || e[o]("cel_widget_id") || e.id, t.type = t.type || f
                        }
                    }), v[1] = function(t, e) {
                        t.forEach(function(t) {
                            t[n] && t[n].constructor && "NodeList" === t[n].constructor.name && Array.prototype.forEach.call(t[n], function(t) {
                                L.unshift(x(2, t, e))
                            })
                        })
                    }, v[2] = function(o, c) {
                        u in o && a in o && b.forEach(function(t) {
                            var e = t.selector,
                                n = o[a](e),
                                i = o[u](e);
                            n && L.unshift(x(3, {
                                e: o,
                                s: t
                            }, c));
                            for (var r = 0; r < i.length; r++) L.unshift(x(3, {
                                e: i[r],
                                s: t
                            }, c))
                        })
                    }, v[3] = function(t, e) {
                        var n = t.e;
                        _(n) || M("csa", n, t.s.entity, e)
                    }, v[4] = function() {
                        c.register(t, {
                            instance: D
                        })
                    }, new w[e](function(t) {
                        T(t, c.time(), 1)
                    }).observe(A, {
                        childList: !0,
                        subtree: !0
                    }), T(A, c.time(), 2), T(null, c.time(), 4), c.on("$content.export", function(e) {
                        Object.keys(e).forEach(function(t) {
                            O[t] = e[t]
                        })
                    }))
                });
                csa.plugin(function(n) {
                    var i, t = "ContentImpressions",
                        e = "KillSwitch.",
                        o = "IntersectionObserver",
                        r = "getAttribute",
                        s = "dataset",
                        c = "intersectionRatio",
                        a = "csaCId",
                        m = 1e3,
                        l = n.global,
                        f = n.config,
                        u = f[e + t],
                        g = f[e + t + ".ContentViews"],
                        v = ((l.performance || {}).timing || {}).navigationStart || n.time(),
                        d = {};

                    function h(t) {
                        t && (t.v = 1, function(t) {
                            t.vt = n.time(), t.el.log({
                                schemaId: "<ns>.ContentView.2",
                                timeToViewed: t.vt - t.el.rt,
                                pageFirstPaintToElementViewed: t.vt - v
                            })
                        }(t))
                    }

                    function I(t) {
                        t && !t.it && (t.i = n.time() - t.is > m, function(t) {
                            t.it = n.time(), t.el.log({
                                schemaId: "<ns>.ContentImpressed.2",
                                timeToImpressed: t.it - t.el.rt,
                                pageFirstPaintToElementImpressed: t.it - v
                            })
                        }(t))
                    }!u && l[o] && (i = new l[o](function(t) {
                        t.forEach(function(t) {
                            var e = function(t) {
                                if (t && t[r]) return d[t[s][a]]
                            }(t.target);
                            if (e) {
                                var i = t.intersectionRect;
                                t.isIntersecting && 0 < i.width && 0 < i.height && (g || e.v || h(e), .5 <= t[c] && !e.is && (e.is = n.time(), e.timer = n.timeout(function() {
                                    I(e)
                                }, m))), t[c] < .5 && !e.it && e.timer && (l.clearTimeout(e.timer), e.is = 0, e.timer = 0)
                            }
                        })
                    }, {
                        threshold: [0, .5]
                    }), n.on("$content.register", function(t) {
                        var e = t.el;
                        e && (d[t.id] = {
                            el: t,
                            v: 0,
                            i: 0,
                            is: 0,
                            vt: 0,
                            it: 0
                        }, i.observe(e))
                    }))
                });
                csa.plugin(function(e) {
                    e.config["KillSwitch.ContentLatency"] || e.emit("$content.export", {
                        mark: function(t, n) {
                            var o = this;
                            o.t || (o.t = e("Timers", {
                                logger: o.l,
                                schemaId: "<ns>.ContentLatency.1",
                                logOptions: o.dlo
                            })), o.t("mark", t, n)
                        }
                    })
                });
                csa.plugin(function(d) {
                    var t, i = "normal",
                        s = "reload",
                        n = "history",
                        o = "new-tab",
                        e = "ajax",
                        a = 1,
                        r = 2,
                        c = "lastActive",
                        u = "lastInteraction",
                        l = "used",
                        f = "csa-tabbed-browsing",
                        p = "visibilityState",
                        g = {
                            "back-memory-cache": 1,
                            "tab-switch": 1,
                            "history-navigation-page-cache": 1
                        },
                        v = "<ns>.TabbedBrowsing.2",
                        b = "visible",
                        m = d.global,
                        y = d("Events", {
                            producerId: "csa"
                        }),
                        I = m.location || {},
                        h = m.document,
                        T = m.JSON,
                        w = ((m.performance || {}).navigation || {}).type,
                        z = d.store,
                        P = d.on,
                        S = d.storageSupport(),
                        k = !1,
                        x = {},
                        A = {},
                        C = {},
                        O = {},
                        $ = !1,
                        j = !1,
                        q = !1;

                    function B(i) {
                        try {
                            return T.parse(z(f, void 0, {
                                session: i
                            }) || "{}") || {}
                        } catch (i) {
                            d.error('Could not parse storage value for key "' + f + '": ' + i)
                        }
                        return {}
                    }

                    function E(i, t) {
                        z(f, T.stringify(t || {}), {
                            session: i
                        })
                    }

                    function J(i) {
                        var t = A.tid || i.id,
                            n = x[c] || {};
                        n.tid === t && (n.pid = i.id), O = {
                            pid: i.id,
                            tid: t,
                            lastInteraction: A[u] || {},
                            initialized: !0
                        }, C = {
                            lastActive: n,
                            lastInteraction: x[u] || {},
                            time: d.time()
                        }
                    }

                    function N(i) {
                        var t = i === o,
                            n = h.referrer,
                            e = !(n && n.length) || !~n.indexOf(I.origin || ""),
                            a = t && e,
                            r = {
                                type: i,
                                toTabId: O.tid,
                                toPageId: O.pid,
                                transitTime: d.time() - x.time || null
                            };
                        a || function(i, t, n) {
                            var e = i === s,
                                a = t ? x[c] || {} : A,
                                r = x[u] || {},
                                d = A[u] || {},
                                o = t ? r : d;
                            n.fromTabId = a.tid, n.fromPageId = a.pid, e || !o.id || o[l] || (n.interactionId = o.id || null, r.id === o.id && (r[l] = !0), d.id === o.id && (d[l] = !0))
                        }(i, t, r), y("log", {
                            navigation: r,
                            schemaId: v
                        }, {
                            ent: {
                                page: ["pageType", "subPageType", "requestId"]
                            }
                        })
                    }

                    function D(i) {
                        q = function(i) {
                                return i && i in g
                            }(i.transitionType),
                            function() {
                                x = B(!1), A = B(!0);
                                var i = x[u],
                                    t = A[u],
                                    n = !1,
                                    e = !1;
                                i && t && i.id === t.id && i[l] !== t[l] && (n = !i[l], e = !t[l], t[l] = i[l] = !0, n && E(!1, x), e && E(!0, A))
                            }(), J(i), $ = !0,
                            function(i) {
                                var t, n;
                                t = G(), n = H(), (t || n) && J(i)
                            }(i)
                    }

                    function F() {
                        k && !q ? N(e) : (k = !0, N(w === r || q ? n : w === a ? A.initialized ? s : o : A.initialized ? i : o))
                    }

                    function G() {
                        return !(!$ || !t) && (A[u] = {
                            id: t.messageId,
                            used: !(x[u] = {
                                id: t.messageId,
                                used: !1
                            })
                        }, !(t = null))
                    }

                    function H() {
                        var i = !1;
                        if (j = h[p] === b, $) {
                            var t = x[c] || {};
                            i = function(i, t, n) {
                                var e = !1,
                                    a = i[c];
                                return j ? a && a.tid === O.tid && a[b] && a.pid === n || (i[c] = {
                                    visible: !0,
                                    pid: n,
                                    tid: t
                                }, e = !0) : a && a.tid === O.tid && a[b] && (e = !(a[b] = !1)), e
                            }(x, A.tid || t.tid || O.tid, A.pid || t.pid || O.pid)
                        }
                        return i
                    }
                    S.local && S.session && T && h && p in h && (P("$pageChange", function(i) {
                        D(i), F(), E(!1, C), E(!0, O), A = O, x = C
                    }, {
                        buffered: 1
                    }), P("$content.interaction", function(i) {
                        t = i, G() && (E(!1, x), E(!0, A))
                    }), P(h, "visibilitychange", function() {
                        H() && E(!1, x)
                    }, {
                        capture: !1,
                        passive: !0
                    }))
                });
                csa.plugin(function(c) {
                    var e = c("Metrics", {
                        producerId: "csa"
                    });
                    c.on(c.global, "pageshow", function(c) {
                        c && c.persisted && e("recordMetric", "bfCache", 1)
                    })
                });
                if (window.ue && window.ue.uels) {
                    ue.uels("https://c.amazon-adsystem.com/bao-csm/forensics/a9-tq-forensics.min.js");
                }


            }
            /* ??? */
        </script>

    </div>

    <noscript>
    <img height="1" width="1" style='display:none;visibility:hidden;' src='//fls-eu.amazon.in/1/batch/1/OP/A21TJRUUN4KGV:257-8400121-7204450:WMZVJ0QZ56QFCB33E37K$uedata=s:%2Frd%2Fuedata%3Fnoscript%26id%3DWMZVJ0QZ56QFCB33E37K:0' alt=""/>
</noscript>

    </div>
</body>

</html>
<!--       _
       .__(.)< (MEOW)
        \___)   
 ~~~~~~~~~~~~~~~~~~-->
<!-- sp:eh:741JT77+lCut/IS//X+Z4XxXEE9XiNpT7ZhBf0jWJkgcPEHOw/z5S+UIAKxeXapqJw5nYF61iqqax+dnbQKIaOvyRXc8uNe8I6KuwOxqrkh+RTNSlB4xV2AEiUo= -->