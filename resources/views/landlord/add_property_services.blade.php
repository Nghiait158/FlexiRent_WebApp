<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FlexiRent</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="{{('/Frontend/Image/favicon/FlexiRent.png')}}">
    <link rel="stylesheet" href="/Frontend/css/Landlord/addPropertyServices.css">
</head>

<body>

    <div class="main">
        <div class="logo">
            <a href="{{URL::to('/HomePage')}}">FlexiRent</a>
        </div>

        <div class="add-services-container">

            <div class="title">
                <h3>Please confirm that you provide these essential services</h3>

            </div>

            <div data-testid="EssentialServices-sectionBanner" class="alert">
                <div><svg height="20px" width="20px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        viewBox="0 0 507.425 507.425" xml:space="preserve">
                        <path style="fill:#FFC52F;" d="M329.312,129.112l13.6,22l150.8,242.4c22.4,36,6,65.2-36.8,65.2h-406.4c-42.4,0-59.2-29.6-36.8-65.6
	l198.8-320.8c22.4-36,58.8-36,81.2,0L329.312,129.112z" />
                        <g>
                            <path style="fill:#F4EFEF;" d="M253.712,343.512c-10.8,0-20-8.8-20-20v-143.2c0-10.8,9.2-20,20-20s20,8.8,20,20v143.2
		C273.712,334.312,264.512,343.512,253.712,343.512z" />
                            <path style="fill:#F4EFEF;" d="M253.312,407.112c-5.2,0-10.4-2-14-6c-3.6-3.6-6-8.8-6-14s2-10.4,6-14c3.6-3.6,8.8-6,14-6
		s10.4,2,14,6c3.6,3.6,6,8.8,6,14s-2,10.4-6,14C263.712,404.712,258.512,407.112,253.312,407.112z" />
                        </g>
                        <path d="M456.912,465.512h-406.4c-22,0-38.4-7.6-46-21.6s-5.6-32.8,6-51.2l198.8-321.6c11.6-18.8,27.2-29.2,44.4-29.2l0,0
	c16.8,0,32.4,10,43.6,28.4l35.2,56.4l0,0l13.6,22l150.8,243.6c11.6,18.4,13.6,37.2,6,51.2
	C495.312,457.912,478.912,465.512,456.912,465.512z M253.312,49.912L253.312,49.912c-14,0-27.2,8.8-37.6,25.2l-198.8,321.6
	c-10,16-12,31.6-5.6,43.2s20.4,17.6,39.2,17.6h406.4c18.8,0,32.8-6.4,39.2-17.6c6.4-11.2,4.4-27.2-5.6-43.2l-150.8-243.6l-13.6-22
	l-35.2-56.4C280.512,58.712,267.312,49.912,253.312,49.912z" />
                        <path d="M249.712,347.512c-13.2,0-24-10.8-24-24v-143.2c0-13.2,10.8-24,24-24s24,10.8,24,24v143.2
	C273.712,336.712,262.912,347.512,249.712,347.512z M249.712,164.312c-8.8,0-16,7.2-16,16v143.2c0,8.8,7.2,16,16,16s16-7.2,16-16
	v-143.2C265.712,171.512,258.512,164.312,249.712,164.312z" />
                        <path d="M249.712,411.112L249.712,411.112c-6.4,0-12.4-2.4-16.8-6.8c-4.4-4.4-6.8-10.8-6.8-16.8c0-6.4,2.4-12.4,6.8-16.8
	c4.4-4.4,10.8-7.2,16.8-7.2c6.4,0,12.4,2.4,16.8,7.2c4.4,4.4,7.2,10.4,7.2,16.8s-2.4,12.4-7.2,16.8
	C262.112,408.312,256.112,411.112,249.712,411.112z M249.712,371.112c-4,0-8.4,1.6-11.2,4.8c-2.8,2.8-4.8,7.2-4.8,11.2
	c0,4.4,1.6,8.4,4.8,11.2c2.8,2.8,7.2,4.8,11.2,4.8s8.4-1.6,11.2-4.8c2.8-2.8,4.8-7.2,4.8-11.2s-1.6-8.4-4.8-11.2
	C258.112,372.712,253.712,371.112,249.712,371.112z" />
                    </svg></div>
                <div class="CTA">
                    <div class="CTA-title">Offering these services is necessary for renting out your apartment.</div>
                    <div class="CTA-subtitle">Our tenants expect to find these services. Please make sure to offer them to increase your chances of successful bookings.</div>
                </div>
            </div>

            <div class="input-container">
                <form action="{{URL::to('landlord/add_property_amenities')}}">
                    <div class="input-form">
                        <label for=""><b>Do you offer Wifi?
                            </b>
                        </label>
                        <div class="form-check form-switch">
                            <input class="form-check-input custom-switch" type="checkbox" role="switch" id="flexSwitchCheckDefault1" name="wifi" value="1">
                        </div>
                    </div>
                    <hr class="solid-line">

                    <div class="dynamic-input-container" id="dynamicInputContainer1"></div>

                    <script>
                        document.getElementById('flexSwitchCheckDefault1').addEventListener('change', function() {
                            const dynamicContainer = document.getElementById('dynamicInputContainer1');

                            // Clear existing content in dynamic container
                            dynamicContainer.innerHTML = '';

                            // If switch is checked (Yes), add new input form
                            if (this.checked) {
                                dynamicContainer.innerHTML = `
                    <div class="input-form">
                        <label for=""><b>Internet speed? (Optional)</b><br></label>
                        <input type="text" name="internetSpeed" class="form-control small" placeholder="Mbps">
                    </div>
                    <hr class="solid-line">
                `;
                            }
                        });
                    </script>

                    {{-- <div class="input-form">
                        <label for=""><b>Is washing machine available?
                            </b>
                        </label>
                        <div class="form-check form-switch">
                            <input class="form-check-input custom-switch" type="checkbox" role="switch" id="flexSwitchCheckDefault2">
                        </div>
                    </div>
                    <hr class="solid-line">

                    <div class="dynamic-input-container" id="dynamicInputContainer2"></div>

                    <script>
                        document.getElementById('flexSwitchCheckDefault2').addEventListener('change', function() {
                            const dynamicContainer = document.getElementById('dynamicInputContainer2');

                            // Clear existing content in dynamic container
                            dynamicContainer.innerHTML = '';

                            // If switch is checked (Yes), add new input form
                            if (this.checked) {
                                dynamicContainer.innerHTML = `
                    <div class="input-form">
                        <label for=""><b>Where is the washing machine located?</b><br></label>
                        <select class="form-select" aria-label="Default select example" required>
                            <option selected>Available</option>
                            <option value="1">In the Apartment</option>
                            <option value="2">In the Building</option>
                            <option value="3">Near the building</option>
                        </select>
                    </div>
                    <hr class="solid-line">
                `;
                            }
                        });
                    </script> --}}
            </div>



            <div class="foot">
                <div class="progress-bar-container">
                    <div class="progress-bar" style="width: 30%;"></div>
                </div>
                <div class="button">
                    <div class="prevBtn">
                        <button id="prevButton" type="button" width="auto" data-testid="ListingCreationWizard-Footer-PreviousButton" class="css-d7fxv6"><span class="css-1v6agb7"><span><svg width="18" height="18" viewBox="0 0 18 18" class="css-6su6fj">
                                        <polygon points="7.95 2.05 10.88 2.05 4.97 7.96 17 7.96 17 10.04 4.97 10.04 10.88 15.95 7.95 15.95 1 9 7.95 2.05" fill="#24272e"></polygon>
                                    </svg></span></span><span class="css-yxk1em">Previous</span></button>
                    </div>
                    <div class="nextBtn">
                        <button id="nextButton" type="submit" data-testid="ListingCreationWizard-Footer-NextOrFinishButton" class="css-1pisbf5"><span>Next</span></button>
                    </div>
                </div>
            </div>
            </form>
            <script>
                document.getElementById('prevButton').addEventListener('click', function() {
                    // Logic to go to the previous page
                    window.history.back(); // This goes back to the previous page in the browser history
                });

                function startProgress() {
                    var progressBar = document.querySelector('.progress-bar');
                    progressBar.style.animation = 'fillProgress 2s forwards'; // Animate to 50% over 2 seconds
                }

                // Start the progress animation when the page loads
                window.onload = startProgress;
            </script>
        </div>


        <div class="picture">
            <div class="text">
                <h3>What your tenants expect</h3>
                <p>Tenants moving to a new country or a new city depend on essential services. From administrative support for registration to Wi-Fi, mid-term rentals are not complete without them.</p>
            </div>
            <div class="footer">
                <button type="reset" onclick="toggleDeleteSection()">

                    <svg width="16" height="16" viewBox="0 0 16 16" class="css-6su6fj">
                        <polygon fill="white" points="10.95 2.21 9.94 0.56 6.01 0.56 5.01 2.21 2.44 2.21 2.69 4.01 13.31 4.01 13.56 2.21 10.95 2.21"></polygon>
                        <path fill="transparent" d="M12.46,5.35l-.82,7.9A1.73,1.73,0,0,1,10,14.78H6.1a1.73,1.73,0,0,1-1.69-1.52L3.57,5.35Z"></path>
                        <path fill="white" d="M13.32,5H2.71l.14,1.22.82,7.28A2.45,2.45,0,0,0,6.1,15.53H10a2.48,2.48,0,0,0,2.44-2.11L13.21,6h0ZM10.9,13.23a1,1,0,0,1-1,.8H6.1a1,1,0,0,1-.95-.77L4.33,6H11.7Z"></path>
                    </svg></span></span>
                    <p style="color:white">Delete listing</p>

                </button>

                <script>
                    function toggleDeleteSection() {
                        var deleteSection = document.getElementById('deleteSection');
                        var overlay = document.getElementById('overlay')
                        if (deleteSection.style.display === 'none' || deleteSection.style.display === '' || overlay.style.display === 'none' || overlay.style.display === '') {
                            deleteSection.style.display = 'block';
                            overlay.style.display = 'block';
                        } else {
                            deleteSection.style.display = 'none';
                            overlay.style.display = 'none';
                        }
                    }
                </script>

                <button type="button" data-testid="HelpWidgetTriggerButton" class="css-mvc9ga" onclick="toggleHelpSection()">
                    <svg width="22" height="22" viewBox="0 0 22 22" fill="#542EBC" class="css-6su6fj">
                        <path fill="transparent" d="M11,2a9,9,0,1,0,9,9A9,9,0,0,0,11,2Zm0,13.22A4.22,4.22,0,1,1,15.22,11,4.22,4.22,0,0,1,11,15.22Z"></path>
                        <path fill="white" d="M11,16a5,5,0,1,1,5-5A5,5,0,0,1,11,16Zm0-9a4,4,0,1,0,4,4A4,4,0,0,0,11,7Z"></path>
                        <path fill="transparent" d="M7.82,7.82,4.64,4.64a9,9,0,0,0,0,12.72l3.18-3.18A4.49,4.49,0,0,1,7.82,7.82Z"></path>
                        <path fill="transparent" d="M14.18,7.82l3.18-3.18a9,9,0,0,1,0,12.72l-3.18-3.18A4.49,4.49,0,0,0,14.18,7.82Z"></path>
                        <path fill="white" d="M11,1.25A9.75,9.75,0,1,0,20.75,11,9.76,9.76,0,0,0,11,1.25Zm6.17,4.29a8.21,8.21,0,0,1,0,10.92l-2.3-2.3a5,5,0,0,0,0-6.32ZM4.83,16.46a8.21,8.21,0,0,1,0-10.92l2.3,2.3a5,5,0,0,0,0,6.32Zm.71.71,3-3-.36-.35a4,4,0,0,1,0-5.66l.36-.35-3-3a8.21,8.21,0,0,1,10.92,0l-3,3,.35.35a4,4,0,0,1,0,5.66l-.35.35,3,3a8.21,8.21,0,0,1-10.92,0Z"></path>
                    </svg></span></span>
                    <p style="color:white">Need Help?</p>
                </button>

                <script>
                    function toggleHelpSection() {
                        var helpSection = document.getElementById('helpSection');

                        if (helpSection.style.display === 'none' || helpSection.style.display === '') {
                            helpSection.style.display = 'block';
                        } else {
                            helpSection.style.display = 'none';
                        }
                    }
                </script>

            </div>

            <div id="helpSection" class="help-section" style="display: none;">
                <div class="help-title item">
                    <p class="title"><b>We are here to help!</b></p>
                    <p class="subtitle">Give us a call within our business hours or contact us via the contact form</p>
                </div>

                <div class="info-container item">
                    <div class="info">
                        <div class="icon"><span><svg width="14" height="14" viewBox="0 0 14 14" class="css-6su6fj" fill="none">
                                    <circle cx="7" cy="7" r="6.5" fill="white" stroke="black"></circle>
                                    <path d="M7 3.5V7L10 9.5" stroke="black" stroke-linecap="round"></path>
                                </svg></span></div>

                        <div class="text-info">
                            <p class="date">Monday - Friday</p>
                            <p class="time">9:00 am - 6:00 pm</p>
                        </div>
                    </div>

                    <div class="info">
                        <div class="icon"><span><svg width="16" height="16" viewBox="0 0 16 16" class="css-6su6fj">
                                    <path d="M9.17806 14.3095C9.40451 14.427 9.64853 14.4855 9.89003 14.4855L9.89084 14.4859C10.1608 14.4859 10.4283 14.4134 10.6668 14.2679L11.9088 13.5119C12.2513 13.3039 12.4918 12.9744 12.5863 12.5854C12.6808 12.1959 12.6183 11.7934 12.4098 11.4509L11.6303 10.1699C11.4218 9.82743 11.0924 9.58639 10.7033 9.49191C10.3133 9.39738 9.91137 9.45987 9.56886 9.6679L8.92537 10.0599C8.72885 10.1794 8.48089 10.1534 8.32286 9.99789C7.81042 9.49241 7.36089 8.92538 6.98739 8.31189C6.61343 7.69789 6.31594 7.03692 6.10291 6.34842C6.03897 6.1414 6.13245 5.9054 6.32594 5.7879L6.96943 5.3964C7.67594 4.9664 7.90042 4.04197 7.47042 3.33546L6.69094 2.05448C6.48246 1.71197 6.15298 1.47093 5.76397 1.37645C5.37449 1.28197 4.97146 1.34446 4.62949 1.55296L3.38798 2.30848C2.93647 2.58296 2.66699 3.05946 2.66699 3.58348C2.66753 5.13548 2.97353 7.48601 4.42499 9.87148C5.08006 10.948 6.56859 12.956 9.17806 14.3095Z" fill="white"></path>
                                    <mask id="path-2-inside-1_1254_2690" fill="white">
                                        <path d="M9.89003 14.4855C9.64853 14.4855 9.40451 14.427 9.17806 14.3095C6.56859 12.956 5.08006 10.948 4.42499 9.87148C2.97353 7.48601 2.66753 5.13548 2.66699 3.58348C2.66699 3.05946 2.93647 2.58296 3.38798 2.30848L4.62949 1.55296C4.97146 1.34446 5.37449 1.28197 5.76397 1.37645C6.15298 1.47093 6.48246 1.71197 6.69094 2.05448L7.47042 3.33546C7.90042 4.04197 7.67594 4.9664 6.96943 5.3964L6.32594 5.7879C6.13245 5.9054 6.03897 6.1414 6.10291 6.34842C6.31594 7.03692 6.61343 7.69789 6.98739 8.31189C7.36089 8.92538 7.81042 9.49241 8.32286 9.99789C8.48089 10.1534 8.72885 10.1794 8.92537 10.0599L9.56886 9.6679C9.91137 9.45987 10.3133 9.39738 10.7033 9.49191C11.0924 9.58639 11.4218 9.82743 11.6303 10.1699L12.4098 11.4509C12.6183 11.7934 12.6808 12.1959 12.5863 12.5854C12.4918 12.9744 12.2513 13.3039 11.9088 13.5119L10.6668 14.2679C10.4283 14.4134 10.1608 14.4859 9.89084 14.4859L9.89003 14.4855ZM5.40803 2.33346C5.31751 2.33346 5.22855 2.35846 5.14902 2.40648L3.90705 3.16247C3.75606 3.25445 3.66653 3.41148 3.66653 3.58299C3.66653 5.00699 3.94751 7.16392 5.27853 9.35153C5.87951 10.339 7.24453 12.1806 9.63759 13.4221C9.80457 13.5086 9.9941 13.5055 10.1456 13.4136L11.3876 12.6576C11.5016 12.5881 11.5821 12.4786 11.6136 12.3486C11.6451 12.2191 11.6241 12.0846 11.5551 11.9705L10.7751 10.6896C10.7056 10.5751 10.5961 10.4951 10.4661 10.4636C10.3361 10.4321 10.2021 10.4526 10.0881 10.5221L9.44456 10.914C8.85554 11.2721 8.10549 11.1885 7.62056 10.7105C7.04905 10.1475 6.54858 9.51554 6.13256 8.83254C5.71605 8.14754 5.38406 7.4116 5.14657 6.64454C4.94605 5.99604 5.21657 5.29254 5.80506 4.93454L6.44856 4.54303C6.68408 4.39954 6.75908 4.09152 6.61553 3.85606L5.83553 2.57507C5.76605 2.46059 5.65652 2.38059 5.52652 2.34908C5.48704 2.3396 5.44704 2.33461 5.40751 2.33461L5.40803 2.33346Z"></path>
                                    </mask>
                                    <path d="M9.89003 14.4855C9.64853 14.4855 9.40451 14.427 9.17806 14.3095C6.56859 12.956 5.08006 10.948 4.42499 9.87148C2.97353 7.48601 2.66753 5.13548 2.66699 3.58348C2.66699 3.05946 2.93647 2.58296 3.38798 2.30848L4.62949 1.55296C4.97146 1.34446 5.37449 1.28197 5.76397 1.37645C6.15298 1.47093 6.48246 1.71197 6.69094 2.05448L7.47042 3.33546C7.90042 4.04197 7.67594 4.9664 6.96943 5.3964L6.32594 5.7879C6.13245 5.9054 6.03897 6.1414 6.10291 6.34842C6.31594 7.03692 6.61343 7.69789 6.98739 8.31189C7.36089 8.92538 7.81042 9.49241 8.32286 9.99789C8.48089 10.1534 8.72885 10.1794 8.92537 10.0599L9.56886 9.6679C9.91137 9.45987 10.3133 9.39738 10.7033 9.49191C11.0924 9.58639 11.4218 9.82743 11.6303 10.1699L12.4098 11.4509C12.6183 11.7934 12.6808 12.1959 12.5863 12.5854C12.4918 12.9744 12.2513 13.3039 11.9088 13.5119L10.6668 14.2679C10.4283 14.4134 10.1608 14.4859 9.89084 14.4859L9.89003 14.4855ZM5.40803 2.33346C5.31751 2.33346 5.22855 2.35846 5.14902 2.40648L3.90705 3.16247C3.75606 3.25445 3.66653 3.41148 3.66653 3.58299C3.66653 5.00699 3.94751 7.16392 5.27853 9.35153C5.87951 10.339 7.24453 12.1806 9.63759 13.4221C9.80457 13.5086 9.9941 13.5055 10.1456 13.4136L11.3876 12.6576C11.5016 12.5881 11.5821 12.4786 11.6136 12.3486C11.6451 12.2191 11.6241 12.0846 11.5551 11.9705L10.7751 10.6896C10.7056 10.5751 10.5961 10.4951 10.4661 10.4636C10.3361 10.4321 10.2021 10.4526 10.0881 10.5221L9.44456 10.914C8.85554 11.2721 8.10549 11.1885 7.62056 10.7105C7.04905 10.1475 6.54858 9.51554 6.13256 8.83254C5.71605 8.14754 5.38406 7.4116 5.14657 6.64454C4.94605 5.99604 5.21657 5.29254 5.80506 4.93454L6.44856 4.54303C6.68408 4.39954 6.75908 4.09152 6.61553 3.85606L5.83553 2.57507C5.76605 2.46059 5.65652 2.38059 5.52652 2.34908C5.48704 2.3396 5.44704 2.33461 5.40751 2.33461L5.40803 2.33346Z" fill="black"></path>
                                    <path d="M9.89003 14.4855L10.4806 13.4409L10.2058 13.2855H9.89003V14.4855ZM9.17806 14.3095L9.73073 13.2443L9.73057 13.2442L9.17806 14.3095ZM4.42499 9.87148L3.39985 10.4952L3.39986 10.4953L4.42499 9.87148ZM2.66699 3.58348H1.46699L1.46699 3.58389L2.66699 3.58348ZM3.38798 2.30848L4.01134 3.33387L4.01181 3.33358L3.38798 2.30848ZM4.62949 1.55296L5.25331 2.57806L5.25416 2.57755L4.62949 1.55296ZM5.76397 1.37645L6.04717 0.210348L6.04686 0.210271L5.76397 1.37645ZM6.69094 2.05448L7.71607 1.43069L7.71598 1.43055L6.69094 2.05448ZM7.47042 3.33546L6.44529 3.95925L6.44535 3.95935L7.47042 3.33546ZM6.96943 5.3964L7.59315 6.42157L7.59332 6.42147L6.96943 5.3964ZM6.32594 5.7879L6.9488 6.8136L6.94966 6.81307L6.32594 5.7879ZM6.10291 6.34842L4.95636 6.70257L4.95653 6.70312L6.10291 6.34842ZM6.98739 8.31189L8.01238 7.68788L8.01227 7.68769L6.98739 8.31189ZM8.32286 9.99789L7.48015 10.8522L7.48114 10.8532L8.32286 9.99789ZM8.92537 10.0599L9.54895 11.0851L9.54963 11.0847L8.92537 10.0599ZM9.56886 9.6679L8.94592 8.64225L8.9446 8.64306L9.56886 9.6679ZM10.7033 9.49191L10.9865 8.32581L10.986 8.32568L10.7033 9.49191ZM11.6303 10.1699L12.6554 9.54615L12.6554 9.546L11.6303 10.1699ZM12.4098 11.4509L11.3847 12.0747L11.3848 12.0749L12.4098 11.4509ZM12.5863 12.5854L13.7524 12.8686L13.7525 12.8683L12.5863 12.5854ZM11.9088 13.5119L11.2859 12.4863L11.2849 12.4869L11.9088 13.5119ZM10.6668 14.2679L10.0429 13.2429L10.0418 13.2435L10.6668 14.2679ZM9.89084 14.4859L9.30024 15.5305L9.5751 15.6859H9.89084V14.4859ZM5.40803 2.33346L6.49765 2.8362L7.28327 1.13346H5.40803V2.33346ZM5.14902 2.40648L4.52876 1.37921L4.52508 1.38145L5.14902 2.40648ZM3.90705 3.16247L3.28311 2.13743L3.28274 2.13766L3.90705 3.16247ZM5.27853 9.35153L4.25337 9.97527L4.25344 9.97539L5.27853 9.35153ZM9.63759 13.4221L9.085 14.4873L9.08555 14.4875L9.63759 13.4221ZM10.1456 13.4136L10.7683 14.4394L10.7696 14.4386L10.1456 13.4136ZM11.3876 12.6576L12.0115 13.6826L12.0121 13.6823L11.3876 12.6576ZM11.6136 12.3486L10.4476 12.0648L10.4473 12.0659L11.6136 12.3486ZM11.5551 11.9705L12.5817 11.3492L12.58 11.3464L11.5551 11.9705ZM10.7751 10.6896L9.74924 11.3122L9.75015 11.3136L10.7751 10.6896ZM10.4661 10.4636L10.1834 11.6298L10.1834 11.6298L10.4661 10.4636ZM10.0881 10.5221L10.7123 11.5469L10.7125 11.5468L10.0881 10.5221ZM9.44456 10.914L10.0679 11.9395L10.0688 11.9389L9.44456 10.914ZM7.62056 10.7105L8.46293 9.8559L8.46272 9.85569L7.62056 10.7105ZM6.13256 8.83254L5.10722 9.45598L5.10771 9.45679L6.13256 8.83254ZM5.14657 6.64454L4.00012 6.99903L4.00025 6.99945L5.14657 6.64454ZM5.80506 4.93454L6.42873 5.95974L6.42878 5.95971L5.80506 4.93454ZM6.44856 4.54303L7.07228 5.5682L7.07292 5.56781L6.44856 4.54303ZM6.61553 3.85606L5.59059 4.48015L5.59091 4.48069L6.61553 3.85606ZM5.83553 2.57507L4.80968 3.19767L4.81059 3.19916L5.83553 2.57507ZM5.52652 2.34908L5.80917 1.18284L5.80668 1.18225L5.52652 2.34908ZM5.40751 2.33461L4.31789 1.83187L3.53227 3.53461H5.40751V2.33461ZM9.89003 13.2855C9.84289 13.2855 9.78821 13.2741 9.73073 13.2443L8.62539 15.3746C9.02082 15.5798 9.45416 15.6855 9.89003 15.6855V13.2855ZM9.73057 13.2442C7.38343 12.0268 6.03823 10.2142 5.45012 9.24769L3.39986 10.4953C4.12188 11.6818 5.75375 13.8852 8.62555 15.3747L9.73057 13.2442ZM5.45014 9.24772C4.14426 7.10152 3.86747 4.98438 3.86699 3.58306L1.46699 3.58389C1.46758 5.28657 1.80279 7.8705 3.39985 10.4952L5.45014 9.24772ZM3.86699 3.58348C3.86699 3.48285 3.91416 3.39294 4.01134 3.33387L2.76462 1.28308C1.95879 1.77297 1.46699 2.63608 1.46699 3.58348H3.86699ZM4.01181 3.33358L5.25331 2.57806L4.00566 0.527852L2.76415 1.28337L4.01181 3.33358ZM5.25416 2.57755C5.32355 2.53524 5.4 2.52296 5.48107 2.54263L6.04686 0.210271C5.34897 0.0409789 4.61937 0.153685 4.00482 0.528365L5.25416 2.57755ZM5.48076 2.54255C5.55967 2.56172 5.6226 2.60728 5.6659 2.67841L7.71598 1.43055C7.34231 0.816657 6.74629 0.38014 6.04717 0.210348L5.48076 2.54255ZM5.66581 2.67827L6.44529 3.95925L8.49555 2.71167L7.71607 1.43069L5.66581 2.67827ZM6.44535 3.95935C6.53111 4.10025 6.4854 4.28621 6.34555 4.37133L7.59332 6.42147C8.86648 5.64658 9.26973 3.98369 8.49549 2.71158L6.44535 3.95935ZM6.34571 4.37123L5.70222 4.76273L6.94966 6.81307L7.59315 6.42157L6.34571 4.37123ZM5.70308 4.76221C5.06652 5.14877 4.72088 5.94019 4.95636 6.70257L7.24946 5.99428C7.35705 6.3426 7.19837 6.66204 6.9488 6.8136L5.70308 4.76221ZM4.95653 6.70312C5.19861 7.48551 5.53677 8.23707 5.96252 8.9361L8.01227 7.68769C7.69009 7.15871 7.43327 6.58833 7.24929 5.99372L4.95653 6.70312ZM5.9624 8.9359C6.38738 9.63397 6.89828 10.2782 7.48015 10.8522L9.16557 9.14358C8.72256 8.70659 8.33439 8.2168 8.01238 7.68788L5.9624 8.9359ZM7.48114 10.8532C8.04881 11.4118 8.90441 11.4771 9.54895 11.0851L8.30178 9.03462C8.55328 8.88165 8.91296 8.89498 9.16458 9.14261L7.48114 10.8532ZM9.54963 11.0847L10.1931 10.6927L8.9446 8.64306L8.3011 9.03503L9.54963 11.0847ZM10.1918 10.6935C10.2629 10.6504 10.3392 10.6384 10.4207 10.6581L10.986 8.32568C10.2875 8.15636 9.55984 8.26938 8.94592 8.64225L10.1918 10.6935ZM10.4201 10.658C10.499 10.6772 10.562 10.7227 10.6053 10.7939L12.6554 9.546C12.2817 8.93211 11.6857 8.4956 10.9865 8.32581L10.4201 10.658ZM10.6052 10.7937L11.3847 12.0747L13.4349 10.8271L12.6554 9.54615L10.6052 10.7937ZM11.3848 12.0749C11.4278 12.1455 11.4397 12.2218 11.4201 12.3025L13.7525 12.8683C13.9219 12.17 13.8088 11.4413 13.4348 10.827L11.3848 12.0749ZM11.4202 12.3022C11.4008 12.3822 11.3552 12.4442 11.2859 12.4863L12.5317 14.5376C13.1474 14.1636 13.5829 13.5667 13.7524 12.8686L11.4202 12.3022ZM11.2849 12.4869L10.0429 13.2429L11.2908 15.2929L12.5327 14.5369L11.2849 12.4869ZM10.0418 13.2435C9.99492 13.2721 9.94429 13.2859 9.89084 13.2859V15.6859C10.3774 15.6859 10.8618 15.5547 11.2919 15.2923L10.0418 13.2435ZM10.4814 13.4413L10.4806 13.4409L9.29943 15.5301L9.30024 15.5305L10.4814 13.4413ZM5.40803 1.13346C5.09397 1.13346 4.7912 1.22076 4.52876 1.37921L5.76927 3.43375C5.66591 3.49617 5.54106 3.53346 5.40803 3.53346V1.13346ZM4.52508 1.38145L3.28311 2.13743L4.53098 4.18751L5.77296 3.43152L4.52508 1.38145ZM3.28274 2.13766C2.78583 2.44037 2.46653 2.97944 2.46653 3.58299H4.86653C4.86653 3.84352 4.72629 4.06853 4.53135 4.18729L3.28274 2.13766ZM2.46653 3.58299C2.46653 5.158 2.77678 7.54841 4.25337 9.97527L6.30368 8.72778C5.11824 6.77944 4.86653 4.85598 4.86653 3.58299H2.46653ZM4.25344 9.97539C4.92131 11.0728 6.42962 13.1097 9.085 14.4873L10.1902 12.3569C8.05944 11.2515 6.83771 9.60526 6.30361 8.72766L4.25344 9.97539ZM9.08555 14.4875C9.59564 14.7518 10.2323 14.7648 10.7683 14.4394L9.52292 12.3878C9.75593 12.2463 10.0135 12.2653 10.1896 12.3566L9.08555 14.4875ZM10.7696 14.4386L12.0115 13.6826L10.7637 11.6325L9.52168 12.3885L10.7696 14.4386ZM12.0121 13.6823C12.3959 13.4484 12.6728 13.0729 12.7798 12.6312L10.4473 12.0659C10.4914 11.8842 10.6073 11.7278 10.7631 11.6329L12.0121 13.6823ZM12.7795 12.6323C12.8865 12.1928 12.814 11.733 12.5817 11.3492L10.5285 12.5919C10.4342 12.4361 10.4037 12.2454 10.4476 12.0648L12.7795 12.6323ZM12.58 11.3464L11.8 10.0655L9.75015 11.3136L10.5301 12.5946L12.58 11.3464ZM11.8009 10.067C11.5656 9.67925 11.1884 9.4039 10.7487 9.29733L10.1834 11.6298C10.0037 11.5862 9.84558 11.4709 9.74924 11.3122L11.8009 10.067ZM10.7488 9.29734C10.3124 9.19156 9.85171 9.26082 9.46359 9.49734L10.7125 11.5468C10.5524 11.6443 10.3598 11.6726 10.1834 11.6298L10.7488 9.29734ZM9.46379 9.49722L8.82029 9.88919L10.0688 11.9389L10.7123 11.5469L9.46379 9.49722ZM8.82126 9.8886C8.69361 9.9662 8.54904 9.94078 8.46293 9.8559L6.77818 11.5652C7.66194 12.4362 9.01748 12.5779 10.0679 11.9395L8.82126 9.8886ZM8.46272 9.85569C7.96134 9.36175 7.52222 8.80722 7.1574 8.20829L5.10771 9.45679C5.57494 10.2239 6.13676 10.9333 6.77839 11.5654L8.46272 9.85569ZM7.15789 8.20909C6.79242 7.60802 6.50114 6.96225 6.29288 6.28962L4.00025 6.99945C4.26699 7.86096 4.63968 8.68705 5.10722 9.45598L7.15789 8.20909ZM6.29301 6.29005C6.25807 6.17704 6.30091 6.0375 6.42873 5.95974L5.1814 3.90933C4.13223 4.54758 3.63403 5.81504 4.00012 6.99903L6.29301 6.29005ZM6.42878 5.95971L7.07228 5.5682L5.82484 3.51786L5.18134 3.90937L6.42878 5.95971ZM7.07292 5.56781C7.87355 5.08001 8.12932 4.03384 7.64014 3.23143L5.59091 4.48069C5.38884 4.14921 5.4946 3.71906 5.8242 3.51825L7.07292 5.56781ZM7.64047 3.23196L6.86047 1.95098L4.81059 3.19916L5.59059 4.48015L7.64047 3.23196ZM6.86138 1.95247C6.62608 1.56477 6.24889 1.28942 5.80916 1.18285L5.24387 3.51532C5.06415 3.47176 4.90603 3.35642 4.80968 3.19767L6.86138 1.95247ZM5.80668 1.18225C5.68192 1.15229 5.54784 1.13461 5.40751 1.13461V3.53461C5.34624 3.53461 5.29216 3.52692 5.24635 3.51592L5.80668 1.18225ZM6.49712 2.83734L6.49765 2.8362L4.31842 1.83073L4.31789 1.83187L6.49712 2.83734Z" fill="{fill}" mask="url(#path-2-inside-1_1254_2690)"></path>
                                </svg></span></div>

                        <div class="text-info">
                            <p class="phone">+84 768 741 821</p>
                        </div>
                    </div>

                    <div class="info">
                        <div class="icon"><span><svg width="26" height="26" viewBox="0 0 26 26" class="css-6su6fj">
                                    <path d="M17.7286 8H9.12857C7.95299 8 7 8.95299 7 10.1286V15.8714C7 17.047 7.95299 18 9.12857 18H17.7286C18.9042 18 19.8571 17.047 19.8571 15.8714V10.1286C19.8571 8.95299 18.9042 8 17.7286 8Z" fill="white" stroke="black" stroke-miterlimit="10"></path>
                                    <path d="M12.1572 13.7999L7.15723 10.6499V10.1142C7.15723 9.13563 7.95008 8.34277 8.92866 8.34277H17.7858C18.7644 8.34277 19.5572 9.13563 19.5572 10.1142V10.6356L14.5572 13.7999C13.8287 14.2642 12.8929 14.2642 12.1572 13.7999V13.7999Z" fill="white" stroke="black" stroke-width="0.75" stroke-miterlimit="10"></path>
                                </svg></span></div>

                        <div class="text-info">
                            <p class="mail">nguyenvuminhnhat191003@gmail.com</p>
                        </div>
                    </div>
                </div>

                <div class="button-container item">
                    <button class="contactBtn" onclick="navigateToContact()">
                        Contact us
                    </button>
                    <script>
                        function navigateToContact() {
                            window.location.href = "{{URL::to('/Contact')}}"; // Replace with the desired page URL
                        }
                    </script>
                    <button class="faqBtn" disabled>
                        FAQ
                    </button>
                </div>
            </div>
        </div>
        <div id="deleteSection" class="delete-section" style="display: none;">

            <div class="css-anjnjw e1phn11p0">
                <div class="css-xwbmsg e1phn11p1"><img src="\Frontend\Image\Landlords\list.png" class="css-lx0vc9" style="width:30px; height:30px"></div>
            </div>
            <div class="delete-title item">
                <h3 class="title"><b>Are you sure you want to delete this listing?</b></h3>
                <p class="subtitle">You will lose all the progress done until now</p>
            </div>


            <div class="button-container item">

                <button class="cancelBtn" onclick="toggleDeleteSection()">
                    Cancel
                </button>

                <button class="deleteBtn" onclick="navigateToLandlordDashboard()">
                    Delete
                </button>
                <script>
                    function navigateToLandlordDashboard() {
                        window.location.href = "{{ URL::to('/landlord/dashboard') }}"; // Replace with the desired page URL
                    }
                </script>
            </div>
        </div>

        <div id="overlay" class="overlay" style="display: none;"></div>
    </div>
</body>

</html>