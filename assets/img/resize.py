import os
from PIL import Image

def resize_image(image_path, max_size):
    img = Image.open(image_path)
    if max(img.size) > max_size:
        scale_ratio = max_size / max(img.size)
        new_size = tuple([int(dim * scale_ratio) for dim in img.size])
        img = img.resize(new_size, Image.ANTIALIAS)
        img.save(image_path)

def resize_images_in_folder(folder_path, max_size):
    for filename in os.listdir(folder_path):
        print(filename)
        if filename.endswith(('.png', '.jpg', '.jpeg')):
            image_path = os.path.join(folder_path, filename)
            resize_image(image_path, max_size)

# Usage
folder_path = '.'  # replace with your folder path
resize_images_in_folder(folder_path, 90)
