<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

class PageMeta
{
    public function __construct()
    {
        add_action('carbon_fields_register_fields', [$this, 'customFields']);
    }

    public function customFields()
    {
        Container::make('post_meta', 'carbon_fields_container_global', 'Настройки лендинга')
            ->set_context('carbon_fields_after_title')
            ->where('post_type', '=', 'page')
            ->add_tab('Глобальные', [
                Field::make('text', 'phone', 'Телефон')
                    ->set_width(50),
                Field::make('text', 'mail', 'Электронная почта')
                    ->set_width(50),
                Field::make('text', 'opening_hours', 'Часы работы')
                    ->set_width(50),
                Field::make('text', 'address', 'Адрес')
                    ->set_width(50),
                Field::make('text', 'site_name', 'Название сайта')
                    ->set_width(50),
                Field::make('text', 'slogan', 'Слоган сайта')
                    ->set_width(50),
                Field::make('text', 'advantages_home_1', 'Преимущество 1 (на первом экране)')
                    ->set_width(50),
                Field::make('text', 'advantages_home_2', 'Преимущество 2 (на первом экране)')
                    ->set_width(50),
                Field::make('text', 'advantages_home_3', 'Преимущество 3 (на первом экране для версии 3)')
                ->set_width(50),    
                Field::make('text', 'title', 'SEO Заголовок сайта'),
                Field::make('text', 'description', 'SEO описание сайта'),
                Field::make('file', 'image_home', 'Картинка (на первом экране)')
                    ->set_value_type('url')
                    ->set_type(['image'])
            ])
            ->add_tab('Блоки', [
                Field::make('complex', 'blocks', 'Блоки с текстом')
                    ->setup_labels(['singular_name' => 'блок',])
                    ->add_fields([
                        Field::make('text', 'text', 'Текст')
                    ])
            ])
            ->add_tab('Подробно', [
                Field::make('checkbox', 'show_details', 'Показывать раздел "Подробно"?'),
                Field::make('text', 'details_title', 'Заголовок раздела')
                    ->set_width(50),
                Field::make('text', 'details_subtitle', 'Подзаголовок раздела')
                    ->set_width(50),
                Field::make('complex', 'details', 'Подробно')
                    ->setup_labels(['singular_name' => 'блок',])
                    ->add_fields([
                        Field::make('text', 'title', 'Заголовок')
                            ->set_width(50),
                        Field::make('textarea', 'description', 'Описание')
                            ->set_rows(3)
                            ->set_width(50),
                    ])
            ])
            ->add_tab('Почему мы', [
                Field::make('checkbox', 'show_why_we', 'Показывать раздел "Почему мы"?'),
                Field::make('text', 'why_we_title', 'Заголовок раздела')
                    ->set_width(50),
                Field::make('text', 'why_we_subtitle', 'Подзаголовок раздела')
                    ->set_width(50),
                Field::make('complex', 'why_we', 'Почему мы')
                    ->setup_labels(['singular_name' => 'блок',])
                    ->add_fields([
                        Field::make('file', 'image', 'Картинка')
                            ->set_value_type('url')
                            ->set_type(['image'])
                            ->set_width(15),
                        Field::make('text', 'title', 'Заголовок')
                            ->set_width(25),
                        Field::make('rich_text', 'description', 'Описание')
                            ->set_width(60),
                    ])
            ])
            ->add_tab('Доп.услуги', [
                Field::make('checkbox', 'show_additional_services', 'Показывать раздел "Дополнительные услуги"?'),
                Field::make('text', 'additional_services_title', 'Заголовок раздела')
                    ->set_width(50),
                Field::make('text', 'additional_services_subtitle', 'Подзаголовок раздела')
                    ->set_width(50),
                Field::make('complex', 'additional_services', 'Дополнительные услуги')
                    ->setup_labels(['singular_name' => 'блок',])
                    ->add_fields([
                        Field::make('file', 'image', 'Картинка')
                            ->set_value_type('url')
                            ->set_type(['image'])
                            ->set_width(50),
                        Field::make('text', 'title', 'Заголовок')
                            ->set_width(50),
                    ])
            ])
            ->add_tab('Как мы работаем', [
                Field::make('checkbox', 'show_work', 'Показывать раздел "Как мы работаем"?'),
                Field::make('text', 'work_title', 'Заголовок раздела')
                    ->set_width(50),
                Field::make('text', 'work_subtitle', 'Подзаголовок раздела')
                    ->set_width(50),
                Field::make('complex', 'work', 'Как мы работаем')
                    ->setup_labels(['singular_name' => 'блок',])
                    ->add_fields([
                        Field::make('file', 'image', 'Картинка')
                            ->set_value_type('url')
                            ->set_type(['image'])
                            ->set_width(15),
                        Field::make('text', 'title', 'Заголовок')
                            ->set_width(25),
                        Field::make('rich_text', 'description', 'Описание')
                            ->set_width(60),
                    ])
            ])
            ->add_tab('Калькулятор', [
                Field::make('checkbox', 'show_calculator', 'Показывать раздел "Калькулятор"?'),
                Field::make('text', 'calculator_title', 'Заголовок раздела')
                    ->set_width(50),
                Field::make('text', 'calculator_subtitle', 'Подзаголовок раздела')
                    ->set_width(50),
            ])
            ->add_tab('Блоки 2', [
                Field::make('text', 'blocks_two_title', 'Заголовок раздела'),
                Field::make('complex', 'blocks_two', 'Блоки с текстом')
                    ->setup_labels(['singular_name' => 'блок',])
                    ->add_fields([
                        Field::make('text', 'text', 'Текст')
                    ])
            ])
            ->add_tab('Гарантии', [
                Field::make('checkbox', 'show_guarantees', 'Показывать раздел "Гарантии"?'),
                Field::make('text', 'guarantees_title', 'Заголовок раздела')
                    ->set_width(50),
                Field::make('text', 'guarantees_subtitle', 'Подзаголовок раздела')
                    ->set_width(50),
                Field::make('text', 'guarantees_text_1', 'Текст (иконка с копилкой)'),
                Field::make('text', 'guarantees_text_2', 'Текст (иконка с дипломом)'),
                Field::make('text', 'guarantees_text_3', 'Текст (иконка с календарем)'),
                Field::make('text', 'guarantees_text_4', 'Текст (иконка с валютой)'),
                Field::make('text', 'guarantees_text_5', 'Текст (иконка с гарнитурой'),
            ])
            ->add_tab('Прогресс', [
                Field::make('checkbox', 'show_progress', 'Показывать раздел "Прогресс"?'),
                Field::make('text', 'progress_title', 'Заголовок раздела')
                    ->set_width(50),
                Field::make('text', 'progress_subtitle', 'Подзаголовок раздела')
                    ->set_width(50),
                Field::make('text', 'progress_text_1', 'Текст (иконка с копилкой)'),
                Field::make('text', 'progress_text_2', 'Текст (иконка с дипломом)'),
                Field::make('text', 'progress_text_3', 'Текст (иконка с календарем)'),
                Field::make('text', 'progress_text_4', 'Текст (иконка с валютой)'),
                Field::make('text', 'progress_text_5', 'Текст (иконка с гарнитурой'),
                Field::make('text', 'progress_text_6', 'Текст (иконка с гарнитурой'),
            ])
            ->add_tab('О нас', [
                Field::make('checkbox', 'show_about', 'Показывать раздел "О нас"?'),
                Field::make('text', 'about_title', 'Заголовок раздела')
                    ->set_width(50),
                Field::make('text', 'about_subtitle', 'Подзаголовок раздела')
                    ->set_width(50),
                Field::make('text', 'about_text_1', 'Текст (иконка с копилкой)'),
                Field::make('text', 'about_text_2', 'Текст (иконка с дипломом)'),
                Field::make('text', 'about_text_3', 'Текст (иконка с календарем)'),
                Field::make('text', 'about_text_4', 'Текст (иконка с валютой)'),
                Field::make('text', 'about_text_5', 'Текст (иконка с гарнитурой'),
                Field::make('text', 'about_text_6', 'Текст (иконка с гарнитурой'),
            ])
            ->add_tab('Какие гарантии', [
                Field::make('checkbox', 'show_garantien', 'Показывать раздел "Какие гарантии"?'),
                Field::make('text', 'garantien_title', 'Заголовок раздела')
                    ->set_width(50),
                Field::make('text', 'garantien_subtitle', 'Подзаголовок раздела')
                    ->set_width(50),
                Field::make('text', 'garantien_heading_1', 'Заголовок 1'),
                Field::make('text', 'garantien_desc_1', 'Описание 1'),
                Field::make('text', 'garantien_heading_2', 'Заголовок 2'),
                Field::make('text', 'garantien_desc_2', 'Описание 2'),
                Field::make('text', 'garantien_heading_3', 'Заголовок 3'),
                Field::make('text', 'garantien_desc_3', 'Описание 3'),
                Field::make('text', 'garantien_heading_4', 'Заголовок 4'),
                Field::make('text', 'garantien_desc_4', 'Описание 4'),

            ])
            ->add_tab('Скидки', [
                Field::make('checkbox', 'show_rabbate', 'Показывать раздел "Скидки"?'),
                Field::make('text', 'rabbate_title', 'Заголовок раздела')
                    ->set_width(50),
                Field::make('text', 'rabbate_subtitle', 'Подзаголовок раздела')
                    ->set_width(50),
                Field::make('text', 'rabbate_heading_1', 'Заголовок 1'),
                Field::make('text', 'rabbate_desc_1', 'Описание 1'),
                Field::make('text', 'rabbate_heading_2', 'Заголовок 2'),
                Field::make('text', 'rabbate_desc_2', 'Описание 2'),
                Field::make('text', 'rabbate_heading_3', 'Заголовок 3'),
                Field::make('text', 'rabbate_desc_3', 'Описание 3'),
            ])
            ->add_tab('Специальности', [
                Field::make('checkbox', 'show_specialties', 'Показывать раздел "Специальности"?'),
                Field::make('text', 'specialties_title', 'Заголовок раздела')
                    ->set_width(50),
                Field::make('text', 'specialties_subtitle', 'Подзаголовок раздела')
                    ->set_width(50),
            ])
            ->add_tab('Лендинги', [
                Field::make('text', 'landing_title', 'Заголовок раздела')
                    ->set_width(50),
                Field::make('text', 'landing_subtitle', 'Подзаголовок раздела')
                    ->set_width(50),
            ])
            ->add_tab('Автор', [
                Field::make('checkbox', 'show_author', 'Показывать раздел "Автор"?'),
                Field::make('text', 'author_title', 'Заголовок раздела')
                    ->set_width(50),
                Field::make('text', 'author_subtitle', 'Подзаголовок раздела')
                    ->set_width(50),
                Field::make('textarea', 'author_text', 'Текст')
                    ->set_rows(3),
                Field::make('text', 'author_num_1', 'Цифра у Bachelors')
                    ->set_width(33),
                Field::make('text', 'author_num_2', 'Цифра у Magister')
                    ->set_width(33),
                Field::make('text', 'author_num_3', 'Цифра у Doktoren')
                    ->set_width(33),
            ])
            ->add_tab('Отзывы', [
                Field::make('checkbox', 'show_reviews', 'Показывать раздел "Отзывы"?'),
                Field::make('text', 'reviews_title', 'Заголовок раздела')
                    ->set_width(50),
                Field::make('text', 'reviews_subtitle', 'Подзаголовок раздела')
                    ->set_width(50),
                Field::make('complex', 'reviews', 'Отзывы')
                    ->setup_labels(['singular_name' => 'отзыв',])
                    ->add_fields([
                        Field::make('text', 'title', 'Имя')
                            ->set_width(50),
                        Field::make('textarea', 'description', 'Отзыв')
                            ->set_width(50),
                    ])
            ])
            ->add_tab('FAQ', [
                Field::make('checkbox', 'show_faq', 'Показывать раздел "FAQ"?'),
                Field::make('text', 'faq_title', 'Заголовок раздела')
                    ->set_width(50),
                Field::make('text', 'faq_subtitle', 'Подзаголовок раздела')
                    ->set_width(50),
                Field::make('complex', 'faq', 'FAQ')
                    ->setup_labels(['singular_name' => 'faq'])
                    ->add_fields([
                        Field::make('text', 'title', 'Вопрос')
                            ->set_width(50),
                        Field::make('rich_text', 'description', 'Ответ')
                            ->set_width(50),
                    ])
            ])
        ;
    }
}

new PageMeta();