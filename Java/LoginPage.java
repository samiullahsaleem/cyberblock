import javax.swing.*;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
class Login1 extends JFrame implements ActionListener {
Container c1 = getContentPane();
JLabel label = new JLabel("USERNAME");
JLabel pLabel = new JLabel("PASSWORD");
JTextField userTextField = new JTextField();
JPasswordField passwordField = new JPasswordField();
JButton loginButton = new JButton("LOGIN");
JButton resetButton = new JButton("RESET");
JCheckBox showPassword = new JCheckBox("Show Password");
public void setLayoutManager() {
c1.setLayout(null);
}
public void setLocationAndSize() {
label.setBounds(50, 150, 100, 30);
pLabel.setBounds(50, 220, 100, 30);
userTextField.setBounds(150, 150, 150, 30);
passwordField.setBounds(150, 220, 150, 30);
showPassword.setBounds(150, 250, 150, 30);
loginButton.setBounds(50, 300, 100, 30);
loginButton.setForeground(Color.BLUE);
resetButton.setBounds(200, 300, 100, 30);
resetButton.setForeground(Color.BLUE);
}
Login1() {
setLayoutManager();
setLocationAndSize();
addComponentsToContainer();
addActionEvent();
}
public void addComponentsToContainer() {
c1.add(label);
c1.add(pLabel);
c1.add(userTextField);
c1.add(passwordField);
c1.add(showPassword);
c1.add(loginButton);
c1.add(resetButton);
}
public void addActionEvent() {
loginButton.addActionListener(this);
resetButton.addActionListener(this);
showPassword.addActionListener(this);
}
public void actionPerformed(ActionEvent e) {
if (e.getSource() == loginButton)
{
JTextField thirdTextField = new JTextField();
userTextField.setBounds(150, 350, 150, 30);
thirdTextField.setBounds(150, 150, 150, 30);
c1.add(thirdTextField);
}
if (e.getSource() == resetButton) {
userTextField.setText("");
passwordField.setText("");
}
if (e.getSource() == showPassword) {
if (showPassword.isSelected()) {
passwordField.setEchoChar((char) 0);
} else {
passwordField.setEchoChar('*');
}
}
}
}
public class LoginPage{
public static void main(String[] a) {
Login1 frame = new Login1();
frame.setTitle("Login Page");
frame.setVisible(true);
frame.setBackground(Color.BLACK);
frame.setBounds(10, 10, 370, 600);
frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
frame.setResizable(false);
}
}

