



<!DOCTYPE html>
<html>
<head>
    <title>Informe de productos</title>
    <link rel="stylesheet" href="informe.css">
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<style>.button {
    -moz-appearance: none;
    -webkit-appearance: none;
    appearance: none;
    border: none;
    background: none;
    color: #0f1923;
    cursor: pointer;
    position: relative;
    padding: 8px;
    margin-bottom: 20px;
    text-transform: uppercase;
    font-weight: bold;
    font-size: 14px;
    transition: all .15s ease;
  }
  
  .button::before,
  .button::after {
    content: '';
    display: block;
    position: absolute;
    right: 0;
    left: 0;
    height: calc(50% - 5px);
    border: 1px solid #7D8082;
    transition: all .15s ease;
  }
  
  .button::before {
    top: 0;
    border-bottom-width: 0;
  }
  
  .button::after {
    bottom: 0;
    border-top-width: 0;
  }
  
  .button:active,
  .button:focus {
    outline: none;
  }
  
  .button:active::before,
  .button:active::after {
    right: 3px;
    left: 3px;
  }
  
  .button:active::before {
    top: 3px;
  }
  
  .button:active::after {
    bottom: 3px;
  }
  
  .button_lg {
    position: relative;
    display: block;
    padding: 10px 20px;
    color: #fff;
    background-color: #0f1923;
    overflow: hidden;
    box-shadow: inset 0px 0px 0px 1px transparent;
  }
  
  .button_lg::before {
    content: '';
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    width: 2px;
    height: 2px;
    background-color: #0f1923;
  }
  
  .button_lg::after {
    content: '';
    display: block;
    position: absolute;
    right: 0;
    bottom: 0;
    width: 4px;
    height: 4px;
    background-color: #0f1923;
    transition: all .2s ease;
  }
  
  .button_sl {
    display: block;
    position: absolute;
    top: 0;
    bottom: -1px;
    left: -8px;
    width: 0;
    background-color: #ff4655;
    transform: skew(-15deg);
    transition: all .2s ease;
  }
  
  .button_text {
    position: relative;
  }
  
  .button:hover {
    color: #0f1923;
  }
  
  .button:hover .button_sl {
    width: calc(100% + 15px);
  }
  
  .button:hover .button_lg::after {
    background-color: #fff;
  }</style>
<style>
.buttoncerrar {
  -moz-appearance: none;
  -webkit-appearance: none;
  appearance: none;
  border: none;
  background: none;
  color: #0f1923;
  cursor: pointer;
  position: relative;

 
  text-transform: uppercase;
  font-weight: bold;
  font-size: 14px;
  transition: all .15s ease;
}

    header {
  display: flex;
  justify-content:space-around;
  align-items: center;
}

nav {
  text-align: left; 
  font-family: 'Alfa Slab One', cursive;
  font-size: 15px;
 
}


nav ul {
  list-style: none;
  margin: 0;
  padding: 0;

}

nav li {
  display: inline;
  margin-right: 20px; /* Espacio entre los enlaces */
}

nav a {
  text-decoration: none;
  color: #000000;
  padding: 5px;
}
nav a:hover{
  background-color: #abc6d8;
  color: #FFFFFF;

border-radius: 15px;
}



.logo img{width: 100px; height: 50px;}</style>
<style>
  #portal {
    display: none;
}
@media screen and (max-width:800px) 
    {
         #portal {
    display: block;
}


}

</style>

</head>
<style>
  #portal {
    display: none;
}
@media screen and (max-width:800px) 
    {
         #portal {
    display: block;
}


}

</style>

