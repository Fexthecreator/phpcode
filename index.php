<!--//////////////////////////////////////////////////////////////
                      START PHP
/////////////////////////////////////////////////////////////-->

<?php include 'server.php';?>
<?php
$username = $_POST['username'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$state = $_POST['state'];

$query = mysqli_query($con, "SELECT * FROM `data` WHERE username = '$username'");
if(mysqli_num_rows($query)>0) {
	echo "<font color='red'>user name not available";
}
else {
if(!empty($username) || !empty($firstname) || !empty($lastname)){
	$sql = "INSERT INTO data(username, firstname, lastname, state) VALUES ('$username','$firstname','$lastname','$state')";
	if( !mysqli_query($con, $sql))
	{
		echo "There are some problem while inserting data";
	}
	else{
		echo "<font color='green'>registration successful";
	}
}else{
	echo "<font color='red'>fill all";
}
}
?>
<br>
<!--//////////////////////////////////////////////////////////////
                            END PHP
/////////////////////////////////////////////////////////////-->







<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="" method="post">
	<h1>submit your info</h1>
	<hr>
	<input type="text" placeholder="username"  name="username" >
	<input type="text" placeholder="firstname" name="firstname" >
	<input type="text" placeholder="lastname" name="lastname" >
	<input type="text" placeholder="state" name="state" >
	<button type="submit" name="send">submit</button>
	</form>
  <hr>
  <a href="users.php"><button>View registered members</button></a>
	<hr>


	<!--/////////////////////////////////////////////////////////////////////
	trading view widget start
	///////////////////////////////////////////////////////////////////////-->
	<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/stocks-usa/" rel="noopener" target="_blank">
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
  {
  "title": "Stocks",
  "tabs": [
    {
      "title": "Financial",
      "symbols": [
        {
          "s": "NYSE:JPM",
          "d": "Jpmorgan Chase & Co"
        },
        {
          "s": "NYSE:WFC",
          "d": "Wells Fargo Co New"
        },
        {
          "s": "NYSE:BAC",
          "d": "Bank Amer Corp"
        },
        {
          "s": "NYSE:HSBC",
          "d": "Hsbc Hldgs Plc"
        },
        {
          "s": "NYSE:C",
          "d": "Citigroup Inc"
        },
        {
          "s": "NYSE:MA",
          "d": "Mastercard Incorporated"
        }
      ]
    },
    {
      "title": "Technology",
      "symbols": [
        {
          "s": "NASDAQ:AAPL",
          "d": "Apple"
        },
        {
          "s": "NASDAQ:GOOGL",
          "d": "Google Inc"
        },
        {
          "s": "NASDAQ:MSFT",
          "d": "Microsoft Corp"
        },
        {
          "s": "NASDAQ:FB",
          "d": "Meta Platforms Inc"
        },
        {
          "s": "NYSE:ORCL",
          "d": "Oracle Corp"
        },
        {
          "s": "NASDAQ:INTC",
          "d": "Intel Corp"
        }
      ]
    },
    {
      "title": "Services",
      "symbols": [
        {
          "s": "NASDAQ:AMZN",
          "d": "Amazon Com Inc"
        },
        {
          "s": "NYSE:BABA",
          "d": "Alibaba Group Hldg Ltd"
        },
        {
          "s": "NYSE:T",
          "d": "At&t Inc"
        },
        {
          "s": "NYSE:WMT",
          "d": "Wal-mart Stores Inc"
        },
        {
          "s": "NYSE:V",
          "d": "Visa Inc"
        }
      ]
    }
  ],
  "width": 400,
  "height": 660,
  "showChart": true,
  "showFloatingTooltip": false,
  "locale": "en",
  "plotLineColorGrowing": "#2962FF",
  "plotLineColorFalling": "#2962FF",
  "belowLineFillColorGrowing": "rgba(41, 98, 255, 0.12)",
  "belowLineFillColorFalling": "rgba(41, 98, 255, 0.12)",
  "belowLineFillColorGrowingBottom": "rgba(41, 98, 255, 0)",
  "belowLineFillColorFallingBottom": "rgba(41, 98, 255, 0)",
  "gridLineColor": "rgba(240, 243, 250, 0)",
  "scaleFontColor": "rgba(120, 123, 134, 1)",
  "showSymbolLogo": true,
  "symbolActiveColor": "rgba(41, 98, 255, 0.12)",
  "colorTheme": "light"
}
  </script>
</div>
<!-- TradingView Widget END -->



<hr>


<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/cryptocurrencies/" rel="noopener" target="_blank">
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
  {
  "title": "Cryptocurrencies",
  "title_raw": "Cryptocurrencies",
  "tabs": [
    {
      "title": "Overview",
      "title_raw": "Overview",
      "symbols": [
        {
          "s": "CRYPTOCAP:TOTAL"
        },
        {
          "s": "BITSTAMP:BTCUSD"
        },
        {
          "s": "BITSTAMP:ETHUSD"
        },
        {
          "s": "FTX:SOLUSD"
        },
        {
          "s": "BINANCE:LUNAUSD"
        },
        {
          "s": "COINBASE:UNIUSD"
        }
      ],
      "quick_link": {
        "title": "More cryptocurrencies",
        "href": "/markets/cryptocurrencies/prices-all/"
      }
    },
    {
      "title": "Bitcoin",
      "title_raw": "Bitcoin",
      "symbols": [
        {
          "s": "BITSTAMP:BTCUSD"
        },
        {
          "s": "COINBASE:BTCEUR"
        },
        {
          "s": "COINBASE:BTCGBP"
        },
        {
          "s": "BITFLYER:BTCJPY"
        },
        {
          "s": "CEXIO:BTCRUB"
        },
        {
          "s": "CME:BTC1!"
        }
      ],
      "quick_link": {
        "title": "More Bitcoin pairs",
        "href": "/symbols/BTCUSD/markets/"
      }
    },
    {
      "title": "Ethereum",
      "title_raw": "Ethereum",
      "symbols": [
        {
          "s": "BITSTAMP:ETHUSD"
        },
        {
          "s": "KRAKEN:ETHEUR"
        },
        {
          "s": "COINBASE:ETHGBP"
        },
        {
          "s": "BITFLYER:ETHJPY"
        },
        {
          "s": "BINANCE:ETHBTC"
        },
        {
          "s": "BINANCE:ETHUSDT"
        }
      ],
      "quick_link": {
        "title": "More Ethereum pairs",
        "href": "/symbols/ETHUSD/markets/"
      }
    },
    {
      "title": "Solana",
      "title_raw": "Solana",
      "symbols": [
        {
          "s": "FTX:SOLUSD"
        },
        {
          "s": "BINANCE:SOLEUR"
        },
        {
          "s": "COINBASE:SOLGBP"
        },
        {
          "s": "BINANCE:SOLBTC"
        },
        {
          "s": "HUOBI:SOLETH"
        },
        {
          "s": "BINANCE:SOLUSDT"
        }
      ],
      "quick_link": {
        "title": "More Solana pairs",
        "href": "/symbols/SOLUSD/markets/"
      }
    },
    {
      "title": "Uniswap",
      "title_raw": "Uniswap",
      "symbols": [
        {
          "s": "COINBASE:UNIUSD"
        },
        {
          "s": "KRAKEN:UNIEUR"
        },
        {
          "s": "COINBASE:UNIGBP"
        },
        {
          "s": "BINANCE:UNIBTC"
        },
        {
          "s": "KRAKEN:UNIETH"
        },
        {
          "s": "BINANCE:UNIUSDT"
        }
      ],
      "quick_link": {
        "title": "More Uniswap pairs",
        "href": "/symbols/UNIUSD/markets/"
      }
    }
  ],
  "title_link": "/markets/cryptocurrencies/prices-all/",
  "width": 400,
  "height": 660,
  "showChart": true,
  "showFloatingTooltip": false,
  "locale": "en",
  "plotLineColorGrowing": "#2962FF",
  "plotLineColorFalling": "#2962FF",
  "belowLineFillColorGrowing": "rgba(41, 98, 255, 0.12)",
  "belowLineFillColorFalling": "rgba(41, 98, 255, 0.12)",
  "belowLineFillColorGrowingBottom": "rgba(41, 98, 255, 0)",
  "belowLineFillColorFallingBottom": "rgba(41, 98, 255, 0)",
  "gridLineColor": "rgba(240, 243, 250, 0)",
  "scaleFontColor": "rgba(120, 123, 134, 1)",
  "showSymbolLogo": true,
  "symbolActiveColor": "rgba(41, 98, 255, 0.12)",
  "colorTheme": "light"
}
  </script>
</div>
<!-- TradingView Widget END -->
		<!--/////////////////////////////////////////////////////////////////////
	trading view widget end
	///////////////////////////////////////////////////////////////////////-->
</body>
</html>