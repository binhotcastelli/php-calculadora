<html>
    <head>
    <style>
            .container {
                display: flex;
                flex-direction: column;
                background-color: #dedede;
                border: 3px solid #999;
                border-radius: 10px;
                margin: 0 auto;
                margin-top: 50px;
                width: 350px;
                height: 450px;
                padding: 30px;
                align-items: center;
                justify-content: space-between;
            }

            #texto {
                width: 100%;
                background: #003300;
                color: #ff0;
                text-align: right;
                padding: 10px 20px;
                border-radius: 8px;
                border: 2px solid #999;
                font-size: 30px;
            }

            .footer {
                display: flex;
                flex-direction: column;
                justify-content: flex-end;
            }

            .buttons {
                display: flex;
                flex-direction: row;
                width: 100%;
            }

            .buttons button {
                display: block;
                width: 86px;
                height: 86px;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <input type="text" id="texto" value="0" readonly />

            <div class="footer">
                <div class="buttons">
                    <button>7</button> <button>8</button> <button>9</button> <button>/</button>
                </div>
                <div class="buttons">
                    <button>4</button> <button>5</button> <button>6</button> <button>x</button>
                    </div>
                <div class="buttons">
                    <button>1</button> <button>2</button> <button>3</button> <button>-</button>
                    </div>
                <div class="buttons">
                    <button>,</button> <button>0</button> <button>=</button> <button>+</button>
                <div>
            </div>
        </div>
    </body>
</html>