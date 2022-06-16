<?php if (!defined('FW')) {
    die('Forbidden');
}
/**
 * Опции (поля) шорткода
 * @link Список всех возможных опицй http://manual.unyson.io/en/latest/options/built-in/introduction.html
 */
// $options = [
//     //ключ - slug опции, к которому будем обращаться во view
//     //значение - массив конфигураций для опции
//     'title' => array(
//         'type' => 'text',
//         'label' => __('Название блока', '{domain}'),
//         'desc'  => __('Название блока', '{domain}'),
//     ),
//     'iconslink'=> array(
//         'type' => 'addable-popup',
//         'label' => __('контактная информация', '{domain}'),
//         'desc'  => __('добавление данных', '{domain}'),
//         'popup-title' => null,
//         'size' => 'large', // small, medium, large
//         'limit' => 10, // limit the number of popup`s that can be added
//         'add-button-text' => __('Добавить', '{domain}'),
//         'sortable' => true,
//         'popup-options' => array(
//             'icons_contact' => array(
//                 'type'  => 'icon',
//                 'value' => '',
//                 'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
//                 'label' => __('Label', 'fw'),
//                 'desc'  => __('Description', 'fw'),
//                 'help'  => __('Help tip', 'fw'),
//             ),
//             'contact_description' => array(
//                 'type' => 'text',
//                 'label' => __('Описание иконки', '{domain}'),
//                 'desc'  => __('Описание иконки', '{domain}'),
//                 'value' => '',
//             ),
//         ),
//     ),
//     'social_block' => array(
//         'type' => 'addable-popup',
//         'label' => __('данные social icons', '{domain}'),
//         'desc'  => __('добавление ', '{domain}'),
//         'popup-title' => null,
//         'size' => 'large', // small, medium, large
//         'limit' => 20, // limit the number of popup`s that can be added
//         'add-button-text' => __('Добавить', '{domain}'),
//         'sortable' => true,
//         'popup-options' => array(
//             'icons' => array(
//                 'type'  => 'icon',
//                 'value' => '',
//                 'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
//                 'label' => __('Label', 'fw'),
//                 'desc'  => __('Description', 'fw'),
//                 'help'  => __('Help tip', 'fw'),
//             ),
//             'social_description' => array(
//                 'type' => 'text',
//                 'label' => __('Описание иконки', '{domain}'),
//                 'desc'  => __('Описание иконки', '{domain}'),
//                 'value' => '',
//             ),
//             'link' => array(
//                 'type' => 'text',
//                 'label' => __('Ссылка', '{domain}'),
//                 'desc'  => __('Ссылка на страницу', '{domain}'),
//                 'value' => '',
//             ),
//         ),
//     ),
// ];