</head>
<body>
<header>
  <!--  <div class="logo">  
        <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxITEhUTEhIVFhUWGBoXFxgYGBcXFxYaGxgYGhweGxcYHykhGhsmHhgYIjIiJiosLy8vGiA0OTQtOCkuMCwBCgoKDg0OHBAQHDgmISYxMC4uLiwuMDEuMzcuMDAvNi4wLi4xLjEuMDA2Ly4uLzYuLjguNjEsLi4uLi42Li4uOP/AABEIAOEA4QMBIgACEQEDEQH/xAAcAAEAAQUBAQAAAAAAAAAAAAAABQEDBAYHAgj/xABKEAACAQMCBAMFBAYGCAQHAAABAgMABBESIQUGEzEiQVEHMmFxgRSRobEjQlJiwfAzgpLC0fEWJFNyk6LS4RUXs9M0Q1Rjc4Oy/8QAGgEBAAMBAQEAAAAAAAAAAAAAAAECAwQFBv/EACsRAAICAQMDAwMEAwAAAAAAAAABAhEDEiExBEFREyJhgZGhUnHh8AUUwf/aAAwDAQACEQMRAD8A5Sy9h/OB/Ir2BlvkPz/yoqHOTsBtv5/KvIOxPr2/hWZwDuCfU/xxVu4OM/SvbnGBVrGfqf5/KhaPktVcRaKn51Mcu8u3V9J07aIvj3m7In++52Hy7nyBoa3fBGCto5V5Cvb4ho49MWf6V/Cnx0+b/wBUEepFdX5P9k9rbYkusXEvfBH6Jfkh9/5t8NhXRUQAYAwB2q1ExxN8mj8r+y+ytcNIv2iUb5kA0Kf3Y+39rUfjW9KuNhVaVY2UUuCtKUoSKUpQClKUApSlAKUpQClKUApSlAKUpQClKUApSlAfHIHh+J/M0lIGFHz+6kp3A9N/5/GrajJJ+lZnCle7A3b5f51cjXAGayeGcOlmYRQxtJJIcKqjc/wAA7k7DzrvHIXs1itNM9ziW4G6+ccP+6D7z/vH6Y3zNWXUXLZGm8j+yd7jTPfaoou6xDwyyDP6/wCwp/tf7tdq4Zw2K3jWKCNY417KowB/ifjWYKrVkjpjFRVIUpSpLClKUApSlAKUpQClKUApSlAKUpQClKUApSlAKUpQClKUApSlAfGqt3NTXLPLlxeSCC3TLHGpjkJGpO7M3kO+B3PlWRyhylNfyiKEYUYMshHhjX+LHGy+ePIAkfR3LXL8FlCIYFwO7MfedvNmPmfwHYYqiRzQjrd9jB5L5Nt+HxaYxrlYfpJSMM/wH7KDyUfXJ3rZ6VWrnQklwKUpQkUpSgKV4ZwO5Hp38zVi6u0j062C6mCrnsWIJAz5djUDxO1kaSWEucSaZrdj2jkj05T5eFWx6F6pKVcFoxvnYm5OIxgSnP8AQgl8dxhdf18JBr2t2uEycGT3Qe58OrHzwKg5YwwuCSE+0W4YhiAVYKyPn4AFATWfJHlta4JRdEY7gMwBLH02x9AfWsZZqLuKJcGlRVrJ09MSBpCD43J2XJyxJPc5PuipUVrjmpozaorSlK0IFKUoBSlKAUpSgFKUoBSlKAUpSgFKUoCI5e4JDZwrBCuFG5J95282Y+bH/ADYVLUqtCEqFKpmqFqEnqlWo5lPukH5EH8qu0ApSqGgIniUj5KNb9SIjcgqSD55RsZHbcZrCurlY0Cq5xglQdp07INCup1ZLhcntq7mqzC3Ez6OsJM5bpiXGcdyMaPrVeLFgI3bXpQozatH6r7khd848W22FrjnJ3J+DeKWyI3qHLajvqOrEhhiDndlXSC8jep7VlWt0VOrLEAamBYP4MgF0kHvAYAIO9YiQtgxqzK4BXUmNYHUZ9agkakcEZIPdRWVndjjtrJGxwWRUCkjbWxGogds1wzdbmzrj+/1kjcTjTjqiMdiIhqfI7gYB/BavcFlBQhUlVVOxl9585JO5z9+KwmuSigGYREnCmVQyHACjDKQNyCQC2fFWfw77Rk9UxFdtJjDAn5hiQB8ia9DCt0/g55KkSVKUrqMhSlKAUpSgFKUoBSlKAUpSgFKUoBSlKA8sa0bnrnFYU6dtOvXDeIBQ+kb5BJ8Knt3z8q3WWMMpU7gjB+RqHg5VskfqJbRhhjHh2GPRewPxAq8HFO2dHTTxQnqypuuyqn+9nKk574gpybjO2QGjiwfuUHHyNSl5xCG+Mk0crQhFBkSYERDyB6iswBY7BQMk10HmbgxuYxGrEeIEjVpDrvlWYAtpPoMZ9a5vNw+ThE8UrXKMHb9JDGPGU3OyyEggdtRII9Tk10QyJO47M7uqj0vX4tKgoz7JfwkOXONfZ5Q6nKnZ1HZl+HxHcf966ZLzDAIWmWRXCjOlWXVvtjBIwc+RrkvHbMZgmtUkdboSSBVUAJht0VEJI0Dvkkdq2eyhI4eqvEYZHL6nceIRjd5NB3BwRGoODlx5HNb9R6eTTPvwz5DAs+CU8b7X9zM/wBOLiRwkNuuScBSWZj92MVuVhDKoJll1k/uqqqPQADP1JP0qI4DZ2tnmLqp1e7FiA5Uk6e/YYHYVOQXcb7JIjY76WBx91cmdxb9kaS/J39NrSfqStvttsYnE1kB1ddYogPEdI1f22OkD6VixOkiFl1aBkiaTcnIwSgcHII27Ab7VNSIGGCAQfI7g/So+8tnaRSxHRQayoyWZx2yAPdHcAdzj0rhyQd2jujLamRclg48ITUo04BVJVXU5Hh1MrqFGGOdsHbOMVkW9mx06iUwSF2RdLK+2mMBlIZQx1E5wRsD2x5Zn6cDOCrT3CEqdioyXUH0wqKKypFZzdRLs6lJI/mUUr9NaGuf0o7NLc0bfDZbnDhSYEV1XwSWzYA+Og4wCQc4Phb4HepHg1pFHGOlEYg3iKHupPljJC/IbV5trTU6TsGjkKYdcjB2zhsZBKknBBqTrqxxfLMpS2pFaUpWpQUpSgFKUoBSlKAUpSgFKUoBSlKAUpSgFKUoCla5ztwIXVq6KitJsYycDD5G+ryGNj8M1sdUNSnTstCbhJSXKOC3XHry2Is4Z8CBniVlXQSxJBznJOCSBn4HvgjdfadxIQQ28YJZpMgknJKIBnJ88sUJP7orxzLysJ+IRTW4DYlVrk6hhdJi0jHqVDfx8qkxwpTHEt3BHNOFlEaOw0EGbXpViMa9AT6DHbNdCnFSjI6f8jGHUYkoUm+fO/L/AB+TTIJLW8SINOYpo0KamXUknjymWByNIJHbt8qmOCW8tjcwtIyskjNC7JlkQlgFDN2BJ0nBxtUJKvD3lETxy2awsRsoaSTUWLI/fBVioU+Lw5B8iFvLdWE0QuUZIjIN9QKOuQGzpJGdJzg116tcXFOrvZ/8Z4HUdBm6WcZZI+Ka+n3O2ClUFaXee0/h0cjRmR2KEqSsbFcjY4Pnv515R6bklybkUB7gete8Vog9q/DP9pKPj0n2+6tt4XxKK4jWWBw8bdmHbY4I9QQfI0TRCknwzPpSlSWFKUoBVKVH8b4tHawtNKSEXGcDJ8RCjA+ZoQ2krZIVWo3gXGIruITQklCSNwQQR3BBqRoE01aK0pShIpSlAKUpQClKUApSlAKUpQFKtynCk/Dz7VdqxcnwkeZ2HzPaqTlUWyUaikOYunGGAkmBeTGCx1Kxb4ZOO/kKybeCV5DK7AgMyPGw2K9VmjZT3DAMAPkav2Nyx6OVAQtIJAdiHVlCkfIhgR/hXiGxEolSUgE6lYK2UYZyDpPukEDsfzrlhnm6Ta35Xfg65Svf8/giuZ+QY5y80Tus7HUAxHTJ22O2RsDgg9z51z5ONOnWtr2HrK82uQMzLKrqNBKup76RgDt9DXZ+CXIK9I6g8YAIYEMQNgd+4271G8zcm292GYqEmIGJV7jHbI7MPL1x8hXo4c6kt+DfH1icXh6j3R7fH8F+w4xH/wCHi5jZiiQFwXILeBTkPjbUCuD8c1yT2Q8Gtriac3So6JGoAkxjU7HffucIfvqQeGazseKwyMdIMUSjyYynBYDyzGVJ/wC1R3JHs5HELczvOYgJGRR0w+QoU6slhjckY/drPIqlSPJ6uCjm0w3S3+5sHtQ4RwuC0JgSFLgsvTEZ8R8Q15UHddOrc+eKscmX89jwoSqBqnuCYw4JGjpgE4yNiYz94PnWo868rf8Ahk8aCRZQy9QaowBsxGlkJIYbfXPaui+0C4LR2i6Qv6MyFQMBSQoAA9BuKwyy0xbOTJKlKXDRufK19LPapLNpDPqPhBAxqIGxJ8hUHwjmuSa4kDaFgjV3JwdWlexJz33B7VMxkW9gPLpwf82n+JrndgdFrcP+10owfXLFmH3AffWeXJKOlX8sZMko6Vfa39jYX5ovLh2W0hGkeoBbHlkkhRn0rA/06vIy0bxI0mdIyrAhs4wVB8XwAx9a2P2dQYtdf7bsfoMJ+amtW4T/AKxxct3Alkb6ICq/iFqFrqL1bszk51GWp2y7e808UttLzxKEY7BkAB88ZVsqcev3V69ofHVuOGW7oMdeQZHpoD6hnzw4ArN9r1ziGCPzZ2f6IuP74rTOcRotbCHtiFpSPjK2r/H761txbVkZJShqhdqu/wAmXwDjvEY7NY7G2Jjj1l5dBcsxYsdO+MAEDABO3lW0+zznd7xnhnCCRV1qyggOoIDZGdiCR2757DFbTw9Yre0TdVijiBztjAUEnPx3PxzXEuCO+OIXMYKhbeXttpMzgKNu2AWP9Wr8UX9+NxWq/g2rjPtKup7g2/CoRJjPjKl2fGxZRkKiZ/WbvkdqxeD+0e/gu1t+JRKAzKreDQ8eogBtjpZN98eXY7YMj7CbVBBcy4GsyhPjpVFYfTLt91a57SsXfGYoYtyBDAcb4bW7t/ZWTf00n0qb2s3uVKVndhVaoKrVzpFKUoBSlKAUpSgFKUoClYXEs6Rj9oVm1jXsZK7dxv8AdXL1kXLDJLwWi6kjV7+/+0m5tYtKzwkPHv7xBBby752+oqxwgC66FyGAeQOlxD21BGMUhwcFWVimofxxmC43MIeP2TZCLcKNx+s+JEOR+8Si/WrPGePsvMEccaaEt4pzLuPGXt+szMEPb9HDsd9viKvCMZJSIto3rgF8rKBr1mJjEWYeIdtif6v1wK2CuP8AA+PoLuG7TP2XieY2Ukf6rcgr4XwdJ1McjODhyR6Hq9pId1buvn6jyrKM5Y8miTtPh/Pgs99zWPaLyvNfQLFbtEhMqvIXLDUqo4A8KnO7A/Sq8uiDhVlFb3U8SuNZOGJ1FnZjpXGpgM47eVSHOXHfslsZBgyE6Iwexcg7n4AAn6Y8655yhye9+WuruVyrMRnI1ykd9yMKg7bD1AxiuiUt6XJyZJ1Koq2Y3PtpFxO7WSC8t1QRLGBKZozkM5O/TKjOob5ro3MvLYuljZWCugwvmpBxtt8tjUFx32dxCItaB+ou+gsCHHmMt2PpvipfkSC4hgaO5UoEOU1FThSMkbE4AIz9azdyema5M0m5OGSPPdcEUvKV64CS3C9MeWt3Ax28JABx8TWbxjlFmt44LdkAVy7lyQWbGM+EH1P3Crl/z7AhIjRpMfrDCr9Cdz91X+Kc3xwquULSuisUBHgyBszf9qqlhV7kKOBJqy7ZXUNjDDbSSDq6dlUO2piSdgqk4LE+VRPKXLMlnK9xcyxY0EZDHbLAkksAB2/Goq05pjjnad7Vi792MmpgvbCBlAAxj0+dV9pvGBJHbLG3gkBlPlnsFyPhltvUVKyRavwVeWDjr/Twi7zzaRX7K8F5bgQoxfU+yqSMtlQduw+6s/j3LlvxKKN7a4TVENCspDoQMeFsHYjv8M9jmtXgksYuHSyaZ5C/TgmGoR5c+MiNsHAGn7sVOcr8ZsLLh/2hVkjWV2xGzdSRnXwEKdgRhe+wHnWkafPcR0Sbc63Vvf7EUOQOJOohkuoxCP1erK6gDtiMqAcemRit04Vydbw2j2mCwlUiV+zOSMZH7OPIeWPPcnTm9sJ1bWfgz5y+L8Exn4VvXL/M1vd25uEbSi56gfAMZUZOo9sY3z2xV4qPYvhWK/bu/k5yvs04nbOwsr1FRtiepLCxHlqVVYZHqD69q2jkX2epZOZ5pOtcHIBwQsefe053Zjvlj5HsMnMLxj2yxI5W2tjKo/Xd+kGx5quknHzx8qmuSPaRDfy9BozDMQSo1a1fAyQrYB1Ab4I7A+hoqs0isalsb7SlKsdApSlAKUzSgFKUoBSlKAUpSgNe5k5f+0dGSNxFPbydWJ9OoZ3DIy5BKOCQcEHzrRZuGvDzIkhjBW6hdjrJKuRFiRYzp8RXQm2Ox3711utf4/y/9oltrhHCTWrs0ZK6lKuumRGXI2YdiDsQDv2qEqBzCxktraRZHKScG4ozNpZcpBNgHD7ZUqylcg4AUnbRmuy2caBF0HK6VCnUXyuNvGSS23mSc1yTmaBuFtcRzWhuOD3BVtIYD7NI2c6CTlTrXPdRllwQc53P2d/ZugBaXz3EIVdETtCzW4O4UlFDjHbDE4xtSgQvtbYlrdPLEjfM+Af4/fW48pRhbK3C9ukh29SAT+JNYXO/ADdRqUx1IySoP6wOMrny7A/StT4VxW+tF6QhYqPdV43OM/skY2z865pS9ObbWzOKUvTyuUlszJ41c8UgLO8xEZchSOkQQSSABjV29atcQ4vO1gvUkLNNKwycD9GgGR4QO7fxqnFbPiF0nXljbCnCxhSDg9yE7+m53+lWOYOGXHRto1glbRCWbSjHDyMWYHA7jA2rF63bV1Xcwbn7mrqtr+TZOUuW7c2ySSxq7SDV4hkAHsADt2wfrWHxHmCAz6bezSaUH39AJJXbK4UkgYHiyO1bjbWuiBYgcFYwgPoQuK5pwX7ZYSt/qrMSNPuOynB7qyjtWs1ojFL6ujaa9OMYpUu7qz1zdeXb9P7TGsY3ZFGM+QJO5I7/AAqH5hh13dtbDuscEJ+DP4m/9Stnt+EXd7MJblDHGMZBGnwjfSqnff1Pr9KjuHcLuJeM9V4JViEztrZGC4RWCbkY30piq44NtyffyYOEpO992luX/bEyRw21vGiqpZ5MKAANICjYevUP3VpK25nuLOzOQqiJO/brYmkI9DmQ/wBkVuXtP4bc3F2ixQSsixhQyozKGZmJ3Ax201Hc9cr3dveC8tI3df0bDQpdo3jVVwUG5U6Qc48yDjbPRy2XnCTyN1sqOp3PA7Z4Ps7QoYcAaMYAA7YxuCMdxvXOvafYwWFj0bROmLqVRJhnOVQFv1icZOkH1FYc3HOPX+mKOBrcZ8TqkkA/rSSEkD4Lv86nOcuSbiXh0MSytcXELF2LsS0uoHUFLnbGRgE9l9TV+eDpbUk9KJD2T8DihsYpdK9ScGR3xuQSdC59AuNvXJ8653wyFP8ASILbgBBcyYC9hpRzIBjsMh6yeFcwcagtxZxWcmVBVHMEpdASex9w4zsSPvra/ZdyNJaFrm6/p3BVVzqManBYs3Yux9M4HnuagL3UkuCY515pktpre2hMCST6j1bhisMarjvggliTgDI3x61m8qXt85lS9jiGgqYpoT+imVgScAsSCNu/r8KiOcoZ3uAsnDkvbQp4dOgTRSE7+JmBAIA7Y+e1YfKHD7vh8MoWzc9Z5ZI4RKjC3CqOmjMzeJnJwSNgFyTmpvc0t6jO5n50eC6WGGNWRGiFy5z+j6r4VRgjDaQW39R8a2HmjjAtLWScrq0AYXtlmYKuT5DJFc9ueRuIGzlY3GuWcrNLbiOLLSkqcdYnI047A42PrW2ccuL54cR2avpMXUSUxsJ0ZMyBBqwCrYGT8SAfOLe5VSlvf0PPBeKX7yRFxazQSA6ngY5iOMjUWbxemw9e1bhWgct8BYXguUtWs4lRgyFwTKx2HgUkKo7/ADA2rf6Quty+O63K0pSrmgpSlAKjuLcVjtxG0mcSSxwrgZ8cjBVz6DJ71I1Ac3cHkuYolidEeKeGcFwSpMT6wCFwdyBQEte3IijeRs6UVmOMZwoJPcgeVYN/x+GGKGWRtKTPGinbAMvu6jnYfGvE9ncTWk0M7RdWSOSMNGHCDWpUHDEnbO+9YXEeXpHtbOFHQPbSW75YMVbogAjbcZxQEvxXidvbqGuZookJwDIyopPfALHBO3ar095FHGZXkRIwNRckBAvqWO2PjUJzRwOWeSGaF4g8SzJplVnjKzKFJwp2YaR8wWG2aweO8CaLhUdsmuVrdbcrpTWXMDxtvHqGpTo3UHOO2TgEDaOH38U6CSGVJEPZkYMpxsd12qlpfwy6jFIjhGKOUYMFYAEqxB2YAjY+taxyFaT9G7eaMxtcXMkqAo0XhaONAem3iTLKThtz3IGcVL8C4L9nsY7VCqukKxl1UYLhApfSe+SM796AzOGcYtrgMbeeKYKcMY3VwpPbOknFWOD8bhuUkeMnTFI8TFhjxR7N59vnjt6VD8l8ry2jzSzSiR5Ehj2Mrf0WvLFpWJBYufCuFUAAVIcD4G0FrJAWUs7zvqAIH6aSRxn5BwPpQGbHxiE24uXdY4SofW7KFCt7pLAlcHI8/MVkWN9FMgkhkSRG7MjBlPlsRt3qAl5fmHDYbOOYLJFHDGXGoBhFo1AFfEmoKRqXxDORWVyhwRrO36TPrYySSsRrIBkdnwGkJdsZxqYknuaAlry4WNGdvdUZPntVvh94sqB1zjJG4wQVJBH3irXGrNpYmRGAJx3zggEEg43wQMfWsTlvhckAcO4YEjQAWwijPhAPkPXufPtWTc9dVsaKMNDd72TUjYBPoM1r3A+b4Lp40RJkMsZliMkZRZUXTko2SDjWu3xrYJRlSPUEVrPJ3JsFlHEd3nSIRNIXlcY21dNXYiNSQNlA7CtTMnG4nACymWMFXSNgWUFXkxoUjOzNqXA7nIrE4jzHbW8ywzypEXQyKzkIhCsqEamONWXXb5+lQd/yjLJdPKsqCGW4trpwVbqBrdUAVSDp0toXc7jfvWRzZy1LcSrNC0OroTW7LMhddM2jxLj9YacYPcEjIoCd4pxSOBEd86XkjiGBnxSMEX6ZI3r1JxBFnSA51ujuvbGEKBvPPd18qir7l5ntLa2WT/4d7ZtTA5cW7ox+rBPxrLuuFM17Bc6hpiimjK4OSZWiIIPw6Z++gMh+MW4mFuZ4hORkRF16hHfITOewNe2v0E4tznW0bSjtjSrKp8893HlioKDgE6XksqtbtDNMk7B4maZGWJYtKNq0j3AQ3cZYYPepKThTG+jutQ0pbyQ6cHJLyRPnPbA6ZH1oCl7zJaxzJbmVTM7qnTVlMilwSpZM5Vdu+PMetZF/xm2gZEnuIomk2RXdULnIHhDHfcjt61rY5Pl+19TqRdH7X9t9w9bX0un09WcaPPPfG1eudOVZr1wFnCRGPpsp6gwdeouBGwEhxsFfKggHFAbLxDikEADTzRxBmCqZGVAzHsAWIydjtTg/EkuYI5486JVDrkYOCMjI8jUTzNwSWaSCaFog8IlXTMrPGyyoFJwpyGGkY+BYedSHLnC/stpBbatfRjWPVjGrSMZxvj5UBKUpSgFKUoBWv84pJ9n1J1CqOrzLE7RyvCudYR0IYMNmwCC2jTnetgrC4jw+OdDHMgdD3U5we4wcdwQSCOxBNAadxfmpn68CLpUJIYpVdtZMQtWYkYGkEXK4OSfCc96y5ucXGoLAurqGJAXIUt9vezUsQuy+EOcA98b96nW4Bal3cwJqkXS5x7y+Db7o4x8dC+gqjcu2p6mYEPVIMm3vEP1AfgdZL5GPFv3oCBuObHik6Yi1fpZNZaT3USa2hOjwbnNwGCnGynfevJ52kHVBt1yrRrHpZ31a7qe2yyrHqyOgWwoOdQHxrYpeA2zFS0CEq/UUkdnJVifvRD80U9wKpLwC2YMDAmGxq276ZGlXfuCJHdwfIsTQGFwnj0ksyRvF0hJbpOocnWWb31A06ToyoPiz4gcYNYEPOEhdh0F0CdYUPUOo5vTaMWXRhcEFwATkYG1bHBwmBHV0jVWRBEhHZEGPCo7KNh29B6VHHlW3M0khjXTKo1pjGXEplD5B2OrfbG+T3oCP4Xzg808EQtziWKKR2GoiMypMw8WjTgdIDcgkvsPCarxbm54ZpoBAC8eCpL4DK5t0jZsKSoaSaRflA53qbh4FbI8brAgaJQkZA9xVDKoHyV3A9A7epq5d8Kgl1mSJWMiLG5I3ZFJZQT3wCzEehNAa3Y84yyTRxmBACUEh6hJUvPdQjQNA1AG2zk4974VXmfnCa1eULAjrGrHJkZWJW2luDsEIxpiZe/citgt+BWyY0QounTjA7aWd1+5pJD82Nervg1vKWMkSPqzqyM5zG0Rz/wDrdl+TGgNen5tmE00SWwfRHM0eHbXI8K2xKlAmwJuABgsfD23ArL4vzI0VtBNEkcrTnC+Nlj2glnJ16C2NMTAeHuRnG9SR4FbdR5eiokkUq7jIYghFO47ZEaDI38I9K9XHA7Z4lgeFGiTGlCPCMAjb6Ej4gn1oDTJuYZInubgl2WPrSiIudO3D7SUIM5AGpmPbYsTjc1L2PGZYbAuy65Y5/s3jlL65DciAM0mgbFm1EBRgbAbVONwO2IYGFCHBDDGzBo1iIPrmNFX5KKLwW3EJgESiIkkp5EltZPrq1eLPfO/egNY5f5llDW9s0TOzKGlky76OpJcqvi0YIBgx4iuQwx2IqV4lzG8U0sZjXCJG6ZZg0oaRI2K+HTpQuAd8glcgBgakIeAWqNG6wIGiGmMge6PFgD5a3x6a2x3Ne7ng1vIzPJErMyFCTv4SVJA9MlVO37K+goCK4fzM8ksKNGqLKZ1DFmOp4ZZE0JhcFysevBI21YzpNYt7zk6S3aLblktVdmckqD00glYaiujJSZsDV3j3wGBqfi4LbqYysSgxZ6ffwZ1ZI/eOpvF38Tb7mvMnA7ZpGlaFC741MRu2Ch3/AOFHn10KDnAoCCh5ukZrf9AnTmSCRj1csi3DSLHgKpVz4Fz4gNzjOMm3wjnKa4WApbaTcSqqa2dF6RtzOX3jyzDBTABUnBDYqXj5ahFyJ9C4RFWNcf0bB5XLDfG/VO2Nsfdei5ctFUKsCKBIJRgYxIF0Bge4IXw+mNu21Aa3wzmy5xCskcbs74kbWV0h7xrePQojw2MHOcbAd8mljzVLHEJrkA4SNpSr+BUe5kiL6dA90AEn0B9N9oPALXUjdBNUZJQ490l+oSP6/i+dem4LblWQwoVZOmykZDJlm0keYyzH6mgNctObrh2dfsYLLGx0CU62mW2gnMYBTGCZwgbPdScb1svCL3rQpKCp1jPh1Y+I8QDAg7EEAggg1bbgdsZWmMK9V1Ks/ZiCoQ7j1VVGfRV9BWVZ2iRKEjUKo7AeWdz95yc+pNAZVKUoDFsryOZFkidXRxlWU5DD1BFZNfLPKnON1w59UD6oicvC2TG/qQP1H/eHwzntXc+UfaLZ3wVQ3SmP/wAqQgZP7j9n/A/AVCZnHImbpSlKk0FKUoBSlKAUpSgFKUoBSlKAUpSgFKUoBSlKAUpSgFKUoBSlKAUpSgFKUoD47dcfI/gaskaT8D91Xk/ZO/p8RTP6p+nxFZnAnRtnLXtHv7Mher1Yv9nNlwvwV86l+G5A9K6lwP2t2UuBcB7ZjtlgXjz/APkUbD4sAK+fNGNv5IojHsf86mzRTkuGfX9lfRSqHikR1PZkYMD9RWTXyFw3iUsLZilkjb9qNmQkfEqRn5Vu3Bfa1xGHCyslwv8A9xQrkfB48b/MGp1GqzLufRFUrl3CPbPavtcQSwn1UiVPnnwt/wAtbhwrnbh1xjpXcOT2Vm6bn+pJhs/Sps0U4vhmxUryrA7jcVXNSWK0pSgFKUoBSlKAUpSgFKUoBSqZpmgFKxrq+ijGZJEQersqj7yagL7n/hsXe6RvhHmX8UBFCrlFcs2ilc0v/bDbjaC3lkPkWKxqfr4j+FarxP2s30mREsUI9Quth9X2/wCWosyl1GNdzumoVrXF+erC3yHuFZh+pHmRs+h05C/UiuB8U45dXH9PcSyA+TMdP0QeEfQVH0s55dZ+lHbP/OKy/wBhc/2Yv/cpXE6pSzP/AG5kbq1DHbH4Gq9xvsR+FUb9ofX4iqs3mvf8xVDT9gASPQj8D/hQqGHoR+Bo7Zww3/iKYJ8QH4dxQFvpk/Mfgf8ACvOCR6EfgavuD7w/zFUf9r7/AIihKkWxKdj6d69mQb5868sg7jsatSggY9PyoSkpGZacUnj3hnli8/0cjp//ACRU7a+0Hisfu30v9YJJ/wCoprUq9qTU2bU1wdDtPa7xRR4nik/3ogM/PQVqRh9tt4Pfgt2+Qdf75rlxkqgkH8fupZW5HYI/bjJ+tZoflKy/3DWXH7bxtqsu/pPn84xXE89h6716Hvfz5UsapeTuS+2mP/6N/wDir/016k9tMYOPsb/8Rf8AprhcR3r1qPrU2V1ZPJ29/bQvlZMfnKB/crG/86nOcWKjHrOT+HTrjZlOe9elmIHzpZVyyeTrE3tnuv1bWEfNnb8sVhye1viDdhbpn0jY4/tOa5mZzVw3BwNqiyjeXybrce0Xijk5uivwWOJcfXRn8ai7vmO9kHju5zny6rgfcDitee6zuRXs3PballJRyPlmQTk5O59Tufvq75Z+n3f9vyrCFz869rcjB7+v8/eaWZPHIvA0ascXA+NDOPWpsj05eDJqlWWnHr+deeuPX86WR6cvBkUrH6w9fzpSx6bMaHt9TXmLt9TSlVOvz+4i8/mfzq56fT8hSlGH3PNr/E16i/iaUoiH3PC+6Pp+Yrzcd/pSlC0eSy9EpSh09j0atj+7SlCEP1h8qrD3P8+dKUKvguRefyr0nf8An4UpUlWUr2ewpShB4NXHpShPc8H+fwq41KVBDKVWPsaUqSr4FKUoSVNUpSgFKUoVP//Z" alt="Logo de tu empresa">
    </div> -->
     <nav>
        <ul>
        <li><a href="ingresar_producto.php"><i class="fas fa-solid fa-tag"></i> Reporte</a></li>
            <li><a href="informe.php"><i class='fas fa-exclamation-circle'></i>Informe de reporte</a></li>
            <li><a href="cerrarSesion.php"><button class="buttoncerrar" type="button"><i class='fas fa-solid fa-lock'></i> </a></button></li>
        </ul>
    </nav>
 

