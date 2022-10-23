import matplotlib.pyplot as plt
import numpy as np
import tensorflow as tf
from tensorflow.keras.datasets import mnist
from tensorflow.keras.layers import Dense, Dropout
from tensorflow.keras.models import Sequential
from tensorflow.keras.optimizers import RMSprop

# Load the data, shuffled and split between train and test sets
(x_train, y_train), (x_test, y_test) = mnist.load_data()

# Reshape the data to 1D
x_train = x_train.reshape(60000, 784)
x_test = x_test.reshape(10000, 784)
x_train = x_train.astype("float32")
x_test = x_test.astype("float32")
x_train /= 255
x_test /= 255

# Convert class vectors to binary class matrices
y_train = tf.keras.utils.to_categorical(y_train, 10)
y_test = tf.keras.utils.to_categorical(y_test, 10)

# Build the model
model = Sequential()
model.add(Dense(512, activation="relu", input_shape=(784,)))
model.add(Dropout(0.2))
model.add(Dense(512, activation="relu"))
model.add(Dropout(0.2))
model.add(Dense(10, activation="softmax"))

# Compile the model
model.compile(
    loss="categorical_crossentropy", optimizer=RMSprop(), metrics=["accuracy"]
)

# Train the model
history = model.fit(
    x_train,
    y_train,
    batch_size=128,
    epochs=20,
    verbose=2,
    validation_data=(x_test, y_test),
)

# Evaluate the model
score = model.evaluate(x_test, y_test, verbose=0)
print("Test loss:", score[0])
print("Test accuracy:", score[1])

# Plot the loss and accuracy
plt.plot(history.history["loss"])
plt.plot(history.history["val_loss"])
plt.title("Model loss")
plt.ylabel("Loss")
plt.xlabel("Epoch")
plt.legend(["Train", "Test"], loc="upper left")
plt.show()

plt.plot(history.history["accuracy"])
plt.plot(history.history["val_accuracy"])
plt.title("Model accuracy")
plt.ylabel("Accuracy")
plt.xlabel("Epoch")
plt.legend(["Train", "Test"], loc="upper left")
plt.show()

# Save the model
model.save("mnist_keras.h5")

# Load the model
model = tf.keras.models.load_model("mnist_keras.h5")

# Predict the model
predictions = model.predict(x_test)

# Print the predictions
print(np.argmax(np.round(predictions[0])))
plt.imshow(x_test[0].reshape(28, 28), cmap=plt.cm.binary)
plt.show()

# Print the predictions
print(np.argmax(np.round(predictions[1])))
plt.imshow(x_test[1].reshape(28, 28), cmap=plt.cm.binary)
plt.show()
