<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ártico Agencia Digital</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,600,600i,700,700i,900,900i|Roboto:300,300i,400,400i,500,500i,700,700i,900,900i"
          rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/main.min.css')}}"/>
    @yield('styles')
</head>
<body>
<header class="Header row middle center @yield('headerClass', '')">
    <div class="Header-bar row between middle">
        <figure>
            <svg width="167px" height="38px" viewBox="203 13 167 38" version="1.1" xmlns="http://www.w3.org/2000/svg"
                 xmlns:xlink="http://www.w3.org/1999/xlink">
                <defs>
                    <linearGradient x1="50%" y1="70.0028062%" x2="50%" y2="70.0028062%" id="linearGradient-1">
                        <stop stop-color="#538BF4" offset="0%"></stop>
                        <stop stop-color="#3974E3" offset="100%"></stop>
                    </linearGradient>
                </defs>
                <g id="Group-7" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"
                   transform="translate(204.000000, 15.000000)">
                    <path d="M46.2674419,26.0406504 L43.8070819,26.0406504 L42.0044419,21.2417304 L35.2323619,21.2417304 L33.4540819,26.0406504 L31.1155219,26.0406504 L37.4004019,10.2310104 L40.1287219,10.2310104 L46.2674419,26.0406504 Z M41.4198019,19.6096104 L38.7402019,12.4721304 L38.5209619,12.4721304 L35.8413619,19.6096104 L41.4198019,19.6096104 Z M42.1749619,5.82185041 L39.1299619,8.91557041 L37.3273219,8.91557041 L39.5197219,5.82185041 L42.1749619,5.82185041 Z M54.8908819,15.8825304 L53.6728819,15.8825304 C52.6659969,15.8825304 51.9230243,16.0124491 51.4439419,16.2722904 C50.9648595,16.5321317 50.7253219,17.0193268 50.7253219,17.7338904 L50.7253219,26.0406504 L48.5329219,26.0406504 L48.5329219,14.2504104 L50.6035219,14.2504104 L50.6035219,16.1748504 C50.6035219,15.6064476 50.9567384,15.1030126 51.6631819,14.6645304 C52.3696255,14.2260482 53.0882383,14.0068104 53.8190419,14.0068104 L54.8908819,14.0068104 L54.8908819,15.8825304 Z M64.4887219,26.0893704 C63.709198,26.2192911 62.8890862,26.2842504 62.0283619,26.2842504 C60.5505145,26.2842504 59.5192849,26.028473 58.9346419,25.5169104 C58.349999,25.0053478 58.0576819,24.0350176 58.0576819,22.6058904 L58.0576819,15.6876504 L55.4268019,15.6876504 L55.4268019,14.2504104 L58.0576819,14.2504104 L58.0576819,10.5964104 L60.2744419,10.5964104 L60.2744419,14.2504104 L64.4887219,14.2504104 L64.4887219,15.6876504 L60.2744419,15.6876504 L60.2744419,22.7276904 C60.2744419,23.5721746 60.4368403,24.136509 60.7616419,24.4207104 C61.0864436,24.7049118 61.744157,24.8470104 62.7348019,24.8470104 C62.9946432,24.8470104 63.5792774,24.7820511 64.4887219,24.6521304 L64.4887219,26.0893704 Z M69.0684019,12.2772504 L66.8760019,12.2772504 L66.8760019,9.98741041 L69.0684019,9.98741041 L69.0684019,12.2772504 Z M69.0684019,26.0406504 L66.8760019,26.0406504 L66.8760019,14.2504104 L69.0684019,14.2504104 L69.0684019,26.0406504 Z M81.3945619,25.9432104 C80.3227166,26.1705715 79.0641292,26.2842504 77.6187619,26.2842504 C76.9041984,26.2842504 76.3479839,26.2720705 75.9501019,26.2477104 C75.5522199,26.2233503 75.0975045,26.1421511 74.5859419,26.0041104 C74.0743794,25.8660697 73.6846233,25.6671317 73.4166619,25.4072904 C73.1487006,25.1474491 72.9172829,24.7698729 72.7224019,24.2745504 C72.527521,23.7792279 72.4300819,23.1661741 72.4300819,22.4353704 L72.4300819,18.0992904 C72.4300819,17.4496872 72.4909813,16.8894128 72.6127819,16.4184504 C72.7345825,15.9474881 72.9254006,15.5658519 73.1852419,15.2735304 C73.4450832,14.9812089 73.7130406,14.7457313 73.9891219,14.5670904 C74.2652033,14.3884495 74.6427795,14.2625908 75.1218619,14.1895104 C75.6009443,14.11643 76.0231801,14.0677105 76.3885819,14.0433504 C76.7539838,14.0189903 77.2452388,14.0068104 77.8623619,14.0068104 C78.9829275,14.0068104 80.1034763,14.1286092 81.2240419,14.3722104 L81.2240419,15.9799704 C79.9573156,15.6551688 78.7474477,15.4927704 77.5944019,15.4927704 C76.3763958,15.4927704 75.5847038,15.6389289 75.2193019,15.9312504 C74.8539001,16.2235719 74.6712019,16.8406857 74.6712019,17.7826104 L74.6712019,22.6058904 C74.6712019,23.4666147 74.8782599,24.039069 75.2923819,24.3232704 C75.706504,24.6074718 76.5550355,24.7495704 77.8380019,24.7495704 C78.9910477,24.7495704 80.1765558,24.5952919 81.3945619,24.2867304 L81.3945619,25.9432104 Z M94.5976819,18.2210904 L94.5976819,22.3135704 C94.5976819,23.0443741 94.5083628,23.6614879 94.3297219,24.1649304 C94.151081,24.6683729 93.9237233,25.058129 93.6476419,25.3342104 C93.3715606,25.6102918 92.9777445,25.8214097 92.4661819,25.9675704 C91.9546194,26.1137311 91.4674242,26.2030502 91.0045819,26.2355304 C90.5417396,26.2680106 89.9286858,26.2842504 89.1654019,26.2842504 C88.1909971,26.2842504 87.4317847,26.2517707 86.8877419,26.1868104 C86.3436992,26.1218501 85.7996647,25.9635117 85.2556219,25.7117904 C84.7115792,25.4600691 84.3218231,25.0581332 84.0863419,24.5059704 C83.8508608,23.9538076 83.7331219,23.223015 83.7331219,22.3135704 L83.7331219,18.2210904 C83.7331219,17.4415665 83.826501,16.7838531 84.0132619,16.2479304 C84.2000229,15.7120077 84.4273806,15.2978919 84.6953419,15.0055704 C84.9633033,14.7132489 85.3571193,14.4899512 85.8768019,14.3356704 C86.3964845,14.1813896 86.8796197,14.0880106 87.3262219,14.0555304 C87.7728242,14.0230502 88.385878,14.0068104 89.1654019,14.0068104 C89.9449258,14.0068104 90.5579797,14.0230502 91.0045819,14.0555304 C91.4511842,14.0880106 91.9343193,14.1813896 92.4540019,14.3356704 C92.9736845,14.4899512 93.3675006,14.7132489 93.6354619,15.0055704 C93.9034233,15.2978919 94.130781,15.7120077 94.3175419,16.2479304 C94.5043029,16.7838531 94.5976819,17.4415665 94.5976819,18.2210904 Z M92.3565619,22.6302504 L92.3565619,17.8556904 C92.3565619,16.767605 92.1373241,16.0936517 91.6988419,15.8338104 C91.2603597,15.5739691 90.4158882,15.4440504 89.1654019,15.4440504 C87.9149157,15.4440504 87.0704441,15.5739691 86.6319619,15.8338104 C86.1934797,16.0936517 85.9742419,16.767605 85.9742419,17.8556904 L85.9742419,22.6302504 C85.9742419,23.149933 86.0310814,23.5640489 86.1447619,23.8726104 C86.2584425,24.1811719 86.4695604,24.4044697 86.7781219,24.5425104 C87.0866835,24.6805511 87.4033603,24.7658102 87.7281619,24.7982904 C88.0529636,24.8307706 88.5320388,24.8470104 89.1654019,24.8470104 C89.7987651,24.8470104 90.2778403,24.8307706 90.6026419,24.7982904 C90.9274436,24.7658102 91.2441204,24.6805511 91.5526819,24.5425104 C91.8612435,24.4044697 92.0723614,24.1811719 92.1860419,23.8726104 C92.2997225,23.5640489 92.3565619,23.149933 92.3565619,22.6302504 Z M111.089402,14.7619704 L111.089402,21.7532904 C111.089402,24.6115447 108.880784,26.0406504 104.463482,26.0406504 L98.1542419,26.0406504 L98.1542419,10.2310104 L104.439122,10.2310104 C108.872664,10.2310104 111.089402,11.7413153 111.089402,14.7619704 Z M108.823922,21.7045704 L108.823922,14.7376104 C108.823922,14.1367274 108.702123,13.6373524 108.458522,13.2394704 C108.214921,12.8415884 107.869824,12.5492713 107.423222,12.3625104 C106.97662,12.1757495 106.517844,12.0458308 106.046882,11.9727504 C105.57592,11.89967 105.031885,11.8631304 104.414762,11.8631304 L100.517162,11.8631304 L100.517162,24.4328904 L104.292962,24.4328904 C107.313617,24.4328904 108.823922,23.5234595 108.823922,21.7045704 Z M116.740922,12.2772504 L114.548522,12.2772504 L114.548522,9.98741041 L116.740922,9.98741041 L116.740922,12.2772504 Z M116.740922,26.0406504 L114.548522,26.0406504 L114.548522,14.2504104 L116.740922,14.2504104 L116.740922,26.0406504 Z M130.601762,14.2504104 L130.601762,27.1612104 C130.601762,28.8339388 130.134867,29.9585475 129.201062,30.5350704 C128.267257,31.1115933 126.866571,31.3998504 124.998962,31.3998504 C123.326234,31.3998504 121.970207,31.3105313 120.930842,31.1318904 L120.930842,29.5728504 C122.798451,29.8002115 124.219437,29.9138904 125.193842,29.9138904 C126.314408,29.9138904 127.130459,29.7352522 127.642022,29.3779704 C128.153584,29.0206886 128.409362,28.4279345 128.409362,27.5996904 L128.409362,24.7739304 C128.376882,25.3260932 127.999306,25.7158493 127.276622,25.9432104 C126.553938,26.1705715 125.729767,26.2842504 124.804082,26.2842504 C122.985193,26.2842504 121.746905,26.0162931 121.089182,25.4803704 C120.431459,24.9444477 120.102602,24.018777 120.102602,22.7033304 L120.102602,17.9044104 C120.102602,16.5077634 120.480178,15.5090134 121.235342,14.9081304 C121.990506,14.3072474 123.228793,14.0068104 124.950242,14.0068104 C126.996492,14.0068104 128.19824,14.4696458 128.555522,15.3953304 L128.555522,14.2504104 L130.601762,14.2504104 Z M128.409362,22.8494904 L128.409362,17.5146504 C128.409362,16.7513666 128.202304,16.2276318 127.788182,15.9434304 C127.37406,15.659229 126.517408,15.5171304 125.218202,15.5171304 C124.000196,15.5171304 123.204444,15.655169 122.830922,15.9312504 C122.4574,16.2073318 122.270642,16.7351265 122.270642,17.5146504 L122.270642,22.8494904 C122.270642,23.6614945 122.46958,24.1933491 122.867462,24.4450704 C123.265344,24.6967917 124.065156,24.8226504 125.266922,24.8226504 C126.371247,24.8226504 127.171059,24.6886717 127.666382,24.4207104 C128.161704,24.1527491 128.409362,23.6290143 128.409362,22.8494904 Z M136.594322,12.2772504 L134.401922,12.2772504 L134.401922,9.98741041 L136.594322,9.98741041 L136.594322,12.2772504 Z M136.594322,26.0406504 L134.401922,26.0406504 L134.401922,14.2504104 L136.594322,14.2504104 L136.594322,26.0406504 Z M147.799922,26.0893704 C147.020398,26.2192911 146.200286,26.2842504 145.339562,26.2842504 C143.861715,26.2842504 142.830485,26.028473 142.245842,25.5169104 C141.661199,25.0053478 141.368882,24.0350176 141.368882,22.6058904 L141.368882,15.6876504 L138.738002,15.6876504 L138.738002,14.2504104 L141.368882,14.2504104 L141.368882,10.5964104 L143.585642,10.5964104 L143.585642,14.2504104 L147.799922,14.2504104 L147.799922,15.6876504 L143.585642,15.6876504 L143.585642,22.7276904 C143.585642,23.5721746 143.74804,24.136509 144.072842,24.4207104 C144.397644,24.7049118 145.055357,24.8470104 146.046002,24.8470104 C146.305843,24.8470104 146.890477,24.7820511 147.799922,24.6521304 L147.799922,26.0893704 Z M159.492722,26.0406504 L157.373402,26.0406504 L157.373402,24.9200904 C157.194761,25.829535 156.009253,26.2842504 153.816842,26.2842504 C152.192834,26.2842504 151.068225,26.0365929 150.442982,25.5412704 C149.817739,25.0459479 149.505122,24.043138 149.505122,22.5328104 C149.505122,21.2173638 149.797439,20.3119929 150.382082,19.8166704 C150.966725,19.3213479 152.095394,19.0736904 153.768122,19.0736904 L157.300322,19.0736904 L157.300322,17.1979704 C157.300322,16.5483672 157.101384,16.1098915 156.703502,15.8825304 C156.30562,15.6551693 155.554527,15.5414904 154.450202,15.5414904 C153.248436,15.5414904 151.900529,15.6389294 150.406442,15.8338104 L150.406442,14.2260504 C152.01421,14.0798897 153.467675,14.0068104 154.766882,14.0068104 C156.748172,14.0068104 158.031119,14.246348 158.615762,14.7254304 C159.200405,15.2045128 159.492722,16.1992029 159.492722,17.7095304 L159.492722,26.0406504 Z M157.300322,23.6533704 L157.300322,20.4378504 L153.914282,20.4378504 C152.907397,20.4378504 152.278103,20.5677691 152.026382,20.8276104 C151.774661,21.0874517 151.648802,21.6802058 151.648802,22.6058904 C151.648802,23.4341345 151.782781,24.0147087 152.050742,24.3476304 C152.318703,24.6805521 152.883038,24.8470104 153.743762,24.8470104 L154.182242,24.8470104 C154.604484,24.8470104 154.957701,24.8388905 155.241902,24.8226504 C155.526103,24.8064103 155.84684,24.7617508 156.204122,24.6886704 C156.561404,24.61559 156.833421,24.4937913 157.020182,24.3232704 C157.206943,24.1527496 157.300322,23.9294518 157.300322,23.6533704 Z M165.485282,26.0406504 L163.292882,26.0406504 L163.292882,8.98865041 L165.485282,8.98865041 L165.485282,26.0406504 Z"
                          id="isotipo" fill="#3974E3"></path>
                    <path d="M1.50351304,33.5863814 C0.331523486,34.4006218 -0.279000305,33.9485445 0.138557601,32.5809368 L9.76696874,1.04545541 C10.1851142,-0.324076782 10.8636496,-0.322152328 11.2812075,1.04545541 L20.9096186,32.5809368 C21.3277641,33.9504689 20.7167219,34.4006699 19.5446632,33.5863814 L12.6461629,28.7936441 C11.4741734,27.9794036 9.57407205,27.9793556 8.4020133,28.7936441 L1.50351304,33.5863814 Z"
                          id="logotipo" fill="#5E89E0"></path>
                </g>
            </svg>
        </figure>
        <nav class="row center middle ">
            <div class="row center middle Header-contentMenu">
                <svg class="Header-logoMobile" width="166px" height="34px" viewBox="0 0 166 34" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

                    <defs></defs>
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="iPad-Pro-Landscape" transform="translate(-259.000000, -602.000000)" fill="#FFFFFF">
                            <g id="Group-7" transform="translate(259.000000, 602.000000)">
                                <path d="M46.2674419,26.0406504 L43.8070819,26.0406504 L42.0044419,21.2417304 L35.2323619,21.2417304 L33.4540819,26.0406504 L31.1155219,26.0406504 L37.4004019,10.2310104 L40.1287219,10.2310104 L46.2674419,26.0406504 Z M41.4198019,19.6096104 L38.7402019,12.4721304 L38.5209619,12.4721304 L35.8413619,19.6096104 L41.4198019,19.6096104 Z M42.1749619,5.82185041 L39.1299619,8.91557041 L37.3273219,8.91557041 L39.5197219,5.82185041 L42.1749619,5.82185041 Z M54.8908819,15.8825304 L53.6728819,15.8825304 C52.6659969,15.8825304 51.9230243,16.0124491 51.4439419,16.2722904 C50.9648595,16.5321317 50.7253219,17.0193268 50.7253219,17.7338904 L50.7253219,26.0406504 L48.5329219,26.0406504 L48.5329219,14.2504104 L50.6035219,14.2504104 L50.6035219,16.1748504 C50.6035219,15.6064476 50.9567384,15.1030126 51.6631819,14.6645304 C52.3696255,14.2260482 53.0882383,14.0068104 53.8190419,14.0068104 L54.8908819,14.0068104 L54.8908819,15.8825304 Z M64.4887219,26.0893704 C63.709198,26.2192911 62.8890862,26.2842504 62.0283619,26.2842504 C60.5505145,26.2842504 59.5192849,26.028473 58.9346419,25.5169104 C58.349999,25.0053478 58.0576819,24.0350176 58.0576819,22.6058904 L58.0576819,15.6876504 L55.4268019,15.6876504 L55.4268019,14.2504104 L58.0576819,14.2504104 L58.0576819,10.5964104 L60.2744419,10.5964104 L60.2744419,14.2504104 L64.4887219,14.2504104 L64.4887219,15.6876504 L60.2744419,15.6876504 L60.2744419,22.7276904 C60.2744419,23.5721746 60.4368403,24.136509 60.7616419,24.4207104 C61.0864436,24.7049118 61.744157,24.8470104 62.7348019,24.8470104 C62.9946432,24.8470104 63.5792774,24.7820511 64.4887219,24.6521304 L64.4887219,26.0893704 Z M69.0684019,12.2772504 L66.8760019,12.2772504 L66.8760019,9.98741041 L69.0684019,9.98741041 L69.0684019,12.2772504 Z M69.0684019,26.0406504 L66.8760019,26.0406504 L66.8760019,14.2504104 L69.0684019,14.2504104 L69.0684019,26.0406504 Z M81.3945619,25.9432104 C80.3227166,26.1705715 79.0641292,26.2842504 77.6187619,26.2842504 C76.9041984,26.2842504 76.3479839,26.2720705 75.9501019,26.2477104 C75.5522199,26.2233503 75.0975045,26.1421511 74.5859419,26.0041104 C74.0743794,25.8660697 73.6846233,25.6671317 73.4166619,25.4072904 C73.1487006,25.1474491 72.9172829,24.7698729 72.7224019,24.2745504 C72.527521,23.7792279 72.4300819,23.1661741 72.4300819,22.4353704 L72.4300819,18.0992904 C72.4300819,17.4496872 72.4909813,16.8894128 72.6127819,16.4184504 C72.7345825,15.9474881 72.9254006,15.5658519 73.1852419,15.2735304 C73.4450832,14.9812089 73.7130406,14.7457313 73.9891219,14.5670904 C74.2652033,14.3884495 74.6427795,14.2625908 75.1218619,14.1895104 C75.6009443,14.11643 76.0231801,14.0677105 76.3885819,14.0433504 C76.7539838,14.0189903 77.2452388,14.0068104 77.8623619,14.0068104 C78.9829275,14.0068104 80.1034763,14.1286092 81.2240419,14.3722104 L81.2240419,15.9799704 C79.9573156,15.6551688 78.7474477,15.4927704 77.5944019,15.4927704 C76.3763958,15.4927704 75.5847038,15.6389289 75.2193019,15.9312504 C74.8539001,16.2235719 74.6712019,16.8406857 74.6712019,17.7826104 L74.6712019,22.6058904 C74.6712019,23.4666147 74.8782599,24.039069 75.2923819,24.3232704 C75.706504,24.6074718 76.5550355,24.7495704 77.8380019,24.7495704 C78.9910477,24.7495704 80.1765558,24.5952919 81.3945619,24.2867304 L81.3945619,25.9432104 Z M94.5976819,18.2210904 L94.5976819,22.3135704 C94.5976819,23.0443741 94.5083628,23.6614879 94.3297219,24.1649304 C94.151081,24.6683729 93.9237233,25.058129 93.6476419,25.3342104 C93.3715606,25.6102918 92.9777445,25.8214097 92.4661819,25.9675704 C91.9546194,26.1137311 91.4674242,26.2030502 91.0045819,26.2355304 C90.5417396,26.2680106 89.9286858,26.2842504 89.1654019,26.2842504 C88.1909971,26.2842504 87.4317847,26.2517707 86.8877419,26.1868104 C86.3436992,26.1218501 85.7996647,25.9635117 85.2556219,25.7117904 C84.7115792,25.4600691 84.3218231,25.0581332 84.0863419,24.5059704 C83.8508608,23.9538076 83.7331219,23.223015 83.7331219,22.3135704 L83.7331219,18.2210904 C83.7331219,17.4415665 83.826501,16.7838531 84.0132619,16.2479304 C84.2000229,15.7120077 84.4273806,15.2978919 84.6953419,15.0055704 C84.9633033,14.7132489 85.3571193,14.4899512 85.8768019,14.3356704 C86.3964845,14.1813896 86.8796197,14.0880106 87.3262219,14.0555304 C87.7728242,14.0230502 88.385878,14.0068104 89.1654019,14.0068104 C89.9449258,14.0068104 90.5579797,14.0230502 91.0045819,14.0555304 C91.4511842,14.0880106 91.9343193,14.1813896 92.4540019,14.3356704 C92.9736845,14.4899512 93.3675006,14.7132489 93.6354619,15.0055704 C93.9034233,15.2978919 94.130781,15.7120077 94.3175419,16.2479304 C94.5043029,16.7838531 94.5976819,17.4415665 94.5976819,18.2210904 Z M92.3565619,22.6302504 L92.3565619,17.8556904 C92.3565619,16.767605 92.1373241,16.0936517 91.6988419,15.8338104 C91.2603597,15.5739691 90.4158882,15.4440504 89.1654019,15.4440504 C87.9149157,15.4440504 87.0704441,15.5739691 86.6319619,15.8338104 C86.1934797,16.0936517 85.9742419,16.767605 85.9742419,17.8556904 L85.9742419,22.6302504 C85.9742419,23.149933 86.0310814,23.5640489 86.1447619,23.8726104 C86.2584425,24.1811719 86.4695604,24.4044697 86.7781219,24.5425104 C87.0866835,24.6805511 87.4033603,24.7658102 87.7281619,24.7982904 C88.0529636,24.8307706 88.5320388,24.8470104 89.1654019,24.8470104 C89.7987651,24.8470104 90.2778403,24.8307706 90.6026419,24.7982904 C90.9274436,24.7658102 91.2441204,24.6805511 91.5526819,24.5425104 C91.8612435,24.4044697 92.0723614,24.1811719 92.1860419,23.8726104 C92.2997225,23.5640489 92.3565619,23.149933 92.3565619,22.6302504 Z M111.089402,14.7619704 L111.089402,21.7532904 C111.089402,24.6115447 108.880784,26.0406504 104.463482,26.0406504 L98.1542419,26.0406504 L98.1542419,10.2310104 L104.439122,10.2310104 C108.872664,10.2310104 111.089402,11.7413153 111.089402,14.7619704 Z M108.823922,21.7045704 L108.823922,14.7376104 C108.823922,14.1367274 108.702123,13.6373524 108.458522,13.2394704 C108.214921,12.8415884 107.869824,12.5492713 107.423222,12.3625104 C106.97662,12.1757495 106.517844,12.0458308 106.046882,11.9727504 C105.57592,11.89967 105.031885,11.8631304 104.414762,11.8631304 L100.517162,11.8631304 L100.517162,24.4328904 L104.292962,24.4328904 C107.313617,24.4328904 108.823922,23.5234595 108.823922,21.7045704 Z M116.740922,12.2772504 L114.548522,12.2772504 L114.548522,9.98741041 L116.740922,9.98741041 L116.740922,12.2772504 Z M116.740922,26.0406504 L114.548522,26.0406504 L114.548522,14.2504104 L116.740922,14.2504104 L116.740922,26.0406504 Z M130.601762,14.2504104 L130.601762,27.1612104 C130.601762,28.8339388 130.134867,29.9585475 129.201062,30.5350704 C128.267257,31.1115933 126.866571,31.3998504 124.998962,31.3998504 C123.326234,31.3998504 121.970207,31.3105313 120.930842,31.1318904 L120.930842,29.5728504 C122.798451,29.8002115 124.219437,29.9138904 125.193842,29.9138904 C126.314408,29.9138904 127.130459,29.7352522 127.642022,29.3779704 C128.153584,29.0206886 128.409362,28.4279345 128.409362,27.5996904 L128.409362,24.7739304 C128.376882,25.3260932 127.999306,25.7158493 127.276622,25.9432104 C126.553938,26.1705715 125.729767,26.2842504 124.804082,26.2842504 C122.985193,26.2842504 121.746905,26.0162931 121.089182,25.4803704 C120.431459,24.9444477 120.102602,24.018777 120.102602,22.7033304 L120.102602,17.9044104 C120.102602,16.5077634 120.480178,15.5090134 121.235342,14.9081304 C121.990506,14.3072474 123.228793,14.0068104 124.950242,14.0068104 C126.996492,14.0068104 128.19824,14.4696458 128.555522,15.3953304 L128.555522,14.2504104 L130.601762,14.2504104 Z M128.409362,22.8494904 L128.409362,17.5146504 C128.409362,16.7513666 128.202304,16.2276318 127.788182,15.9434304 C127.37406,15.659229 126.517408,15.5171304 125.218202,15.5171304 C124.000196,15.5171304 123.204444,15.655169 122.830922,15.9312504 C122.4574,16.2073318 122.270642,16.7351265 122.270642,17.5146504 L122.270642,22.8494904 C122.270642,23.6614945 122.46958,24.1933491 122.867462,24.4450704 C123.265344,24.6967917 124.065156,24.8226504 125.266922,24.8226504 C126.371247,24.8226504 127.171059,24.6886717 127.666382,24.4207104 C128.161704,24.1527491 128.409362,23.6290143 128.409362,22.8494904 Z M136.594322,12.2772504 L134.401922,12.2772504 L134.401922,9.98741041 L136.594322,9.98741041 L136.594322,12.2772504 Z M136.594322,26.0406504 L134.401922,26.0406504 L134.401922,14.2504104 L136.594322,14.2504104 L136.594322,26.0406504 Z M147.799922,26.0893704 C147.020398,26.2192911 146.200286,26.2842504 145.339562,26.2842504 C143.861715,26.2842504 142.830485,26.028473 142.245842,25.5169104 C141.661199,25.0053478 141.368882,24.0350176 141.368882,22.6058904 L141.368882,15.6876504 L138.738002,15.6876504 L138.738002,14.2504104 L141.368882,14.2504104 L141.368882,10.5964104 L143.585642,10.5964104 L143.585642,14.2504104 L147.799922,14.2504104 L147.799922,15.6876504 L143.585642,15.6876504 L143.585642,22.7276904 C143.585642,23.5721746 143.74804,24.136509 144.072842,24.4207104 C144.397644,24.7049118 145.055357,24.8470104 146.046002,24.8470104 C146.305843,24.8470104 146.890477,24.7820511 147.799922,24.6521304 L147.799922,26.0893704 Z M159.492722,26.0406504 L157.373402,26.0406504 L157.373402,24.9200904 C157.194761,25.829535 156.009253,26.2842504 153.816842,26.2842504 C152.192834,26.2842504 151.068225,26.0365929 150.442982,25.5412704 C149.817739,25.0459479 149.505122,24.043138 149.505122,22.5328104 C149.505122,21.2173638 149.797439,20.3119929 150.382082,19.8166704 C150.966725,19.3213479 152.095394,19.0736904 153.768122,19.0736904 L157.300322,19.0736904 L157.300322,17.1979704 C157.300322,16.5483672 157.101384,16.1098915 156.703502,15.8825304 C156.30562,15.6551693 155.554527,15.5414904 154.450202,15.5414904 C153.248436,15.5414904 151.900529,15.6389294 150.406442,15.8338104 L150.406442,14.2260504 C152.01421,14.0798897 153.467675,14.0068104 154.766882,14.0068104 C156.748172,14.0068104 158.031119,14.246348 158.615762,14.7254304 C159.200405,15.2045128 159.492722,16.1992029 159.492722,17.7095304 L159.492722,26.0406504 Z M157.300322,23.6533704 L157.300322,20.4378504 L153.914282,20.4378504 C152.907397,20.4378504 152.278103,20.5677691 152.026382,20.8276104 C151.774661,21.0874517 151.648802,21.6802058 151.648802,22.6058904 C151.648802,23.4341345 151.782781,24.0147087 152.050742,24.3476304 C152.318703,24.6805521 152.883038,24.8470104 153.743762,24.8470104 L154.182242,24.8470104 C154.604484,24.8470104 154.957701,24.8388905 155.241902,24.8226504 C155.526103,24.8064103 155.84684,24.7617508 156.204122,24.6886704 C156.561404,24.61559 156.833421,24.4937913 157.020182,24.3232704 C157.206943,24.1527496 157.300322,23.9294518 157.300322,23.6533704 Z M165.485282,26.0406504 L163.292882,26.0406504 L163.292882,8.98865041 L165.485282,8.98865041 L165.485282,26.0406504 Z" id="Logotipo"></path>
                                <path d="M1.50351304,33.5863814 C0.331523486,34.4006218 -0.279000305,33.9485445 0.138557601,32.5809368 L9.76696874,1.04545541 C10.1851142,-0.324076782 10.8636496,-0.322152328 11.2812075,1.04545541 L20.9096186,32.5809368 C21.3277641,33.9504689 20.7167219,34.4006699 19.5446632,33.5863814 L12.6461629,28.7936441 C11.4741734,27.9794036 9.57407205,27.9793556 8.4020133,28.7936441 L1.50351304,33.5863814 Z" id="Path-12"></path>
                            </g>
                        </g>
                    </g>
                </svg>
                <ul class="row middle ">
                    <li><a href="">Lo que hacemos</a></li>
                    <li><a href="">Logros</a></li>
                    <li><a href="">Cultura</a></li>
                    <li><a href="">Blog</a></li>
                    <li class="Header-contact"><a href="">Inicia un proyecto</a></li>
                    <li class="Header-number-mobile">
                        <a href="tel:3005549372">
                            <div class=" row center">
                                <svg style="vertical-align: middle" width="21px" height="20px" viewBox="1182 24 21 20"
                                     version="1.1"
                                     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g id="noun_272233_cc" stroke="none" stroke-width="1" fill="none"
                                       fill-rule="evenodd"
                                       transform="translate(1182.000000, 24.000000)">
                                        <g id="38---Whatsapp-(Solid)" fill="#ffffff">
                                            <g id="Group">
                                                <g id="Shape">
                                                    <path d="M10.1666944,0 C4.74436109,0 0.333361092,4.411 0.333361092,9.83333333 C0.333361092,11.5486667 0.782027759,13.234 1.63202776,14.7166667 L0.0170277585,19.5613333 C-0.0216389081,19.6773333 0.00669442521,19.8053333 0.0903610919,19.8946667 C0.154027759,19.963 0.242694425,20 0.333361092,20 C0.361694425,20 0.390027759,19.9963333 0.418027759,19.989 L5.70736109,18.5973333 C7.08102776,19.2973333 8.62002776,19.6666667 10.1666944,19.6666667 C15.5890278,19.6666667 20.0000278,15.2556667 20.0000278,9.83333333 C20.0000278,4.411 15.5890278,0 10.1666944,0 L10.1666944,0 Z M16.3026944,14.298 L15.7166944,14.8843333 C14.9766944,15.6246667 14.1510278,16 13.2633611,16 C13.2630278,16 13.2633611,16 13.2630278,16 C12.0663611,16 10.7760278,15.3166667 9.42869443,13.969 L6.03102776,10.5713333 C4.96802776,9.50866667 4.31502776,8.47633333 4.09002776,7.50266667 C3.81669443,6.32033333 4.16169443,5.23733333 5.11569443,4.28366667 L5.70169443,3.69733333 C6.07869443,3.32033333 6.68869443,3.22766667 7.16102776,3.47766667 C8.04836109,3.94733333 8.96769443,5.486 9.06969443,5.65966667 C9.25369443,5.982 9.31002776,6.31533333 9.23069443,6.60133333 C9.17002776,6.81966667 9.03336109,6.99766667 8.83436109,7.11833333 C8.56536109,7.34366667 8.24936109,7.62433333 8.19402776,7.696 C7.85536109,8.19566667 7.89402776,8.57933333 8.33036109,9.016 L10.9843611,11.67 C11.4243611,12.1103333 11.8010278,12.1463333 12.3086944,11.8026667 C12.3756944,11.7503333 12.6563611,11.4346667 12.8816944,11.1653333 C13.0500278,10.887 13.3256944,10.7346667 13.6610278,10.7346667 C13.8806944,10.7346667 14.1143611,10.8013333 14.3366944,10.928 C14.5140278,11.0323333 16.0530278,11.952 16.5223611,12.839 C16.7790278,13.324 16.6910278,13.91 16.3026944,14.298 L16.3026944,14.298 Z"></path>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                                <span>(+57) 300 554 9372</span>
                            </div>
                        </a></li>
                </ul>
            </div>
        </nav>
        <div class="Header-number row middle ">
            <svg style="vertical-align: middle" width="21px" height="20px" viewBox="1182 24 21 20" version="1.1"
                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g id="noun_272233_cc" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"
                   transform="translate(1182.000000, 24.000000)">
                    <g id="38---Whatsapp-(Solid)" fill="#538BF4">
                        <g id="Group">
                            <g id="Shape">
                                <path d="M10.1666944,0 C4.74436109,0 0.333361092,4.411 0.333361092,9.83333333 C0.333361092,11.5486667 0.782027759,13.234 1.63202776,14.7166667 L0.0170277585,19.5613333 C-0.0216389081,19.6773333 0.00669442521,19.8053333 0.0903610919,19.8946667 C0.154027759,19.963 0.242694425,20 0.333361092,20 C0.361694425,20 0.390027759,19.9963333 0.418027759,19.989 L5.70736109,18.5973333 C7.08102776,19.2973333 8.62002776,19.6666667 10.1666944,19.6666667 C15.5890278,19.6666667 20.0000278,15.2556667 20.0000278,9.83333333 C20.0000278,4.411 15.5890278,0 10.1666944,0 L10.1666944,0 Z M16.3026944,14.298 L15.7166944,14.8843333 C14.9766944,15.6246667 14.1510278,16 13.2633611,16 C13.2630278,16 13.2633611,16 13.2630278,16 C12.0663611,16 10.7760278,15.3166667 9.42869443,13.969 L6.03102776,10.5713333 C4.96802776,9.50866667 4.31502776,8.47633333 4.09002776,7.50266667 C3.81669443,6.32033333 4.16169443,5.23733333 5.11569443,4.28366667 L5.70169443,3.69733333 C6.07869443,3.32033333 6.68869443,3.22766667 7.16102776,3.47766667 C8.04836109,3.94733333 8.96769443,5.486 9.06969443,5.65966667 C9.25369443,5.982 9.31002776,6.31533333 9.23069443,6.60133333 C9.17002776,6.81966667 9.03336109,6.99766667 8.83436109,7.11833333 C8.56536109,7.34366667 8.24936109,7.62433333 8.19402776,7.696 C7.85536109,8.19566667 7.89402776,8.57933333 8.33036109,9.016 L10.9843611,11.67 C11.4243611,12.1103333 11.8010278,12.1463333 12.3086944,11.8026667 C12.3756944,11.7503333 12.6563611,11.4346667 12.8816944,11.1653333 C13.0500278,10.887 13.3256944,10.7346667 13.6610278,10.7346667 C13.8806944,10.7346667 14.1143611,10.8013333 14.3366944,10.928 C14.5140278,11.0323333 16.0530278,11.952 16.5223611,12.839 C16.7790278,13.324 16.6910278,13.91 16.3026944,14.298 L16.3026944,14.298 Z"></path>
                            </g>
                        </g>
                    </g>
                </g>
            </svg>
            <a href="tel:3005549372">(+57) 300 554 9372</a>
        </div>
        <div class="Header-btn-menu row end " id="Menu">
            <span></span><span></span><span></span>
        </div>
    </div>
    @yield('header')
</header>
<main class="MainBack">
    @yield('content')
</main>
<script>
    const btnMenu = document.querySelector('#Menu'),
        nav = document.querySelector('nav')

    btnMenu.addEventListener('click', function () {
        nav.classList.toggle('open')
        this.classList.toggle('open')
    });

</script>
@yield('scripts')
</body>
</html>
