<?php if (!defined('FW')) {
    die('Forbidden');
}
/**
 * Опции (поля) шорткода
 * @link Список всех возможных опицй http://manual.unyson.io/en/latest/options/built-in/introduction.html
 */
$options = [
    //ключ - slug опции, к которому будем обращаться во view
    //значение - массив конфигураций для опции
    'banner' => array(
        'type'=> 'addable-popup',
        'label'=> __('Главный баннер', '{domain}'),
        'desc' => __('content баннера', '{domain}'),
        'template' => '{{- title }}',
        'popup-title' => null,
        'size' => 'small', // small, medium, large
        'limit' => 0, // limit the number of popup`s that can be added
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'title' => array(
                'label' => __('Слоган слайда', '{domain}'),
                'type' => 'text',
                'value' => '',
            ),
            'subtitle' => array(
                'label' => __('Под слоган слайда', '{domain}'),
                'type' => 'textarea',
                'value' => '',
            ),


        )

    ),
    'contact_block' => array(
        'type' => 'addable-popup',
        'label' => __('Контакт блок', '{domain}'),
        'desc'  => __('добавление инфо', '{domain}'),
        'popup-title' => null,
        'size' => 'large', // small, medium, large
        'limit' => 20, // limit the number of popup`s that can be added
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'contact_title' => array(
                'type' => 'text',
                'label' => __('Заголовок', '{domain}'),
                'desc'  => __('Заголовок блока', '{domain}'),
                'value' => '',
            ),
            'icons-link'=> array(
                'type' => 'addable-popup',
                'label' => __('данные', '{domain}'),
                'desc'  => __('добавление данных', '{domain}'),
                'popup-title' => null,
                'size' => 'large', // small, medium, large
                'limit' => 10, // limit the number of popup`s that can be added
                'add-button-text' => __('Добавить', '{domain}'),
                'sortable' => true,
                'popup-options' => array(
                    'icons' => array(
                        'type'  => 'icon',
                        'value' => '',
                        'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                        'label' => __('Label', 'fw'),
                        'desc'  => __('Description', 'fw'),
                        'help'  => __('Help tip', 'fw'),
                    ),
                    'contact_description' => array(
                        'type' => 'text',
                        'label' => __('Описание иконки', '{domain}'),
                        'desc'  => __('Описание иконки', '{domain}'),
                        'value' => '',
                    ),
                ),
                
            

            ),
        ),
        


    
),
    'address_block' => array(
        'type' => 'addable-popup',
        'label' => __('Адрес блок', '{domain}'),
        'desc'  => __('добавление инфо', '{domain}'),
        'popup-title' => null,
        'size' => 'large', // small, medium, large
        'limit' => 10, // limit the number of popup`s that can be added
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'address_title' => array(
                'type' => 'text',
                'label' => __('Заголовок', '{domain}'),
                'desc'  => __('Заголовок блока', '{domain}'),
                'value' => '',
            ),
            'address-link'=> array(
                'type' => 'addable-popup',
                'label' => __('данные', '{domain}'),
                'desc'  => __('добавление данных', '{domain}'),
                'size' => 'large', // small, medium, large
                'limit' => 10, // limit the number of popup`s that can be added
                'add-button-text' => __('Добавить', '{domain}'),
                'sortable' => true,
                'popup-options' => array(
                    'icons' => array(
                        'type'  => 'icon',
                        'value' => 'fa fa-map-marker',
                        'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                        'label' => __('Label', 'fw'),
                        'desc'  => __('Description', 'fw'),
                        'help'  => __('Help tip', 'fw'),
                    ),
                    'address_description' => array(
                        'type' => 'text',
                        'label' => __('Описание иконки', '{domain}'),
                        'desc'  => __('Описание иконки', '{domain}'),
                        'value' => '',
                    ),
                ),
                
            

        ),
    ),
    ),
