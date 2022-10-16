from flask import Flask, render_template
import pandas as pd

app = Flask(__name__, template_folder='templates')

df = pd.read_csv("data.csv")
df.set_index("ID", inplace=True)

@app.route("/")
def index():
    return render_template("index.html")

@app.route("/jsondata/<id>", methods=["GET", "POST"])
def getData(id):
    try:
        std_data = df.loc[int(id)]
    except:
        std_data = pd.Series({ "Error" : f"ID: {id} not found"})
    return std_data.to_json()

if __name__ == '__main__':
    app.run(debug=True)