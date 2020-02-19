---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#general


<!-- START_90da48e118b0833598bda2649ee4663b -->
## Display a listing of commodities.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/commodities" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/commodities"
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


> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "segment": 10000000,
            "segment_name": "bro123",
            "family": 10100000,
            "family_name": "Live animals",
            "class": 10101500,
            "class_name": "Livestock",
            "commodity": 10101501,
            "commodity_name": "Cats",
            "created_at": null,
            "updated_at": "2020-02-19 13:19:19"
        },
        {
            "id": 2,
            "segment": 10000000,
            "segment_name": "Live Plant and Animal Material and Accessories and Supplies",
            "family": 10100000,
            "family_name": "Live animals",
            "class": 10101500,
            "class_name": "Livestock",
            "commodity": 10101502,
            "commodity_name": "Dogs",
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 3,
            "segment": 10000000,
            "segment_name": "Live Plant and Animal Material and Accessories and Supplies",
            "family": 10100000,
            "family_name": "Live animals",
            "class": 10101500,
            "class_name": "Livestock",
            "commodity": 10101504,
            "commodity_name": "Mink",
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 4,
            "segment": 10000000,
            "segment_name": "Live Plant and Animal Material and Accessories and Supplies",
            "family": 10100000,
            "family_name": "Live animals",
            "class": 10101500,
            "class_name": "Livestock",
            "commodity": 10101505,
            "commodity_name": "Rats",
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 5,
            "segment": 10000000,
            "segment_name": "Live Plant and Animal Material and Accessories and Supplies",
            "family": 10100000,
            "family_name": "Live animals",
            "class": 10101500,
            "class_name": "Livestock",
            "commodity": 10101506,
            "commodity_name": "Horses",
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 6,
            "segment": 10000000,
            "segment_name": "Live Plant and Animal Material and Accessories and Supplies",
            "family": 10100000,
            "family_name": "Live animals",
            "class": 10101500,
            "class_name": "Livestock",
            "commodity": 10101507,
            "commodity_name": "Sheep",
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 7,
            "segment": 10000000,
            "segment_name": "Live Plant and Animal Material and Accessories and Supplies",
            "family": 10100000,
            "family_name": "Live animals",
            "class": 10101500,
            "class_name": "Livestock",
            "commodity": 10101508,
            "commodity_name": "Goats",
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 8,
            "segment": 10000000,
            "segment_name": "Live Plant and Animal Material and Accessories and Supplies",
            "family": 10100000,
            "family_name": "Live animals",
            "class": 10101500,
            "class_name": "Livestock",
            "commodity": 10101509,
            "commodity_name": "Asses",
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 9,
            "segment": 10000000,
            "segment_name": "Live Plant and Animal Material and Accessories and Supplies",
            "family": 10100000,
            "family_name": "Live animals",
            "class": 10101500,
            "class_name": "Livestock",
            "commodity": 10101510,
            "commodity_name": "Mice",
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 10,
            "segment": 10000000,
            "segment_name": "Live Plant and Animal Material and Accessories and Supplies",
            "family": 10100000,
            "family_name": "Live animals",
            "class": 10101500,
            "class_name": "Livestock",
            "commodity": 10101511,
            "commodity_name": "Swine",
            "created_at": null,
            "updated_at": null
        }
    ],
    "links": {
        "first": "http:\/\/localhost\/api\/commodities?page=1",
        "last": "http:\/\/localhost\/api\/commodities?page=1000",
        "prev": null,
        "next": "http:\/\/localhost\/api\/commodities?page=2"
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1000,
        "path": "http:\/\/localhost\/api\/commodities",
        "per_page": 10,
        "to": 10,
        "total": 9998
    }
}
```

### HTTP Request
`GET api/commodities`


<!-- END_90da48e118b0833598bda2649ee4663b -->

<!-- START_f511c3713a763c05be5b3b000fe9cfa0 -->
## Display the specified commodity.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/commodity/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/commodity/1"
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


> Example response (200):

```json
{
    "data": {
        "id": 1,
        "segment": 10000000,
        "segment_name": "bro123",
        "family": 10100000,
        "family_name": "Live animals",
        "class": 10101500,
        "class_name": "Livestock",
        "commodity": 10101501,
        "commodity_name": "Cats",
        "created_at": null,
        "updated_at": "2020-02-19 13:19:19"
    }
}
```

### HTTP Request
`GET api/commodity/{id}`


<!-- END_f511c3713a763c05be5b3b000fe9cfa0 -->

<!-- START_49bca6a7cd348e106a383cb62395ca74 -->
## Store a newly created commodity.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/commodity" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/commodity"
);

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



### HTTP Request
`POST api/commodity`


<!-- END_49bca6a7cd348e106a383cb62395ca74 -->

<!-- START_4b1cc0355c8bff45a07617a937da25ad -->
## Update the specified commodity.

> Example request:

```bash
curl -X PATCH \
    "http://localhost/api/commodity/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/commodity/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PATCH",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PATCH api/commodity/{id}`


<!-- END_4b1cc0355c8bff45a07617a937da25ad -->

<!-- START_536502be3051217c2ecfa09dbafa1364 -->
## Remove the specified commodity.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/commodity/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/commodity/1"
);

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



### HTTP Request
`DELETE api/commodity/{id}`


<!-- END_536502be3051217c2ecfa09dbafa1364 -->