'clock_block' => array(
    'type' => 'addable-popup',
    'label' => __('График работы блок', '{domain}'),
    'desc'  => __('добавление инфо', '{domain}'),
    'size' => 'large', // small, medium, large
    'limit' => 10, // limit the number of popup`s that can be added
    'add-button-text' => __('Добавить', '{domain}'),
    'sortable' => true,
    'popup-options' => array(
        'clock_title' => array(
            'type' => 'text',
            'label' => __('Заголовок', '{domain}'),
            'desc'  => __('Заголовок блока', '{domain}'),
            'value' => '',
        ),

        'clock-link'=> array(
            'type' => 'addable-popup',
            'label' => __('данные', '{domain}'),
            'desc'  => __('добавление данных', '{domain}'),
            'size' => 'large', // small, medium, large
            'limit' => 10, // limit the number of popup`s that can be added
            'add-button-text' => __('Добавить', '{domain}'),
            'sortable' => true,
            'popup-options' => array(
                'icons' => array(
                    'type'  => 'icon',
                    'value' => 'fa fa-clock-o',
                    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                    'label' => __('Label', 'fw'),
                    'desc'  => __('Description', 'fw'),
                    'help'  => __('Help tip', 'fw'),
                ),
                'clock_description' => array(
                    'type' => 'text',
                    'label' => __('Описание иконки', '{domain}'),
                    'desc'  => __('Описание иконки', '{domain}'),
                    'value' => '',
                ),
            ),
            
        

    ),
),
),

    'head_serv' => array(
        'type'=> 'addable-popup',
        'label'=> __('Добавить Заголовок и описание секции услуги', '{domain}'),
        'desc' => __('добавить', '{domain}'),
        'template' => '{{- title }}',
        'popup-title' => null,
        'size' => 'small', // small, medium, large
        'limit' => 0, // limit the number of popup`s that can be added
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'title' => array(
                'label' => __('Заголовок', '{domain}'),
                'type' => 'text',
                'value' => '',
            ),
            'descr' => array(
                'label' => __('описание', '{domain}'),
                'type' => 'textarea',
                'value' => '',
            ),


        )

    ),
    'service'=> array(
        'type' => 'addable-popup',
        'label' => __('Оказание услуг', '{domain}'),
        'desc'  => __('добавление услуг', '{domain}'),
        'template' => '{{- title }}',
        'popup-title' => null,
        'size' => 'small', // small, medium, large
        'limit' => 0, // limit the number of popup`s that can be added
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'photo' => array(
                'type' => 'upload',
                'label' => __('Фото', '{domain}'),
                'images_only' => true,
            ),

            'title' => array(
                'label' => __('Название услуги', '{domain}'),
                'type' => 'text',
                'value' => '',
            ),
            'descr' => array(
                'label' => __('Описание услуги', '{domain}'),
                'type' => 'textarea',
                'value' => '',
            ),
            'link' => array(
                'type' => 'text',
                'label' => __('Ссылка на страницу', '{domain}'),
                'descr' => __('добавление ссылки', '{domain}'),
                'value' => '',
            )

        ),
    ),
    'ocompany' => array(
        'type' => 'addable-popup',
        'label' => __('Секция о компании', '{domain}'),
        'desc'  => __('добавление описание', '{domain}'),
        'template' => '{{- text_block }}',
        'popup-title' => null,
        'size' => 'small', // small, medium, large
        'limit' => 0, // limit the number of popup`s that can be added
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'foto' => array(
                'type' => 'upload',
                'label' => __('Фото', '{domain}'),
                'images_only' => true,
            ),
            'text_block' => array(
                'type' => 'text',
                'label' => __('Заголовок секции', '{domain}'),
                'value' => '',
            ),
            'desc_block' => array(
                'type' => 'textarea',
                'label' => __('Описание секции', '{domain}'),
                'value' => '',
            ),
            'link_block' => array(
                'type' => 'text',
                'label' => __('Сcылка', '{domain}'),
                'value' => '',
            ),
        )
    ),
    'consulting' => array(
        'type' => 'addable-popup',
        'label' => __('Добавление заголовка бесплатная консультация', '{domain}'),
        'desc'  => __('добавление описание', '{domain}'),
        'template' => '{{- text_block }}',
        'popup-title' => null,
        'size' => 'small', // small, medium, large
        'limit' => 0, // limit the number of popup`s that can be added
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'text_block' => array(
                'type' => 'text',
                'label' => __('Заголовок секции', '{domain}'),
                'value' => '',
            ),
            'desc_block' => array(
                'type' => 'textarea',
                'label' => __('Описание секции', '{domain}'),
                'value' => '',
            ),
          
        )
    ),
];