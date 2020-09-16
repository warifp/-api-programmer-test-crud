<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>API Reference</title>

    <link rel="stylesheet" href="{{ asset('/docs/css/style.css') }}" />
    <script src="{{ asset('/docs/js/all.js') }}"></script>


          <script>
        $(function() {
            setupLanguages(["bash","javascript","php","python"]);
        });
      </script>
      </head>

  <body class="">
    <a href="#" id="nav-button">
      <span>
        NAV
        <img src="/docs/images/navbar.png" />
      </span>
    </a>
    <div class="tocify-wrapper">
        <img src="/docs/images/logo.png" />
                    <div class="lang-selector">
                                  <a href="#" data-language-name="bash">bash</a>
                                  <a href="#" data-language-name="javascript">javascript</a>
                                  <a href="#" data-language-name="php">php</a>
                                  <a href="#" data-language-name="python">python</a>
                            </div>
                            <div class="search">
              <input type="text" class="search" id="input-search" placeholder="Search">
            </div>
            <ul class="search-results"></ul>
              <div id="toc">
      </div>
                    <ul class="toc-footer">
                                  <li><a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a></li>
                            </ul>
            </div>
    <div class="page-wrapper">
      <div class="dark-box"></div>
      <div class="content">
          <!-- START_INFO -->
<h1>Info</h1>
<p>Welcome to the generated API reference.
<a href="{{ route("apidoc.json") }}">Get Postman Collection</a></p>
<!-- END_INFO -->
<h1>general</h1>
<!-- START_cd4a874127cd23508641c63b640ee838 -->
<h2>doc.json</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://127.0.0.1:8000/doc.json" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/doc.json"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://127.0.0.1:8000/doc.json',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://127.0.0.1:8000/doc.json'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "variables": [],
    "info": {
        "name": "Laravel API",
        "_postman_id": "1fac661d-9303-41d5-b442-9f514b06bc7b",
        "description": "",
        "schema": "https:\/\/schema.getpostman.com\/json\/collection\/v2.0.0\/collection.json"
    },
    "item": [
        {
            "name": "general",
            "description": "",
            "item": [
                {
                    "name": "doc.json",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "127.0.0.1:8000",
                            "path": "doc.json",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Display the specified resource.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "127.0.0.1:8000",
                            "path": "api\/book",
                            "query": [
                                {
                                    "key": "id",
                                    "value": "3",
                                    "description": "Book id.",
                                    "disabled": false
                                }
                            ]
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Show the form for creating a new resource.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "127.0.0.1:8000",
                            "path": "api\/book",
                            "query": [
                                {
                                    "key": "name",
                                    "value": "Nanti+Kita+Cerita+Tentang+Hari+Ini",
                                    "description": "Book title name.",
                                    "disabled": false
                                },
                                {
                                    "key": "serial_number",
                                    "value": "9CZ6XTDIMN7GE4WB",
                                    "description": "Serial number qr code book.",
                                    "disabled": false
                                },
                                {
                                    "key": "publisher_year",
                                    "value": "2020",
                                    "description": "Book published.",
                                    "disabled": false
                                },
                                {
                                    "key": "price",
                                    "value": "10000",
                                    "description": "Book price.",
                                    "disabled": false
                                }
                            ]
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Update the specified resource in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "127.0.0.1:8000",
                            "path": "api\/book",
                            "query": [
                                {
                                    "key": "id",
                                    "value": "3",
                                    "description": "Book id.",
                                    "disabled": false
                                },
                                {
                                    "key": "name",
                                    "value": "Nanti+Kita+Cerita+Tentang+Hari+Ini",
                                    "description": "Book title name.",
                                    "disabled": false
                                },
                                {
                                    "key": "serial_number",
                                    "value": "9CZ6XTDIMN7GE4WB",
                                    "description": "Serial number qr code book.",
                                    "disabled": false
                                },
                                {
                                    "key": "publisher_year",
                                    "value": "2020",
                                    "description": "Book published.",
                                    "disabled": false
                                },
                                {
                                    "key": "price",
                                    "value": "10000",
                                    "description": "Book price.",
                                    "disabled": false
                                }
                            ]
                        },
                        "method": "PUT",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Remove the specified resource from storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "127.0.0.1:8000",
                            "path": "api\/book",
                            "query": [
                                {
                                    "key": "id",
                                    "value": "3",
                                    "description": "Book id.",
                                    "disabled": false
                                }
                            ]
                        },
                        "method": "DELETE",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                }
            ]
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET doc.json</code></p>
<!-- END_cd4a874127cd23508641c63b640ee838 -->
<!-- START_87639d2c13c955291d7ef79a0c226410 -->
<h2>Display the specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://127.0.0.1:8000/api/book?id=3" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/book"
);

