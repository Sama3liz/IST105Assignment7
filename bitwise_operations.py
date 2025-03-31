import sys
import json

# This function validate if the input are numbers
def validate_input(input_data):
    try:
        numbers = list(map(int, input_data.split(",")))
        return numbers
    except ValueError:
        return None

# This function makes the operations
def bitwise_operations(numbers):
    bitwise_and = numbers[0]
    bitwise_or = numbers[0]
    bitwise_xor = numbers[0]

    for num in numbers[1:]:
        bitwise_and &= num
        bitwise_or |= num
        bitwise_xor ^= num

    return bitwise_and, bitwise_or, bitwise_xor

# This function filter the numbers above the threshold
def filter_numbers(numbers, threshold):
    filtered_numbers = [num for num in numbers if num > threshold]
    return filtered_numbers

if __name__ == "__main__":
    if len(sys.argv) != 3:
        print(json.dumps({"error": "Invalid input"}))
        sys.exit(1)

    numbers_input = sys.argv[1]
    threshold = int(sys.argv[2])

    numbers = validate_input(numbers_input)

    if numbers is None:
        print(json.dumps({"error": "Invalid input. Please enter integers separated by commas."}))
        sys.exit(1)

    bitwise_and, bitwise_or, bitwise_xor = bitwise_operations(numbers)
    filtered_numbers = filter_numbers(numbers, threshold)

    result = {
        "bitwise_and": bitwise_and,
        "bitwise_or": bitwise_or,
        "bitwise_xor": bitwise_xor,
        "filtered_numbers": filtered_numbers
    }

    print(json.dumps(result))
