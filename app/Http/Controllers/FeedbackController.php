<?php

namespace App\Http\Controllers;

use App\Mail\FeedbackMailer;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use stdClass;

class FeedbackController extends Controller
{
    // Выводим форму на странице
    public function index() {
        return view('feedback.index', [
            'categories' => Category::all(),
        ]);
    }
    // Отправляем данные формы на почту
    public function send(Request $request) {
        // Валидация полей формы
        $request->validate([
            'name' => 'required|max:100',
            'email' => 'required|email|max:100',
            'message' => 'required|max:500',
        ]);
        // Создаем динамический объект
        $data = new stdClass();
        // Данные из поля формы name
        $data->name = $request->name;
        // Данные из поля формы email
        $data->email = $request->email;
        // Данные из поля формы message
        $data->message = $request->message;
        // В метод Mail::to первым аргументом передаем почту куда будет отправка письма,
        // вторым методом передаем класс отправки почты в который передаем аргументом
        // объект с данными формы $data который попадет в конструктор класса FeedbackMailer
        Mail::to($data->email)->send(new FeedbackMailer($data));
        // Редирект через имя роута на ту же страницу с формой
        return redirect()->route('feedback.index')
            // Вывод сообщения
            ->with('success', 'Ваше сообщение успешно отправлено');
    }
}
