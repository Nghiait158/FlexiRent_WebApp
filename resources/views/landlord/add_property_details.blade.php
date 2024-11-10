<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FlexiRent</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="{{('/Frontend/Image/favicon/FlexiRent.png')}}">
    <link rel="stylesheet" href="/Frontend/css/Landlord/addPropertyDetails.css">
</head>

<body>

    <div class="main">
        <div class="logo">
            <a href="{{URL::to('/HomePage')}}">FlexiRent</a>
        </div>

        <div class="add-details-container">

            <div class="title">
                <h3>Tell us about your place</h3>
                <p>Some basic information about your apartment</p>
            </div>


            <div class="input-container">
                <form action="">
                    <div class="input-form">
                        <label for=""><b>What’s the size of the apartment?</b>
                        </label>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="e.g. 50m2" required>
                    </div>
                    <hr class="solid-line">

                    <div class="input-form">
                        <label for=""><b>What is the accommodation type?
                            </b>
                        </label>
                        <select class="form-select" aria-label="Default select example" required>
                            <option selected>Please select</option>
                            <option value="1">Entire Apartment</option>
                            <option value="2">Private Room</option>
                            <option value="3">Shared Place</option>
                            <option value="4">Entire House</option>
                        </select>
                    </div>
                    <hr class="solid-line">

                    <div class="input-form">
                        <label for=""><b>On which floor is the apartment located?</b>
                        </label>
                        <input min="1" type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
                    </div>
                    <hr class="solid-line">

                    <div class="input-form">
                        <label for=""><b>What’s the maximum number of tenants?
                            </b>
                        </label>
                        <input min="1" type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
                    </div>
                    <hr class="solid-line">

                    <div class="input-form">
                        <label for=""><b>What’s the minimum booking duration? (In month)
                            </b>
                        </label>
                        <input min="1" type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
                    </div>
                    <hr class="solid-line">

                    <div class="input-form">
                        <label for=""><b>Do you want to set a maximum booking <br> duration?
                            </b>
                        </label>
                        <div class="form-check form-switch">
                            <label class="form-check-label me-2" for="flexSwitchCheckDefault">No</label>
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                            <label class="form-check-label ms-2" for="flexSwitchCheckDefault">Yes</label>
                        </div>


                    </div>
                    <hr class="solid-line">

                    <div class="dynamic-input-container" id="dynamicInputContainer"></div>

                    <div class="input-form">
                        <label for=""><b>How many rooms inside your property?
                            </b>
                        </label>
                        <input min="1" type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
                    </div>
                </form>
                <script>
                    document.getElementById('flexSwitchCheckDefault').addEventListener('change', function() {
                        const dynamicContainer = document.getElementById('dynamicInputContainer');

                        // Clear existing content in dynamic container
                        dynamicContainer.innerHTML = '';

                        // If switch is checked (Yes), add new input form
                        if (this.checked) {
                            dynamicContainer.innerHTML = `
                    <div class="input-form">
                        <label for=""><b>What’s the maximum booking duration?(In months)</b></label>
                        <input min="2" type="number" class="form-control" required>
                    </div>
                    <hr class="solid-line">
                `;
                        }
                    });
                </script>
            </div>

            <div class="progress-bar">

            </div>

            <div class="foot">
                <div class="prevBtn">
                    <button type="button" width="auto" data-testid="ListingCreationWizard-Footer-PreviousButton" class="css-d7fxv6"><span class="css-1v6agb7"><span><svg width="18" height="18" viewBox="0 0 18 18" class="css-6su6fj">
                                    <polygon points="7.95 2.05 10.88 2.05 4.97 7.96 17 7.96 17 10.04 4.97 10.04 10.88 15.95 7.95 15.95 1 9 7.95 2.05" fill="#24272e"></polygon>
                                </svg></span></span><span class="css-yxk1em">Previous</span></button>
                </div>
                <div class="nextBtn">
                    <button type="submit" data-testid="ListingCreationWizard-Footer-NextOrFinishButton" class="css-1pisbf5"><span>Next</span></button>
                </div>
            </div>
        </div>


        <div class="picture">
            <div class="text">
                <h3>Good to know</h3>
                <p>Tenants often view listings based on the <br> number of bedrooms. Make sure to include <br> the details about the sleeping arrangements, <br> and choose the option that best describes <br> your place.</p>
            </div>
            <div class="footer">
                <button type="reset">

                    <svg width="16" height="16" viewBox="0 0 16 16" class="css-6su6fj">
                        <polygon fill="white" points="10.95 2.21 9.94 0.56 6.01 0.56 5.01 2.21 2.44 2.21 2.69 4.01 13.31 4.01 13.56 2.21 10.95 2.21"></polygon>
                        <path fill="transparent" d="M12.46,5.35l-.82,7.9A1.73,1.73,0,0,1,10,14.78H6.1a1.73,1.73,0,0,1-1.69-1.52L3.57,5.35Z"></path>
                        <path fill="white" d="M13.32,5H2.71l.14,1.22.82,7.28A2.45,2.45,0,0,0,6.1,15.53H10a2.48,2.48,0,0,0,2.44-2.11L13.21,6h0ZM10.9,13.23a1,1,0,0,1-1,.8H6.1a1,1,0,0,1-.95-.77L4.33,6H11.7Z"></path>
                    </svg></span></span>
                    <p style="color:white">Delete listing</p>


                </button>
                <button type="button" data-testid="HelpWidgetTriggerButton" class="css-mvc9ga">
                    <svg width="22" height="22" viewBox="0 0 22 22" fill="#542EBC" class="css-6su6fj">
                        <path fill="transparent" d="M11,2a9,9,0,1,0,9,9A9,9,0,0,0,11,2Zm0,13.22A4.22,4.22,0,1,1,15.22,11,4.22,4.22,0,0,1,11,15.22Z"></path>
                        <path fill="white" d="M11,16a5,5,0,1,1,5-5A5,5,0,0,1,11,16Zm0-9a4,4,0,1,0,4,4A4,4,0,0,0,11,7Z"></path>
                        <path fill="transparent" d="M7.82,7.82,4.64,4.64a9,9,0,0,0,0,12.72l3.18-3.18A4.49,4.49,0,0,1,7.82,7.82Z"></path>
                        <path fill="transparent" d="M14.18,7.82l3.18-3.18a9,9,0,0,1,0,12.72l-3.18-3.18A4.49,4.49,0,0,0,14.18,7.82Z"></path>
                        <path fill="white" d="M11,1.25A9.75,9.75,0,1,0,20.75,11,9.76,9.76,0,0,0,11,1.25Zm6.17,4.29a8.21,8.21,0,0,1,0,10.92l-2.3-2.3a5,5,0,0,0,0-6.32ZM4.83,16.46a8.21,8.21,0,0,1,0-10.92l2.3,2.3a5,5,0,0,0,0,6.32Zm.71.71,3-3-.36-.35a4,4,0,0,1,0-5.66l.36-.35-3-3a8.21,8.21,0,0,1,10.92,0l-3,3,.35.35a4,4,0,0,1,0,5.66l-.35.35,3,3a8.21,8.21,0,0,1-10.92,0Z"></path>
                    </svg></span></span>
                    <p style="color:white">Need Help?</p>
                </button>
            </div>
        </div>
    </div>
</body>

</html>