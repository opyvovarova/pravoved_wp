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

    'price_box' => array(
        'type' => 'addable-popup',
        'label' => __('Блок услуги', '{domain}'),
        'desc'  => __('добавление контента', '{domain}'),
        'template' => '{{- title }}',
        'popup-title' => null,
        'size' => 'small', // small, medium, large
        'limit' => 0, // limit the number of popup`s that can be added
        'add-button-text' => __('Добавить', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'title' => array(
                'type' => 'text',
                'label' => __('Заголовок)', '{domain}'),
                'value' => '',
            ),

            'how' => array(
                'type' => 'text',
                'label' => __('Cколько дней', '{domain}'),
                'value' => '',
            ),
            'price' => array(
                'type' => 'text',
                'label' => __('Цена', '{domain}'),
                'value' => '',
            ),
            'list_price' => array(
                'type' => 'addable-popup',
                'label' => __('Список услуг', '{domain}'),
                'desc'  => __('добавление списка', '{domain}'),
                'template' => '{{- list }}',
                'popup-title' => false,
                'size' => 'large', // small, medium, large
                'limit' => 20, // limit the number of popup`s that can be added
                'add-button-text' => __('Добавить', '{domain}'),
                'sortable' => true,
                'popup-options' => array(
                    'list' => array(
                        'type' => 'textarea',
                        'label' => __('Текст контента', '{domain}'),
                        'value' => '',
                    )
                ),
            ),


        ),
    ),
    'slogan' => array(
        'type' => 'text',
        'label' => __('Слоган', '{domain}'),
        'desc'  => __('Добавить слоган', '{domain}'),
    )

];