let params = {
    "id": "3",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://127.0.0.1:8000/api/book',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'id'=&gt; '3',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://127.0.0.1:8000/api/book'
params = {
  'id': '3',
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers, params=params)
response.json()</code></pre>
<blockquote>
<p>Example response (422):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "The given data was invalid.",
    "errors": {
        "id": [
            "Book not found."
        ]
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/book</code></p>
<h4>Query Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>id</code></td>
<td>optional</td>
<td>Book id.</td>
</tr>
</tbody>
</table>
<!-- END_87639d2c13c955291d7ef79a0c226410 -->
<!-- START_d1ae1dbcf13d9384ee96ea1f12513f06 -->
<h2>Show the form for creating a new resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://127.0.0.1:8000/api/book?name=Nanti+Kita+Cerita+Tentang+Hari+Ini&amp;serial_number=9CZ6XTDIMN7GE4WB&amp;publisher_year=2020&amp;price=10000" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/book"
);

let params = {
    "name": "Nanti Kita Cerita Tentang Hari Ini",
    "serial_number": "9CZ6XTDIMN7GE4WB",
    "publisher_year": "2020",
    "price": "10000",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://127.0.0.1:8000/api/book',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'name'=&gt; 'Nanti Kita Cerita Tentang Hari Ini',
            'serial_number'=&gt; '9CZ6XTDIMN7GE4WB',
            'publisher_year'=&gt; '2020',
            'price'=&gt; '10000',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://127.0.0.1:8000/api/book'
params = {
  'name': 'Nanti Kita Cerita Tentang Hari Ini',
  'serial_number': '9CZ6XTDIMN7GE4WB',
  'publisher_year': '2020',
  'price': '10000',
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers, params=params)
response.json()</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "The article was successfully added."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/book</code></p>
<h4>Query Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>name</code></td>
<td>required</td>
<td>Book title name.</td>
</tr>
<tr>
<td><code>serial_number</code></td>
<td>optional</td>
<td>Serial number qr code book.</td>
</tr>
<tr>
<td><code>publisher_year</code></td>
<td>required</td>
<td>Book published.</td>
</tr>
<tr>
<td><code>price</code></td>
<td>required</td>
<td>Book price.</td>
</tr>
</tbody>
</table>
<!-- END_d1ae1dbcf13d9384ee96ea1f12513f06 -->
<!-- START_82de77bf2f938174b70e875ecb486591 -->
<h2>Update the specified resource in storage.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "http://127.0.0.1:8000/api/book?id=3&amp;name=Nanti+Kita+Cerita+Tentang+Hari+Ini&amp;serial_number=9CZ6XTDIMN7GE4WB&amp;publisher_year=2020&amp;price=10000" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/book"
);

let params = {
    "id": "3",
    "name": "Nanti Kita Cerita Tentang Hari Ini",
    "serial_number": "9CZ6XTDIMN7GE4WB",
    "publisher_year": "2020",
    "price": "10000",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://127.0.0.1:8000/api/book',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'id'=&gt; '3',
            'name'=&gt; 'Nanti Kita Cerita Tentang Hari Ini',
            'serial_number'=&gt; '9CZ6XTDIMN7GE4WB',
            'publisher_year'=&gt; '2020',
            'price'=&gt; '10000',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://127.0.0.1:8000/api/book'
params = {
  'id': '3',
  'name': 'Nanti Kita Cerita Tentang Hari Ini',
  'serial_number': '9CZ6XTDIMN7GE4WB',
  'publisher_year': '2020',
  'price': '10000',
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('PUT', url, headers=headers, params=params)
response.json()</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "The article was successfully updated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>PUT api/book</code></p>
<h4>Query Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>id</code></td>
<td>required</td>
<td>Book id.</td>
</tr>
<tr>
<td><code>name</code></td>
<td>optional</td>
<td>Book title name.</td>
</tr>
<tr>
<td><code>serial_number</code></td>
<td>optional</td>
<td>Serial number qr code book.</td>
</tr>
<tr>
<td><code>publisher_year</code></td>
<td>optional</td>
<td>Book published.</td>
</tr>
<tr>
<td><code>price</code></td>
<td>optional</td>
<td>Book price.</td>
</tr>
</tbody>
</table>
<!-- END_82de77bf2f938174b70e875ecb486591 -->
<!-- START_0c7bb6fade47be92ccbdfe79144f2d7e -->
<h2>Remove the specified resource from storage.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://127.0.0.1:8000/api/book?id=3" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/book"
);

let params = {
    "id": "3",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://127.0.0.1:8000/api/book',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'id'=&gt; '3',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://127.0.0.1:8000/api/book'
params = {
  'id': '3',
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('DELETE', url, headers=headers, params=params)
response.json()</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "The book was successfully deleted."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE api/book</code></p>
<h4>Query Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>id</code></td>
<td>required</td>
<td>Book id.</td>
</tr>
</tbody>
</table>
<!-- END_0c7bb6fade47be92ccbdfe79144f2d7e -->
      </div>
      <div class="dark-box">
                        <div class="lang-selector">
                                    <a href="#" data-language-name="bash">bash</a>
                                    <a href="#" data-language-name="javascript">javascript</a>
                                    <a href="#" data-language-name="php">php</a>
                                    <a href="#" data-language-name="python">python</a>
                              </div>
                </div>
    </div>
  </body>
</html>