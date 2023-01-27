  <!-- Modal -->
  <div class="modal fade" id="modal-edit" tabindex="-1" aria-labelledby="modalEdit" aria-hidden="true">
	<div class="modal-dialog">
	   	<div class="modal-content">
			<div class="modal-body">
                <div class="popup__container">
                    <h1 class="title-secondary">Edit Class Details</h1>
                    <form class="form__container">
                        <div class="popup__image--container">
                            <div class="popup__input-container">
                                <label for="photo">Select Class Image</label><input class="file__input" id="photo" name="photo" type="file">
                            </div>
                        </div>
                        <div class="popup__input-container">
                            <div class="analytics__input--container">
                                <label for="course">Courses</label><select class="analytics__input--dropdown" id="course" name="course">
                                    <option value="0">
                                        Per Day
                                    </option>
                                    <option value="1">
                                        Per Month
                                    </option>
                                    <option value="2">
                                        Per Year
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="popup__input-container">
                            <div class="analytics__input--container">
                                <label for="className">Class</label><select class="analytics__input--dropdown" id="className" name="className">
                                    <option value="0">
                                        Per Day
                                    </option>
                                    <option value="1">
                                        Per Month
                                    </option>
                                    <option value="2">
                                        Per Year
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="popup__input-container">
                            <label for="syllabus">Syllabus</label><input accept=".pdf" class="file__input" id="syllabus" name="syllabus" type="file">
                        </div>
                        <div class="popup__input-container">
                            <label for="timeFrame">Time Frame</label><input accept=".pdf" class="file__input" id="timeFrame" name="timeFrame" type="file">
                        </div>
                        <div class="popup__input-container">
                            <label for="book">Book</label><input accept=".pdf" class="file__input" id="book" name="book" type="file">
                        </div>
                        <div class="popup__input-container">
                            <label for="book">Link to Book</label><input class="popup__input" id="booklink" name="linkToBook" placeholder="Link to Book" type="url" value="">
                        </div>
                        <div class="popup__input-container">
                            <label for="canvas">Link to Canvas</label><input class="popup__input" id="canvas" name="linkToCanvas" placeholder="Link to Canvas" type="url" value="">
                        </div>
                        <div class="popup__button-container">
                            <button class="popup__button bordered__button" type="submit">Confirm</button>
                        </div>
                    </form>
                    <div class="popup__button-container" data-bs-dismiss="modal" aria-label="Close">
                        <button class="popup__button nevermind bordered__button warning__button">Nevermind</button>
                    </div>
                </div>
			</div>
	  	</div>
	</div>
</div>