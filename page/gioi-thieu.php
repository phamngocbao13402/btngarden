
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        .col {
            float: left;
            padding-left: 8px;
            padding-right: 8px;
        }


        .col-three{
            width: 33.33333%;
        }

        .text-center {
            text-align: center !important;
        }

        #content .content-selection{
            width: 800px;
            max-width: 100%;
            padding: 64px 0 112px;
            margin-left: auto;
            margin-right: auto;
            padding-left: 16px;
            padding-right: 16px;
        }

        #content .content-heading{
            letter-spacing: 5px;
            font-size: 30px;
            font-weight: 400;
            text-align: center;
        }

        #content .content-sub-heading{
            padding-top: 25px;
            font-style: italic;
            opacity: 0.6;
            font-size: 15px;
            text-align: center;
        }

        #content .noidung{
            padding-top: 25px;
            line-height: 1.5;
            font-size: 15px;
            text-align: justify;
        }

        #content .members-list{
            padding-top: 47px;
        }
        #content .members-name{
            font: 15px;
            font-weight: bold;
            color: rgb(17, 116, 4);
        }

        #content .members-img{
            width: 154px;
            height:200px;
            margin-top: 15px;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div id="content">
        <div id="band" class="content-selection">
            <h2 class="content-heading">BTN Garden</h2>
            <p class="content-sub-heading">We are a family</p>
            <p class="noidung">Cuộc sống của chúng ta giống như một cuộn len riêng của mình, nó mang màu sắc riêng của bạn, của chúng ta. Với những vướng mắc mà chúng ta gặp phải trong cuộc sống thường ngày như: học tập, tình yêu, công việc… những thứ làm cho cái đầu của chúng ta muốn nổ tung. Chính vì thế như cầu xả stress đã, đang và sẽ là nhu cầu cấp thiết trong cuộc sống thời kinh tế thị trường hiện tại. Sau một ngày học tập và làm việc vất vả, trở về với căn phòng với những giấy trang trí, giấy dán tường, những hình quả cầu, trái tim, hoa giấy do chính tay bạn làm ra cũng sẽ giúp bạn giải tỏa căng thẳng. Các cô, các bác, sau một ngày làm việc sẽ thư giãn bằng cách nào? Nấu ăn cho gia đình, xem các chương trình giải trí? Rất cũ, rất quen thuộc nhưng cũng rất hiệu quả. <br> <br>
                Nhưng! Có khi nào bạn nghĩ đến một mầm xanh của sự sống, của thiên nhiên sẽ giúp bạn thoải mái hơn, yêu cuộc sống hơn không? Bạn sẽ nghĩ sao nếu mở mắt bước ra ban công có một chậu hoa xương rồng mỉm cười với bạn. Có khi nào bạn nghĩ rằng đưa không gian xanh của thiên nhiên vào không gian sống của chính mình sẽ giúp cho cuộc sống của mọi người sẽ giúp cho cuộc sống của mọi người trở nên nhẹ nhàng hơn không? <br> <br>
                Có thể nó không làm cho bạn hết buồn nhưng chắc chắn chúng tôi sẽ mang đến cho bạn thêm niềm tin và cuộc sống. Mong muốn mang đến một cảm giác không phải quá mới lạ nhưng sẽ đọc đáo và ý nghĩa, cũng vì đó là sự đam mê của chúng tôi. Chúng tôi quyết định mở cửa hàng “BTN Garden” với mong muốn đáp ứng các như cầu trên với các mặt hàng: Chậu hoa mini, Xương rồng, Sen đá, Phụ kiện Terrarium, Cây cảnh văn phòng, Tiểu cảnh sen đá,...
            
            </p>

            <div class="members-list">
                <div class="col col-three text-center">
                    <p class="members-name">Phạm Ngọc Bảo</p>
                    <img class="members-img" src="<?=$CONTENT_URL?>/images/layout/bao.jpg" alt="Ninh">
                </div>

                <div class="col col-three text-center">
                    <p class="members-name">Hoàng Kim Thắng</p>
                    <img class="members-img" src="<?=$CONTENT_URL?>/images/layout/thang.jpg" alt="Ninh">
                </div>

                <div class="col col-three text-center">
                    <p class="members-name">Nguyễn Thanh Ninh</p>
                    <img class="members-img" src="<?=$CONTENT_URL?>/images/layout/ninh.jpg" alt="Ninh">
                </div>

                <div class="clear"></div>
            </div>
        </div>
    </div>
</body>
</html>