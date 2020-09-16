---
title: API Reference

language_tabs:
- bash
- javascript
- php
- python

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://127.0.0.1:8000/docs/collection.json)

<!-- END_INFO -->

#general


<!-- START_cd4a874127cd23508641c63b640ee838 -->
## doc.json
> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/doc.json" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://127.0.0.1:8000/doc.json',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://127.0.0.1:8000/doc.json'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (200):

```json
{
    "variables": [],
    "info": {
        "name": "Laravel API",
        "_postman_id": "fc26047d-ff76-4e05-9b89-b4551825101a",
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
}
```

### HTTP Request
`GET doc.json`


<!-- END_cd4a874127cd23508641c63b640ee838 -->

<!-- START_87639d2c13c955291d7ef79a0c226410 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/book?id=3" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/book"
);

let params = {
    "id": "3",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://127.0.0.1:8000/api/book',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'query' => [
            'id'=> '3',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
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
response.json()
```


> Example response (422):

```json
{
    "message": "The given data was invalid.",
    "errors": {
        "id": [
            "Book not found."
        ]
    }
}
```

### HTTP Request
`GET api/book`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  optional  | Book id.

<!-- END_87639d2c13c955291d7ef79a0c226410 -->

<!-- START_d1ae1dbcf13d9384ee96ea1f12513f06 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/book?name=Nanti+Kita+Cerita+Tentang+Hari+Ini&serial_number=9CZ6XTDIMN7GE4WB&publisher_year=2020&price=10000" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/book"
);

let params = {
    "name": "Nanti Kita Cerita Tentang Hari Ini",
    "serial_number": "9CZ6XTDIMN7GE4WB",
    "publisher_year": "2020",
    "price": "10000",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://127.0.0.1:8000/api/book',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'query' => [
            'name'=> 'Nanti Kita Cerita Tentang Hari Ini',
            'serial_number'=> '9CZ6XTDIMN7GE4WB',
            'publisher_year'=> '2020',
            'price'=> '10000',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
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
response.json()
```


> Example response (200):

```json
{
    "message": "The article was successfully added."
}
```

### HTTP Request
`POST api/book`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `name` |  required  | Book title name.
    `serial_number` |  optional  | Serial number qr code book.
    `publisher_year` |  required  | Book published.
    `price` |  required  | Book price.

<!-- END_d1ae1dbcf13d9384ee96ea1f12513f06 -->

<!-- START_82de77bf2f938174b70e875ecb486591 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://127.0.0.1:8000/api/book?id=3&name=Nanti+Kita+Cerita+Tentang+Hari+Ini&serial_number=9CZ6XTDIMN7GE4WB&publisher_year=2020&price=10000" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'http://127.0.0.1:8000/api/book',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'query' => [
            'id'=> '3',
            'name'=> 'Nanti Kita Cerita Tentang Hari Ini',
            'serial_number'=> '9CZ6XTDIMN7GE4WB',
            'publisher_year'=> '2020',
            'price'=> '10000',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
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
response.json()
```


> Example response (200):

```json
{
    "message": "The article was successfully updated."
}
```

### HTTP Request
`PUT api/book`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | Book id.
    `name` |  optional  | Book title name.
    `serial_number` |  optional  | Serial number qr code book.
    `publisher_year` |  optional  | Book published.
    `price` |  optional  | Book price.

<!-- END_82de77bf2f938174b70e875ecb486591 -->

<!-- START_0c7bb6fade47be92ccbdfe79144f2d7e -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://127.0.0.1:8000/api/book?id=3" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/book"
);

let params = {
    "id": "3",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'http://127.0.0.1:8000/api/book',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'query' => [
            'id'=> '3',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
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
response.json()
```


> Example response (200):

```json
{
    "message": "The book was successfully deleted."
}
```

### HTTP Request
`DELETE api/book`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | Book id.

<!-- END_0c7bb6fade47be92ccbdfe79144f2d7e -->


