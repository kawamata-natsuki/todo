@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsecion


@section('content')
<div class="message">
  <!-- 正常実行時とエラー実行時でメッセージを分ける -->
  <div class="message__inner">
    <span class="message__success">
      Todoを作成しました
    </span>
    <!--  <span class="message__error">Todoを入力してください</span>  -->
  </div>
</div>

<div class="todo__content">
  <div class="todo__inner">

    <form class="form" action="/todos" method="post">
      @csrf
      <div class="form__group">
        <input class="form__input--text" type="text" name="todo">
        <button class="form__button--submit" type="submit">
          作成
        </button>
      </div>
    </form>

    <table class="todo-table">
      <div class="todo-table__inner">
        <thead>
          <tr class="todo-table__row">
            <th>Todo</th>
            <td></td>
          </tr>
        </thead>

        <tbody>
          <tr class="todo-table__row">
            <th class="todo-table__list">
              <input class="todo-table__input" type="text" name="todo" value="test1">
            </th>
            <td class="todo-table__button">
              <button class="todo-table__button--update" type="">更新</button>
              <button class="todo-table__button--delete" type="">削除</button>
            </td>
          </tr>
          <tr class="todo-table__row">
            <th class="todo-table__list">
              <input class="todo-table__input" type="text" name="todo" value="test2">
            </th>
            <td class="todo-table__button">
              <button class="todo-table__button--update" type="">更新</button>
              <button class="todo-table__button--delete" type="">削除</button>
            </td>
          </tr>
        </tbody>
      </div>
    </table>
  </div>
</div>
@endsecion