<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>GotHub Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@10.7.2/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@10.7.2/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
                    body .content .php-example code { display: none; }
            </style>

    <script>
        var baseUrl = "http://reservandonos.test";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-4.0.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-4.0.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;,&quot;php&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image" />
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                                            <button type="button" class="lang-button" data-language-name="php">php</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi--lang---items--">
                                <a href="#endpoints-GETapi--lang---items--">Lista de los repositorios mas populares por lenguaje</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

            <ul class="toc-footer" id="toc-footer">
                            <li><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                            <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
                    </ul>
        <ul class="toc-footer" id="last-updated">
        <li>Last updated: October 4 2022</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<p>Informacion necesaria para poder interactuar con el api para la evaluación.</p>
<blockquote>
<p>Base URL</p>
</blockquote>
<pre><code class="language-yaml">http://reservandonos.test</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-GETapi--lang---items--">Lista de los repositorios mas populares por lenguaje</h2>

<p>
</p>

<p>Te permite listar los repositorios mas populares por lenguaje basados en los parametros proporcionados</p>

<span id="example-requests-GETapi--lang---items--">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://reservandonos.test/api/JavaScript/2" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://reservandonos.test/api/JavaScript/2"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://reservandonos.test/api/JavaScript/2',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi--lang---items--">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 56
access-control-allow-origin: http://localhost:3000
access-control-allow-credentials: true
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Se han encontrado resultados&quot;,
    &quot;data&quot;: {
        &quot;0&quot;: {
            &quot;rank&quot;: &quot;1&quot;,
            &quot;item&quot;: &quot;top-100-stars&quot;,
            &quot;repo_name&quot;: &quot;freeCodeCamp&quot;,
            &quot;stars&quot;: &quot;297277&quot;,
            &quot;forks&quot;: &quot;20885&quot;,
            &quot;language&quot;: &quot;JavaScript&quot;,
            &quot;repo_url&quot;: &quot;https://github.com/freeCodeCamp/freeCodeCamp&quot;,
            &quot;username&quot;: &quot;freeCodeCamp&quot;,
            &quot;issues&quot;: &quot;4817&quot;,
            &quot;last_commit&quot;: &quot;2019-02-07T03:56:32Z&quot;,
            &quot;description&quot;: &quot;The https://www.freeCodeCamp.org open source codebase and curriculum. Learn to code for free together with millions of people.&quot;
        },
        &quot;1270&quot;: {
            &quot;rank&quot;: &quot;1&quot;,
            &quot;item&quot;: &quot;JavaScript&quot;,
            &quot;repo_name&quot;: &quot;freeCodeCamp&quot;,
            &quot;stars&quot;: &quot;297277&quot;,
            &quot;forks&quot;: &quot;20885&quot;,
            &quot;language&quot;: &quot;JavaScript&quot;,
            &quot;repo_url&quot;: &quot;https://github.com/freeCodeCamp/freeCodeCamp&quot;,
            &quot;username&quot;: &quot;freeCodeCamp&quot;,
            &quot;issues&quot;: &quot;4817&quot;,
            &quot;last_commit&quot;: &quot;2019-02-07T03:56:32Z&quot;,
            &quot;description&quot;: &quot;The https://www.freeCodeCamp.org open source codebase and curriculum. Learn to code for free together with millions of people.&quot;
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi--lang---items--" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi--lang---items--"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi--lang---items--"></code></pre>
</span>
<span id="execution-error-GETapi--lang---items--" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi--lang---items--"></code></pre>
</span>
<form id="form-GETapi--lang---items--" data-method="GET"
      data-path="api/{lang}/{items?}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi--lang---items--', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi--lang---items--"
                    onclick="tryItOut('GETapi--lang---items--');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi--lang---items--"
                    onclick="cancelTryOut('GETapi--lang---items--');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi--lang---items--" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/{lang}/{items?}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>lang</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="lang"
               data-endpoint="GETapi--lang---items--"
               value="JavaScript"
               data-component="url" hidden>
    <br>
<p>Valor que indica el lenguaje a buscar.</p>
            </p>
                    <p>
                <b><code>items</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number"
               name="items"
               data-endpoint="GETapi--lang---items--"
               value="2"
               data-component="url" hidden>
    <br>
<p>Valor que indica la cantidad de elementos a tomar en la busqueda.</p>
            </p>
                    </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                                                        <button type="button" class="lang-button" data-language-name="php">php</button>
                            </div>
            </div>
</div>
</body>
</html>
