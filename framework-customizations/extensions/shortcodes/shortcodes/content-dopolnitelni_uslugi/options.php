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
    'text' => array(
        'type' => 'text',
        'label' => __('Текстовый блок', '{domain}'),
        'desc'  => __('добавление текстового блока', '{domain}'),
    ),
    'list' => array(
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
                'type' => 'text',
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
];