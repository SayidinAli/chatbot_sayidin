#ChatBot
PHP chatbot application integrated with google dialogflow.

[Dialogflow](https://dialogflow.cloud.google.com/)

## Run Locally

Clone the project

```bash
  git clone https://github.com/MahmoudSayed96/dialogflow-chatbot.git
```

Go to the project directory

```bash
  cd dialogflow-chatbot
```

Install dependencies

```bash
  composer install
```

Create chatbot in google
[References](https://botflo.com/php-client-library-for-dialogflow-v2-api-getting-started/)

Start the server like: xampp.
go to browser

```bash
  http://localhost/dialogflow-chatbot
```

## Environment Variables

To run this project, you will need to add the following environment variables to `config.php` file

`PROJECT_ID`

## API Reference

```http
  POST /chatbot.php
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `msg`      | `string` | **Required**. Msg input of user |

#### call_server(msg)

Takes string text and returns the dialogflow response.

## Custom Configuration

### Change icons/images
Go to file `chatbot.js`

## License

[MIT](https://choosealicense.com/licenses/mit/)