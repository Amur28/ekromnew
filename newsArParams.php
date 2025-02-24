Array
(
    [PERSON_TYPE] => Array
        (
            [1] => Array
                (
                    [ID] => 1
                    [LID] => s1
                    [NAME] => Физическое лицо
                    [CODE] => 
                    [SORT] => 100
                    [ACTIVE] => Y
                    [XML_ID] => bx_02d990b7b4768de1dfcb50dc4401e8dd
                    [ENTITY_REGISTRY_TYPE] => ORDER
                    [CHECKED] => Y
                )

            [2] => Array
                (
                    [ID] => 2
                    [LID] => s1
                    [NAME] => Юридическое лицо
                    [CODE] => 
                    [SORT] => 150
                    [ACTIVE] => Y
                    [XML_ID] => bx_5ce88b673aaa42e2155026be40876aa6
                    [ENTITY_REGISTRY_TYPE] => ORDER
                )

        )

    [PAY_SYSTEM] => Array
        (
            [0] => Array
                (
                    [ID] => 1
                    [PAY_SYSTEM_ID] => 1
                    [NAME] => Наличными при получении товара
                    [PSA_NAME] => Наличными при получении
                    [CODE] => CASH
                    [SORT] => 80
                    [DESCRIPTION] => Оплата производится наличными деньгами, в момент получения заказа. Подтверждением вашей оплаты является фискальный кассовый чек, вручаемый во время получения и оплаты заказа.
                    [PS_MODE] => 
                    [PS_CLIENT_TYPE] => 
                    [HAVE_PRICE] => N
                    [ACTIVE] => Y
                    [ALLOW_EDIT_PAYMENT] => Y
                    [IS_CASH] => Y
                    [AUTO_CHANGE_1C] => N
                    [CAN_PRINT_CHECK] => N
                    [ENTITY_REGISTRY_TYPE] => ORDER
                    [XML_ID] => bx_53cb29cad359a60df1c398fdca36a4e3
                    [PSA_ID] => 1
                    [PSA_ACTION_FILE] => cash
                    [PSA_RESULT_FILE] => 
                    [PSA_NEW_WINDOW] => N
                    [PSA_PERSON_TYPE_ID] => 
                    [PSA_PARAMS] => a:1:{s:16:"BX_PAY_SYSTEM_ID";i:1;}
                    [PSA_TARIF] => 
                    [PSA_HAVE_PAYMENT] => Y
                    [PSA_HAVE_ACTION] => N
                    [PSA_HAVE_RESULT] => N
                    [PSA_HAVE_PREPAY] => N
                    [PSA_HAVE_RESULT_RECEIVE] => N
                    [PSA_ENCODING] => 
                    [PSA_LOGOTIP] => Array
                        (
                            [ID] => 930
                            [TIMESTAMP_X] => 17.07.2020 20:04:42
                            [MODULE_ID] => sale
                            [HEIGHT] => 249
                            [WIDTH] => 512
                            [FILE_SIZE] => 3640
                            [CONTENT_TYPE] => image/png
                            [SUBDIR] => sale/paysystem/logotip/26f
                            [FILE_NAME] => 26f22e85302f8f8ad3031d263f066805.png
                            [ORIGINAL_NAME] => cash.png
                            [DESCRIPTION] => 
                            [HANDLER_ID] => 
                            [EXTERNAL_ID] => 412f25452b930ed2bab5a5af216f9764
                            [VERSION_ORIGINAL_ID] => 
                            [META] => 
                            [SRC] => /upload/sale/paysystem/logotip/26f/26f22e85302f8f8ad3031d263f066805.png
                        )

                    [PRICE] => 0
                )

            [1] => Array
                (
                    [ID] => 16
                    [PAY_SYSTEM_ID] => 16
                    [NAME] => Интернет-эквайринг Сбербанк
                    [PSA_NAME] => Интернет-эквайринг Сбербанк
                    [CODE] => 
                    [SORT] => 100
                    [DESCRIPTION] => 

                    [PS_MODE] => 
                    [PS_CLIENT_TYPE] => b2c
                    [HAVE_PRICE] => N
                    [ACTIVE] => Y
                    [ALLOW_EDIT_PAYMENT] => Y
                    [IS_CASH] => N
                    [AUTO_CHANGE_1C] => N
                    [CAN_PRINT_CHECK] => N
                    [ENTITY_REGISTRY_TYPE] => ORDER
                    [XML_ID] => bx_63902c9839928
                    [PSA_ID] => 16
                    [PSA_ACTION_FILE] => sberbank_ecom2
                    [PSA_RESULT_FILE] => 
                    [PSA_NEW_WINDOW] => N
                    [PSA_PERSON_TYPE_ID] => 
                    [PSA_PARAMS] => a:1:{s:16:"BX_PAY_SYSTEM_ID";i:16;}
                    [PSA_TARIF] => 
                    [PSA_HAVE_PAYMENT] => Y
                    [PSA_HAVE_ACTION] => N
                    [PSA_HAVE_RESULT] => N
                    [PSA_HAVE_PREPAY] => Y
                    [PSA_HAVE_RESULT_RECEIVE] => Y
                    [PSA_ENCODING] => 
                    [PSA_LOGOTIP] => Array
                        (
                            [ID] => 1876297
                            [TIMESTAMP_X] => 07.12.2022 11:03:37
                            [MODULE_ID] => sale
                            [HEIGHT] => 60
                            [WIDTH] => 60
                            [FILE_SIZE] => 10014
                            [CONTENT_TYPE] => image/png
                            [SUBDIR] => sale/paysystem/logotip/bd4
                            [FILE_NAME] => r55ahqq4cfa72utc3vdloihwecn2uwos.png
                            [ORIGINAL_NAME] => sberbank_ecom2.png
                            [DESCRIPTION] => 
                            [HANDLER_ID] => 
                            [EXTERNAL_ID] => 92c9422fcfba48fda41090b16b850b01
                            [VERSION_ORIGINAL_ID] => 
                            [META] => 
                            [SRC] => /upload/sale/paysystem/logotip/bd4/r55ahqq4cfa72utc3vdloihwecn2uwos.png
                        )

                    [CHECKED] => Y
                    [PRICE] => 0
                )

            [2] => Array
                (
                    [ID] => 11
                    [PAY_SYSTEM_ID] => 11
                    [NAME] => Картой при получении товара (только в пункте выдачи)
                    [PSA_NAME] => Картой при получении
                    [CODE] => CARDCASH
                    [SORT] => 100
                    [DESCRIPTION] => 

                    [PS_MODE] => 
                    [PS_CLIENT_TYPE] => 
                    [HAVE_PRICE] => N
                    [ACTIVE] => Y
                    [ALLOW_EDIT_PAYMENT] => Y
                    [IS_CASH] => N
                    [AUTO_CHANGE_1C] => N
                    [CAN_PRINT_CHECK] => N
                    [ENTITY_REGISTRY_TYPE] => ORDER
                    [XML_ID] => bx_5d52aa2a40dbf
                    [PSA_ID] => 11
                    [PSA_ACTION_FILE] => cash
                    [PSA_RESULT_FILE] => 
                    [PSA_NEW_WINDOW] => N
                    [PSA_PERSON_TYPE_ID] => 
                    [PSA_PARAMS] => a:1:{s:16:"BX_PAY_SYSTEM_ID";i:11;}
                    [PSA_TARIF] => 
                    [PSA_HAVE_PAYMENT] => Y
                    [PSA_HAVE_ACTION] => N
                    [PSA_HAVE_RESULT] => N
                    [PSA_HAVE_PREPAY] => N
                    [PSA_HAVE_RESULT_RECEIVE] => N
                    [PSA_ENCODING] => 
                    [PSA_LOGOTIP] => Array
                        (
                            [ID] => 7857
                            [TIMESTAMP_X] => 17.07.2020 20:04:49
                            [MODULE_ID] => sale
                            [HEIGHT] => 56
                            [WIDTH] => 212
                            [FILE_SIZE] => 2311
                            [CONTENT_TYPE] => image/png
                            [SUBDIR] => sale/paysystem/logotip/483
                            [FILE_NAME] => 483b082114add193d1541a50286f4af3.png
                            [ORIGINAL_NAME] => cash.png
                            [DESCRIPTION] => 
                            [HANDLER_ID] => 
                            [EXTERNAL_ID] => 9270748a7f0b8e4e0a619bd81445a355
                            [VERSION_ORIGINAL_ID] => 
                            [META] => 
                            [SRC] => /upload/sale/paysystem/logotip/483/483b082114add193d1541a50286f4af3.png
                        )

                    [PRICE] => 0
                )

        )

    [ORDER_PROP] => Array
        (
            [USER_PROFILES] => Array
                (
                    [2513] => Array
                        (
                            [ID] => 2513
                            [~ID] => 2513
                            [NAME] => Alto Promo
                            [~NAME] => Alto Promo
                            [USER_ID] => 1
                            [~USER_ID] => 1
                            [PERSON_TYPE_ID] => 1
                            [~PERSON_TYPE_ID] => 1
                            [DATE_UPDATE] => 12.02.2025 16:26:24
                            [~DATE_UPDATE] => 12.02.2025 16:26:24
                            [DATE_UPDATE_RAW] => 2025-02-12 16:26:24
                            [~DATE_UPDATE_RAW] => 2025-02-12 16:26:24
                            [CHECKED] => Y
                        )

                )

        )

    [DELIVERY] => Array
        (
            [3] => Array
                (
                    [PRICE] => 0
                    [PRICE_FORMATED] => 0 ₽
                    [CALCULATE_DESCRIPTION] => 
                    [ID] => 3
                    [NAME] => Самовывоз
                    [OWN_NAME] => Самовывоз
                    [DESCRIPTION] => г. Екатеринбург, проезд Промышленный, 9А, строение 4 
8 (343) 379-98-68 Рабочие дни с 08:00 до 17:00
 

 г. Тюмень ул. Авторемонтная, 1а, строение 2
 
8 (3452) 302-300 Будние дни - с 9:00 до 18:00, Сб - с 10:00 до 14:00, Вск - Выходной
 

 г. Челябинск ул.Троицкий Тракт 20 А офис 10 
 
8 (951) 119-55-45 Рабочие дни с 09:00 до 17:00
 

 


                    [FIELD_NAME] => DELIVERY_ID
                    [CURRENCY] => RUB
                    [SORT] => 300
                    [EXTRA_SERVICES] => Array
                        (
                        )

                    [STORE] => Array
                        (
                        )

                    [LOGOTIP] => Array
                        (
                            [ID] => 940
                            [TIMESTAMP_X] => 17.07.2020 20:05:01
                            [MODULE_ID] => sale
                            [HEIGHT] => 249
                            [WIDTH] => 512
                            [FILE_SIZE] => 3774
                            [CONTENT_TYPE] => image/png
                            [SUBDIR] => sale/delivery/logotip/e56
                            [FILE_NAME] => e5637ccb820cd5a5d806470fdd8a4a2f.png
                            [ORIGINAL_NAME] => self_logo.png
                            [DESCRIPTION] => 
                            [HANDLER_ID] => 
                            [EXTERNAL_ID] => e0d9c12d20ba17af4cc763bdebfad8c6
                            [VERSION_ORIGINAL_ID] => 
                            [META] => 
                            [SRC] => /upload/sale/delivery/logotip/e56/e5637ccb820cd5a5d806470fdd8a4a2f.png
                        )

                )

            [2] => Array
                (
                    [CHECKED] => Y
                    [PRICE] => 1000
                    [PRICE_FORMATED] => 1 000 ₽
                    [DELIVERY_DISCOUNT_PRICE] => 0
                    [DELIVERY_DISCOUNT_PRICE_FORMATED] => 0 ₽
                    [PERIOD_TEXT] =>  от 1 до 10 дней 
                    [CALCULATE_DESCRIPTION] => 
                    [ID] => 2
                    [NAME] => Доставка курьером
                    [OWN_NAME] => Доставка курьером
                    [DESCRIPTION] => Точные сроки и стоимость доставки уточняйте по телефону или дождитесь звонка менеджера после оформления заказа. Вся информация о доставке и подъеме товара размещена в разделе "Доставка" на нашем сайте. Ваш адрес уточнят при звонке.
                    [FIELD_NAME] => DELIVERY_ID
                    [CURRENCY] => RUB
                    [SORT] => 400
                    [EXTRA_SERVICES] => Array
                        (
                        )

                    [STORE] => Array
                        (
                        )

                    [LOGOTIP] => Array
                        (
                            [ID] => 939
                            [TIMESTAMP_X] => 17.07.2020 20:05:01
                            [MODULE_ID] => sale
                            [HEIGHT] => 249
                            [WIDTH] => 512
                            [FILE_SIZE] => 4845
                            [CONTENT_TYPE] => image/png
                            [SUBDIR] => sale/delivery/logotip/2ac
                            [FILE_NAME] => 2ac1bc683518df282618359b319ea9e6.png
                            [ORIGINAL_NAME] => courier_logo.png
                            [DESCRIPTION] => 
                            [HANDLER_ID] => 
                            [EXTERNAL_ID] => b3f6c535cb63e45c2e539b0100513378
                            [VERSION_ORIGINAL_ID] => 
                            [META] => 
                            [SRC] => /upload/sale/delivery/logotip/2ac/2ac1bc683518df282618359b319ea9e6.png
                        )

                )

        )

    [TAX] => Array
        (
        )

    [ERROR] => Array
        (
        )

    [ERROR_SORTED] => Array
        (
        )

    [WARNING] => Array
        (
        )

    [JS_DATA] => Array
        (
            [IS_AUTHORIZED] => 1
            [LAST_ORDER_DATA] => Array
                (
                    [PERSON_TYPE] => 1
                    [DELIVERY] => 1
                    [PAY_SYSTEM] => 1
                    [PICK_UP] => 
                )

            [ZIP_PROPERTY_CHANGED] => Y
            [ORDER_DESCRIPTION] => 
            [SHOW_AUTH] => 
            [SHOW_EMPTY_BASKET] => 
            [AUTH] => Array
                (
                    [new_user_registration] => Y
                    [new_user_registration_email_confirmation] => N
                    [new_user_email_required] => Y
                    [new_user_phone_auth] => N
                    [new_user_phone_required] => N
                )

            [SMS_AUTH] => Array
                (
                )

            [OK_MESSAGE] => 
            [GRID] => Array
                (
                    [DEFAULT_COLUMNS] => 
                    [HEADERS] => Array
                        (
                            [0] => Array
                                (
                                    [id] => NAME
                                    [name] => Название
                                )

                            [1] => Array
                                (
                                    [id] => PREVIEW_PICTURE
                                    [name] => Изображение
                                )

                            [2] => Array
                                (
                                    [id] => PROPS
                                    [name] => Свойства
                                )

                            [3] => Array
                                (
                                    [id] => QUANTITY
                                    [name] => Количество
                                )

                            [4] => Array
                                (
                                    [id] => SUM
                                    [name] => Сумма
                                )

                        )

                    [HEADERS_HIDDEN] => Array
                        (
                            [0] => Array
                                (
                                    [id] => PROPERTY_CML2_MANUFACTURER_VALUE
                                    [name] => Производитель
                                )

                            [1] => Array
                                (
                                    [id] => PROPERTY_KATEGORIYA_TOVARA_VALUE
                                    [name] => Категория товара
                                )

                            [2] => Array
                                (
                                    [id] => PROPERTY_TIP_USTANOVKI_VALUE
                                    [name] => Тип установки
                                )

                            [3] => Array
                                (
                                    [id] => PROPERTY_CML2_ARTICLE_VALUE
                                    [name] => Артикул
                                )

                            [4] => Array
                                (
                                    [id] => PROPS
                                    [name] => Свойства
                                )

                        )

                    [ROWS] => Array
                        (
                            [153873] => Array
                                (
                                    [id] => 153873
                                    [data] => Array
                                        (
                                            [ID] => 153873
                                            [LID] => s1
                                            [MODULE] => catalog
                                            [PRODUCT_ID] => 138083
                                            [QUANTITY] => 1
                                            [WEIGHT] => 0.00
                                            [DELAY] => N
                                            [CAN_BUY] => Y
                                            [PRICE] => 33774
                                            [CUSTOM_PRICE] => N
                                            [BASE_PRICE] => 33774
                                            [PRODUCT_PRICE_ID] => 30800541
                                            [PRICE_TYPE_ID] => 3
                                            [CURRENCY] => RUB
                                            [BARCODE_MULTI] => N
                                            [RESERVED] => N
                                            [RESERVE_QUANTITY] => 
                                            [NAME] => Посудомоечная машина Korting KDI 60110 (KDI 60110)
                                            [CATALOG_XML_ID] => catalog-3bf1763a-cc10-4dd0-86c5-23886628db66#
                                            [VAT_RATE] => 0
                                            [NOTES] => Ваша цена
                                            [DISCOUNT_PRICE] => 0
                                            [PRODUCT_PROVIDER_CLASS] => CCatalogProductProvider
                                            [CALLBACK_FUNC] => 
                                            [ORDER_CALLBACK_FUNC] => 
                                            [PAY_CALLBACK_FUNC] => 
                                            [CANCEL_CALLBACK_FUNC] => 
                                            [DIMENSIONS] => a:3:{s:5:"WIDTH";N;s:6:"HEIGHT";N;s:6:"LENGTH";N;}
                                            [TYPE] => 
                                            [SET_PARENT_ID] => 
                                            [DETAIL_PAGE_URL] => /products/posudomoechnaya_mashina_korting_kdi_60110/
                                            [FUSER_ID] => 477110
                                            [MEASURE_CODE] => 796
                                            [MEASURE_NAME] => шт
                                            [ORDER_ID] => 
                                            [DATE_INSERT] => Bitrix\Main\Type\DateTime Object
                                                (
                                                    [value:protected] => DateTime Object
                                                        (
                                                            [date] => 2025-02-12 15:04:24.000000
                                                            [timezone_type] => 3
                                                            [timezone] => Asia/Yekaterinburg
                                                        )

                                                    [userTimeEnabled:protected] => 1
                                                )

                                            [DATE_UPDATE] => Bitrix\Main\Type\DateTime Object
                                                (
                                                    [value:protected] => DateTime Object
                                                        (
                                                            [date] => 2025-02-12 15:43:46.000000
                                                            [timezone_type] => 3
                                                            [timezone] => Asia/Yekaterinburg
                                                        )

                                                    [userTimeEnabled:protected] => 1
                                                )

                                            [PRODUCT_XML_ID] => faa156ed-b201-11ea-ab90-00259087b6a3#faa156ed-b201-11ea-ab90-00259087b6a3
                                            [SUBSCRIBE] => N
                                            [RECOMMENDATION] => 
                                            [VAT_INCLUDED] => N
                                            [SORT] => 200
                                            [DATE_REFRESH] => 
                                            [DISCOUNT_NAME] => 
                                            [DISCOUNT_VALUE] => 
                                            [DISCOUNT_COUPON] => 
                                            [XML_ID] => bx_67ac72281ccad
                                            [MARKING_CODE_GROUP] => 
                                            [PRICE_FORMATED] => 33 774 ₽
                                            [WEIGHT_FORMATED] => 0 кг
                                            [DISCOUNT_PRICE_PERCENT] => 0
                                            [DISCOUNT_PRICE_PERCENT_FORMATED] => 0%
                                            [BASE_PRICE_FORMATED] => 33 774 ₽
                                            [PROPS] => Array
                                                (
                                                )

                                            [SUM_NUM] => 33774
                                            [SUM] => 33 774 ₽
                                            [SUM_BASE] => 33774
                                            [SUM_BASE_FORMATED] => 33 774 ₽
                                            [CATALOG_QUANTITY] => 2
                                            [PREVIEW_PICTURE] => 2955128
                                            [DETAIL_PICTURE] => 2955129
                                            [PROPERTY_COLOR_REF_VALUE] => b9dbf6ee-e7f0-11e8-9f77-00155d00c800
                                            [PROPERTY_COLOR_REF_VALUE_ID] => 574105864
                                            [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE] => 100
                                            [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE_ID] => 575311822
                                            [PROPERTY_CML2_MANUFACTURER_VALUE] => Korting
                                            [PROPERTY_CML2_MANUFACTURER_VALUE_ID] => 
                                            [PROPERTY_CML2_MANUFACTURER_ENUM_ID] => 
                                            [PROPERTY_KATEGORIYA_TOVARA_VALUE] => 
                                            [PROPERTY_KATEGORIYA_TOVARA_VALUE_ID] => 
                                            [PROPERTY_KATEGORIYA_TOVARA_ENUM_ID] => 
                                            [PROPERTY_CML2_ARTICLE_VALUE] => KDI 60110
                                            [PROPERTY_CML2_ARTICLE_VALUE_ID] => 
                                            [PROPERTY_TIP_USTANOVKI_VALUE] => Встраиваемый
                                            [PROPERTY_TIP_USTANOVKI_VALUE_ID] => 575311811
                                            [PROPERTY_TIP_USTANOVKI_ENUM_ID] => 126502
                                            [PREVIEW_PICTURE_SRC] => /upload/resize_cache/iblock/efe/160_160_1/qem0epksq1zsz5ad01ub8k81fjckdaf0.jpg
                                            [PREVIEW_PICTURE_SRC_2X] => /upload/resize_cache/iblock/efe/320_320_1/qem0epksq1zsz5ad01ub8k81fjckdaf0.jpg
                                            [PREVIEW_PICTURE_SRC_ORIGINAL] => /upload/iblock/efe/qem0epksq1zsz5ad01ub8k81fjckdaf0.jpg
                                            [DETAIL_PICTURE_SRC] => /upload/resize_cache/iblock/d87/160_160_1/yz1ud2gl05as86o9ptj1wk6ae10pxgov.jpg
                                            [DETAIL_PICTURE_SRC_2X] => /upload/resize_cache/iblock/d87/320_320_1/yz1ud2gl05as86o9ptj1wk6ae10pxgov.jpg
                                            [DETAIL_PICTURE_SRC_ORIGINAL] => /upload/iblock/d87/yz1ud2gl05as86o9ptj1wk6ae10pxgov.jpg
                                            [MEASURE_TEXT] => шт
                                            [MEASURE] => 796
                                            [AVAILABILITY] => IN_STOCK
                                            [AVAILABILITY_ITEM] => Array
                                                (
                                                    [TEXT] => В наличии
                                                    [COLOR] => #75D14A
                                                )

                                            [COLOR_DATA] => Array
                                                (
                                                    [NAME] => Серебро
                                                    [FILE] => /upload/uf/186/18635ae7837d28da1b34c0642b87d227.jpg
                                                )

                                        )

                                    [actions] => Array
                                        (
                                        )

                                    [columns] => Array
                                        (
                                            [PROPS] => 
                                            [QUANTITY] => 1 шт
                                            [PROPERTY_COLOR_REF_VALUE] => Array
                                                (
                                                    [0] => Array
                                                        (
                                                            [type] => value
                                                            [value] => b9dbf6ee-e7f0-11e8-9f77-00155d00c800
                                                        )

                                                )

                                            [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE] => Array
                                                (
                                                    [0] => Array
                                                        (
                                                            [type] => value
                                                            [value] => 100
                                                        )

                                                )

                                            [PROPERTY_CML2_MANUFACTURER_VALUE] => Array
                                                (
                                                    [0] => Array
                                                        (
                                                            [type] => value
                                                            [value] => Korting
                                                        )

                                                )

                                            [PROPERTY_KATEGORIYA_TOVARA_VALUE] => Array
                                                (
                                                    [0] => Array
                                                        (
                                                            [type] => value
                                                            [value] => 
                                                        )

                                                )

                                            [PROPERTY_CML2_ARTICLE_VALUE] => Array
                                                (
                                                    [0] => Array
                                                        (
                                                            [type] => value
                                                            [value] => KDI 60110
                                                        )

                                                )

                                            [PROPERTY_TIP_USTANOVKI_VALUE] => Array
                                                (
                                                    [0] => Array
                                                        (
                                                            [type] => value
                                                            [value] => Встраиваемый
                                                        )

                                                )

                                        )

                                    [editable] => 1
                                )

                            [153267] => Array
                                (
                                    [id] => 153267
                                    [data] => Array
                                        (
                                            [ID] => 153267
                                            [LID] => s1
                                            [MODULE] => catalog
                                            [PRODUCT_ID] => 178116
                                            [QUANTITY] => 1
                                            [WEIGHT] => 0.00
                                            [DELAY] => N
                                            [CAN_BUY] => Y
                                            [PRICE] => 183104
                                            [CUSTOM_PRICE] => N
                                            [BASE_PRICE] => 183104
                                            [PRODUCT_PRICE_ID] => 32292141
                                            [PRICE_TYPE_ID] => 3
                                            [CURRENCY] => RUB
                                            [BARCODE_MULTI] => N
                                            [RESERVED] => N
                                            [RESERVE_QUANTITY] => 
                                            [NAME] => Электрический духовой шкаф Elica VIRTUS MULTI 90 TFT (PRF0191768)
                                            [CATALOG_XML_ID] => catalog-3bf1763a-cc10-4dd0-86c5-23886628db66#
                                            [VAT_RATE] => 0
                                            [NOTES] => Ваша цена
                                            [DISCOUNT_PRICE] => 0
                                            [PRODUCT_PROVIDER_CLASS] => CCatalogProductProvider
                                            [CALLBACK_FUNC] => 
                                            [ORDER_CALLBACK_FUNC] => 
                                            [PAY_CALLBACK_FUNC] => 
                                            [CANCEL_CALLBACK_FUNC] => 
                                            [DIMENSIONS] => a:3:{s:5:"WIDTH";N;s:6:"HEIGHT";N;s:6:"LENGTH";N;}
                                            [TYPE] => 
                                            [SET_PARENT_ID] => 
                                            [DETAIL_PAGE_URL] => /products/elektricheskiy_dukhovoy_shkaf_elica_virtus_multi_90_tft/
                                            [FUSER_ID] => 477110
                                            [MEASURE_CODE] => 796
                                            [MEASURE_NAME] => шт
                                            [ORDER_ID] => 
                                            [DATE_INSERT] => Bitrix\Main\Type\DateTime Object
                                                (
                                                    [value:protected] => DateTime Object
                                                        (
                                                            [date] => 2025-02-10 09:25:52.000000
                                                            [timezone_type] => 3
                                                            [timezone] => Asia/Yekaterinburg
                                                        )

                                                    [userTimeEnabled:protected] => 1
                                                )

                                            [DATE_UPDATE] => Bitrix\Main\Type\DateTime Object
                                                (
                                                    [value:protected] => DateTime Object
                                                        (
                                                            [date] => 2025-02-12 15:43:46.000000
                                                            [timezone_type] => 3
                                                            [timezone] => Asia/Yekaterinburg
                                                        )

                                                    [userTimeEnabled:protected] => 1
                                                )

                                            [PRODUCT_XML_ID] => 56e990ec-94f4-11ee-ac5d-00259087b6a3#56e990ec-94f4-11ee-ac5d-00259087b6a3
                                            [SUBSCRIBE] => N
                                            [RECOMMENDATION] => 
                                            [VAT_INCLUDED] => N
                                            [SORT] => 300
                                            [DATE_REFRESH] => 
                                            [DISCOUNT_NAME] => 
                                            [DISCOUNT_VALUE] => 
                                            [DISCOUNT_COUPON] => 
                                            [XML_ID] => bx_67a97fd01be74
                                            [MARKING_CODE_GROUP] => 
                                            [PRICE_FORMATED] => 183 104 ₽
                                            [WEIGHT_FORMATED] => 0 кг
                                            [DISCOUNT_PRICE_PERCENT] => 0
                                            [DISCOUNT_PRICE_PERCENT_FORMATED] => 0%
                                            [BASE_PRICE_FORMATED] => 183 104 ₽
                                            [PROPS] => Array
                                                (
                                                )

                                            [SUM_NUM] => 183104
                                            [SUM] => 183 104 ₽
                                            [SUM_BASE] => 183104
                                            [SUM_BASE_FORMATED] => 183 104 ₽
                                            [CATALOG_QUANTITY] => 0
                                            [PREVIEW_PICTURE] => 3021175
                                            [DETAIL_PICTURE] => 3021176
                                            [PROPERTY_COLOR_REF_VALUE] => 179c5585-e25d-11e8-86eb-00155d00c800
                                            [PROPERTY_COLOR_REF_VALUE_ID] => 570453537
                                            [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE] => 7
                                            [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE_ID] => 575405890
                                            [PROPERTY_CML2_MANUFACTURER_VALUE] => Elica
                                            [PROPERTY_CML2_ARTICLE_VALUE] => PRF0191768
                                            [PREVIEW_PICTURE_SRC] => /upload/resize_cache/iblock/ba3/160_160_1/sz5uzxbbnk38ay48xr1ylsyp7uzouyqk.jpg
                                            [PREVIEW_PICTURE_SRC_2X] => /upload/resize_cache/iblock/ba3/320_320_1/sz5uzxbbnk38ay48xr1ylsyp7uzouyqk.jpg
                                            [PREVIEW_PICTURE_SRC_ORIGINAL] => /upload/iblock/ba3/sz5uzxbbnk38ay48xr1ylsyp7uzouyqk.jpg
                                            [DETAIL_PICTURE_SRC] => /upload/resize_cache/iblock/d38/160_160_1/sme3uw6qz792hyb2dwmu0spisf5d925y.jpg
                                            [DETAIL_PICTURE_SRC_2X] => /upload/resize_cache/iblock/d38/320_320_1/sme3uw6qz792hyb2dwmu0spisf5d925y.jpg
                                            [DETAIL_PICTURE_SRC_ORIGINAL] => /upload/iblock/d38/sme3uw6qz792hyb2dwmu0spisf5d925y.jpg
                                            [MEASURE_TEXT] => шт
                                            [MEASURE] => 796
                                            [AVAILABILITY] => ON_DEMAND
                                            [AVAILABILITY_ITEM] => Array
                                                (
                                                    [TEXT] => Под заказ
                                                    [COLOR] => #A6C3EE
                                                )

                                            [COLOR_DATA] => Array
                                                (
                                                    [NAME] => Черный
                                                    [FILE] => /upload/uf/b24/b24c47e90a806c22401bd9da11307f24.png
                                                )

                                        )

                                    [actions] => Array
                                        (
                                        )

                                    [columns] => Array
                                        (
                                            [PROPS] => 
                                            [QUANTITY] => 1 шт
                                            [PROPERTY_COLOR_REF_VALUE] => Array
                                                (
                                                    [0] => Array
                                                        (
                                                            [type] => value
                                                            [value] => 179c5585-e25d-11e8-86eb-00155d00c800
                                                        )

                                                )

                                            [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE] => Array
                                                (
                                                    [0] => Array
                                                        (
                                                            [type] => value
                                                            [value] => 7
                                                        )

                                                )

                                            [PROPERTY_CML2_MANUFACTURER_VALUE] => Array
                                                (
                                                    [0] => Array
                                                        (
                                                            [type] => value
                                                            [value] => Elica
                                                        )

                                                )

                                            [PROPERTY_CML2_ARTICLE_VALUE] => Array
                                                (
                                                    [0] => Array
                                                        (
                                                            [type] => value
                                                            [value] => PRF0191768
                                                        )

                                                )

                                        )

                                    [editable] => 1
                                )

                            [153268] => Array
                                (
                                    [id] => 153268
                                    [data] => Array
                                        (
                                            [ID] => 153268
                                            [LID] => s1
                                            [MODULE] => catalog
                                            [PRODUCT_ID] => 178115
                                            [QUANTITY] => 1
                                            [WEIGHT] => 0.00
                                            [DELAY] => N
                                            [CAN_BUY] => Y
                                            [PRICE] => 137326
                                            [CUSTOM_PRICE] => N
                                            [BASE_PRICE] => 137326
                                            [PRODUCT_PRICE_ID] => 32292143
                                            [PRICE_TYPE_ID] => 3
                                            [CURRENCY] => RUB
                                            [BARCODE_MULTI] => N
                                            [RESERVED] => N
                                            [RESERVE_QUANTITY] => 
                                            [NAME] => Электрический духовой шкаф Elica VIRTUS MULTI 60 TFT (PRF0191770)
                                            [CATALOG_XML_ID] => catalog-3bf1763a-cc10-4dd0-86c5-23886628db66#
                                            [VAT_RATE] => 0
                                            [NOTES] => Ваша цена
                                            [DISCOUNT_PRICE] => 0
                                            [PRODUCT_PROVIDER_CLASS] => CCatalogProductProvider
                                            [CALLBACK_FUNC] => 
                                            [ORDER_CALLBACK_FUNC] => 
                                            [PAY_CALLBACK_FUNC] => 
                                            [CANCEL_CALLBACK_FUNC] => 
                                            [DIMENSIONS] => a:3:{s:5:"WIDTH";N;s:6:"HEIGHT";N;s:6:"LENGTH";N;}
                                            [TYPE] => 
                                            [SET_PARENT_ID] => 
                                            [DETAIL_PAGE_URL] => /products/elektricheskiy_dukhovoy_shkaf_elica_virtus_multi_60_tft/
                                            [FUSER_ID] => 477110
                                            [MEASURE_CODE] => 796
                                            [MEASURE_NAME] => шт
                                            [ORDER_ID] => 
                                            [DATE_INSERT] => Bitrix\Main\Type\DateTime Object
                                                (
                                                    [value:protected] => DateTime Object
                                                        (
                                                            [date] => 2025-02-10 09:26:05.000000
                                                            [timezone_type] => 3
                                                            [timezone] => Asia/Yekaterinburg
                                                        )

                                                    [userTimeEnabled:protected] => 1
                                                )

                                            [DATE_UPDATE] => Bitrix\Main\Type\DateTime Object
                                                (
                                                    [value:protected] => DateTime Object
                                                        (
                                                            [date] => 2025-02-10 09:33:41.000000
                                                            [timezone_type] => 3
                                                            [timezone] => Asia/Yekaterinburg
                                                        )

                                                    [userTimeEnabled:protected] => 1
                                                )

                                            [PRODUCT_XML_ID] => 0d965381-94fb-11ee-ac5d-00259087b6a3#0d965381-94fb-11ee-ac5d-00259087b6a3
                                            [SUBSCRIBE] => N
                                            [RECOMMENDATION] => 
                                            [VAT_INCLUDED] => N
                                            [SORT] => 400
                                            [DATE_REFRESH] => 
                                            [DISCOUNT_NAME] => 
                                            [DISCOUNT_VALUE] => 
                                            [DISCOUNT_COUPON] => 
                                            [XML_ID] => bx_67a97fdd506a9
                                            [MARKING_CODE_GROUP] => 
                                            [PRICE_FORMATED] => 137 326 ₽
                                            [WEIGHT_FORMATED] => 0 кг
                                            [DISCOUNT_PRICE_PERCENT] => 0
                                            [DISCOUNT_PRICE_PERCENT_FORMATED] => 0%
                                            [BASE_PRICE_FORMATED] => 137 326 ₽
                                            [PROPS] => Array
                                                (
                                                )

                                            [SUM_NUM] => 137326
                                            [SUM] => 137 326 ₽
                                            [SUM_BASE] => 137326
                                            [SUM_BASE_FORMATED] => 137 326 ₽
                                            [CATALOG_QUANTITY] => 0
                                            [PREVIEW_PICTURE] => 3021169
                                            [DETAIL_PICTURE] => 3021170
                                            [PROPERTY_COLOR_REF_VALUE] => 179c5585-e25d-11e8-86eb-00155d00c800
                                            [PROPERTY_COLOR_REF_VALUE_ID] => 570453508
                                            [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE] => 5
                                            [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE_ID] => 575405864
                                            [PROPERTY_CML2_MANUFACTURER_VALUE] => Elica
                                            [PROPERTY_CML2_ARTICLE_VALUE] => PRF0191770
                                            [PREVIEW_PICTURE_SRC] => /upload/resize_cache/iblock/5fd/160_160_1/zwaj2s32jht3qytbb4myur9g9jtd0jr0.jpg
                                            [PREVIEW_PICTURE_SRC_2X] => /upload/resize_cache/iblock/5fd/320_320_1/zwaj2s32jht3qytbb4myur9g9jtd0jr0.jpg
                                            [PREVIEW_PICTURE_SRC_ORIGINAL] => /upload/iblock/5fd/zwaj2s32jht3qytbb4myur9g9jtd0jr0.jpg
                                            [DETAIL_PICTURE_SRC] => /upload/resize_cache/iblock/2ae/160_160_1/rp6sycqs1n21hctp9m3ji0aqovrvlwio.jpg
                                            [DETAIL_PICTURE_SRC_2X] => /upload/resize_cache/iblock/2ae/320_320_1/rp6sycqs1n21hctp9m3ji0aqovrvlwio.jpg
                                            [DETAIL_PICTURE_SRC_ORIGINAL] => /upload/iblock/2ae/rp6sycqs1n21hctp9m3ji0aqovrvlwio.jpg
                                            [MEASURE_TEXT] => шт
                                            [MEASURE] => 796
                                            [AVAILABILITY] => ON_DEMAND
                                            [AVAILABILITY_ITEM] => Array
                                                (
                                                    [TEXT] => Под заказ
                                                    [COLOR] => #A6C3EE
                                                )

                                            [COLOR_DATA] => Array
                                                (
                                                    [NAME] => Черный
                                                    [FILE] => /upload/uf/b24/b24c47e90a806c22401bd9da11307f24.png
                                                )

                                        )

                                    [actions] => Array
                                        (
                                        )

                                    [columns] => Array
                                        (
                                            [PROPS] => 
                                            [QUANTITY] => 1 шт
                                            [PROPERTY_COLOR_REF_VALUE] => Array
                                                (
                                                    [0] => Array
                                                        (
                                                            [type] => value
                                                            [value] => 179c5585-e25d-11e8-86eb-00155d00c800
                                                        )

                                                )

                                            [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE] => Array
                                                (
                                                    [0] => Array
                                                        (
                                                            [type] => value
                                                            [value] => 5
                                                        )

                                                )

                                            [PROPERTY_CML2_MANUFACTURER_VALUE] => Array
                                                (
                                                    [0] => Array
                                                        (
                                                            [type] => value
                                                            [value] => Elica
                                                        )

                                                )

                                            [PROPERTY_CML2_ARTICLE_VALUE] => Array
                                                (
                                                    [0] => Array
                                                        (
                                                            [type] => value
                                                            [value] => PRF0191770
                                                        )

                                                )

                                        )

                                    [editable] => 1
                                )

                            [153269] => Array
                                (
                                    [id] => 153269
                                    [data] => Array
                                        (
                                            [ID] => 153269
                                            [LID] => s1
                                            [MODULE] => catalog
                                            [PRODUCT_ID] => 178114
                                            [QUANTITY] => 1
                                            [WEIGHT] => 0.00
                                            [DELAY] => N
                                            [CAN_BUY] => Y
                                            [PRICE] => 106808
                                            [CUSTOM_PRICE] => N
                                            [BASE_PRICE] => 106808
                                            [PRODUCT_PRICE_ID] => 32292153
                                            [PRICE_TYPE_ID] => 3
                                            [CURRENCY] => RUB
                                            [BARCODE_MULTI] => N
                                            [RESERVED] => N
                                            [RESERVE_QUANTITY] => 
                                            [NAME] => Электрический духовой шкаф Elica VIRTUS MULTI 60 DD (PRF0191771)
                                            [CATALOG_XML_ID] => catalog-3bf1763a-cc10-4dd0-86c5-23886628db66#
                                            [VAT_RATE] => 0
                                            [NOTES] => Ваша цена
                                            [DISCOUNT_PRICE] => 0
                                            [PRODUCT_PROVIDER_CLASS] => CCatalogProductProvider
                                            [CALLBACK_FUNC] => 
                                            [ORDER_CALLBACK_FUNC] => 
                                            [PAY_CALLBACK_FUNC] => 
                                            [CANCEL_CALLBACK_FUNC] => 
                                            [DIMENSIONS] => a:3:{s:5:"WIDTH";N;s:6:"HEIGHT";N;s:6:"LENGTH";N;}
                                            [TYPE] => 
                                            [SET_PARENT_ID] => 
                                            [DETAIL_PAGE_URL] => /products/elektricheskiy_dukhovoy_shkaf_elica_virtus_multi_60_dd/
                                            [FUSER_ID] => 477110
                                            [MEASURE_CODE] => 796
                                            [MEASURE_NAME] => шт
                                            [ORDER_ID] => 
                                            [DATE_INSERT] => Bitrix\Main\Type\DateTime Object
                                                (
                                                    [value:protected] => DateTime Object
                                                        (
                                                            [date] => 2025-02-10 09:26:24.000000
                                                            [timezone_type] => 3
                                                            [timezone] => Asia/Yekaterinburg
                                                        )

                                                    [userTimeEnabled:protected] => 1
                                                )

                                            [DATE_UPDATE] => Bitrix\Main\Type\DateTime Object
                                                (
                                                    [value:protected] => DateTime Object
                                                        (
                                                            [date] => 2025-02-10 09:33:41.000000
                                                            [timezone_type] => 3
                                                            [timezone] => Asia/Yekaterinburg
                                                        )

                                                    [userTimeEnabled:protected] => 1
                                                )

                                            [PRODUCT_XML_ID] => 34d79bf1-94fb-11ee-ac5d-00259087b6a3#34d79bf1-94fb-11ee-ac5d-00259087b6a3
                                            [SUBSCRIBE] => N
                                            [RECOMMENDATION] => 
                                            [VAT_INCLUDED] => N
                                            [SORT] => 500
                                            [DATE_REFRESH] => 
                                            [DISCOUNT_NAME] => 
                                            [DISCOUNT_VALUE] => 
                                            [DISCOUNT_COUPON] => 
                                            [XML_ID] => bx_67a97ff0a5c77
                                            [MARKING_CODE_GROUP] => 
                                            [PRICE_FORMATED] => 106 808 ₽
                                            [WEIGHT_FORMATED] => 0 кг
                                            [DISCOUNT_PRICE_PERCENT] => 0
                                            [DISCOUNT_PRICE_PERCENT_FORMATED] => 0%
                                            [BASE_PRICE_FORMATED] => 106 808 ₽
                                            [PROPS] => Array
                                                (
                                                )

                                            [SUM_NUM] => 106808
                                            [SUM] => 106 808 ₽
                                            [SUM_BASE] => 106808
                                            [SUM_BASE_FORMATED] => 106 808 ₽
                                            [CATALOG_QUANTITY] => 1
                                            [PREVIEW_PICTURE] => 3021160
                                            [DETAIL_PICTURE] => 3021161
                                            [PROPERTY_COLOR_REF_VALUE] => 179c5585-e25d-11e8-86eb-00155d00c800
                                            [PROPERTY_COLOR_REF_VALUE_ID] => 570453475
                                            [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE] => 7
                                            [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE_ID] => 575405835
                                            [PROPERTY_CML2_MANUFACTURER_VALUE] => Elica
                                            [PROPERTY_CML2_ARTICLE_VALUE] => PRF0191771
                                            [PREVIEW_PICTURE_SRC] => /upload/resize_cache/iblock/47b/160_160_1/317fgi83ms1a69u91m2f1cz9w4el4vt9.jpg
                                            [PREVIEW_PICTURE_SRC_2X] => /upload/resize_cache/iblock/47b/320_320_1/317fgi83ms1a69u91m2f1cz9w4el4vt9.jpg
                                            [PREVIEW_PICTURE_SRC_ORIGINAL] => /upload/iblock/47b/317fgi83ms1a69u91m2f1cz9w4el4vt9.jpg
                                            [DETAIL_PICTURE_SRC] => /upload/resize_cache/iblock/41a/160_160_1/s29ks4k2ao2b8wjm076wzfl406c702mr.jpg
                                            [DETAIL_PICTURE_SRC_2X] => /upload/resize_cache/iblock/41a/320_320_1/s29ks4k2ao2b8wjm076wzfl406c702mr.jpg
                                            [DETAIL_PICTURE_SRC_ORIGINAL] => /upload/iblock/41a/s29ks4k2ao2b8wjm076wzfl406c702mr.jpg
                                            [MEASURE_TEXT] => шт
                                            [MEASURE] => 796
                                            [AVAILABILITY] => IN_STOCK
                                            [AVAILABILITY_ITEM] => Array
                                                (
                                                    [TEXT] => В наличии
                                                    [COLOR] => #75D14A
                                                )

                                            [COLOR_DATA] => Array
                                                (
                                                    [NAME] => Черный
                                                    [FILE] => /upload/uf/b24/b24c47e90a806c22401bd9da11307f24.png
                                                )

                                        )

                                    [actions] => Array
                                        (
                                        )

                                    [columns] => Array
                                        (
                                            [PROPS] => 
                                            [QUANTITY] => 1 шт
                                            [PROPERTY_COLOR_REF_VALUE] => Array
                                                (
                                                    [0] => Array
                                                        (
                                                            [type] => value
                                                            [value] => 179c5585-e25d-11e8-86eb-00155d00c800
                                                        )

                                                )

                                            [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE] => Array
                                                (
                                                    [0] => Array
                                                        (
                                                            [type] => value
                                                            [value] => 7
                                                        )

                                                )

                                            [PROPERTY_CML2_MANUFACTURER_VALUE] => Array
                                                (
                                                    [0] => Array
                                                        (
                                                            [type] => value
                                                            [value] => Elica
                                                        )

                                                )

                                            [PROPERTY_CML2_ARTICLE_VALUE] => Array
                                                (
                                                    [0] => Array
                                                        (
                                                            [type] => value
                                                            [value] => PRF0191771
                                                        )

                                                )

                                        )

                                    [editable] => 1
                                )

                            [152196] => Array
                                (
                                    [id] => 152196
                                    [data] => Array
                                        (
                                            [ID] => 152196
                                            [LID] => s1
                                            [MODULE] => catalog
                                            [PRODUCT_ID] => 135772
                                            [QUANTITY] => 3
                                            [WEIGHT] => 25000.00
                                            [DELAY] => N
                                            [CAN_BUY] => Y
                                            [PRICE] => 24320
                                            [CUSTOM_PRICE] => N
                                            [BASE_PRICE] => 24320
                                            [PRODUCT_PRICE_ID] => 30784038
                                            [PRICE_TYPE_ID] => 3
                                            [CURRENCY] => RUB
                                            [BARCODE_MULTI] => N
                                            [RESERVED] => N
                                            [RESERVE_QUANTITY] => 
                                            [NAME] => Электрический духовой шкаф Lex EDM 4575 GR (CHAO000438)
                                            [CATALOG_XML_ID] => catalog-3bf1763a-cc10-4dd0-86c5-23886628db66#
                                            [VAT_RATE] => 0
                                            [NOTES] => Ваша цена
                                            [DISCOUNT_PRICE] => 0
                                            [PRODUCT_PROVIDER_CLASS] => CCatalogProductProvider
                                            [CALLBACK_FUNC] => 
                                            [ORDER_CALLBACK_FUNC] => 
                                            [PAY_CALLBACK_FUNC] => 
                                            [CANCEL_CALLBACK_FUNC] => 
                                            [DIMENSIONS] => a:3:{s:5:"WIDTH";N;s:6:"HEIGHT";N;s:6:"LENGTH";N;}
                                            [TYPE] => 
                                            [SET_PARENT_ID] => 
                                            [DETAIL_PAGE_URL] => /products/dukhovoy_shkaf_lex_edp_4571_bl/
                                            [FUSER_ID] => 477110
                                            [MEASURE_CODE] => 796
                                            [MEASURE_NAME] => шт
                                            [ORDER_ID] => 
                                            [DATE_INSERT] => Bitrix\Main\Type\DateTime Object
                                                (
                                                    [value:protected] => DateTime Object
                                                        (
                                                            [date] => 2025-02-05 22:42:38.000000
                                                            [timezone_type] => 3
                                                            [timezone] => Asia/Yekaterinburg
                                                        )

                                                    [userTimeEnabled:protected] => 1
                                                )

                                            [DATE_UPDATE] => Bitrix\Main\Type\DateTime Object
                                                (
                                                    [value:protected] => DateTime Object
                                                        (
                                                            [date] => 2025-02-12 16:26:24.000000
                                                            [timezone_type] => 3
                                                            [timezone] => Asia/Yekaterinburg
                                                        )

                                                    [userTimeEnabled:protected] => 1
                                                )

                                            [PRODUCT_XML_ID] => d7d8dad5-e25f-11e8-86eb-00155d00c800#d7d8dad5-e25f-11e8-86eb-00155d00c800
                                            [SUBSCRIBE] => N
                                            [RECOMMENDATION] => 
                                            [VAT_INCLUDED] => N
                                            [SORT] => 2700
                                            [DATE_REFRESH] => 
                                            [DISCOUNT_NAME] => 
                                            [DISCOUNT_VALUE] => 
                                            [DISCOUNT_COUPON] => 
                                            [XML_ID] => bx_67a3a30e1b711
                                            [MARKING_CODE_GROUP] => 
                                            [PRICE_FORMATED] => 24 320 ₽
                                            [WEIGHT_FORMATED] => 25 кг
                                            [DISCOUNT_PRICE_PERCENT] => 0
                                            [DISCOUNT_PRICE_PERCENT_FORMATED] => 0%
                                            [BASE_PRICE_FORMATED] => 24 320 ₽
                                            [PROPS] => Array
                                                (
                                                )

                                            [SUM_NUM] => 72960
                                            [SUM] => 72 960 ₽
                                            [SUM_BASE] => 72960
                                            [SUM_BASE_FORMATED] => 72 960 ₽
                                            [CATALOG_QUANTITY] => 2
                                            [PREVIEW_PICTURE] => 3058048
                                            [DETAIL_PICTURE] => 3058049
                                            [PROPERTY_COLOR_REF_VALUE] => 5faccf5a-e7ef-11e8-9f77-00155d00c800
                                            [PROPERTY_COLOR_REF_VALUE_ID] => 574776716
                                            [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE] => 20
                                            [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE_ID] => 575359417
                                            [PROPERTY_CML2_MANUFACTURER_VALUE] => Lex
                                            [PROPERTY_CML2_ARTICLE_VALUE] => CHAO000438
                                            [PREVIEW_PICTURE_SRC] => /upload/resize_cache/iblock/f94/160_160_1/ea3izipp3c1qinbe132h777wbxwcjaam.jpg
                                            [PREVIEW_PICTURE_SRC_2X] => /upload/resize_cache/iblock/f94/320_320_1/ea3izipp3c1qinbe132h777wbxwcjaam.jpg
                                            [PREVIEW_PICTURE_SRC_ORIGINAL] => /upload/iblock/f94/ea3izipp3c1qinbe132h777wbxwcjaam.jpg
                                            [DETAIL_PICTURE_SRC] => /upload/resize_cache/iblock/197/160_160_1/f91jxkqgxyrm4huie78t1mmgcr6k19ar.jpg
                                            [DETAIL_PICTURE_SRC_2X] => /upload/resize_cache/iblock/197/320_320_1/f91jxkqgxyrm4huie78t1mmgcr6k19ar.jpg
                                            [DETAIL_PICTURE_SRC_ORIGINAL] => /upload/iblock/197/f91jxkqgxyrm4huie78t1mmgcr6k19ar.jpg
                                            [MEASURE_TEXT] => шт
                                            [MEASURE] => 796
                                            [AVAILABILITY] => IN_STOCK
                                            [AVAILABILITY_ITEM] => Array
                                                (
                                                    [TEXT] => В наличии
                                                    [COLOR] => #75D14A
                                                )

                                            [COLOR_DATA] => Array
                                                (
                                                    [NAME] => Серый
                                                    [FILE] => /upload/uf/520/c1s7phgrv5tbu30rzo15aq393w28xe1e.jpg
                                                )

                                        )

                                    [actions] => Array
                                        (
                                        )

                                    [columns] => Array
                                        (
                                            [PROPS] => 
                                            [QUANTITY] => 3 шт
                                            [PROPERTY_COLOR_REF_VALUE] => Array
                                                (
                                                    [0] => Array
                                                        (
                                                            [type] => value
                                                            [value] => 5faccf5a-e7ef-11e8-9f77-00155d00c800
                                                        )

                                                )

                                            [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE] => Array
                                                (
                                                    [0] => Array
                                                        (
                                                            [type] => value
                                                            [value] => 20
                                                        )

                                                )

                                            [PROPERTY_CML2_MANUFACTURER_VALUE] => Array
                                                (
                                                    [0] => Array
                                                        (
                                                            [type] => value
                                                            [value] => Lex
                                                        )

                                                )

                                            [PROPERTY_CML2_ARTICLE_VALUE] => Array
                                                (
                                                    [0] => Array
                                                        (
                                                            [type] => value
                                                            [value] => CHAO000438
                                                        )

                                                )

                                        )

                                    [editable] => 1
                                )

                            [153446] => Array
                                (
                                    [id] => 153446
                                    [data] => Array
                                        (
                                            [ID] => 153446
                                            [LID] => s1
                                            [MODULE] => catalog
                                            [PRODUCT_ID] => 145706
                                            [QUANTITY] => 1
                                            [WEIGHT] => 0.00
                                            [DELAY] => N
                                            [CAN_BUY] => Y
                                            [PRICE] => 3562
                                            [CUSTOM_PRICE] => N
                                            [BASE_PRICE] => 3562
                                            [PRODUCT_PRICE_ID] => 30797061
                                            [PRICE_TYPE_ID] => 3
                                            [CURRENCY] => RUB
                                            [BARCODE_MULTI] => N
                                            [RESERVED] => N
                                            [RESERVE_QUANTITY] => 
                                            [NAME] => Мойка для кухни Dr. Gans Smart ОЛИВИЯ-420 (25.150.B0420.401)
                                            [CATALOG_XML_ID] => catalog-3bf1763a-cc10-4dd0-86c5-23886628db66#
                                            [VAT_RATE] => 0
                                            [NOTES] => Ваша цена
                                            [DISCOUNT_PRICE] => 0
                                            [PRODUCT_PROVIDER_CLASS] => CCatalogProductProvider
                                            [CALLBACK_FUNC] => 
                                            [ORDER_CALLBACK_FUNC] => 
                                            [PAY_CALLBACK_FUNC] => 
                                            [CANCEL_CALLBACK_FUNC] => 
                                            [DIMENSIONS] => a:3:{s:5:"WIDTH";N;s:6:"HEIGHT";N;s:6:"LENGTH";N;}
                                            [TYPE] => 
                                            [SET_PARENT_ID] => 
                                            [DETAIL_PAGE_URL] => /products/moyka_dlya_kukhni_dr_gans_smart_oliviya_420/
                                            [FUSER_ID] => 477110
                                            [MEASURE_CODE] => 796
                                            [MEASURE_NAME] => шт
                                            [ORDER_ID] => 
                                            [DATE_INSERT] => Bitrix\Main\Type\DateTime Object
                                                (
                                                    [value:protected] => DateTime Object
                                                        (
                                                            [date] => 2025-02-10 17:36:36.000000
                                                            [timezone_type] => 3
                                                            [timezone] => Asia/Yekaterinburg
                                                        )

                                                    [userTimeEnabled:protected] => 1
                                                )

                                            [DATE_UPDATE] => Bitrix\Main\Type\DateTime Object
                                                (
                                                    [value:protected] => DateTime Object
                                                        (
                                                            [date] => 2025-02-10 17:36:36.000000
                                                            [timezone_type] => 3
                                                            [timezone] => Asia/Yekaterinburg
                                                        )

                                                    [userTimeEnabled:protected] => 1
                                                )

                                            [PRODUCT_XML_ID] => 0fe66eae-004d-11ea-ab6d-00259087b6a3#0fe66eae-004d-11ea-ab6d-00259087b6a3
                                            [SUBSCRIBE] => N
                                            [RECOMMENDATION] => 
                                            [VAT_INCLUDED] => N
                                            [SORT] => 2800
                                            [DATE_REFRESH] => 
                                            [DISCOUNT_NAME] => 
                                            [DISCOUNT_VALUE] => 
                                            [DISCOUNT_COUPON] => 
                                            [XML_ID] => bx_67a9f2d4b41f0
                                            [MARKING_CODE_GROUP] => 
                                            [PRICE_FORMATED] => 3 562 ₽
                                            [WEIGHT_FORMATED] => 0 кг
                                            [DISCOUNT_PRICE_PERCENT] => 0
                                            [DISCOUNT_PRICE_PERCENT_FORMATED] => 0%
                                            [BASE_PRICE_FORMATED] => 3 562 ₽
                                            [PROPS] => Array
                                                (
                                                )

                                            [SUM_NUM] => 3562
                                            [SUM] => 3 562 ₽
                                            [SUM_BASE] => 3562
                                            [SUM_BASE_FORMATED] => 3 562 ₽
                                            [CATALOG_QUANTITY] => 2
                                            [PREVIEW_PICTURE] => 2590792
                                            [DETAIL_PICTURE] => 2590793
                                            [PROPERTY_COLOR_REF_VALUE] => 0bdd0e62-e1c6-11e8-86eb-00155d00c800
                                            [PROPERTY_COLOR_REF_VALUE_ID] => 570595131
                                            [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE] => 1
                                            [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE_ID] => 575335685
                                            [PROPERTY_CML2_MANUFACTURER_VALUE] => Dr. Gans Smart
                                            [PROPERTY_CML2_ARTICLE_VALUE] => 25.150.B0420.401
                                            [PREVIEW_PICTURE_SRC] => /upload/resize_cache/iblock/5f4/160_160_1/6e3b9gbylkut53aijaxnmksagmxsy4e8.jpg
                                            [PREVIEW_PICTURE_SRC_2X] => /upload/resize_cache/iblock/5f4/320_320_1/6e3b9gbylkut53aijaxnmksagmxsy4e8.jpg
                                            [PREVIEW_PICTURE_SRC_ORIGINAL] => /upload/iblock/5f4/6e3b9gbylkut53aijaxnmksagmxsy4e8.jpg
                                            [DETAIL_PICTURE_SRC] => /upload/resize_cache/iblock/601/160_160_1/eytwvuh6paf6y8yn1u0nfci8xmv7dmhs.jpg
                                            [DETAIL_PICTURE_SRC_2X] => /upload/resize_cache/iblock/601/320_320_1/eytwvuh6paf6y8yn1u0nfci8xmv7dmhs.jpg
                                            [DETAIL_PICTURE_SRC_ORIGINAL] => /upload/iblock/601/eytwvuh6paf6y8yn1u0nfci8xmv7dmhs.jpg
                                            [MEASURE_TEXT] => шт
                                            [MEASURE] => 796
                                            [AVAILABILITY] => IN_STOCK
                                            [AVAILABILITY_ITEM] => Array
                                                (
                                                    [TEXT] => В наличии
                                                    [COLOR] => #75D14A
                                                )

                                            [COLOR_DATA] => Array
                                                (
                                                    [NAME] => Белый
                                                    [FILE] => /upload/uf/156/1566ece1c921f3fbf5cb3c87c2a99fcf.jpg
                                                )

                                        )

                                    [actions] => Array
                                        (
                                        )

                                    [columns] => Array
                                        (
                                            [PROPS] => 
                                            [QUANTITY] => 1 шт
                                            [PROPERTY_COLOR_REF_VALUE] => Array
                                                (
                                                    [0] => Array
                                                        (
                                                            [type] => value
                                                            [value] => 0bdd0e62-e1c6-11e8-86eb-00155d00c800
                                                        )

                                                )

                                            [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE] => Array
                                                (
                                                    [0] => Array
                                                        (
                                                            [type] => value
                                                            [value] => 1
                                                        )

                                                )

                                            [PROPERTY_CML2_MANUFACTURER_VALUE] => Array
                                                (
                                                    [0] => Array
                                                        (
                                                            [type] => value
                                                            [value] => Dr. Gans Smart
                                                        )

                                                )

                                            [PROPERTY_CML2_ARTICLE_VALUE] => Array
                                                (
                                                    [0] => Array
                                                        (
                                                            [type] => value
                                                            [value] => 25.150.B0420.401
                                                        )

                                                )

                                        )

                                    [editable] => 1
                                )

                            [153447] => Array
                                (
                                    [id] => 153447
                                    [data] => Array
                                        (
                                            [ID] => 153447
                                            [LID] => s1
                                            [MODULE] => catalog
                                            [PRODUCT_ID] => 145713
                                            [QUANTITY] => 1
                                            [WEIGHT] => 0.00
                                            [DELAY] => N
                                            [CAN_BUY] => Y
                                            [PRICE] => 4954
                                            [CUSTOM_PRICE] => N
                                            [BASE_PRICE] => 4954
                                            [PRODUCT_PRICE_ID] => 30797097
                                            [PRICE_TYPE_ID] => 3
                                            [CURRENCY] => RUB
                                            [BARCODE_MULTI] => N
                                            [RESERVED] => N
                                            [RESERVE_QUANTITY] => 
                                            [NAME] => Мойка для кухни Dr. Gans Smart ОЛИВИЯ-620 (25.150.B0620.401)
                                            [CATALOG_XML_ID] => catalog-3bf1763a-cc10-4dd0-86c5-23886628db66#
                                            [VAT_RATE] => 0
                                            [NOTES] => Ваша цена
                                            [DISCOUNT_PRICE] => 0
                                            [PRODUCT_PROVIDER_CLASS] => CCatalogProductProvider
                                            [CALLBACK_FUNC] => 
                                            [ORDER_CALLBACK_FUNC] => 
                                            [PAY_CALLBACK_FUNC] => 
                                            [CANCEL_CALLBACK_FUNC] => 
                                            [DIMENSIONS] => a:3:{s:5:"WIDTH";N;s:6:"HEIGHT";N;s:6:"LENGTH";N;}
                                            [TYPE] => 
                                            [SET_PARENT_ID] => 
                                            [DETAIL_PAGE_URL] => /products/moyka_dlya_kukhni_dr_gans_smart_oliviya_620/
                                            [FUSER_ID] => 477110
                                            [MEASURE_CODE] => 796
                                            [MEASURE_NAME] => шт
                                            [ORDER_ID] => 
                                            [DATE_INSERT] => Bitrix\Main\Type\DateTime Object
                                                (
                                                    [value:protected] => DateTime Object
                                                        (
                                                            [date] => 2025-02-10 17:36:37.000000
                                                            [timezone_type] => 3
                                                            [timezone] => Asia/Yekaterinburg
                                                        )

                                                    [userTimeEnabled:protected] => 1
                                                )

                                            [DATE_UPDATE] => Bitrix\Main\Type\DateTime Object
                                                (
                                                    [value:protected] => DateTime Object
                                                        (
                                                            [date] => 2025-02-10 17:36:37.000000
                                                            [timezone_type] => 3
                                                            [timezone] => Asia/Yekaterinburg
                                                        )

                                                    [userTimeEnabled:protected] => 1
                                                )

                                            [PRODUCT_XML_ID] => fa4c4057-004d-11ea-ab6d-00259087b6a3#fa4c4057-004d-11ea-ab6d-00259087b6a3
                                            [SUBSCRIBE] => N
                                            [RECOMMENDATION] => 
                                            [VAT_INCLUDED] => N
                                            [SORT] => 2900
                                            [DATE_REFRESH] => 
                                            [DISCOUNT_NAME] => 
                                            [DISCOUNT_VALUE] => 
                                            [DISCOUNT_COUPON] => 
                                            [XML_ID] => bx_67a9f2d5d566e
                                            [MARKING_CODE_GROUP] => 
                                            [PRICE_FORMATED] => 4 954 ₽
                                            [WEIGHT_FORMATED] => 0 кг
                                            [DISCOUNT_PRICE_PERCENT] => 0
                                            [DISCOUNT_PRICE_PERCENT_FORMATED] => 0%
                                            [BASE_PRICE_FORMATED] => 4 954 ₽
                                            [PROPS] => Array
                                                (
                                                )

                                            [SUM_NUM] => 4954
                                            [SUM] => 4 954 ₽
                                            [SUM_BASE] => 4954
                                            [SUM_BASE_FORMATED] => 4 954 ₽
                                            [CATALOG_QUANTITY] => 1
                                            [PREVIEW_PICTURE] => 2590827
                                            [DETAIL_PICTURE] => 2590828
                                            [PROPERTY_COLOR_REF_VALUE] => 0bdd0e62-e1c6-11e8-86eb-00155d00c800
                                            [PROPERTY_COLOR_REF_VALUE_ID] => 570340452
                                            [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE] => 1
                                            [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE_ID] => 575335762
                                            [PROPERTY_CML2_MANUFACTURER_VALUE] => Dr. Gans Smart
                                            [PROPERTY_CML2_ARTICLE_VALUE] => 25.150.B0620.401
                                            [PREVIEW_PICTURE_SRC] => /upload/resize_cache/iblock/e22/160_160_1/rbd6w4urb922l5l88iihq0j2uw51th01.jpg
                                            [PREVIEW_PICTURE_SRC_2X] => /upload/resize_cache/iblock/e22/320_320_1/rbd6w4urb922l5l88iihq0j2uw51th01.jpg
                                            [PREVIEW_PICTURE_SRC_ORIGINAL] => /upload/iblock/e22/rbd6w4urb922l5l88iihq0j2uw51th01.jpg
                                            [DETAIL_PICTURE_SRC] => /upload/resize_cache/iblock/d68/160_160_1/hx85974pbbhz5hk1vzm5e80kt74hy94h.jpg
                                            [DETAIL_PICTURE_SRC_2X] => /upload/resize_cache/iblock/d68/320_320_1/hx85974pbbhz5hk1vzm5e80kt74hy94h.jpg
                                            [DETAIL_PICTURE_SRC_ORIGINAL] => /upload/iblock/d68/hx85974pbbhz5hk1vzm5e80kt74hy94h.jpg
                                            [MEASURE_TEXT] => шт
                                            [MEASURE] => 796
                                            [AVAILABILITY] => IN_STOCK
                                            [AVAILABILITY_ITEM] => Array
                                                (
                                                    [TEXT] => В наличии
                                                    [COLOR] => #75D14A
                                                )

                                            [COLOR_DATA] => Array
                                                (
                                                    [NAME] => Белый
                                                    [FILE] => /upload/uf/156/1566ece1c921f3fbf5cb3c87c2a99fcf.jpg
                                                )

                                        )

                                    [actions] => Array
                                        (
                                        )

                                    [columns] => Array
                                        (
                                            [PROPS] => 
                                            [QUANTITY] => 1 шт
                                            [PROPERTY_COLOR_REF_VALUE] => Array
                                                (
                                                    [0] => Array
                                                        (
                                                            [type] => value
                                                            [value] => 0bdd0e62-e1c6-11e8-86eb-00155d00c800
                                                        )

                                                )

                                            [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE] => Array
                                                (
                                                    [0] => Array
                                                        (
                                                            [type] => value
                                                            [value] => 1
                                                        )

                                                )

                                            [PROPERTY_CML2_MANUFACTURER_VALUE] => Array
                                                (
                                                    [0] => Array
                                                        (
                                                            [type] => value
                                                            [value] => Dr. Gans Smart
                                                        )

                                                )

                                            [PROPERTY_CML2_ARTICLE_VALUE] => Array
                                                (
                                                    [0] => Array
                                                        (
                                                            [type] => value
                                                            [value] => 25.150.B0620.401
                                                        )

                                                )

                                        )

                                    [editable] => 1
                                )

                            [153450] => Array
                                (
                                    [id] => 153450
                                    [data] => Array
                                        (
                                            [ID] => 153450
                                            [LID] => s1
                                            [MODULE] => catalog
                                            [PRODUCT_ID] => 174528
                                            [QUANTITY] => 1
                                            [WEIGHT] => 0.00
                                            [DELAY] => N
                                            [CAN_BUY] => Y
                                            [PRICE] => 47761
                                            [CUSTOM_PRICE] => N
                                            [BASE_PRICE] => 47761
                                            [PRODUCT_PRICE_ID] => 31377380
                                            [PRICE_TYPE_ID] => 3
                                            [CURRENCY] => RUB
                                            [BARCODE_MULTI] => N
                                            [RESERVED] => N
                                            [RESERVE_QUANTITY] => 
                                            [NAME] => Кухонная вытяжка Kuppersberg DUDL 8 GB (6058)
                                            [CATALOG_XML_ID] => catalog-3bf1763a-cc10-4dd0-86c5-23886628db66#
                                            [VAT_RATE] => 0
                                            [NOTES] => Ваша цена
                                            [DISCOUNT_PRICE] => 0
                                            [PRODUCT_PROVIDER_CLASS] => CCatalogProductProvider
                                            [CALLBACK_FUNC] => 
                                            [ORDER_CALLBACK_FUNC] => 
                                            [PAY_CALLBACK_FUNC] => 
                                            [CANCEL_CALLBACK_FUNC] => 
                                            [DIMENSIONS] => a:3:{s:5:"WIDTH";N;s:6:"HEIGHT";N;s:6:"LENGTH";N;}
                                            [TYPE] => 
                                            [SET_PARENT_ID] => 
                                            [DETAIL_PAGE_URL] => /products/kukhonnaya_vytyazhka_kuppersberg_dudl_8_gb/
                                            [FUSER_ID] => 477110
                                            [MEASURE_CODE] => 796
                                            [MEASURE_NAME] => шт
                                            [ORDER_ID] => 
                                            [DATE_INSERT] => Bitrix\Main\Type\DateTime Object
                                                (
                                                    [value:protected] => DateTime Object
                                                        (
                                                            [date] => 2025-02-10 17:42:11.000000
                                                            [timezone_type] => 3
                                                            [timezone] => Asia/Yekaterinburg
                                                        )

                                                    [userTimeEnabled:protected] => 1
                                                )

                                            [DATE_UPDATE] => Bitrix\Main\Type\DateTime Object
                                                (
                                                    [value:protected] => DateTime Object
                                                        (
                                                            [date] => 2025-02-12 09:44:21.000000
                                                            [timezone_type] => 3
                                                            [timezone] => Asia/Yekaterinburg
                                                        )

                                                    [userTimeEnabled:protected] => 1
                                                )

                                            [PRODUCT_XML_ID] => a54ad99e-ddfb-11ea-ab99-00259087b6a3#a54ad99e-ddfb-11ea-ab99-00259087b6a3
                                            [SUBSCRIBE] => N
                                            [RECOMMENDATION] => 
                                            [VAT_INCLUDED] => N
                                            [SORT] => 3000
                                            [DATE_REFRESH] => 
                                            [DISCOUNT_NAME] => 
                                            [DISCOUNT_VALUE] => 
                                            [DISCOUNT_COUPON] => 
                                            [XML_ID] => bx_67a9f423b13ea
                                            [MARKING_CODE_GROUP] => 
                                            [PRICE_FORMATED] => 47 761 ₽
                                            [WEIGHT_FORMATED] => 0 кг
                                            [DISCOUNT_PRICE_PERCENT] => 0
                                            [DISCOUNT_PRICE_PERCENT_FORMATED] => 0%
                                            [BASE_PRICE_FORMATED] => 47 761 ₽
                                            [PROPS] => Array
                                                (
                                                )

                                            [SUM_NUM] => 47761
                                            [SUM] => 47 761 ₽
                                            [SUM_BASE] => 47761
                                            [SUM_BASE_FORMATED] => 47 761 ₽
                                            [CATALOG_QUANTITY] => 0
                                            [PREVIEW_PICTURE] => 2882003
                                            [DETAIL_PICTURE] => 2882004
                                            [PROPERTY_COLOR_REF_VALUE] => 179c5585-e25d-11e8-86eb-00155d00c800
                                            [PROPERTY_COLOR_REF_VALUE_ID] => 570336428
                                            [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE] => 10
                                            [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE_ID] => 575295916
                                            [PROPERTY_CML2_MANUFACTURER_VALUE] => Kuppersberg
                                            [PROPERTY_CML2_ARTICLE_VALUE] => 6058
                                            [PREVIEW_PICTURE_SRC] => /upload/resize_cache/iblock/70d/160_160_1/ny3rwoy0ed3orwg0rnuancg83hd2dq33.jpg
                                            [PREVIEW_PICTURE_SRC_2X] => /upload/resize_cache/iblock/70d/320_320_1/ny3rwoy0ed3orwg0rnuancg83hd2dq33.jpg
                                            [PREVIEW_PICTURE_SRC_ORIGINAL] => /upload/iblock/70d/ny3rwoy0ed3orwg0rnuancg83hd2dq33.jpg
                                            [DETAIL_PICTURE_SRC] => /upload/resize_cache/iblock/c6c/160_160_1/es3ady5q2ncg6749eiivouhp6gfoy3lz.jpg
                                            [DETAIL_PICTURE_SRC_2X] => /upload/resize_cache/iblock/c6c/320_320_1/es3ady5q2ncg6749eiivouhp6gfoy3lz.jpg
                                            [DETAIL_PICTURE_SRC_ORIGINAL] => /upload/iblock/c6c/es3ady5q2ncg6749eiivouhp6gfoy3lz.jpg
                                            [MEASURE_TEXT] => шт
                                            [MEASURE] => 796
                                            [AVAILABILITY] => ON_DEMAND
                                            [AVAILABILITY_ITEM] => Array
                                                (
                                                    [TEXT] => Под заказ
                                                    [COLOR] => #A6C3EE
                                                )

                                            [COLOR_DATA] => Array
                                                (
                                                    [NAME] => Черный
                                                    [FILE] => /upload/uf/b24/b24c47e90a806c22401bd9da11307f24.png
                                                )

                                        )

                                    [actions] => Array
                                        (
                                        )

                                    [columns] => Array
                                        (
                                            [PROPS] => 
                                            [QUANTITY] => 1 шт
                                            [PROPERTY_COLOR_REF_VALUE] => Array
                                                (
                                                    [0] => Array
                                                        (
                                                            [type] => value
                                                            [value] => 179c5585-e25d-11e8-86eb-00155d00c800
                                                        )

                                                )

                                            [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE] => Array
                                                (
                                                    [0] => Array
                                                        (
                                                            [type] => value
                                                            [value] => 10
                                                        )

                                                )

                                            [PROPERTY_CML2_MANUFACTURER_VALUE] => Array
                                                (
                                                    [0] => Array
                                                        (
                                                            [type] => value
                                                            [value] => Kuppersberg
                                                        )

                                                )

                                            [PROPERTY_CML2_ARTICLE_VALUE] => Array
                                                (
                                                    [0] => Array
                                                        (
                                                            [type] => value
                                                            [value] => 6058
                                                        )

                                                )

                                        )

                                    [editable] => 1
                                )

                            [153836] => Array
                                (
                                    [id] => 153836
                                    [data] => Array
                                        (
                                            [ID] => 153836
                                            [LID] => s1
                                            [MODULE] => catalog
                                            [PRODUCT_ID] => 137846
                                            [QUANTITY] => 1
                                            [WEIGHT] => 32000.00
                                            [DELAY] => N
                                            [CAN_BUY] => Y
                                            [PRICE] => 30837
                                            [CUSTOM_PRICE] => N
                                            [BASE_PRICE] => 30837
                                            [PRODUCT_PRICE_ID] => 27855629
                                            [PRICE_TYPE_ID] => 3
                                            [CURRENCY] => RUB
                                            [BARCODE_MULTI] => N
                                            [RESERVED] => N
                                            [RESERVE_QUANTITY] => 
                                            [NAME] => Посудомоечная машина Lex PM 4562 B (CHMI000300)
                                            [CATALOG_XML_ID] => catalog-3bf1763a-cc10-4dd0-86c5-23886628db66#
                                            [VAT_RATE] => 0
                                            [NOTES] => Ваша цена
                                            [DISCOUNT_PRICE] => 0
                                            [PRODUCT_PROVIDER_CLASS] => CCatalogProductProvider
                                            [CALLBACK_FUNC] => 
                                            [ORDER_CALLBACK_FUNC] => 
                                            [PAY_CALLBACK_FUNC] => 
                                            [CANCEL_CALLBACK_FUNC] => 
                                            [DIMENSIONS] => a:3:{s:5:"WIDTH";N;s:6:"HEIGHT";N;s:6:"LENGTH";N;}
                                            [TYPE] => 
                                            [SET_PARENT_ID] => 
                                            [DETAIL_PAGE_URL] => /products/posudomoechnaya_mashina_lex_pm_4562_b/
                                            [FUSER_ID] => 477110
                                            [MEASURE_CODE] => 796
                                            [MEASURE_NAME] => шт
                                            [ORDER_ID] => 
                                            [DATE_INSERT] => Bitrix\Main\Type\DateTime Object
                                                (
                                                    [value:protected] => DateTime Object
                                                        (
                                                            [date] => 2025-02-12 12:55:00.000000
                                                            [timezone_type] => 3
                                                            [timezone] => Asia/Yekaterinburg
                                                        )

                                                    [userTimeEnabled:protected] => 1
                                                )

                                            [DATE_UPDATE] => Bitrix\Main\Type\DateTime Object
                                                (
                                                    [value:protected] => DateTime Object
                                                        (
                                                            [date] => 2025-02-12 12:55:00.000000
                                                            [timezone_type] => 3
                                                            [timezone] => Asia/Yekaterinburg
                                                        )

                                                    [userTimeEnabled:protected] => 1
                                                )

                                            [PRODUCT_XML_ID] => 55b299cc-37b9-11ec-abea-00259087b6a3#55b299cc-37b9-11ec-abea-00259087b6a3
                                            [SUBSCRIBE] => N
                                            [RECOMMENDATION] => 
                                            [VAT_INCLUDED] => N
                                            [SORT] => 3100
                                            [DATE_REFRESH] => 
                                            [DISCOUNT_NAME] => 
                                            [DISCOUNT_VALUE] => 
                                            [DISCOUNT_COUPON] => 
                                            [XML_ID] => bx_67ac53d43a61f
                                            [MARKING_CODE_GROUP] => 
                                            [PRICE_FORMATED] => 30 837 ₽
                                            [WEIGHT_FORMATED] => 32 кг
                                            [DISCOUNT_PRICE_PERCENT] => 0
                                            [DISCOUNT_PRICE_PERCENT_FORMATED] => 0%
                                            [BASE_PRICE_FORMATED] => 30 837 ₽
                                            [PROPS] => Array
                                                (
                                                )

                                            [SUM_NUM] => 30837
                                            [SUM] => 30 837 ₽
                                            [SUM_BASE] => 30837
                                            [SUM_BASE_FORMATED] => 30 837 ₽
                                            [CATALOG_QUANTITY] => 11
                                            [PREVIEW_PICTURE] => 2890954
                                            [DETAIL_PICTURE] => 2890955
                                            [PROPERTY_COLOR_REF_VALUE] => a0429861-e267-11e8-86eb-00155d00c800
                                            [PROPERTY_COLOR_REF_VALUE_ID] => 574763348
                                            [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE] => 0
                                            [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE_ID] => 575398224
                                            [PROPERTY_CML2_MANUFACTURER_VALUE] => Lex
                                            [PROPERTY_CML2_MANUFACTURER_VALUE_ID] => 
                                            [PROPERTY_CML2_MANUFACTURER_ENUM_ID] => 
                                            [PROPERTY_KATEGORIYA_TOVARA_VALUE] => 
                                            [PROPERTY_KATEGORIYA_TOVARA_VALUE_ID] => 
                                            [PROPERTY_KATEGORIYA_TOVARA_ENUM_ID] => 
                                            [PROPERTY_CML2_ARTICLE_VALUE] => CHMI000300
                                            [PROPERTY_CML2_ARTICLE_VALUE_ID] => 
                                            [PROPERTY_TIP_USTANOVKI_VALUE] => Встраиваемый
                                            [PROPERTY_TIP_USTANOVKI_VALUE_ID] => 575398214
                                            [PROPERTY_TIP_USTANOVKI_ENUM_ID] => 126502
                                            [PREVIEW_PICTURE_SRC] => /upload/resize_cache/iblock/af3/160_160_1/x4cuhm6iu8xbwjbfi56v3rihpbnef5ru.jpg
                                            [PREVIEW_PICTURE_SRC_2X] => /upload/resize_cache/iblock/af3/320_320_1/x4cuhm6iu8xbwjbfi56v3rihpbnef5ru.jpg
                                            [PREVIEW_PICTURE_SRC_ORIGINAL] => /upload/iblock/af3/x4cuhm6iu8xbwjbfi56v3rihpbnef5ru.jpg
                                            [DETAIL_PICTURE_SRC] => /upload/resize_cache/iblock/f5d/160_160_1/tx016z1bocfa0rn10e0xuzed53d481jt.jpg
                                            [DETAIL_PICTURE_SRC_2X] => /upload/resize_cache/iblock/f5d/320_320_1/tx016z1bocfa0rn10e0xuzed53d481jt.jpg
                                            [DETAIL_PICTURE_SRC_ORIGINAL] => /upload/iblock/f5d/tx016z1bocfa0rn10e0xuzed53d481jt.jpg
                                            [MEASURE_TEXT] => шт
                                            [MEASURE] => 796
                                            [AVAILABILITY] => IN_STOCK
                                            [AVAILABILITY_ITEM] => Array
                                                (
                                                    [TEXT] => В наличии
                                                    [COLOR] => #75D14A
                                                )

                                            [COLOR_DATA] => Array
                                                (
                                                    [NAME] => Нержавеющая сталь
                                                    [FILE] => /upload/uf/471/4713f764815490ac39e74295ff20cdfd.jpg
                                                )

                                        )

                                    [actions] => Array
                                        (
                                        )

                                    [columns] => Array
                                        (
                                            [PROPS] => 
                                            [QUANTITY] => 1 шт
                                            [PROPERTY_COLOR_REF_VALUE] => Array
                                                (
                                                    [0] => Array
                                                        (
                                                            [type] => value
                                                            [value] => a0429861-e267-11e8-86eb-00155d00c800
                                                        )

                                                )

                                            [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE] => Array
                                                (
                                                    [0] => Array
                                                        (
                                                            [type] => value
                                                            [value] => 0
                                                        )

                                                )

                                            [PROPERTY_CML2_MANUFACTURER_VALUE] => Array
                                                (
                                                    [0] => Array
                                                        (
                                                            [type] => value
                                                            [value] => Lex
                                                        )

                                                )

                                            [PROPERTY_KATEGORIYA_TOVARA_VALUE] => Array
                                                (
                                                    [0] => Array
                                                        (
                                                            [type] => value
                                                            [value] => 
                                                        )

                                                )

                                            [PROPERTY_CML2_ARTICLE_VALUE] => Array
                                                (
                                                    [0] => Array
                                                        (
                                                            [type] => value
                                                            [value] => CHMI000300
                                                        )

                                                )

                                            [PROPERTY_TIP_USTANOVKI_VALUE] => Array
                                                (
                                                    [0] => Array
                                                        (
                                                            [type] => value
                                                            [value] => Встраиваемый
                                                        )

                                                )

                                        )

                                    [editable] => 1
                                )

                            [153874] => Array
                                (
                                    [id] => 153874
                                    [data] => Array
                                        (
                                            [ID] => 153874
                                            [LID] => s1
                                            [MODULE] => catalog
                                            [PRODUCT_ID] => 145710
                                            [QUANTITY] => 2
                                            [WEIGHT] => 0.00
                                            [DELAY] => N
                                            [CAN_BUY] => Y
                                            [PRICE] => 3562
                                            [CUSTOM_PRICE] => N
                                            [BASE_PRICE] => 3562
                                            [PRODUCT_PRICE_ID] => 30797081
                                            [PRICE_TYPE_ID] => 3
                                            [CURRENCY] => RUB
                                            [BARCODE_MULTI] => N
                                            [RESERVED] => N
                                            [RESERVE_QUANTITY] => 
                                            [NAME] => Мойка для кухни Dr. Gans Smart ОЛИВИЯ-420 (25.150.B0420.406)
                                            [CATALOG_XML_ID] => catalog-3bf1763a-cc10-4dd0-86c5-23886628db66#
                                            [VAT_RATE] => 0
                                            [NOTES] => Ваша цена
                                            [DISCOUNT_PRICE] => 0
                                            [PRODUCT_PROVIDER_CLASS] => CCatalogProductProvider
                                            [CALLBACK_FUNC] => 
                                            [ORDER_CALLBACK_FUNC] => 
                                            [PAY_CALLBACK_FUNC] => 
                                            [CANCEL_CALLBACK_FUNC] => 
                                            [DIMENSIONS] => a:3:{s:5:"WIDTH";N;s:6:"HEIGHT";N;s:6:"LENGTH";N;}
                                            [TYPE] => 
                                            [SET_PARENT_ID] => 
                                            [DETAIL_PAGE_URL] => /products/moyka_dlya_kukhni_dr_gans_smart_oliviya_420/
                                            [FUSER_ID] => 477110
                                            [MEASURE_CODE] => 796
                                            [MEASURE_NAME] => шт
                                            [ORDER_ID] => 
                                            [DATE_INSERT] => Bitrix\Main\Type\DateTime Object
                                                (
                                                    [value:protected] => DateTime Object
                                                        (
                                                            [date] => 2025-02-12 15:09:43.000000
                                                            [timezone_type] => 3
                                                            [timezone] => Asia/Yekaterinburg
                                                        )

                                                    [userTimeEnabled:protected] => 1
                                                )

                                            [DATE_UPDATE] => Bitrix\Main\Type\DateTime Object
                                                (
                                                    [value:protected] => DateTime Object
                                                        (
                                                            [date] => 2025-02-12 15:16:28.000000
                                                            [timezone_type] => 3
                                                            [timezone] => Asia/Yekaterinburg
                                                        )

                                                    [userTimeEnabled:protected] => 1
                                                )

                                            [PRODUCT_XML_ID] => 0fe66eae-004d-11ea-ab6d-00259087b6a3#3c71b6a0-004d-11ea-ab6d-00259087b6a3
                                            [SUBSCRIBE] => N
                                            [RECOMMENDATION] => 
                                            [VAT_INCLUDED] => N
                                            [SORT] => 3200
                                            [DATE_REFRESH] => 
                                            [DISCOUNT_NAME] => 
                                            [DISCOUNT_VALUE] => 
                                            [DISCOUNT_COUPON] => 
                                            [XML_ID] => bx_67ac7366f2bf8
                                            [MARKING_CODE_GROUP] => 
                                            [PRICE_FORMATED] => 3 562 ₽
                                            [WEIGHT_FORMATED] => 0 кг
                                            [DISCOUNT_PRICE_PERCENT] => 0
                                            [DISCOUNT_PRICE_PERCENT_FORMATED] => 0%
                                            [BASE_PRICE_FORMATED] => 3 562 ₽
                                            [PROPS] => Array
                                                (
                                                )

                                            [SUM_NUM] => 7124
                                            [SUM] => 7 124 ₽
                                            [SUM_BASE] => 7124
                                            [SUM_BASE_FORMATED] => 7 124 ₽
                                            [CATALOG_QUANTITY] => 0
                                            [PREVIEW_PICTURE] => 2590809
                                            [DETAIL_PICTURE] => 2590810
                                            [PROPERTY_COLOR_REF_VALUE] => ae86edd9-083c-11e9-88e1-00155d00c800
                                            [PROPERTY_COLOR_REF_VALUE_ID] => 570595167
                                            [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE] => 1
                                            [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE_ID] => 575335729
                                            [PROPERTY_CML2_MANUFACTURER_VALUE] => Dr. Gans Smart
                                            [PROPERTY_CML2_ARTICLE_VALUE] => 25.150.B0420.401
                                            [PREVIEW_PICTURE_SRC] => /upload/resize_cache/iblock/dd8/160_160_1/11lrl3f97jeug3q373g5hbika4idx8sy.jpg
                                            [PREVIEW_PICTURE_SRC_2X] => /upload/resize_cache/iblock/dd8/320_320_1/11lrl3f97jeug3q373g5hbika4idx8sy.jpg
                                            [PREVIEW_PICTURE_SRC_ORIGINAL] => /upload/iblock/dd8/11lrl3f97jeug3q373g5hbika4idx8sy.jpg
                                            [DETAIL_PICTURE_SRC] => /upload/resize_cache/iblock/e0a/160_160_1/3764xxqkdtjzsb1hydjywdwzdzmd3a20.jpg
                                            [DETAIL_PICTURE_SRC_2X] => /upload/resize_cache/iblock/e0a/320_320_1/3764xxqkdtjzsb1hydjywdwzdzmd3a20.jpg
                                            [DETAIL_PICTURE_SRC_ORIGINAL] => /upload/iblock/e0a/3764xxqkdtjzsb1hydjywdwzdzmd3a20.jpg
                                            [MEASURE_TEXT] => шт
                                            [MEASURE] => 796
                                            [AVAILABILITY] => ON_DEMAND
                                            [AVAILABILITY_ITEM] => Array
                                                (
                                                    [TEXT] => Под заказ
                                                    [COLOR] => #A6C3EE
                                                )

                                            [COLOR_DATA] => Array
                                                (
                                                    [NAME] => Терракот
                                                    [FILE] => /upload/uf/ef6/ef6efe6a12763059248c3cff72f721a8.png
                                                )

                                        )

                                    [actions] => Array
                                        (
                                        )

                                    [columns] => Array
                                        (
                                            [PROPS] => 
                                            [QUANTITY] => 2 шт
                                            [PROPERTY_COLOR_REF_VALUE] => Array
                                                (
                                                    [0] => Array
                                                        (
                                                            [type] => value
                                                            [value] => ae86edd9-083c-11e9-88e1-00155d00c800
                                                        )

                                                )

                                            [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE] => Array
                                                (
                                                    [0] => Array
                                                        (
                                                            [type] => value
                                                            [value] => 1
                                                        )

                                                )

                                            [PROPERTY_CML2_MANUFACTURER_VALUE] => Array
                                                (
                                                    [0] => Array
                                                        (
                                                            [type] => value
                                                            [value] => Dr. Gans Smart
                                                        )

                                                )

                                            [PROPERTY_CML2_ARTICLE_VALUE] => Array
                                                (
                                                    [0] => Array
                                                        (
                                                            [type] => value
                                                            [value] => 25.150.B0420.401
                                                        )

                                                )

                                        )

                                    [editable] => 1
                                )

                        )

                )

            [PERSON_TYPE] => Array
                (
                    [1] => Array
                        (
                            [ID] => 1
                            [LID] => s1
                            [NAME] => Физическое лицо
                            [CODE] => 
                            [SORT] => 100
                            [ACTIVE] => Y
                            [XML_ID] => bx_02d990b7b4768de1dfcb50dc4401e8dd
                            [ENTITY_REGISTRY_TYPE] => ORDER
                            [CHECKED] => Y
                        )

                    [2] => Array
                        (
                            [ID] => 2
                            [LID] => s1
                            [NAME] => Юридическое лицо
                            [CODE] => 
                            [SORT] => 150
                            [ACTIVE] => Y
                            [XML_ID] => bx_5ce88b673aaa42e2155026be40876aa6
                            [ENTITY_REGISTRY_TYPE] => ORDER
                        )

                )

            [PAY_SYSTEM] => Array
                (
                    [0] => Array
                        (
                            [ID] => 1
                            [PAY_SYSTEM_ID] => 1
                            [NAME] => Наличными при получении товара
                            [PSA_NAME] => Наличными при получении
                            [CODE] => CASH
                            [SORT] => 80
                            [DESCRIPTION] => Оплата производится наличными деньгами, в момент получения заказа. Подтверждением вашей оплаты является фискальный кассовый чек, вручаемый во время получения и оплаты заказа.
                            [PS_MODE] => 
                            [PS_CLIENT_TYPE] => 
                            [HAVE_PRICE] => N
                            [ACTIVE] => Y
                            [ALLOW_EDIT_PAYMENT] => Y
                            [IS_CASH] => Y
                            [AUTO_CHANGE_1C] => N
                            [CAN_PRINT_CHECK] => N
                            [ENTITY_REGISTRY_TYPE] => ORDER
                            [XML_ID] => bx_53cb29cad359a60df1c398fdca36a4e3
                            [PSA_ID] => 1
                            [PSA_ACTION_FILE] => cash
                            [PSA_RESULT_FILE] => 
                            [PSA_NEW_WINDOW] => N
                            [PSA_PERSON_TYPE_ID] => 
                            [PSA_PARAMS] => a:1:{s:16:"BX_PAY_SYSTEM_ID";i:1;}
                            [PSA_TARIF] => 
                            [PSA_HAVE_PAYMENT] => Y
                            [PSA_HAVE_ACTION] => N
                            [PSA_HAVE_RESULT] => N
                            [PSA_HAVE_PREPAY] => N
                            [PSA_HAVE_RESULT_RECEIVE] => N
                            [PSA_ENCODING] => 
                            [PSA_LOGOTIP] => Array
                                (
                                    [ID] => 930
                                    [TIMESTAMP_X] => 17.07.2020 20:04:42
                                    [MODULE_ID] => sale
                                    [HEIGHT] => 249
                                    [WIDTH] => 512
                                    [FILE_SIZE] => 3640
                                    [CONTENT_TYPE] => image/png
                                    [SUBDIR] => sale/paysystem/logotip/26f
                                    [FILE_NAME] => 26f22e85302f8f8ad3031d263f066805.png
                                    [ORIGINAL_NAME] => cash.png
                                    [DESCRIPTION] => 
                                    [HANDLER_ID] => 
                                    [EXTERNAL_ID] => 412f25452b930ed2bab5a5af216f9764
                                    [VERSION_ORIGINAL_ID] => 
                                    [META] => 
                                    [SRC] => /upload/sale/paysystem/logotip/26f/26f22e85302f8f8ad3031d263f066805.png
                                )

                            [PRICE] => 0
                            [PSA_LOGOTIP_SRC] => /upload/resize_cache/sale/paysystem/logotip/26f/300_300_1/26f22e85302f8f8ad3031d263f066805.png
                            [PSA_LOGOTIP_SRC_2X] => /upload/sale/paysystem/logotip/26f/26f22e85302f8f8ad3031d263f066805.png
                            [PSA_LOGOTIP_SRC_ORIGINAL] => /upload/sale/paysystem/logotip/26f/26f22e85302f8f8ad3031d263f066805.png
                        )

                    [1] => Array
                        (
                            [ID] => 16
                            [PAY_SYSTEM_ID] => 16
                            [NAME] => Интернет-эквайринг Сбербанк
                            [PSA_NAME] => Интернет-эквайринг Сбербанк
                            [CODE] => 
                            [SORT] => 100
                            [DESCRIPTION] => 

                            [PS_MODE] => 
                            [PS_CLIENT_TYPE] => b2c
                            [HAVE_PRICE] => N
                            [ACTIVE] => Y
                            [ALLOW_EDIT_PAYMENT] => Y
                            [IS_CASH] => N
                            [AUTO_CHANGE_1C] => N
                            [CAN_PRINT_CHECK] => N
                            [ENTITY_REGISTRY_TYPE] => ORDER
                            [XML_ID] => bx_63902c9839928
                            [PSA_ID] => 16
                            [PSA_ACTION_FILE] => sberbank_ecom2
                            [PSA_RESULT_FILE] => 
                            [PSA_NEW_WINDOW] => N
                            [PSA_PERSON_TYPE_ID] => 
                            [PSA_PARAMS] => a:1:{s:16:"BX_PAY_SYSTEM_ID";i:16;}
                            [PSA_TARIF] => 
                            [PSA_HAVE_PAYMENT] => Y
                            [PSA_HAVE_ACTION] => N
                            [PSA_HAVE_RESULT] => N
                            [PSA_HAVE_PREPAY] => Y
                            [PSA_HAVE_RESULT_RECEIVE] => Y
                            [PSA_ENCODING] => 
                            [PSA_LOGOTIP] => Array
                                (
                                    [ID] => 1876297
                                    [TIMESTAMP_X] => 07.12.2022 11:03:37
                                    [MODULE_ID] => sale
                                    [HEIGHT] => 60
                                    [WIDTH] => 60
                                    [FILE_SIZE] => 10014
                                    [CONTENT_TYPE] => image/png
                                    [SUBDIR] => sale/paysystem/logotip/bd4
                                    [FILE_NAME] => r55ahqq4cfa72utc3vdloihwecn2uwos.png
                                    [ORIGINAL_NAME] => sberbank_ecom2.png
                                    [DESCRIPTION] => 
                                    [HANDLER_ID] => 
                                    [EXTERNAL_ID] => 92c9422fcfba48fda41090b16b850b01
                                    [VERSION_ORIGINAL_ID] => 
                                    [META] => 
                                    [SRC] => /upload/sale/paysystem/logotip/bd4/r55ahqq4cfa72utc3vdloihwecn2uwos.png
                                )

                            [CHECKED] => Y
                            [PRICE] => 0
                            [PSA_LOGOTIP_SRC] => /upload/sale/paysystem/logotip/bd4/r55ahqq4cfa72utc3vdloihwecn2uwos.png
                            [PSA_LOGOTIP_SRC_2X] => /upload/sale/paysystem/logotip/bd4/r55ahqq4cfa72utc3vdloihwecn2uwos.png
                            [PSA_LOGOTIP_SRC_ORIGINAL] => /upload/sale/paysystem/logotip/bd4/r55ahqq4cfa72utc3vdloihwecn2uwos.png
                        )

                    [2] => Array
                        (
                            [ID] => 11
                            [PAY_SYSTEM_ID] => 11
                            [NAME] => Картой при получении товара (только в пункте выдачи)
                            [PSA_NAME] => Картой при получении
                            [CODE] => CARDCASH
                            [SORT] => 100
                            [DESCRIPTION] => 

                            [PS_MODE] => 
                            [PS_CLIENT_TYPE] => 
                            [HAVE_PRICE] => N
                            [ACTIVE] => Y
                            [ALLOW_EDIT_PAYMENT] => Y
                            [IS_CASH] => N
                            [AUTO_CHANGE_1C] => N
                            [CAN_PRINT_CHECK] => N
                            [ENTITY_REGISTRY_TYPE] => ORDER
                            [XML_ID] => bx_5d52aa2a40dbf
                            [PSA_ID] => 11
                            [PSA_ACTION_FILE] => cash
                            [PSA_RESULT_FILE] => 
                            [PSA_NEW_WINDOW] => N
                            [PSA_PERSON_TYPE_ID] => 
                            [PSA_PARAMS] => a:1:{s:16:"BX_PAY_SYSTEM_ID";i:11;}
                            [PSA_TARIF] => 
                            [PSA_HAVE_PAYMENT] => Y
                            [PSA_HAVE_ACTION] => N
                            [PSA_HAVE_RESULT] => N
                            [PSA_HAVE_PREPAY] => N
                            [PSA_HAVE_RESULT_RECEIVE] => N
                            [PSA_ENCODING] => 
                            [PSA_LOGOTIP] => Array
                                (
                                    [ID] => 7857
                                    [TIMESTAMP_X] => 17.07.2020 20:04:49
                                    [MODULE_ID] => sale
                                    [HEIGHT] => 56
                                    [WIDTH] => 212
                                    [FILE_SIZE] => 2311
                                    [CONTENT_TYPE] => image/png
                                    [SUBDIR] => sale/paysystem/logotip/483
                                    [FILE_NAME] => 483b082114add193d1541a50286f4af3.png
                                    [ORIGINAL_NAME] => cash.png
                                    [DESCRIPTION] => 
                                    [HANDLER_ID] => 
                                    [EXTERNAL_ID] => 9270748a7f0b8e4e0a619bd81445a355
                                    [VERSION_ORIGINAL_ID] => 
                                    [META] => 
                                    [SRC] => /upload/sale/paysystem/logotip/483/483b082114add193d1541a50286f4af3.png
                                )

                            [PRICE] => 0
                            [PSA_LOGOTIP_SRC] => /upload/sale/paysystem/logotip/483/483b082114add193d1541a50286f4af3.png
                            [PSA_LOGOTIP_SRC_2X] => /upload/sale/paysystem/logotip/483/483b082114add193d1541a50286f4af3.png
                            [PSA_LOGOTIP_SRC_ORIGINAL] => /upload/sale/paysystem/logotip/483/483b082114add193d1541a50286f4af3.png
                        )

                )

            [INNER_PAY_SYSTEM] => 
            [DELIVERY] => Array
                (
                    [3] => Array
                        (
                            [PRICE] => 0
                            [PRICE_FORMATED] => 0 ₽
                            [CALCULATE_DESCRIPTION] => 
                            [ID] => 3
                            [NAME] => Самовывоз
                            [OWN_NAME] => Самовывоз
                            [DESCRIPTION] => г. Екатеринбург, проезд Промышленный, 9А, строение 4 
8 (343) 379-98-68 Рабочие дни с 08:00 до 17:00
 

 г. Тюмень ул. Авторемонтная, 1а, строение 2
 
8 (3452) 302-300 Будние дни - с 9:00 до 18:00, Сб - с 10:00 до 14:00, Вск - Выходной
 

 г. Челябинск ул.Троицкий Тракт 20 А офис 10 
 
8 (951) 119-55-45 Рабочие дни с 09:00 до 17:00
 

 


                            [FIELD_NAME] => DELIVERY_ID
                            [CURRENCY] => RUB
                            [SORT] => 300
                            [EXTRA_SERVICES] => Array
                                (
                                )

                            [STORE] => Array
                                (
                                )

                            [LOGOTIP] => Array
                                (
                                    [ID] => 940
                                    [TIMESTAMP_X] => 17.07.2020 20:05:01
                                    [MODULE_ID] => sale
                                    [HEIGHT] => 249
                                    [WIDTH] => 512
                                    [FILE_SIZE] => 3774
                                    [CONTENT_TYPE] => image/png
                                    [SUBDIR] => sale/delivery/logotip/e56
                                    [FILE_NAME] => e5637ccb820cd5a5d806470fdd8a4a2f.png
                                    [ORIGINAL_NAME] => self_logo.png
                                    [DESCRIPTION] => 
                                    [HANDLER_ID] => 
                                    [EXTERNAL_ID] => e0d9c12d20ba17af4cc763bdebfad8c6
                                    [VERSION_ORIGINAL_ID] => 
                                    [META] => 
                                    [SRC] => /upload/sale/delivery/logotip/e56/e5637ccb820cd5a5d806470fdd8a4a2f.png
                                )

                            [LOGOTIP_SRC] => /upload/resize_cache/sale/delivery/logotip/e56/300_300_1/e5637ccb820cd5a5d806470fdd8a4a2f.png
                            [LOGOTIP_SRC_2X] => /upload/sale/delivery/logotip/e56/e5637ccb820cd5a5d806470fdd8a4a2f.png
                            [LOGOTIP_SRC_ORIGINAL] => /upload/sale/delivery/logotip/e56/e5637ccb820cd5a5d806470fdd8a4a2f.png
                        )

                    [2] => Array
                        (
                            [CHECKED] => Y
                            [PRICE] => 1000
                            [PRICE_FORMATED] => 1 000 ₽
                            [DELIVERY_DISCOUNT_PRICE] => 0
                            [DELIVERY_DISCOUNT_PRICE_FORMATED] => 0 ₽
                            [PERIOD_TEXT] =>  от 1 до 10 дней 
                            [CALCULATE_DESCRIPTION] => 
                            [ID] => 2
                            [NAME] => Доставка курьером
                            [OWN_NAME] => Доставка курьером
                            [DESCRIPTION] => Точные сроки и стоимость доставки уточняйте по телефону или дождитесь звонка менеджера после оформления заказа. Вся информация о доставке и подъеме товара размещена в разделе "Доставка" на нашем сайте. Ваш адрес уточнят при звонке.
                            [FIELD_NAME] => DELIVERY_ID
                            [CURRENCY] => RUB
                            [SORT] => 400
                            [EXTRA_SERVICES] => Array
                                (
                                )

                            [STORE] => Array
                                (
                                )

                            [LOGOTIP] => Array
                                (
                                    [ID] => 939
                                    [TIMESTAMP_X] => 17.07.2020 20:05:01
                                    [MODULE_ID] => sale
                                    [HEIGHT] => 249
                                    [WIDTH] => 512
                                    [FILE_SIZE] => 4845
                                    [CONTENT_TYPE] => image/png
                                    [SUBDIR] => sale/delivery/logotip/2ac
                                    [FILE_NAME] => 2ac1bc683518df282618359b319ea9e6.png
                                    [ORIGINAL_NAME] => courier_logo.png
                                    [DESCRIPTION] => 
                                    [HANDLER_ID] => 
                                    [EXTERNAL_ID] => b3f6c535cb63e45c2e539b0100513378
                                    [VERSION_ORIGINAL_ID] => 
                                    [META] => 
                                    [SRC] => /upload/sale/delivery/logotip/2ac/2ac1bc683518df282618359b319ea9e6.png
                                )

                            [LOGOTIP_SRC] => /upload/resize_cache/sale/delivery/logotip/2ac/300_300_1/2ac1bc683518df282618359b319ea9e6.png
                            [LOGOTIP_SRC_2X] => /upload/sale/delivery/logotip/2ac/2ac1bc683518df282618359b319ea9e6.png
                            [LOGOTIP_SRC_ORIGINAL] => /upload/sale/delivery/logotip/2ac/2ac1bc683518df282618359b319ea9e6.png
                        )

                )

            [USER_PROFILES] => Array
                (
                    [2513] => Array
                        (
                            [ID] => 2513
                            [~ID] => 2513
                            [NAME] => Alto Promo
                            [~NAME] => Alto Promo
                            [USER_ID] => 1
                            [~USER_ID] => 1
                            [PERSON_TYPE_ID] => 1
                            [~PERSON_TYPE_ID] => 1
                            [DATE_UPDATE] => 12.02.2025 16:26:24
                            [~DATE_UPDATE] => 12.02.2025 16:26:24
                            [DATE_UPDATE_RAW] => 2025-02-12 16:26:24
                            [~DATE_UPDATE_RAW] => 2025-02-12 16:26:24
                            [CHECKED] => Y
                        )

                )

            [ORDER_PROP] => Array
                (
                    [groups] => Array
                        (
                            [0] => Array
                                (
                                    [ID] => 1
                                    [PERSON_TYPE_ID] => 1
                                    [NAME] => Личные данные
                                    [CODE] => 
                                    [SORT] => 100
                                )

                            [1] => Array
                                (
                                    [ID] => 2
                                    [PERSON_TYPE_ID] => 1
                                    [NAME] => Данные для доставки
                                    [CODE] => 
                                    [SORT] => 200
                                )

                        )

                    [properties] => Array
                        (
                            [0] => Array
                                (
                                    [ID] => 1
                                    [PERSON_TYPE_ID] => 1
                                    [NAME] => ФИО
                                    [TYPE] => STRING
                                    [REQUIRED] => Y
                                    [DEFAULT_VALUE] => 
                                    [SORT] => 100
                                    [USER_PROPS] => Y
                                    [IS_LOCATION] => N
                                    [PROPS_GROUP_ID] => 1
                                    [DESCRIPTION] => 
                                    [IS_EMAIL] => N
                                    [IS_PROFILE_NAME] => Y
                                    [IS_PAYER] => Y
                                    [IS_LOCATION4TAX] => N
                                    [IS_FILTERED] => Y
                                    [CODE] => FIO
                                    [IS_ZIP] => N
                                    [IS_PHONE] => N
                                    [IS_ADDRESS] => N
                                    [IS_ADDRESS_FROM] => N
                                    [IS_ADDRESS_TO] => N
                                    [ACTIVE] => Y
                                    [UTIL] => N
                                    [INPUT_FIELD_LOCATION] => 0
                                    [MULTIPLE] => N
                                    [ENTITY_TYPE] => ORDER
                                    [MINLENGTH] => 
                                    [MAXLENGTH] => 
                                    [PATTERN] => 
                                    [MULTILINE] => N
                                    [SIZE] => 40
                                    [RELATION] => Array
                                        (
                                        )

                                    [VALUE] => Array
                                        (
                                            [0] => Alto Promo
                                        )

                                )

                            [1] => Array
                                (
                                    [ID] => 2
                                    [PERSON_TYPE_ID] => 1
                                    [NAME] => E-Mail
                                    [TYPE] => STRING
                                    [REQUIRED] => Y
                                    [DEFAULT_VALUE] => 
                                    [SORT] => 110
                                    [USER_PROPS] => Y
                                    [IS_LOCATION] => N
                                    [PROPS_GROUP_ID] => 1
                                    [DESCRIPTION] => 
                                    [IS_EMAIL] => Y
                                    [IS_PROFILE_NAME] => N
                                    [IS_PAYER] => N
                                    [IS_LOCATION4TAX] => N
                                    [IS_FILTERED] => Y
                                    [CODE] => EMAIL
                                    [IS_ZIP] => N
                                    [IS_PHONE] => N
                                    [IS_ADDRESS] => N
                                    [IS_ADDRESS_FROM] => N
                                    [IS_ADDRESS_TO] => N
                                    [ACTIVE] => Y
                                    [UTIL] => N
                                    [INPUT_FIELD_LOCATION] => 0
                                    [MULTIPLE] => N
                                    [ENTITY_TYPE] => ORDER
                                    [SIZE] => 40
                                    [RELATION] => Array
                                        (
                                        )

                                    [VALUE] => Array
                                        (
                                            [0] => admin@leadget.ru
                                        )

                                )

                            [2] => Array
                                (
                                    [ID] => 3
                                    [PERSON_TYPE_ID] => 1
                                    [NAME] => Телефон
                                    [TYPE] => STRING
                                    [REQUIRED] => Y
                                    [DEFAULT_VALUE] => 
                                    [SORT] => 120
                                    [USER_PROPS] => Y
                                    [IS_LOCATION] => N
                                    [PROPS_GROUP_ID] => 1
                                    [DESCRIPTION] => 
                                    [IS_EMAIL] => N
                                    [IS_PROFILE_NAME] => N
                                    [IS_PAYER] => N
                                    [IS_LOCATION4TAX] => N
                                    [IS_FILTERED] => N
                                    [CODE] => PHONE
                                    [IS_ZIP] => N
                                    [IS_PHONE] => N
                                    [IS_ADDRESS] => N
                                    [IS_ADDRESS_FROM] => N
                                    [IS_ADDRESS_TO] => N
                                    [ACTIVE] => Y
                                    [UTIL] => N
                                    [INPUT_FIELD_LOCATION] => 0
                                    [MULTIPLE] => N
                                    [ENTITY_TYPE] => ORDER
                                    [MINLENGTH] => 
                                    [MAXLENGTH] => 
                                    [PATTERN] => 
                                    [MULTILINE] => N
                                    [SIZE] => 
                                    [RELATION] => Array
                                        (
                                        )

                                    [VALUE] => Array
                                        (
                                            [0] => +7 (999) 999 99 99
                                        )

                                )

                            [3] => Array
                                (
                                    [ID] => 4
                                    [PERSON_TYPE_ID] => 1
                                    [NAME] => Индекс
                                    [TYPE] => STRING
                                    [REQUIRED] => Y
                                    [DEFAULT_VALUE] => 101000
                                    [SORT] => 130
                                    [USER_PROPS] => Y
                                    [IS_LOCATION] => N
                                    [PROPS_GROUP_ID] => 2
                                    [DESCRIPTION] => 
                                    [IS_EMAIL] => N
                                    [IS_PROFILE_NAME] => N
                                    [IS_PAYER] => N
                                    [IS_LOCATION4TAX] => N
                                    [IS_FILTERED] => N
                                    [CODE] => ZIP
                                    [IS_ZIP] => Y
                                    [IS_PHONE] => N
                                    [IS_ADDRESS] => N
                                    [IS_ADDRESS_FROM] => N
                                    [IS_ADDRESS_TO] => N
                                    [ACTIVE] => Y
                                    [UTIL] => N
                                    [INPUT_FIELD_LOCATION] => 0
                                    [MULTIPLE] => N
                                    [ENTITY_TYPE] => ORDER
                                    [SIZE] => 8
                                    [RELATION] => Array
                                        (
                                        )

                                    [VALUE] => Array
                                        (
                                            [0] => 620000
                                        )

                                )

                            [4] => Array
                                (
                                    [ID] => 6
                                    [PERSON_TYPE_ID] => 1
                                    [NAME] => Город
                                    [TYPE] => LOCATION
                                    [REQUIRED] => Y
                                    [DEFAULT_VALUE] => 0000812044
                                    [SORT] => 140
                                    [USER_PROPS] => Y
                                    [IS_LOCATION] => Y
                                    [PROPS_GROUP_ID] => 2
                                    [DESCRIPTION] => 
                                    [IS_EMAIL] => N
                                    [IS_PROFILE_NAME] => N
                                    [IS_PAYER] => N
                                    [IS_LOCATION4TAX] => N
                                    [IS_FILTERED] => N
                                    [CODE] => LOCATION
                                    [IS_ZIP] => N
                                    [IS_PHONE] => N
                                    [IS_ADDRESS] => N
                                    [IS_ADDRESS_FROM] => N
                                    [IS_ADDRESS_TO] => N
                                    [ACTIVE] => Y
                                    [UTIL] => N
                                    [INPUT_FIELD_LOCATION] => 5
                                    [MULTIPLE] => N
                                    [ENTITY_TYPE] => ORDER
                                    [RELATION] => Array
                                        (
                                        )

                                    [VALUE] => Array
                                        (
                                            [0] => 0000812044
                                        )

                                )

                            [5] => Array
                                (
                                    [ID] => 5
                                    [PERSON_TYPE_ID] => 1
                                    [NAME] => Город
                                    [TYPE] => STRING
                                    [REQUIRED] => N
                                    [DEFAULT_VALUE] => Москва
                                    [SORT] => 145
                                    [USER_PROPS] => Y
                                    [IS_LOCATION] => N
                                    [PROPS_GROUP_ID] => 2
                                    [DESCRIPTION] => 
                                    [IS_EMAIL] => N
                                    [IS_PROFILE_NAME] => N
                                    [IS_PAYER] => N
                                    [IS_LOCATION4TAX] => N
                                    [IS_FILTERED] => Y
                                    [CODE] => CITY
                                    [IS_ZIP] => N
                                    [IS_PHONE] => N
                                    [IS_ADDRESS] => N
                                    [IS_ADDRESS_FROM] => N
                                    [IS_ADDRESS_TO] => N
                                    [ACTIVE] => Y
                                    [UTIL] => N
                                    [INPUT_FIELD_LOCATION] => 0
                                    [MULTIPLE] => N
                                    [ENTITY_TYPE] => ORDER
                                    [SIZE] => 40
                                    [RELATION] => Array
                                        (
                                        )

                                    [VALUE] => Array
                                        (
                                            [0] => Москва
                                        )

                                )

                            [6] => Array
                                (
                                    [ID] => 7
                                    [PERSON_TYPE_ID] => 1
                                    [NAME] => Адрес доставки
                                    [TYPE] => STRING
                                    [REQUIRED] => Y
                                    [DEFAULT_VALUE] => 
                                    [SORT] => 150
                                    [USER_PROPS] => Y
                                    [IS_LOCATION] => N
                                    [PROPS_GROUP_ID] => 2
                                    [DESCRIPTION] => 
                                    [IS_EMAIL] => N
                                    [IS_PROFILE_NAME] => N
                                    [IS_PAYER] => N
                                    [IS_LOCATION4TAX] => N
                                    [IS_FILTERED] => N
                                    [CODE] => ADDRESS
                                    [IS_ZIP] => N
                                    [IS_PHONE] => N
                                    [IS_ADDRESS] => Y
                                    [IS_ADDRESS_FROM] => N
                                    [IS_ADDRESS_TO] => N
                                    [ACTIVE] => Y
                                    [UTIL] => N
                                    [INPUT_FIELD_LOCATION] => 0
                                    [MULTIPLE] => N
                                    [ENTITY_TYPE] => ORDER
                                    [MULTILINE] => Y
                                    [COLS] => 30
                                    [ROWS] => 3
                                    [RELATION] => Array
                                        (
                                        )

                                    [VALUE] => Array
                                        (
                                            [0] => Екатеринбург
                                        )

                                )

                        )

                )

            [STORE_LIST] => Array
                (
                    [14] => Array
                        (
                            [ID] => 14
                            [TITLE] => Центральный склад
                            [ADDRESS] => Екатеринбург
                            [DESCRIPTION] => 
                            [IMAGE_ID] => 
                            [PHONE] => 
                            [SCHEDULE] => 
                            [GPS_N] => 0
                            [GPS_S] => 0
                            [ISSUING_CENTER] => Y
                            [SITE_ID] => 
                        )

                    [8] => Array
                        (
                            [ID] => 8
                            [TITLE] => Склад Тюмень
                            [ADDRESS] => Тюмень
                            [DESCRIPTION] => 
                            [IMAGE_ID] => 
                            [PHONE] => 
                            [SCHEDULE] => 
                            [GPS_N] => 0
                            [GPS_S] => 0
                            [ISSUING_CENTER] => Y
                            [SITE_ID] => 
                        )

                )

            [BUYER_STORE] => 0
            [COUPON_LIST] => Array
                (
                )

            [PAY_CURRENT_ACCOUNT] => N
            [PAY_FROM_ACCOUNT] => N
            [CURRENT_BUDGET_FORMATED] => 
            [TOTAL] => Array
                (
                    [PRICE_WITHOUT_DISCOUNT_VALUE] => 628210
                    [PRICE_WITHOUT_DISCOUNT] => 628 210 ₽
                    [PAYED_FROM_ACCOUNT_FORMATED] => 
                    [ORDER_TOTAL_PRICE] => 628210
                    [ORDER_TOTAL_PRICE_FORMATED] => 628 210 ₽
                    [ORDER_TOTAL_LEFT_TO_PAY] => 
                    [ORDER_TOTAL_LEFT_TO_PAY_FORMATED] => 
                    [ORDER_WEIGHT] => 107000
                    [ORDER_WEIGHT_FORMATED] => 107 кг
                    [ORDER_PRICE] => 628210
                    [ORDER_PRICE_FORMATED] => 628 210 ₽
                    [USE_VAT] => 
                    [VAT_RATE] => 0
                    [VAT_SUM] => 0
                    [VAT_SUM_FORMATED] => 0 ₽
                    [TAX_PRICE] => 0
                    [TAX_LIST] => Array
                        (
                        )

                    [DISCOUNT_PRICE] => 0
                    [DISCOUNT_PRICE_FORMATED] => 0 ₽
                    [DELIVERY_PRICE] => 0
                    [DELIVERY_PRICE_FORMATED] => 0 ₽
                    [PAY_SYSTEM_PRICE] => 
                    [PAY_SYSTEM_PRICE_FORMATTED] => 
                )

            [ERROR] => Array
                (
                )

            [WARNING] => Array
                (
                )

        )

    [SHOW_EMPTY_BASKET] => 
    [ORDER_PRICE] => 628210
    [ORDER_WEIGHT] => 107000
    [VATE_RATE] => 0
    [VAT_SUM] => 0
    [bUsingVat] => 
    [BASKET_ITEMS] => Array
        (
            [0] => Array
                (
                    [ID] => 153873
                    [LID] => s1
                    [MODULE] => catalog
                    [PRODUCT_ID] => 138083
                    [QUANTITY] => 1
                    [WEIGHT] => 0.00
                    [DELAY] => N
                    [CAN_BUY] => Y
                    [PRICE] => 33774
                    [CUSTOM_PRICE] => N
                    [BASE_PRICE] => 33774
                    [PRODUCT_PRICE_ID] => 30800541
                    [PRICE_TYPE_ID] => 3
                    [CURRENCY] => RUB
                    [BARCODE_MULTI] => N
                    [RESERVED] => N
                    [RESERVE_QUANTITY] => 
                    [NAME] => Посудомоечная машина Korting KDI 60110 (KDI 60110)
                    [CATALOG_XML_ID] => catalog-3bf1763a-cc10-4dd0-86c5-23886628db66#
                    [VAT_RATE] => 0
                    [NOTES] => Ваша цена
                    [DISCOUNT_PRICE] => 0
                    [PRODUCT_PROVIDER_CLASS] => CCatalogProductProvider
                    [CALLBACK_FUNC] => 
                    [ORDER_CALLBACK_FUNC] => 
                    [PAY_CALLBACK_FUNC] => 
                    [CANCEL_CALLBACK_FUNC] => 
                    [DIMENSIONS] => a:3:{s:5:"WIDTH";N;s:6:"HEIGHT";N;s:6:"LENGTH";N;}
                    [TYPE] => 
                    [SET_PARENT_ID] => 
                    [DETAIL_PAGE_URL] => /products/posudomoechnaya_mashina_korting_kdi_60110/
                    [FUSER_ID] => 477110
                    [MEASURE_CODE] => 796
                    [MEASURE_NAME] => шт
                    [ORDER_ID] => 
                    [DATE_INSERT] => Bitrix\Main\Type\DateTime Object
                        (
                            [value:protected] => DateTime Object
                                (
                                    [date] => 2025-02-12 15:04:24.000000
                                    [timezone_type] => 3
                                    [timezone] => Asia/Yekaterinburg
                                )

                            [userTimeEnabled:protected] => 1
                        )

                    [DATE_UPDATE] => Bitrix\Main\Type\DateTime Object
                        (
                            [value:protected] => DateTime Object
                                (
                                    [date] => 2025-02-12 15:43:46.000000
                                    [timezone_type] => 3
                                    [timezone] => Asia/Yekaterinburg
                                )

                            [userTimeEnabled:protected] => 1
                        )

                    [PRODUCT_XML_ID] => faa156ed-b201-11ea-ab90-00259087b6a3#faa156ed-b201-11ea-ab90-00259087b6a3
                    [SUBSCRIBE] => N
                    [RECOMMENDATION] => 
                    [VAT_INCLUDED] => N
                    [SORT] => 200
                    [DATE_REFRESH] => 
                    [DISCOUNT_NAME] => 
                    [DISCOUNT_VALUE] => 
                    [DISCOUNT_COUPON] => 
                    [XML_ID] => bx_67ac72281ccad
                    [MARKING_CODE_GROUP] => 
                    [PRICE_FORMATED] => 33 774 ₽
                    [WEIGHT_FORMATED] => 0 кг
                    [DISCOUNT_PRICE_PERCENT] => 0
                    [DISCOUNT_PRICE_PERCENT_FORMATED] => 0%
                    [BASE_PRICE_FORMATED] => 33 774 ₽
                    [PROPS] => Array
                        (
                        )

                    [SUM_NUM] => 33774
                    [SUM] => 33 774 ₽
                    [SUM_BASE] => 33774
                    [SUM_BASE_FORMATED] => 33 774 ₽
                    [CATALOG_QUANTITY] => 2
                    [PREVIEW_PICTURE] => 2955128
                    [DETAIL_PICTURE] => 2955129
                    [PROPERTY_COLOR_REF_VALUE] => b9dbf6ee-e7f0-11e8-9f77-00155d00c800
                    [PROPERTY_COLOR_REF_VALUE_ID] => 574105864
                    [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE] => 100
                    [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE_ID] => 575311822
                    [PROPERTY_CML2_MANUFACTURER_VALUE] => Korting
                    [PROPERTY_CML2_MANUFACTURER_VALUE_ID] => 
                    [PROPERTY_CML2_MANUFACTURER_ENUM_ID] => 
                    [PROPERTY_KATEGORIYA_TOVARA_VALUE] => 
                    [PROPERTY_KATEGORIYA_TOVARA_VALUE_ID] => 
                    [PROPERTY_KATEGORIYA_TOVARA_ENUM_ID] => 
                    [PROPERTY_CML2_ARTICLE_VALUE] => KDI 60110
                    [PROPERTY_CML2_ARTICLE_VALUE_ID] => 
                    [PROPERTY_TIP_USTANOVKI_VALUE] => Встраиваемый
                    [PROPERTY_TIP_USTANOVKI_VALUE_ID] => 575311811
                    [PROPERTY_TIP_USTANOVKI_ENUM_ID] => 126502
                    [PREVIEW_PICTURE_SRC] => /upload/resize_cache/iblock/efe/160_160_1/qem0epksq1zsz5ad01ub8k81fjckdaf0.jpg
                    [PREVIEW_PICTURE_SRC_2X] => /upload/resize_cache/iblock/efe/320_320_1/qem0epksq1zsz5ad01ub8k81fjckdaf0.jpg
                    [PREVIEW_PICTURE_SRC_ORIGINAL] => /upload/iblock/efe/qem0epksq1zsz5ad01ub8k81fjckdaf0.jpg
                    [DETAIL_PICTURE_SRC] => /upload/resize_cache/iblock/d87/160_160_1/yz1ud2gl05as86o9ptj1wk6ae10pxgov.jpg
                    [DETAIL_PICTURE_SRC_2X] => /upload/resize_cache/iblock/d87/320_320_1/yz1ud2gl05as86o9ptj1wk6ae10pxgov.jpg
                    [DETAIL_PICTURE_SRC_ORIGINAL] => /upload/iblock/d87/yz1ud2gl05as86o9ptj1wk6ae10pxgov.jpg
                    [MEASURE_TEXT] => шт
                    [MEASURE] => 796
                )

            [1] => Array
                (
                    [ID] => 153267
                    [LID] => s1
                    [MODULE] => catalog
                    [PRODUCT_ID] => 178116
                    [QUANTITY] => 1
                    [WEIGHT] => 0.00
                    [DELAY] => N
                    [CAN_BUY] => Y
                    [PRICE] => 183104
                    [CUSTOM_PRICE] => N
                    [BASE_PRICE] => 183104
                    [PRODUCT_PRICE_ID] => 32292141
                    [PRICE_TYPE_ID] => 3
                    [CURRENCY] => RUB
                    [BARCODE_MULTI] => N
                    [RESERVED] => N
                    [RESERVE_QUANTITY] => 
                    [NAME] => Электрический духовой шкаф Elica VIRTUS MULTI 90 TFT (PRF0191768)
                    [CATALOG_XML_ID] => catalog-3bf1763a-cc10-4dd0-86c5-23886628db66#
                    [VAT_RATE] => 0
                    [NOTES] => Ваша цена
                    [DISCOUNT_PRICE] => 0
                    [PRODUCT_PROVIDER_CLASS] => CCatalogProductProvider
                    [CALLBACK_FUNC] => 
                    [ORDER_CALLBACK_FUNC] => 
                    [PAY_CALLBACK_FUNC] => 
                    [CANCEL_CALLBACK_FUNC] => 
                    [DIMENSIONS] => a:3:{s:5:"WIDTH";N;s:6:"HEIGHT";N;s:6:"LENGTH";N;}
                    [TYPE] => 
                    [SET_PARENT_ID] => 
                    [DETAIL_PAGE_URL] => /products/elektricheskiy_dukhovoy_shkaf_elica_virtus_multi_90_tft/
                    [FUSER_ID] => 477110
                    [MEASURE_CODE] => 796
                    [MEASURE_NAME] => шт
                    [ORDER_ID] => 
                    [DATE_INSERT] => Bitrix\Main\Type\DateTime Object
                        (
                            [value:protected] => DateTime Object
                                (
                                    [date] => 2025-02-10 09:25:52.000000
                                    [timezone_type] => 3
                                    [timezone] => Asia/Yekaterinburg
                                )

                            [userTimeEnabled:protected] => 1
                        )

                    [DATE_UPDATE] => Bitrix\Main\Type\DateTime Object
                        (
                            [value:protected] => DateTime Object
                                (
                                    [date] => 2025-02-12 15:43:46.000000
                                    [timezone_type] => 3
                                    [timezone] => Asia/Yekaterinburg
                                )

                            [userTimeEnabled:protected] => 1
                        )

                    [PRODUCT_XML_ID] => 56e990ec-94f4-11ee-ac5d-00259087b6a3#56e990ec-94f4-11ee-ac5d-00259087b6a3
                    [SUBSCRIBE] => N
                    [RECOMMENDATION] => 
                    [VAT_INCLUDED] => N
                    [SORT] => 300
                    [DATE_REFRESH] => 
                    [DISCOUNT_NAME] => 
                    [DISCOUNT_VALUE] => 
                    [DISCOUNT_COUPON] => 
                    [XML_ID] => bx_67a97fd01be74
                    [MARKING_CODE_GROUP] => 
                    [PRICE_FORMATED] => 183 104 ₽
                    [WEIGHT_FORMATED] => 0 кг
                    [DISCOUNT_PRICE_PERCENT] => 0
                    [DISCOUNT_PRICE_PERCENT_FORMATED] => 0%
                    [BASE_PRICE_FORMATED] => 183 104 ₽
                    [PROPS] => Array
                        (
                        )

                    [SUM_NUM] => 183104
                    [SUM] => 183 104 ₽
                    [SUM_BASE] => 183104
                    [SUM_BASE_FORMATED] => 183 104 ₽
                    [CATALOG_QUANTITY] => 0
                    [PREVIEW_PICTURE] => 3021175
                    [DETAIL_PICTURE] => 3021176
                    [PROPERTY_COLOR_REF_VALUE] => 179c5585-e25d-11e8-86eb-00155d00c800
                    [PROPERTY_COLOR_REF_VALUE_ID] => 570453537
                    [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE] => 7
                    [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE_ID] => 575405890
                    [PROPERTY_CML2_MANUFACTURER_VALUE] => Elica
                    [PROPERTY_CML2_ARTICLE_VALUE] => PRF0191768
                    [PREVIEW_PICTURE_SRC] => /upload/resize_cache/iblock/ba3/160_160_1/sz5uzxbbnk38ay48xr1ylsyp7uzouyqk.jpg
                    [PREVIEW_PICTURE_SRC_2X] => /upload/resize_cache/iblock/ba3/320_320_1/sz5uzxbbnk38ay48xr1ylsyp7uzouyqk.jpg
                    [PREVIEW_PICTURE_SRC_ORIGINAL] => /upload/iblock/ba3/sz5uzxbbnk38ay48xr1ylsyp7uzouyqk.jpg
                    [DETAIL_PICTURE_SRC] => /upload/resize_cache/iblock/d38/160_160_1/sme3uw6qz792hyb2dwmu0spisf5d925y.jpg
                    [DETAIL_PICTURE_SRC_2X] => /upload/resize_cache/iblock/d38/320_320_1/sme3uw6qz792hyb2dwmu0spisf5d925y.jpg
                    [DETAIL_PICTURE_SRC_ORIGINAL] => /upload/iblock/d38/sme3uw6qz792hyb2dwmu0spisf5d925y.jpg
                    [MEASURE_TEXT] => шт
                    [MEASURE] => 796
                )

            [2] => Array
                (
                    [ID] => 153268
                    [LID] => s1
                    [MODULE] => catalog
                    [PRODUCT_ID] => 178115
                    [QUANTITY] => 1
                    [WEIGHT] => 0.00
                    [DELAY] => N
                    [CAN_BUY] => Y
                    [PRICE] => 137326
                    [CUSTOM_PRICE] => N
                    [BASE_PRICE] => 137326
                    [PRODUCT_PRICE_ID] => 32292143
                    [PRICE_TYPE_ID] => 3
                    [CURRENCY] => RUB
                    [BARCODE_MULTI] => N
                    [RESERVED] => N
                    [RESERVE_QUANTITY] => 
                    [NAME] => Электрический духовой шкаф Elica VIRTUS MULTI 60 TFT (PRF0191770)
                    [CATALOG_XML_ID] => catalog-3bf1763a-cc10-4dd0-86c5-23886628db66#
                    [VAT_RATE] => 0
                    [NOTES] => Ваша цена
                    [DISCOUNT_PRICE] => 0
                    [PRODUCT_PROVIDER_CLASS] => CCatalogProductProvider
                    [CALLBACK_FUNC] => 
                    [ORDER_CALLBACK_FUNC] => 
                    [PAY_CALLBACK_FUNC] => 
                    [CANCEL_CALLBACK_FUNC] => 
                    [DIMENSIONS] => a:3:{s:5:"WIDTH";N;s:6:"HEIGHT";N;s:6:"LENGTH";N;}
                    [TYPE] => 
                    [SET_PARENT_ID] => 
                    [DETAIL_PAGE_URL] => /products/elektricheskiy_dukhovoy_shkaf_elica_virtus_multi_60_tft/
                    [FUSER_ID] => 477110
                    [MEASURE_CODE] => 796
                    [MEASURE_NAME] => шт
                    [ORDER_ID] => 
                    [DATE_INSERT] => Bitrix\Main\Type\DateTime Object
                        (
                            [value:protected] => DateTime Object
                                (
                                    [date] => 2025-02-10 09:26:05.000000
                                    [timezone_type] => 3
                                    [timezone] => Asia/Yekaterinburg
                                )

                            [userTimeEnabled:protected] => 1
                        )

                    [DATE_UPDATE] => Bitrix\Main\Type\DateTime Object
                        (
                            [value:protected] => DateTime Object
                                (
                                    [date] => 2025-02-10 09:33:41.000000
                                    [timezone_type] => 3
                                    [timezone] => Asia/Yekaterinburg
                                )

                            [userTimeEnabled:protected] => 1
                        )

                    [PRODUCT_XML_ID] => 0d965381-94fb-11ee-ac5d-00259087b6a3#0d965381-94fb-11ee-ac5d-00259087b6a3
                    [SUBSCRIBE] => N
                    [RECOMMENDATION] => 
                    [VAT_INCLUDED] => N
                    [SORT] => 400
                    [DATE_REFRESH] => 
                    [DISCOUNT_NAME] => 
                    [DISCOUNT_VALUE] => 
                    [DISCOUNT_COUPON] => 
                    [XML_ID] => bx_67a97fdd506a9
                    [MARKING_CODE_GROUP] => 
                    [PRICE_FORMATED] => 137 326 ₽
                    [WEIGHT_FORMATED] => 0 кг
                    [DISCOUNT_PRICE_PERCENT] => 0
                    [DISCOUNT_PRICE_PERCENT_FORMATED] => 0%
                    [BASE_PRICE_FORMATED] => 137 326 ₽
                    [PROPS] => Array
                        (
                        )

                    [SUM_NUM] => 137326
                    [SUM] => 137 326 ₽
                    [SUM_BASE] => 137326
                    [SUM_BASE_FORMATED] => 137 326 ₽
                    [CATALOG_QUANTITY] => 0
                    [PREVIEW_PICTURE] => 3021169
                    [DETAIL_PICTURE] => 3021170
                    [PROPERTY_COLOR_REF_VALUE] => 179c5585-e25d-11e8-86eb-00155d00c800
                    [PROPERTY_COLOR_REF_VALUE_ID] => 570453508
                    [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE] => 5
                    [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE_ID] => 575405864
                    [PROPERTY_CML2_MANUFACTURER_VALUE] => Elica
                    [PROPERTY_CML2_ARTICLE_VALUE] => PRF0191770
                    [PREVIEW_PICTURE_SRC] => /upload/resize_cache/iblock/5fd/160_160_1/zwaj2s32jht3qytbb4myur9g9jtd0jr0.jpg
                    [PREVIEW_PICTURE_SRC_2X] => /upload/resize_cache/iblock/5fd/320_320_1/zwaj2s32jht3qytbb4myur9g9jtd0jr0.jpg
                    [PREVIEW_PICTURE_SRC_ORIGINAL] => /upload/iblock/5fd/zwaj2s32jht3qytbb4myur9g9jtd0jr0.jpg
                    [DETAIL_PICTURE_SRC] => /upload/resize_cache/iblock/2ae/160_160_1/rp6sycqs1n21hctp9m3ji0aqovrvlwio.jpg
                    [DETAIL_PICTURE_SRC_2X] => /upload/resize_cache/iblock/2ae/320_320_1/rp6sycqs1n21hctp9m3ji0aqovrvlwio.jpg
                    [DETAIL_PICTURE_SRC_ORIGINAL] => /upload/iblock/2ae/rp6sycqs1n21hctp9m3ji0aqovrvlwio.jpg
                    [MEASURE_TEXT] => шт
                    [MEASURE] => 796
                )

            [3] => Array
                (
                    [ID] => 153269
                    [LID] => s1
                    [MODULE] => catalog
                    [PRODUCT_ID] => 178114
                    [QUANTITY] => 1
                    [WEIGHT] => 0.00
                    [DELAY] => N
                    [CAN_BUY] => Y
                    [PRICE] => 106808
                    [CUSTOM_PRICE] => N
                    [BASE_PRICE] => 106808
                    [PRODUCT_PRICE_ID] => 32292153
                    [PRICE_TYPE_ID] => 3
                    [CURRENCY] => RUB
                    [BARCODE_MULTI] => N
                    [RESERVED] => N
                    [RESERVE_QUANTITY] => 
                    [NAME] => Электрический духовой шкаф Elica VIRTUS MULTI 60 DD (PRF0191771)
                    [CATALOG_XML_ID] => catalog-3bf1763a-cc10-4dd0-86c5-23886628db66#
                    [VAT_RATE] => 0
                    [NOTES] => Ваша цена
                    [DISCOUNT_PRICE] => 0
                    [PRODUCT_PROVIDER_CLASS] => CCatalogProductProvider
                    [CALLBACK_FUNC] => 
                    [ORDER_CALLBACK_FUNC] => 
                    [PAY_CALLBACK_FUNC] => 
                    [CANCEL_CALLBACK_FUNC] => 
                    [DIMENSIONS] => a:3:{s:5:"WIDTH";N;s:6:"HEIGHT";N;s:6:"LENGTH";N;}
                    [TYPE] => 
                    [SET_PARENT_ID] => 
                    [DETAIL_PAGE_URL] => /products/elektricheskiy_dukhovoy_shkaf_elica_virtus_multi_60_dd/
                    [FUSER_ID] => 477110
                    [MEASURE_CODE] => 796
                    [MEASURE_NAME] => шт
                    [ORDER_ID] => 
                    [DATE_INSERT] => Bitrix\Main\Type\DateTime Object
                        (
                            [value:protected] => DateTime Object
                                (
                                    [date] => 2025-02-10 09:26:24.000000
                                    [timezone_type] => 3
                                    [timezone] => Asia/Yekaterinburg
                                )

                            [userTimeEnabled:protected] => 1
                        )

                    [DATE_UPDATE] => Bitrix\Main\Type\DateTime Object
                        (
                            [value:protected] => DateTime Object
                                (
                                    [date] => 2025-02-10 09:33:41.000000
                                    [timezone_type] => 3
                                    [timezone] => Asia/Yekaterinburg
                                )

                            [userTimeEnabled:protected] => 1
                        )

                    [PRODUCT_XML_ID] => 34d79bf1-94fb-11ee-ac5d-00259087b6a3#34d79bf1-94fb-11ee-ac5d-00259087b6a3
                    [SUBSCRIBE] => N
                    [RECOMMENDATION] => 
                    [VAT_INCLUDED] => N
                    [SORT] => 500
                    [DATE_REFRESH] => 
                    [DISCOUNT_NAME] => 
                    [DISCOUNT_VALUE] => 
                    [DISCOUNT_COUPON] => 
                    [XML_ID] => bx_67a97ff0a5c77
                    [MARKING_CODE_GROUP] => 
                    [PRICE_FORMATED] => 106 808 ₽
                    [WEIGHT_FORMATED] => 0 кг
                    [DISCOUNT_PRICE_PERCENT] => 0
                    [DISCOUNT_PRICE_PERCENT_FORMATED] => 0%
                    [BASE_PRICE_FORMATED] => 106 808 ₽
                    [PROPS] => Array
                        (
                        )

                    [SUM_NUM] => 106808
                    [SUM] => 106 808 ₽
                    [SUM_BASE] => 106808
                    [SUM_BASE_FORMATED] => 106 808 ₽
                    [CATALOG_QUANTITY] => 1
                    [PREVIEW_PICTURE] => 3021160
                    [DETAIL_PICTURE] => 3021161
                    [PROPERTY_COLOR_REF_VALUE] => 179c5585-e25d-11e8-86eb-00155d00c800
                    [PROPERTY_COLOR_REF_VALUE_ID] => 570453475
                    [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE] => 7
                    [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE_ID] => 575405835
                    [PROPERTY_CML2_MANUFACTURER_VALUE] => Elica
                    [PROPERTY_CML2_ARTICLE_VALUE] => PRF0191771
                    [PREVIEW_PICTURE_SRC] => /upload/resize_cache/iblock/47b/160_160_1/317fgi83ms1a69u91m2f1cz9w4el4vt9.jpg
                    [PREVIEW_PICTURE_SRC_2X] => /upload/resize_cache/iblock/47b/320_320_1/317fgi83ms1a69u91m2f1cz9w4el4vt9.jpg
                    [PREVIEW_PICTURE_SRC_ORIGINAL] => /upload/iblock/47b/317fgi83ms1a69u91m2f1cz9w4el4vt9.jpg
                    [DETAIL_PICTURE_SRC] => /upload/resize_cache/iblock/41a/160_160_1/s29ks4k2ao2b8wjm076wzfl406c702mr.jpg
                    [DETAIL_PICTURE_SRC_2X] => /upload/resize_cache/iblock/41a/320_320_1/s29ks4k2ao2b8wjm076wzfl406c702mr.jpg
                    [DETAIL_PICTURE_SRC_ORIGINAL] => /upload/iblock/41a/s29ks4k2ao2b8wjm076wzfl406c702mr.jpg
                    [MEASURE_TEXT] => шт
                    [MEASURE] => 796
                )

            [4] => Array
                (
                    [ID] => 152196
                    [LID] => s1
                    [MODULE] => catalog
                    [PRODUCT_ID] => 135772
                    [QUANTITY] => 3
                    [WEIGHT] => 25000.00
                    [DELAY] => N
                    [CAN_BUY] => Y
                    [PRICE] => 24320
                    [CUSTOM_PRICE] => N
                    [BASE_PRICE] => 24320
                    [PRODUCT_PRICE_ID] => 30784038
                    [PRICE_TYPE_ID] => 3
                    [CURRENCY] => RUB
                    [BARCODE_MULTI] => N
                    [RESERVED] => N
                    [RESERVE_QUANTITY] => 
                    [NAME] => Электрический духовой шкаф Lex EDM 4575 GR (CHAO000438)
                    [CATALOG_XML_ID] => catalog-3bf1763a-cc10-4dd0-86c5-23886628db66#
                    [VAT_RATE] => 0
                    [NOTES] => Ваша цена
                    [DISCOUNT_PRICE] => 0
                    [PRODUCT_PROVIDER_CLASS] => CCatalogProductProvider
                    [CALLBACK_FUNC] => 
                    [ORDER_CALLBACK_FUNC] => 
                    [PAY_CALLBACK_FUNC] => 
                    [CANCEL_CALLBACK_FUNC] => 
                    [DIMENSIONS] => a:3:{s:5:"WIDTH";N;s:6:"HEIGHT";N;s:6:"LENGTH";N;}
                    [TYPE] => 
                    [SET_PARENT_ID] => 
                    [DETAIL_PAGE_URL] => /products/dukhovoy_shkaf_lex_edp_4571_bl/
                    [FUSER_ID] => 477110
                    [MEASURE_CODE] => 796
                    [MEASURE_NAME] => шт
                    [ORDER_ID] => 
                    [DATE_INSERT] => Bitrix\Main\Type\DateTime Object
                        (
                            [value:protected] => DateTime Object
                                (
                                    [date] => 2025-02-05 22:42:38.000000
                                    [timezone_type] => 3
                                    [timezone] => Asia/Yekaterinburg
                                )

                            [userTimeEnabled:protected] => 1
                        )

                    [DATE_UPDATE] => Bitrix\Main\Type\DateTime Object
                        (
                            [value:protected] => DateTime Object
                                (
                                    [date] => 2025-02-12 16:26:24.000000
                                    [timezone_type] => 3
                                    [timezone] => Asia/Yekaterinburg
                                )

                            [userTimeEnabled:protected] => 1
                        )

                    [PRODUCT_XML_ID] => d7d8dad5-e25f-11e8-86eb-00155d00c800#d7d8dad5-e25f-11e8-86eb-00155d00c800
                    [SUBSCRIBE] => N
                    [RECOMMENDATION] => 
                    [VAT_INCLUDED] => N
                    [SORT] => 2700
                    [DATE_REFRESH] => 
                    [DISCOUNT_NAME] => 
                    [DISCOUNT_VALUE] => 
                    [DISCOUNT_COUPON] => 
                    [XML_ID] => bx_67a3a30e1b711
                    [MARKING_CODE_GROUP] => 
                    [PRICE_FORMATED] => 24 320 ₽
                    [WEIGHT_FORMATED] => 25 кг
                    [DISCOUNT_PRICE_PERCENT] => 0
                    [DISCOUNT_PRICE_PERCENT_FORMATED] => 0%
                    [BASE_PRICE_FORMATED] => 24 320 ₽
                    [PROPS] => Array
                        (
                        )

                    [SUM_NUM] => 72960
                    [SUM] => 72 960 ₽
                    [SUM_BASE] => 72960
                    [SUM_BASE_FORMATED] => 72 960 ₽
                    [CATALOG_QUANTITY] => 2
                    [PREVIEW_PICTURE] => 3058048
                    [DETAIL_PICTURE] => 3058049
                    [PROPERTY_COLOR_REF_VALUE] => 5faccf5a-e7ef-11e8-9f77-00155d00c800
                    [PROPERTY_COLOR_REF_VALUE_ID] => 574776716
                    [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE] => 20
                    [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE_ID] => 575359417
                    [PROPERTY_CML2_MANUFACTURER_VALUE] => Lex
                    [PROPERTY_CML2_ARTICLE_VALUE] => CHAO000438
                    [PREVIEW_PICTURE_SRC] => /upload/resize_cache/iblock/f94/160_160_1/ea3izipp3c1qinbe132h777wbxwcjaam.jpg
                    [PREVIEW_PICTURE_SRC_2X] => /upload/resize_cache/iblock/f94/320_320_1/ea3izipp3c1qinbe132h777wbxwcjaam.jpg
                    [PREVIEW_PICTURE_SRC_ORIGINAL] => /upload/iblock/f94/ea3izipp3c1qinbe132h777wbxwcjaam.jpg
                    [DETAIL_PICTURE_SRC] => /upload/resize_cache/iblock/197/160_160_1/f91jxkqgxyrm4huie78t1mmgcr6k19ar.jpg
                    [DETAIL_PICTURE_SRC_2X] => /upload/resize_cache/iblock/197/320_320_1/f91jxkqgxyrm4huie78t1mmgcr6k19ar.jpg
                    [DETAIL_PICTURE_SRC_ORIGINAL] => /upload/iblock/197/f91jxkqgxyrm4huie78t1mmgcr6k19ar.jpg
                    [MEASURE_TEXT] => шт
                    [MEASURE] => 796
                )

            [5] => Array
                (
                    [ID] => 153446
                    [LID] => s1
                    [MODULE] => catalog
                    [PRODUCT_ID] => 145706
                    [QUANTITY] => 1
                    [WEIGHT] => 0.00
                    [DELAY] => N
                    [CAN_BUY] => Y
                    [PRICE] => 3562
                    [CUSTOM_PRICE] => N
                    [BASE_PRICE] => 3562
                    [PRODUCT_PRICE_ID] => 30797061
                    [PRICE_TYPE_ID] => 3
                    [CURRENCY] => RUB
                    [BARCODE_MULTI] => N
                    [RESERVED] => N
                    [RESERVE_QUANTITY] => 
                    [NAME] => Мойка для кухни Dr. Gans Smart ОЛИВИЯ-420 (25.150.B0420.401)
                    [CATALOG_XML_ID] => catalog-3bf1763a-cc10-4dd0-86c5-23886628db66#
                    [VAT_RATE] => 0
                    [NOTES] => Ваша цена
                    [DISCOUNT_PRICE] => 0
                    [PRODUCT_PROVIDER_CLASS] => CCatalogProductProvider
                    [CALLBACK_FUNC] => 
                    [ORDER_CALLBACK_FUNC] => 
                    [PAY_CALLBACK_FUNC] => 
                    [CANCEL_CALLBACK_FUNC] => 
                    [DIMENSIONS] => a:3:{s:5:"WIDTH";N;s:6:"HEIGHT";N;s:6:"LENGTH";N;}
                    [TYPE] => 
                    [SET_PARENT_ID] => 
                    [DETAIL_PAGE_URL] => /products/moyka_dlya_kukhni_dr_gans_smart_oliviya_420/
                    [FUSER_ID] => 477110
                    [MEASURE_CODE] => 796
                    [MEASURE_NAME] => шт
                    [ORDER_ID] => 
                    [DATE_INSERT] => Bitrix\Main\Type\DateTime Object
                        (
                            [value:protected] => DateTime Object
                                (
                                    [date] => 2025-02-10 17:36:36.000000
                                    [timezone_type] => 3
                                    [timezone] => Asia/Yekaterinburg
                                )

                            [userTimeEnabled:protected] => 1
                        )

                    [DATE_UPDATE] => Bitrix\Main\Type\DateTime Object
                        (
                            [value:protected] => DateTime Object
                                (
                                    [date] => 2025-02-10 17:36:36.000000
                                    [timezone_type] => 3
                                    [timezone] => Asia/Yekaterinburg
                                )

                            [userTimeEnabled:protected] => 1
                        )

                    [PRODUCT_XML_ID] => 0fe66eae-004d-11ea-ab6d-00259087b6a3#0fe66eae-004d-11ea-ab6d-00259087b6a3
                    [SUBSCRIBE] => N
                    [RECOMMENDATION] => 
                    [VAT_INCLUDED] => N
                    [SORT] => 2800
                    [DATE_REFRESH] => 
                    [DISCOUNT_NAME] => 
                    [DISCOUNT_VALUE] => 
                    [DISCOUNT_COUPON] => 
                    [XML_ID] => bx_67a9f2d4b41f0
                    [MARKING_CODE_GROUP] => 
                    [PRICE_FORMATED] => 3 562 ₽
                    [WEIGHT_FORMATED] => 0 кг
                    [DISCOUNT_PRICE_PERCENT] => 0
                    [DISCOUNT_PRICE_PERCENT_FORMATED] => 0%
                    [BASE_PRICE_FORMATED] => 3 562 ₽
                    [PROPS] => Array
                        (
                        )

                    [SUM_NUM] => 3562
                    [SUM] => 3 562 ₽
                    [SUM_BASE] => 3562
                    [SUM_BASE_FORMATED] => 3 562 ₽
                    [CATALOG_QUANTITY] => 2
                    [PREVIEW_PICTURE] => 2590792
                    [DETAIL_PICTURE] => 2590793
                    [PROPERTY_COLOR_REF_VALUE] => 0bdd0e62-e1c6-11e8-86eb-00155d00c800
                    [PROPERTY_COLOR_REF_VALUE_ID] => 570595131
                    [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE] => 1
                    [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE_ID] => 575335685
                    [PROPERTY_CML2_MANUFACTURER_VALUE] => Dr. Gans Smart
                    [PROPERTY_CML2_ARTICLE_VALUE] => 25.150.B0420.401
                    [PREVIEW_PICTURE_SRC] => /upload/resize_cache/iblock/5f4/160_160_1/6e3b9gbylkut53aijaxnmksagmxsy4e8.jpg
                    [PREVIEW_PICTURE_SRC_2X] => /upload/resize_cache/iblock/5f4/320_320_1/6e3b9gbylkut53aijaxnmksagmxsy4e8.jpg
                    [PREVIEW_PICTURE_SRC_ORIGINAL] => /upload/iblock/5f4/6e3b9gbylkut53aijaxnmksagmxsy4e8.jpg
                    [DETAIL_PICTURE_SRC] => /upload/resize_cache/iblock/601/160_160_1/eytwvuh6paf6y8yn1u0nfci8xmv7dmhs.jpg
                    [DETAIL_PICTURE_SRC_2X] => /upload/resize_cache/iblock/601/320_320_1/eytwvuh6paf6y8yn1u0nfci8xmv7dmhs.jpg
                    [DETAIL_PICTURE_SRC_ORIGINAL] => /upload/iblock/601/eytwvuh6paf6y8yn1u0nfci8xmv7dmhs.jpg
                    [MEASURE_TEXT] => шт
                    [MEASURE] => 796
                )

            [6] => Array
                (
                    [ID] => 153447
                    [LID] => s1
                    [MODULE] => catalog
                    [PRODUCT_ID] => 145713
                    [QUANTITY] => 1
                    [WEIGHT] => 0.00
                    [DELAY] => N
                    [CAN_BUY] => Y
                    [PRICE] => 4954
                    [CUSTOM_PRICE] => N
                    [BASE_PRICE] => 4954
                    [PRODUCT_PRICE_ID] => 30797097
                    [PRICE_TYPE_ID] => 3
                    [CURRENCY] => RUB
                    [BARCODE_MULTI] => N
                    [RESERVED] => N
                    [RESERVE_QUANTITY] => 
                    [NAME] => Мойка для кухни Dr. Gans Smart ОЛИВИЯ-620 (25.150.B0620.401)
                    [CATALOG_XML_ID] => catalog-3bf1763a-cc10-4dd0-86c5-23886628db66#
                    [VAT_RATE] => 0
                    [NOTES] => Ваша цена
                    [DISCOUNT_PRICE] => 0
                    [PRODUCT_PROVIDER_CLASS] => CCatalogProductProvider
                    [CALLBACK_FUNC] => 
                    [ORDER_CALLBACK_FUNC] => 
                    [PAY_CALLBACK_FUNC] => 
                    [CANCEL_CALLBACK_FUNC] => 
                    [DIMENSIONS] => a:3:{s:5:"WIDTH";N;s:6:"HEIGHT";N;s:6:"LENGTH";N;}
                    [TYPE] => 
                    [SET_PARENT_ID] => 
                    [DETAIL_PAGE_URL] => /products/moyka_dlya_kukhni_dr_gans_smart_oliviya_620/
                    [FUSER_ID] => 477110
                    [MEASURE_CODE] => 796
                    [MEASURE_NAME] => шт
                    [ORDER_ID] => 
                    [DATE_INSERT] => Bitrix\Main\Type\DateTime Object
                        (
                            [value:protected] => DateTime Object
                                (
                                    [date] => 2025-02-10 17:36:37.000000
                                    [timezone_type] => 3
                                    [timezone] => Asia/Yekaterinburg
                                )

                            [userTimeEnabled:protected] => 1
                        )

                    [DATE_UPDATE] => Bitrix\Main\Type\DateTime Object
                        (
                            [value:protected] => DateTime Object
                                (
                                    [date] => 2025-02-10 17:36:37.000000
                                    [timezone_type] => 3
                                    [timezone] => Asia/Yekaterinburg
                                )

                            [userTimeEnabled:protected] => 1
                        )

                    [PRODUCT_XML_ID] => fa4c4057-004d-11ea-ab6d-00259087b6a3#fa4c4057-004d-11ea-ab6d-00259087b6a3
                    [SUBSCRIBE] => N
                    [RECOMMENDATION] => 
                    [VAT_INCLUDED] => N
                    [SORT] => 2900
                    [DATE_REFRESH] => 
                    [DISCOUNT_NAME] => 
                    [DISCOUNT_VALUE] => 
                    [DISCOUNT_COUPON] => 
                    [XML_ID] => bx_67a9f2d5d566e
                    [MARKING_CODE_GROUP] => 
                    [PRICE_FORMATED] => 4 954 ₽
                    [WEIGHT_FORMATED] => 0 кг
                    [DISCOUNT_PRICE_PERCENT] => 0
                    [DISCOUNT_PRICE_PERCENT_FORMATED] => 0%
                    [BASE_PRICE_FORMATED] => 4 954 ₽
                    [PROPS] => Array
                        (
                        )

                    [SUM_NUM] => 4954
                    [SUM] => 4 954 ₽
                    [SUM_BASE] => 4954
                    [SUM_BASE_FORMATED] => 4 954 ₽
                    [CATALOG_QUANTITY] => 1
                    [PREVIEW_PICTURE] => 2590827
                    [DETAIL_PICTURE] => 2590828
                    [PROPERTY_COLOR_REF_VALUE] => 0bdd0e62-e1c6-11e8-86eb-00155d00c800
                    [PROPERTY_COLOR_REF_VALUE_ID] => 570340452
                    [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE] => 1
                    [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE_ID] => 575335762
                    [PROPERTY_CML2_MANUFACTURER_VALUE] => Dr. Gans Smart
                    [PROPERTY_CML2_ARTICLE_VALUE] => 25.150.B0620.401
                    [PREVIEW_PICTURE_SRC] => /upload/resize_cache/iblock/e22/160_160_1/rbd6w4urb922l5l88iihq0j2uw51th01.jpg
                    [PREVIEW_PICTURE_SRC_2X] => /upload/resize_cache/iblock/e22/320_320_1/rbd6w4urb922l5l88iihq0j2uw51th01.jpg
                    [PREVIEW_PICTURE_SRC_ORIGINAL] => /upload/iblock/e22/rbd6w4urb922l5l88iihq0j2uw51th01.jpg
                    [DETAIL_PICTURE_SRC] => /upload/resize_cache/iblock/d68/160_160_1/hx85974pbbhz5hk1vzm5e80kt74hy94h.jpg
                    [DETAIL_PICTURE_SRC_2X] => /upload/resize_cache/iblock/d68/320_320_1/hx85974pbbhz5hk1vzm5e80kt74hy94h.jpg
                    [DETAIL_PICTURE_SRC_ORIGINAL] => /upload/iblock/d68/hx85974pbbhz5hk1vzm5e80kt74hy94h.jpg
                    [MEASURE_TEXT] => шт
                    [MEASURE] => 796
                )

            [7] => Array
                (
                    [ID] => 153450
                    [LID] => s1
                    [MODULE] => catalog
                    [PRODUCT_ID] => 174528
                    [QUANTITY] => 1
                    [WEIGHT] => 0.00
                    [DELAY] => N
                    [CAN_BUY] => Y
                    [PRICE] => 47761
                    [CUSTOM_PRICE] => N
                    [BASE_PRICE] => 47761
                    [PRODUCT_PRICE_ID] => 31377380
                    [PRICE_TYPE_ID] => 3
                    [CURRENCY] => RUB
                    [BARCODE_MULTI] => N
                    [RESERVED] => N
                    [RESERVE_QUANTITY] => 
                    [NAME] => Кухонная вытяжка Kuppersberg DUDL 8 GB (6058)
                    [CATALOG_XML_ID] => catalog-3bf1763a-cc10-4dd0-86c5-23886628db66#
                    [VAT_RATE] => 0
                    [NOTES] => Ваша цена
                    [DISCOUNT_PRICE] => 0
                    [PRODUCT_PROVIDER_CLASS] => CCatalogProductProvider
                    [CALLBACK_FUNC] => 
                    [ORDER_CALLBACK_FUNC] => 
                    [PAY_CALLBACK_FUNC] => 
                    [CANCEL_CALLBACK_FUNC] => 
                    [DIMENSIONS] => a:3:{s:5:"WIDTH";N;s:6:"HEIGHT";N;s:6:"LENGTH";N;}
                    [TYPE] => 
                    [SET_PARENT_ID] => 
                    [DETAIL_PAGE_URL] => /products/kukhonnaya_vytyazhka_kuppersberg_dudl_8_gb/
                    [FUSER_ID] => 477110
                    [MEASURE_CODE] => 796
                    [MEASURE_NAME] => шт
                    [ORDER_ID] => 
                    [DATE_INSERT] => Bitrix\Main\Type\DateTime Object
                        (
                            [value:protected] => DateTime Object
                                (
                                    [date] => 2025-02-10 17:42:11.000000
                                    [timezone_type] => 3
                                    [timezone] => Asia/Yekaterinburg
                                )

                            [userTimeEnabled:protected] => 1
                        )

                    [DATE_UPDATE] => Bitrix\Main\Type\DateTime Object
                        (
                            [value:protected] => DateTime Object
                                (
                                    [date] => 2025-02-12 09:44:21.000000
                                    [timezone_type] => 3
                                    [timezone] => Asia/Yekaterinburg
                                )

                            [userTimeEnabled:protected] => 1
                        )

                    [PRODUCT_XML_ID] => a54ad99e-ddfb-11ea-ab99-00259087b6a3#a54ad99e-ddfb-11ea-ab99-00259087b6a3
                    [SUBSCRIBE] => N
                    [RECOMMENDATION] => 
                    [VAT_INCLUDED] => N
                    [SORT] => 3000
                    [DATE_REFRESH] => 
                    [DISCOUNT_NAME] => 
                    [DISCOUNT_VALUE] => 
                    [DISCOUNT_COUPON] => 
                    [XML_ID] => bx_67a9f423b13ea
                    [MARKING_CODE_GROUP] => 
                    [PRICE_FORMATED] => 47 761 ₽
                    [WEIGHT_FORMATED] => 0 кг
                    [DISCOUNT_PRICE_PERCENT] => 0
                    [DISCOUNT_PRICE_PERCENT_FORMATED] => 0%
                    [BASE_PRICE_FORMATED] => 47 761 ₽
                    [PROPS] => Array
                        (
                        )

                    [SUM_NUM] => 47761
                    [SUM] => 47 761 ₽
                    [SUM_BASE] => 47761
                    [SUM_BASE_FORMATED] => 47 761 ₽
                    [CATALOG_QUANTITY] => 0
                    [PREVIEW_PICTURE] => 2882003
                    [DETAIL_PICTURE] => 2882004
                    [PROPERTY_COLOR_REF_VALUE] => 179c5585-e25d-11e8-86eb-00155d00c800
                    [PROPERTY_COLOR_REF_VALUE_ID] => 570336428
                    [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE] => 10
                    [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE_ID] => 575295916
                    [PROPERTY_CML2_MANUFACTURER_VALUE] => Kuppersberg
                    [PROPERTY_CML2_ARTICLE_VALUE] => 6058
                    [PREVIEW_PICTURE_SRC] => /upload/resize_cache/iblock/70d/160_160_1/ny3rwoy0ed3orwg0rnuancg83hd2dq33.jpg
                    [PREVIEW_PICTURE_SRC_2X] => /upload/resize_cache/iblock/70d/320_320_1/ny3rwoy0ed3orwg0rnuancg83hd2dq33.jpg
                    [PREVIEW_PICTURE_SRC_ORIGINAL] => /upload/iblock/70d/ny3rwoy0ed3orwg0rnuancg83hd2dq33.jpg
                    [DETAIL_PICTURE_SRC] => /upload/resize_cache/iblock/c6c/160_160_1/es3ady5q2ncg6749eiivouhp6gfoy3lz.jpg
                    [DETAIL_PICTURE_SRC_2X] => /upload/resize_cache/iblock/c6c/320_320_1/es3ady5q2ncg6749eiivouhp6gfoy3lz.jpg
                    [DETAIL_PICTURE_SRC_ORIGINAL] => /upload/iblock/c6c/es3ady5q2ncg6749eiivouhp6gfoy3lz.jpg
                    [MEASURE_TEXT] => шт
                    [MEASURE] => 796
                )

            [8] => Array
                (
                    [ID] => 153836
                    [LID] => s1
                    [MODULE] => catalog
                    [PRODUCT_ID] => 137846
                    [QUANTITY] => 1
                    [WEIGHT] => 32000.00
                    [DELAY] => N
                    [CAN_BUY] => Y
                    [PRICE] => 30837
                    [CUSTOM_PRICE] => N
                    [BASE_PRICE] => 30837
                    [PRODUCT_PRICE_ID] => 27855629
                    [PRICE_TYPE_ID] => 3
                    [CURRENCY] => RUB
                    [BARCODE_MULTI] => N
                    [RESERVED] => N
                    [RESERVE_QUANTITY] => 
                    [NAME] => Посудомоечная машина Lex PM 4562 B (CHMI000300)
                    [CATALOG_XML_ID] => catalog-3bf1763a-cc10-4dd0-86c5-23886628db66#
                    [VAT_RATE] => 0
                    [NOTES] => Ваша цена
                    [DISCOUNT_PRICE] => 0
                    [PRODUCT_PROVIDER_CLASS] => CCatalogProductProvider
                    [CALLBACK_FUNC] => 
                    [ORDER_CALLBACK_FUNC] => 
                    [PAY_CALLBACK_FUNC] => 
                    [CANCEL_CALLBACK_FUNC] => 
                    [DIMENSIONS] => a:3:{s:5:"WIDTH";N;s:6:"HEIGHT";N;s:6:"LENGTH";N;}
                    [TYPE] => 
                    [SET_PARENT_ID] => 
                    [DETAIL_PAGE_URL] => /products/posudomoechnaya_mashina_lex_pm_4562_b/
                    [FUSER_ID] => 477110
                    [MEASURE_CODE] => 796
                    [MEASURE_NAME] => шт
                    [ORDER_ID] => 
                    [DATE_INSERT] => Bitrix\Main\Type\DateTime Object
                        (
                            [value:protected] => DateTime Object
                                (
                                    [date] => 2025-02-12 12:55:00.000000
                                    [timezone_type] => 3
                                    [timezone] => Asia/Yekaterinburg
                                )

                            [userTimeEnabled:protected] => 1
                        )

                    [DATE_UPDATE] => Bitrix\Main\Type\DateTime Object
                        (
                            [value:protected] => DateTime Object
                                (
                                    [date] => 2025-02-12 12:55:00.000000
                                    [timezone_type] => 3
                                    [timezone] => Asia/Yekaterinburg
                                )

                            [userTimeEnabled:protected] => 1
                        )

                    [PRODUCT_XML_ID] => 55b299cc-37b9-11ec-abea-00259087b6a3#55b299cc-37b9-11ec-abea-00259087b6a3
                    [SUBSCRIBE] => N
                    [RECOMMENDATION] => 
                    [VAT_INCLUDED] => N
                    [SORT] => 3100
                    [DATE_REFRESH] => 
                    [DISCOUNT_NAME] => 
                    [DISCOUNT_VALUE] => 
                    [DISCOUNT_COUPON] => 
                    [XML_ID] => bx_67ac53d43a61f
                    [MARKING_CODE_GROUP] => 
                    [PRICE_FORMATED] => 30 837 ₽
                    [WEIGHT_FORMATED] => 32 кг
                    [DISCOUNT_PRICE_PERCENT] => 0
                    [DISCOUNT_PRICE_PERCENT_FORMATED] => 0%
                    [BASE_PRICE_FORMATED] => 30 837 ₽
                    [PROPS] => Array
                        (
                        )

                    [SUM_NUM] => 30837
                    [SUM] => 30 837 ₽
                    [SUM_BASE] => 30837
                    [SUM_BASE_FORMATED] => 30 837 ₽
                    [CATALOG_QUANTITY] => 11
                    [PREVIEW_PICTURE] => 2890954
                    [DETAIL_PICTURE] => 2890955
                    [PROPERTY_COLOR_REF_VALUE] => a0429861-e267-11e8-86eb-00155d00c800
                    [PROPERTY_COLOR_REF_VALUE_ID] => 574763348
                    [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE] => 0
                    [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE_ID] => 575398224
                    [PROPERTY_CML2_MANUFACTURER_VALUE] => Lex
                    [PROPERTY_CML2_MANUFACTURER_VALUE_ID] => 
                    [PROPERTY_CML2_MANUFACTURER_ENUM_ID] => 
                    [PROPERTY_KATEGORIYA_TOVARA_VALUE] => 
                    [PROPERTY_KATEGORIYA_TOVARA_VALUE_ID] => 
                    [PROPERTY_KATEGORIYA_TOVARA_ENUM_ID] => 
                    [PROPERTY_CML2_ARTICLE_VALUE] => CHMI000300
                    [PROPERTY_CML2_ARTICLE_VALUE_ID] => 
                    [PROPERTY_TIP_USTANOVKI_VALUE] => Встраиваемый
                    [PROPERTY_TIP_USTANOVKI_VALUE_ID] => 575398214
                    [PROPERTY_TIP_USTANOVKI_ENUM_ID] => 126502
                    [PREVIEW_PICTURE_SRC] => /upload/resize_cache/iblock/af3/160_160_1/x4cuhm6iu8xbwjbfi56v3rihpbnef5ru.jpg
                    [PREVIEW_PICTURE_SRC_2X] => /upload/resize_cache/iblock/af3/320_320_1/x4cuhm6iu8xbwjbfi56v3rihpbnef5ru.jpg
                    [PREVIEW_PICTURE_SRC_ORIGINAL] => /upload/iblock/af3/x4cuhm6iu8xbwjbfi56v3rihpbnef5ru.jpg
                    [DETAIL_PICTURE_SRC] => /upload/resize_cache/iblock/f5d/160_160_1/tx016z1bocfa0rn10e0xuzed53d481jt.jpg
                    [DETAIL_PICTURE_SRC_2X] => /upload/resize_cache/iblock/f5d/320_320_1/tx016z1bocfa0rn10e0xuzed53d481jt.jpg
                    [DETAIL_PICTURE_SRC_ORIGINAL] => /upload/iblock/f5d/tx016z1bocfa0rn10e0xuzed53d481jt.jpg
                    [MEASURE_TEXT] => шт
                    [MEASURE] => 796
                )

            [9] => Array
                (
                    [ID] => 153874
                    [LID] => s1
                    [MODULE] => catalog
                    [PRODUCT_ID] => 145710
                    [QUANTITY] => 2
                    [WEIGHT] => 0.00
                    [DELAY] => N
                    [CAN_BUY] => Y
                    [PRICE] => 3562
                    [CUSTOM_PRICE] => N
                    [BASE_PRICE] => 3562
                    [PRODUCT_PRICE_ID] => 30797081
                    [PRICE_TYPE_ID] => 3
                    [CURRENCY] => RUB
                    [BARCODE_MULTI] => N
                    [RESERVED] => N
                    [RESERVE_QUANTITY] => 
                    [NAME] => Мойка для кухни Dr. Gans Smart ОЛИВИЯ-420 (25.150.B0420.406)
                    [CATALOG_XML_ID] => catalog-3bf1763a-cc10-4dd0-86c5-23886628db66#
                    [VAT_RATE] => 0
                    [NOTES] => Ваша цена
                    [DISCOUNT_PRICE] => 0
                    [PRODUCT_PROVIDER_CLASS] => CCatalogProductProvider
                    [CALLBACK_FUNC] => 
                    [ORDER_CALLBACK_FUNC] => 
                    [PAY_CALLBACK_FUNC] => 
                    [CANCEL_CALLBACK_FUNC] => 
                    [DIMENSIONS] => a:3:{s:5:"WIDTH";N;s:6:"HEIGHT";N;s:6:"LENGTH";N;}
                    [TYPE] => 
                    [SET_PARENT_ID] => 
                    [DETAIL_PAGE_URL] => /products/moyka_dlya_kukhni_dr_gans_smart_oliviya_420/
                    [FUSER_ID] => 477110
                    [MEASURE_CODE] => 796
                    [MEASURE_NAME] => шт
                    [ORDER_ID] => 
                    [DATE_INSERT] => Bitrix\Main\Type\DateTime Object
                        (
                            [value:protected] => DateTime Object
                                (
                                    [date] => 2025-02-12 15:09:43.000000
                                    [timezone_type] => 3
                                    [timezone] => Asia/Yekaterinburg
                                )

                            [userTimeEnabled:protected] => 1
                        )

                    [DATE_UPDATE] => Bitrix\Main\Type\DateTime Object
                        (
                            [value:protected] => DateTime Object
                                (
                                    [date] => 2025-02-12 15:16:28.000000
                                    [timezone_type] => 3
                                    [timezone] => Asia/Yekaterinburg
                                )

                            [userTimeEnabled:protected] => 1
                        )

                    [PRODUCT_XML_ID] => 0fe66eae-004d-11ea-ab6d-00259087b6a3#3c71b6a0-004d-11ea-ab6d-00259087b6a3
                    [SUBSCRIBE] => N
                    [RECOMMENDATION] => 
                    [VAT_INCLUDED] => N
                    [SORT] => 3200
                    [DATE_REFRESH] => 
                    [DISCOUNT_NAME] => 
                    [DISCOUNT_VALUE] => 
                    [DISCOUNT_COUPON] => 
                    [XML_ID] => bx_67ac7366f2bf8
                    [MARKING_CODE_GROUP] => 
                    [PRICE_FORMATED] => 3 562 ₽
                    [WEIGHT_FORMATED] => 0 кг
                    [DISCOUNT_PRICE_PERCENT] => 0
                    [DISCOUNT_PRICE_PERCENT_FORMATED] => 0%
                    [BASE_PRICE_FORMATED] => 3 562 ₽
                    [PROPS] => Array
                        (
                        )

                    [SUM_NUM] => 7124
                    [SUM] => 7 124 ₽
                    [SUM_BASE] => 7124
                    [SUM_BASE_FORMATED] => 7 124 ₽
                    [CATALOG_QUANTITY] => 0
                    [PREVIEW_PICTURE] => 2590809
                    [DETAIL_PICTURE] => 2590810
                    [PROPERTY_COLOR_REF_VALUE] => ae86edd9-083c-11e9-88e1-00155d00c800
                    [PROPERTY_COLOR_REF_VALUE_ID] => 570595167
                    [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE] => 1
                    [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE_ID] => 575335729
                    [PROPERTY_CML2_MANUFACTURER_VALUE] => Dr. Gans Smart
                    [PROPERTY_CML2_ARTICLE_VALUE] => 25.150.B0420.401
                    [PREVIEW_PICTURE_SRC] => /upload/resize_cache/iblock/dd8/160_160_1/11lrl3f97jeug3q373g5hbika4idx8sy.jpg
                    [PREVIEW_PICTURE_SRC_2X] => /upload/resize_cache/iblock/dd8/320_320_1/11lrl3f97jeug3q373g5hbika4idx8sy.jpg
                    [PREVIEW_PICTURE_SRC_ORIGINAL] => /upload/iblock/dd8/11lrl3f97jeug3q373g5hbika4idx8sy.jpg
                    [DETAIL_PICTURE_SRC] => /upload/resize_cache/iblock/e0a/160_160_1/3764xxqkdtjzsb1hydjywdwzdzmd3a20.jpg
                    [DETAIL_PICTURE_SRC_2X] => /upload/resize_cache/iblock/e0a/320_320_1/3764xxqkdtjzsb1hydjywdwzdzmd3a20.jpg
                    [DETAIL_PICTURE_SRC_ORIGINAL] => /upload/iblock/e0a/3764xxqkdtjzsb1hydjywdwzdzmd3a20.jpg
                    [MEASURE_TEXT] => шт
                    [MEASURE] => 796
                )

        )

    [BASE_LANG_CURRENCY] => RUB
    [WEIGHT_UNIT] => кг
    [WEIGHT_KOEF] => 1000
    [TaxExempt] => Array
        (
        )

    [DISCOUNT_PRICE] => 0
    [DISCOUNT_PERCENT] => 0
    [DELIVERY_PRICE] => 0
    [TAX_PRICE] => 0
    [PAYED_FROM_ACCOUNT_FORMATED] => 
    [ORDER_TOTAL_PRICE_FORMATED] => 628 210 ₽
    [ORDER_WEIGHT_FORMATED] => 107 кг
    [ORDER_PRICE_FORMATED] => 628 210 ₽
    [VAT_SUM_FORMATED] => 0 ₽
    [DELIVERY_SUM] => 
    [DELIVERY_PROFILE_SUM] => 
    [DELIVERY_PRICE_FORMATED] => 0 ₽
    [DISCOUNT_PERCENT_FORMATED] => 
    [PAY_FROM_ACCOUNT] => N
    [DISCOUNTS] => Array
        (
        )

    [AUTH] => Array
        (
            [new_user_registration] => Y
            [new_user_registration_email_confirmation] => N
            [new_user_email_required] => Y
            [new_user_phone_auth] => N
            [new_user_phone_required] => N
        )

    [SMS_AUTH] => Array
        (
        )

    [HAVE_PREPAYMENT] => 
    [PREPAY_PS] => Array
        (
        )

    [PREPAY_ADIT_FIELDS] => 
    [PREPAY_ORDER_PROPS] => Array
        (
        )

    [GRID] => Array
        (
            [DEFAULT_COLUMNS] => 
            [HEADERS] => Array
                (
                    [0] => Array
                        (
                            [id] => NAME
                            [name] => Название
                        )

                    [1] => Array
                        (
                            [id] => PREVIEW_PICTURE
                            [name] => Изображение
                        )

                    [2] => Array
                        (
                            [id] => PROPS
                            [name] => Свойства
                        )

                    [3] => Array
                        (
                            [id] => QUANTITY
                            [name] => Количество
                        )

                    [4] => Array
                        (
                            [id] => SUM
                            [name] => Сумма
                        )

                )

            [HEADERS_HIDDEN] => Array
                (
                    [0] => Array
                        (
                            [id] => PROPERTY_CML2_MANUFACTURER_VALUE
                            [name] => Производитель
                        )

                    [1] => Array
                        (
                            [id] => PROPERTY_KATEGORIYA_TOVARA_VALUE
                            [name] => Категория товара
                        )

                    [2] => Array
                        (
                            [id] => PROPERTY_TIP_USTANOVKI_VALUE
                            [name] => Тип установки
                        )

                    [3] => Array
                        (
                            [id] => PROPERTY_CML2_ARTICLE_VALUE
                            [name] => Артикул
                        )

                    [4] => Array
                        (
                            [id] => PROPS
                            [name] => Свойства
                        )

                )

            [ROWS] => Array
                (
                    [153873] => Array
                        (
                            [id] => 153873
                            [data] => Array
                                (
                                    [ID] => 153873
                                    [LID] => s1
                                    [MODULE] => catalog
                                    [PRODUCT_ID] => 138083
                                    [QUANTITY] => 1
                                    [WEIGHT] => 0.00
                                    [DELAY] => N
                                    [CAN_BUY] => Y
                                    [PRICE] => 33774
                                    [CUSTOM_PRICE] => N
                                    [BASE_PRICE] => 33774
                                    [PRODUCT_PRICE_ID] => 30800541
                                    [PRICE_TYPE_ID] => 3
                                    [CURRENCY] => RUB
                                    [BARCODE_MULTI] => N
                                    [RESERVED] => N
                                    [RESERVE_QUANTITY] => 
                                    [NAME] => Посудомоечная машина Korting KDI 60110 (KDI 60110)
                                    [CATALOG_XML_ID] => catalog-3bf1763a-cc10-4dd0-86c5-23886628db66#
                                    [VAT_RATE] => 0
                                    [NOTES] => Ваша цена
                                    [DISCOUNT_PRICE] => 0
                                    [PRODUCT_PROVIDER_CLASS] => CCatalogProductProvider
                                    [CALLBACK_FUNC] => 
                                    [ORDER_CALLBACK_FUNC] => 
                                    [PAY_CALLBACK_FUNC] => 
                                    [CANCEL_CALLBACK_FUNC] => 
                                    [DIMENSIONS] => a:3:{s:5:"WIDTH";N;s:6:"HEIGHT";N;s:6:"LENGTH";N;}
                                    [TYPE] => 
                                    [SET_PARENT_ID] => 
                                    [DETAIL_PAGE_URL] => /products/posudomoechnaya_mashina_korting_kdi_60110/
                                    [FUSER_ID] => 477110
                                    [MEASURE_CODE] => 796
                                    [MEASURE_NAME] => шт
                                    [ORDER_ID] => 
                                    [DATE_INSERT] => Bitrix\Main\Type\DateTime Object
                                        (
                                            [value:protected] => DateTime Object
                                                (
                                                    [date] => 2025-02-12 15:04:24.000000
                                                    [timezone_type] => 3
                                                    [timezone] => Asia/Yekaterinburg
                                                )

                                            [userTimeEnabled:protected] => 1
                                        )

                                    [DATE_UPDATE] => Bitrix\Main\Type\DateTime Object
                                        (
                                            [value:protected] => DateTime Object
                                                (
                                                    [date] => 2025-02-12 15:43:46.000000
                                                    [timezone_type] => 3
                                                    [timezone] => Asia/Yekaterinburg
                                                )

                                            [userTimeEnabled:protected] => 1
                                        )

                                    [PRODUCT_XML_ID] => faa156ed-b201-11ea-ab90-00259087b6a3#faa156ed-b201-11ea-ab90-00259087b6a3
                                    [SUBSCRIBE] => N
                                    [RECOMMENDATION] => 
                                    [VAT_INCLUDED] => N
                                    [SORT] => 200
                                    [DATE_REFRESH] => 
                                    [DISCOUNT_NAME] => 
                                    [DISCOUNT_VALUE] => 
                                    [DISCOUNT_COUPON] => 
                                    [XML_ID] => bx_67ac72281ccad
                                    [MARKING_CODE_GROUP] => 
                                    [PRICE_FORMATED] => 33 774 ₽
                                    [WEIGHT_FORMATED] => 0 кг
                                    [DISCOUNT_PRICE_PERCENT] => 0
                                    [DISCOUNT_PRICE_PERCENT_FORMATED] => 0%
                                    [BASE_PRICE_FORMATED] => 33 774 ₽
                                    [PROPS] => Array
                                        (
                                        )

                                    [SUM_NUM] => 33774
                                    [SUM] => 33 774 ₽
                                    [SUM_BASE] => 33774
                                    [SUM_BASE_FORMATED] => 33 774 ₽
                                    [CATALOG_QUANTITY] => 2
                                    [PREVIEW_PICTURE] => 2955128
                                    [DETAIL_PICTURE] => 2955129
                                    [PROPERTY_COLOR_REF_VALUE] => b9dbf6ee-e7f0-11e8-9f77-00155d00c800
                                    [PROPERTY_COLOR_REF_VALUE_ID] => 574105864
                                    [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE] => 100
                                    [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE_ID] => 575311822
                                    [PROPERTY_CML2_MANUFACTURER_VALUE] => Korting
                                    [PROPERTY_CML2_MANUFACTURER_VALUE_ID] => 
                                    [PROPERTY_CML2_MANUFACTURER_ENUM_ID] => 
                                    [PROPERTY_KATEGORIYA_TOVARA_VALUE] => 
                                    [PROPERTY_KATEGORIYA_TOVARA_VALUE_ID] => 
                                    [PROPERTY_KATEGORIYA_TOVARA_ENUM_ID] => 
                                    [PROPERTY_CML2_ARTICLE_VALUE] => KDI 60110
                                    [PROPERTY_CML2_ARTICLE_VALUE_ID] => 
                                    [PROPERTY_TIP_USTANOVKI_VALUE] => Встраиваемый
                                    [PROPERTY_TIP_USTANOVKI_VALUE_ID] => 575311811
                                    [PROPERTY_TIP_USTANOVKI_ENUM_ID] => 126502
                                    [PREVIEW_PICTURE_SRC] => /upload/resize_cache/iblock/efe/160_160_1/qem0epksq1zsz5ad01ub8k81fjckdaf0.jpg
                                    [PREVIEW_PICTURE_SRC_2X] => /upload/resize_cache/iblock/efe/320_320_1/qem0epksq1zsz5ad01ub8k81fjckdaf0.jpg
                                    [PREVIEW_PICTURE_SRC_ORIGINAL] => /upload/iblock/efe/qem0epksq1zsz5ad01ub8k81fjckdaf0.jpg
                                    [DETAIL_PICTURE_SRC] => /upload/resize_cache/iblock/d87/160_160_1/yz1ud2gl05as86o9ptj1wk6ae10pxgov.jpg
                                    [DETAIL_PICTURE_SRC_2X] => /upload/resize_cache/iblock/d87/320_320_1/yz1ud2gl05as86o9ptj1wk6ae10pxgov.jpg
                                    [DETAIL_PICTURE_SRC_ORIGINAL] => /upload/iblock/d87/yz1ud2gl05as86o9ptj1wk6ae10pxgov.jpg
                                    [MEASURE_TEXT] => шт
                                    [MEASURE] => 796
                                )

                            [actions] => Array
                                (
                                )

                            [columns] => Array
                                (
                                    [PROPS] => 
                                    [QUANTITY] => 1 шт
                                    [PROPERTY_COLOR_REF_VALUE] => Array
                                        (
                                            [0] => Array
                                                (
                                                    [type] => value
                                                    [value] => b9dbf6ee-e7f0-11e8-9f77-00155d00c800
                                                )

                                        )

                                    [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE] => Array
                                        (
                                            [0] => Array
                                                (
                                                    [type] => value
                                                    [value] => 100
                                                )

                                        )

                                    [PROPERTY_CML2_MANUFACTURER_VALUE] => Array
                                        (
                                            [0] => Array
                                                (
                                                    [type] => value
                                                    [value] => Korting
                                                )

                                        )

                                    [PROPERTY_KATEGORIYA_TOVARA_VALUE] => Array
                                        (
                                            [0] => Array
                                                (
                                                    [type] => value
                                                    [value] => 
                                                )

                                        )

                                    [PROPERTY_CML2_ARTICLE_VALUE] => Array
                                        (
                                            [0] => Array
                                                (
                                                    [type] => value
                                                    [value] => KDI 60110
                                                )

                                        )

                                    [PROPERTY_TIP_USTANOVKI_VALUE] => Array
                                        (
                                            [0] => Array
                                                (
                                                    [type] => value
                                                    [value] => Встраиваемый
                                                )

                                        )

                                )

                            [editable] => 1
                        )

                    [153267] => Array
                        (
                            [id] => 153267
                            [data] => Array
                                (
                                    [ID] => 153267
                                    [LID] => s1
                                    [MODULE] => catalog
                                    [PRODUCT_ID] => 178116
                                    [QUANTITY] => 1
                                    [WEIGHT] => 0.00
                                    [DELAY] => N
                                    [CAN_BUY] => Y
                                    [PRICE] => 183104
                                    [CUSTOM_PRICE] => N
                                    [BASE_PRICE] => 183104
                                    [PRODUCT_PRICE_ID] => 32292141
                                    [PRICE_TYPE_ID] => 3
                                    [CURRENCY] => RUB
                                    [BARCODE_MULTI] => N
                                    [RESERVED] => N
                                    [RESERVE_QUANTITY] => 
                                    [NAME] => Электрический духовой шкаф Elica VIRTUS MULTI 90 TFT (PRF0191768)
                                    [CATALOG_XML_ID] => catalog-3bf1763a-cc10-4dd0-86c5-23886628db66#
                                    [VAT_RATE] => 0
                                    [NOTES] => Ваша цена
                                    [DISCOUNT_PRICE] => 0
                                    [PRODUCT_PROVIDER_CLASS] => CCatalogProductProvider
                                    [CALLBACK_FUNC] => 
                                    [ORDER_CALLBACK_FUNC] => 
                                    [PAY_CALLBACK_FUNC] => 
                                    [CANCEL_CALLBACK_FUNC] => 
                                    [DIMENSIONS] => a:3:{s:5:"WIDTH";N;s:6:"HEIGHT";N;s:6:"LENGTH";N;}
                                    [TYPE] => 
                                    [SET_PARENT_ID] => 
                                    [DETAIL_PAGE_URL] => /products/elektricheskiy_dukhovoy_shkaf_elica_virtus_multi_90_tft/
                                    [FUSER_ID] => 477110
                                    [MEASURE_CODE] => 796
                                    [MEASURE_NAME] => шт
                                    [ORDER_ID] => 
                                    [DATE_INSERT] => Bitrix\Main\Type\DateTime Object
                                        (
                                            [value:protected] => DateTime Object
                                                (
                                                    [date] => 2025-02-10 09:25:52.000000
                                                    [timezone_type] => 3
                                                    [timezone] => Asia/Yekaterinburg
                                                )

                                            [userTimeEnabled:protected] => 1
                                        )

                                    [DATE_UPDATE] => Bitrix\Main\Type\DateTime Object
                                        (
                                            [value:protected] => DateTime Object
                                                (
                                                    [date] => 2025-02-12 15:43:46.000000
                                                    [timezone_type] => 3
                                                    [timezone] => Asia/Yekaterinburg
                                                )

                                            [userTimeEnabled:protected] => 1
                                        )

                                    [PRODUCT_XML_ID] => 56e990ec-94f4-11ee-ac5d-00259087b6a3#56e990ec-94f4-11ee-ac5d-00259087b6a3
                                    [SUBSCRIBE] => N
                                    [RECOMMENDATION] => 
                                    [VAT_INCLUDED] => N
                                    [SORT] => 300
                                    [DATE_REFRESH] => 
                                    [DISCOUNT_NAME] => 
                                    [DISCOUNT_VALUE] => 
                                    [DISCOUNT_COUPON] => 
                                    [XML_ID] => bx_67a97fd01be74
                                    [MARKING_CODE_GROUP] => 
                                    [PRICE_FORMATED] => 183 104 ₽
                                    [WEIGHT_FORMATED] => 0 кг
                                    [DISCOUNT_PRICE_PERCENT] => 0
                                    [DISCOUNT_PRICE_PERCENT_FORMATED] => 0%
                                    [BASE_PRICE_FORMATED] => 183 104 ₽
                                    [PROPS] => Array
                                        (
                                        )

                                    [SUM_NUM] => 183104
                                    [SUM] => 183 104 ₽
                                    [SUM_BASE] => 183104
                                    [SUM_BASE_FORMATED] => 183 104 ₽
                                    [CATALOG_QUANTITY] => 0
                                    [PREVIEW_PICTURE] => 3021175
                                    [DETAIL_PICTURE] => 3021176
                                    [PROPERTY_COLOR_REF_VALUE] => 179c5585-e25d-11e8-86eb-00155d00c800
                                    [PROPERTY_COLOR_REF_VALUE_ID] => 570453537
                                    [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE] => 7
                                    [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE_ID] => 575405890
                                    [PROPERTY_CML2_MANUFACTURER_VALUE] => Elica
                                    [PROPERTY_CML2_ARTICLE_VALUE] => PRF0191768
                                    [PREVIEW_PICTURE_SRC] => /upload/resize_cache/iblock/ba3/160_160_1/sz5uzxbbnk38ay48xr1ylsyp7uzouyqk.jpg
                                    [PREVIEW_PICTURE_SRC_2X] => /upload/resize_cache/iblock/ba3/320_320_1/sz5uzxbbnk38ay48xr1ylsyp7uzouyqk.jpg
                                    [PREVIEW_PICTURE_SRC_ORIGINAL] => /upload/iblock/ba3/sz5uzxbbnk38ay48xr1ylsyp7uzouyqk.jpg
                                    [DETAIL_PICTURE_SRC] => /upload/resize_cache/iblock/d38/160_160_1/sme3uw6qz792hyb2dwmu0spisf5d925y.jpg
                                    [DETAIL_PICTURE_SRC_2X] => /upload/resize_cache/iblock/d38/320_320_1/sme3uw6qz792hyb2dwmu0spisf5d925y.jpg
                                    [DETAIL_PICTURE_SRC_ORIGINAL] => /upload/iblock/d38/sme3uw6qz792hyb2dwmu0spisf5d925y.jpg
                                    [MEASURE_TEXT] => шт
                                    [MEASURE] => 796
                                )

                            [actions] => Array
                                (
                                )

                            [columns] => Array
                                (
                                    [PROPS] => 
                                    [QUANTITY] => 1 шт
                                    [PROPERTY_COLOR_REF_VALUE] => Array
                                        (
                                            [0] => Array
                                                (
                                                    [type] => value
                                                    [value] => 179c5585-e25d-11e8-86eb-00155d00c800
                                                )

                                        )

                                    [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE] => Array
                                        (
                                            [0] => Array
                                                (
                                                    [type] => value
                                                    [value] => 7
                                                )

                                        )

                                    [PROPERTY_CML2_MANUFACTURER_VALUE] => Array
                                        (
                                            [0] => Array
                                                (
                                                    [type] => value
                                                    [value] => Elica
                                                )

                                        )

                                    [PROPERTY_CML2_ARTICLE_VALUE] => Array
                                        (
                                            [0] => Array
                                                (
                                                    [type] => value
                                                    [value] => PRF0191768
                                                )

                                        )

                                )

                            [editable] => 1
                        )

                    [153268] => Array
                        (
                            [id] => 153268
                            [data] => Array
                                (
                                    [ID] => 153268
                                    [LID] => s1
                                    [MODULE] => catalog
                                    [PRODUCT_ID] => 178115
                                    [QUANTITY] => 1
                                    [WEIGHT] => 0.00
                                    [DELAY] => N
                                    [CAN_BUY] => Y
                                    [PRICE] => 137326
                                    [CUSTOM_PRICE] => N
                                    [BASE_PRICE] => 137326
                                    [PRODUCT_PRICE_ID] => 32292143
                                    [PRICE_TYPE_ID] => 3
                                    [CURRENCY] => RUB
                                    [BARCODE_MULTI] => N
                                    [RESERVED] => N
                                    [RESERVE_QUANTITY] => 
                                    [NAME] => Электрический духовой шкаф Elica VIRTUS MULTI 60 TFT (PRF0191770)
                                    [CATALOG_XML_ID] => catalog-3bf1763a-cc10-4dd0-86c5-23886628db66#
                                    [VAT_RATE] => 0
                                    [NOTES] => Ваша цена
                                    [DISCOUNT_PRICE] => 0
                                    [PRODUCT_PROVIDER_CLASS] => CCatalogProductProvider
                                    [CALLBACK_FUNC] => 
                                    [ORDER_CALLBACK_FUNC] => 
                                    [PAY_CALLBACK_FUNC] => 
                                    [CANCEL_CALLBACK_FUNC] => 
                                    [DIMENSIONS] => a:3:{s:5:"WIDTH";N;s:6:"HEIGHT";N;s:6:"LENGTH";N;}
                                    [TYPE] => 
                                    [SET_PARENT_ID] => 
                                    [DETAIL_PAGE_URL] => /products/elektricheskiy_dukhovoy_shkaf_elica_virtus_multi_60_tft/
                                    [FUSER_ID] => 477110
                                    [MEASURE_CODE] => 796
                                    [MEASURE_NAME] => шт
                                    [ORDER_ID] => 
                                    [DATE_INSERT] => Bitrix\Main\Type\DateTime Object
                                        (
                                            [value:protected] => DateTime Object
                                                (
                                                    [date] => 2025-02-10 09:26:05.000000
                                                    [timezone_type] => 3
                                                    [timezone] => Asia/Yekaterinburg
                                                )

                                            [userTimeEnabled:protected] => 1
                                        )

                                    [DATE_UPDATE] => Bitrix\Main\Type\DateTime Object
                                        (
                                            [value:protected] => DateTime Object
                                                (
                                                    [date] => 2025-02-10 09:33:41.000000
                                                    [timezone_type] => 3
                                                    [timezone] => Asia/Yekaterinburg
                                                )

                                            [userTimeEnabled:protected] => 1
                                        )

                                    [PRODUCT_XML_ID] => 0d965381-94fb-11ee-ac5d-00259087b6a3#0d965381-94fb-11ee-ac5d-00259087b6a3
                                    [SUBSCRIBE] => N
                                    [RECOMMENDATION] => 
                                    [VAT_INCLUDED] => N
                                    [SORT] => 400
                                    [DATE_REFRESH] => 
                                    [DISCOUNT_NAME] => 
                                    [DISCOUNT_VALUE] => 
                                    [DISCOUNT_COUPON] => 
                                    [XML_ID] => bx_67a97fdd506a9
                                    [MARKING_CODE_GROUP] => 
                                    [PRICE_FORMATED] => 137 326 ₽
                                    [WEIGHT_FORMATED] => 0 кг
                                    [DISCOUNT_PRICE_PERCENT] => 0
                                    [DISCOUNT_PRICE_PERCENT_FORMATED] => 0%
                                    [BASE_PRICE_FORMATED] => 137 326 ₽
                                    [PROPS] => Array
                                        (
                                        )

                                    [SUM_NUM] => 137326
                                    [SUM] => 137 326 ₽
                                    [SUM_BASE] => 137326
                                    [SUM_BASE_FORMATED] => 137 326 ₽
                                    [CATALOG_QUANTITY] => 0
                                    [PREVIEW_PICTURE] => 3021169
                                    [DETAIL_PICTURE] => 3021170
                                    [PROPERTY_COLOR_REF_VALUE] => 179c5585-e25d-11e8-86eb-00155d00c800
                                    [PROPERTY_COLOR_REF_VALUE_ID] => 570453508
                                    [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE] => 5
                                    [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE_ID] => 575405864
                                    [PROPERTY_CML2_MANUFACTURER_VALUE] => Elica
                                    [PROPERTY_CML2_ARTICLE_VALUE] => PRF0191770
                                    [PREVIEW_PICTURE_SRC] => /upload/resize_cache/iblock/5fd/160_160_1/zwaj2s32jht3qytbb4myur9g9jtd0jr0.jpg
                                    [PREVIEW_PICTURE_SRC_2X] => /upload/resize_cache/iblock/5fd/320_320_1/zwaj2s32jht3qytbb4myur9g9jtd0jr0.jpg
                                    [PREVIEW_PICTURE_SRC_ORIGINAL] => /upload/iblock/5fd/zwaj2s32jht3qytbb4myur9g9jtd0jr0.jpg
                                    [DETAIL_PICTURE_SRC] => /upload/resize_cache/iblock/2ae/160_160_1/rp6sycqs1n21hctp9m3ji0aqovrvlwio.jpg
                                    [DETAIL_PICTURE_SRC_2X] => /upload/resize_cache/iblock/2ae/320_320_1/rp6sycqs1n21hctp9m3ji0aqovrvlwio.jpg
                                    [DETAIL_PICTURE_SRC_ORIGINAL] => /upload/iblock/2ae/rp6sycqs1n21hctp9m3ji0aqovrvlwio.jpg
                                    [MEASURE_TEXT] => шт
                                    [MEASURE] => 796
                                )

                            [actions] => Array
                                (
                                )

                            [columns] => Array
                                (
                                    [PROPS] => 
                                    [QUANTITY] => 1 шт
                                    [PROPERTY_COLOR_REF_VALUE] => Array
                                        (
                                            [0] => Array
                                                (
                                                    [type] => value
                                                    [value] => 179c5585-e25d-11e8-86eb-00155d00c800
                                                )

                                        )

                                    [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE] => Array
                                        (
                                            [0] => Array
                                                (
                                                    [type] => value
                                                    [value] => 5
                                                )

                                        )

                                    [PROPERTY_CML2_MANUFACTURER_VALUE] => Array
                                        (
                                            [0] => Array
                                                (
                                                    [type] => value
                                                    [value] => Elica
                                                )

                                        )

                                    [PROPERTY_CML2_ARTICLE_VALUE] => Array
                                        (
                                            [0] => Array
                                                (
                                                    [type] => value
                                                    [value] => PRF0191770
                                                )

                                        )

                                )

                            [editable] => 1
                        )

                    [153269] => Array
                        (
                            [id] => 153269
                            [data] => Array
                                (
                                    [ID] => 153269
                                    [LID] => s1
                                    [MODULE] => catalog
                                    [PRODUCT_ID] => 178114
                                    [QUANTITY] => 1
                                    [WEIGHT] => 0.00
                                    [DELAY] => N
                                    [CAN_BUY] => Y
                                    [PRICE] => 106808
                                    [CUSTOM_PRICE] => N
                                    [BASE_PRICE] => 106808
                                    [PRODUCT_PRICE_ID] => 32292153
                                    [PRICE_TYPE_ID] => 3
                                    [CURRENCY] => RUB
                                    [BARCODE_MULTI] => N
                                    [RESERVED] => N
                                    [RESERVE_QUANTITY] => 
                                    [NAME] => Электрический духовой шкаф Elica VIRTUS MULTI 60 DD (PRF0191771)
                                    [CATALOG_XML_ID] => catalog-3bf1763a-cc10-4dd0-86c5-23886628db66#
                                    [VAT_RATE] => 0
                                    [NOTES] => Ваша цена
                                    [DISCOUNT_PRICE] => 0
                                    [PRODUCT_PROVIDER_CLASS] => CCatalogProductProvider
                                    [CALLBACK_FUNC] => 
                                    [ORDER_CALLBACK_FUNC] => 
                                    [PAY_CALLBACK_FUNC] => 
                                    [CANCEL_CALLBACK_FUNC] => 
                                    [DIMENSIONS] => a:3:{s:5:"WIDTH";N;s:6:"HEIGHT";N;s:6:"LENGTH";N;}
                                    [TYPE] => 
                                    [SET_PARENT_ID] => 
                                    [DETAIL_PAGE_URL] => /products/elektricheskiy_dukhovoy_shkaf_elica_virtus_multi_60_dd/
                                    [FUSER_ID] => 477110
                                    [MEASURE_CODE] => 796
                                    [MEASURE_NAME] => шт
                                    [ORDER_ID] => 
                                    [DATE_INSERT] => Bitrix\Main\Type\DateTime Object
                                        (
                                            [value:protected] => DateTime Object
                                                (
                                                    [date] => 2025-02-10 09:26:24.000000
                                                    [timezone_type] => 3
                                                    [timezone] => Asia/Yekaterinburg
                                                )

                                            [userTimeEnabled:protected] => 1
                                        )

                                    [DATE_UPDATE] => Bitrix\Main\Type\DateTime Object
                                        (
                                            [value:protected] => DateTime Object
                                                (
                                                    [date] => 2025-02-10 09:33:41.000000
                                                    [timezone_type] => 3
                                                    [timezone] => Asia/Yekaterinburg
                                                )

                                            [userTimeEnabled:protected] => 1
                                        )

                                    [PRODUCT_XML_ID] => 34d79bf1-94fb-11ee-ac5d-00259087b6a3#34d79bf1-94fb-11ee-ac5d-00259087b6a3
                                    [SUBSCRIBE] => N
                                    [RECOMMENDATION] => 
                                    [VAT_INCLUDED] => N
                                    [SORT] => 500
                                    [DATE_REFRESH] => 
                                    [DISCOUNT_NAME] => 
                                    [DISCOUNT_VALUE] => 
                                    [DISCOUNT_COUPON] => 
                                    [XML_ID] => bx_67a97ff0a5c77
                                    [MARKING_CODE_GROUP] => 
                                    [PRICE_FORMATED] => 106 808 ₽
                                    [WEIGHT_FORMATED] => 0 кг
                                    [DISCOUNT_PRICE_PERCENT] => 0
                                    [DISCOUNT_PRICE_PERCENT_FORMATED] => 0%
                                    [BASE_PRICE_FORMATED] => 106 808 ₽
                                    [PROPS] => Array
                                        (
                                        )

                                    [SUM_NUM] => 106808
                                    [SUM] => 106 808 ₽
                                    [SUM_BASE] => 106808
                                    [SUM_BASE_FORMATED] => 106 808 ₽
                                    [CATALOG_QUANTITY] => 1
                                    [PREVIEW_PICTURE] => 3021160
                                    [DETAIL_PICTURE] => 3021161
                                    [PROPERTY_COLOR_REF_VALUE] => 179c5585-e25d-11e8-86eb-00155d00c800
                                    [PROPERTY_COLOR_REF_VALUE_ID] => 570453475
                                    [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE] => 7
                                    [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE_ID] => 575405835
                                    [PROPERTY_CML2_MANUFACTURER_VALUE] => Elica
                                    [PROPERTY_CML2_ARTICLE_VALUE] => PRF0191771
                                    [PREVIEW_PICTURE_SRC] => /upload/resize_cache/iblock/47b/160_160_1/317fgi83ms1a69u91m2f1cz9w4el4vt9.jpg
                                    [PREVIEW_PICTURE_SRC_2X] => /upload/resize_cache/iblock/47b/320_320_1/317fgi83ms1a69u91m2f1cz9w4el4vt9.jpg
                                    [PREVIEW_PICTURE_SRC_ORIGINAL] => /upload/iblock/47b/317fgi83ms1a69u91m2f1cz9w4el4vt9.jpg
                                    [DETAIL_PICTURE_SRC] => /upload/resize_cache/iblock/41a/160_160_1/s29ks4k2ao2b8wjm076wzfl406c702mr.jpg
                                    [DETAIL_PICTURE_SRC_2X] => /upload/resize_cache/iblock/41a/320_320_1/s29ks4k2ao2b8wjm076wzfl406c702mr.jpg
                                    [DETAIL_PICTURE_SRC_ORIGINAL] => /upload/iblock/41a/s29ks4k2ao2b8wjm076wzfl406c702mr.jpg
                                    [MEASURE_TEXT] => шт
                                    [MEASURE] => 796
                                )

                            [actions] => Array
                                (
                                )

                            [columns] => Array
                                (
                                    [PROPS] => 
                                    [QUANTITY] => 1 шт
                                    [PROPERTY_COLOR_REF_VALUE] => Array
                                        (
                                            [0] => Array
                                                (
                                                    [type] => value
                                                    [value] => 179c5585-e25d-11e8-86eb-00155d00c800
                                                )

                                        )

                                    [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE] => Array
                                        (
                                            [0] => Array
                                                (
                                                    [type] => value
                                                    [value] => 7
                                                )

                                        )

                                    [PROPERTY_CML2_MANUFACTURER_VALUE] => Array
                                        (
                                            [0] => Array
                                                (
                                                    [type] => value
                                                    [value] => Elica
                                                )

                                        )

                                    [PROPERTY_CML2_ARTICLE_VALUE] => Array
                                        (
                                            [0] => Array
                                                (
                                                    [type] => value
                                                    [value] => PRF0191771
                                                )

                                        )

                                )

                            [editable] => 1
                        )

                    [152196] => Array
                        (
                            [id] => 152196
                            [data] => Array
                                (
                                    [ID] => 152196
                                    [LID] => s1
                                    [MODULE] => catalog
                                    [PRODUCT_ID] => 135772
                                    [QUANTITY] => 3
                                    [WEIGHT] => 25000.00
                                    [DELAY] => N
                                    [CAN_BUY] => Y
                                    [PRICE] => 24320
                                    [CUSTOM_PRICE] => N
                                    [BASE_PRICE] => 24320
                                    [PRODUCT_PRICE_ID] => 30784038
                                    [PRICE_TYPE_ID] => 3
                                    [CURRENCY] => RUB
                                    [BARCODE_MULTI] => N
                                    [RESERVED] => N
                                    [RESERVE_QUANTITY] => 
                                    [NAME] => Электрический духовой шкаф Lex EDM 4575 GR (CHAO000438)
                                    [CATALOG_XML_ID] => catalog-3bf1763a-cc10-4dd0-86c5-23886628db66#
                                    [VAT_RATE] => 0
                                    [NOTES] => Ваша цена
                                    [DISCOUNT_PRICE] => 0
                                    [PRODUCT_PROVIDER_CLASS] => CCatalogProductProvider
                                    [CALLBACK_FUNC] => 
                                    [ORDER_CALLBACK_FUNC] => 
                                    [PAY_CALLBACK_FUNC] => 
                                    [CANCEL_CALLBACK_FUNC] => 
                                    [DIMENSIONS] => a:3:{s:5:"WIDTH";N;s:6:"HEIGHT";N;s:6:"LENGTH";N;}
                                    [TYPE] => 
                                    [SET_PARENT_ID] => 
                                    [DETAIL_PAGE_URL] => /products/dukhovoy_shkaf_lex_edp_4571_bl/
                                    [FUSER_ID] => 477110
                                    [MEASURE_CODE] => 796
                                    [MEASURE_NAME] => шт
                                    [ORDER_ID] => 
                                    [DATE_INSERT] => Bitrix\Main\Type\DateTime Object
                                        (
                                            [value:protected] => DateTime Object
                                                (
                                                    [date] => 2025-02-05 22:42:38.000000
                                                    [timezone_type] => 3
                                                    [timezone] => Asia/Yekaterinburg
                                                )

                                            [userTimeEnabled:protected] => 1
                                        )

                                    [DATE_UPDATE] => Bitrix\Main\Type\DateTime Object
                                        (
                                            [value:protected] => DateTime Object
                                                (
                                                    [date] => 2025-02-12 16:26:24.000000
                                                    [timezone_type] => 3
                                                    [timezone] => Asia/Yekaterinburg
                                                )

                                            [userTimeEnabled:protected] => 1
                                        )

                                    [PRODUCT_XML_ID] => d7d8dad5-e25f-11e8-86eb-00155d00c800#d7d8dad5-e25f-11e8-86eb-00155d00c800
                                    [SUBSCRIBE] => N
                                    [RECOMMENDATION] => 
                                    [VAT_INCLUDED] => N
                                    [SORT] => 2700
                                    [DATE_REFRESH] => 
                                    [DISCOUNT_NAME] => 
                                    [DISCOUNT_VALUE] => 
                                    [DISCOUNT_COUPON] => 
                                    [XML_ID] => bx_67a3a30e1b711
                                    [MARKING_CODE_GROUP] => 
                                    [PRICE_FORMATED] => 24 320 ₽
                                    [WEIGHT_FORMATED] => 25 кг
                                    [DISCOUNT_PRICE_PERCENT] => 0
                                    [DISCOUNT_PRICE_PERCENT_FORMATED] => 0%
                                    [BASE_PRICE_FORMATED] => 24 320 ₽
                                    [PROPS] => Array
                                        (
                                        )

                                    [SUM_NUM] => 72960
                                    [SUM] => 72 960 ₽
                                    [SUM_BASE] => 72960
                                    [SUM_BASE_FORMATED] => 72 960 ₽
                                    [CATALOG_QUANTITY] => 2
                                    [PREVIEW_PICTURE] => 3058048
                                    [DETAIL_PICTURE] => 3058049
                                    [PROPERTY_COLOR_REF_VALUE] => 5faccf5a-e7ef-11e8-9f77-00155d00c800
                                    [PROPERTY_COLOR_REF_VALUE_ID] => 574776716
                                    [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE] => 20
                                    [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE_ID] => 575359417
                                    [PROPERTY_CML2_MANUFACTURER_VALUE] => Lex
                                    [PROPERTY_CML2_ARTICLE_VALUE] => CHAO000438
                                    [PREVIEW_PICTURE_SRC] => /upload/resize_cache/iblock/f94/160_160_1/ea3izipp3c1qinbe132h777wbxwcjaam.jpg
                                    [PREVIEW_PICTURE_SRC_2X] => /upload/resize_cache/iblock/f94/320_320_1/ea3izipp3c1qinbe132h777wbxwcjaam.jpg
                                    [PREVIEW_PICTURE_SRC_ORIGINAL] => /upload/iblock/f94/ea3izipp3c1qinbe132h777wbxwcjaam.jpg
                                    [DETAIL_PICTURE_SRC] => /upload/resize_cache/iblock/197/160_160_1/f91jxkqgxyrm4huie78t1mmgcr6k19ar.jpg
                                    [DETAIL_PICTURE_SRC_2X] => /upload/resize_cache/iblock/197/320_320_1/f91jxkqgxyrm4huie78t1mmgcr6k19ar.jpg
                                    [DETAIL_PICTURE_SRC_ORIGINAL] => /upload/iblock/197/f91jxkqgxyrm4huie78t1mmgcr6k19ar.jpg
                                    [MEASURE_TEXT] => шт
                                    [MEASURE] => 796
                                )

                            [actions] => Array
                                (
                                )

                            [columns] => Array
                                (
                                    [PROPS] => 
                                    [QUANTITY] => 3 шт
                                    [PROPERTY_COLOR_REF_VALUE] => Array
                                        (
                                            [0] => Array
                                                (
                                                    [type] => value
                                                    [value] => 5faccf5a-e7ef-11e8-9f77-00155d00c800
                                                )

                                        )

                                    [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE] => Array
                                        (
                                            [0] => Array
                                                (
                                                    [type] => value
                                                    [value] => 20
                                                )

                                        )

                                    [PROPERTY_CML2_MANUFACTURER_VALUE] => Array
                                        (
                                            [0] => Array
                                                (
                                                    [type] => value
                                                    [value] => Lex
                                                )

                                        )

                                    [PROPERTY_CML2_ARTICLE_VALUE] => Array
                                        (
                                            [0] => Array
                                                (
                                                    [type] => value
                                                    [value] => CHAO000438
                                                )

                                        )

                                )

                            [editable] => 1
                        )

                    [153446] => Array
                        (
                            [id] => 153446
                            [data] => Array
                                (
                                    [ID] => 153446
                                    [LID] => s1
                                    [MODULE] => catalog
                                    [PRODUCT_ID] => 145706
                                    [QUANTITY] => 1
                                    [WEIGHT] => 0.00
                                    [DELAY] => N
                                    [CAN_BUY] => Y
                                    [PRICE] => 3562
                                    [CUSTOM_PRICE] => N
                                    [BASE_PRICE] => 3562
                                    [PRODUCT_PRICE_ID] => 30797061
                                    [PRICE_TYPE_ID] => 3
                                    [CURRENCY] => RUB
                                    [BARCODE_MULTI] => N
                                    [RESERVED] => N
                                    [RESERVE_QUANTITY] => 
                                    [NAME] => Мойка для кухни Dr. Gans Smart ОЛИВИЯ-420 (25.150.B0420.401)
                                    [CATALOG_XML_ID] => catalog-3bf1763a-cc10-4dd0-86c5-23886628db66#
                                    [VAT_RATE] => 0
                                    [NOTES] => Ваша цена
                                    [DISCOUNT_PRICE] => 0
                                    [PRODUCT_PROVIDER_CLASS] => CCatalogProductProvider
                                    [CALLBACK_FUNC] => 
                                    [ORDER_CALLBACK_FUNC] => 
                                    [PAY_CALLBACK_FUNC] => 
                                    [CANCEL_CALLBACK_FUNC] => 
                                    [DIMENSIONS] => a:3:{s:5:"WIDTH";N;s:6:"HEIGHT";N;s:6:"LENGTH";N;}
                                    [TYPE] => 
                                    [SET_PARENT_ID] => 
                                    [DETAIL_PAGE_URL] => /products/moyka_dlya_kukhni_dr_gans_smart_oliviya_420/
                                    [FUSER_ID] => 477110
                                    [MEASURE_CODE] => 796
                                    [MEASURE_NAME] => шт
                                    [ORDER_ID] => 
                                    [DATE_INSERT] => Bitrix\Main\Type\DateTime Object
                                        (
                                            [value:protected] => DateTime Object
                                                (
                                                    [date] => 2025-02-10 17:36:36.000000
                                                    [timezone_type] => 3
                                                    [timezone] => Asia/Yekaterinburg
                                                )

                                            [userTimeEnabled:protected] => 1
                                        )

                                    [DATE_UPDATE] => Bitrix\Main\Type\DateTime Object
                                        (
                                            [value:protected] => DateTime Object
                                                (
                                                    [date] => 2025-02-10 17:36:36.000000
                                                    [timezone_type] => 3
                                                    [timezone] => Asia/Yekaterinburg
                                                )

                                            [userTimeEnabled:protected] => 1
                                        )

                                    [PRODUCT_XML_ID] => 0fe66eae-004d-11ea-ab6d-00259087b6a3#0fe66eae-004d-11ea-ab6d-00259087b6a3
                                    [SUBSCRIBE] => N
                                    [RECOMMENDATION] => 
                                    [VAT_INCLUDED] => N
                                    [SORT] => 2800
                                    [DATE_REFRESH] => 
                                    [DISCOUNT_NAME] => 
                                    [DISCOUNT_VALUE] => 
                                    [DISCOUNT_COUPON] => 
                                    [XML_ID] => bx_67a9f2d4b41f0
                                    [MARKING_CODE_GROUP] => 
                                    [PRICE_FORMATED] => 3 562 ₽
                                    [WEIGHT_FORMATED] => 0 кг
                                    [DISCOUNT_PRICE_PERCENT] => 0
                                    [DISCOUNT_PRICE_PERCENT_FORMATED] => 0%
                                    [BASE_PRICE_FORMATED] => 3 562 ₽
                                    [PROPS] => Array
                                        (
                                        )

                                    [SUM_NUM] => 3562
                                    [SUM] => 3 562 ₽
                                    [SUM_BASE] => 3562
                                    [SUM_BASE_FORMATED] => 3 562 ₽
                                    [CATALOG_QUANTITY] => 2
                                    [PREVIEW_PICTURE] => 2590792
                                    [DETAIL_PICTURE] => 2590793
                                    [PROPERTY_COLOR_REF_VALUE] => 0bdd0e62-e1c6-11e8-86eb-00155d00c800
                                    [PROPERTY_COLOR_REF_VALUE_ID] => 570595131
                                    [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE] => 1
                                    [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE_ID] => 575335685
                                    [PROPERTY_CML2_MANUFACTURER_VALUE] => Dr. Gans Smart
                                    [PROPERTY_CML2_ARTICLE_VALUE] => 25.150.B0420.401
                                    [PREVIEW_PICTURE_SRC] => /upload/resize_cache/iblock/5f4/160_160_1/6e3b9gbylkut53aijaxnmksagmxsy4e8.jpg
                                    [PREVIEW_PICTURE_SRC_2X] => /upload/resize_cache/iblock/5f4/320_320_1/6e3b9gbylkut53aijaxnmksagmxsy4e8.jpg
                                    [PREVIEW_PICTURE_SRC_ORIGINAL] => /upload/iblock/5f4/6e3b9gbylkut53aijaxnmksagmxsy4e8.jpg
                                    [DETAIL_PICTURE_SRC] => /upload/resize_cache/iblock/601/160_160_1/eytwvuh6paf6y8yn1u0nfci8xmv7dmhs.jpg
                                    [DETAIL_PICTURE_SRC_2X] => /upload/resize_cache/iblock/601/320_320_1/eytwvuh6paf6y8yn1u0nfci8xmv7dmhs.jpg
                                    [DETAIL_PICTURE_SRC_ORIGINAL] => /upload/iblock/601/eytwvuh6paf6y8yn1u0nfci8xmv7dmhs.jpg
                                    [MEASURE_TEXT] => шт
                                    [MEASURE] => 796
                                )

                            [actions] => Array
                                (
                                )

                            [columns] => Array
                                (
                                    [PROPS] => 
                                    [QUANTITY] => 1 шт
                                    [PROPERTY_COLOR_REF_VALUE] => Array
                                        (
                                            [0] => Array
                                                (
                                                    [type] => value
                                                    [value] => 0bdd0e62-e1c6-11e8-86eb-00155d00c800
                                                )

                                        )

                                    [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE] => Array
                                        (
                                            [0] => Array
                                                (
                                                    [type] => value
                                                    [value] => 1
                                                )

                                        )

                                    [PROPERTY_CML2_MANUFACTURER_VALUE] => Array
                                        (
                                            [0] => Array
                                                (
                                                    [type] => value
                                                    [value] => Dr. Gans Smart
                                                )

                                        )

                                    [PROPERTY_CML2_ARTICLE_VALUE] => Array
                                        (
                                            [0] => Array
                                                (
                                                    [type] => value
                                                    [value] => 25.150.B0420.401
                                                )

                                        )

                                )

                            [editable] => 1
                        )

                    [153447] => Array
                        (
                            [id] => 153447
                            [data] => Array
                                (
                                    [ID] => 153447
                                    [LID] => s1
                                    [MODULE] => catalog
                                    [PRODUCT_ID] => 145713
                                    [QUANTITY] => 1
                                    [WEIGHT] => 0.00
                                    [DELAY] => N
                                    [CAN_BUY] => Y
                                    [PRICE] => 4954
                                    [CUSTOM_PRICE] => N
                                    [BASE_PRICE] => 4954
                                    [PRODUCT_PRICE_ID] => 30797097
                                    [PRICE_TYPE_ID] => 3
                                    [CURRENCY] => RUB
                                    [BARCODE_MULTI] => N
                                    [RESERVED] => N
                                    [RESERVE_QUANTITY] => 
                                    [NAME] => Мойка для кухни Dr. Gans Smart ОЛИВИЯ-620 (25.150.B0620.401)
                                    [CATALOG_XML_ID] => catalog-3bf1763a-cc10-4dd0-86c5-23886628db66#
                                    [VAT_RATE] => 0
                                    [NOTES] => Ваша цена
                                    [DISCOUNT_PRICE] => 0
                                    [PRODUCT_PROVIDER_CLASS] => CCatalogProductProvider
                                    [CALLBACK_FUNC] => 
                                    [ORDER_CALLBACK_FUNC] => 
                                    [PAY_CALLBACK_FUNC] => 
                                    [CANCEL_CALLBACK_FUNC] => 
                                    [DIMENSIONS] => a:3:{s:5:"WIDTH";N;s:6:"HEIGHT";N;s:6:"LENGTH";N;}
                                    [TYPE] => 
                                    [SET_PARENT_ID] => 
                                    [DETAIL_PAGE_URL] => /products/moyka_dlya_kukhni_dr_gans_smart_oliviya_620/
                                    [FUSER_ID] => 477110
                                    [MEASURE_CODE] => 796
                                    [MEASURE_NAME] => шт
                                    [ORDER_ID] => 
                                    [DATE_INSERT] => Bitrix\Main\Type\DateTime Object
                                        (
                                            [value:protected] => DateTime Object
                                                (
                                                    [date] => 2025-02-10 17:36:37.000000
                                                    [timezone_type] => 3
                                                    [timezone] => Asia/Yekaterinburg
                                                )

                                            [userTimeEnabled:protected] => 1
                                        )

                                    [DATE_UPDATE] => Bitrix\Main\Type\DateTime Object
                                        (
                                            [value:protected] => DateTime Object
                                                (
                                                    [date] => 2025-02-10 17:36:37.000000
                                                    [timezone_type] => 3
                                                    [timezone] => Asia/Yekaterinburg
                                                )

                                            [userTimeEnabled:protected] => 1
                                        )

                                    [PRODUCT_XML_ID] => fa4c4057-004d-11ea-ab6d-00259087b6a3#fa4c4057-004d-11ea-ab6d-00259087b6a3
                                    [SUBSCRIBE] => N
                                    [RECOMMENDATION] => 
                                    [VAT_INCLUDED] => N
                                    [SORT] => 2900
                                    [DATE_REFRESH] => 
                                    [DISCOUNT_NAME] => 
                                    [DISCOUNT_VALUE] => 
                                    [DISCOUNT_COUPON] => 
                                    [XML_ID] => bx_67a9f2d5d566e
                                    [MARKING_CODE_GROUP] => 
                                    [PRICE_FORMATED] => 4 954 ₽
                                    [WEIGHT_FORMATED] => 0 кг
                                    [DISCOUNT_PRICE_PERCENT] => 0
                                    [DISCOUNT_PRICE_PERCENT_FORMATED] => 0%
                                    [BASE_PRICE_FORMATED] => 4 954 ₽
                                    [PROPS] => Array
                                        (
                                        )

                                    [SUM_NUM] => 4954
                                    [SUM] => 4 954 ₽
                                    [SUM_BASE] => 4954
                                    [SUM_BASE_FORMATED] => 4 954 ₽
                                    [CATALOG_QUANTITY] => 1
                                    [PREVIEW_PICTURE] => 2590827
                                    [DETAIL_PICTURE] => 2590828
                                    [PROPERTY_COLOR_REF_VALUE] => 0bdd0e62-e1c6-11e8-86eb-00155d00c800
                                    [PROPERTY_COLOR_REF_VALUE_ID] => 570340452
                                    [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE] => 1
                                    [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE_ID] => 575335762
                                    [PROPERTY_CML2_MANUFACTURER_VALUE] => Dr. Gans Smart
                                    [PROPERTY_CML2_ARTICLE_VALUE] => 25.150.B0620.401
                                    [PREVIEW_PICTURE_SRC] => /upload/resize_cache/iblock/e22/160_160_1/rbd6w4urb922l5l88iihq0j2uw51th01.jpg
                                    [PREVIEW_PICTURE_SRC_2X] => /upload/resize_cache/iblock/e22/320_320_1/rbd6w4urb922l5l88iihq0j2uw51th01.jpg
                                    [PREVIEW_PICTURE_SRC_ORIGINAL] => /upload/iblock/e22/rbd6w4urb922l5l88iihq0j2uw51th01.jpg
                                    [DETAIL_PICTURE_SRC] => /upload/resize_cache/iblock/d68/160_160_1/hx85974pbbhz5hk1vzm5e80kt74hy94h.jpg
                                    [DETAIL_PICTURE_SRC_2X] => /upload/resize_cache/iblock/d68/320_320_1/hx85974pbbhz5hk1vzm5e80kt74hy94h.jpg
                                    [DETAIL_PICTURE_SRC_ORIGINAL] => /upload/iblock/d68/hx85974pbbhz5hk1vzm5e80kt74hy94h.jpg
                                    [MEASURE_TEXT] => шт
                                    [MEASURE] => 796
                                )

                            [actions] => Array
                                (
                                )

                            [columns] => Array
                                (
                                    [PROPS] => 
                                    [QUANTITY] => 1 шт
                                    [PROPERTY_COLOR_REF_VALUE] => Array
                                        (
                                            [0] => Array
                                                (
                                                    [type] => value
                                                    [value] => 0bdd0e62-e1c6-11e8-86eb-00155d00c800
                                                )

                                        )

                                    [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE] => Array
                                        (
                                            [0] => Array
                                                (
                                                    [type] => value
                                                    [value] => 1
                                                )

                                        )

                                    [PROPERTY_CML2_MANUFACTURER_VALUE] => Array
                                        (
                                            [0] => Array
                                                (
                                                    [type] => value
                                                    [value] => Dr. Gans Smart
                                                )

                                        )

                                    [PROPERTY_CML2_ARTICLE_VALUE] => Array
                                        (
                                            [0] => Array
                                                (
                                                    [type] => value
                                                    [value] => 25.150.B0620.401
                                                )

                                        )

                                )

                            [editable] => 1
                        )

                    [153450] => Array
                        (
                            [id] => 153450
                            [data] => Array
                                (
                                    [ID] => 153450
                                    [LID] => s1
                                    [MODULE] => catalog
                                    [PRODUCT_ID] => 174528
                                    [QUANTITY] => 1
                                    [WEIGHT] => 0.00
                                    [DELAY] => N
                                    [CAN_BUY] => Y
                                    [PRICE] => 47761
                                    [CUSTOM_PRICE] => N
                                    [BASE_PRICE] => 47761
                                    [PRODUCT_PRICE_ID] => 31377380
                                    [PRICE_TYPE_ID] => 3
                                    [CURRENCY] => RUB
                                    [BARCODE_MULTI] => N
                                    [RESERVED] => N
                                    [RESERVE_QUANTITY] => 
                                    [NAME] => Кухонная вытяжка Kuppersberg DUDL 8 GB (6058)
                                    [CATALOG_XML_ID] => catalog-3bf1763a-cc10-4dd0-86c5-23886628db66#
                                    [VAT_RATE] => 0
                                    [NOTES] => Ваша цена
                                    [DISCOUNT_PRICE] => 0
                                    [PRODUCT_PROVIDER_CLASS] => CCatalogProductProvider
                                    [CALLBACK_FUNC] => 
                                    [ORDER_CALLBACK_FUNC] => 
                                    [PAY_CALLBACK_FUNC] => 
                                    [CANCEL_CALLBACK_FUNC] => 
                                    [DIMENSIONS] => a:3:{s:5:"WIDTH";N;s:6:"HEIGHT";N;s:6:"LENGTH";N;}
                                    [TYPE] => 
                                    [SET_PARENT_ID] => 
                                    [DETAIL_PAGE_URL] => /products/kukhonnaya_vytyazhka_kuppersberg_dudl_8_gb/
                                    [FUSER_ID] => 477110
                                    [MEASURE_CODE] => 796
                                    [MEASURE_NAME] => шт
                                    [ORDER_ID] => 
                                    [DATE_INSERT] => Bitrix\Main\Type\DateTime Object
                                        (
                                            [value:protected] => DateTime Object
                                                (
                                                    [date] => 2025-02-10 17:42:11.000000
                                                    [timezone_type] => 3
                                                    [timezone] => Asia/Yekaterinburg
                                                )

                                            [userTimeEnabled:protected] => 1
                                        )

                                    [DATE_UPDATE] => Bitrix\Main\Type\DateTime Object
                                        (
                                            [value:protected] => DateTime Object
                                                (
                                                    [date] => 2025-02-12 09:44:21.000000
                                                    [timezone_type] => 3
                                                    [timezone] => Asia/Yekaterinburg
                                                )

                                            [userTimeEnabled:protected] => 1
                                        )

                                    [PRODUCT_XML_ID] => a54ad99e-ddfb-11ea-ab99-00259087b6a3#a54ad99e-ddfb-11ea-ab99-00259087b6a3
                                    [SUBSCRIBE] => N
                                    [RECOMMENDATION] => 
                                    [VAT_INCLUDED] => N
                                    [SORT] => 3000
                                    [DATE_REFRESH] => 
                                    [DISCOUNT_NAME] => 
                                    [DISCOUNT_VALUE] => 
                                    [DISCOUNT_COUPON] => 
                                    [XML_ID] => bx_67a9f423b13ea
                                    [MARKING_CODE_GROUP] => 
                                    [PRICE_FORMATED] => 47 761 ₽
                                    [WEIGHT_FORMATED] => 0 кг
                                    [DISCOUNT_PRICE_PERCENT] => 0
                                    [DISCOUNT_PRICE_PERCENT_FORMATED] => 0%
                                    [BASE_PRICE_FORMATED] => 47 761 ₽
                                    [PROPS] => Array
                                        (
                                        )

                                    [SUM_NUM] => 47761
                                    [SUM] => 47 761 ₽
                                    [SUM_BASE] => 47761
                                    [SUM_BASE_FORMATED] => 47 761 ₽
                                    [CATALOG_QUANTITY] => 0
                                    [PREVIEW_PICTURE] => 2882003
                                    [DETAIL_PICTURE] => 2882004
                                    [PROPERTY_COLOR_REF_VALUE] => 179c5585-e25d-11e8-86eb-00155d00c800
                                    [PROPERTY_COLOR_REF_VALUE_ID] => 570336428
                                    [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE] => 10
                                    [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE_ID] => 575295916
                                    [PROPERTY_CML2_MANUFACTURER_VALUE] => Kuppersberg
                                    [PROPERTY_CML2_ARTICLE_VALUE] => 6058
                                    [PREVIEW_PICTURE_SRC] => /upload/resize_cache/iblock/70d/160_160_1/ny3rwoy0ed3orwg0rnuancg83hd2dq33.jpg
                                    [PREVIEW_PICTURE_SRC_2X] => /upload/resize_cache/iblock/70d/320_320_1/ny3rwoy0ed3orwg0rnuancg83hd2dq33.jpg
                                    [PREVIEW_PICTURE_SRC_ORIGINAL] => /upload/iblock/70d/ny3rwoy0ed3orwg0rnuancg83hd2dq33.jpg
                                    [DETAIL_PICTURE_SRC] => /upload/resize_cache/iblock/c6c/160_160_1/es3ady5q2ncg6749eiivouhp6gfoy3lz.jpg
                                    [DETAIL_PICTURE_SRC_2X] => /upload/resize_cache/iblock/c6c/320_320_1/es3ady5q2ncg6749eiivouhp6gfoy3lz.jpg
                                    [DETAIL_PICTURE_SRC_ORIGINAL] => /upload/iblock/c6c/es3ady5q2ncg6749eiivouhp6gfoy3lz.jpg
                                    [MEASURE_TEXT] => шт
                                    [MEASURE] => 796
                                )

                            [actions] => Array
                                (
                                )

                            [columns] => Array
                                (
                                    [PROPS] => 
                                    [QUANTITY] => 1 шт
                                    [PROPERTY_COLOR_REF_VALUE] => Array
                                        (
                                            [0] => Array
                                                (
                                                    [type] => value
                                                    [value] => 179c5585-e25d-11e8-86eb-00155d00c800
                                                )

                                        )

                                    [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE] => Array
                                        (
                                            [0] => Array
                                                (
                                                    [type] => value
                                                    [value] => 10
                                                )

                                        )

                                    [PROPERTY_CML2_MANUFACTURER_VALUE] => Array
                                        (
                                            [0] => Array
                                                (
                                                    [type] => value
                                                    [value] => Kuppersberg
                                                )

                                        )

                                    [PROPERTY_CML2_ARTICLE_VALUE] => Array
                                        (
                                            [0] => Array
                                                (
                                                    [type] => value
                                                    [value] => 6058
                                                )

                                        )

                                )

                            [editable] => 1
                        )

                    [153836] => Array
                        (
                            [id] => 153836
                            [data] => Array
                                (
                                    [ID] => 153836
                                    [LID] => s1
                                    [MODULE] => catalog
                                    [PRODUCT_ID] => 137846
                                    [QUANTITY] => 1
                                    [WEIGHT] => 32000.00
                                    [DELAY] => N
                                    [CAN_BUY] => Y
                                    [PRICE] => 30837
                                    [CUSTOM_PRICE] => N
                                    [BASE_PRICE] => 30837
                                    [PRODUCT_PRICE_ID] => 27855629
                                    [PRICE_TYPE_ID] => 3
                                    [CURRENCY] => RUB
                                    [BARCODE_MULTI] => N
                                    [RESERVED] => N
                                    [RESERVE_QUANTITY] => 
                                    [NAME] => Посудомоечная машина Lex PM 4562 B (CHMI000300)
                                    [CATALOG_XML_ID] => catalog-3bf1763a-cc10-4dd0-86c5-23886628db66#
                                    [VAT_RATE] => 0
                                    [NOTES] => Ваша цена
                                    [DISCOUNT_PRICE] => 0
                                    [PRODUCT_PROVIDER_CLASS] => CCatalogProductProvider
                                    [CALLBACK_FUNC] => 
                                    [ORDER_CALLBACK_FUNC] => 
                                    [PAY_CALLBACK_FUNC] => 
                                    [CANCEL_CALLBACK_FUNC] => 
                                    [DIMENSIONS] => a:3:{s:5:"WIDTH";N;s:6:"HEIGHT";N;s:6:"LENGTH";N;}
                                    [TYPE] => 
                                    [SET_PARENT_ID] => 
                                    [DETAIL_PAGE_URL] => /products/posudomoechnaya_mashina_lex_pm_4562_b/
                                    [FUSER_ID] => 477110
                                    [MEASURE_CODE] => 796
                                    [MEASURE_NAME] => шт
                                    [ORDER_ID] => 
                                    [DATE_INSERT] => Bitrix\Main\Type\DateTime Object
                                        (
                                            [value:protected] => DateTime Object
                                                (
                                                    [date] => 2025-02-12 12:55:00.000000
                                                    [timezone_type] => 3
                                                    [timezone] => Asia/Yekaterinburg
                                                )

                                            [userTimeEnabled:protected] => 1
                                        )

                                    [DATE_UPDATE] => Bitrix\Main\Type\DateTime Object
                                        (
                                            [value:protected] => DateTime Object
                                                (
                                                    [date] => 2025-02-12 12:55:00.000000
                                                    [timezone_type] => 3
                                                    [timezone] => Asia/Yekaterinburg
                                                )

                                            [userTimeEnabled:protected] => 1
                                        )

                                    [PRODUCT_XML_ID] => 55b299cc-37b9-11ec-abea-00259087b6a3#55b299cc-37b9-11ec-abea-00259087b6a3
                                    [SUBSCRIBE] => N
                                    [RECOMMENDATION] => 
                                    [VAT_INCLUDED] => N
                                    [SORT] => 3100
                                    [DATE_REFRESH] => 
                                    [DISCOUNT_NAME] => 
                                    [DISCOUNT_VALUE] => 
                                    [DISCOUNT_COUPON] => 
                                    [XML_ID] => bx_67ac53d43a61f
                                    [MARKING_CODE_GROUP] => 
                                    [PRICE_FORMATED] => 30 837 ₽
                                    [WEIGHT_FORMATED] => 32 кг
                                    [DISCOUNT_PRICE_PERCENT] => 0
                                    [DISCOUNT_PRICE_PERCENT_FORMATED] => 0%
                                    [BASE_PRICE_FORMATED] => 30 837 ₽
                                    [PROPS] => Array
                                        (
                                        )

                                    [SUM_NUM] => 30837
                                    [SUM] => 30 837 ₽
                                    [SUM_BASE] => 30837
                                    [SUM_BASE_FORMATED] => 30 837 ₽
                                    [CATALOG_QUANTITY] => 11
                                    [PREVIEW_PICTURE] => 2890954
                                    [DETAIL_PICTURE] => 2890955
                                    [PROPERTY_COLOR_REF_VALUE] => a0429861-e267-11e8-86eb-00155d00c800
                                    [PROPERTY_COLOR_REF_VALUE_ID] => 574763348
                                    [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE] => 0
                                    [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE_ID] => 575398224
                                    [PROPERTY_CML2_MANUFACTURER_VALUE] => Lex
                                    [PROPERTY_CML2_MANUFACTURER_VALUE_ID] => 
                                    [PROPERTY_CML2_MANUFACTURER_ENUM_ID] => 
                                    [PROPERTY_KATEGORIYA_TOVARA_VALUE] => 
                                    [PROPERTY_KATEGORIYA_TOVARA_VALUE_ID] => 
                                    [PROPERTY_KATEGORIYA_TOVARA_ENUM_ID] => 
                                    [PROPERTY_CML2_ARTICLE_VALUE] => CHMI000300
                                    [PROPERTY_CML2_ARTICLE_VALUE_ID] => 
                                    [PROPERTY_TIP_USTANOVKI_VALUE] => Встраиваемый
                                    [PROPERTY_TIP_USTANOVKI_VALUE_ID] => 575398214
                                    [PROPERTY_TIP_USTANOVKI_ENUM_ID] => 126502
                                    [PREVIEW_PICTURE_SRC] => /upload/resize_cache/iblock/af3/160_160_1/x4cuhm6iu8xbwjbfi56v3rihpbnef5ru.jpg
                                    [PREVIEW_PICTURE_SRC_2X] => /upload/resize_cache/iblock/af3/320_320_1/x4cuhm6iu8xbwjbfi56v3rihpbnef5ru.jpg
                                    [PREVIEW_PICTURE_SRC_ORIGINAL] => /upload/iblock/af3/x4cuhm6iu8xbwjbfi56v3rihpbnef5ru.jpg
                                    [DETAIL_PICTURE_SRC] => /upload/resize_cache/iblock/f5d/160_160_1/tx016z1bocfa0rn10e0xuzed53d481jt.jpg
                                    [DETAIL_PICTURE_SRC_2X] => /upload/resize_cache/iblock/f5d/320_320_1/tx016z1bocfa0rn10e0xuzed53d481jt.jpg
                                    [DETAIL_PICTURE_SRC_ORIGINAL] => /upload/iblock/f5d/tx016z1bocfa0rn10e0xuzed53d481jt.jpg
                                    [MEASURE_TEXT] => шт
                                    [MEASURE] => 796
                                )

                            [actions] => Array
                                (
                                )

                            [columns] => Array
                                (
                                    [PROPS] => 
                                    [QUANTITY] => 1 шт
                                    [PROPERTY_COLOR_REF_VALUE] => Array
                                        (
                                            [0] => Array
                                                (
                                                    [type] => value
                                                    [value] => a0429861-e267-11e8-86eb-00155d00c800
                                                )

                                        )

                                    [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE] => Array
                                        (
                                            [0] => Array
                                                (
                                                    [type] => value
                                                    [value] => 0
                                                )

                                        )

                                    [PROPERTY_CML2_MANUFACTURER_VALUE] => Array
                                        (
                                            [0] => Array
                                                (
                                                    [type] => value
                                                    [value] => Lex
                                                )

                                        )

                                    [PROPERTY_KATEGORIYA_TOVARA_VALUE] => Array
                                        (
                                            [0] => Array
                                                (
                                                    [type] => value
                                                    [value] => 
                                                )

                                        )

                                    [PROPERTY_CML2_ARTICLE_VALUE] => Array
                                        (
                                            [0] => Array
                                                (
                                                    [type] => value
                                                    [value] => CHMI000300
                                                )

                                        )

                                    [PROPERTY_TIP_USTANOVKI_VALUE] => Array
                                        (
                                            [0] => Array
                                                (
                                                    [type] => value
                                                    [value] => Встраиваемый
                                                )

                                        )

                                )

                            [editable] => 1
                        )

                    [153874] => Array
                        (
                            [id] => 153874
                            [data] => Array
                                (
                                    [ID] => 153874
                                    [LID] => s1
                                    [MODULE] => catalog
                                    [PRODUCT_ID] => 145710
                                    [QUANTITY] => 2
                                    [WEIGHT] => 0.00
                                    [DELAY] => N
                                    [CAN_BUY] => Y
                                    [PRICE] => 3562
                                    [CUSTOM_PRICE] => N
                                    [BASE_PRICE] => 3562
                                    [PRODUCT_PRICE_ID] => 30797081
                                    [PRICE_TYPE_ID] => 3
                                    [CURRENCY] => RUB
                                    [BARCODE_MULTI] => N
                                    [RESERVED] => N
                                    [RESERVE_QUANTITY] => 
                                    [NAME] => Мойка для кухни Dr. Gans Smart ОЛИВИЯ-420 (25.150.B0420.406)
                                    [CATALOG_XML_ID] => catalog-3bf1763a-cc10-4dd0-86c5-23886628db66#
                                    [VAT_RATE] => 0
                                    [NOTES] => Ваша цена
                                    [DISCOUNT_PRICE] => 0
                                    [PRODUCT_PROVIDER_CLASS] => CCatalogProductProvider
                                    [CALLBACK_FUNC] => 
                                    [ORDER_CALLBACK_FUNC] => 
                                    [PAY_CALLBACK_FUNC] => 
                                    [CANCEL_CALLBACK_FUNC] => 
                                    [DIMENSIONS] => a:3:{s:5:"WIDTH";N;s:6:"HEIGHT";N;s:6:"LENGTH";N;}
                                    [TYPE] => 
                                    [SET_PARENT_ID] => 
                                    [DETAIL_PAGE_URL] => /products/moyka_dlya_kukhni_dr_gans_smart_oliviya_420/
                                    [FUSER_ID] => 477110
                                    [MEASURE_CODE] => 796
                                    [MEASURE_NAME] => шт
                                    [ORDER_ID] => 
                                    [DATE_INSERT] => Bitrix\Main\Type\DateTime Object
                                        (
                                            [value:protected] => DateTime Object
                                                (
                                                    [date] => 2025-02-12 15:09:43.000000
                                                    [timezone_type] => 3
                                                    [timezone] => Asia/Yekaterinburg
                                                )

                                            [userTimeEnabled:protected] => 1
                                        )

                                    [DATE_UPDATE] => Bitrix\Main\Type\DateTime Object
                                        (
                                            [value:protected] => DateTime Object
                                                (
                                                    [date] => 2025-02-12 15:16:28.000000
                                                    [timezone_type] => 3
                                                    [timezone] => Asia/Yekaterinburg
                                                )

                                            [userTimeEnabled:protected] => 1
                                        )

                                    [PRODUCT_XML_ID] => 0fe66eae-004d-11ea-ab6d-00259087b6a3#3c71b6a0-004d-11ea-ab6d-00259087b6a3
                                    [SUBSCRIBE] => N
                                    [RECOMMENDATION] => 
                                    [VAT_INCLUDED] => N
                                    [SORT] => 3200
                                    [DATE_REFRESH] => 
                                    [DISCOUNT_NAME] => 
                                    [DISCOUNT_VALUE] => 
                                    [DISCOUNT_COUPON] => 
                                    [XML_ID] => bx_67ac7366f2bf8
                                    [MARKING_CODE_GROUP] => 
                                    [PRICE_FORMATED] => 3 562 ₽
                                    [WEIGHT_FORMATED] => 0 кг
                                    [DISCOUNT_PRICE_PERCENT] => 0
                                    [DISCOUNT_PRICE_PERCENT_FORMATED] => 0%
                                    [BASE_PRICE_FORMATED] => 3 562 ₽
                                    [PROPS] => Array
                                        (
                                        )

                                    [SUM_NUM] => 7124
                                    [SUM] => 7 124 ₽
                                    [SUM_BASE] => 7124
                                    [SUM_BASE_FORMATED] => 7 124 ₽
                                    [CATALOG_QUANTITY] => 0
                                    [PREVIEW_PICTURE] => 2590809
                                    [DETAIL_PICTURE] => 2590810
                                    [PROPERTY_COLOR_REF_VALUE] => ae86edd9-083c-11e9-88e1-00155d00c800
                                    [PROPERTY_COLOR_REF_VALUE_ID] => 570595167
                                    [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE] => 1
                                    [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE_ID] => 575335729
                                    [PROPERTY_CML2_MANUFACTURER_VALUE] => Dr. Gans Smart
                                    [PROPERTY_CML2_ARTICLE_VALUE] => 25.150.B0420.401
                                    [PREVIEW_PICTURE_SRC] => /upload/resize_cache/iblock/dd8/160_160_1/11lrl3f97jeug3q373g5hbika4idx8sy.jpg
                                    [PREVIEW_PICTURE_SRC_2X] => /upload/resize_cache/iblock/dd8/320_320_1/11lrl3f97jeug3q373g5hbika4idx8sy.jpg
                                    [PREVIEW_PICTURE_SRC_ORIGINAL] => /upload/iblock/dd8/11lrl3f97jeug3q373g5hbika4idx8sy.jpg
                                    [DETAIL_PICTURE_SRC] => /upload/resize_cache/iblock/e0a/160_160_1/3764xxqkdtjzsb1hydjywdwzdzmd3a20.jpg
                                    [DETAIL_PICTURE_SRC_2X] => /upload/resize_cache/iblock/e0a/320_320_1/3764xxqkdtjzsb1hydjywdwzdzmd3a20.jpg
                                    [DETAIL_PICTURE_SRC_ORIGINAL] => /upload/iblock/e0a/3764xxqkdtjzsb1hydjywdwzdzmd3a20.jpg
                                    [MEASURE_TEXT] => шт
                                    [MEASURE] => 796
                                )

                            [actions] => Array
                                (
                                )

                            [columns] => Array
                                (
                                    [PROPS] => 
                                    [QUANTITY] => 2 шт
                                    [PROPERTY_COLOR_REF_VALUE] => Array
                                        (
                                            [0] => Array
                                                (
                                                    [type] => value
                                                    [value] => ae86edd9-083c-11e9-88e1-00155d00c800
                                                )

                                        )

                                    [PROPERTY_OSTATOK_POSTAVSHCHIKA_VALUE] => Array
                                        (
                                            [0] => Array
                                                (
                                                    [type] => value
                                                    [value] => 1
                                                )

                                        )

                                    [PROPERTY_CML2_MANUFACTURER_VALUE] => Array
                                        (
                                            [0] => Array
                                                (
                                                    [type] => value
                                                    [value] => Dr. Gans Smart
                                                )

                                        )

                                    [PROPERTY_CML2_ARTICLE_VALUE] => Array
                                        (
                                            [0] => Array
                                                (
                                                    [type] => value
                                                    [value] => 25.150.B0420.401
                                                )

                                        )

                                )

                            [editable] => 1
                        )

                )

        )

    [USER_ACCOUNT] => 
    [ITEMS_DIMENSIONS] => Array
        (
            [0] => Array
                (
                    [WIDTH] => 
                    [HEIGHT] => 
                    [LENGTH] => 
                )

            [1] => Array
                (
                    [WIDTH] => 
                    [HEIGHT] => 
                    [LENGTH] => 
                )

            [2] => Array
                (
                    [WIDTH] => 
                    [HEIGHT] => 
                    [LENGTH] => 
                )

            [3] => Array
                (
                    [WIDTH] => 
                    [HEIGHT] => 
                    [LENGTH] => 
                )

            [4] => Array
                (
                    [WIDTH] => 
                    [HEIGHT] => 
                    [LENGTH] => 
                )

            [5] => Array
                (
                    [WIDTH] => 
                    [HEIGHT] => 
                    [LENGTH] => 
                )

            [6] => Array
                (
                    [WIDTH] => 
                    [HEIGHT] => 
                    [LENGTH] => 
                )

            [7] => Array
                (
                    [WIDTH] => 
                    [HEIGHT] => 
                    [LENGTH] => 
                )

            [8] => Array
                (
                    [WIDTH] => 
                    [HEIGHT] => 
                    [LENGTH] => 
                )

            [9] => Array
                (
                    [WIDTH] => 
                    [HEIGHT] => 
                    [LENGTH] => 
                )

        )

    [MAX_DIMENSIONS] => Array
        (
            [0] => 0
            [1] => 0
            [2] => 0
        )

    [BUYER_STORE] => 0
    [STORE_LIST] => Array
        (
            [14] => Array
                (
                    [ID] => 14
                    [TITLE] => Центральный склад
                    [ADDRESS] => Екатеринбург
                    [DESCRIPTION] => 
                    [IMAGE_ID] => 
                    [PHONE] => 
                    [SCHEDULE] => 
                    [GPS_N] => 0
                    [GPS_S] => 0
                    [ISSUING_CENTER] => Y
                    [SITE_ID] => 
                )

            [8] => Array
                (
                    [ID] => 8
                    [TITLE] => Склад Тюмень
                    [ADDRESS] => Тюмень
                    [DESCRIPTION] => 
                    [IMAGE_ID] => 
                    [PHONE] => 
                    [SCHEDULE] => 
                    [GPS_N] => 0
                    [GPS_S] => 0
                    [ISSUING_CENTER] => Y
                    [SITE_ID] => 
                )

        )

    [DELIVERY_EXTRA] => Array
        (
        )

    [USE_VAT] => 
    [VAT_RATE] => 0
    [TAX_LIST] => Array
        (
        )

    [PRICE_WITHOUT_DISCOUNT_VALUE] => 628210
    [PRICE_WITHOUT_DISCOUNT] => 628 210 ₽
    [DISCOUNT_PRICE_FORMATED] => 0 ₽
    [ORDER_TOTAL_PRICE] => 628210
    [USER_CONSENT_PROPERTY_DATA] => Array
        (
            [0] => ФИО
            [1] => E-Mail
            [2] => Телефон
            [3] => Индекс
            [4] => Город
            [5] => Город
            [6] => Адрес доставки
            [7] => Название компании
            [8] => Юридический адрес
            [9] => ИНН
            [10] => КПП
            [11] => Контактное лицо
            [12] => E-Mail
            [13] => Телефон
            [14] => Факс
            [15] => Индекс
            [16] => Город
            [17] => Город
            [18] => Адрес доставки
        )

    [LOCATIONS] => Array
        (
            [6] => Array
                (
                    [template] => search
                    [output] => Array
                        (
                            [0] => 	


				


			
			
Екатеринбург, Свердловская область, Урал, Россия
Екатеринбург


			
			
			
			

		


		

		

		

					


	


	


                        )

                    [showAlt] => 1
                    [lastValue] => 0000812044
                    [coordinates] => Array
                        (
                            [LONGITUDE] => 0.000000
                            [LATITUDE] => 0.000000
                        )

                )

        )

    [USER_VALS] => Array
        (
            [PERSON_TYPE_ID] => 1
            [PERSON_TYPE_OLD] => 
            [PAY_SYSTEM_ID] => 16
            [DELIVERY_ID] => 2
            [ORDER_PROP] => Array
                (
                    [1] => Alto Promo
                    [20] => 
                    [22] => 
                    [23] => 
                    [24] => 00:00
                    [25] => 23:00
                    [2] => admin@leadget.ru
                    [3] => +7 (999) 999 99 99
                    [4] => 620000
                    [6] => 0000812044
                    [5] => Москва
                    [7] => Екатеринбург
                )

            [DELIVERY_LOCATION] => 
            [TAX_LOCATION] => 
            [PAYER_NAME] => 
            [USER_EMAIL] => 
            [PROFILE_NAME] => 
            [PAY_CURRENT_ACCOUNT] => 
            [CONFIRM_ORDER] => N
            [FINAL_STEP] => 
            [ORDER_DESCRIPTION] => 
            [PROFILE_ID] => 2513
            [PROFILE_CHANGE] => 
            [DELIVERY_LOCATION_ZIP] => 
            [ZIP_PROPERTY_CHANGED] => Y
            [QUANTITY_LIST] => Array
                (
                    [153873] => 1
                    [153267] => 1
                    [153268] => 1
                    [153269] => 1
                    [152196] => 3
                    [153446] => 1
                    [153447] => 1
                    [153450] => 1
                    [153836] => 1
                    [153874] => 2
                )

            [USE_PRELOAD] => 1
            [DELIVERY_EXTRA_SERVICES] => Array
                (
                    [2] => Array
                        (
                        )

                )

            [LAST_ORDER_DATA] => Array
                (
                    [PERSON_TYPE_ID] => 1
                    [PAY_SYSTEM_ID] => 16
                    [DELIVERY_ID] => 2
                    [DELIVERY_EXTRA_SERVICES] => Array
                        (
                            [2] => Array
                                (
                                )

                        )

                )

        )

    [IS_CREDIT_6] => 
    [IS_CREDIT_3] => 
    [IS_CREDIT] => 
    [IS_TINK] => 
)