</header>
    <h1>INFORME DE PEDIDO</h1>
    <br>    <br>
    <table border="1">
        <tr>
            <th>CODIGO</th>
            <th>NOMBRE</th>
            <th>VENDEDOR</th>
            <th>KAM</th>
            <th>CIUDAD</th>
         
            <th>COACH</th>
          
            <th>FECHA</th>
            <th>IMAGEN</th>
        </tr>

        <?php
$serverName = "192.168.2.5";
$connectionOptions = array(
    "Database" => "SKY_SAP",
    "Uid" => "sa",
    "PWD" => "SAPB1Admin"
);

// Establecer una conexión a SQL Server
$conn = sqlsrv_connect($serverName, $connectionOptions);

if (!$conn) {
    die("Error al conectar a la base de datos: " . print_r(sqlsrv_errors(), true));
}

// Consulta SQL para obtener todos los datos
$sql = "SELECT * FROM imagenes";
$query = sqlsrv_query($conn, $sql);

if ($query === false) {
    die("Error al consultar los datos: " . print_r(sqlsrv_errors(), true));
}

echo "<table>";
while ($row = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['nombre_producto'] . "</td>";
    echo "<td>" . $row['vendedor'] . "</td>";
    echo "<td>" . $row['kam'] . "</td>";
    echo "<td>" . $row['ciudad'] . "</td>";
    echo "<td>" . $row['coach'] . "</td>";
    echo "<td>" . $row['fecha']->format('Y-m-d') . "</td>";

    // Mostrar la imagen
    $imageSrc = $row['ruta_imagen']; // Suponiendo que la columna 'ruta_imagen' almacena las rutas de las imágenes
    echo "<td><img src=\"$imageSrc\" alt=\"Imagen\" width=\"100\"></td>";

    echo "</tr>";
}
echo "</table>";

// Cerrar la conexión
sqlsrv_free_stmt($query);
sqlsrv_close($conn);
?>

    </table>
<br><br>
    <center>
<a href="cerrarSesion.php">  <button class="button" type="button"  class="button type1">
            <span class="button_lg">
                <span class="button_sl"></span>
                <span class="button_text">Cerrar Sesión</span>
            </span>
        </button></center></a>
</body>
</html>
