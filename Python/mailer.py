import smtplib
import pandas as pd
import csv
import ssl
from email.mime.text import MIMEText
from email.utils import formataddr
from email.mime.multipart import MIMEMultipart  
from email.mime.base import MIMEBase  
from email import encoders 

sender_email = "<Your Gmail Content>"
sender_name = "Sender's Name"
password = "your password"

e = pd.read_csv("test_mail.csv")
receiver_emails = e['receiver_emails'].values
receiver_names = e["receiver_names"].values

for receiver_email, receiver_name in zip(receiver_emails, receiver_names):
        
        
        print("Sending to " + receiver_name)
        msg = MIMEMultipart()
        msg['Subject'] = 'Subject part 1 | ' + receiver_name + ' | subject part 2'
        msg['From'] = formataddr((sender_name, sender_email))
        msg['To'] = formataddr((receiver_name, receiver_email))
        
        msg.attach(MIMEText("""<h2>Hello again, """ + receiver_name + """</h2>
                            <p> Hello, 
                            Greetings from Build with DevScript!!</p>
                          <br>
                                        
                                  """, 'html'))


        filename = "Detailed_Schedule_new.rar"

        try:
            with open(filename, "rb") as attachment:
                            part = MIMEBase("application", "octet-stream")
                            part.set_payload(attachment.read())

            encoders.encode_base64(part)
            part.add_header(
                    "Content-Disposition",
                    f"attachment; filename= {filename}",
            )

            msg.attach(part)
        except Exception as e:
                print(f'Oh no! We didnt found the attachment!n{e}')
                break

        try:
                server = smtplib.SMTP("smtp.gmail.com", 587)
                context = ssl.create_default_context()
                server.starttls(context=context)
                server.login(sender_email, password)
                server.sendmail(sender_email, receiver_email, msg.as_string())
                print('Email sent!')
        except Exception as e:
                print(f'Oh no! Something bad happened!n{e}')
                break
        finally:
                print('Closing the server...')
                server.quit()
