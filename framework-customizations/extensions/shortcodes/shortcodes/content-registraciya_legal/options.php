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
    'top_text' => array(
        'type' => 'addable-popup',
        'label' => __('Текстовый блок', '{domain}'),
        'desc'  => __('добавление текстового блока', '{domain}'),
        'template' => '{{- text }}',
        'popup-title' => null,
        'size' => 'small', // small, medium, large
        'limit' => 10, // limit the number of popup`s that can be added
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'text' => array(
                'type' => 'textarea',
                'label' => __('Текст контента', '{domain}'),
                'value' => '',
            )
        ),
    ),


    'slogan' => array(
        'type' => 'text',
        'label' => __('Слоган', '{domain}'),
        'desc'  => __('Добавить слоган', '{domain}'),
    ),
    'table' => array(
        'type' => 'addable-popup',
        'label' => __('Таблицы', '{domain}'),
        'desc'  => __('добавление таблицы', '{domain}'),
        'template' => '{{- title }}',
        'popup-title' => null,
        'size' => 'small', // small, medium, large
        'limit' => 20, // limit the number of popup`s that can be added
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'title' => array(
                'type' => 'text',
                'label' => __('Название таблицы ', '{domain}'),
                'value' => '',
            ),
            'css' => array(
                'type' => 'text',
                'label' => __('Css для таблицы', '{domain}'),
                'desc'  => __('Добавить style', '{domain}'),
            ),
            'tr' => array(
                'type' => 'addable-popup',
                'label' => __('Добавление строки для шапки таблицы', '{domain}'),
                'desc'  => __('добавление строки', '{domain}'),
                'template' => '{{- title }}',
                'popup-title' => null,
                'size' => 'small', // small, medium, large
                'limit' => 20, // limit the number of popup`s that can be added
                'add-button-text' => __('Добавить', '{domain}'),
                'sortable' => true,
                'popup-options' => array(
                    'title' => array(
                        'type' => 'text',
                        'label' => __('Строка для  шапки ', '{domain}'),
                        'value' => '',
                    ),
                    'th' => array(
                        'type' => 'addable-popup',
                        'label' => __('Добавление шапки таблицы', '{domain}'),
                        'desc'  => __('добавление заголовка столбца', '{domain}'),
                        'template' => '{{- title }}',
                        'popup-title' => null,
                        'size' => 'small', // small, medium, large
                        'limit' => 20, // limit the number of popup`s that can be added
                        'add-button-text' => __('Добавить', '{domain}'),
                        'sortable' => true,
                        'popup-options' => array(
                            'title' => array(
                                'type' => 'textarea',
                                'label' => __('Заголовок столбца таблицы', '{domain}'),
                                'value' => '',
                            )
                        ),
                    ),

                ),
            ),
            'trd' => array(
                'type' => 'addable-popup',
                'label' => __('Добавление строки контента', '{domain}'),
                'desc'  => __('добавление строки', '{domain}'),
                'template' => '{{- title }}',
                'popup-title' => null,
                'size' => 'small', // small, medium, large
                'limit' => 20, // limit the number of popup`s that can be added
                'add-button-text' => __('Добавить', '{domain}'),
                'sortable' => true,
                'popup-options' => array(
                    'title' => array(
                        'type' => 'text',
                        'label' => __('Заголовок ', '{domain}'),
                        'value' => '',
                    ),
                    'td' => array(
                        'type' => 'addable-popup',
                        'label' => __('текст таблицы', '{domain}'),
                        'desc'  => __('добавление текста', '{domain}'),
                        'template' => '{{- text }}',
                        'popup-title' => null,
                        'size' => 'small', // small, medium, large
                        'limit' => 20, // limit the number of popup`s that can be added
                        'add-button-text' => __('Добавить', '{domain}'),
                        'sortable' => true,
                        'popup-options' => array(
                            'text' => array(
                                'type' => 'textarea',
                                'label' => __('Текст контента', '{domain}'),
                                'value' => '',
                            )
                        )
                    )

                )
            ),
            'price' => array(
                'type' => 'textarea',
                'label' => __('Цена', '{domain}'),
                'value' => '',
            ),
        )
    ),
   
    'list_items' =>array(
        'type' => 'addable-popup',
        'label' => __('Список документов', '{domain}'),
        'desc'  => __('добавление текстового блока', '{domain}'),
        'template' => '{{- title }}',
        'popup-title' => null,
        'size' => 'small', // small, medium, large
        'limit' => 10, // limit the number of popup`s that can be added
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'title' => array(
                'type' => 'textarea',
                'label' => __('Заголовок контента', '{domain}'),
                'value' => '',
            ),
            'list' => array(
                'type' => 'addable-popup',
                'label' => __('Список ', '{domain}'),
                'desc'  => __('добавление текстового блока', '{domain}'),
                'template' => '{{- text }}',
                'popup-title' => null,
                'size' => 'small', // small, medium, large
                'limit' => 10, // limit the number of popup`s that can be added
                'add-button-text' => __('Добавить', '{domain}'),
                'sortable' => true,
                'popup-options' => array(
                    'text' => array(
                        'type' => 'textarea',
                        'label' => __('Текст контента', '{domain}'),
                        'value' => ''
                     )
                )
        ),
    ),
    ),
    'banner' => array(
        'type' => 'addable-popup',
        'label' => __('Баннер', '{domain}'),
        'desc'  => __('добавление текста', '{domain}'),
        'template' => '{{- title }}',
        'popup-title' => null,
        'size' => 'small', // small, medium, large
        'limit' => 10, // limit the number of popup`s that can be added
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'title' => array(
                'type' => 'textarea',
                'label' => __('Заголовок', '{domain}'),
                'value' => '',
            ),
            'text' => array(
                'type' => 'textarea',
                'label' => __('Текст контента', '{domain}'),
                'value' => '',
            )
        ),
    )
];