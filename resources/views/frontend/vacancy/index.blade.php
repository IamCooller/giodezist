@extends('layouts.main')
@section('title')   @endsection
@section('description')   @endsection
@section('keywords')  @endsection
@section('content')
<section class="vacancy borderTop  bg-img-fix" style="background-image: url('img/backgorundFix/background19.svg');">
            <div class="container" data-aos="fade-down">

                <ul class="breadcrumb">
                    <li><a href="http://127.0.0.1:8000">Главная</a></li>
                    <li><span>Вакансии</span></li>
                </ul>
                <div class="vacancy__wrapper">
                    <div class="title">Вакансии</div>
                    <div class="vacancy__list">
                        <div class="vacancy__list_item">
                            <button class="accordion">
                            <h2>Ведуший инженер по Зданию ГЭС и вспомогательным сооружениям</h2>
                            <div class="accordion__text">
                                <p>Зарплата по итогу собеседования</p>
                                <p>Требуемый опыт работы: не менее 5 лет</p>
                                    <p>Полная занятость, полный день</p>
                            </div>
                            </button>
                            <div class="panel" style="margin-top: -1px;">
                                <h3>Обязанности:</h3>
                                <ul>

                                    <li>- визуальное обследование строительных конструкций с оценкой технического состояния по внешним признакам;</li>
                                    <li>- составление дефектных ведомостей и схем дефектов и повреждений строительных конструкций сооружений;</li>
                                    <li>- инструментальное измерение геометрических параметров сооружений, конструкций и узлов;</li>
                                    <li>- инструментальное определение параметров дефектов и повреждений;</li>
                                    <li>- определение фактических характеристик материалов методами неразрушающего контроля.</li>

                                </ul>
                                <h3>Требования: ​​​​​​​</h3>
                                <ul>
                                    <li>- визуальное обследование строительных конструкций с оценкой технического состояния по внешним признакам;</li>
                                    <li>- составление дефектных ведомостей и схем дефектов и повреждений строительных конструкций сооружений;</li>
                                    <li>- инструментальное измерение геометрических параметров сооружений, конструкций и узлов;</li>
                                    <li>- инструментальное определение параметров дефектов и повреждений;</li>
                                    <li>- определение фактических характеристик материалов методами неразрушающего контроля.</li>

                                </ul>
                                <h3>Условия работы:</h3>
                                <p>трудоустройство согласно ТК РУз;
                                </p>
                                <p>работа в современном офисе в центре города;
                                </p>
                                <p>график работы с пн.- пт. с 9:00 до 18:00</p>
                                <h3>Ключевые навыки:</h3>
                                <p>Лира-Сапр, AutoCAD, Инженерные системы, MS Outlook, Работа в команде,Контроль качества</p>

                                <form method="POST" class="vacancy__form">
                                    <div class="vacancy__form-title">Отправить свое резюме</div>
                                    <div class="vacancy__form_wrapper">
                                        <div class="vacancy__form_wrapper_input">
                                            <input type="text" name="name" id="name" placeholder="Ваше ФИО" class="focus">
                                            <span class="error"></span>
                                        </div>

                                        <div class="vacancy__form_wrapper_input">
                                            <input type="email" name="email" id="email" placeholder="Ваш e-mail" class="focus">
                                            <span class="error"></span>
                                        </div>
                                        <div class="vacancy__form_wrapper_input">
                                            <input type="tel" name="tel" id="tel" placeholder="Ваш телефон" class="focus">
                                            <span class="error"></span>
                                        </div>



                                        <div class="file_upload" id="file">
                                            <button type="button"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                   <path d="M7.5 18C4.46 18 2 15.535 2 12.5C2 9.465 4.46 7 7.5 7H18C20.21 7 22 8.79 22 11C22 13.21 20.21 15 18 15H9.5C8.12 15 7 13.88 7 12.5C7 11.12 8.12 10 9.5 10H17V11.5H9.5C8.95 11.5 8.5 11.945 8.5 12.5C8.5 13.055 8.95 13.5 9.5 13.5H18C19.38 13.5 20.5 12.38 20.5 11C20.5 9.62 19.38 8.5 18 8.5H7.5C5.29 8.5 3.5 10.29 3.5 12.5C3.5 14.71 5.29 16.5 7.5 16.5H17V18H7.5Z" fill="#263475"></path>
                                                   </svg>
                                                   </button>
                                            <div>Файл</div>
                                            <p>Максимальный размер файла 3.00мб</p>
                                            <input type="file" name="file" id="file" class="focus">
                                            <span class="error"></span>
                                        </div>
                                        <div class="vacancy__form_wrapper_textarea">
                                            <textarea placeholder="Сообщение" type="text" name="subject" id="subject" class="focus"></textarea>
                                            <span class="error"></span>
                                        </div>

                                    </div>

                                    <button class="vacancy__form-button button" type="submit">Отправить</button>

                                </form>
                            </div>
                        </div>
                        <div class="vacancy__list_item">
                            <button class="accordion">
                            <h2>Ведуший инженер по Зданию ГЭС и вспомогательным сооружениям</h2>
                            <div class="accordion__text">
                                <p>Зарплата по итогу собеседования</p>
                                <p>Требуемый опыт работы: не менее 5 лет</p>
                                    <p>Полная занятость, полный день</p>
                            </div>
                            </button>
                            <div class="panel" style="margin-top: -1px;">
                                <h3>Обязанности:</h3>
                                <ul>

                                    <li>- визуальное обследование строительных конструкций с оценкой технического состояния по внешним признакам;</li>
                                    <li>- составление дефектных ведомостей и схем дефектов и повреждений строительных конструкций сооружений;</li>
                                    <li>- инструментальное измерение геометрических параметров сооружений, конструкций и узлов;</li>
                                    <li>- инструментальное определение параметров дефектов и повреждений;</li>
                                    <li>- определение фактических характеристик материалов методами неразрушающего контроля.</li>

                                </ul>
                                <h3>Требования: ​​​​​​​</h3>
                                <ul>
                                    <li>- визуальное обследование строительных конструкций с оценкой технического состояния по внешним признакам;</li>
                                    <li>- составление дефектных ведомостей и схем дефектов и повреждений строительных конструкций сооружений;</li>
                                    <li>- инструментальное измерение геометрических параметров сооружений, конструкций и узлов;</li>
                                    <li>- инструментальное определение параметров дефектов и повреждений;</li>
                                    <li>- определение фактических характеристик материалов методами неразрушающего контроля.</li>

                                </ul>
                                <h3>Условия работы:</h3>
                                <p>трудоустройство согласно ТК РУз;
                                </p>
                                <p>работа в современном офисе в центре города;
                                </p>
                                <p>график работы с пн.- пт. с 9:00 до 18:00</p>
                                <h3>Ключевые навыки:</h3>
                                <p>Лира-Сапр, AutoCAD, Инженерные системы, MS Outlook, Работа в команде,Контроль качества</p>

                                <form method="POST" class="vacancy__form">
                                    <div class="vacancy__form-title">Отправить свое резюме</div>
                                    <div class="vacancy__form_wrapper">
                                        <div class="vacancy__form_wrapper_input">
                                            <input type="text" name="name" id="name" placeholder="Ваше ФИО" class="focus">
                                            <span class="error"></span>
                                        </div>

                                        <div class="vacancy__form_wrapper_input">
                                            <input type="email" name="email" id="email" placeholder="Ваш e-mail" class="focus">
                                            <span class="error"></span>
                                        </div>
                                        <div class="vacancy__form_wrapper_input">
                                            <input type="tel" name="tel" id="tel" placeholder="Ваш телефон" class="focus">
                                            <span class="error"></span>
                                        </div>



                                        <div class="file_upload" id="file">
                                            <button type="button"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                   <path d="M7.5 18C4.46 18 2 15.535 2 12.5C2 9.465 4.46 7 7.5 7H18C20.21 7 22 8.79 22 11C22 13.21 20.21 15 18 15H9.5C8.12 15 7 13.88 7 12.5C7 11.12 8.12 10 9.5 10H17V11.5H9.5C8.95 11.5 8.5 11.945 8.5 12.5C8.5 13.055 8.95 13.5 9.5 13.5H18C19.38 13.5 20.5 12.38 20.5 11C20.5 9.62 19.38 8.5 18 8.5H7.5C5.29 8.5 3.5 10.29 3.5 12.5C3.5 14.71 5.29 16.5 7.5 16.5H17V18H7.5Z" fill="#263475"></path>
                                                   </svg>
                                                   </button>
                                            <div>Файл</div>
                                            <p>Максимальный размер файла 3.00мб</p>
                                            <input type="file" name="file" id="file" class="focus">
                                            <span class="error"></span>
                                        </div>
                                        <div class="vacancy__form_wrapper_textarea">
                                            <textarea placeholder="Сообщение" type="text" name="subject" id="subject" class="focus"></textarea>
                                            <span class="error"></span>
                                        </div>

                                    </div>

                                    <button class="vacancy__form-button button" type="submit">Отправить</button>

                                </form>
                            </div>
                        </div>
                        <div class="vacancy__list_item">
                            <button class="accordion">
                            <h2>Ведуший инженер по Зданию ГЭС и вспомогательным сооружениям</h2>
                            <div class="accordion__text">
                                <p>Зарплата по итогу собеседования</p>
                                <p>Требуемый опыт работы: не менее 5 лет</p>
                                    <p>Полная занятость, полный день</p>
                            </div>
                            </button>
                            <div class="panel" style="margin-top: -1px;">
                                <h3>Обязанности:</h3>
                                <ul>

                                    <li>- визуальное обследование строительных конструкций с оценкой технического состояния по внешним признакам;</li>
                                    <li>- составление дефектных ведомостей и схем дефектов и повреждений строительных конструкций сооружений;</li>
                                    <li>- инструментальное измерение геометрических параметров сооружений, конструкций и узлов;</li>
                                    <li>- инструментальное определение параметров дефектов и повреждений;</li>
                                    <li>- определение фактических характеристик материалов методами неразрушающего контроля.</li>

                                </ul>
                                <h3>Требования: ​​​​​​​</h3>
                                <ul>
                                    <li>- визуальное обследование строительных конструкций с оценкой технического состояния по внешним признакам;</li>
                                    <li>- составление дефектных ведомостей и схем дефектов и повреждений строительных конструкций сооружений;</li>
                                    <li>- инструментальное измерение геометрических параметров сооружений, конструкций и узлов;</li>
                                    <li>- инструментальное определение параметров дефектов и повреждений;</li>
                                    <li>- определение фактических характеристик материалов методами неразрушающего контроля.</li>

                                </ul>
                                <h3>Условия работы:</h3>
                                <p>трудоустройство согласно ТК РУз;
                                </p>
                                <p>работа в современном офисе в центре города;
                                </p>
                                <p>график работы с пн.- пт. с 9:00 до 18:00</p>
                                <h3>Ключевые навыки:</h3>
                                <p>Лира-Сапр, AutoCAD, Инженерные системы, MS Outlook, Работа в команде,Контроль качества</p>

                                <form method="POST" class="vacancy__form">
                                    <div class="vacancy__form-title">Отправить свое резюме</div>
                                    <div class="vacancy__form_wrapper">
                                        <div class="vacancy__form_wrapper_input">
                                            <input type="text" name="name" id="name" placeholder="Ваше ФИО" class="focus">
                                            <span class="error"></span>
                                        </div>

                                        <div class="vacancy__form_wrapper_input">
                                            <input type="email" name="email" id="email" placeholder="Ваш e-mail" class="focus">
                                            <span class="error"></span>
                                        </div>
                                        <div class="vacancy__form_wrapper_input">
                                            <input type="tel" name="tel" id="tel" placeholder="Ваш телефон" class="focus">
                                            <span class="error"></span>
                                        </div>



                                        <div class="file_upload" id="file">
                                            <button type="button"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                   <path d="M7.5 18C4.46 18 2 15.535 2 12.5C2 9.465 4.46 7 7.5 7H18C20.21 7 22 8.79 22 11C22 13.21 20.21 15 18 15H9.5C8.12 15 7 13.88 7 12.5C7 11.12 8.12 10 9.5 10H17V11.5H9.5C8.95 11.5 8.5 11.945 8.5 12.5C8.5 13.055 8.95 13.5 9.5 13.5H18C19.38 13.5 20.5 12.38 20.5 11C20.5 9.62 19.38 8.5 18 8.5H7.5C5.29 8.5 3.5 10.29 3.5 12.5C3.5 14.71 5.29 16.5 7.5 16.5H17V18H7.5Z" fill="#263475"></path>
                                                   </svg>
                                                   </button>
                                            <div>Файл</div>
                                            <p>Максимальный размер файла 3.00мб</p>
                                            <input type="file" name="file" id="file" class="focus">
                                            <span class="error"></span>
                                        </div>
                                        <div class="vacancy__form_wrapper_textarea">
                                            <textarea placeholder="Сообщение" type="text" name="subject" id="subject" class="focus"></textarea>
                                            <span class="error"></span>
                                        </div>

                                    </div>

                                    <button class="vacancy__form-button button" type="submit">Отправить</button>

                                </form>
                            </div>
                        </div>
                        <div class="vacancy__list_item">
                            <button class="accordion">
                            <h2>Ведуший инженер по Зданию ГЭС и вспомогательным сооружениям</h2>
                            <div class="accordion__text">
                                <p>Зарплата по итогу собеседования</p>
                                <p>Требуемый опыт работы: не менее 5 лет</p>
                                    <p>Полная занятость, полный день</p>
                            </div>
                            </button>
                            <div class="panel" style="margin-top: -1px;">
                                <h3>Обязанности:</h3>
                                <ul>

                                    <li>- визуальное обследование строительных конструкций с оценкой технического состояния по внешним признакам;</li>
                                    <li>- составление дефектных ведомостей и схем дефектов и повреждений строительных конструкций сооружений;</li>
                                    <li>- инструментальное измерение геометрических параметров сооружений, конструкций и узлов;</li>
                                    <li>- инструментальное определение параметров дефектов и повреждений;</li>
                                    <li>- определение фактических характеристик материалов методами неразрушающего контроля.</li>

                                </ul>
                                <h3>Требования: ​​​​​​​</h3>
                                <ul>
                                    <li>- визуальное обследование строительных конструкций с оценкой технического состояния по внешним признакам;</li>
                                    <li>- составление дефектных ведомостей и схем дефектов и повреждений строительных конструкций сооружений;</li>
                                    <li>- инструментальное измерение геометрических параметров сооружений, конструкций и узлов;</li>
                                    <li>- инструментальное определение параметров дефектов и повреждений;</li>
                                    <li>- определение фактических характеристик материалов методами неразрушающего контроля.</li>

                                </ul>
                                <h3>Условия работы:</h3>
                                <p>трудоустройство согласно ТК РУз;
                                </p>
                                <p>работа в современном офисе в центре города;
                                </p>
                                <p>график работы с пн.- пт. с 9:00 до 18:00</p>
                                <h3>Ключевые навыки:</h3>
                                <p>Лира-Сапр, AutoCAD, Инженерные системы, MS Outlook, Работа в команде,Контроль качества</p>

                                <form method="POST" class="vacancy__form">
                                    <div class="vacancy__form-title">Отправить свое резюме</div>
                                    <div class="vacancy__form_wrapper">
                                        <div class="vacancy__form_wrapper_input">
                                            <input type="text" name="name" id="name" placeholder="Ваше ФИО" class="focus">
                                            <span class="error"></span>
                                        </div>

                                        <div class="vacancy__form_wrapper_input">
                                            <input type="email" name="email" id="email" placeholder="Ваш e-mail" class="focus">
                                            <span class="error"></span>
                                        </div>
                                        <div class="vacancy__form_wrapper_input">
                                            <input type="tel" name="tel" id="tel" placeholder="Ваш телефон" class="focus">
                                            <span class="error"></span>
                                        </div>



                                        <div class="file_upload" id="file">
                                            <button type="button"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                   <path d="M7.5 18C4.46 18 2 15.535 2 12.5C2 9.465 4.46 7 7.5 7H18C20.21 7 22 8.79 22 11C22 13.21 20.21 15 18 15H9.5C8.12 15 7 13.88 7 12.5C7 11.12 8.12 10 9.5 10H17V11.5H9.5C8.95 11.5 8.5 11.945 8.5 12.5C8.5 13.055 8.95 13.5 9.5 13.5H18C19.38 13.5 20.5 12.38 20.5 11C20.5 9.62 19.38 8.5 18 8.5H7.5C5.29 8.5 3.5 10.29 3.5 12.5C3.5 14.71 5.29 16.5 7.5 16.5H17V18H7.5Z" fill="#263475"></path>
                                                   </svg>
                                                   </button>
                                            <div>Файл</div>
                                            <p>Максимальный размер файла 3.00мб</p>
                                            <input type="file" name="file" id="file" class="focus">
                                            <span class="error"></span>
                                        </div>
                                        <div class="vacancy__form_wrapper_textarea">
                                            <textarea placeholder="Сообщение" type="text" name="subject" id="subject" class="focus"></textarea>
                                            <span class="error"></span>
                                        </div>

                                    </div>

                                    <button class="vacancy__form-button button" type="submit">Отправить</button>

                                </form>
                            </div>
                        </div>

                    </div>
                    <ul class="paggination">
                        <li><a href="#" class="active">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="32" cy="32" r="32" fill="#F4F5F9"/>
                            <path d="M35.129 31.25L31.106 27.227L32.1665 26.1665L38 32L32.1665 37.8335L31.106 36.773L35.129 32.75H26V31.25H35.129Z" fill="#101C5A"/>
                            </svg>
                            </a></li>
                    </ul>
                </div>
            </div>
        </section>
@endsection