<div class="user__filters">
	<div class="popup"></div>
	<div class="user__filters-options--box">
		<div class="user__filters-options">
			<div>
				<label for="name">Name</label><input class="filters__input" id="name" name="name" placeholder="First name and/or Last name" type="text" value="">
			</div>
			<div>
				<label for="inFeedBack">In Feedback</label><input class="filters__input" id="inFeedBack" name="inFeedBack" placeholder="Email address" type="text" value="">
			</div>
			<div>
				<div class="analytics__input--container">
					<label for="resultingFeedback">Resulting Feedback</label><select class="analytics__input--dropdown" id="resultingFeedback" name="resultingFeedback">
						<option value="0">
							Positive
						</option>
						<option value="1">
							Negative
						</option>
						<option value="2">
							Neutral
						</option>
					</select>
				</div>
			</div>
		</div>
		<div class="user__filters-options">
			<div class="chip__box">
				<label for="number">Courses</label>
				<div class="chips"></div>
				<div class="search">
					<div class="search__box">
						<input class="search__input" placeholder="Type to Search Courses" type="text" value="">
						<div class="search__clear">
							<svg aria-hidden="true" class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-h6eos6" data-testid="ClearIcon" viewbox="0 0 24 24">
							<path d="M19 6.41 17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path></svg>
						</div>
					</div>
				</div>
			</div>
			<div class="chip__box">
				<label for="number">Classes</label>
				<div class="chips"></div>
				<div class="search">
					<div class="search__box">
						<input class="search__input" placeholder="Type to Search Class" type="text" value="">
						<div class="search__clear">
							<svg aria-hidden="true" class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-h6eos6" data-testid="ClearIcon" viewbox="0 0 24 24">
							<path d="M19 6.41 17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path></svg>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="user__filter-buttons">
		<button class="bordered__button warning__button">Reset Filter</button><button class="bordered__button">Filter</button>
	</div>
</div>