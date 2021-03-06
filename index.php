<!DOCTYPE html>

<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="/resources/js/script.js"></script>
	<title>Aggregating Summarizer</title>
	<link href="/resources/style.css" media="all" rel="Stylesheet" type="text/css" />

</head>
<body>
<div class="hide">
    <svg version="1.1" id="rate1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         viewBox="0 0 295.996 295.996" style="enable-background:new 0 0 295.996 295.996;" xml:space="preserve">
<g>
    <path d="M147.998,0C66.392,0,0,66.392,0,147.998c0,81.606,66.392,147.998,147.998,147.998c81.606,0,147.998-66.392,147.998-147.998
		C295.996,66.392,229.605,0,147.998,0z M147.998,279.996c-36.257,0-69.143-14.696-93.023-38.44
		c-9.536-9.482-17.631-20.41-23.934-32.42C21.442,190.847,16,170.047,16,147.998C16,75.214,75.214,16,147.998,16
		c34.523,0,65.987,13.328,89.533,35.102c12.208,11.288,22.289,24.844,29.558,39.996c8.27,17.239,12.907,36.538,12.907,56.9
		C279.996,220.782,220.782,279.996,147.998,279.996z M92.132,276.394c0.24,0.105,0.48,0.212,0.722,0.316
		C92.612,276.605,92.372,276.499,92.132,276.394z"/>
    <circle cx="98.497" cy="115.998" r="16"/>
    <circle cx="197.497" cy="115.998" r="16"/>
    <rect x="179.451" y="64.405" transform="matrix(0.9176 0.3974 -0.3974 0.9176 45.8265 -76.3235)" width="55.22" height="16"/>
    <rect x="61.324" y="64.405" transform="matrix(-0.9176 0.3974 -0.3974 -0.9176 199.317 103.5043)" width="55.219" height="16"/>
    <path d="M214.247,202.783c1.228,2.176,2.358,4.438,3.363,6.724l14.648-6.436c-1.218-2.771-2.589-5.513-4.075-8.148
		c-17.022-30.189-50.407-48.542-85.014-46.744c-34.383,1.779-65.563,23.325-79.435,54.892l14.648,6.438
		c11.461-26.08,37.215-43.881,65.613-45.351C172.581,162.675,200.181,177.837,214.247,202.783z"/>
</g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
</svg>
<svg version="1.1" id="rate2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
     viewBox="0 0 295.996 295.996" style="enable-background:new 0 0 295.996 295.996;" xml:space="preserve">
<g>
    <path d="M147.998,0C66.392,0,0,66.392,0,147.998c0,81.606,66.392,147.998,147.998,147.998c81.606,0,147.998-66.392,147.998-147.998
		C295.996,66.392,229.604,0,147.998,0z M147.998,279.996c-36.257,0-69.143-14.696-93.023-38.44
		c-9.536-9.482-17.631-20.41-23.934-32.42C21.442,190.847,16,170.048,16,147.998C16,75.214,75.214,16,147.998,16
		c34.523,0,65.987,13.328,89.533,35.102c12.208,11.288,22.289,24.844,29.558,39.997c8.27,17.238,12.907,36.537,12.907,56.899
		C279.996,220.782,220.782,279.996,147.998,279.996z"/>
    <path d="M176.249,181.991c12.875-1.786,26.044,1.091,37.084,8.104l8.578-13.506c-14.238-9.043-31.234-12.751-47.862-10.445
		c-26.732,3.714-49.436,22.684-57.84,48.329l15.205,4.982C137.928,199.575,155.527,184.87,176.249,181.991z"/>
    <circle cx="98.665" cy="115.998" r="16"/>
    <circle cx="197.665" cy="115.998" r="16"/>
</g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
</svg>
    <svg version="1.1" id="rate3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         viewBox="0 0 296.256 296.256" style="enable-background:new 0 0 296.256 296.256;" xml:space="preserve">
<g>
    <path d="M98.497,147.128c4.39,0,8.364-1.771,11.255-4.634c2.929-2.899,4.745-6.92,4.745-11.366c0-8.836-7.164-16-16-16
		s-16,7.164-16,16c0,2.079,0.409,4.059,1.131,5.882C85.974,142.933,91.74,147.128,98.497,147.128z"/>
    <path d="M212.366,137.01c0.722-1.822,1.131-3.803,1.131-5.882c0-8.836-7.164-16-16-16c-8.836,0-16,7.164-16,16
		c0,4.446,1.816,8.467,4.745,11.367c2.891,2.862,6.865,4.633,11.255,4.633C204.254,147.128,210.02,142.933,212.366,137.01z"/>
    <rect x="114.664" y="206.127" width="66" height="16"/>
    <path d="M296.256,76.269c0-9.527-5.948-21.439-18.184-36.416c-8.415-10.3-16.722-18.2-17.07-18.531l-5.504-5.217l-5.503,5.216
		c-0.254,0.24-4.698,4.471-10.327,10.7c-25.226-19.959-57.08-31.891-91.67-31.891C66.392,0.13,0,66.521,0,148.128
		c0,81.606,66.392,147.998,147.998,147.998s147.998-66.392,147.998-147.998c0-16.614-2.753-32.599-7.825-47.52
		C293.247,93.812,296.256,85.385,296.256,76.269z M279.996,148.128c0,72.784-59.214,131.998-131.998,131.998
		c-36.256,0-69.143-14.696-93.022-38.44c-9.536-9.482-17.631-20.41-23.934-32.42C21.442,190.977,16,170.178,16,148.128
		C16,75.344,75.214,16.13,147.998,16.13c30.694,0,58.975,10.531,81.419,28.169c-0.454,0.596-0.9,1.187-1.333,1.771
		c-8.959,12.102-13.346,22.03-13.346,30.198c0,22.475,18.285,40.76,40.76,40.76c5.347,0,10.451-1.046,15.134-2.925
		c1.496-0.602,2.952-1.279,4.354-2.047C278.249,123.526,279.996,135.627,279.996,148.128z M255.498,101.028
		c-13.652,0-24.76-11.107-24.76-24.76c0-8.673,13.101-25.674,24.763-37.847c11.659,12.161,24.755,29.153,24.755,37.847
		C280.256,89.921,269.149,101.028,255.498,101.028z"/>
