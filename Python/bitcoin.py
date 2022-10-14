"""
This python program is for Bitcoin Price Index,
it accepts the number of Bitcoins users want to buy
and displays the current market price.
---by Mayuresh Choudhary
"""
# Bitcoin Price Index
import requests
import sys

def main():
    #requesting
    json_ = requests.get("https://api.coindesk.com/v1/bpi/currentprice.json")
    json_ = json_.json()

    while True:
        try:
            if not sys.argv[1]:
                raise IndexError
            else:
                no_bitcoin = float(sys.argv[1])
                rate = json_["bpi"]["USD"]["rate_float"]
                cost = no_bitcoin * rate
                print(f"${cost:,.4f}")
                break
        except ValueError:
            print("Command Line argument not number")
            sys.exit(1)
        except IndexError:
            print("Command Line argument missing")
            sys.exit(1)

if __name__ == "__main__":
    main()
