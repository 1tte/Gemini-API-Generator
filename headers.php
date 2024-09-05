<?php

// Define the hosts
$consoleHost = 'cloudconsole-pa.clients6.google.com';
$apiHost = 'apikeys.clients6.google.com';
$cookiez = 'SEARCH_SAMESITE=CgQI7ZsB; AEC=AVYB7coW75yjBjW4FvJkO5bovTxvAd71KZSycGR_3YjENCp0CiLKNTKHn-s; __Secure-1PSIDTS=sidts-CjEBUFGoh5PUQNAjpDSngn4oxCK9yqRb-lGuJAdukLzXh1Qa68YCTTfjZpN4FUlR0BlHEAA; __Secure-3PSIDTS=sidts-CjEBUFGoh5PUQNAjpDSngn4oxCK9yqRb-lGuJAdukLzXh1Qa68YCTTfjZpN4FUlR0BlHEAA; NID=517=IqT_C9AjJz1NavtuAiOX9ufcUdQJtiyfj-NiZbU3ahmf2XBs-myceLoR7Bg-b450KRQcg2RHRS6KuCThVPbCzjuvYOjbs3pGSY6Iw6mPSiQlpIhX1Hrk4ylRV0adxQuVF9eJx8paIJdMsg9Cpd--W5KErNq1tZdj-PURRPDYXTklvZ9FG_d4-5JQgBau9kKzRJM5UZ1vytIVxJJE9IwxKBs6JqYynHtSyEZdmbaJMNPiASz6A5VzgtbiJk1UggBMKFW07nYazkmVuLFVdCcCS1sAQw_eyRxwZwEQJUNIzwGfWBvIE6qPflFMqHjS3TKal6_UPozyYjuwB8Nul0BRwqdEdDQCUxNrJHMVlSv4gSEL8nE8Q5JWc3dI3ErOexNpBA727q8pn1HQtD-WrTlSKRcOEQx_9Zeo_pNYsqOsGv749WjM72LP7s0vhzkL-2Mp0rnSSOz4jFIR3VDxRpkl_WCo-vc7qL2jMJzgn9Tm51L9Xk28pT8mHZ3FnRQ9Pz3_Gzt3ZKRdX7djrsraZXpgCA7arJ76IDA4KSfi-tuV-d8CxKl1F5-FM_Q-T5F2cnMppp_ezg1tIuNWrSrt_UNex1P9lOZZ0qEbFvdK10y5D0wbVrGDOT7rQQ2xv1Gc0b5gGalaa-4d-gajfbBjoAhyYYQEe5VAFhsQDgBOm7JPDeuAqy9VwGxGtcvCJEnkZP3LycROuUYwRg5FJzrFSg77hXWDXer2u4bNyhorS3YtncDhVnxjXkrxBKSF67PUx34KcpOAY0JrwmZ3ZjDXlJ9sl8CX565kI638qV87b9pQTKQMmiyiErSMENiqXf3tPfYX6I2M8oA_0QK7RmPqBFh_jISDzU4vVXlkbOPXPVJ5NwOg6-qvHSremCnMmY_Job7LompSASKGni_piDTuppBGraHHH9PuupyF6j4lEw4yI3jzAvXHGlPkK9OYVblOR4sCqri6dKlcgrfVdqKXtMMnaP0Gixod1VBbGisUkv99UN1n7DJdbW6PMFs9g6Cf50Y_osLQqglK02z61lywth1_4qfV9yyqt-NiAGfBTB5NjCh4yqIFwllIBwEjQFV2yJSetAQAW-AFox5wMnLfZVQc_nH-6w_FwClbV-ph5jbukbW9askKyy37vaB-VCnR_EqIoBnf3ERI03x_lj4Wn4l7LP6H-ruD-rLRTm2Hi5biIDzggNhas4REFmx6VqkLFcAajSB9wL_bK-vmJskvPw37KgTP4aZBaCloxv67mTV-RkfO24w_8yHXkXesLH7THjdkJHlqIk-GqwtG_akyP8NrSwGA_m61nwTFJD7pC4MArFQW0sLJID4MSmF1IPn0lUVUVjLSj-qaG9F9EfHHmAsBKcMBSGoXKGW9inYO_7C1s75M3TjVbMcrKpMJCPpp1WSxUGaQDZjUy8-TTya5qxotKoZ_CasUkOqEeKFf2zHEJ69Fh0RS__Mgb3X_kGKN1dqGLegBruVzMJ-r3D8bJAUpsGpNn6Yg_ZKfM3H3xcKeTVHTjjt0ndZz_HZA1jZB3pTBoCtJ1HzoJYe6rvllL5VYKPKIpWB5EPWPtUl9siY04BWK1YWtYzUI796IXbn-0wSsV0C9cP-uz-BjxhhHH4gpyA1FxYzY6TpF6KxzRnM7hooJlEvyWBoO_KixMF-RjlerEVaEGU17oYAl2-zkPaEeq25UCIYjbgqQ7qI7x2I-HNWjb_PyNwfJ5sxsDD9id_WjZ4SqbtoHFZ7r2m_jRb8W4-4p_3OHrU7JjfzHo9H-jqHs4k8Vh8KB-50VO_7tmAnrGD2vLaDaE95w673_b8U3mu7RK2jo2mPnHst8D6ot6qVzY1nurIJXVQ7XRzKCPBW8wlvDek2NmXkIbKTiF6IPhnIFJXwyxpkSfyK9oHtOCKGVkXCNAyzWuqAoc-k2Tgb65pQo9gCErDo3DAeNDq5sz-Usq5zRtVqoGjtD_qbcnX6flTMb1rbRrMPkImEUDZmNKMLgezYny9puptWaj9WDtDLpW8-m4VvMJwfzaUrpmPKQSNQZ2JWL-KzlykyJbWzIfHW-3YiLUsdkk5U_c7wnbEKOwHnGFfALHzOzNqh8uK0cSkUG3WzXC6atKFg2jTdTar-PN76MDN5TH8C_Mx2GOEjDAhEUE2Y7pDkfnuHfKIQ_XEnRnVA8kBywWYkTIWgkrqcl67grxwx9R1BhfRoqmndSW9FRIHXelO-93cx6AHBMKvkzGq4VnbimPpWJS36r1YZgYD5j_rYO-4F-k8E9xQOkdaStE7kZJ6VknoQBZ-ugct-BVhPd--09YZhHXSipwV2GHqNwC4VSUcGLYj5JKOIdhILAfC6PbpwA_xZyw6lg5Av51yGe_2ZhhjlcRp6__59IEkcEnYo6; SID=g.a000nQgK-p-eOefxTLCTHa1zUWzgfDUPKq9w90LfWpxXoFxwAWpS7NpGNbj3hrHMO0QFfvLUGgACgYKAb0SARUSFQHGX2MiTC7lIq2cKuUv6lXBdYSNOBoVAUF8yKoNIoahym9cU1QezcjRvl5S0076; __Secure-1PSID=g.a000nQgK-p-eOefxTLCTHa1zUWzgfDUPKq9w90LfWpxXoFxwAWpSv2vTJlVBULniXztc6y9IWQACgYKASsSARUSFQHGX2MiGb0PJBtV_UdMTOVY5n86GBoVAUF8yKp9lprGRIfNXbMwBH9ec0lT0076; __Secure-3PSID=g.a000nQgK-p-eOefxTLCTHa1zUWzgfDUPKq9w90LfWpxXoFxwAWpSy97g70tBIzamEFZGAa-n1AACgYKAaISARUSFQHGX2Mi5R_R9l5Has7MwzDBT3sRARoVAUF8yKp8UnwoaFS-Ks5QGez7orEX0076; HSID=AwFMaf7a6Tids6w9_; SSID=AyT095vhAXUzYVyMh; APISID=_E_F9VKvqvrCtgz8/Ao2qtFmu76jWKlng3; SAPISID=WeINYXRgIXE4pbJ1/A7Di2ZykBMjT4poOW; __Secure-1PAPISID=WeINYXRgIXE4pbJ1/A7Di2ZykBMjT4poOW; __Secure-3PAPISID=WeINYXRgIXE4pbJ1/A7Di2ZykBMjT4poOW; SIDCC=AKEyXzUxsu1FfrAZ2YGN3FLroQuB23AabEUruourlj7ZidBf-0Reavc2pCYMcOWPp_N0BAPV64HT; __Secure-1PSIDCC=AKEyXzWg_FmlCuldmjEM5IZEMcpSAmJ8W3uJ8dRXSVIioUijmMhh794LcRMc4imJVQJXcaTEm8sr; __Secure-3PSIDCC=AKEyXzV-gLzCY41bw8YKJdQb3_2gn0F9i2qqaeD5M7NgLxyZ3xjIDw1bSQNktiyGs2knM3oSwJk';

