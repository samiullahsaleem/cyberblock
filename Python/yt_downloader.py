import argparse

import pytube

# add an argparse for url
parser = argparse.ArgumentParser()
parser.add_argument("--url", help="Enter the url of the video")

# use pytube to download the video
args = parser.parse_args()
url = args.url
try:
    yt = pytube.YouTube(url)
except pytube.exceptions.RegexMatchError:
    print("Invalid URL")
    exit(-1)
video = yt.streams.first()
video.download()