</g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
</svg>
    <svg version="1.1" id="rate4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         viewBox="0 0 295.996 295.996" style="enable-background:new 0 0 295.996 295.996;" xml:space="preserve">
<g>
    <path d="M147.998,0C66.392,0,0,66.392,0,147.998s66.392,147.998,147.998,147.998s147.998-66.392,147.998-147.998
		S229.605,0,147.998,0z M147.998,279.996c-36.256,0-69.143-14.696-93.022-38.44c-9.536-9.482-17.631-20.41-23.934-32.42
		C21.442,190.847,16,170.047,16,147.998C16,75.214,75.214,16,147.998,16c34.523,0,65.987,13.328,89.533,35.102
		c12.208,11.288,22.289,24.844,29.558,39.996c8.27,17.239,12.907,36.538,12.907,56.9
		C279.996,220.782,220.782,279.996,147.998,279.996z"/>
    <circle cx="99.666" cy="114.998" r="16"/>
    <circle cx="198.666" cy="114.998" r="16"/>
    <path d="M147.715,229.995c30.954,0,60.619-15.83,77.604-42.113l-13.439-8.684c-15.597,24.135-44.126,37.604-72.693,34.308
		c-22.262-2.567-42.849-15.393-55.072-34.308l-13.438,8.684c14.79,22.889,39.716,38.409,66.676,41.519
		C140.814,229.8,144.27,229.995,147.715,229.995z"/>
</g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
        <g>
        </g>
</svg>
<svg version="1.1" id="rate5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
     viewBox="0 0 295.996 295.996" style="enable-background:new 0 0 295.996 295.996;" xml:space="preserve">
<g>
    <path d="M147.998,0C66.392,0,0,66.392,0,147.998c0,81.606,66.392,147.998,147.998,147.998c81.606,0,147.998-66.392,147.998-147.998
		C295.996,66.392,229.605,0,147.998,0z M147.998,279.996c-36.257,0-69.143-14.696-93.023-38.44
		c-9.536-9.482-17.631-20.41-23.934-32.42C21.442,190.847,16,170.047,16,147.998C16,75.214,75.214,16,147.998,16
		c34.523,0,65.987,13.328,89.533,35.102c12.208,11.288,22.289,24.844,29.558,39.996c8.27,17.239,12.907,36.538,12.907,56.9
		C279.996,220.782,220.782,279.996,147.998,279.996z"/>
    <path d="M97.41,114.4c8.6,0,15.597,6.597,15.597,15.597h16c0-18-14.174-31.597-31.597-31.597
		c-17.423,0-31.597,13.597-31.597,31.597h16C81.813,120.997,88.811,114.4,97.41,114.4z"/>
    <path d="M198.584,114.4c8.6,0,15.597,6.597,15.597,15.597h16c0-18-14.174-31.597-31.597-31.597
		c-17.423,0-31.597,13.597-31.597,31.597h16C182.987,120.997,189.984,114.4,198.584,114.4z"/>
    <path d="M147.715,229.995c30.954,0,60.619-15.83,77.604-42.113l-13.439-8.684c-15.596,24.135-44.134,37.605-72.693,34.308
		c-22.262-2.567-42.849-15.393-55.072-34.308l-13.438,8.684c14.79,22.889,39.716,38.409,66.676,41.518
		C140.814,229.8,144.27,229.995,147.715,229.995z"/>
</g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
</svg>

</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="pageContent" class="contentDiv">
                <div id="header">
                    <p id="name">Агрегирующий суммаризатор</p>
                </div>
                <div id="timerDiv"><span>Время выполнения: <span id="timer">0</span></div>
                    <div id="searchForm" class="inner_div">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10">
                                    <input type="search" maxlength="255" autocomplete="off" id="search_input" name="query" placeholder=""/>
                                </div>
                                <div class="col-md-2">
                                    <button type="button" id="search_button" class="btn" data-toggle="button">Искать!</button>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>


            <div id="summaryContent" class="contentDiv" style="display: none;"></div>
        </div>
    </div>
</div>
</body>
</html>