Horoscope API
==================
<a href='https://ko-fi.com/R6R75H96' target='_blank'><img height='36' style='border:0px;height:36px;' src='https://az743702.vo.msecnd.net/cdn/kofi2.png?v=0' border='0' alt='Buy Me a Coffee at ko-fi.com' /></a>

An API to extract **Horoscope**. You're free to use this API in any manner your want.
----------


**Features **
-------------
- Todays Horoscope
- Weekly Horoscope
- Monthly Horoscope
- Yearly Horoscope

<a href='https://ko-fi.com/R6R75H96' target='_blank'><img height='36' style='border:0px;height:36px;' src='https://az743702.vo.msecnd.net/cdn/kofi2.png?v=0' border='0' alt='Buy Me a Coffee at ko-fi.com' /></a>

**Usage**
=============

**API Base URL:**  `https://horoscope-free-api.herokuapp.com`

> **Result:**

>  {
>  "MESSAGE":"You're not supposed to remove this under the license. Credits to author should be given.",
>  "Author":"Sumit Gohil",
>"project_name":"Horoscope Api","project_url":"https:\/\/github.com\/sumitgohil\/horoscope-api"
>}


----------------------------------------
**Daily Horoscope**
**GET:**`/?time=today&sign=<sunsign>`

Example usage `GET https://horoscope-free-api.herokuapp.com/?time=month&sign=cancer`
> **Result:**

>  {
>  "status":200,
>"status_message":"Success",
>"data"":A secret could be revealed today that opens the doorway to career and social opportunities. Listen to the older people in your social circle, who know how to make important connections. Your financial position could provide you benefit. Your Partner suggestion may give you benefit in your work. Your Health remains well.Your Lucky color is Yellow.Your Lucky number is 4."
>}


----------


 **Weekly Horoscope**
**GET:**`/?time=week&sign=<sunsign>`

Example usage `GET https://horoscope-free-api.herokuapp.com/?time=week&sign=cancer`
> **Result:**

>  {
>  "status":200,
>"status_message":"Success",
>"data":"Your financial pressure and liabilities will reduce a lot this week. Your concentration will be good and others will give you the respect you deserve. Good money inflow will make your bank balance thick. Some of you may start a new venture in association with some like minded people. Journey made in this period will prove to be futile. Open communication will lead to better understanding and appreciation of your thoughts. Property matters will take final shape. Keep maintaining cordial relations with your partner and do not use any harsh words. Your health will give you positive indication."
>}


----------
 **Monthly Horoscope**
**GET:**`/?time=month&sign=<sunsign>`

Example usage `GET https://horoscope-free-api.herokuapp.com/?time=month&sign=cancer`
> **Result:**

>  {
>  "status":200,
>"status_message":"Success",
>"data":"The month begin you are feeling a bit more confident about the financial circumstances. For some change in workstation brings positive result. There will be profit through traveling and income through Foreign Service. Partnership business may face some ups and downs. Things are likely to move very smoothly at the beginning but later your require remaining alert to save personal professional interest. Some of you may be invited to give lectures at seminars etc. Those in Government sector need to be careful while signing document. Better to be cautious as wasting time in useless activities might go against you. There may be delays in the completion of the work. There is a strong possibility that your first crush also happens to become your first love this month. It is also the right time to make efforts to enhance your mental toughness by bringing mental peace."
>}


----------


 **Yearly Horoscope**
**GET:**`/?time=year&sign=<sunsign>`

Example usage `GET https://horoscope-free-api.herokuapp.com/?time=year&sign=cancer`
> **Result:**

>  {
>  "status":200,
>"status_message":"Success",
>"data":"The Cancer zodiac sign natives will see new levels of confidence in the year 2018. Their appetite for knowledge will grow exponentially and your personality will take a 180 degree change.  After July 2018, you will gain new perspectives of life and your mind will be enlightened to new areas of interests. Askganesha Astrologer predicts 2018 as the year of change for the Carbs. While getting accustomed to the new things in life, you will simultaneously grow professionally. Your family will appreciate the alterations and chances of a good news are bright.In the first of the year, you may feel disappointed with the events happening around you. You know how to make a balance between personal and professional life but the balance might appear to shake. You just need to hold on and have patience as things are destined to fall in place although it might appear that it is all going to fall apart. The cancer horoscope for 2018 is a promising one for the natives."
>}

**Contributing**
==================

**NOTE 1: This parses AskGanesh unofficially.**
**NOTE2: If the API goes down, please open a issue or comment on already existing one with the problem(s) that you are facing. This is the best way to let me know that the API is not working, avoid sending email.**

<a href='https://ko-fi.com/R6R75H96' target='_blank'><img height='36' style='border:0px;height:36px;' src='https://az743702.vo.msecnd.net/cdn/kofi2.png?v=0' border='0' alt='Buy Me a Coffee at ko-fi.com' /></a>
