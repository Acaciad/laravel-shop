<?php

return [
    'alipay' => [

        'app_id' => '2021000116678793',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAuufQ/7jQdboNPVoVipq9vdMMCpnCSh3tY9aue8EGrwQkFxq5FC1SO/pWstKQFekO2Jm8PL01tMKhV/tvZcLCurT8ZZy99ITMZro0pME1Sl6OmuI9spY2XiHBdBPZJnaQ3Ep+9pPEJJ6nEr0bXrFhPVXOY8jSUHd0sa2ggEsc/FuXRPmeT9gO0nYRYErn53vsNSTgBOr5xsBOB/q7o9oWL/1pChZnvFyOrydh8AQonzw4xzSz4H5DAVSLscjFEOn2h5F0vqMBa67k6WbMDCgiBxJRYhRdHFCe7N2AD51+EPYPUc0tvlCaoLMv6FwFmA8e+K3a4BpjdH34+vzYVa4oxwIDAQAB',
        'private_key' => 'MIIEowIBAAKCAQEAw7Ao1b0GWr8QAcy+DnRu/0n01NPP+yqV0vD++TfrUtQjHaK+6vlhDga4Bv8jckb0t0w+OZniO1IUkTcZTraNifaqSafT78EglcjPM7hWKQpbkrUePdXXAYdURj0nOSpmnX1UTATOY7F6aFM3UZ0aRqSOK8XjzBvEYXR2qGqvJzLliRs86/Yrq6gIrQ2oAeDiIX/l6Od8kaHFwxsMhHNY/XOIyZo/MzSfhU5gZ4sFqAIWZJlJl8QD1UczX1dzoBNwQgqFJqp9llQ/tx+zz4qzxxRBETecIy0EZpcEGW5J5yDOTZLnaB9PEwhA5z4O7P8w976InNNI4foQm/znAGW+MQIDAQABAoIBAQCpqCnPHUHMHUgQd2TzfUjadlEYz8bKeGJK7vvwL+YK+razM+0YJTtbAMI99qfRpOj3ndd48wxr577DI6UCVE0kJsH+d83MWIEau23A5nl0vXElIXflnmb5AU40U0KVUkiDFCyod6ZEUpPQrQ0R6gXk5zgHhVr5E73PzDwvycavUPEfmpYsBDtaJym0PEXVJlgNhJhrnC9o+SzEBm7R6QluuekVMc6BpAbTXurQeqJ5Pf/HlHM4s9X3khoM+p8/0U2OQHzdm1i1HugMZIe3QhHsCOGnkLE5wsd0ZDmj2VjhB/wDq6RcFWHPXxH6Z99BTq1Z7HKQTEcmOvW59rAsyWSdAoGBAO/PWw6xLRafZ3D0Ox5h7I8C51Z6BouhdVZGct8F7dDUu6LcEkjWU9IOThqSz2oeAhyUhsZmE6nfvBS5Yy+79mFat7qvR6uSSX3zOELPsdVa3XfWMa486N+TzzbUu0tWH8lwduGUQL+9SslAgRJBguozxbYoZBLN/tmQOtgBrT7LAoGBANDmPoH+ayK5lRqHhLjhqGan+KZtrpZTnyJTAcMQHA9s4GUPYI7sNv7yhX8BIyriGn/0Fqm4Ya+t/Hi/5N0/nSq7VxWJgsWvwRO9+y8lv6jYz9KM7X8pD4uVt+khWCVhQUNiUliKnXNtwnixyC9NYO8SUvnESo6D0TSixKhbVXtzAoGAcMsd8B4jr/VP6Q/m0paKdoWOG92PQJOzpd3C3+VhAw1cJ/DM5NdyW2WBFPyidC4jHiA5+A1BCHCEfVbpMSV+cDIEItmYozlOOeBxQPOBmHGBo4DqoyJhAe/60bZjVb7veobcU6OwhL7a8yfUzapkkhXB07jRwQqE6P3uv3SicNsCgYA/x1wkQjIhivmb/O4nqDXLCdOftHMOUH+QcjlifcOjbgFguX4ohLQRyKe7a/R5vkiK8lINBU9F3N/tWeEdL7PjfQkMeUxk4NEZHvLWpTbL7U4eIYrNPRMS8eYRlm2cFAJh+V3czI1f1Y3/XYAZ+Qz0UOrmeOiudE5mPJ/AKwqBQwKBgASnuG1NMiwZAH2vcEhdQyjvOSS29y63IfWlUpq7pvGcITT01EFIjmZzfvv4ZXkLRyNkczghNvRoF0s8ZZdQ1h6WtWzVZL0wJNQv2Tt/RWtiautV1Sg85vaJi0b5gljnJ0wJVZujNUxoup1og+/FnuN0WOP7AMn3gzl4E1ZEjQij',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];