// Define the function to get headers
function getHeaders($host) {
    $commonHeaders = [
        'accept: */*',
        'accept-language: en-US,en;q=0.9',
        'authorization: SAPISIDHASH 1724558185_a0b28811848866f6ca83b81ea33e6afbed34bf84',
        'content-type: application/json',
        'origin: https://console.cloud.google.com',
        'priority: u=1, i',
        'referer: https://console.cloud.google.com/',
        'sec-ch-ua: "Chromium";v="128", "Not;A=Brand";v="24", "Google Chrome";v="128"',
        'sec-ch-ua-arch: "x86"',
        'sec-ch-ua-bitness: "64"',
        'sec-ch-ua-form-factors: "Desktop"',
        'sec-ch-ua-full-version: "128.0.6613.85"',
        'sec-ch-ua-full-version-list: "Chromium";v="128.0.6613.85", "Not;A=Brand";v="24.0.0.0", "Google Chrome";v="128.0.6613.85"',
        'sec-ch-ua-mobile: ?0',
        'sec-ch-ua-model: ""',
        'sec-ch-ua-platform: "Windows"',
        'sec-ch-ua-platform-version: "15.0.0"',
        'sec-ch-ua-wow64: ?0',
        'sec-fetch-dest: empty',
        'sec-fetch-mode: cors',
        'sec-fetch-site: same-site',
        'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36',
        'x-goog-authuser: 0',
        'x-goog-ext-353267353-jspb: [null,null,null,196818]',
        'x-goog-first-party-reauth: ["IVRVNmxUaGJOQUFhZzJfZ25nTnRDdFlsZl9PMlRnejA3QURRQkVBcloxRlItd3JuSVc0eTdsQjduZ3pVRmdZeHhPdmM5NTJZb0dmTzZmVi1abEQ4dG0zMWtqcjJmLWlqd0dnX1hrR25tQWdBQUFEQlNBQUFBQ0dnQkIzNEFQWVhqa3RMQzZURi05VTJleG10STd4dUxDZURza0hzREV2bndXUFNCMm81REVHaWhnNy1vajV1bUFxUjZiZ2tpVFdmaUNzcWRLTU5GdkdZbzVWNlpBeUhzQTVPMlpnRVFBUXQtMWtHZlp3UkpPNWRxLURFT05tUmt4SXA4Y3JidWR6RzFHd1poWWlleVVUZzFPUjNUT0JldU8zYzBXSkJnRHoxVDQwQlQ1Q2pfeUVzNkMwRWNCaEpWSFkwSllrdDl0LUlxOHNrc3NTejI2ZE5QQU5rNkdJRDlRTjVzXzNabk5CaVZ6aXZ3QUw4TVY2d1h5THBPMWpLVUxOU0V2LXpyR3JqRlZtZ3Y4T3AtR19ldjBaVEU0eUdNN2N3WEx5N2ZocTUxUWMwRlg3V3E4eGp6R3RadHV6a3JNaThaYlF1YVc2eHhKYzl1UjQ4WnRhMUxzbkJMdHZYSHJjendmel9FWXVGNXZXYUhSU2FDeHF6RzREcDBHek5mU1Z2V3Zna1pHYlhBV2FsdllRaVlyWmFjWEcxY1FBUVlYX3VnTEU5YjBOWl9kSDFMZnZkMkFQNlE3MXFRZXgycTZiU2d4VlUwWm5IckEtWjUyVHlPTWUwU1lqZGU0b2p5VjNuX0huYU1Pa2NPUnZaZ1ZHWWRickMwVXVvT1hZWC0tVEdzTk1NVG16NkJJMWZHcTM4WTdaNEF3NFR4emtNOWJ4STBxY25sODBEanI3ektHWGY3YlFXY214dWlHRXBnQmRlS3RxcmtnSFFvdm5ackVTdHBENkt0WkgwYXItYzVoM180RFBfeXBDbEY5aHh1Y2JWbkVUUEVWMEgxNUxqeFpwYmZxWVA1R2JhZlBkUFNhU20xT3Y2eHppRDJWREMxV1FpVEJSSklCN0dKMkFsZDNtVWJjcWJvYk9KOXNNSXp5TUk5bkRTcG9LN3RsZURIMGFKeDctb0J6bE1GLV9aSmN2MW5oMUtsV0NYYTA2VUxTQV92MjRLaGo1VlpQZlFHYmp1dlRYLXpDV21Qb1dMSFU1enUzM2VxbWViNWZEZ016djdtclJablczRUxQS3Bkdi0tSFF0amN6X0hKWjJDTFNyX3pRUkNXd1FaUkFZN2hTLXJDV2xHaWJ0OU9kYVJMdEwtSloySnZVYTh5U1FGdXNtMmxWd0M1c0dpRUQybklsV2swM2piaFM5Q2R3aHJ6T0FRVlhDdVA0dDFyc0c0cEljXy1TcFE0RXVBZ3ZlNUpPcGRhSjhvaU5kZTBSN21TT0ROVklvMXVhcTJ0S1NNSGswWFQtU09ZSnEtN2NMTktmaDJQZFlPY3k2Yk5kLVJfRG56MVdpbF9yNnFlVFRuWVV4T3NCcC02S2pCRXluYmhDQnh1QWhEOUlBNXZfcG9abU9CWGpRRVF5cDQ2c3hBdnZiaW1STG51OEcxd3RLVFA1MlBYbWJEZmQ0eXl3OGdaeGdwank1LURqdnlJdHNza0lhQnVsWWQtLUpRLWtuczZFRjlwZTNXQmxOWm1ZMFhYQXBfS3RFUGctN3M="]',
    ];

    return array_merge(["Host: $host"], $commonHeaders);
}


// Define headers and cookies
$headersConsole = getHeaders($consoleHost);
$headersApi = getHeaders($apiHost);