<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mail</title>
    <style>
        /* CSS */
        .button-69 {
            background-color: initial;
            background-image: linear-gradient(#8614f8 0, #760be0 100%);
            border-radius: 5px;
            border-style: none;
            box-shadow: rgba(245, 244, 247, .25) 0 1px 1px inset;
            color: #fff;
            cursor: pointer;
            display: inline-block;
            font-family: Inter, sans-serif;
            font-size: 16px;
            font-weight: 500;
            height: 60px;
            line-height: 60px;
            margin-left: -4px;
            outline: 0;
            text-align: center;
            transition: all .3s cubic-bezier(.05, .03, .35, 1);
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            vertical-align: bottom;
            width: 190px;
        }

        .button-69:hover {
            opacity: .7;
        }

        @media screen and (max-width: 1000px) {
            .button-69 {
                font-size: 14px;
                height: 55px;
                line-height: 55px;
                width: 150px;
            }
        }
    </style>
</head>

<body>

    <section>
        <div class="div">
            <p>
                <b>Hey, {{$data['name']}}</b>
            </p>
            <p>If you have requested for account Password reset,</p>
            <p>please kindly click on the Reset button below...</p>
            <hr>
            <a href="http://127.0.0.1:8000/reset?token={{$data['token']}}">
                <button class="button-69" role="button">Reset password</button>
            </a>
        </div>
    </section>

</body>

</html>