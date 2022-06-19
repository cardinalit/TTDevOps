0) Открываем в терминале директорию с приложением
1) Собираем образ
`docker build .`
2) Запускаем собранный контейнер
(docker images - самый свежий образ)
docker run -d -p <localport>:8000 <image_id>
где:
localport - порт на локальной машине, с которого можно будет попасть в приложение внутри контейнера. Позднее мы укажем его в адресной строке
image_id - Идентификатор образа, который был получен после выполнения команды docker build .
4) Открываем браузер и переходим по ссылке http://127.0.0.1:<localport>
