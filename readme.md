<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>



## Rest API response in JSON

```json

{
    "model": {
        "id": 1,
        "number": "INV-20001",
        "customer_id": 1,
        "date": "2018-04-01",
        "due_date": "2018-08-01",
        "reference": "LPO #1",
        "terms_and_conditions": "Commodi blanditiis sapiente quam nulla deleniti ut. Dolorem non eaque reiciendis qui tenetur.",
        "sub_total": 1645,
        "discount": 16,
        "total": 1629,
        "created_at": "2018-06-28 16:02:51",
        "updated_at": "2018-06-28 16:02:51",
        "customer": {
            "id": 1,
            "firstname": "Pearline",
            "lastname": "Monahan",
            "email": "qhermann@example.com",
            "address": "6698 Noemy Causeway\nMoenmouth, KS 21630-4999",
            "created_at": "2018-06-28 16:02:49",
            "updated_at": "2018-06-28 16:02:49",
            "text": "Pearline - Monahan"
        },
        "items": [
            {
                "id": 1,
                "invoice_id": 1,
                "product_id": 5,
                "unit_price": 140,
                "qty": 5,
                "created_at": "2018-06-28 16:02:51",
                "updated_at": "2018-06-28 16:02:51",
                "product": {
                    "id": 5,
                    "item_code": "PDT-100014",
                    "description": "Name Of Product14",
                    "unit_price": 505,
                    "created_at": "2018-06-28 16:02:47",
                    "updated_at": "2018-06-28 16:02:47",
                    "text": "PDT-100014 - Name Of Product14"
                }
            },
            {
                "id": 2,
                "invoice_id": 1,
                "product_id": 1,
                "unit_price": 172,
                "qty": 4,
                "created_at": "2018-06-28 16:02:51",
                "updated_at": "2018-06-28 16:02:51",
                "product": {
                    "id": 1,
                    "item_code": "PDT-100010",
                    "description": "Name Of Product10",
                    "unit_price": 769,
                    "created_at": "2018-06-28 16:02:46",
                    "updated_at": "2018-06-28 16:02:46",
                    "text": "PDT-100010 - Name Of Product10"
                }
            },
            {
                "id": 3,
                "invoice_id": 1,
                "product_id": 9,
                "unit_price": 247,
                "qty": 6,
                "created_at": "2018-06-28 16:02:51",
                "updated_at": "2018-06-28 16:02:51",
                "product": {
                    "id": 9,
                    "item_code": "PDT-100018",
                    "description": "Name Of Product18",
                    "unit_price": 420,
                    "created_at": "2018-06-28 16:02:47",
                    "updated_at": "2018-06-28 16:02:47",
                    "text": "PDT-100018 - Name Of Product18"
                }
            },
            {
                "id": 4,
                "invoice_id": 1,
                "product_id": 27,
                "unit_price": 310,
                "qty": 5,
                "created_at": "2018-06-28 16:02:51",
                "updated_at": "2018-06-28 16:02:51",
                "product": {
                    "id": 27,
                    "item_code": "PDT-100036",
                    "description": "Name Of Product36",
                    "unit_price": 371,
                    "created_at": "2018-06-28 16:02:48",
                    "updated_at": "2018-06-28 16:02:48",
                    "text": "PDT-100036 - Name Of Product36"
                }
            }
        ]
    }
}

```


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
